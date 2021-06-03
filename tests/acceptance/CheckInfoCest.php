<?php

use Codeception\Scenario;
use Codeception\Util\Locator;
use Helper\Acceptance;
use Page\Account;
use Page\Login;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Тест проверки OPT-IN в Личном Кабинете (ЛК) ")
 * @Title("CheckInfoTest")
 */
class CheckInfoCest
{
    /**
     * @var Login
     */
    private $login;

    /**
     * @var Account
     */
    private $account;

    private $config;

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
        $this->account = new Account($I, $this->config);
        $this->main->addInUrlAuthHttp($I);
        $I->amOnUrl($this->config['url']);
        $this->main->modalClose($this->testName);
        $acceptance->loginConfirm($this->testName, $this->login);
        $I->amOnPage($this->config[$this->testName]['addToUrl']);
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Перейти в раздел Мои предпочтения
     *     -> Выбрать способ связи
     *     -> Сохранить
     *     -> Проверить что способ связи сохранился")
     *
     * @throws Exception
     * @Title("checkOptIn")
     */
    public function checkOptIn()
    {
        $this->account->checkCheckBox($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Перейти в раздел Мои заказы
     *     -> Проверить подзаголовки")
     *
     * @throws Exception
     * @Title("checkTextWithin")
     */
    public function checkTextWithin()
    {
        $this->account->toNewCategory(
            $this->config[$this->testName]['toMyOrders'],
            $this->config[$this->testName]['MyOrdersText'],
            $this->config[$this->testName]['MyOrdersLoc']
        );
        $links = $this->config[$this->testName]['OrdersHistoryListLinks'];
        $this->account->TextListCheck($links);
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Перейти в раздел Мои устройства
     *     -> Заполнить серийный номер
     *     -> Зарегистрировать устройство
     *     -> Проверить что устройство зарегистрировалось")
     *
     * @throws Exception
     * @Title("checkAddDevice")
     */
    public function checkAddDevice(AcceptanceTester $I)
    {
        $this->account->toNewCategory(
            $this->config[$this->testName]['toMyDevice'],
            $this->config[$this->testName]['MyDeviceText'],
            $this->config[$this->testName]['MyDeviceLoc']
        );
        $I->fillField($this->config[$this->testName]['serialNumberLoc'], $this->config[$this->testName]['serialNumberText']);
        $I->waitAndClick($this->config[$this->testName]['regBtn'], 5);
        $I->checkText($this->config[$this->testName]['messageText'], $this->config[$this->testName]['messageLoc']);
        $I->checkText($this->config[$this->testName]['serialNumberText'], $this->config[$this->testName]['serialNumberTextLoc']);
        $I->seePageHasElement($this->config[$this->testName]['delSerialNumber']) ? $I->waitAndClick(Locator::elementAt($this->config[$this->testName]['delSerialNumber'], 2), 5) : null;
        $I->tryToAcceptPopup();
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Перейти в раздел Мои устройства
     *     -> Заполнить неверный серийный номер
     *     -> Зарегистрировать устройство
     *     -> Проверить что устройство не зарегистрировалось")
     *
     * @throws Exception
     * @Title("negativeCheckAddDevice")
     */
    public function negativeCheckAddDevice(AcceptanceTester $I)
    {
        //ввод не правильного серийного номера до 8 символов
        $this->account->toNewCategory(
            $this->config[$this->testName]['toMyDevice'],
            $this->config[$this->testName]['MyDeviceText'],
            $this->config[$this->testName]['MyDeviceLoc']
        );
        $I->fillField($this->config[$this->testName]['serialNumberLoc'], $this->config[$this->testName]['wrongNumber1']);
        $I->waitAndClick($this->config[$this->testName]['regBtn'], 5);
        $I->checkText($this->config[$this->testName]['validationMessageText'], $this->config[$this->testName]['validationMessageLoc']);
        codecept_debug("Checked - add wrong serial number 6 symbols. \n");
        $I->clearFieldPressKey($this->config[$this->testName]['serialNumberLoc']);

        //ввод не правильного серийного номера 8 символов
        $I->fillField($this->config[$this->testName]['serialNumberLoc'], $this->config[$this->testName]['wrongNumber2']);
        $I->waitAndClick($this->config[$this->testName]['regBtn'], 5);
        $I->checkText($this->config[$this->testName]['validationMessageTextNotDevice'], $this->config[$this->testName]['messageLocNotDevice']);
        codecept_debug("Checked - add wrong serial number 8 symbols. \n");
        $I->clearFieldPressKey($this->config[$this->testName]['serialNumberLoc']);

        //ввод уже зарегистрированного устройства
        $I->fillField($this->config[$this->testName]['serialNumberLoc'], $this->config[$this->testName]['serialNumberText']);
        $I->waitAndClick($this->config[$this->testName]['regBtn'], 5);
        $I->checkText($this->config[$this->testName]['validationMessageTextAlreadyDevice'], $this->config[$this->testName]['messageLocAlreadyDevice']);
        codecept_debug("Checked - already added device. \n");
    }
}
