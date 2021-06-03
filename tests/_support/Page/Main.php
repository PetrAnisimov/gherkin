<?php

namespace Page;

use AcceptanceTester;
use Exception;
use Yandex\Allure\Adapter\Annotation\Description;

class Main extends \Page\BasePage
{
    /**
     * @Description('Проверяет каждую ссылку в цикле, используется для проверки ссылок футера')
     *
     * @param mixed $array
     *
     * @throws Exception
     */
    public function checkLinks($array)
    {
        $I = $this->tester;
        foreach ($array as $key => $value) {
            try {
                codecept_debug('Checking link ' . ++$key . ' ====');
                $I->amOnUrl($this->config['url']);
                $I->resizeWindow(2000, 2000);
                // ниже проверяем и закрываем всплывающее окно, которое закрывает нажатие на ссылку ->
                if (isset($value['suggestion'])) {
                    if ($I->seePageHasElement($value['suggestionText'])) {
                        $I->click($value['suggestion']);
                    }
                }
                // ниже проверяем отдельновзятую ссылку из массива ->
                $I->checklink($value['linkText'], $value['linkLocator'], $value['textAfterClick'], $value['textAfterLocator']);
                codecept_debug("Checked. \n");
            } catch (Exception $e) {
                codecept_debug("\n" . $e->getMessage() . "\n Failed with data: " . print_r($value, true));

                throw $e;
            }
        }
    }

    /**
     * @throws Exception
     */
    public function cookieClose()
    {
        if (isset($this->config['cookieClose'])) {
            $I = $this->tester;

            try {
                $I->waitForElement($this->config['cookieClose'], 5);
                if (!$I->seePageHasElement($this->config['cookieClose'])) {
                    codecept_debug('Element not presented');
                } else {
                    $I->waitForElementClickable($this->config['cookieClose'], 15);
                    $I->click($this->config['cookieClose']);
                }
            } catch (\Exception $e) {
                codecept_debug($e->getMessage());
            }
        }
    }

    /**
     * @param $testName
     *
     * @throws Exception
     */
    public function modalClose($testName)
    {
        $I = $this->tester;
        if (!isset($this->config[$testName]['modalClose'])) {
            return;
        }
        isset($this->config['showWelcomeCouponKey']) ? $I->setCookie($this->config['showWelcomeCouponKey'], $this->config['showWelcomeCouponValue']) : null;

        try {
            $I->waitForElement($this->config[$testName]['modalClose'], 10);
            if (isset($this->config[$testName]['modalWithFieldLoc'])) {
                $I->seePageHasElement($this->config[$testName]['modalClose']);
                $I->waitAndClick($this->config[$testName]['modalWithFieldLoc'], 5);
                $I->fillField($this->config[$testName]['modalWithFieldLoc'], $this->config[$testName]['modalWithFieldText']);
                $I->waitAndClick($this->config[$testName]['modalWithFieldbutton'], 5);
            }
            if (!$I->seePageHasElement($this->config[$testName]['modalClose'])) {
                codecept_debug('Element not presented');
            } else {
                $I->waitForElementClickable($this->config[$testName]['modalClose'], 10);
                $I->click($this->config[$testName]['modalClose']);
            }
        } catch (\Exception $e) {
            codecept_debug($e->getMessage());
        }
    }

    /**
     * @param AcceptanceTester $I
     * @param $testName
     *
     * @throws Exception
     */
    public function addInUrlAuthHttp(AcceptanceTester $I)
    {
        if (isset($this->config['stage'])) {
            $urlWithHttpAuth = substr($this->config['url'], 0, 8) . $this->config['stage']
        . substr(strstr($this->config['url'], '//'), 2, strlen($this->config['url']));
            $I->amOnUrl($urlWithHttpAuth);
        }
    }

