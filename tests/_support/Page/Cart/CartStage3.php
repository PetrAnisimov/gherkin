<?php

namespace Page\Cart;

use Exception;
use Yandex\Allure\Adapter\Annotation\Description;

class CartStage3 extends \Page\BasePage
{
    /**
     * @Description('Выбор метода оплаты')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function choosePaymentMethod($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['paymentMethod'])) {
            $I->waitForElementClickable($this->config[$testName]['paymentMethod'], 15);
            $I->click($this->config[$testName]['paymentMethod']);
            $I->waitForElementNotVisible($this->config[$testName]['loadingMask'], 15);
        }
    }

    /**
     * @Description('Добавить промокод')
     *
     * @param $testName
     * @param mixed $totalBasketStage
     *
     * @throws Exception
     */
    public function setPromoCode($testName, $totalBasketStage)
    {
        $I = $this->tester;
        if (!isset($this->config[$testName]['promoCode'])) {
            return;
        }
        $promoCode = $I->grabValueFrom($this->config[$testName]['promoCodeLoc']);
        if ('' === $promoCode) {
            $I->waitForElementClickable($this->config[$testName]['promoCodeLoc'], 15);
            $I->click($this->config[$testName]['promoCodeLoc']);
            $I->fillfield($this->config[$testName]['promoCodeLoc'], $this->config[$testName]['promoCode']);
            $promoCode = $I->grabValueFrom($this->config[$testName]['promoCodeLoc']);
            codecept_debug($promoCode);
            $I->click($this->config[$testName]['promoCodeButton']);
            if ($I->seePageHasElement($this->config[$testName]['promoCodeApply'])) {
                $I->waitForElement($this->config[$testName]['promoCodeApply'], 15);
                $discountPromoCode = $totalBasketStage * 0.20;

                return $totalBasketStage - $discountPromoCode;
            }

            return $totalBasketStage;
        }
    }

    /**
     * @Description('Добавить скидку онлайн')
     *
     * @param $testName
     * @param mixed $totalBasketStage
     *
     * @throws Exception
     */
    public function setDiscountPayOnline($testName, $totalBasketStage)
    {
        $I = $this->tester;
        $DiscountPayOnline = round($totalBasketStage * 0.05);

        return $totalBasketStage - $DiscountPayOnline;
    }

    /**
     * @Description('Выбор чека')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function chooseReceiptType($testName)
    {
        $I = $this->tester;
        $I->executeJS(
            'document.querySelector("' . $this->config[$testName]['personType'] . '").click()'
        );
    }

    /**
     * @Description('Сбор метода оплаты')
     *
     * @param $pay
     *
     * @throws Exception
     *
     * @return mixed
     */
    public function grabPaymentMethod($pay)
    {
        $I = $this->tester;
        $I->waitForElementVisible($pay);
        $payResult = $I->grabTextFrom($pay);
        codecept_debug($payResult);

        return $payResult;
    }

    /**
     * @Description('Переход на Шаг 4')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function goToStep4($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['toStep4'])) {
            $I->waitForElementClickable($this->config[$testName]['toStep4'], 15);
            $I->click($this->config[$testName]['toStep4']);
            $I->waitForElementNotVisible($this->config[$testName]['loadingMask'], 40);
            $I->checkText(
                $this->config[$testName]['checkInfAboutDeliveryText'],
                $this->config[$testName]['checkInfAboutDeliveryLoc']
            );
        }
    }
}
