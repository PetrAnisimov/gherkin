<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Проверка ссылок хедера")
 */
class HeaderCest
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
     *     -> Перейти во все категории хэдера
     *     -> Проверить заголовки категорий")
     * @Title("submenuLinksTest")
     */
    public function submenuLinksTest(AcceptanceTester $I)
    {
        $links = $this->config[$this->testName]['menuLinks'];
        $this->main->menuCheck($links, $this->testName);
    }

    /**
     * @Description("Логин
     *     -> Перейти во все категории хэдера
     *     -> Проверить заголовки категорий блога")
     * @Title("submenuLinksBlogTest")
     */
    public function submenuLinksBlogTest(AcceptanceTester $I)
    {
        $links = $this->config[$this->testName]['menuLinks'];
        $this->main->menuCheck($links, $this->testName);
    }
}