    /**
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function retryClickAfterRefreshPage(AcceptanceTester $I)
    {
        if (!isset($this->config['retry'])) {
            return;
        }
        $i = 0;
        $elementClicked = false;
        do {
            try {
                $I->amOnUrl($this->config['url']);
                $I->waitForElement($this->config['retry'], 5);
                $text = $I->grabTextFrom($this->config['retry']);
                codecept_debug($text);
                if (null != $I->grabTextFrom($this->config['retry'])) {
                    $elementClicked = true;
                }
            } catch (Exception $e) {
                codecept_debug("\n" . $e->getMessage() . "\n Failed with data: ");
                if ($i < 2) {
                    ++$i;
                } else {
                    $elementClicked = true;
                }
            }
        } while (false === $elementClicked);
    }

    /**
     * @Description('Дополнительный клик если требуется')
     *
     * @param AcceptanceTester $I
     * @param $testName
     *
     * @throws Exception
     */
    public function addClick(AcceptanceTester $I, $testName)
    {
        if (isset($this->config[$testName]['addClick'])) {
            $I->waitForElementClickable($this->config[$testName]['addClick'], 15);
            $I->click($this->config[$testName]['addClick']);
        }
    }

    /**
     * @Description('Проверяем меню (наводим курсок на пункт - далее и если нет подменю [ if !array_key_exists('secondSubMenuLocator'...] то проверяем ссылку [метод checklink]')
     *
     * @param mixed $array
     * @param $testName
     */
    public function menuCheck($array, $testName)
    {
        $I = $this->tester;
        foreach ($array as $key => $value) {
            $i = 0;
            $elementClicked = false;
            do {
                try {
                    codecept_debug('Checking link ' . ++$key . ' ====');
                    isset($value['comment']) ? codecept_debug("comment: {$value['comment']} ") : '';
                    isset($this->config[$testName]['addToUrl']) ? $I->amOnUrl($this->config[$testName]['addToUrl']) : $I->amOnUrl($this->config['url']);
                    $I->resizeWindow(2000, 2000);
                    $I->waitForElementVisible($value['menuLink'], 10);
                    $I->moveMouseOver($value['menuLink']);
                    if (!isset($value['secondSubMenuLocator'])) {
                        $I->checklink('notext', $value['subMenuLocator'], $value['textAfterClick'], $value['textAfterLocator'], 'noscroll');
                    } else {
                        $I->waitForElementVisible($value['menuLink'], 10);
                        $I->moveMouseOver($value['subMenuLocator']);
                        $I->checklink('notext', $value['secondSubMenuLocator'], $value['textAfterClick'], $value['textAfterLocator'], 'noscroll');
                    }
                    $elementClicked = true;
                } catch (Exception $e) {
                    codecept_debug("\n" . $e->getMessage() . "\n Failed with data: " . print_r($value, true));
                    if ($i < 1) {
                        ++$i;
                        if ($I->seePageHasElement("//*[contains(text(),'Страница не найдена')]")) {
                            codecept_debug("Страница - {$value['comment']} - не найдена");
                        } else {
                            codecept_debug("Товар - {$value['comment']} - не найден");
                        }
                    } else {
                        $elementClicked = true;
                    }
                }
            } while (false === $elementClicked);
        }
    }

    /**
     * @Description("Клик по ссылке,открывающаяся в новом окне и проверка текста на странице")
     *
     * @param $testName
     * @param mixed $array
     *
     * @throws Exception
     */
    public function checkNewTabLinks($testName, $array)
    {
        $I = $this->tester;
        foreach ($array as $key => $value) {
            try {
                codecept_debug('Checking link ' . ++$key . ' ====');
                $I->amOnUrl($this->config['url']);
                $I->resizeWindow(2000, 2000);
                $I->clickLinkSwitchTab($value['linkLocator'], $value['subUrl']);
                $I->waitForElementVisible($value['textAfterLocator']);
                $I->checkText($value['textAfterClick'], $value['textAfterLocator']);
                codecept_debug("Checked. \n");
                $I->closeTab();
            } catch (\Exception $e) {
                codecept_debug("\n" . $e->getMessage() . "\n Failed with data: " . print_r($value, true));

                throw $e;
            }
        }
    }
}
