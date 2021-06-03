<?php

namespace Page\Cart;

use Exception;
use Yandex\Allure\Adapter\Annotation\Description;

class CartStage2 extends \Page\BasePage
{
    /**
     * @Description('Выбор метода доставки')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function chooseDeliveryType($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['shippingMethod'])) {
            $I->waitAndclick($this->config[$testName]['shippingMethod'], 20);
        }
        if (isset($this->config[$testName]['shippingMethod2']) && !$I->seePageHasElement($this->config[$testName]['shippingMethod'])) {
            $I->waitAndclick($this->config[$testName]['shippingMethod2'], 5);
            $I->waitForText($this->config[$testName]['shippingMethodText2'], 10, $this->config[$testName]['shippingMethodTextLoc2']);
            $I->click($this->config[$testName]['shippingMethodTime']);
        } else {
            isset($this->config[$testName]['shippingMethodHeadLoc']) ? $I->checkText($this->config[$testName]['shippingMethodHeadText'], $this->config[$testName]['shippingMethodHeadLoc']) : null;
        }
    }

    /**
     * @Description('Выбооо точки забора товара')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function choosePickUpPoint($testName)
    {
        $I = $this->tester;

        if (isset($this->config[$testName]['shippingMethod3'])) {
            $I->waitAndClick($this->config[$testName]['shippingMethod3'], 5);
        }
        $I->waitForElementVisible($this->config[$testName]['mapLoc'], 30);
        for ($i = 1; $i < 25; ++$i) {
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

        $I->waitForElementNotVisible($this->config[$testName]['loadingMask']);
        $I->scrollTo($this->config[$testName]['mapLoc']);

        for ($i = 1; $i < 25; ++$i) {
            try {
                if (!$I->seePageHasElement($this->config[$testName]['choosePoint'])) {
                    $re = $this->config[$testName]['attrRe'];
                    isset($this->config[$testName]['resizeMapsPlus']) ? $I->click($this->config[$testName]['resizeMapsPlus']) : null;
                    $mapPoint = $this->config[$testName]['mapPoint'] . ':nth-child(' . strval($i) . ')';
                    5 === $i ? $mapPoint = $this->config[$testName]['mapPoint'] : null;
                    $addCoordinates = $I->grabAttributeFrom($mapPoint, 'style');
                    codecept_debug($addCoordinates);
                    preg_match($re, $addCoordinates, $matches);
                    $I->clickWithLeftButton(
                        ['css' => $this->config[$testName]['mapLoc']],
                        (int) $matches[1],
                        (int) $matches[2]
                    );
                    $I->scrollTo($this->config[$testName]['scrollToTitle']);
                } elseif ($I->seePageHasElement($this->config[$testName]['choosePoint'])) {
                    break;
                }
            } catch (\Exception $e) {
                codecept_debug('Element not click');
            }
        }
        $I->waitForElementVisible($this->config[$testName]['choosePoint'], 15);
        $I->waitForElementClickable($this->config[$testName]['choosePoint'], 15);
        $I->click($this->config[$testName]['choosePoint']);
    }

    /**
     * @Description('Выбор условий доставки')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function chooseTermsOfDelivery($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['termsOfDelivery'])) {
            $I->waitForElementClickable($this->config[$testName]['termsOfDelivery'], 30);
            $I->click($this->config[$testName]['termsOfDelivery']);
        }
    }

    /**
     * @Description('Оформление даты')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function setDate($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['inputForDateLoc'])) {
            $I->waitForElementVisible($this->config[$testName]['labelWithChooseMethodDelivery'], 10);
            $showElement = false;
            $i = 0;
            do {
                if ($I->seePageHasElement($this->config[$testName]['calendarShow'])) {
                    $showElement = true;
                } else {
                    try {
                        $I->waitForElementClickable($this->config[$testName]['inputForDateLoc'], 15);
                        $I->click($this->config[$testName]['inputForDateLoc']);
                        if ($i < 4) {
                            ++$i;
                        } else {
                            codecept_debug('Вынужденный выход');
                            $showElement = true;
                        }
                    } catch (Exception $e) {
                        codecept_debug($e->getMessage());
                    }
                }
            } while (false === $showElement);

            try {
                $today = date('d.m.Y', (time() + 3600 * 24 * 5));
                $I->fillField($this->config[$testName]['inputForDateLoc'], $today);
            } catch (\Exception $e) {
                codecept_debug($e->getMessage());
            }
        }
    }

    /**
     * @Description('Заполнение имени')
     *
     * @param $testName
     * @param $name
     *
     * @throws Exception
     */
    public function setFLP($testName, $name)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['fieldFLP'])) {
            $I->waitForElementVisible($this->config[$testName]['fieldFLP'], 10);
            $I->fillField($this->config[$testName]['fieldFLP'], $name);
        }
    }

    /**
     * @Description('Заполнение фамилии')
     *
     * @param $testName
     * @param $name
     *
     * @throws Exception
     */
    public function setLastName($testName, $name)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['fieldLastName'])) {
            $I->waitForElementVisible($this->config[$testName]['fieldLastName'], 10);
            $I->fillField($this->config[$testName]['fieldLastName'], $name);
        }
    }

    /**
     * @Description('Заполнение Email')
     *
     * @param $testName
     * @param $name
     *
     * @throws Exception
     */
    public function setEmail($testName, $name)
    {
        $I = $this->tester;
        $I->waitForElementVisible($this->config[$testName]['fieldEmail'], 10);
        $I->fillField($this->config[$testName]['fieldEmail'], $name);
    }

    /**
     * @Description('Сбор условий доставки')
     *
     * @param $terms
     *
     * @throws Exception
     *
     * @return mixed
     */
    public function grabTermsOfDelivery($terms)
    {
        $I = $this->tester;
        $I->waitForElementVisible($terms);
        $termsRules = $I->grabTextFrom($terms);
        codecept_debug($termsRules);

        return $termsRules;
    }

    /**
     * @Description('Информация о доставки')
     *
     * @param mixed $testName
     *
     * @throws Exception
     */
    public function infoDelivery($testName)
    {
        $I = $this->tester;
        if (!isset($this->config[$testName]['infoDeliveryText'])) {
            return;
        }

        if (isset($this->config[$testName]['infoDeliverySlotsText'])) {
            $I->click($this->config[$testName]['chooseAddress']);
            $I->click($this->config[$testName]['selectChooseNewAddress']);
            $I->waitAndClick($this->config[$testName]['toStep'], 15);

            return;
        }
        $I->waitAndClick($this->config[$testName]['toStep'], 15);
        $I->waitForElementNotVisible($this->config[$testName]['loadingMask'], 40);
        $I->waitAndClick($this->config[$testName]['toStep'], 15);
    }

    /**
     * @Description('Выбрать регион доставки')
     *
     * @param mixed $testName
     *
     * @throws Exception
     */
    public function chooseRegionDelivery($testName)
    {
        $I = $this->tester;
        if (!isset($this->config[$testName]['inputCity'])) {
            return;
        }
        $city = $I->grabValueFrom($this->config[$testName]['inputCity']);
        $city != $this->config[$testName]['expectedCity'] ? $chooseRegion = true : $chooseRegion = false;
        if ($chooseRegion) {
            $I->waitAndClick($this->config[$testName]['selectCityOptions'], 5);
            $I->waitAndClick($this->config[$testName]['selectCity'], 5);
            $I->wait(2);
        }
    }

    /**
     * @Description('Переход на Шаг 3')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function goToStep3($testName)
    {
        $I = $this->tester;
        if (!isset($this->config[$testName]['toPaymentMethod'])) {
            return;
        }
        if (isset($this->config[$testName]['checkboxTermsOfDelivery'])) {
            $I->tryToScrollTo($this->config[$testName]['checkboxTermsOfDelivery']);
            $I->tryToExecuteJS("return document.querySelector('" . $this->config[$testName]['checkboxTermsOfDelivery'] . "').click()");
        }
        $I->waitForElement($this->config[$testName]['toPaymentMethod'], 15);
        $I->waitForElementNotVisible($this->config[$testName]['loadingMask'], 40);
        $I->click($this->config[$testName]['toPaymentMethod']);
        $I->waitForElementNotVisible($this->config[$testName]['loadingMask'], 40);
        isset($this->config[$testName]['addClickToNextStep']) ? $I->waitAndclick($this->config[$testName]['toPaymentMethod'], 5) : '';
        $I->checkText($this->config[$testName]['receiptText'], $this->config[$testName]['receiptLoc']);
    }
}
