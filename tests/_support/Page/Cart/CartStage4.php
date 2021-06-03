<?php

namespace Page\Cart;

use Exception;
use Yandex\Allure\Adapter\Annotation\Description;

class CartStage4 extends \Page\BasePage
{
    /**
     * @Description('Оставиьь комментарий')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function makeComment($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['commentArea'])) {
            $I->scrollTo($this->config[$testName]['commentArea']);
            $I->waitForElementVisible($this->config[$testName]['commentArea'], 10);
            $I->fillField($this->config[$testName]['commentArea'], 'ВНИМАНИЕ! ТЕСТОВАЯ ЗАКУПКА!');
        }
    }

    /**
     * @Description('Сравнение условйи доставки')
     *
     * @param $termsOfDeliveryAddStage
     * @param $termsOfDeliveryApproveStage
     */
    public function comparisonOfTermsOfDelivery($termsOfDeliveryAddStage, $termsOfDeliveryApproveStage)
    {
        $deliveryTypes = ['Бутик PickUp', 'Пункты выдачи и постаматы'];
        if (!in_array($termsOfDeliveryApproveStage, $deliveryTypes)) {
            codecept_debug("\n" . 'Terms of delivery are fit');
        } else {
            codecept_debug("\n" . 'Terms of delivery are not fit');
        }
        codecept_debug($termsOfDeliveryAddStage . "\n" . $termsOfDeliveryApproveStage);
    }

    /**
     * @Description('Сравнение имени/фамилии')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function comparisonOfFLP($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['FLPStage4'])) {
            $parameter1 = 'SayMyName';
            $parameter2 = $I->grabTextFrom($this->config[$testName]['FLPStage4']);
            if ($parameter1 == $parameter2) {
                codecept_debug("\n" . 'First name/Last name are equal');
            } else {
                codecept_debug("\n" . 'First name/Last name are not equal');
            }
            codecept_debug($parameter1 . "\n" . $parameter2);
        }
    }

    /**
     * @Description('Сравнение телефона')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function comparisonOfTelephone($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['telephoneStage4'])) {
            $parameter1 = '+7 (654) 646-4646';
            $parameter2 = trim($I->grabTextFrom($this->config[$testName]['telephoneStage4']));
            if ($parameter1 == $parameter2) {
                codecept_debug("\n" . 'Phone numbers are equal');
            } else {
                codecept_debug("\n" . 'Phone numbers are not equal');
            }
            codecept_debug($parameter1 . "\n" . $parameter2);
        }
    }

    /**
     * @Description('Сравнение метода оплаты')
     *
     * @param $payPaymentStage
     * @param $payApproveStage
     */
    public function comparisonOfPaymentMethod($payPaymentStage, $payApproveStage)
    {
        if ($payPaymentStage == $payApproveStage) {
            codecept_debug("\n" . 'Payment methods are equal');
        } else {
            codecept_debug("\n" . 'Payment methods are not equal');
        }
        codecept_debug($payPaymentStage . "\n" . $payApproveStage);
    }

    /**
     * @Description('Сравнение товаров')
     *
     * @param $itemsBasketStage
     * @param $itemsApproveStage
     */
    public function comparisonOfGoods($itemsBasketStage, $itemsApproveStage)
    {
        if (empty(array_diff_key($itemsBasketStage, $itemsApproveStage))
            && empty(array_diff_key($itemsApproveStage, $itemsBasketStage))) {
            codecept_debug("\n" . 'Goods are equal');
        } else {
            codecept_debug("\n" . 'Goods are not equal');
            codecept_debug($itemsBasketStage);
            codecept_debug($itemsApproveStage);
        }
    }

    /**
     * @Description('Сравнение общей суммы')
     *
     * @param $totalBasketStage
     * @param $totalApproveStage
     */
    public function comparisonOfGrandTotal($totalBasketStage, $totalApproveStage)
    {
        if ($totalBasketStage == $totalApproveStage) {
            codecept_debug("\n" . 'Grand totals are equal');
        } else {
            codecept_debug("\n" . 'Grand totals are not equal');
        }
        codecept_debug($totalBasketStage . "\n" . $totalApproveStage);
    }

    /**
     * @Description('Сравнение суммы доставки')
     *
     * @param $totalBasketStage
     * @param $totalApproveStage
     * @param mixed $totaldeliveryStage
     * @param mixed $totalDeliveryApproveStage
     */
    public function comparisonOfTotalDelivery($totaldeliveryStage, $totalDeliveryApproveStage)
    {
        if ($totaldeliveryStage == $totalDeliveryApproveStage) {
            codecept_debug("\n" . 'TotalDelivery are equal');
        } else {
            codecept_debug("\n" . 'TotalDelivery are not equal');
        }
        codecept_debug($totaldeliveryStage . "\n" . $totalDeliveryApproveStage);
    }

    /**
     * @Description('Сравнение суммы скидки')
     *
     * @param $totalBasketStage
     * @param $totalApproveStage
     * @param mixed $totalDiscountStage
     * @param mixed $totalDiscountApproveStage
     */
    public function comparisonOfTotalDiscount($totalDiscountStage, $totalDiscountApproveStage)
    {
        if ($totalDiscountStage == (int) $totalDiscountApproveStage) {
            codecept_debug("\n" . 'TotalDiscount are equal');
        } else {
            codecept_debug("\n" . 'TotalDiscount are not equal');
        }
        codecept_debug($totalDiscountStage . "\n" . $totalDiscountApproveStage);
    }
}
