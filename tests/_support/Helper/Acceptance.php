<?php

namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use AcceptanceTester;
use Codeception\Exception\ModuleConfigException;
use Codeception\Exception\ModuleException;
use Codeception\Step;
use Exception;
use Exceptions\NoSuchException;
use Facebook\WebDriver\WebDriverBy;
use Page\Login;
use PHPUnit\Framework\AssertionFailedError;
use Yandex\Allure\Adapter\Annotation\Description;

class Acceptance extends \Codeception\Module
{
    /**
     * @throws ModuleException
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->getModule('WebDriver')->_getUrl();
    }

    /**
     * @throws ModuleException
     *
     * @return mixed
     */
    public function getUrlFromConfig()
    {
        return $this->getModule('WebDriver')->_getConfig('url');
    }

    /**
     * @throws ModuleException
     *
     * @return mixed
     */
    public function getBrFromConfig()
    {
        return $this->getModule('WebDriver')->_getConfig('browser');
    }

    /**
     * @return array
     */
    public function envParse()
    {
        return json_decode(file_get_contents('env.json'), true);
    }

    /**
     * @param $testTitle
     *
     * @throws NoSuchException
     */
    public function envValidate($testTitle)
    {
        $config = json_decode(file_get_contents('env.json'), true)[$testTitle];
        if (!isset($config)) {
            throw new NoSuchException('Skip test');
        }
        codecept_debug('Content of qa env variables: ');
        codecept_debug($config);
    }

    public function testNeedless(AcceptanceTester $I, $testName)
    {
        $this->config[$testName]['testSkip'] ? $I->skip('This project does not have this test') : codecept_debug('Running');
    }

    /**
     * @param $testList
     *
     * @return mixed
     */
    public function sortTestNames($testList)
    {
        array_shift($testList);

        return $testList;
    }

    /**
     * @param $items
     *
     * @throws ModuleException
     *
     * @return mixed
     */
    public function findMultipleLinks($items)
    {
        return $this->getModule('WebDriver')->_findElements($items);
    }

    /**
     * @Description("try/catch чтобы подставить в if")
     *
     * @param $element
     *
     * @throws ModuleException
     *
     * @return bool
     */
    public function seePageHasElement($element)
    {
        try {
            $this->getModule('WebDriver')->seeElement($element);
        } catch (AssertionFailedError $f) {
            return false;
        }

        return true;
    }

    /**
     * @param Step $step
     *
     * @throws ModuleException
     */
    public function _beforeStep(Step $step)
    {
        $webDriver = $this->getModule('WebDriver');

        try {
            $iframeVis = "div[style~='visible;']";
            $webDriver->executeJS(
                'var list = document.querySelectorAll("' . $iframeVis . '");
                for (i = 0; i < list.length; i++) {
                    list[i].setAttribute("style","visibility: visible; display: none;");
                }'
            );
        } catch (Exception $e) {
        }
    }

    /**
     * @param AcceptanceTester $I
     * @param $testName
     *
     * @throws Exception
     *
     * @return array
     */
    public function prepareTest(AcceptanceTester $I, $testName)
    {
        try {
            $I->envValidate($testName);
            $this->config = $I->envParse();
        } catch (\PHPUnit\Framework\Exception $e) {
            $I->skip('this Cest is not set in env.json');
        } catch (NoSuchException $e) {
            $I->skip('this Cest is not set in env.json');
        }

        return $this->config;
    }

    /**
     * @param $testName
     *
     * @throws ModuleConfigException
     * @throws ModuleException
     */
    public function restartConfirm($testName)
    {
        $this->getModule('WebDriver')->_reconfigure(['restart' => $this->config[$testName]['needRestart'] ?? false]);
    }

    /**
     * @param $testName
     *
     * @throws ModuleConfigException
     * @throws ModuleException
     */
    public function cookieConfirm($testName)
    {
        $this->getModule('WebDriver')->_reconfigure(['clear_cookies' => $this->config[$testName]['needCookie'] ?? false]);
    }

    /**
     * @param $locator
     * @param $styleAttr
     * @param AcceptanceTester $I
     *
     * @throws Exception
     */
    public function getValueFromStyle($locator, $styleAttr, AcceptanceTester $I)
    {
        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) use ($locator, $styleAttr) {
            return $webdriver->findElement(WebDriverBy::xpath($locator))->getCSSValue($styleAttr);
        });
    }

    /**
     * @param $testName
     * @param Login $login
     *
     * @throws Exception
     */
    public function loginConfirm($testName, Login $login)
    {
        if ($this->config[$testName]['needLogin']) {
            $login->toAccount($testName);
            $login->login($testName);
        }
    }

    /**
     * @throws ModuleException
     *
     * @return mixed
     */
    public function getUrlFromCurrentPage()
    {
        return $this->getModule('WebDriver')->_getCurrentUri();
    }
}
