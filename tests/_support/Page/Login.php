<?php

namespace Page;

use Exception;
use Yandex\Allure\Adapter\Annotation\Description;

class Login extends \Page\BasePage
{
    /**
     * @Description('Ввод логина/пароля и нажатие вход')
     *
     * @param $testName
     *
     * @throws Exception
     *
     * @return $this
     */
    public function login($testName)
    {
        $I = $this->tester;
        codecept_debug('Logging in');
        $I->waitForPageLoad(5);
        if ($I->seePageHasElement($this->config[$testName]['logout'])) {
            $I->waitForElementClickable($this->config[$testName]['account'], 25);
            $I->click($this->config[$testName]['account']);

            return;
        }
        if (isset($this->config[$testName]['loginTitle'])) {
            $I->waitForText($this->config[$testName]['loginTitle'], 25);
        } else {
            $I->waitForElement($this->config['email'], 25);
        }
        $email = $I->grabValueFrom($this->config['email']);
        //login for Prof gategory
        isset($this->config[$testName]['loginProf']) ? $this->config['login'] = $this->config[$testName]['loginProf'] : null;

        '' == $email ? $I->fillField($this->config['email'], $this->config['login']) : null;
        $I->fillField($this->config['pass'], $this->config['password']);
        $I->waitForElementClickable($this->config[$testName]['button'], 15);
        $I->click($this->config[$testName]['button']);
        $this->clickProfile($testName);
        $I->waitForPageLoad();
        $I->waitForText(
            $this->config[$testName]['insideAccount'],
            20,
            $this->config[$testName]['insideAccountLctr']
        );

        return $this;
    }

    /**
     * @Description('Сравнение информации')
     *
     * @param $newName
     * @param $nameLoc
     *
     * @throws Exception
     */
    public function checkInfo($newName, $nameLoc)
    {
        $I = $this->tester;
        $I->waitForElementVisible($nameLoc, 15);
        $name = $I->grabAttributeFrom($nameLoc, 'value');
        codecept_debug($name);
        if ('' == $name) {
            $name = $I->grabTextFrom($nameLoc);
        }
        $name == $newName ? codecept_debug('Info are equal') : codecept_debug('Info are not equal');
        codecept_debug($name);
        codecept_debug($newName);
    }

    /**
     * @Description('Клик по профаилу, если dropdown, то второй клик по личному кабинету')
     *
     * @param bool $twoClick
     * @param mixed $testName
     *
     * @throws Exception
     */
    public function clickProfile($testName, bool $twoClick = true)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['profile'])) {
            try {
                $I->waitForPageLoad(3);
                $I->waitForElement($this->config[$testName]['profile'], 10);
                $I->waitAndClick($this->config[$testName]['profile'], 5);
                isset($this->config[$testName]['clickMyProfile']) && $twoClick ? $I->waitAndClick($this->config[$testName]['clickMyProfile'], 5) : '';
            } catch (\Exception $e) {
                codecept_debug($e->getMessage());
            }
        }
    }

    /**
     * @Description('Сравнение телефона')
     *
     * @param $newPhone
     * @param $phoneLoc
     *
     * @throws Exception
     */
    public function checkPhone($newPhone, $phoneLoc)
    {
        $I = $this->tester;
        $I->waitForElementVisible($phoneLoc, 15);
        $phone = $I->grabAttributeFrom($phoneLoc, 'value');
        '' == $phone || null == $phone ? $phone = $I->grabTextFrom($phoneLoc) : $phone = $I->grabAttributeFrom($phoneLoc, 'value');
        $citeNum = $I->getMaskedTelephone($phone);
        $usedNum = $I->getMaskedTelephone($newPhone);
        if ('77' !== substr($usedNum, 0, 2)) {
            $citeNum == $usedNum ? codecept_debug('Phone number is correct') : codecept_debug('Phone number is wrong');
        } else {
            $citeNum == '7' . $usedNum ? codecept_debug('Phone number is correct') : codecept_debug('Phone number is wrong');
        }
        codecept_debug($citeNum);
        codecept_debug('7' . $usedNum);
    }

    /**
     * @Description('Логин для негативного тестирования')
     *
     * @param $testName
     * @param $login
     * @param $password
     *
     * @throws Exception
     *
     * @return $this
     */
    public function loginN($testName, $login, $password)
    {
        $I = $this->tester;
        codecept_debug('Logging in');

        if (isset($this->config[$testName]['loginTitle'])) {
            $I->waitForText($this->config[$testName]['loginTitle'], 25);
        } else {
            $I->waitForElement($this->config['email'], 25);
        }
        $email = $I->grabValueFrom($this->config['email']);
        codecept_debug($email);
        '' == $email ? $I->fillField($this->config['email'], $login) : null;
        $I->fillField($this->config['pass'], $password);
        $I->waitForElementClickable($this->config[$testName]['button'], 15);
        $I->click($this->config[$testName]['button']);

        return $this;
    }

    /**
     * @Description('Очищение всех полей в логине')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function clearAllFieldsInLogin($testName)
    {
        $I = $this->tester;
        if (isset($this->config[$testName]['needClearAllfieldInLogin'])) {
            $allFields = [
                $this->config['email'],
                $this->config['pass'],
            ];
            foreach ($allFields as $el) {
                $I->clearFieldPressKey($el);
            }
        }
    }

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
        $I->waitForPageLoad(2);
        $I->waitForElementClickable($this->config[$testName]['account'], 25);
        $I->click($this->config[$testName]['account']);
        if (isset($this->config[$testName]['checkBeforeLogin'])) {
            $I->waitAndClick($this->config[$testName]['fieldWithEmailLoc'], 25);
            $I->fillField($this->config[$testName]['fieldWithEmailLoc'], $this->config[$testName]['fieldWithEmailText']);
            $I->waitAndClick($this->config[$testName]['btnContinue'], 25);
        }
        if (isset($this->config[$testName]['needEnterOfEmail']) && $I->seePageHasElement($this->config[$testName]['enterOfEmail'])) {
            $I->waitForElementClickable($this->config[$testName]['enterOfEmail'], 25);
            $I->click($this->config[$testName]['enterOfEmail']);
        }
    }

    /**
     * @Description('Выход из аккаунта')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function logout($testName)
    {
        $I = $this->tester;
        codecept_debug('Logging out');
        if (!$I->seePageHasElement($this->config[$testName]['logout'])) {
            $this->toAccount($testName);
        }
        $I->waitForElementClickable($this->config[$testName]['logout'], 15);

        if (isset($this->config[$testName]['logoutMsg2'])) {
            try {
                $I->click($this->config[$testName]['logout']);
                $I->waitForText($this->config[$testName]['logoutMsg']);
            } catch (\Exception $e) {
                $I->waitForText($this->config[$testName]['logoutMsg2']);
            }
        } else {
            $I->click($this->config[$testName]['logout']);
            $I->waitForText($this->config[$testName]['logoutMsg']);
        }
    }

    /**
     * @param $testName
     */
    public function beforeTest($testName)
    {
        $I = $this->tester;

        try {
            $I->envValidate($testName);
            $this->config = $I->envParse();
        } catch (\PHPUnit\Framework\Exception $e) {
            $I->skip('this Cest is not set in env.json');
        }
        $I->amOnUrl($this->config['url']);
        $I->resizeWindow(2000, 2000);
    }
}
