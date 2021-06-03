<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Cart\BuySelector;
use Page\Cart\Cart;
use Page\Cart\CartStage4;
use Page\Login;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Проверка ссылок футера")
 */
class CartCest
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
     * @var cartStage4
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
        $this->main = new Main($I, $this->config);
        $this->login = new Login($I, $this->config);
        $this->cart = new Cart($I, $this->config);
        $this->buySelector = new BuySelector($I, $this->config);
        $this->cartStage4 = new cartStage4($I, $this->config);

        $this->main->addInUrlAuthHttp($I);
        $I->amOnUrl($this->config['url']);
        $this->main->modalClose($this->testName);
        $this->main->cookieClose();
        $acceptance->loginConfirm($this->testName, $this->login);
        if (isset($this->config[$this->testName]['addToUrl'])) {
            $I->waitForPageLoad();
            $I->waitForElementNotVisible($this->config[$this->testName]['loadingMask']);
            $I->amOnPage($this->config[$this->testName]['addToUrl']);
        }
    }

    /**
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("addToCartWithQtySelectorTest")
     *
     * @throws Exception
     */
    public function addToCartWithQtySelectorTest()
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->selectItemQtyByPosition($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->checkCartHaveByName(
            $this->testName,
            $this->cart->addedItemTitle,
            $this->buySelector->item_number,
            $this->config[$this->testName]['cartQtyFieldLoc']
        );
        $this->cart->deleteAllCart($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Переход в каталог
     *     -> Нажать на товар
     *     -> Перейти в карточку товара
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("addToCartOnItemCardWithQtySelectorTest")
     *
     * @throws Exception
     */
    public function addToCartOnItemCardWithQtySelectorTest()
    {
        $this->cart->addOnItemCard($this->testName);
        $this->buySelector->selectItemQtyByPosition($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->checkCartHaveByName(
            $this->testName,
            $this->cart->addedItemTitle,
            $this->buySelector->item_number,
            $this->config[$this->testName]['QtyFieldLoc']
        );
        $this->cart->deleteAllCart($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Переход в каталог
     *     -> Нажать на товар
     *     -> Перейти в карточку обычного товара
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("addToCartBeautyProductRetailCheckDiscountTest")
     *
     * @throws Exception
     */
    public function addToCartBeautyProductRetailCheckDiscountTest()
    {
        $this->cart->addOnItemCard($this->testName);
        $this->buySelector->selectItemQtyByPosition($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->checkCartHaveByName(
            $this->testName,
            $this->cart->addedItemTitle,
            $this->buySelector->item_number,
            $this->config[$this->testName]['QtyFieldLoc']
        );
        $totalBasketStage1 = $this->cart->grabGrandTotal(
            $this->config[$this->testName]['cartQtyFieldLoc']
        );
        $grandTotalStage1 = $this->cart->grabGrandTotal(
            $this->config[$this->testName]['grandTotalStage1']
        );
        $totalDiscount = round($totalBasketStage1 * 0.30);

        $totalApproveStage = $this->cart->grabGrandTotal(
            $this->config[$this->testName]['grandTotalStage4']
        );
        $totalDeliveryApproveStage = $this->cart->grabTotalDelivery(
            $this->config[$this->testName]['grandTotalDelivery']
        );
        $totalDiscountAndDelivery = round(($totalBasketStage1 - $totalDiscount) + $totalDeliveryApproveStage);
        $this->cartStage4->comparisonOfGrandTotal($totalDiscountAndDelivery, $totalApproveStage);
        $this->cartStage4->comparisonOfTotalDiscount($totalDiscount, $totalBasketStage1 - $grandTotalStage1);
        $this->cart->deleteAllCart($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Переход в каталог
     *     -> Нажать на товар
     *     -> Перейти в карточку проф товара
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("addToCartBeautyProductForProfCheckDiscountTest")
     *
     * @throws Exception
     */
    public function addToCartBeautyProductForProfCheckDiscountTest()
    {
        $this->cart->addOnItemCard($this->testName);
        $this->buySelector->selectItemQtyByPosition($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->checkCartHaveByName(
            $this->testName,
            $this->cart->addedItemTitle,
            $this->buySelector->item_number,
            $this->config[$this->testName]['QtyFieldLoc']
        );
        $totalBasketStage1 = $this->cart->grabGrandTotal(
            $this->config[$this->testName]['grandTotalStage1']
        );
        $totalApproveStage = $this->cart->grabGrandTotal(
            $this->config[$this->testName]['grandTotalStage4']
        );
        $totalDeliveryApproveStage = $this->cart->grabTotalDelivery(
            $this->config[$this->testName]['grandTotalDelivery']
        );
        $totalDiscountAndDelivery = round($totalBasketStage1 + $totalDeliveryApproveStage);
        $this->cartStage4->comparisonOfGrandTotal($totalDiscountAndDelivery, $totalApproveStage);
        $this->cart->deleteAllCart($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Изменить количество товара
     *     -> Перейти в корзину
     *     -> Проверить количество товара")
     *
     * @Title("updateInMiniCartTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function updateInMiniCartTest(AcceptanceTester $I)
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->selectItemQtyByPosition($this->testName);
        $this->cart->gotoMiniCart($this->testName);
        $this->cart->updateMiniCart($this->testName, $this->cart->addedItemTitle);
        $this->cart->gotoCart($this->testName);
        $this->cart->checkCartHaveByName(
            $this->testName,
            $this->cart->addedItemTitle,
            $this->config[$this->testName]['qtyUp'],
            $this->config[$this->testName]['cartQtyFieldLoc']
        );
        $this->cart->deleteAllCart($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Перейти в карточку товара
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в корзину
     *     -> Изменить количество товара
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("updateInCartTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function updateInCartTest(AcceptanceTester $I)
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->selectItemQtyByPosition($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->updateCart($this->testName, $this->cart->addedItemTitle);
        $I->amOnUrl($this->config['url']);
        $this->cart->gotoMiniCart($this->testName);
        $this->cart->deleteAllMiniCart($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Ввести нужное количество товара в меню селектора
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("addToCartWithInputFieldTest")
     *
     * @throws Exception
     */
    public function addToCartWithInputFieldTest()
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->fillItemQty($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->checkCartHaveByID(
            $this->testName,
            $this->cart->addedItemID,
            $this->config[$this->testName]['qty'],
            $this->config[$this->testName]['cartQtyFieldLoc']
        );
    }

    /**
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Удалить все товары
     *     -> Проверить наличие товара")
     *
     * @Title("deleteAllInMiniCartTest")
     *
     * @throws Exception
     */
    public function deleteAllInMiniCartTest()
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->selectItemQtyByPosition($this->testName);
        $this->cart->gotoMiniCart($this->testName);
        $this->cart->deleteAllMiniCart($this->testName);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Добавить все капсулы Original через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("addAllVertuoCapsulesTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function addAllOriginalCapsulesTest(AcceptanceTester $I)
    {
        $I->skip('This Cest is not ready');
        $this->cart->addAllAndCompareCard($this->testName);
        $this->cart->flushCart($this->testName);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Добавить все капсулы Vertuo через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("addAllVertuoCapsulesTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function addAllVertuoCapsulesTest(AcceptanceTester $I)
    {
        $I->skip('This Cest is not ready');
        $this->cart->addAllAndCompareCard($this->testName);
        $this->cart->flushCart($this->testName);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Добавить все машины Original через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("addAllOriginalMachinesTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function addAllOriginalMachinesTest(AcceptanceTester $I)
    {
        $I->skip('This Cest is not ready');
        $this->cart->addAllAndCompareCard($this->testName);
        $this->cart->flushCart($this->testName);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Добавить все машины Vertuo через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("addAllVertuoMachinesTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function addAllVertuoMachinesTest(AcceptanceTester $I)
    {
        $I->skip('This Cest is not ready');
        $this->cart->addAllAndCompareCard($this->testName);
        $this->cart->flushCart($this->testName);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Добавить все Аксессуары через меню селектора
     *     -> Перейти в мини-корзину
     *     -> Проверить количество товара")
     *
     * @Title("addAllAccessoriesTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function addAllAccessoriesTest(AcceptanceTester $I)
    {
        $I->skip('This Cest is not ready');
        $this->cart->addAllAndCompareCard($this->testName);
        $this->cart->flushCart($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Перейти в каталог
     *     -> Выбрать нужное количество товара через меню селектора
     *     -> Перейти в корзину
     *     -> Удалить все товары
     *     -> Проверить наличие товара")
     *
     * @Title("deleteAllInCartTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function deleteAllInCartTest(AcceptanceTester $I)
    {
        $this->cart->addInCatalog($this->testName);
        $this->buySelector->selectItemQtyByPosition($this->testName);
        $this->cart->gotoCart($this->testName);
        $this->cart->deleteAllCart($this->testName);
        $I->amOnUrl($this->config['url']);
        $this->login->logout($this->testName);
    }
}
