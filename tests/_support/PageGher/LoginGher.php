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
class LoginGher extends Actor
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
     * @When I log in to the site, I need to prepare AcceptanceTester, Acceptance, and Scenario
     * @throws Exception
     */
    public function iLogInToTheSiteINeedToPrepareAcceptanceTesterAcceptanceAndScenario()
    {
        $this->testName = $this->scenario->current('name');
        $this->config = $this->acceptance->prepareTest($this->tester, $this->testName);
        $this->login = new Login($this->tester, $this->config);
        $this->main = new Main($this->tester, $this->config);
        $this->main->addInUrlAuthHttp($this->tester);
        $this->tester->amOnUrl($this->config['url']);


    }

    /**
     * @Given order to login to the account we are clicking on the button button
     *
     * @throws Exception
     */
    public function orderToLoginToTheAccountWeAreClickingOnTheButtonButton()
    {
        $this->login->toAccount($this->testName);
    }

    /**
     * @Given inserting the field
     *
     * @throws Exception
     */
    public function insertingTheField()
    {
        $this->login->login($this->testName);
    }

    /**
     * @When we are log in into account, we need to check the header
     *
     * @throws Exception
     */
    public function weAreLogInIntoAccountWeNeedToCheckTheHeader()
    {
        $this->tester->checkText(
            $this->config[$this->testName]['insideAccount'],
            $this->config[$this->testName]['insideAccountLctr']
        );
    }

    /**
     * @When we finish checking we need to check whether an click is exist before exiting
     *
     * @throws Exception
     */
    public function weFinishCheckingWeNeedToCheckWhetherAnClickIsExistBeforeExiting()
    {
        if ('true' == $this->config[$this->testName]['clickBeforeLogout']) {
            $this->login->toAccount($this->testName);
        }
    }

    /**
     * @When we are clicking exit button
     *
     * @throws Exception
     */
    public function weAreClickingExitButton()
    {
        $this->login->logOut($this->testName);
    }

    /**
     * @When I log in to the site I click to my Account link
     */

    public function iLogInToTheSiteIclickToMyAccountLink()
    {
        $this->login->toAccount($this->testName);

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
     * @When i am in account i click to link
     */
    public function iAmInAccountIclickToLibk()
    {
        $this->account->clickToLink($this->testName);
    }



}
