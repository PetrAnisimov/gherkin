<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Address;
use Page\Cart\BuySelector;
use Page\Cart\Cart;
use Page\Cart\CartStage2;
use Page\Cart\CartStage3;
use Page\Cart\CartStage4;
use Page\Login;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Проход всех шагов корзины")
 */
class OrderCest
{
    /**
     * @var Login
     */
    public $login;

    /**
     * @var Cart
     */
    public $cart;

    private $config;

    /**
     * @var BuySelector
     */
    private $buySelector;

    /**
     * @var CartStage2
     */
    private $cartStage2;

    /**
     * @var Address
     */
    private $address;

    /**
     * @var CartStage3
     */
    private $cartStage3;

    /**
     * @var CartStage4
     */
    private $cartStage4;

    private $testName;

    /**
     * @var Main
     */
    private $main;

    /**
     * @Description("Вход в аккаунт, запускается перед каждым тестом")
     *
     * @param AcceptanceTester $I
     * @param Acceptance $acceptance
     * @param Scenario $scenario
     *
     * @throws Exception
     */
    public function _before(AcceptanceTester $I, Acceptance $acceptance, Scenario $scenario)
    {
        $this->testName = $scenario->current('name');
        $this->config = $acceptance->prepareTest($I, $this->testName);

        $this->login = new Login($I, $this->config);
        $this->cart = new Cart($I, $this->config);
        $this->buySelector = new BuySelector($I, $this->config);
        $this->cartStage2 = new CartStage2($I, $this->config);
        $this->cartStage3 = new CartStage3($I, $this->config);
        $this->cartStage4 = new CartStage4($I, $this->config);
        $this->address = new Address($I, $this->config);
        $this->main = new Main($I, $this->config);

        $this->main->addInUrlAuthHttp($I);
        $I->amOnUrl($this->config['url']);
        $this->main->retryClickAfterRefreshPage($I);
        $this->main->modalClose($this->testName);
        $this->main->cookieClose();
        if (!isset($this->config[$this->testName]['guestTest'])) {
            $acceptance->loginConfirm($this->testName, $this->login);
            $I->waitForElement($this->config[$this->testName]['profile'], 5);
            $I->tryToseePageHasElement($this->config[$this->testName]['profile']);
        }
        if (isset($this->config[$this->testName]['addToUrl'])) {
            $I->amOnPage($this->config[$this->testName]['addToUrl']);
        }
    }

