<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Account;
use Page\Login;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Тест Личного Кабинета (ЛК)")
 */
class AccountInfoCest
{
    /**
     * @var Login
     */
    private $login;

    /**
     * @var Main
     */
    private $main;

    /**
     * @var Account
     */
    private $account;

    private $config;

    private $testName;

    /**
     * @Description("Вход в аккаунт (запускается перед каждым тестом)")
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
        $this->account = new Account($I, $this->config);

        $this->main->addInUrlAuthHttp($I);
        $I->amOnUrl($this->config['url']);
        $this->main->retryClickAfterRefreshPage($I);
        $this->main->modalClose($this->testName);
        $this->main->cookieClose();
        $acceptance->loginConfirm($this->testName, $this->login);
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Моя контактная информация
     *     -> Изменить имя
     *     -> Сохранить
     *     -> Проверить имя")
     *
     * @Title("changeNameTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function changeNameTest(\AcceptanceTester $I)
    {
        $I->waitForPageLoad();
        $this->account->toNewCategory(
            $this->config[$this->testName]['toPersonalInfo'],
            $this->config[$this->testName]['insidePersonalInfoText'],
            $this->config[$this->testName]['insidePersonalInfoLoc']
        );
        $newname = 'NEWNAME' . $I->getRandString();
        $this->account->changePersonalInfo(
            $this->config[$this->testName]['personNameLoc'],
            $this->config[$this->testName]['savePersonBtn'],
            $newname
        );
        if (isset($this->config[$this->testName]['addToUrl'])) {
            $I->amOnPage($this->config[$this->testName]['addToUrl']);
        }
        $this->login->checkInfo($newname, $this->config[$this->testName]['afterSaveLoc']);
        $this->login->clickProfile($this->testName, false);
        $this->login->logout($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Моя контактная информация
     *     -> Изменить фамилию
     *     -> Сохранить
     *     -> Проверить фамилию")
     * @Title("changeLastNameTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function changeLastNameTest(\AcceptanceTester $I)
    {
        $I->waitForPageLoad();
        $this->login->clickProfile($this->testName);
        $this->account->toNewCategory(
            $this->config[$this->testName]['toPersonalInfo'],
            $this->config[$this->testName]['insidePersonalInfoText'],
            $this->config[$this->testName]['insidePersonalInfoLoc']
        );
        $newlastname = 'NEWLASTNAME' . $I->getRandString();
        $this->account->changePersonalInfo(
            $this->config[$this->testName]['personLastNameLoc'],
            $this->config[$this->testName]['savePersonBtn'],
            $newlastname
        );
        if (isset($this->config[$this->testName]['addToUrl'])) {
            $I->amOnPage($this->config[$this->testName]['addToUrl']);
        }
        $this->login->checkInfo($newlastname, $this->config[$this->testName]['afterSaveLoc']);
        $this->login->clickProfile($this->testName, false);
        $this->login->logout($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Моя контактная информация
     *     -> Изменить телефон
     *     -> Сохранить
     *     -> Проверить телефон")
     * @Title("changeTelephoneTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function changeTelephoneTest(\AcceptanceTester $I)
    {
        $I->waitForPageLoad();
        $this->login->clickProfile($this->testName);
        $this->account->toNewCategory(
            $this->config[$this->testName]['toPersonalInfo'],
            $this->config[$this->testName]['insidePersonalInfoText'],
            $this->config[$this->testName]['insidePersonalInfoLoc']
        );
        isset($this->config[$this->testName]['clickBeforeInputTel']) ? $I->waitAndClick($this->config[$this->testName]['clickBeforeInputTel'], 5) : '';
        $valueInputTel = $I->grabValueFrom($this->config[$this->testName]['personTelephoneLoc']);
        '+7 (' == $valueInputTel ? $newTelephone = $I->getRandTelephone() : $newTelephone = '+' . $I->getRandTelephoneWithOutMask();
        $this->account->fillPassword($this->testName);
        $this->account->changePersonalInfo(
            $this->config[$this->testName]['personTelephoneLoc'],
            $this->config[$this->testName]['savePersonBtn'],
            $newTelephone
        );
        isset($this->config[$this->testName]['addToUrl']) ? $I->amOnPage($this->config[$this->testName]['addToUrl']) : '';
        $this->login->checkPhone($newTelephone, $this->config[$this->testName]['afterSaveLoc']);
        $this->login->clickProfile($this->testName, false);
        $this->login->logout($this->testName);
    }
}
