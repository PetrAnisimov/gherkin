<?php

namespace Page\Cart;

use Codeception\Util\Locator;
use Exception;
use Yandex\Allure\Adapter\Annotation\Description;

/**
 * Class Cart.
 */
class Cart extends \Page\BasePage
{
    /**
     * @var string
     */
    public $addedItemTitle;

    public $addedItemID;

    private $buySelector;

    /**
     * @Description('Добавление в каталог')
     *
     * @param $testName
     *
     * @throws Exception
     *
     * @return BuySelector
     */
    public function addInCatalog($testName)
    {
        $I = $this->tester;
        $I->waitForPageLoad();
        if (!empty($this->config[$testName]['loadingMask'])) {
            $this->waitForLoader($this->config[$testName]['loadingMask']);
        }
        if (isset($this->config[$testName]['itemNumber'])) {
            $itemNumber = $this->config[$testName]['itemNumber'];

            $I->waitForElementClickable($this->config[$testName]['addToCartBtnLoc'], $itemNumber, 15);
            $I->click(Locator::elementAt($this->config[$testName]['addToCartBtnLoc'], $itemNumber));

            $this->addedItemTitle = $this->getItemName($this->config[$testName]['itemCardLinkLoc'], $itemNumber);
            $this->addedItemID = $this->getItemID(
                $this->config[$testName]['itemIdCat'],
                $itemNumber,
                $this->config[$testName]['idAttrCat']
            );

            codecept_debug("Item name: {$this->addedItemTitle}");
            codecept_debug("Item ID: {$this->addedItemID}");
        } else {
            $I->waitForElementClickable($this->config[$testName]['addToCartBtnLoc'], 60);
            $I->click($this->config[$testName]['addToCartBtnLoc']);
            if (isset($this->config[$testName]['openCardItem'])) {
                $I->waitForPageOnLoad(2);
                $I->seePageHasElement($this->config[$testName]['openCardItem']) ? $I->waitAndClick($this->config[$testName]['addToCartBtnLoc'], 10) : null;
            }
        }

        return new BuySelector($I, $this->config[$testName]);
    }

    /**
     * @Description("Добавление товара с карточки товара")
     *
     * @param $testName
     *
     * @throws Exception
     *
     * @return BuySelector
     */
    public function addOnItemCard($testName)
    {
        $I = $this->tester;
        $itemNumber = $this->config[$testName]['itemNumber'];
        $this->addedItemTitle = $this->getItemName($this->config[$testName]['itemOnCardLinkLoc'], $itemNumber);
        $I->click(Locator::elementAt($this->config[$testName]['itemCardLinkLoc'], $itemNumber));
        $I->waitForElement($this->config[$testName]['addToCartOnItemCardBtn'], 5);
        '' == $I->grabAttributeFrom($this->config[$testName]['addToCartOnItemCardBtn'], 'disabled') ? $I->waitForPageLoad(2) : null;
        $I->waitForElementClickable($this->config[$testName]['addToCartOnItemCardBtn'], 15);
        $I->click($this->config[$testName]['addToCartOnItemCardBtn']);
        $this->addedItemID = $this->getItemID(
            $this->config[$testName]['itemIdCat'],
            $itemNumber,
            $this->config[$testName]['idAttrCat']
        );
        codecept_debug("Item name: {$this->addedItemTitle}");
        codecept_debug("Item ID: {$this->addedItemID}");

        return new BuySelector($I, $this->config);
    }

    /**
     * @Description('Проверка наличия товара на Шаге 1')
     *
     * @param $testName
     * @param mixed $id
     * @param mixed $qty
     * @param $qtyFieldLoc
     *
     * @throws Exception
     */
    public function checkCartHaveByID($testName, $id, $qty, $qtyFieldLoc)
    {
        $I = $this->tester;
        $I->waitForElement($this->config[$testName]['itemIdCart'], 15);
        $ids = $I->getItemsIDs($this->config[$testName]['itemIdCart'], $this->config[$testName]['idAttrCart']);
        codecept_debug($ids);
        $foundItemNumber = $I->findItemNumberByID($ids, $id);
        if (isset($foundItemNumber)) {
            $I->waitForElementVisible(Locator::elementAt($qtyFieldLoc, $foundItemNumber), 25);
            $quantity = $I->grabTextFrom(Locator::elementAt($qtyFieldLoc, $foundItemNumber));
            $pattern = '/[x(₽)]/';
            $string = preg_replace('/\s+/', '', $quantity);
            $filter = array_filter(preg_split($pattern, $string), 'strlen');
        } else {
            throw new Exception('Item not founded in cart');
        }

        try {
            $I->assertEquals($qty, $filter[1]);
            codecept_debug('Number of goods are matching');
        } catch (\Exception $e) {
            codecept_debug('Number of goods do not match');
        }
    }