    /**
     * @group smoke
     * @Description("Гостевой чекаут
     *  ->  Зайти на странице без авторизации
     *  ->  Добавить товары в каталог
     *  ->  Перейти в корзину
     *  ->  Пройти все шаги, до формы ввода данных карты и вернутся обратно")
     *
     * @Title("guestOrderTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function guestOrderTest(AcceptanceTester $I)
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->selectItemQtyByPosition($this->testName);
        $this->cart->gotoCart($this->testName);

        if (isset($this->config[$this->testName]['textWithСontinueAsGuestLoc'])) {
            $I->waitForElementVisible($this->config[$this->testName]['textWithСontinueAsGuestLoc'], 10);
            $I->click($this->config[$this->testName]['textWithСontinueAsGuestLoc']);
        }
        $I->waitForElementVisible($this->config[$this->testName]['insideCartLoc'], 20);
        if (isset($this->config[$this->testName]['itemStage1'])) {
            $itemsBasketStage = $this->cart->grabNPVS(
                $this->config[$this->testName]['itemStage1'],
                $this->config[$this->testName]['priceStage1'],
                $this->config[$this->testName]['qtyStage1'],
                $this->config[$this->testName]['subtotalStage1']
            );
        }
        if (isset($this->config[$this->testName]['grandTotalStage1'])) {
            $totalBasketStage1 = $this->cart->grabGrandTotal(
                $this->config[$this->testName]['grandTotalStage1']
            );
        }
        $totalBasketStageWithPromoCode = $this->cartStage3->setPromoCode($this->testName, $totalBasketStage1);
        $discountPromoCode = $totalBasketStage1 - $totalBasketStageWithPromoCode;
        if (isset($this->config[$this->testName]['grandTotalStage1'])) {
            $this->address->setLocation(
                'Санкт-Петербург',
                $this->config[$this->testName]['cityLoc'],
                $this->config[$this->testName]['cityListSelectorLoc']
            );
        }
        //for SS
        $this->cartStage2->setDate($this->testName);
        $this->address->setLocation(
            'ул Ленина, д 20',
            $this->config[$this->testName]['streetLoc'],
            $this->config[$this->testName]['streetListSelectorLoc']
        );

        $this->cart->goToStep2($this->testName);

        //for NN
        $this->cartStage2->chooseDeliveryType($this->testName);
        $this->cartStage2->chooseTermsOfDelivery($this->testName);
        if (isset($this->config[$this->testName]['termsOfDeliveryAddStage'])) {
            $termsOfDeliveryAddStage = $this->cartStage2->grabTermsOfDelivery(
                $this->config[$this->testName]['termsOfDeliveryAddStage']
            );
        }

        $this->cartStage2->setFLP($this->testName, 'SayMyName');
        $this->cartStage2->setLastName($this->testName, 'SayMyName');
        $this->cartStage2->setEmail($this->testName, rand() . '@mygento.ru');
        $this->address->setTelephone($this->testName, '(654) 646-4646');

        //for NN
        $this->cartStage2->goToStep3($this->testName);

        $this->cartStage3->choosePaymentMethod($this->testName);
        if (empty($totalBasketStageWithPromoCode)) {
            $totalDiscount = round($totalBasketStage1 * 0.05);
        } else {
            $totalDiscount = round($discountPromoCode + ($totalBasketStage1 - $discountPromoCode) * 0.05);
            $totalBasketStage1 = $totalBasketStageWithPromoCode;
        }
        $totalBasketStage = $this->cartStage3->setDiscountPayOnline($this->testName, $totalBasketStage1);
        $payPaymentStage = $this->cartStage3->grabPaymentMethod(
            $this->config[$this->testName]['paymentMethodStage3']
        );
        $this->cartStage3->goToStep4($this->testName);
        if (isset($this->config[$this->testName]['grandTotalStage4'])) {
            $totalApproveStage = $this->cart->grabGrandTotal(
                $this->config[$this->testName]['grandTotalStage4']
            );
        }
        if (isset($this->config[$this->testName]['grandTotalDelivery'])) {
            $totalDeliveryApproveStage = $this->cart->grabTotalDelivery(
                $this->config[$this->testName]['grandTotalDelivery']
            );
            $defaultDelivery = $totalDeliveryApproveStage == !0 ? '200' : 0;
            $totalDiscountApproveStage = $this->cart->grabTotalDiscount(
                $this->config[$this->testName]['grandTotalDiscount']
            );
            $this->cartStage4->comparisonOfTotalDelivery($defaultDelivery, $totalDeliveryApproveStage);
            $this->cartStage4->comparisonOfTotalDiscount($totalDiscount, $totalDiscountApproveStage);
            $totalDiscountAndDelivery = round($totalBasketStage + $totalDeliveryApproveStage);
            $this->cartStage4->comparisonOfGrandTotal($totalDiscountAndDelivery, $totalApproveStage);
            $I->scrollToTop();
            $this->main->addClick($I, $this->testName);
            $this->cart->deleteAllCart($this->testName);
        }
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Перейти в корзину
     *     -> Продолжить
     *     -> Выбрать pick-up point
     *     -> Выбрать оплату
     *     -> Комментарий - ВНИМАНИЕ! ТЕСТОВАЯ ЗАКУПКА!
     *     -> Проверить на соответствие выбранным параметрам: цена / товар / порядок")
     *
     * @Title("checkInCheckOutTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function checkInCheckOutTest(AcceptanceTester $I)
    {
        $this->cart->addInCatalog($this->testName);
        //selectItemQtyByPosition for SS
        $this->buySelector->selectItemQtyByPosition($this->testName);
        $this->buySelector->selectItemQty($this->testName);
        $this->cart->gotoCart($this->testName);
        $I->waitForElementVisible($this->config[$this->testName]['insideCartLoc'], 20);
        // NN and NYX
        if (isset($this->config[$this->testName]['itemStage1'])) {
            $itemsBasketStage = $this->cart->grabNPVS(
                $this->config[$this->testName]['itemStage1'],
                $this->config[$this->testName]['priceStage1'],
                $this->config[$this->testName]['qtyStage1'],
                $this->config[$this->testName]['subtotalStage1']
            );
        }
        $totalBasketStage1 = $this->cart->grabGrandTotal(
            $this->config[$this->testName]['grandTotalStage1']
        );
        //for SS
        $totalBasketStageWithPromoCode = $this->cartStage3->setPromoCode($this->testName, $totalBasketStage1);
        $discountPromoCode = $totalBasketStage1 - $totalBasketStageWithPromoCode;
        if (empty($totalBasketStageWithPromoCode)) {
            $totalDiscount = round($totalBasketStage1 * 0.05);
            codecept_debug($totalDiscount);
        } else {
            $totalDiscount = round($discountPromoCode + ($totalBasketStage1 - $discountPromoCode) * 0.05);
            codecept_debug($totalDiscount);
            $totalBasketStage1 = $totalBasketStageWithPromoCode;
            codecept_debug($totalBasketStage1);
        }
        // SS
        $this->cartStage2->setDate($this->testName);
        //FOR ALL SHOPS
        $this->cart->goToStep2($this->testName);

        //FOR ALL SHOPS
        if (isset($this->config[$this->testName]['shippingMethod'])) {
            $I->waitForPageLoad(2);
            $I->seePageHasElement($this->config[$this->testName]['shippingMethod']) ?
            $this->cartStage2->chooseDeliveryType($this->testName) : $this->cartStage2->choosePickUpPoint($this->testName);
        }
        //ONE CLICK TO SHIPPING METHOD

        //click for SS
        isset($this->config[$this->testName]['contactInfo']) ? $I->waitAndClick($this->config[$this->testName]['contactInfo'], 5) : null;
        //CHOOSE FOR NN
        $this->cartStage2->chooseTermsOfDelivery($this->testName);
        //GRAB TERM DELIVERY FOR ALL SHOPS
        $termsOfDeliveryAddStage = $this->cartStage2->grabTermsOfDelivery(
            $this->config[$this->testName]['termsOfDeliveryAddStage']
        );
        //FOR NN FIELD NAME FIRSTNAME AND TELEPHONE
        $this->cartStage2->setFLP($this->testName, 'SayMyName');
        $this->address->setTelephone($this->testName, '(654) 646-4646');
        //FOR NN AND NYX goTO CHOOSE PAYMENT METHOD
        $this->cartStage2->goToStep3($this->testName);
        //FOR ALL SHOPS
        $this->cartStage3->choosePaymentMethod($this->testName);
        //FOR SS
        $totalBasketStage = $this->cartStage3->setDiscountPayOnline($this->testName, $totalBasketStage1);
        //FOR ALL SHOPS
        $payPaymentStage = $this->cartStage3->grabPaymentMethod(
            $this->config[$this->testName]['paymentMethodStage3']
        );
        //FOR BAT, NN
        $this->cartStage3->goToStep4($this->testName);
        $this->cartStage4->makeComment($this->testName);
        //FOR NN , NYX
        if (isset($this->config[$this->testName]['itemStage4'])) {
            !$I->seePageHasElement($this->config[$this->testName]['itemStage4']) ? $I->click($this->config[$this->testName]['clickItemInCart4']) : '';
            $itemsApproveStage = $this->cart->grabNPVS(
                $this->config[$this->testName]['itemStage4'],
                $this->config[$this->testName]['priceStage4'],
                $this->config[$this->testName]['qtyStage4'],
                $this->config[$this->testName]['subtotalStage4']
            );
        }
        //FOR ALL SHOPS
        $termsOfDeliveryApproveStage = $this->cartStage2->grabTermsOfDelivery(
            $this->config[$this->testName]['termsOfDeliveryApproveStage']
        );
        $payApproveStage = $this->cartStage3->grabPaymentMethod(
            $this->config[$this->testName]['paymentMethodStage4']
        );
        $totalApproveStage = $this->cart->grabGrandTotal(
            $this->config[$this->testName]['grandTotalStage4']
        );
        $totalDeliveryApproveStage = $this->cart->grabTotalDelivery(
            $this->config[$this->testName]['grandTotalDelivery']
        );
        $defaultDelivery = $totalDeliveryApproveStage == !0 ? '200' : 0;
        $this->cartStage4->comparisonOfTotalDelivery($defaultDelivery, $totalDeliveryApproveStage);
        //for SS DISCOUNT
        isset($this->config[$this->testName]['grandTotalDiscount']) ? $totalDiscountApproveStage = $this->cart->grabTotalDiscount($this->config[$this->testName]['grandTotalDiscount']) : '';
        isset($this->config[$this->testName]['grandTotalDiscount']) ? $this->cartStage4->comparisonOfTotalDiscount($totalDiscount, $totalDiscountApproveStage) : '';
        $totalDiscountAndDelivery = round($totalBasketStage + $totalDeliveryApproveStage);
        isset($this->config[$this->testName]['grandTotalDiscount']) ?
        $this->cartStage4->comparisonOfGrandTotal($totalDiscountAndDelivery, $totalApproveStage) : $this->cartStage4->comparisonOfGrandTotal($totalBasketStage1, $totalApproveStage);
        //for NN CHECK FIELDS FIRSTNAME,TELEPHONE
        $this->cartStage4->comparisonOfFLP($this->testName);
        $this->cartStage4->comparisonOfTelephone($this->testName);
        //for ALL SHOPS
        isset($this->config[$this->testName]['itemStage1']) ? $this->cartStage4->comparisonOfGoods($itemsBasketStage, $itemsApproveStage) : '';
        $this->cartStage4->comparisonOfTermsOfDelivery($termsOfDeliveryAddStage, $termsOfDeliveryApproveStage);
        $this->cartStage4->comparisonOfPaymentMethod($payPaymentStage, $payApproveStage);

        $I->scrollToTop();
        //CANCEL PROMOCODE
        isset($this->config[$this->testName]['promoCodeButton']) ? $I->click($this->config[$this->testName]['promoCodeButton']) : '';
        $this->main->addClick($I, $this->testName);
        $this->cart->deleteAllCart($this->testName);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Перейти в корзину
     *     -> Продолжить
     *     -> Выбрать pick-up point
     *     -> Выбрать оплату
     *     -> Комментарий - ВНИМАНИЕ! ТЕСТОВАЯ ЗАКУПКА!
     *     -> Проверить доставку")
     *
     * @Title("checkPickupPoint")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function checkPickupPoint(AcceptanceTester $I)
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->selectItemQty($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->goToStep2($this->testName);
        $this->cartStage2->chooseDeliveryType($this->testName);
        $this->cartStage2->choosePickUpPoint($this->testName);
        $this->cartStage2->setFLP($this->testName, 'SayMyName');
        $this->address->setTelephone($this->testName, '(654) 646-4646');
        $this->cartStage2->goToStep3($this->testName);
        $this->cartStage3->choosePaymentMethod($this->testName);
        $this->cartStage3->goToStep4($this->testName);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в корзину
     *     -> Продолжить
     *     -> Выбрать курьерская доставка
     *     -> Выбрать оплату
     *     -> Проверить как она применилась
     *     -> Выбрать другую оплату
     *     -> Проверить как она применилась
     *     -> Проверить данные")
     *
     * @Title("checkPaymethods")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function checkPaymethods(AcceptanceTester $I)
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->selectItemQty($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->goToStep2($this->testName);
        $I->seePageHasElement($this->config[$this->testName]['shippingMethod']) ?
        $this->cartStage2->chooseDeliveryType($this->testName) : $this->cartStage2->choosePickUpPoint($this->testName);
        $this->cartStage2->infoDelivery($this->testName);
        $this->cartStage3->goToStep4($this->testName);
        $this->cartStage3->choosePaymentMethod($this->testName);
        $payApproveStage1 = $this->cartStage3->grabPaymentMethod(
            $this->config[$this->testName]['paymentMethodStage1']
        );
        $I->click($this->config[$this->testName]['toStep4']);
        $payPaymentStage1 = $this->cartStage3->grabPaymentMethod(
            $this->config[$this->testName]['paymentMethodStage2']
        );
        $this->cartStage4->comparisonOfPaymentMethod($payPaymentStage1, $payApproveStage1);
        $I->scrollToTop();
        $I->waitAndClick($this->config[$this->testName]['toStepPaymentMethod'], 15);
        $payApproveStage = $this->cartStage3->grabPaymentMethod(
            $this->config[$this->testName]['paymentMethodCash1']
        );
        $I->waitAndClick($this->config[$this->testName]['paymentMethodCash'], 15);
        $this->cartStage3->goToStep4($this->testName);
        $payPaymentStage = $this->cartStage3->grabPaymentMethod(
            $this->config[$this->testName]['paymentMethodCash2']
        );
        $this->cartStage4->comparisonOfPaymentMethod($payPaymentStage, $payApproveStage);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог профессиональных товаров
     *     -> Проверить доступность добавление в корзину")
     *
     * @Title("checkProfProductForGuest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function checkProfProductForGuestTest(AcceptanceTester $I)
    {
        $I->checkText($this->config[$this->testName]['textItem'], $this->config[$this->testName]['ItemLoc']);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог профессиональных товаров
     *     -> Проверить доступность добавление в корзину")
     *
     * @Title("checkProfProductForBasicUser")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function checkProfProductForBasicUserTest(AcceptanceTester $I)
    {
        $I->checkText($this->config[$this->testName]['textItem'], $this->config[$this->testName]['ItemLoc']);
        $this->login->logout($this->testName);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Перейти в корзину
     *     -> Продолжить
     *     -> Выбрать pick-up point
     *     -> Выбрать оплату
     *     -> Комментарий - ВНИМАНИЕ! ТЕСТОВАЯ ЗАКУПКА!
     *     -> Проверить доставку")
     *
     * @Title("checkInCheckOutLegalEntity")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function checkInCheckOutLegalEntity(AcceptanceTester $I)
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->selectItemQty($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->goToStep2($this->testName);
        $this->cartStage2->chooseDeliveryType($this->testName);
        $this->cartStage2->chooseTermsOfDelivery($this->testName);
        $this->cartStage2->setFLP($this->testName, 'SayMyName');
        $this->address->setTelephone($this->testName, '(654) 646-4646');
        $this->cartStage2->goToStep3($this->testName);
        $this->cartStage3->choosePaymentMethod($this->testName);
        $this->cartStage3->chooseReceiptType($this->testName);
        $this->cartStage3->goToStep4($this->testName);
        $this->cartStage4->makeComment($this->testName);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в корзину
     *     -> Продолжить
     *     -> Выбрать курьерская доставка
     *     -> Добавить адресс с индексом
     *     -> Проверить что появился модуль со слотами
     *     -> Проверить данные")
     *
     * @Title("checkSlotsCourierDelivery")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function checkSlotsCourierDelivery(AcceptanceTester $I)
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->selectItemQty($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->goToStep2($this->testName);
        $this->cartStage2->chooseRegionDelivery($this->testName);
        $this->cartStage2->chooseDeliveryType($this->testName);
        $this->cartStage2->infoDelivery($this->testName);
        $this->address->setCity($this->testName, 'Москва');
        $this->address->setAddress($this->testName, 'Пушкинкая 1');
        $this->address->setApartment($this->testName, '2');
        $this->address->setIndex($this->testName, '192076');
        $this->main->addClick($I, $this->testName);
        $I->waitForElement($this->config[$this->testName]['deliveryTimeIntervalLoc'], 10);
        $I->checkText($this->config[$this->testName]['chooseDateDeliveryText'], $this->config[$this->testName]['chooseDateDeliveryLoc']);
        $I->checkText($this->config[$this->testName]['deliveryTimeIntervalText'], $this->config[$this->testName]['deliveryTimeIntervalLoc']);
        $I->scrollToTop();
        $I->click($this->config[$this->testName]['miniCartLoc']);
        $this->cart->deleteAllCart($this->testName);
    }
}
