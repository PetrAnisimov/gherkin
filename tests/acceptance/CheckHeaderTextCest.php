<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Account;
use Page\Login;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Проверка текста заголовков в Личном Кабинете (ЛК)")
 * @Title("CheckHeaderTextTest")
 */
class CheckHeaderTextCest
{
    /**
     * @var Login
     */
    private $login;

    private $config;

    /**
     * @var Account
     */
    private $account;

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
     *     -> Перейти во все категории
     *     -> Проверить заголовки категорий")
     *
     * @param AcceptanceTester $I
     *
     * @Title("checkHeader")
     *
     * @throws Exception
     */
    public function checkHeader(AcceptanceTester $I)
    {
        $I->waitForPageLoad();
        if ($I->contains($this->config['url'], $this->config[$this->testName]['subUrlnn'])) {
            $I->checkText($this->config[$this->testName]['MyAccountText'], $this->config[$this->testName]['MyAccountLoc']);
        } else {
            if (isset($this->config[$this->testName]['myAccountLinks'])) {
                $links = $this->config[$this->testName]['myAccountLinks'];
                $this->account->TextListCheck($links);
            }
        }
        $this->account->toNewCategory(
            $this->config[$this->testName]['toMyContactInformation'],
            $this->config[$this->testName]['MyContactInformationText'],
            $this->config[$this->testName]['MyContactInformationLoc']
        );
        if (isset($this->config[$this->testName]['MyContactInformationLinks'])) {
            $links = $this->config[$this->testName]['MyContactInformationLinks'];
            $this->account->TextListCheck($links);
        }
        $this->account->toNewCategory(
            $this->config[$this->testName]['toPersonalAddresses'],
            $this->config[$this->testName]['insidePersonalAddressesText'],
            $this->config[$this->testName]['insidePersonalAddressesLoc']
        );
        $this->account->toNewCategory(
            $this->config[$this->testName]['toMyOrders'],
            $this->config[$this->testName]['MyOrdersText'],
            $this->config[$this->testName]['MyOrdersLoc']
        );
        $this->account->toNewCategory(
            $this->config[$this->testName]['toNewsletterSubscriptions'],
            $this->config[$this->testName]['NewsletterSubscriptionsText'],
            $this->config[$this->testName]['NewsletterSubscriptionsLoc']
        );
        $this->account->toNewCategory(
            $this->config[$this->testName]['toMyBonuses'],
            $this->config[$this->testName]['MyBonusesText'],
            $this->config[$this->testName]['MyBonusesLoc']
        );
        $this->login->clickProfile($this->testName, false);
        $this->login->logout($this->testName);
    }
}
