<?php

namespace Page;

use Exception;
use Yandex\Allure\Adapter\Annotation\Description;

class Registration extends \Page\BasePage
{
    /**
     * @Description('Открытие меню ЛИЧНЫЙ КАБИНЕТ в хэдере')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function toAccount($testName)
    {
        $I = $this->tester;
        $I->waitForPageLoad();
        $I->waitForElement($this->config[$testName]['account'], 25);
        $I->click($this->config[$testName]['account']);
        isset($this->config[$testName]['needEnterOfEmail']) ? $I->waitAndClick($this->config[$testName]['enterOfEmail'], 25) : '';
        if (isset($this->config[$testName]['checkBeforeRegistration'])) {
            $I->waitAndClick($this->config[$testName]['fieldWithEmailLoc'], 25);
            $I->fillField($this->config[$testName]['fieldWithEmailLoc'], $this->config[$testName]['fieldWithEmailText']);
            $I->waitAndClick($this->config[$testName]['btnContinue'], 25);
            $I->waitAndClick($this->config[$testName]['btnReg'], 25);
        }
        $I->waitForText($this->config[$testName]['registrationTitle'], 15);
        isset($this->config[$testName]['regformLoc']) ? $I->waitAndClick($this->config[$testName]['regformLoc'], 25) : '';
    }

    /**
     * @Description('Отправка приложенного файла')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function sendAttachFile($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['buttonCheckPassport'])) {
            $I->waitAndClick($this->config[$testName]['buttonCheckPassport'], 5);
            $I->waitAndClick($this->config[$testName]['buttonChooseDocument'], 5);
            $I->waitAndClick($this->config[$testName]['buttonChoosePassport'], 5);
            $path = './tests/_data/' . $this->config[$testName]['image'];
            if (!file_exists($path)) {
                codecept_debug('The file ' . $this->config[$testName]['image'] . ' does not exist - downloading...');
                $url = $this->config[$testName]['imageUrl'];
                file_put_contents($path, file_get_contents($url));
            } else {
                codecept_debug('file exists');
            }
            $I->attachFile($this->config[$testName]['buttonForDowload'], $this->config[$testName]['image']);
            $I->scrollTo($this->config[$testName]['buttonChoosePassport']);
            $I->executeJS('return document.querySelector("' . $this->config[$testName]['checkBoxAgree1'] . '").click()');
            $I->waitAndClick($this->config[$testName]['buttonSend'], 5);
            if (isset($this->config[$testName]['messageWrongFileLoc'])) {
                $I->scrollToTop();
                $I->checkText(
                    $this->config[$testName]['messageWrongFileText'],
                    $this->config[$testName]['messageWrongFileLoc']
                );
            } else {
                $I->scrollToTop();
                $I->waitForElement($this->config[$testName]['thanksVerificationLoc'], 20);
            }
        }
    }

    /**
     * @Description('Регистрация Гостя')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function regGuest($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['buttonCreateAccount'])) {
            $I->waitForElementVisible($this->config[$testName]['inputPassword'], 40);
            $pandomPassword = $I->getRandString() . rand();
            $I->fillField($this->config[$testName]['inputPassword'], $pandomPassword);
            $I->fillField($this->config[$testName]['inputPasswordConfirm'], $pandomPassword);
            $I->click($this->config[$testName]['buttonCreateAccount']);
            $I->checkText(
                $this->config[$testName]['insideAccount'],
                $this->config[$testName]['insideAccountLctr']
            );
        }
    }

    /**
     * @Description('Очищение всех полей')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function clearAllFields($testName)
    {
        $I = $this->tester;
        if ($this->config[$testName]['needClearAllfield']) {
            $allFields = [
                $this->config[$testName]['name'],
                $this->config[$testName]['lastname'],
                $this->config[$testName]['email'],
                $this->config[$testName]['pass'],
                $this->config[$testName]['passConfirm'],
                $this->config[$testName]['tel'],
            ];
            foreach ($allFields as $el) {
                $I->clearFieldPressKey($el);
            }
        }
    }

    /**
     * @Description('Заполнение информации на странице регистрации')
     *
     * @param $testName
     * @param $name
     * @param $lastName
     * @param $mail
     * @param $password
     * @param $password_confirmation
     * @param $tel
     *
     * @throws Exception
     *
     * @return $this
     */
    public function fillAndSubmit($testName, $name, $lastName, $mail, $password, $password_confirmation, $tel)
    {
        $I = $this->tester;
        $I->waitForElementClickable($this->config[$testName]['jur'], 30);
        '  ' == $name ? $I->clearFieldPressKey($this->config[$testName]['name']) : $I->fillField($this->config[$testName]['name'], $name);
        $I->fillField($this->config[$testName]['lastname'], $lastName);
        $I->fillField($this->config[$testName]['email'], $mail);
        $I->fillField($this->config[$testName]['pass'], $password);
        $I->fillField($this->config[$testName]['passConfirm'], $password_confirmation);
        if (isset($this->config[$testName]['tel'])) {
            $I->click($this->config[$testName]['tel']);
            $I->pressKey($this->config[$testName]['tel'], '+' . $tel);
        }
        if (isset($this->config[$testName]['checkBoxAgree2']) &&
        'false' === $I->grabValueFrom($this->config[$testName]['checkValueCheckBox'])) {
            $I->executeJS('return document.querySelector("' . $this->config[$testName]['checkBoxAgree2'] . '").click()');
        }
        if (isset($this->config[$testName]['agreementCheckbox'])) {
            $I->moveMouseOver($this->config[$testName]['agreementCheckbox']);
            $I->click($this->config[$testName]['agreementCheckbox']);
        }
        if (isset($this->config[$testName]['reCaptcha'])) {
            $name = $I->executeJS(
                'return document.querySelector("iframe[src*=\'recaptcha\']").getAttribute("name");'
            );
            $I->switchToIFrame($name);
            $I->click('#recaptcha-anchor');
            $I->switchToIFrame();
        }
        $attributeButton = $I->grabAttributeFrom($this->config[$testName]['button'], 'disabled');
        codecept_debug($attributeButton);
        if ($attributeButton) {
            $I->fillField($this->config[$testName]['name'], $name);
        }
        $I->waitForElementClickable($this->config[$testName]['button'], 10);
        $I->click($this->config[$testName]['button']);

        return $this;
    }
}
