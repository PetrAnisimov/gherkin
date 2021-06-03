<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Account;
use Page\Address;
use Page\Cart\CartStage2;
use Page\Login;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Тест Личного Кабинета (ЛК)")
 */
class AccountAddressCest
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

    /**
     * @var Address
     */
    private $address;

    private $config;

    private $testName;

    /**
     * @var CartStage2
     */
    private $cartStage2;

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

        $this->login = new Login($I, $this->config);
        $this->account = new Account($I, $this->config);
        $this->main = new Main($I, $this->config);
        $this->address = new Address($I, $this->config);
        $this->cartStage2 = new CartStage2($I, $this->config);

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
     *     -> Добавить адреса
     *     -> Добавить другой адрес
     *     -> Сохранить")
     * @Title("newAddressTest")
     *
     * @throws Exception
     */
    public function newAddressTest(AcceptanceTester $I)
    {
        $I->waitForPageLoad();
        $this->account->toNewCategory(
            $this->config[$this->testName]['toPersonalAddresses'],
            $this->config[$this->testName]['insidePersonalAddressesText'],
            $this->config[$this->testName]['insidePersonalAddressesLoc']
        );
        $this->address->newAddress($this->testName);
        $this->address->setLocation(
            'Санкт-Петербург',
            $this->config[$this->testName]['cityLoc'],
            $this->config[$this->testName]['cityListSelectorLoc']
        );
        if (isset($this->config[$this->testName]['streetLoc'])) {
            $this->address->setLocation(
                'ул Ленина, д.26',
                $this->config[$this->testName]['streetLoc'],
                $this->config[$this->testName]['streetListSelectorLoc']
            );
        }
        $this->address->setApartment($this->testName, '555');
        $this->address->setIndex($this->testName, '192076', true);
        $this->cartStage2->setFLP($this->testName, 'SayMyName');
        $this->cartStage2->setLastName($this->testName, 'SayMyName');
        $this->address->setTelephone($this->testName, '+76546464646');
        $this->address->saveAddress($this->testName);
        $I->waitForElementClickable($this->config[$this->testName]['deleteAddressLoc'], 30);
        $I->click($this->config[$this->testName]['deleteAddressLoc']);
        $I->tryToAcceptPopup();
        isset($this->config[$this->testName]['btnOk']) ? $I->waitAndClick($this->config[$this->testName]['btnOk'], 5) : '';
        if (isset($this->config[$this->testName]['emptyAddAddressLoc'])) {
            $I->waitForElementVisible($this->config[$this->testName]['emptyAddAddressLoc']);
            $I->waitForText($this->config[$this->testName]['emptyAddAddressText'], 10, $this->config[$this->testName]['emptyAddAddressLoc']);
        }
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Добавить адреса
     *     -> Добавить другой адрес (без региона)
     *     -> Сохранить")
     * @Title("newAddress2Test")
     *
     * @throws Exception
     */
    public function newAddress2Test()
    {
        $this->account->toNewCategory(
            $this->config[$this->testName]['toPersonalAddresses'],
            $this->config[$this->testName]['insidePersonalAddressesText'],
            $this->config[$this->testName]['insidePersonalAddressesLoc']
        );
        $this->address->newAddress($this->testName);
        $this->address->setLocation(
            'Москва',
            $this->config[$this->testName]['cityLoc'],
            $this->config[$this->testName]['cityListSelectorLoc']
        );
        $this->address->setLocation(
            'ул Центральная, 1',
            $this->config[$this->testName]['streetLoc'],
            $this->config[$this->testName]['streetListSelectorLoc']
        );
        $this->address->setApartment($this->testName, '777');
        $this->address->saveAddress($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Добавить адреса
     *     -> Добавить другой адрес (без региона)
     *     -> Установить адрес по умолчанию
     *     -> Сохранить")
     * @Title("newDefaultAddressTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function newDefaultAddressTest(AcceptanceTester $I)
    {
        $this->account->toNewCategory(
            $this->config[$this->testName]['toPersonalAddresses'],
            $this->config[$this->testName]['insidePersonalAddressesText'],
            $this->config[$this->testName]['insidePersonalAddressesLoc']
        );
        $this->address->newAddress($this->testName);
        $this->address->setLocation(
            'Москва',
            $this->config[$this->testName]['cityLoc'],
            $this->config[$this->testName]['cityListSelectorLoc']
        );
        $this->address->setLocation(
            'ул Центральная, 1',
            $this->config[$this->testName]['streetLoc'],
            $this->config[$this->testName]['streetListSelectorLoc']
        );
        $newApartment = "1кв{$I->getRandString()}";
        $this->address->setApartment($this->testName, $newApartment);
        $this->address->saveAddress($this->testName, true);
        $I->checkText($newApartment, $this->config[$this->testName]['defaultAddressTitle']);
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Добавить адреса
     *     -> Добавить другой адрес (с регионом)
     *     -> Сохранить")
     * @Title("newAddressWithRegionTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function newAddressWithRegionTest(\AcceptanceTester $I)
    {
        $this->account->toNewCategory(
            $this->config[$this->testName]['toPersonalAddresses'],
            $this->config[$this->testName]['insidePersonalAddressesText'],
            $this->config[$this->testName]['insidePersonalAddressesLoc']
        );
        $this->address->newAddress($this->testName);
        $this->address->setTelephone($this->testName, '9007771122');
        $newAddress = "Пушкина 17 1кв{$I->getRandString()}";
        $this->address->setAddress($this->testName, $newAddress);
        $I->selectOptionList($this->config[$this->testName]['cityLoc'], 'Анадырь');
        $I->selectOptionList($this->config[$this->testName]['regionLoc'], 'Мурманская область');
        $this->address->saveAddress($this->testName);
        $I->checkText($newAddress, $this->config[$this->testName]['lastAddressTitle']);
    }

    /**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Удалить все адреса")
     * @Title("deleteAllAddressesTest")
     *
     * @throws Exception
     */
    public function deleteAllAddressesTest()
    {
        $this->account->toNewCategory(
            $this->config[$this->testName]['toPersonalAddresses'],
            $this->config[$this->testName]['insidePersonalAddressesText'],
            $this->config[$this->testName]['insidePersonalAddressesLoc']
        );
        $this->address->deleteAllAddresses(
            $this->config[$this->testName]['attribute'],
            $this->config[$this->testName]['attributeText'],
            $this->testName
        );
    }
}
