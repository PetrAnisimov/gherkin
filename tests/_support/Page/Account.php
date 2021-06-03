<?php

namespace Page;

use Exception;
use Yandex\Allure\Adapter\Annotation\Description;

class Account extends \Page\BasePage
{
    /**
     * @Description('Переход в новую категорию в ЛК')
     *
     * @param $category
     * @param $accText
     * @param $accLoc
     *
     * @throws Exception
     */
    public function toNewCategory($category, $accText, $accLoc)
    {
        $I = $this->tester;
        $I->waitForElementVisible($category, 20);
        $I->click($category);
        $I->checkText($accText, $accLoc);
    }

    /**
     * @Description('Смена имени/фамилии в ЛК')
     *
     * @param $loc
     * @param $saveBtn
     * @param $name
     *
     * @throws Exception
     */
    public function changePersonalInfo($loc, $saveBtn, $name)
    {
        $I = $this->tester;
        $I->waitForElementVisible($loc, 30);
        $I->click($loc);
        $I->pressKey($loc, \Facebook\WebDriver\WebDriverKeys::SHIFT . \Facebook\WebDriver\WebDriverKeys::UP);
        $I->pressKey($loc, \Facebook\WebDriver\WebDriverKeys::BACKSPACE);
        $I->pressKey($loc, $name);
        $I->waitForElementVisible($saveBtn, 30);
        $I->click($saveBtn);
    }

    /**
     * @Description('Ввод пароля для изменений')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function fillPassword($testName)
    {
        if (isset($this->config[$testName]['fillPasswordBeforeSave'])) {
            $I = $this->tester;
            $I->waitForElementVisible($this->config[$testName]['fillPasswordBeforeSave'], 30);
            $I->fillField($this->config[$testName]['fillPasswordBeforeSave'], $this->config['password']);
        }
    }

    /**
     * @Description('Проверка текста в списке')
     *
     * @param $array
     *
     * @throws Exception
     */
    public function textListCheck($array)
    {
        $I = $this->tester;
        foreach ($array as $key => $value) {
            try {
                codecept_debug('Checking link ' . ++$key . ' ====');
                $I->checkText($value['Text'], $value['Loc']);
            } catch (Exception $e) {
                codecept_debug("\n" . $e->getMessage() . "\n Failed with data: " . print_r($value, true));

                throw $e;
            }
        }
    }

    /**
     * @Description('Проверка чекбокса')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function checkCheckBox($testName)
    {
        $I = $this->tester;
        $this->toNewCategory(
            $this->config[$testName]['toNewsletterSubscriptions'],
            $this->config[$testName]['NewsletterSubscriptionsText'],
            $this->config[$testName]['NewsletterSubscriptionsLoc']
        );
        $I->click($this->config[$testName]['checkbox']);
        $I->click($this->config[$testName]['submit']);
        $this->toNewCategory(
            $this->config[$testName]['toNewsletterSubscriptions'],
            $this->config[$testName]['NewsletterSubscriptionsText'],
            $this->config[$testName]['NewsletterSubscriptionsLoc']
        );

        try {
            $I->seeCheckboxIsChecked($this->config[$testName]['checkbox']);
            codecept_debug('The form is submitted');
        } catch (Exception $e) {
            codecept_debug('The form is not submitted');
        }
    }

    /**
     * @Description('нажатие на ссылку')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function clickToLink($testName)
    {
        $I = $this->tester;
        $I->click($this->config[$testName]['toMyRewards']);
    }

    /**
     * @Description('проверить текст ')
     *
     * @param $testName
     *
     * @throws Exception
     */
    public function checkToText($testName)
    {
        $I = $this->tester;
        $I->click($this->config[$testName]['.nav.items [class~=reward]']);
    }


}
