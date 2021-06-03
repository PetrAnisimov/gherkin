<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Проверка ссылок футера")
 */
class FooterCest
{
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

        $this->main->addInUrlAuthHttp($I);
        $I->amOnUrl($this->config['url']);
        $this->main->modalClose($this->testName);
        $this->main->cookieClose();
    }

    /**
     * @Description("Логин
     *     -> Перейти во все категории футера
     *     -> Проверить заголовки категорий")
     * @Title("footerLinksTest")
     *
     * @throws Exception
     */
    public function footerLinksTest()
    {
        $links = (array) $this->config[$this->testName]['footerLinks'];
        $this->main->checkLinks($links);
        if (isset($this->config[$this->testName]['footerLinksNewTab'])) {
            $linksNewTab = (array) $this->config[$this->testName]['footerLinksNewTab'];
            $this->main->checkNewTabLinks($this->testName, $linksNewTab);
        }
    }
}