    /**
     * @param $testName
     * @param $itemName
     * @param $qty
     * @param $qtyFieldLoc
     *
     * @throws Exception
     */
    public function checkCartHaveByName($testName, $itemName, $qty, $qtyFieldLoc)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['addClick'])) {
            $I->scrollTo($this->config[$testName]['insideCartLoc']);
            $I->waitForElementClickable($this->config[$testName]['addClick'], 20);
            $I->click($this->config[$testName]['addClick']);
        }
        $items = $I->getItems($this->config[$testName]['cartListResultLoc']);
        $foundItemNumber = $I->findItemNumber($items, $itemName) + 1;
        if (isset($foundItemNumber)) {
            $I->waitForElementVisible(Locator::elementAt($qtyFieldLoc, $foundItemNumber), 25);
            $quantity = $I->grabTextFrom(Locator::elementAt($qtyFieldLoc, $foundItemNumber));

            try {
                $quantityValue = $I->grabValueFrom($qtyFieldLoc);
                if (empty($quantityValue)) {
                    $pattern = '/[x(₽)]/';
                    $string = preg_replace('/\s+/', '', $quantity);
                    $filter = array_filter(preg_split($pattern, $string), 'strlen');
                    $quantityValue = $filter[1];
                }
            } catch (\Exception $e) {
                codecept_debug($e->getMessage());
            }
        } else {
            throw new Exception('Item not founded in cart');
        }

        try {
            $I->assertEquals($qty, $quantityValue);
            codecept_debug('Number of goods are matching');
        } catch (\Exception $e) {
            codecept_debug('Number of goods do not match');
        }
    }

    /**
     * @Description('Изменение количества товара в миникорзине')
     *
     * @param $testName
     * @param $itemName
     *
     * @throws Exception
     */
    public function updateMiniCart($testName, $itemName)
    {
        $I = $this->tester;
        $items = $I->getItems($this->config[$testName]['cartListResultLoc']);
        $foundItemNumber = $I->findItemNumber($items, $itemName) + 1;
        $I->waitForElementVisible(Locator::elementAt(
            $this->config[$testName]['miniCartUpdateBtnLoc'],
            $foundItemNumber
        ), 15);

        for ($i = 1; $i < 10; ++$i) {
            try {
                $I->click(Locator::elementAt($this->config[$testName]['miniCartUpdateBtnLoc'], $foundItemNumber));
                if ($I->seePageHasElement($this->config[$testName]['miniCartUpdateQtyFieldLoc'])) {
                    break;
                }
            } catch (\Exception $e) {
            }
        }

        $I->waitForElementVisible(Locator::elementAt(
            $this->config[$testName]['miniCartUpdateQtyFieldLoc'],
            $foundItemNumber
        ), 15);
        $I->clearFieldJs(Locator::elementAt(
            $this->config[$testName]['miniCartUpdateQtyFieldLoc'],
            $foundItemNumber
        ));
        $I->fillField(Locator::elementAt(
            $this->config[$testName]['miniCartUpdateQtyFieldLoc'],
            $foundItemNumber
        ), $this->config[$testName]['qtyUp']);
        $I->waitForElementVisible(Locator::elementAt(
            $this->config[$testName]['miniCartUpdateQtyOkBtn'],
            $foundItemNumber
        ));
        $I->click(Locator::elementAt(
            $this->config[$testName]['miniCartUpdateQtyOkBtn'],
            $foundItemNumber
        ));
    }

    /**
     * @Description('Изменение количества товара в корзине')
     *
     * @param $testName
     * @param $itemName
     *
     * @throws Exception
     */
    public function updateCart($testName, $itemName)
    {
        $I = $this->tester;
        $this->waitForLoader($this->config[$testName]['loadingMask']);
        $items = $I->getItems($this->config[$testName]['cartListResultLoc']);
        $foundItemNumber = $I->findItemNumber($items, $itemName) + 1;
        $I->waitForElementVisible(Locator::elementAt(
            $this->config[$testName]['cartUpdateQtyFieldLoc'],
            $foundItemNumber
        ), 15);
        $I->waitForElement(Locator::elementAt(
            $this->config[$testName]['cartUpdateQtyFieldLoc'],
            $foundItemNumber
        ), 15);

        try {
            $I->click($this->config[$testName]['cartUpdateQtyFieldLoc']);
            $I->fillField(Locator::elementAt(
                $this->config[$testName]['cartUpdateQtyFieldLoc'],
                $foundItemNumber
            ), $this->config[$testName]['qtyUp']);
            $this->waitForLoader($this->config[$testName]['loadingMask']);
            $I->waitForElementVisible(Locator::elementAt(
                $this->config[$testName]['cartUpdateQtyOkBtn'],
                $foundItemNumber
            ));
        } catch (Exception $e) {
            $I->click($this->config[$testName]['cartUpdateQtyFieldLoc']);
            $I->fillField(Locator::elementAt(
                $this->config[$testName]['cartUpdateQtyFieldLoc'],
                $foundItemNumber
            ), $this->config[$testName]['qtyUp']);
            $I->waitForElementVisible(Locator::elementAt(
                $this->config[$testName]['cartUpdateQtyOkBtn'],
                $foundItemNumber
            ));
            $this->waitForLoader($this->config[$testName]['loadingMask']);
        }
        $I->click(Locator::elementAt(
            $this->config[$testName]['cartUpdateQtyOkBtn'],
            $foundItemNumber
        ));
        $this->waitForLoader($this->config[$testName]['loadingMask']);
    }

    /**
     * @Description('Ожидание исчезания лоадера')
     *
     * @param $locator
     *
     * @throws Exception
     */
    public function waitForLoader($locator)
    {
        $I = $this->tester;
        $I->waitForElementNotVisible($locator, 40);
    }

    /**
     * @Description('Удаление всех товаров из миникорзины')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function deleteAllMiniCart($testName)
    {
        $I = $this->tester;
        $this->clickAll(
            $this->config[$testName]['deleteMiniCartBtn'],
            $this->config[$testName]['emptyMiniCartListLoc'],
            $this->config[$testName]['emptyMiniCartListMsg'],
            $testName
        );
        $I->waitForText(
            $this->config[$testName]['emptyMiniCartListMsg'],
            15,
            Locator::elementAt($this->config[$testName]['emptyMiniCartListLoc'], 1)
        );
    }

    /**
     * @Description('Удаление всех товаров из корзины')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function deleteAllCart($testName)
    {
        $I = $this->tester;
        $this->clickAll(
            $this->config[$testName]['deleteCartBtnLoc'],
            $this->config[$testName]['emptyCartListLoc'],
            $this->config[$testName]['emptyCartListMsg'],
            $testName
        );
        $I->waitForElement($this->config[$testName]['emptyCartListLoc']);

        try {
            $I->waitForText(
                $this->config[$testName]['emptyCartListMsg'],
                15,
                Locator::elementAt($this->config[$testName]['emptyCartListLoc'], 1)
            );
        } catch (\Exception $e) {
            $textEmptyBasket = $I->grabTextFrom($this->config[$testName]['emptyCartListLoc']);
            codecept_debug($textEmptyBasket);
        }
    }

    /**
     * @Description('Метод для удаления всех товаров из миникорзины/корзины')
     *
     * @param $deleteBtnLoc
     * @param $emptyLoc
     * @param $emptyMsg
     * @param $testName
     */
    public function clickAll($deleteBtnLoc, $emptyLoc, $emptyMsg, $testName)
    {
        $I = $this->tester;
        // $elem = '(' . $deleteBtnLoc . ')[last()]';
        $elementClicked = false;
        $i = 0;
        do {
            $I->waitForPageLoad();
            if ($I->seePageHasElement($emptyLoc) && !$I->seePageHasElement($deleteBtnLoc)) {
                $I->waitForElement($emptyLoc, 15);
                if (!$I->seePageHasElement($deleteBtnLoc)) {
                    $elementClicked = true;
                }
            } else {
                try {
                    $I->waitForElementClickable($deleteBtnLoc, 15);
                    $I->click($deleteBtnLoc);
                    if (isset($this->config[$testName]['popUp'])) {
                        $I->acceptPopup();
                    }
                } catch (\Exception $e) {
                    if ($i < 3) {
                        ++$i;
                    } else {
                        $elementClicked = true;
                        codecept_debug('Вынужденный выход');
                    }
                }
            }
        } while (false === $elementClicked);
    }

    /**
     * @Description('Переход в корзину')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function gotoCart($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['miniCartLoadingMask']) && !$I->seePageHasElement($this->config[$testName]['cartLoc'])) {
            $this->gotoMiniCart($testName);
        }
        $I->waitForPageOnLoad(3);
        $clickGoToCart = true;
        if (isset($this->config[$testName]['previewCart'])) {
            $I->seePageHasElement($this->config[$testName]['previewCart']);
            $I->click($this->config[$testName]['goToCart']);
            $clickGoToCart = false;
        }
        if (isset($this->config[$testName]['cartLoc']) && $clickGoToCart) {
            $I->waitForElementClickable($this->config[$testName]['cartLoc'], 40);
            $I->scrollTo($this->config[$testName]['cartLoc']);
            isset($this->config['fbModalClose']) ?
            $I->tryToExecuteJS("return document.querySelector('" . $this->config['fbModalClose'] . "').setAttribute('style','display:none')") : null;
            $I->click($this->config[$testName]['cartLoc']);
        }
    }

    /**
     * @Description('Переход в миникорзину')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function gotoMiniCart($testName)
    {
        $I = $this->tester;
        $I->waitForElementClickable($this->config[$testName]['miniCartSubmenu'], 15);
        $I->click($this->config[$testName]['miniCartSubmenu']);
    }

    /**
     * @Description('Переход на Шаг 2')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function goToStep2($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['toStep2'])) {
            for ($i = 1; $i < 10; ++$i) {
                try {
                    if ($I->seePageHasElement($this->config[$testName]['loadingMask'])) {
                        codecept_debug('Element presented');
                    } else {
                        break;
                    }
                } catch (\Exception $e) {
                    break;
                }
            }
            for ($i = 1; $i < 10; ++$i) {
                try {
                    $I->waitForElementNotVisible($this->config[$testName]['loadingMask']);
                    $I->scrollTo($this->config[$testName]['toStep2']);
                    $I->waitForElementClickable($this->config[$testName]['toStep2'], 15);
                    break;
                } catch (\Exception $e) {
                }
            }
            $I->click($this->config[$testName]['toStep2']);
            $I->waitForElementNotVisible($this->config[$testName]['loadingMask'], 40);
        }
    }

    /**
     * @Description('Сбор данных о товарах: название, цена, количество, общая стоимость')
     *
     * @param $item
     * @param $price
     * @param $qty
     * @param $subtotal
     *
     * @throws Exception
     *
     * @return array
     */
    public function grabNPVS($item, $price, $qty, $subtotal)
    {
        $I = $this->tester;
        $I->waitForPageLoad();
        $I->waitForElement($item, 15);
        $items = [];
        $basket = [];
        $items_list = $I->grabMultiple($item);
        $number_of_items = count($items_list);
        for ($x = 1; $x <= $number_of_items; ++$x) {
            $good = '(' . $item . ')[' . $x . ']';
            $basket['item'] = trim($I->grabTextFrom($good));
            $basket['price'] = preg_replace('~[\\D]~', '', $I->grabTextFrom($good . $price));
            if ($I->seePageHasElement($good . $qty)) {
                $basket['qty'] = preg_replace('~[\\D]~', '', $I->grabTextFrom($good . $qty));
            } else {
                $basket['qty'] = 1;
            }
            $basket['subtotal'] = preg_replace('~[\\D]~', '', $I->grabTextFrom($good . $subtotal));
            $hash = md5($basket['item'] . $basket['price'] . $basket['qty'] . $basket['subtotal']);
            $items[$hash] = $basket;
        }
        codecept_debug($items);

        return $items;
    }

    /**
     * @Description("Сбор общей суммы всей корзины")
     *
     * @param $total
     *
     * @throws Exception
     *
     * @return mixed
     */
    public function grabGrandTotal($total)
    {
        $I = $this->tester;
        $I->waitForElementVisible($total);
        $delSpaceInTotal = preg_replace("/\s+/", '', $I->grabTextFrom($total));
        $grandTotalFormat = number_format((int) $delSpaceInTotal, 2, '.', '');

        return substr(preg_replace('~[\\D]~', '', $grandTotalFormat), 0, -2);
    }

    /**
     * @Description("Сбор суммы доставки")
     *
     * @param $total
     *
     * @throws Exception
     *
     * @return mixed
     */
    public function grabTotalDelivery($total)
    {
        $I = $this->tester;
        $I->waitForElementVisible($total);
        $grabTotal = $I->grabTextFrom($total);
        if ('Бесплатно' !== $grabTotal) {
            $grandTotalFormat = number_format((int) $grabTotal, 2, '.', '');
            $grandTotal = substr(preg_replace('~[\\D]~', '', $grandTotalFormat), 0, -2);
        } else {
            $grandTotal = 0;
        }

        return $grandTotal;
    }

    /**
     * @Description("Сбор суммы скидки")
     *
     * @param $total
     *
     * @throws Exception
     *
     * @return mixed
     */
    public function grabTotalDiscount($total)
    {
        $I = $this->tester;
        $I->waitForElementVisible($total);
        $grandTotalFormat = number_format((int) $I->grabTextFrom($total), 2, '.', '');

        return substr(preg_replace('~[\\D]~', '', $grandTotalFormat), 0, -2);
    }

    /**
     * @param $item
     * @param $addToGood
     * @param $testName
     *
     * @throws Exception
     *
     * @return array
     */
    public function addAndWriteAllItems($item, $addToGood, $testName)
    {
        $I = $this->tester;
        $this->buySelector = new BuySelector($I, $this->config);
        if (isset($this->config[$testName]['loadingMask'])) {
            $I->waitForElementNotVisible($this->config[$testName]['loadingMask'], 20);
        }
        $cart = [];
        $items_list = $I->grabMultiple($item);
        $number_of_items = count($items_list);
        for ($x = 1; $x <= $number_of_items; ++$x) {
            $good = '(' . $item . ')[' . $x . ']';
            $this->addedItemTitle = $I->grabTextFrom($good);
            $cart[] = $this->addedItemTitle;
            $I->waitForElementClickable($good . $addToGood, 100);
            $I->click($good . $addToGood);
            $this->buySelector->selectItemQtyByPosition($testName);
            codecept_debug("{$this->addedItemTitle} added to cart");
            $I->waitForElementNotVisible($this->config[$testName]['loadingMask'], 100);
        }
        codecept_debug($cart);

        return $cart;
    }

    /**
     * @param $item
     *
     * @throws Exception
     *
     * @return array
     */
    public function writeAllItems($item)
    {
        $I = $this->tester;
        $I->waitForElementClickable($item, 50);
        $cart = [];
        $items_list = $I->grabMultiple($item);
        $number_of_items = count($items_list);
        for ($x = 1; $x <= $number_of_items; ++$x) {
            $cart[] = $I->grabTextFrom('(' . $item . ')[' . $x . ']');
        }

        return $cart;
    }

    /**
     * @param $itemsFirstPart
     * @param $itemsSecondPart
     * @param $goodsPositiveMsg
     * @param $goodsNegativeMsg
     */
    public function comparisonOfGoods($itemsFirstPart, $itemsSecondPart, $goodsPositiveMsg, $goodsNegativeMsg)
    {
        codecept_debug('Comparison of parameters:');
        if (is_array($itemsFirstPart) && is_array($itemsSecondPart)) {
            if (empty(array_diff_key($itemsFirstPart, $itemsSecondPart))
                && empty(array_diff_key($itemsSecondPart, $itemsFirstPart))) {
                codecept_debug("\n" . $goodsPositiveMsg);
            } else {
                codecept_debug("\n" . $goodsNegativeMsg);
            }
        } else {
            if ($itemsSecondPart == $itemsFirstPart) {
                codecept_debug("\n" . $goodsPositiveMsg);
            } else {
                codecept_debug("\n" . $goodsNegativeMsg);
            }
        }
    }

    /**
     * @param $testName
     *
     * @throws Exception
     */
    public function addAllAndCompareCard($testName)
    {
        $itemsCatalog = $this->addAndWriteAllItems(
            $this->config[$testName]['itemCardLinkLoc'],
            $this->config[$testName]['addToGood'],
            $testName
        );
        $this->gotoCart($testName);
        $itemsBasketCatalog = $this->writeAllItems(
            $this->config[$testName]['cartGoods']
        );
        $this->comparisonOfGoods(
            $itemsCatalog,
            $itemsBasketCatalog,
            $this->config[$testName]['goodsPositiveMsg'],
            $this->config[$testName]['goodsNegativeMsg']
        );
    }

    /**
     * @param $testName
     *
     * @throws Exception
     */
    public function flushCart($testName)
    {
        $I = $this->tester;
        $I->waitForElementClickable($this->config[$testName]['emptyCard'], 40);
        $I->click($this->config[$testName]['emptyCard']);
    }

    /**
     * @Description('Получение имени добавленного товара')
     *
     * @param $locator
     * @param $itemNumber
     *
     * @throws Exception
     *
     * @return mixed
     */
    private function getItemName($locator, $itemNumber)
    {
        $I = $this->tester;
        $I->waitForElementVisible(Locator::elementAt($locator, $itemNumber));

        return $I->grabTextFrom(Locator::elementAt($locator, $itemNumber));
    }

    /**
     * @param $locator
     * @param $itemNumber
     * @param $attribute
     *
     * @throws Exception
     *
     * @return mixed
     */
    private function getItemID($locator, $itemNumber, $attribute)
    {
        $I = $this->tester;
        $I->waitForElement($locator, 5);

        return $I->grabAttributeFrom($locator, $attribute);
    }
}
