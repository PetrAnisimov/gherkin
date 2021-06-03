<?php

namespace Page\Cart;

use Exception;
use Yandex\Allure\Adapter\Annotation\Description;

/**
 * Class BuySelector.
 */
class BuySelector extends \Page\BasePage
{
    public $item_number;

    /**
     * @Description("Выбор количества товара в окне 'Добавить в корзину' по значению")
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function selectItemQty($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['buyQtySelector'])) {
            $item = sprintf($this->config[$testName]['buyQtySelector'], $this->config[$testName]['qty']);
            $I->waitForElementClickable($item, 40);
            $I->click($item);
        }
    }

    /**
     * @Description("Выбор количества товара в окне 'Добавить в корзину' по позиции")
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function selectItemQtyByPosition($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['positionQtySelector'])) {
            $item = sprintf($this->config[$testName]['positionQtySelector'], $this->config[$testName]['position']);
            codecept_debug($item);

            try {
                $I->waitForElementVisible($item, 40);
                $I->waitForElementClickable($item, 40);
                $this->item_number = $I->grabTextFrom($item);
                codecept_debug("Item qty: {$this->item_number}");
                $I->click($item);
            } catch (\Exception $e) {
                codecept_debug('Повторное нажатие');
                $I->click($this->config[$testName]['addToCartBtnLoc']);
                $I->waitForElementVisible($item, 40);
                $I->waitForElementClickable($item, 40);
                $this->item_number = $I->grabTextFrom($item);
                codecept_debug("Item qty: {$this->item_number}");
                $I->click($item);
            }
        } else {
            $I->waitForPageLoad();
            if (isset($this->config[$testName]['popUp'])) {
                if ($I->seePageHasElement($this->config[$testName]['popUp'])) {
                    $I->click($this->config[$testName]['popUpClose']);
                }
            }
            $I->waitForElement($this->config[$testName]['QtySelector'], 5);
            $this->item_number = $I->grabValueFrom($this->config[$testName]['QtySelector']);
            codecept_debug("Item qty: {$this->item_number}");
        }
    }

    /**
     * @Description("Заполнение поля количества товара в окне 'Добавить в корзину'")
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function fillItemQty($testName)
    {
        $I = $this->tester;
        $I->waitForElementVisible($this->config[$testName]['buyQtyField'], 15);
        $I->fillField($this->config[$testName]['buyQtyField'], $this->config[$testName]['qty']);
        $this->confirmBuy($testName);
    }

    /**
     * @Description("Подтверждение покупки")
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function confirmBuy($testName)
    {
        $I = $this->tester;
        $I->waitForElementVisible($this->config[$testName]['buyQtyOkBtn'], 15);
        $I->click($this->config[$testName]['buyQtyOkBtn']);
    }
}
