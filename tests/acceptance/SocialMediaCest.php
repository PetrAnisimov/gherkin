<?php

use Codeception\Scenario;
use Helper\Acceptance;
use Page\Main;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Title;

/**
 * @Description("Тест ссылок на соцсети")
 */
class SocialMediaCest
{
    /**
     * @var Main
     */
    private $main;

    private $config;

    private $testName;

    /**
     * @Description("Переход на главную страницу (запускается перед каждым тестом)")
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
     *     -> Перейти во все категории социальных сетей
     *     -> Проверить заголовки социальных сетей")
     *
     * @param AcceptanceTester $I
     * @Title("socialMediaTest")
     *
     * @throws Exception
     */
    public function socialMediaTest(\AcceptanceTester $I)
    {
        $links = $this->config[$this->testName]['socialMediaLinks'];
        $this->main->checkNewTabLinks($this->testName, $links);
    }
}
