<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Login;
use Page\Main;
use Page\Registration;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Тесты валидации для регистрации")
 */
class RegistrationNCest
{
    /**
     * @var Registration
     */
    private $reg;

    private $config;

    private $testName;

    private $login;

    /**
     * @var Main
     */
    private $main;

    /**
     * @Description("Переход на страницу регистрации (запускается перед каждым тестом)")
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

        $this->reg = new Registration($I, $this->config);
        $this->login = new Login($I, $this->config);
        $this->main = new Main($I, $this->config);

        $this->main->addInUrlAuthHttp($I);
        $I->amOnUrl($this->config['url']);
        $this->main->retryClickAfterRefreshPage($I);
        $this->main->modalClose($this->testName);
        $this->main->cookieClose();
        $this->reg->toAccount($this->testName);
    }

    /**
     * @Description("Регистрация
     *     -> Нажать регистрация с пустым полем имени
     *     -> Проверить что регистрации не произошло")
     * @Title("negativeRegTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function negativeRegTest(\AcceptanceTester $I)
    {
        $this->reg->sendAttachFile($this->testName);
        $valueInputTel = $I->grabValueFrom($this->config[$this->testName]['tel']);
        '+7 (' == $valueInputTel ? $tel = $I->getRandTelephone() : $tel = $I->getRandTelephoneWithOutMask();
        //регистрация с пустым полем имени
        $this->reg->fillAndSubmit(
            $this->testName,
            '  ',
            'Немобой',
            'johndoetestexample2018@gmail.com',
            'Test201818',
            'Test2018',
            $tel
        );
        $I->checkText(
            $this->config[$this->testName]['nameFieldRequiredMsg'],
            $this->config[$this->testName]['nameRequiredLoc']
        );
        $this->reg->clearAllFields($this->testName);
        codecept_debug("Checked - reg with empty name. \n");
        //регистрация с пустым полем фамилии
        $this->reg->fillAndSubmit(
            $this->testName,
            'Ёёшкаюя',
            '  ',
            'johndoetestexample2018@gmail.com',
            'Test201818',
            'Test201818',
            $tel
        );
        $I->checkText(
            $this->config[$this->testName]['lastNameFieldRequiredMsg'],
            $this->config[$this->testName]['lastNameRequiredLoc']
        );
        $this->reg->clearAllFields($this->testName);
        codecept_debug("Checked - reg with empty lastname. \n");
        //регистрация с пустым полем пароля
        $this->reg->fillAndSubmit(
            $this->testName,
            'John',
            'Doe',
            'johndoetestexample2018@gmail.com',
            '  ',
            'Test201818',
            $tel
        );
        $I->checkText(
            $this->config[$this->testName]['passRequiredMsg'],
            $this->config[$this->testName]['passRequiredLoc']
        );
        $this->reg->clearAllFields($this->testName);
        codecept_debug("Checked - reg with empty pass. \n");
        //регистрация с пустым полем подтверждения пароля
        $this->reg->fillAndSubmit(
            $this->testName,
            'John',
            'Doe',
            'johndoetestexample2018@gmail.com',
            'Test201818',
            '  ',
            $tel
        );
        $I->checkText(
            $this->config[$this->testName]['passConfirmRequiredMsg'],
            $this->config[$this->testName]['passConfirmLoc']
        );
        $this->reg->clearAllFields($this->testName);
        codecept_debug("Checked - reg with empty passconfirm. \n");
        //регистрация с несовпадающими паролями
        $this->reg->fillAndSubmit(
            $this->testName,
            'John',
            'Doe',
            'johndoetestexample2018@gmail.com',
            'Test201818',
            'test201*',
            $tel
        );
        $I->checkText(
            $this->config[$this->testName]['passMatchRequired'],
            $this->config[$this->testName]['passMatchLoc']
        );
        $this->reg->clearAllFields($this->testName);
        codecept_debug("Checked - reg with different pass. \n");
        // регистрация с невалидной почтой
        $this->reg->fillAndSubmit(
            $this->testName,
            'John',
            'Doe',
            'johndoetestexample2018gmail.com',
            'Test201818',
            'Test201818',
            $tel
        );
        $I->checkText(
            $this->config[$this->testName]['validEmailRequired'],
            $this->config[$this->testName]['validEmailLoc']
        );
        $this->reg->clearAllFields($this->testName);
        codecept_debug("Checked - reg with invalid email. \n");
        //регистрация с маленьким паролем
        $this->reg->fillAndSubmit(
            $this->testName,
            'John',
            'Doe',
            'johndoetestexample2018@gmail.com',
            'test',
            'test',
            $tel
        );
        $I->checkText(
            $this->config[$this->testName]['validPassLengthRequired'],
            $this->config[$this->testName]['validPassLoc']
        );
        $this->reg->clearAllFields($this->testName);
        codecept_debug("Checked - reg with small pass. \n");
        //регистрация c паролем должен включать символы минимум трёх из следующих типов

        $this->reg->fillAndSubmit(
            $this->testName,
            'John',
            'Doe',
            'johndoetestexample2018@gmail.com',
            'fsdfsdfsdfsdf',
            'fsdfsdfsdfsdf',
            $tel
        );
        $I->checkText(
            $this->config[$this->testName]['validPassRequired'],
            $this->config[$this->testName]['validPassLoc']
        );
        $this->reg->clearAllFields($this->testName);
        codecept_debug("Checked - reg with valid symbols. \n");
        //регистрация с данными уже зарегистрированного пользователя
        $this->reg->fillAndSubmit(
            $this->testName,
            'John',
            'Doe',
            'tuzege@4alphapro.com',
            'Test201818',
            'Test201818',
            $tel
        );
        $I->waitForElement($this->config[$this->testName]['sameUserMsgLoc'], 5);

        try {
            $I->checkText($this->config[$this->testName]['sameUserMsg'], $this->config[$this->testName]['sameUserMsgLoc']);
        } catch (\Exception $e) {
            $I->waitForText($this->config[$this->testName]['registrationTitle'], 15);
        }
        codecept_debug("Checked - reg with same user. \n");
    }

    /**
     * @Description("Регистрация
     *     -> с не валидным паспортом
     *     -> Проверить что регистрации не произошло")
     * @Title("negativeAttachFileTest")
     *
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function negativeAttachFileTest(\AcceptanceTester $I)
    {
        $this->reg->sendAttachFile($this->testName);
        codecept_debug("Checked - reg with novalid file. \n");
    }
}
