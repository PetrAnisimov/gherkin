<?php

use Codeception\Util\Locator;
use Yandex\Allure\Adapter\Annotation\Description;

/**
 * Inherited Methods.
 *
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
 */
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;
    use \Codeception\Lib\Actor\Shared\Retry;

    /**
     * Define custom actions here.
     *
     * @param mixed $message
     */
    public function skip($message)
    {
        $this->getScenario()->skip($message);
    }

    /**
     * Кликнуть по ссылке (если указан linktext то и проверить текст на этой ссылке), далее проверить текст по локатору текста
     * по дефолту скролит к ссылке а потом кликает по ней (параметр withscroll).
     *
     * @param mixed $linkText
     * @param mixed $linkLocator
     * @param mixed $textAfterClick
     * @param mixed $textAfterLocator
     * @param mixed $withscroll
     *
     * @throws Exception
     */
    public function checklink($linkText, $linkLocator, $textAfterClick, $textAfterLocator, $withscroll = 'scroll')
    {
        $I = $this;
        if ('notext' !== $linkText) {
            $I->checkText($linkText, $linkLocator); // если указан notext то проверяем текст ссылки
        }
        $I->waitForElementVisible($linkLocator, 10);
        if ('scroll' == $withscroll) {
            $I->scrollTo($linkLocator);
        }
        $I->click($linkLocator);
        $I->waitForPageLoad();
        $I->checkText($textAfterClick, $textAfterLocator);
    }

    /**
     * Проверка текста на странице по локатору этого текста.
     *
     * @param mixed $text
     * @param mixed $locator
     *
     * @throws Exception
     */
    public function checkText($text, $locator)
    {
        $I = $this;
        $I->waitForText($text, 20, Locator::elementAt($locator, 1));
    }

    /**
     * Ожидание лоадера.
     *
     * @param mixed $timeout
     * @param mixed $locator
     *
     * @throws Exception
     */
    public function waitLoader($locator, $timeout)
    {
        $I = $this;
        for ($i = 1; $i < 20; ++$i) {
            try {
                if ($I->seePageHasElement($locator)) {
                    $I->wait($timeout);
                    codecept_debug('Element presented');
                } else {
                    break;
                }
            } catch (\Exception $e) {
                break;
            }
        }
    }

    public function debug()
    {
        $I = $this;
        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            codecept_debug('Debugging on ' . $webdriver->getCurrentURL());
        });
        $I->pause();
    }

    /**
     * @return false|string
     */
    public function getRandString()
    {
        return substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 5);
    }

    /**
     * @return string
     */
    public function getRandTelephone()
    {
        return '(495)' . substr(str_shuffle('0123465789'), 0, 7);
    }

    /**
     * @return string
     */
    public function getRandTelephoneWithOutMask()
    {
        return '7495' . substr(str_shuffle('0123465789'), 0, 7);
    }

    /**
     * @param mixed $rawTelephone
     *
     * @return string
     */
    public function getMaskedTelephone($rawTelephone)
    {
        return preg_replace('/\D+/', '', $rawTelephone);
    }

    /**
     * @Description('Клик и переход на новую вкладку')
     *
     * @param string $socialLink
     * @param string $subUrl
     *
     * @throws Exception
     */
    public function clickLinkSwitchTab($socialLink, $subUrl)
    {
        $I = $this;
        $I->scrollTo($socialLink);
        $I->waitForElementClickable($socialLink, 15);
        $I->click($socialLink);
        $url = $I->executeJS('return window.location.href');
        if ($this->contains($url, $subUrl)) {
            $I->switchToNextTab();
        } else {
            codecept_debug('No need to switch');
        }
    }

    /**
     * @param $items
     * @param $text
     *
     * @return int|string
     */
    public function findItemNumber($items, $text)
    {
        $I = $this;
        foreach ($items as $key => $value) {
            if ($I->contains($value, $text)) {
                return $key;
            }
        }
    }

    /**
     * @param string $loc
     */
    public function clearFieldPressKey(string $loc)
    {
        $I = $this;
        $I->pressKey($loc, \Facebook\WebDriver\WebDriverKeys::SHIFT . \Facebook\WebDriver\WebDriverKeys::UP);
        $I->pressKey($loc, \Facebook\WebDriver\WebDriverKeys::BACKSPACE);
    }

    /**
     * @param array $items
     * @param int $id
     *
     * @return int|string
     */
    public function findItemNumberByID($items, $id)
    {
        $I = $this;
        foreach ($items as $key => $value) {
            if ($value == $id) {
                return $key + 1;
            }
        }
    }

    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    public function contains($haystack, $needle)
    {
        return false !== strpos(mb_strtolower($haystack), mb_strtolower($needle));
    }

    /**
     * @param $xpath
     */
    public function clearFieldJs($xpath)
    {
        $I = $this;
        $js = "document.evaluate(arguments[0], document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.value=''";
        $I->executeJS($js, [$xpath]);
    }

    /**
     * @param $fieldXpathLocator
     * @param string $option
     */
    public function selectOptionList($fieldXpathLocator, string $option)
    {
        $I = $this;
        $option = $I->grabTextFrom("{$fieldXpathLocator}/option[contains(.,'{$option}')]");
        $I->selectOption($fieldXpathLocator, $option);
    }

    /**
     * @param $locator
     *
     * @throws Exception
     *
     * @return string[]
     */
    public function getItems($locator)
    {
        $I = $this;
        $I->waitForElementVisible($locator, 40);
        $items = $I->grabMultiple($locator);
        codecept_debug('items: ' . implode("\n", $items));

        return $items;
    }

    /**
     * @param $ids
     * @param $attr
     *
     * @throws Exception
     *
     * @return string[]
     */
    public function getItemsIDs($ids, $attr)
    {
        $I = $this;
        $I->waitForElementVisible($ids, 40);
        $ids_num = [];
        $items_ids = $I->grabMultiple($ids);
        $number_of_items = count($items_ids);
        for ($position = 1; $position <= $number_of_items; ++$position) {
            $ids_num[] = $I->grabAttributeFrom(Locator::elementAt($ids, $position), $attr);
        }

        return $ids_num;
    }

    /**
     * @param int $timeout
     */
    public function waitForAjax($timeout = 60)
    {
        $I = $this;

        try {
            $I->waitForJS('return !!window.jQuery && window.jQuery.active == 0;', $timeout);
        } catch (\Exception $e) {
        }
    }

    /**
     * @param $loc
     * @param $time
     *
     * @throws Exception
     */
    public function waitAndClick($loc, $time)
    {
        $I = $this;

        try {
            $I->waitForElementClickable($loc, $time);
            $I->click($loc);
        } catch (\Exception $e) {
            codecept_debug("\n" . $e->getMessage());
        }
    }

    /**
     * @throws Exception
     */
    public function scrollToTop()
    {
        $I = $this;
        $I->TryToExecuteJS('return window.scrollTo(100,0)');
    }

    /**
     * @param $selector
     * @param $name
     * @param $value
     *
     * @throws Exception
     */
    public function setAttribute($selector, $name, $value)
    {
        $I = $this;
        $I->TryToExecuteJS("document.querySelector('" . $selector . "').setAttribute('" . $name . "','" . $value . "')");
    }

    /**
     * @param int $timeout
     */
    public function waitForPageLoad($timeout = 60)
    {
        $I = $this;

        try {
            $I->waitForJS('return document.readyState == "complete"', $timeout);
        } catch (\Exception $e) {
        }
    }

    /**
     * @param int $timeout
     */
    public function waitForPageOnLoad($timeout = 60)
    {
        $I = $this;

        try {
            $I->waitForJS('return window.onload = function() {};', $timeout);
        } catch (\Exception $e) {
        }
    }
}
