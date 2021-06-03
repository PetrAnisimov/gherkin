<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Login;
use Page\Main;
use Page\Registration;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Тесты для регистрации")
 */
class RegistrationCest
{
    private $testName;

    private $config;

    /**
     * @var Registration
     */
    private $reg;

    /**
     * @var Main
     */
    private $main;

    /**
     * @var Login
     */
    private $login;

    /**
     * @param AcceptanceTester $I
     * @param Scenario $scenario
     * @param Acceptance $acceptance
     *
     * @throws Exception
     */
    public function _before(AcceptanceTester $I, Scenario $scenario, Acceptance $acceptance)
    {
        $this->testName = $scenario->current('name');
        $this->config = $acceptance->prepareTest($I, $this->testName);

        $this->reg = new Registration($I, $this->config);
        $this->login = new Login($I, $this->config);
        $this->main = new Main($I, $this->config);

        $this->main->addInUrlAuthHttp($I);
        $I->amOnUrl($this->config['url']);
        $this->main->retryClickAfterRefreshPage($I);
        $I->waitForPageLoad();
        $this->main->modalClose($this->testName);
        $this->main->cookieClose();
        $this->reg->toAccount($this->testName);
    }

    /**
     * @group smoke
     * @Description("Регистрация
     *  ->  Зайти на страницу формы
     *  ->  Заполнить поля
     *  ->  Нажать зарегистрироваться
     *  ->  Проверить успешную регистрацию")
     *
     * @Title("registrationTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function registrationTest(AcceptanceTester $I)
    {
        // file is stored in 'tests/_data/passport.jpg'
        $this->reg->sendAttachFile($this->testName);
        $valueInputTel = $I->grabValueFrom($this->config[$this->testName]['tel']);
        '+7 (' == $valueInputTel ? $tel = $I->getRandTelephone() : $tel = $I->getRandTelephoneWithOutMask();
        $this->reg->fillAndSubmit(
            $this->testName,
            'NEWNAME' . $I->getRandString(),
            'NEWLASTNAME' . $I->getRandString(),
            $I->getRandString() . 'TestExample2020@gmail.com',
            'Test202020',
            'Test202020',
            $tel
        );
        $I->waitLoader($this->config[$this->testName]['loadingMask'], 2);
        $this->login->clickProfile($this->testName, false);
        $I->waitLoader($this->config[$this->testName]['loadingMask'], 2);
        $I->checkText(
            $this->config[$this->testName]['insideAccount'],
            $this->config[$this->testName]['insideAccountLctr']
        );
        $this->login->logout($this->testName);
    }
}
