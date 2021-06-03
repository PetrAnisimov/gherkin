<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Login;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Тест логина")
 */
class LoginCest
{
    /**
     * @var Login
     */
    private $login;

    /**
     * @var Main
     */
    private $main;

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

        $this->main->addInUrlAuthHttp($I);
        $I->amOnUrl($this->config['url']);
        $this->main->retryClickAfterRefreshPage($I);
        $this->main->modalClose($this->testName);
        $this->main->cookieClose();
        $this->login->toAccount($this->testName);
    }

    /**
     * @group smoke
     * @Description("Логин
     *     -> Проверить что вошли в аккаунт
     *     -> Выйти")
     *
     * @param AcceptanceTester $I
     *
     * @Title("loginTest")
     *
     * @throws Exception
     */
    public function loginTest(AcceptanceTester $I)
    {
        $this->login->login($this->testName);
        $I->waitForPageLoad();
        $I->checkText(
            $this->config[$this->testName]['insideAccount'],
            $this->config[$this->testName]['insideAccountLctr']
        );
        $this->login->clickProfile($this->testName, false);
        $this->login->logout($this->testName);
    }
}
