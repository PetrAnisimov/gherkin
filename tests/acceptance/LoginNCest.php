<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Login;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Тест валидации логина")
 * @Title("LoginNTest")
 */
class LoginNCest
{
    /**
     * @var Login
     */
    private $login;

    private $config;

    private $testName;

    /**
     * @var Main
     */
    private $main;

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
        $this->main = new Main($I, $this->config);

        $this->main->addInUrlAuthHttp($I);
        $I->amOnUrl($this->config['url']);
        $this->main->retryClickAfterRefreshPage($I);
        $this->main->modalClose($this->testName);
        $this->main->cookieClose();
        $this->login->toAccount($this->testName);
    }

    /**
     * @Description("Логин
     *     -> Ввести некорректные данные
     *     -> Проверить что не вошли в аккаунт")
     *
     * @param AcceptanceTester $I
     *
     * @Title("negativeLoginTest")
     *
     * @throws Exception
     */
    public function negativeLoginTest(\AcceptanceTester $I)
    {
        $I->waitForPageLoad();
        //вход с пустым полем пароля
        $this->login->loginN($this->testName, $this->config[$this->testName]['login'], '');
        $I->checkText(
            $this->config[$this->testName]['passfieldIsRequired'],
            $this->config[$this->testName]['passfieldIsRequiredLctr']
        );
        codecept_debug("Checked - login with empty passfield. \n");
        $this->login->clearAllFieldsInLogin($this->testName);

        //вход с пустым полем email
        $this->login->loginN($this->testName, '', $this->config[$this->testName]['password']);
        $I->checkText(
            $this->config[$this->testName]['emailfieldIsRequired'],
            $this->config[$this->testName]['emailfieldIsRequiredLctr']
        );
        codecept_debug("Checked - login with empty email. \n");
        $this->login->clearAllFieldsInLogin($this->testName);

        //Ввести некорректные данные
        $this->login->loginN($this->testName, $this->config[$this->testName]['login'], $this->config[$this->testName]['password']);
        $I->checkText(
            $this->config[$this->testName]['wrongEmailOrPass'],
            $this->config[$this->testName]['wrongEmailOrPassLocator']
        );
        if (isset($this->config[$this->testName]['alertModalСlose'])) {
            $I->waitAndclick($this->config[$this->testName]['alertModalСlose'], 5);
        }
        if (isset($this->config[$this->testName]['enterOfEmail'])) {
            $I->waitAndclick($this->config[$this->testName]['enterOfEmail'], 5);
        }
        codecept_debug("Checked - login with wrongEmail. \n");
    }
}
