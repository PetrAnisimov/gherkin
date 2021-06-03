<?php

namespace PageGher;

use _generated\AcceptanceTesterActions;
use AcceptanceTester;
use Codeception\Actor;
use Codeception\Scenario;
use Exception;
use Helper\Acceptance;
use Page\Login;
use Page\Main;
use Page\Account;

class CheckInfoGher extends Actor
{
    use AcceptanceTesterActions;

    private $login;
    private $main;
    private $config;
    private $testName;
    private $account;

     /**
      * @var Acceptance
      */
    private $acceptance;

    /**
     * @var AcceptanceTester
     */
    private $tester;

    public function __construct(AcceptanceTester $I, Acceptance $acceptance, Scenario $scenario, Login $login, Main $main, Account $account)
    {
        parent::__construct($scenario);
        $this->tester = $I;
        $this->acceptance = $acceptance;
        $this->scenario = $scenario;
        $this->login = $login;
        $this->main = $main;
        $this->account = $account;
    }
    /**
     * @Given account is logged
     *
     * @throws Exception
     */
    public function accountIsLogged()
    {
        $this->login->toAccount($this->testName);
    }

    /**
     * @When i is loggin i want to open my account
     *
     * @throws Exception
     */
    public function iIsLogginIwantToOpenMyAccount()
    {
        $this->account->clickToLink($this->testName);
    }





}
