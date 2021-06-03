<?php

namespace Page;

use Exception;
use Yandex\Allure\Adapter\Annotation\Description;

class Address extends \Page\BasePage
{
    /**
     * @Description('Установить адрес')
     *
     * @param $cs
     * @param $place
     * @param $placeSelector
     *
     * @throws Exception
     */
    public function setLocation($cs, $place, $placeSelector)
    {
        $I = $this->tester;
        $I->waitForElementVisible($place, 10);

        for ($i = 1; $i < 3; ++$i) {
            try {
                $I->waitAndclick($place, 5);
                $textInput = $I->grabTextFrom($place);
                '' === $textInput ? $I->fillField($place, $cs) : '';
                if (!$I->seePageHasElement($placeSelector)) {
                    return;
                }
                $I->waitForElementVisible($placeSelector, 15);
                $I->waitForElementClickable($placeSelector, 15);
                $I->click($placeSelector);
                break;
            } catch (Exception $e) {
            }
        }
    }

    /**
     * @Description('Установить Индекс')
     *
     * @param mixed $testName
     * @param mixed $index
     *
     * @throws Exception
     */
    public function setIndex($testName, $index, bool $selectOption = false)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['indexLoc'])) {
            $I->waitForElementVisible($this->config[$testName]['indexLoc'], 10);
            $I->fillField($this->config[$testName]['indexLoc'], $index);
            if ($selectOption) {
                $I->waitAndClick($this->config[$testName]['indexSuggestion'], 5);
            }
        }
    }

    /**
     * @Description('Установить Индекс')
     *
     * @param mixed $testName
     * @param mixed $city
     *
     * @throws Exception
     */
    public function setCity($testName, $city, bool $selectOption = false)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['cityLoc'])) {
            $I->waitForElementVisible($this->config[$testName]['cityLoc'], 10);
            $I->fillField($this->config[$testName]['cityLoc'], $city);
            if ($selectOption) {
                $I->waitAndClick($this->config[$testName]['citySuggestion'], 5);
            }
        }
    }

    /**
     * @Description('Установить телефон')
     *
     * @param $testName
     * @param $tel
     *
     * @throws Exception
     */
    public function setTelephone($testName, $tel)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['telephoneLoc'])) {
            $I->waitForElementNotVisible($this->config[$testName]['loadingMask'], 40);
            $valueInputTel = $I->grabValueFrom($this->config[$testName]['telephoneLoc']);
            '+7 (' == $valueInputTel ? $tel : $tel = '+76546464646';
            $I->waitForElementVisible($this->config[$testName]['telephoneLoc'], 10);
            $I->click($this->config[$testName]['telephoneLoc']);
            $I->pressKey($this->config[$testName]['telephoneLoc'], $tel);
        }
    }

    /**
     * @Description('Установить квартиру')
     *
     * @param $testName
     * @param $street
     *
     * @throws Exception
     */
    public function setApartment($testName, $street)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['apartmentLoc'])) {
            $I->waitForElementVisible($this->config[$testName]['apartmentLoc'], 10);
            $I->fillField($this->config[$testName]['apartmentLoc'], $street);
        }
    }

    /**
     * @Description('Установить адрес')
     *
     * @param $testName
     * @param $address
     *
     * @throws Exception
     */
    public function setAddress($testName, $address)
    {
        $I = $this->tester;
        $I->waitForElementVisible($this->config[$testName]['addressLoc'], 10);
        $I->fillField($this->config[$testName]['addressLoc'], $address);
    }

    /**
     * @Description('Установить новый адрес')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function newAddress($testName)
    {
        $I = $this->tester;
        $I->waitForElementVisible($this->config[$testName]['newAddressBtn'], 10);
        $I->waitAndClick($this->config[$testName]['newAddressBtn'], 5);
        $I->waitForElement($this->config[$testName]['insideNewAddressLoc'], 10);
        for ($i = 1; $i < 4; ++$i) {
            try {
                if (!$I->seePageHasElement($this->config[$testName]['cityLoc'])) {
                    codecept_debug('Element CityLoc not presented');
                    $I->click($this->config[$testName]['newAddressBtn']);
                } else {
                    break;
                }
            } catch (\Exception $e) {
            }
        }
    }

    /**
     * @Description('Сохранить адрес')
     *
     * @param $testName
     * @param bool $makeDefault
     *
     * @throws Exception
     */
    public function saveAddress($testName, bool $makeDefault = false)
    {
        $I = $this->tester;
        if ($makeDefault) {
            $I->waitForElementVisible($this->config[$testName]['makeDefaultAddress'], 10);
            $I->click($this->config[$testName]['makeDefaultAddress']);
        }
        $I->waitForElementVisible($this->config[$testName]['saveAddressBtn'], 10);
        $I->click($this->config[$testName]['saveAddressBtn']);
        if (isset($this->config[$testName]['afterSaveMsg'])) {
            $I->checkText($this->config[$testName]['afterSaveMsg'], $this->config[$testName]['afterSaveMsgLoc']);
        }
    }

    /**
     * @Description('Удаление всех адресов')
     *
     * @param $deleteBtnAtr
     * @param $deleteBtnText
     * @param $testName
     */
    public function deleteAllAddresses($deleteBtnAtr, $deleteBtnText, $testName)
    {
        $I = $this->tester;
        $elem = '(//*[contains(@' . $deleteBtnAtr . ',"' . $deleteBtnText . '")])[last()]';
        $elementClicked = false;
        $i = 0;
        do {
            if (!$I->seePageHasElement($elem)) {
                $elementClicked = true;
            } else {
                try {
                    $I->waitForElementClickable($elem, 15);
                    $I->click($elem);
                    if (isset($this->config[$testName]['popUp'])) {
                        $I->acceptPopup();
                    }
                } catch (Exception $e) {
                    if ($i < 3) {
                        ++$i;
                    } else {
                        codecept_debug('Вынужденный выход');
                        $elementClicked = true;
                    }
                }
            }
        } while (false === $elementClicked);
    }
}
