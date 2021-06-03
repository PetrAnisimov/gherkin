<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/hamster/Desktop/regression/tests/_support/AcceptanceTester.php-1622466934,/home/hamster/Desktop/regression/tests/_support/_generated/AcceptanceTesterActions.php-1622536792,/home/hamster/Desktop/regression/vendor/codeception/codeception/src/Codeception/Lib/Actor/Shared/Retry.php-1571490955',
   'data' => 
  array (
    'e30e2560232efe60bb3d52ed0643a78a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
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
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '905ba7638717cef1660fbc9b8821ecf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return \\Codeception\\Scenario
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getScenario',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abf1d34eb88d640bfb873c003212bfb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Print out latest Selenium Logs in debug mode
     *
     * @param \\Codeception\\TestInterface $test
     * @see \\Codeception\\Module\\WebDriver::debugWebDriverLogs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'debugWebDriverLogs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd21c902a73d1cc2a47935918413b1bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Print out latest Selenium Logs in debug mode
     *
     * @param \\Codeception\\TestInterface $test
     * @see \\Codeception\\Module\\WebDriver::debugWebDriverLogs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDebugWebDriverLogs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58065f6e18b88882d16fb46d8b7e091e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes debugWebDriverLogs and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::debugWebDriverLogs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDebugWebDriverLogs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '625486a5d7a08b2a78bf7b9085fff1f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Changes the subdomain for the \'url\' configuration parameter.
     * Does not open a page; use `amOnPage` for that.
     *
     * ``` php
     * <?php
     * // If config is: \'http://mysite.com\'
     * // or config is: \'http://www.mysite.com\'
     * // or config is: \'http://company.mysite.com\'
     *
     * $I->amOnSubdomain(\'user\');
     * $I->amOnPage(\'/\');
     * // moves to http://user.mysite.com/
     * ?>
     * ```
     *
     * @param $subdomain
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::amOnSubdomain()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'amOnSubdomain',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c202cf42c1a6bb7bf166c83faf60aab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Takes a screenshot of the current window and saves it to `tests/_output/debug`.
     *
     * ``` php
     * <?php
     * $I->amOnPage(\'/user/edit\');
     * $I->makeScreenshot(\'edit_page\');
     * // saved to: tests/_output/debug/edit_page.png
     * $I->makeScreenshot();
     * // saved to: tests/_output/debug/2017-05-26_14-24-11_4b3403665fea6.png
     * ```
     *
     * @param $name
     * @see \\Codeception\\Module\\WebDriver::makeScreenshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'makeScreenshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba0e65e9b3fea70e75c239c08fe24745' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Takes a screenshot of the current window and saves it to `tests/_output/debug`.
     *
     * ``` php
     * <?php
     * $I->amOnPage(\'/user/edit\');
     * $I->makeScreenshot(\'edit_page\');
     * // saved to: tests/_output/debug/edit_page.png
     * $I->makeScreenshot();
     * // saved to: tests/_output/debug/2017-05-26_14-24-11_4b3403665fea6.png
     * ```
     *
     * @param $name
     * @see \\Codeception\\Module\\WebDriver::makeScreenshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToMakeScreenshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc6babf9b78726f83dab120eb94e91a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes makeScreenshot and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::makeScreenshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryMakeScreenshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bce5c00386506c87b30be3ca6e4ae6e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Saves current page\'s HTML into a temprary file.
     * Use this method in debug mode within an interactive pause to get a source code of current page.
     *
     * ```php
     * <?php
     * $I->makeHtmlSnapshot(\'edit_page\');
     * // saved to: tests/_output/debug/edit_page.html
     * $I->makeHtmlSnapshot();
     * // saved to: tests/_output/debug/2017-05-26_14-24-11_4b3403665fea6.html
     * ```
     *
     * @param null $name
     * @see \\Codeception\\Module\\WebDriver::makeHtmlSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'makeHtmlSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6aad70032b38d52ba9205b9ff368772f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Saves current page\'s HTML into a temprary file.
     * Use this method in debug mode within an interactive pause to get a source code of current page.
     *
     * ```php
     * <?php
     * $I->makeHtmlSnapshot(\'edit_page\');
     * // saved to: tests/_output/debug/edit_page.html
     * $I->makeHtmlSnapshot();
     * // saved to: tests/_output/debug/2017-05-26_14-24-11_4b3403665fea6.html
     * ```
     *
     * @param null $name
     * @see \\Codeception\\Module\\WebDriver::makeHtmlSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToMakeHtmlSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '963c9edf8b6647ba927b24b60cf53f9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes makeHtmlSnapshot and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::makeHtmlSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryMakeHtmlSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba235a94c160dbdc6558f853b582721a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Resize the current window.
     *
     * ``` php
     * <?php
     * $I->resizeWindow(800, 600);
     *
     * ```
     *
     * @param int $width
     * @param int $height
     * @see \\Codeception\\Module\\WebDriver::resizeWindow()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'resizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac16f3f491e4961483df25aaa8b779d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Resize the current window.
     *
     * ``` php
     * <?php
     * $I->resizeWindow(800, 600);
     *
     * ```
     *
     * @param int $width
     * @param int $height
     * @see \\Codeception\\Module\\WebDriver::resizeWindow()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToResizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f925bc54dbe3236f4bd1b0b255bcd75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes resizeWindow and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::resizeWindow()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryResizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7d5f53478a13588b36042bf68eff58f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that a cookie with the given name is set.
     * You can set additional cookie params like `domain`, `path` as array passed in last argument.
     *
     * ``` php
     * <?php
     * $I->seeCookie(\'PHPSESSID\');
     * ?>
     * ```
     *
     * @param $cookie
     * @param array $params
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::seeCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a405af2f447e75b75aef8c65701c825a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that a cookie with the given name is set.
     * You can set additional cookie params like `domain`, `path` as array passed in last argument.
     *
     * ``` php
     * <?php
     * $I->seeCookie(\'PHPSESSID\');
     * ?>
     * ```
     *
     * @param $cookie
     * @param array $params
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::seeCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a72c36d37cda785c40f376290847461' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeCookie and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebccb9390248bf658b5d06dafa44021a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that a cookie with the given name is set.
     * You can set additional cookie params like `domain`, `path` as array passed in last argument.
     *
     * ``` php
     * <?php
     * $I->seeCookie(\'PHPSESSID\');
     * ?>
     * ```
     *
     * @param $cookie
     * @param array $params
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::seeCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b16902732043c1f3956a381a6138eb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that there isn\'t a cookie with the given name.
     * You can set additional cookie params like `domain`, `path` as array passed in last argument.
     *
     * @param $cookie
     *
     * @param array $params
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::dontSeeCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afd98183cf02224597e424cf6491727f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that there isn\'t a cookie with the given name.
     * You can set additional cookie params like `domain`, `path` as array passed in last argument.
     *
     * @param $cookie
     *
     * @param array $params
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::dontSeeCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ffc079da9efda41cd6a22258ae3e5c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeCookie and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e014402517438e031aa0a77238ea324' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that there isn\'t a cookie with the given name.
     * You can set additional cookie params like `domain`, `path` as array passed in last argument.
     *
     * @param $cookie
     *
     * @param array $params
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::dontSeeCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '395fef9befdbd66385a54e5e3229763f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sets a cookie with the given name and value.
     * You can set additional cookie params like `domain`, `path`, `expires`, `secure` in array passed as last argument.
     *
     * ``` php
     * <?php
     * $I->setCookie(\'PHPSESSID\', \'el4ukv0kqbvoirg7nkp4dncpk3\');
     * ?>
     * ```
     *
     * @param $name
     * @param $val
     * @param array $params
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::setCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'setCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc1479d355e1ac910f8e8669744536be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Sets a cookie with the given name and value.
     * You can set additional cookie params like `domain`, `path`, `expires`, `secure` in array passed as last argument.
     *
     * ``` php
     * <?php
     * $I->setCookie(\'PHPSESSID\', \'el4ukv0kqbvoirg7nkp4dncpk3\');
     * ?>
     * ```
     *
     * @param $name
     * @param $val
     * @param array $params
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::setCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSetCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dee0f72245cef6d382164f2131707229' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes setCookie and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::setCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySetCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a30acb2db8a0667408dc5fa820841693' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Unsets cookie with the given name.
     * You can set additional cookie params like `domain`, `path` in array passed as last argument.
     *
     * @param $cookie
     *
     * @param array $params
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::resetCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'resetCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fe670972bc52bf62e3a6a3a4008b98f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Unsets cookie with the given name.
     * You can set additional cookie params like `domain`, `path` in array passed as last argument.
     *
     * @param $cookie
     *
     * @param array $params
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::resetCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToResetCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21dd9b776fbd65470ddc19712ff2287e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes resetCookie and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::resetCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryResetCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd2e8751e39cddbae4aec2a0ef6ed21d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grabs a cookie value.
     * You can set additional cookie params like `domain`, `path` in array passed as last argument.
     *
     * @param $cookie
     *
     * @param array $params
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::grabCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b71ba32836c58ba5e5b19655e65bd183' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabCookie and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::grabCookie()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00a1815aff0b53a4f224b66d4031c597' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grabs current page source code.
     *
     * @throws ModuleException if no page was opened.
     *
     * @return string Current page source code.
     * @see \\Codeception\\Module\\WebDriver::grabPageSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21a3a605650e2321fc09796bdd894455' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabPageSource and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::grabPageSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bd63881a0668246e3a2770e47de1ccf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Open web page at the given absolute URL and sets its hostname as the base host.
     *
     * ``` php
     * <?php
     * $I->amOnUrl(\'http://codeception.com\');
     * $I->amOnPage(\'/quickstart\'); // moves to http://codeception.com/quickstart
     * ?>
     * ```
     * @see \\Codeception\\Module\\WebDriver::amOnUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'amOnUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c517278a230e211d2679bfe28b2eaf5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opens the page for the given relative URI.
     *
     * ``` php
     * <?php
     * // opens front page
     * $I->amOnPage(\'/\');
     * // opens /register page
     * $I->amOnPage(\'/register\');
     * ```
     *
     * @param string $page
     * @see \\Codeception\\Module\\WebDriver::amOnPage()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'amOnPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4b3dddc2cfe954d467164382ef6dbdd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the current page contains the given string (case insensitive).
     *
     * You can specify a specific HTML element (via CSS or XPath) as the second
     * parameter to only search within that element.
     *
     * ``` php
     * <?php
     * $I->see(\'Logout\');                        // I can suppose user is logged in
     * $I->see(\'Sign Up\', \'h1\');                 // I can suppose it\'s a signup page
     * $I->see(\'Sign Up\', \'//body/h1\');          // with XPath
     * $I->see(\'Sign Up\', [\'css\' => \'body h1\']); // with strict CSS locator
     * ```
     *
     * Note that the search is done after stripping all HTML tags from the body,
     * so `$I->see(\'strong\')` will return true for strings like:
     *
     *   - `<p>I am Stronger than thou</p>`
     *   - `<script>document.createElement(\'strong\');</script>`
     *
     * But will *not* be true for strings like:
     *
     *   - `<strong>Home</strong>`
     *   - `<div class="strong">Home</strong>`
     *   - `<!-- strong -->`
     *
     * For checking the raw source code, use `seeInSource()`.
     *
     * @param string $text
     * @param array|string $selector optional
     * @see \\Codeception\\Module\\WebDriver::see()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'see',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e74e85e03885830c02c72fb0bd2a52e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the current page contains the given string (case insensitive).
     *
     * You can specify a specific HTML element (via CSS or XPath) as the second
     * parameter to only search within that element.
     *
     * ``` php
     * <?php
     * $I->see(\'Logout\');                        // I can suppose user is logged in
     * $I->see(\'Sign Up\', \'h1\');                 // I can suppose it\'s a signup page
     * $I->see(\'Sign Up\', \'//body/h1\');          // with XPath
     * $I->see(\'Sign Up\', [\'css\' => \'body h1\']); // with strict CSS locator
     * ```
     *
     * Note that the search is done after stripping all HTML tags from the body,
     * so `$I->see(\'strong\')` will return true for strings like:
     *
     *   - `<p>I am Stronger than thou</p>`
     *   - `<script>document.createElement(\'strong\');</script>`
     *
     * But will *not* be true for strings like:
     *
     *   - `<strong>Home</strong>`
     *   - `<div class="strong">Home</strong>`
     *   - `<!-- strong -->`
     *
     * For checking the raw source code, use `seeInSource()`.
     *
     * @param string $text
     * @param array|string $selector optional
     * @see \\Codeception\\Module\\WebDriver::see()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5951cda04136d1434e6bf2609edf007' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes see and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::see()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2c320baa795cc737d624b6d74d02dc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the current page contains the given string (case insensitive).
     *
     * You can specify a specific HTML element (via CSS or XPath) as the second
     * parameter to only search within that element.
     *
     * ``` php
     * <?php
     * $I->see(\'Logout\');                        // I can suppose user is logged in
     * $I->see(\'Sign Up\', \'h1\');                 // I can suppose it\'s a signup page
     * $I->see(\'Sign Up\', \'//body/h1\');          // with XPath
     * $I->see(\'Sign Up\', [\'css\' => \'body h1\']); // with strict CSS locator
     * ```
     *
     * Note that the search is done after stripping all HTML tags from the body,
     * so `$I->see(\'strong\')` will return true for strings like:
     *
     *   - `<p>I am Stronger than thou</p>`
     *   - `<script>document.createElement(\'strong\');</script>`
     *
     * But will *not* be true for strings like:
     *
     *   - `<strong>Home</strong>`
     *   - `<div class="strong">Home</strong>`
     *   - `<!-- strong -->`
     *
     * For checking the raw source code, use `seeInSource()`.
     *
     * @param string $text
     * @param array|string $selector optional
     * @see \\Codeception\\Module\\WebDriver::see()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a49e6be1571368725049be46c1647878' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the current page doesn\'t contain the text specified (case insensitive).
     * Give a locator as the second parameter to match a specific region.
     *
     * ```php
     * <?php
     * $I->dontSee(\'Login\');                         // I can suppose user is already logged in
     * $I->dontSee(\'Sign Up\',\'h1\');                  // I can suppose it\'s not a signup page
     * $I->dontSee(\'Sign Up\',\'//body/h1\');           // with XPath
     * $I->dontSee(\'Sign Up\', [\'css\' => \'body h1\']); // with strict CSS locator
     * ```
     *
     * Note that the search is done after stripping all HTML tags from the body,
     * so `$I->dontSee(\'strong\')` will fail on strings like:
     *
     *   - `<p>I am Stronger than thou</p>`
     *   - `<script>document.createElement(\'strong\');</script>`
     *
     * But will ignore strings like:
     *
     *   - `<strong>Home</strong>`
     *   - `<div class="strong">Home</strong>`
     *   - `<!-- strong -->`
     *
     * For checking the raw source code, use `seeInSource()`.
     *
     * @param string $text
     * @param array|string $selector optional
     * @see \\Codeception\\Module\\WebDriver::dontSee()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c42ba84bd691eae7f60ea4b65c1ea7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the current page doesn\'t contain the text specified (case insensitive).
     * Give a locator as the second parameter to match a specific region.
     *
     * ```php
     * <?php
     * $I->dontSee(\'Login\');                         // I can suppose user is already logged in
     * $I->dontSee(\'Sign Up\',\'h1\');                  // I can suppose it\'s not a signup page
     * $I->dontSee(\'Sign Up\',\'//body/h1\');           // with XPath
     * $I->dontSee(\'Sign Up\', [\'css\' => \'body h1\']); // with strict CSS locator
     * ```
     *
     * Note that the search is done after stripping all HTML tags from the body,
     * so `$I->dontSee(\'strong\')` will fail on strings like:
     *
     *   - `<p>I am Stronger than thou</p>`
     *   - `<script>document.createElement(\'strong\');</script>`
     *
     * But will ignore strings like:
     *
     *   - `<strong>Home</strong>`
     *   - `<div class="strong">Home</strong>`
     *   - `<!-- strong -->`
     *
     * For checking the raw source code, use `seeInSource()`.
     *
     * @param string $text
     * @param array|string $selector optional
     * @see \\Codeception\\Module\\WebDriver::dontSee()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6b840be8a34783bb3802cc078f427b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSee and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSee()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fbb5a930d99621ab2b23876c09edb3de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the current page doesn\'t contain the text specified (case insensitive).
     * Give a locator as the second parameter to match a specific region.
     *
     * ```php
     * <?php
     * $I->dontSee(\'Login\');                         // I can suppose user is already logged in
     * $I->dontSee(\'Sign Up\',\'h1\');                  // I can suppose it\'s not a signup page
     * $I->dontSee(\'Sign Up\',\'//body/h1\');           // with XPath
     * $I->dontSee(\'Sign Up\', [\'css\' => \'body h1\']); // with strict CSS locator
     * ```
     *
     * Note that the search is done after stripping all HTML tags from the body,
     * so `$I->dontSee(\'strong\')` will fail on strings like:
     *
     *   - `<p>I am Stronger than thou</p>`
     *   - `<script>document.createElement(\'strong\');</script>`
     *
     * But will ignore strings like:
     *
     *   - `<strong>Home</strong>`
     *   - `<div class="strong">Home</strong>`
     *   - `<!-- strong -->`
     *
     * For checking the raw source code, use `seeInSource()`.
     *
     * @param string $text
     * @param array|string $selector optional
     * @see \\Codeception\\Module\\WebDriver::dontSee()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91b1deefb06fa501057994ac0d29f33b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the current page contains the given string in its
     * raw source code.
     *
     * ``` php
     * <?php
     * $I->seeInSource(\'<h1>Green eggs &amp; ham</h1>\');
     * ```
     *
     * @param      $raw
     * @see \\Codeception\\Module\\WebDriver::seeInSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5cb8964848b064bb57367984ad4ec3d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the current page contains the given string in its
     * raw source code.
     *
     * ``` php
     * <?php
     * $I->seeInSource(\'<h1>Green eggs &amp; ham</h1>\');
     * ```
     *
     * @param      $raw
     * @see \\Codeception\\Module\\WebDriver::seeInSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0cbc1239a9e1eeb42f493bac4a698a22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeInSource and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeInSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ed3eaac8721935adc2a7279eabb14a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the current page contains the given string in its
     * raw source code.
     *
     * ``` php
     * <?php
     * $I->seeInSource(\'<h1>Green eggs &amp; ham</h1>\');
     * ```
     *
     * @param      $raw
     * @see \\Codeception\\Module\\WebDriver::seeInSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e784baf841e61c531eb5e70c54ff5405' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the current page contains the given string in its
     * raw source code.
     *
     * ```php
     * <?php
     * $I->dontSeeInSource(\'<h1>Green eggs &amp; ham</h1>\');
     * ```
     *
     * @param      $raw
     * @see \\Codeception\\Module\\WebDriver::dontSeeInSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd945d825c7c62a996f8a1b2e31f8151' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the current page contains the given string in its
     * raw source code.
     *
     * ```php
     * <?php
     * $I->dontSeeInSource(\'<h1>Green eggs &amp; ham</h1>\');
     * ```
     *
     * @param      $raw
     * @see \\Codeception\\Module\\WebDriver::dontSeeInSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ecf42f5b0425744f0ec9d007979e7a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeInSource and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeInSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '999f1b3bac586fe71c81d72b43d8d245' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the current page contains the given string in its
     * raw source code.
     *
     * ```php
     * <?php
     * $I->dontSeeInSource(\'<h1>Green eggs &amp; ham</h1>\');
     * ```
     *
     * @param      $raw
     * @see \\Codeception\\Module\\WebDriver::dontSeeInSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '753a92ccf64b755086318c16d49151a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the page source contains the given string.
     *
     * ```php
     * <?php
     * $I->seeInPageSource(\'<link rel="apple-touch-icon"\');
     * ```
     *
     * @param $text
     * @see \\Codeception\\Module\\WebDriver::seeInPageSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e525905c5d64a4a47a56e5b6b7ee53c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the page source contains the given string.
     *
     * ```php
     * <?php
     * $I->seeInPageSource(\'<link rel="apple-touch-icon"\');
     * ```
     *
     * @param $text
     * @see \\Codeception\\Module\\WebDriver::seeInPageSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4151ab9b277f4d2e62467ec6b264935' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeInPageSource and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeInPageSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8d34d182831d346db7da47d458bc809' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the page source contains the given string.
     *
     * ```php
     * <?php
     * $I->seeInPageSource(\'<link rel="apple-touch-icon"\');
     * ```
     *
     * @param $text
     * @see \\Codeception\\Module\\WebDriver::seeInPageSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51bbf617abf26aeeffe3ace9d4f4146f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the page source doesn\'t contain the given string.
     *
     * @param $text
     * @see \\Codeception\\Module\\WebDriver::dontSeeInPageSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52d72c81ab37dbc0ece344908e7eddf9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the page source doesn\'t contain the given string.
     *
     * @param $text
     * @see \\Codeception\\Module\\WebDriver::dontSeeInPageSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f44340538fbbe47e687a0ff8542658ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeInPageSource and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeInPageSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '922236ab84f829ef1adaf1a5271f8c0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the page source doesn\'t contain the given string.
     *
     * @param $text
     * @see \\Codeception\\Module\\WebDriver::dontSeeInPageSource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18abf53143dd436baa01d1150009b3ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Perform a click on a link or a button, given by a locator.
     * If a fuzzy locator is given, the page will be searched for a button, link, or image matching the locator string.
     * For buttons, the "value" attribute, "name" attribute, and inner text are searched.
     * For links, the link text is searched.
     * For images, the "alt" attribute and inner text of any parent links are searched.
     *
     * The second parameter is a context (CSS or XPath locator) to narrow the search.
     *
     * Note that if the locator matches a button of type `submit`, the form will be submitted.
     *
     * ``` php
     * <?php
     * // simple link
     * $I->click(\'Logout\');
     * // button of form
     * $I->click(\'Submit\');
     * // CSS button
     * $I->click(\'#form input[type=submit]\');
     * // XPath
     * $I->click(\'//form/*[@type="submit"]\');
     * // link in context
     * $I->click(\'Logout\', \'#nav\');
     * // using strict locator
     * $I->click([\'link\' => \'Login\']);
     * ?>
     * ```
     *
     * @param $link
     * @param $context
     * @see \\Codeception\\Module\\WebDriver::click()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'click',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6399bd50655b4d21971be69da43680c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Perform a click on a link or a button, given by a locator.
     * If a fuzzy locator is given, the page will be searched for a button, link, or image matching the locator string.
     * For buttons, the "value" attribute, "name" attribute, and inner text are searched.
     * For links, the link text is searched.
     * For images, the "alt" attribute and inner text of any parent links are searched.
     *
     * The second parameter is a context (CSS or XPath locator) to narrow the search.
     *
     * Note that if the locator matches a button of type `submit`, the form will be submitted.
     *
     * ``` php
     * <?php
     * // simple link
     * $I->click(\'Logout\');
     * // button of form
     * $I->click(\'Submit\');
     * // CSS button
     * $I->click(\'#form input[type=submit]\');
     * // XPath
     * $I->click(\'//form/*[@type="submit"]\');
     * // link in context
     * $I->click(\'Logout\', \'#nav\');
     * // using strict locator
     * $I->click([\'link\' => \'Login\']);
     * ?>
     * ```
     *
     * @param $link
     * @param $context
     * @see \\Codeception\\Module\\WebDriver::click()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc804f7db38752f88316cc802cf1ccbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes click and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::click()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd287a00b91b50a3c46db06d6ceebd992' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that there\'s a link with the specified text.
     * Give a full URL as the second parameter to match links with that exact URL.
     *
     * ``` php
     * <?php
     * $I->seeLink(\'Logout\'); // matches <a href="#">Logout</a>
     * $I->seeLink(\'Logout\',\'/logout\'); // matches <a href="/logout">Logout</a>
     * ?>
     * ```
     *
     * @param string $text
     * @param string $url optional
     * @see \\Codeception\\Module\\WebDriver::seeLink()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28bb29f347b5896c9e79a1addcc10099' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that there\'s a link with the specified text.
     * Give a full URL as the second parameter to match links with that exact URL.
     *
     * ``` php
     * <?php
     * $I->seeLink(\'Logout\'); // matches <a href="#">Logout</a>
     * $I->seeLink(\'Logout\',\'/logout\'); // matches <a href="/logout">Logout</a>
     * ?>
     * ```
     *
     * @param string $text
     * @param string $url optional
     * @see \\Codeception\\Module\\WebDriver::seeLink()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '960bc891a3badd0e60f418f4a8214e87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeLink and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeLink()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d0edbc18d037c6cf65a09edd6e514f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that there\'s a link with the specified text.
     * Give a full URL as the second parameter to match links with that exact URL.
     *
     * ``` php
     * <?php
     * $I->seeLink(\'Logout\'); // matches <a href="#">Logout</a>
     * $I->seeLink(\'Logout\',\'/logout\'); // matches <a href="/logout">Logout</a>
     * ?>
     * ```
     *
     * @param string $text
     * @param string $url optional
     * @see \\Codeception\\Module\\WebDriver::seeLink()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5ad0b7f9675661067cbe318f7bc174a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the page doesn\'t contain a link with the given string.
     * If the second parameter is given, only links with a matching "href" attribute will be checked.
     *
     * ``` php
     * <?php
     * $I->dontSeeLink(\'Logout\'); // I suppose user is not logged in
     * $I->dontSeeLink(\'Checkout now\', \'/store/cart.php\');
     * ?>
     * ```
     *
     * @param string $text
     * @param string $url optional
     * @see \\Codeception\\Module\\WebDriver::dontSeeLink()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbf4f922864cabb8183d54f640be7458' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the page doesn\'t contain a link with the given string.
     * If the second parameter is given, only links with a matching "href" attribute will be checked.
     *
     * ``` php
     * <?php
     * $I->dontSeeLink(\'Logout\'); // I suppose user is not logged in
     * $I->dontSeeLink(\'Checkout now\', \'/store/cart.php\');
     * ?>
     * ```
     *
     * @param string $text
     * @param string $url optional
     * @see \\Codeception\\Module\\WebDriver::dontSeeLink()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f88a127c41e62b2050b6e4528d202ef0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeLink and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeLink()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2988fe2a5e876984327ca76b62d43b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the page doesn\'t contain a link with the given string.
     * If the second parameter is given, only links with a matching "href" attribute will be checked.
     *
     * ``` php
     * <?php
     * $I->dontSeeLink(\'Logout\'); // I suppose user is not logged in
     * $I->dontSeeLink(\'Checkout now\', \'/store/cart.php\');
     * ?>
     * ```
     *
     * @param string $text
     * @param string $url optional
     * @see \\Codeception\\Module\\WebDriver::dontSeeLink()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73f9e495b24df74f3bd24e4c6bd1c712' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current URI contains the given string.
     *
     * ``` php
     * <?php
     * // to match: /home/dashboard
     * $I->seeInCurrentUrl(\'home\');
     * // to match: /users/1
     * $I->seeInCurrentUrl(\'/users/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::seeInCurrentUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1135e7d639d3851aef46cc5800ae747' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that current URI contains the given string.
     *
     * ``` php
     * <?php
     * // to match: /home/dashboard
     * $I->seeInCurrentUrl(\'home\');
     * // to match: /users/1
     * $I->seeInCurrentUrl(\'/users/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::seeInCurrentUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e7461d6c79791774742a21bec501db2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeInCurrentUrl and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeInCurrentUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd100bac25ee52b0f445efb34007a8789' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that current URI contains the given string.
     *
     * ``` php
     * <?php
     * // to match: /home/dashboard
     * $I->seeInCurrentUrl(\'home\');
     * // to match: /users/1
     * $I->seeInCurrentUrl(\'/users/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::seeInCurrentUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '930344c7fd77685d13e1dd0b9c001ff6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the current URL is equal to the given string.
     * Unlike `seeInCurrentUrl`, this only matches the full URL.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->seeCurrentUrlEquals(\'/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::seeCurrentUrlEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd8d8fa5fe76ec4afacaae3b8a4c4a33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the current URL is equal to the given string.
     * Unlike `seeInCurrentUrl`, this only matches the full URL.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->seeCurrentUrlEquals(\'/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::seeCurrentUrlEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac952da7f96415d98c075c407866bc59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeCurrentUrlEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeCurrentUrlEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'baa54539af21d1755073925edde10575' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the current URL is equal to the given string.
     * Unlike `seeInCurrentUrl`, this only matches the full URL.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->seeCurrentUrlEquals(\'/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::seeCurrentUrlEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccae09e4fdd66eb78f9b3031b695d18e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the current URL matches the given regular expression.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->seeCurrentUrlMatches(\'~^/users/(\\d+)~\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::seeCurrentUrlMatches()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e25e9551c161bdd2247d75ba095ab3e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the current URL matches the given regular expression.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->seeCurrentUrlMatches(\'~^/users/(\\d+)~\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::seeCurrentUrlMatches()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c86e8180377315a252a117f5f146fffa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeCurrentUrlMatches and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeCurrentUrlMatches()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75a9eccce2aab6d38d026efd8a806444' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the current URL matches the given regular expression.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->seeCurrentUrlMatches(\'~^/users/(\\d+)~\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::seeCurrentUrlMatches()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5cf29fc1dd30e7255a6e4f1d691e38c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the current URI doesn\'t contain the given string.
     *
     * ``` php
     * <?php
     * $I->dontSeeInCurrentUrl(\'/users/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::dontSeeInCurrentUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b2dd58d69b381c1374743ba4c50ca50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the current URI doesn\'t contain the given string.
     *
     * ``` php
     * <?php
     * $I->dontSeeInCurrentUrl(\'/users/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::dontSeeInCurrentUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b51d3f163bb9f4d49a99b5751f8572d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeInCurrentUrl and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeInCurrentUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '502a9ada5ef734289cdec06dd7670449' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the current URI doesn\'t contain the given string.
     *
     * ``` php
     * <?php
     * $I->dontSeeInCurrentUrl(\'/users/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::dontSeeInCurrentUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45b69a64d1d2b64c5ca69166621d5519' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the current URL doesn\'t equal the given string.
     * Unlike `dontSeeInCurrentUrl`, this only matches the full URL.
     *
     * ``` php
     * <?php
     * // current url is not root
     * $I->dontSeeCurrentUrlEquals(\'/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::dontSeeCurrentUrlEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ed498d43fb6af4c433ebf4b23636417' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the current URL doesn\'t equal the given string.
     * Unlike `dontSeeInCurrentUrl`, this only matches the full URL.
     *
     * ``` php
     * <?php
     * // current url is not root
     * $I->dontSeeCurrentUrlEquals(\'/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::dontSeeCurrentUrlEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4300ad7210829fef23470fae1cc6a4e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeCurrentUrlEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeCurrentUrlEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91d1afc5b86302493ebd323852f02e23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the current URL doesn\'t equal the given string.
     * Unlike `dontSeeInCurrentUrl`, this only matches the full URL.
     *
     * ``` php
     * <?php
     * // current url is not root
     * $I->dontSeeCurrentUrlEquals(\'/\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::dontSeeCurrentUrlEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4df4bd5ec4423e1d6399d60a2800c4a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that current url doesn\'t match the given regular expression.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->dontSeeCurrentUrlMatches(\'~^/users/(\\d+)~\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::dontSeeCurrentUrlMatches()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62aed4384f1859e8d5172276443de1e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that current url doesn\'t match the given regular expression.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->dontSeeCurrentUrlMatches(\'~^/users/(\\d+)~\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::dontSeeCurrentUrlMatches()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4a60f92170d705d4722c77e24a810c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeCurrentUrlMatches and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeCurrentUrlMatches()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9fe74af2b163489271ebb7bb415ddbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that current url doesn\'t match the given regular expression.
     *
     * ``` php
     * <?php
     * // to match root url
     * $I->dontSeeCurrentUrlMatches(\'~^/users/(\\d+)~\');
     * ?>
     * ```
     *
     * @param string $uri
     * @see \\Codeception\\Module\\WebDriver::dontSeeCurrentUrlMatches()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a097f37f28e33f5585ee3cfde6470028' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Executes the given regular expression against the current URI and returns the first capturing group.
     * If no parameters are provided, the full URI is returned.
     *
     * ``` php
     * <?php
     * $user_id = $I->grabFromCurrentUrl(\'~^/user/(\\d+)/~\');
     * $uri = $I->grabFromCurrentUrl();
     * ?>
     * ```
     *
     * @param string $uri optional
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::grabFromCurrentUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabFromCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c730f2a638ed994fcda55f2d7f90c24e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabFromCurrentUrl and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::grabFromCurrentUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabFromCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ac8b8686a22d36920b8854231547977' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the specified checkbox is checked.
     *
     * ``` php
     * <?php
     * $I->seeCheckboxIsChecked(\'#agree\'); // I suppose user agreed to terms
     * $I->seeCheckboxIsChecked(\'#signup_form input[type=checkbox]\'); // I suppose user agreed to terms, If there is only one checkbox in form.
     * $I->seeCheckboxIsChecked(\'//form/input[@type=checkbox and @name=agree]\');
     * ?>
     * ```
     *
     * @param $checkbox
     * @see \\Codeception\\Module\\WebDriver::seeCheckboxIsChecked()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6593c1be4e08e21a9932519414ed1f36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the specified checkbox is checked.
     *
     * ``` php
     * <?php
     * $I->seeCheckboxIsChecked(\'#agree\'); // I suppose user agreed to terms
     * $I->seeCheckboxIsChecked(\'#signup_form input[type=checkbox]\'); // I suppose user agreed to terms, If there is only one checkbox in form.
     * $I->seeCheckboxIsChecked(\'//form/input[@type=checkbox and @name=agree]\');
     * ?>
     * ```
     *
     * @param $checkbox
     * @see \\Codeception\\Module\\WebDriver::seeCheckboxIsChecked()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e82109fa5ca16e43a6c56fb71fe49ec0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeCheckboxIsChecked and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeCheckboxIsChecked()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fdbf19fc4d6ffdddf2213d762ed0819e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the specified checkbox is checked.
     *
     * ``` php
     * <?php
     * $I->seeCheckboxIsChecked(\'#agree\'); // I suppose user agreed to terms
     * $I->seeCheckboxIsChecked(\'#signup_form input[type=checkbox]\'); // I suppose user agreed to terms, If there is only one checkbox in form.
     * $I->seeCheckboxIsChecked(\'//form/input[@type=checkbox and @name=agree]\');
     * ?>
     * ```
     *
     * @param $checkbox
     * @see \\Codeception\\Module\\WebDriver::seeCheckboxIsChecked()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f742015da3633d20f2cfbd281753eaf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Check that the specified checkbox is unchecked.
     *
     * ``` php
     * <?php
     * $I->dontSeeCheckboxIsChecked(\'#agree\'); // I suppose user didn\'t agree to terms
     * $I->seeCheckboxIsChecked(\'#signup_form input[type=checkbox]\'); // I suppose user didn\'t check the first checkbox in form.
     * ?>
     * ```
     *
     * @param $checkbox
     * @see \\Codeception\\Module\\WebDriver::dontSeeCheckboxIsChecked()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '899c3cf213da8a0a55604175888d8775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Check that the specified checkbox is unchecked.
     *
     * ``` php
     * <?php
     * $I->dontSeeCheckboxIsChecked(\'#agree\'); // I suppose user didn\'t agree to terms
     * $I->seeCheckboxIsChecked(\'#signup_form input[type=checkbox]\'); // I suppose user didn\'t check the first checkbox in form.
     * ?>
     * ```
     *
     * @param $checkbox
     * @see \\Codeception\\Module\\WebDriver::dontSeeCheckboxIsChecked()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2133032398b8bbe7c6623036239dd4a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeCheckboxIsChecked and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeCheckboxIsChecked()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e237bbe1a9dee53aade1726e36c8c738' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Check that the specified checkbox is unchecked.
     *
     * ``` php
     * <?php
     * $I->dontSeeCheckboxIsChecked(\'#agree\'); // I suppose user didn\'t agree to terms
     * $I->seeCheckboxIsChecked(\'#signup_form input[type=checkbox]\'); // I suppose user didn\'t check the first checkbox in form.
     * ?>
     * ```
     *
     * @param $checkbox
     * @see \\Codeception\\Module\\WebDriver::dontSeeCheckboxIsChecked()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2b69dc94a38aa99595befc96cbfeb84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the given input field or textarea *equals* (i.e. not just contains) the given value.
     * Fields are matched by label text, the "name" attribute, CSS, or XPath.
     *
     * ``` php
     * <?php
     * $I->seeInField(\'Body\',\'Type your comment here\');
     * $I->seeInField(\'form textarea[name=body]\',\'Type your comment here\');
     * $I->seeInField(\'form input[type=hidden]\',\'hidden_value\');
     * $I->seeInField(\'#searchform input\',\'Search\');
     * $I->seeInField(\'//form/*[@name=search]\',\'Search\');
     * $I->seeInField([\'name\' => \'search\'], \'Search\');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \\Codeception\\Module\\WebDriver::seeInField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2cf26eb8368f0a382638479e246c43ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the given input field or textarea *equals* (i.e. not just contains) the given value.
     * Fields are matched by label text, the "name" attribute, CSS, or XPath.
     *
     * ``` php
     * <?php
     * $I->seeInField(\'Body\',\'Type your comment here\');
     * $I->seeInField(\'form textarea[name=body]\',\'Type your comment here\');
     * $I->seeInField(\'form input[type=hidden]\',\'hidden_value\');
     * $I->seeInField(\'#searchform input\',\'Search\');
     * $I->seeInField(\'//form/*[@name=search]\',\'Search\');
     * $I->seeInField([\'name\' => \'search\'], \'Search\');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \\Codeception\\Module\\WebDriver::seeInField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d76ec805e6d476e3f259a4e40e77eb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeInField and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeInField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bae44ec8a86cb19fedb0339b8a37df7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the given input field or textarea *equals* (i.e. not just contains) the given value.
     * Fields are matched by label text, the "name" attribute, CSS, or XPath.
     *
     * ``` php
     * <?php
     * $I->seeInField(\'Body\',\'Type your comment here\');
     * $I->seeInField(\'form textarea[name=body]\',\'Type your comment here\');
     * $I->seeInField(\'form input[type=hidden]\',\'hidden_value\');
     * $I->seeInField(\'#searchform input\',\'Search\');
     * $I->seeInField(\'//form/*[@name=search]\',\'Search\');
     * $I->seeInField([\'name\' => \'search\'], \'Search\');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \\Codeception\\Module\\WebDriver::seeInField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08990a99d7a753061b0001becaf315d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that an input field or textarea doesn\'t contain the given value.
     * For fuzzy locators, the field is matched by label text, CSS and XPath.
     *
     * ``` php
     * <?php
     * $I->dontSeeInField(\'Body\',\'Type your comment here\');
     * $I->dontSeeInField(\'form textarea[name=body]\',\'Type your comment here\');
     * $I->dontSeeInField(\'form input[type=hidden]\',\'hidden_value\');
     * $I->dontSeeInField(\'#searchform input\',\'Search\');
     * $I->dontSeeInField(\'//form/*[@name=search]\',\'Search\');
     * $I->dontSeeInField([\'name\' => \'search\'], \'Search\');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \\Codeception\\Module\\WebDriver::dontSeeInField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c0de3bff6e7531c14bd5040c61c5e65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that an input field or textarea doesn\'t contain the given value.
     * For fuzzy locators, the field is matched by label text, CSS and XPath.
     *
     * ``` php
     * <?php
     * $I->dontSeeInField(\'Body\',\'Type your comment here\');
     * $I->dontSeeInField(\'form textarea[name=body]\',\'Type your comment here\');
     * $I->dontSeeInField(\'form input[type=hidden]\',\'hidden_value\');
     * $I->dontSeeInField(\'#searchform input\',\'Search\');
     * $I->dontSeeInField(\'//form/*[@name=search]\',\'Search\');
     * $I->dontSeeInField([\'name\' => \'search\'], \'Search\');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \\Codeception\\Module\\WebDriver::dontSeeInField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fabaec5a168495f947d9aaa5d7b3878' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeInField and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeInField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54579d5660fa1461710f1dca9e53bb68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that an input field or textarea doesn\'t contain the given value.
     * For fuzzy locators, the field is matched by label text, CSS and XPath.
     *
     * ``` php
     * <?php
     * $I->dontSeeInField(\'Body\',\'Type your comment here\');
     * $I->dontSeeInField(\'form textarea[name=body]\',\'Type your comment here\');
     * $I->dontSeeInField(\'form input[type=hidden]\',\'hidden_value\');
     * $I->dontSeeInField(\'#searchform input\',\'Search\');
     * $I->dontSeeInField(\'//form/*[@name=search]\',\'Search\');
     * $I->dontSeeInField([\'name\' => \'search\'], \'Search\');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \\Codeception\\Module\\WebDriver::dontSeeInField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9271f82fd86f9e3c01e5a1a7276ed5f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if the array of form parameters (name => value) are set on the form matched with the
     * passed selector.
     *
     * ``` php
     * <?php
     * $I->seeInFormFields(\'form[name=myform]\', [
     *      \'input1\' => \'value\',
     *      \'input2\' => \'other value\',
     * ]);
     * ?>
     * ```
     *
     * For multi-select elements, or to check values of multiple elements with the same name, an
     * array may be passed:
     *
     * ``` php
     * <?php
     * $I->seeInFormFields(\'.form-class\', [
     *      \'multiselect\' => [
     *          \'value1\',
     *          \'value2\',
     *      ],
     *      \'checkbox[]\' => [
     *          \'a checked value\',
     *          \'another checked value\',
     *      ],
     * ]);
     * ?>
     * ```
     *
     * Additionally, checkbox values can be checked with a boolean.
     *
     * ``` php
     * <?php
     * $I->seeInFormFields(\'#form-id\', [
     *      \'checkbox1\' => true,        // passes if checked
     *      \'checkbox2\' => false,       // passes if unchecked
     * ]);
     * ?>
     * ```
     *
     * Pair this with submitForm for quick testing magic.
     *
     * ``` php
     * <?php
     * $form = [
     *      \'field1\' => \'value\',
     *      \'field2\' => \'another value\',
     *      \'checkbox1\' => true,
     *      // ...
     * ];
     * $I->submitForm(\'//form[@id=my-form]\', $form, \'submitButton\');
     * // $I->amOnPage(\'/path/to/form-page\') may be needed
     * $I->seeInFormFields(\'//form[@id=my-form]\', $form);
     * ?>
     * ```
     *
     * @param $formSelector
     * @param $params
     * @see \\Codeception\\Module\\WebDriver::seeInFormFields()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'faa8eaedd8b45e6beb6356b54d00f10f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks if the array of form parameters (name => value) are set on the form matched with the
     * passed selector.
     *
     * ``` php
     * <?php
     * $I->seeInFormFields(\'form[name=myform]\', [
     *      \'input1\' => \'value\',
     *      \'input2\' => \'other value\',
     * ]);
     * ?>
     * ```
     *
     * For multi-select elements, or to check values of multiple elements with the same name, an
     * array may be passed:
     *
     * ``` php
     * <?php
     * $I->seeInFormFields(\'.form-class\', [
     *      \'multiselect\' => [
     *          \'value1\',
     *          \'value2\',
     *      ],
     *      \'checkbox[]\' => [
     *          \'a checked value\',
     *          \'another checked value\',
     *      ],
     * ]);
     * ?>
     * ```
     *
     * Additionally, checkbox values can be checked with a boolean.
     *
     * ``` php
     * <?php
     * $I->seeInFormFields(\'#form-id\', [
     *      \'checkbox1\' => true,        // passes if checked
     *      \'checkbox2\' => false,       // passes if unchecked
     * ]);
     * ?>
     * ```
     *
     * Pair this with submitForm for quick testing magic.
     *
     * ``` php
     * <?php
     * $form = [
     *      \'field1\' => \'value\',
     *      \'field2\' => \'another value\',
     *      \'checkbox1\' => true,
     *      // ...
     * ];
     * $I->submitForm(\'//form[@id=my-form]\', $form, \'submitButton\');
     * // $I->amOnPage(\'/path/to/form-page\') may be needed
     * $I->seeInFormFields(\'//form[@id=my-form]\', $form);
     * ?>
     * ```
     *
     * @param $formSelector
     * @param $params
     * @see \\Codeception\\Module\\WebDriver::seeInFormFields()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a50dde9005c38111ebeb0de11f0950a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeInFormFields and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeInFormFields()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2cc700bc2f6d4f471aeba83ec70be76e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks if the array of form parameters (name => value) are set on the form matched with the
     * passed selector.
     *
     * ``` php
     * <?php
     * $I->seeInFormFields(\'form[name=myform]\', [
     *      \'input1\' => \'value\',
     *      \'input2\' => \'other value\',
     * ]);
     * ?>
     * ```
     *
     * For multi-select elements, or to check values of multiple elements with the same name, an
     * array may be passed:
     *
     * ``` php
     * <?php
     * $I->seeInFormFields(\'.form-class\', [
     *      \'multiselect\' => [
     *          \'value1\',
     *          \'value2\',
     *      ],
     *      \'checkbox[]\' => [
     *          \'a checked value\',
     *          \'another checked value\',
     *      ],
     * ]);
     * ?>
     * ```
     *
     * Additionally, checkbox values can be checked with a boolean.
     *
     * ``` php
     * <?php
     * $I->seeInFormFields(\'#form-id\', [
     *      \'checkbox1\' => true,        // passes if checked
     *      \'checkbox2\' => false,       // passes if unchecked
     * ]);
     * ?>
     * ```
     *
     * Pair this with submitForm for quick testing magic.
     *
     * ``` php
     * <?php
     * $form = [
     *      \'field1\' => \'value\',
     *      \'field2\' => \'another value\',
     *      \'checkbox1\' => true,
     *      // ...
     * ];
     * $I->submitForm(\'//form[@id=my-form]\', $form, \'submitButton\');
     * // $I->amOnPage(\'/path/to/form-page\') may be needed
     * $I->seeInFormFields(\'//form[@id=my-form]\', $form);
     * ?>
     * ```
     *
     * @param $formSelector
     * @param $params
     * @see \\Codeception\\Module\\WebDriver::seeInFormFields()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0eb3b77a87ec354cf5fe6ca082c94f49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if the array of form parameters (name => value) are not set on the form matched with
     * the passed selector.
     *
     * ``` php
     * <?php
     * $I->dontSeeInFormFields(\'form[name=myform]\', [
     *      \'input1\' => \'non-existent value\',
     *      \'input2\' => \'other non-existent value\',
     * ]);
     * ?>
     * ```
     *
     * To check that an element hasn\'t been assigned any one of many values, an array can be passed
     * as the value:
     *
     * ``` php
     * <?php
     * $I->dontSeeInFormFields(\'.form-class\', [
     *      \'fieldName\' => [
     *          \'This value shouldn\\\'t be set\',
     *          \'And this value shouldn\\\'t be set\',
     *      ],
     * ]);
     * ?>
     * ```
     *
     * Additionally, checkbox values can be checked with a boolean.
     *
     * ``` php
     * <?php
     * $I->dontSeeInFormFields(\'#form-id\', [
     *      \'checkbox1\' => true,        // fails if checked
     *      \'checkbox2\' => false,       // fails if unchecked
     * ]);
     * ?>
     * ```
     *
     * @param $formSelector
     * @param $params
     * @see \\Codeception\\Module\\WebDriver::dontSeeInFormFields()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46e6e1c4de82698d8cb9b4af9c45a363' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks if the array of form parameters (name => value) are not set on the form matched with
     * the passed selector.
     *
     * ``` php
     * <?php
     * $I->dontSeeInFormFields(\'form[name=myform]\', [
     *      \'input1\' => \'non-existent value\',
     *      \'input2\' => \'other non-existent value\',
     * ]);
     * ?>
     * ```
     *
     * To check that an element hasn\'t been assigned any one of many values, an array can be passed
     * as the value:
     *
     * ``` php
     * <?php
     * $I->dontSeeInFormFields(\'.form-class\', [
     *      \'fieldName\' => [
     *          \'This value shouldn\\\'t be set\',
     *          \'And this value shouldn\\\'t be set\',
     *      ],
     * ]);
     * ?>
     * ```
     *
     * Additionally, checkbox values can be checked with a boolean.
     *
     * ``` php
     * <?php
     * $I->dontSeeInFormFields(\'#form-id\', [
     *      \'checkbox1\' => true,        // fails if checked
     *      \'checkbox2\' => false,       // fails if unchecked
     * ]);
     * ?>
     * ```
     *
     * @param $formSelector
     * @param $params
     * @see \\Codeception\\Module\\WebDriver::dontSeeInFormFields()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc85aa7b9883db4339d72ac985ca83d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeInFormFields and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeInFormFields()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7a5227c012cd3e86d5687f8cbd0a2e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks if the array of form parameters (name => value) are not set on the form matched with
     * the passed selector.
     *
     * ``` php
     * <?php
     * $I->dontSeeInFormFields(\'form[name=myform]\', [
     *      \'input1\' => \'non-existent value\',
     *      \'input2\' => \'other non-existent value\',
     * ]);
     * ?>
     * ```
     *
     * To check that an element hasn\'t been assigned any one of many values, an array can be passed
     * as the value:
     *
     * ``` php
     * <?php
     * $I->dontSeeInFormFields(\'.form-class\', [
     *      \'fieldName\' => [
     *          \'This value shouldn\\\'t be set\',
     *          \'And this value shouldn\\\'t be set\',
     *      ],
     * ]);
     * ?>
     * ```
     *
     * Additionally, checkbox values can be checked with a boolean.
     *
     * ``` php
     * <?php
     * $I->dontSeeInFormFields(\'#form-id\', [
     *      \'checkbox1\' => true,        // fails if checked
     *      \'checkbox2\' => false,       // fails if unchecked
     * ]);
     * ?>
     * ```
     *
     * @param $formSelector
     * @param $params
     * @see \\Codeception\\Module\\WebDriver::dontSeeInFormFields()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37b49a348358670bfa721b72c310bebb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Selects an option in a select tag or in radio button group.
     *
     * ``` php
     * <?php
     * $I->selectOption(\'form select[name=account]\', \'Premium\');
     * $I->selectOption(\'form input[name=payment]\', \'Monthly\');
     * $I->selectOption(\'//form/select[@name=account]\', \'Monthly\');
     * ?>
     * ```
     *
     * Provide an array for the second argument to select multiple options:
     *
     * ``` php
     * <?php
     * $I->selectOption(\'Which OS do you use?\', array(\'Windows\',\'Linux\'));
     * ?>
     * ```
     *
     * Or provide an associative array for the second argument to specifically define which selection method should be used:
     *
     * ``` php
     * <?php
     * $I->selectOption(\'Which OS do you use?\', array(\'text\' => \'Windows\')); // Only search by text \'Windows\'
     * $I->selectOption(\'Which OS do you use?\', array(\'value\' => \'windows\')); // Only search by value \'windows\'
     * ?>
     * ```
     *
     * @param $select
     * @param $option
     * @see \\Codeception\\Module\\WebDriver::selectOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'selectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1562bf9b100781e14ab79514bb03ad0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Selects an option in a select tag or in radio button group.
     *
     * ``` php
     * <?php
     * $I->selectOption(\'form select[name=account]\', \'Premium\');
     * $I->selectOption(\'form input[name=payment]\', \'Monthly\');
     * $I->selectOption(\'//form/select[@name=account]\', \'Monthly\');
     * ?>
     * ```
     *
     * Provide an array for the second argument to select multiple options:
     *
     * ``` php
     * <?php
     * $I->selectOption(\'Which OS do you use?\', array(\'Windows\',\'Linux\'));
     * ?>
     * ```
     *
     * Or provide an associative array for the second argument to specifically define which selection method should be used:
     *
     * ``` php
     * <?php
     * $I->selectOption(\'Which OS do you use?\', array(\'text\' => \'Windows\')); // Only search by text \'Windows\'
     * $I->selectOption(\'Which OS do you use?\', array(\'value\' => \'windows\')); // Only search by value \'windows\'
     * ?>
     * ```
     *
     * @param $select
     * @param $option
     * @see \\Codeception\\Module\\WebDriver::selectOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSelectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b263cf40ac9ac5e22538145d1945101' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes selectOption and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::selectOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySelectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2a49af8f73cc1fba8b9b1fac659ead5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Unselect an option in the given select box.
     *
     * @param $select
     * @param $option
     * @see \\Codeception\\Module\\WebDriver::unselectOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'unselectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29eaf3f11a8906b2672f4b33b85f13ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Unselect an option in the given select box.
     *
     * @param $select
     * @param $option
     * @see \\Codeception\\Module\\WebDriver::unselectOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToUnselectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d89e69bd0e913812aa4b03800b59abc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes unselectOption and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::unselectOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryUnselectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42632359a391ea29f9036d3e9eb9f906' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Ticks a checkbox. For radio buttons, use the `selectOption` method instead.
     *
     * ``` php
     * <?php
     * $I->checkOption(\'#agree\');
     * ?>
     * ```
     *
     * @param $option
     * @see \\Codeception\\Module\\WebDriver::checkOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'checkOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '653e7ee3e7347d9fa4f612b2b33811b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Ticks a checkbox. For radio buttons, use the `selectOption` method instead.
     *
     * ``` php
     * <?php
     * $I->checkOption(\'#agree\');
     * ?>
     * ```
     *
     * @param $option
     * @see \\Codeception\\Module\\WebDriver::checkOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToCheckOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c62fce46153d1d2ea655b8d575e7087e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes checkOption and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::checkOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryCheckOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94cd92b93507f2db9a48006113a8172b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Unticks a checkbox.
     *
     * ``` php
     * <?php
     * $I->uncheckOption(\'#notify\');
     * ?>
     * ```
     *
     * @param $option
     * @see \\Codeception\\Module\\WebDriver::uncheckOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'uncheckOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd07df90429ca6d4d1fec757cd4e3a0a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Unticks a checkbox.
     *
     * ``` php
     * <?php
     * $I->uncheckOption(\'#notify\');
     * ?>
     * ```
     *
     * @param $option
     * @see \\Codeception\\Module\\WebDriver::uncheckOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToUncheckOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7e0548d02b6e5ec04e39cbeb7e13520' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes uncheckOption and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::uncheckOption()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryUncheckOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a04f684ce68a69a333b242321b06b1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fills a text field or textarea with the given string.
     *
     * ``` php
     * <?php
     * $I->fillField("//input[@type=\'text\']", "Hello World!");
     * $I->fillField([\'name\' => \'email\'], \'jon@mail.com\');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \\Codeception\\Module\\WebDriver::fillField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'fillField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a6b6016550b853b3f7b304b530f0f16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Fills a text field or textarea with the given string.
     *
     * ``` php
     * <?php
     * $I->fillField("//input[@type=\'text\']", "Hello World!");
     * $I->fillField([\'name\' => \'email\'], \'jon@mail.com\');
     * ?>
     * ```
     *
     * @param $field
     * @param $value
     * @see \\Codeception\\Module\\WebDriver::fillField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToFillField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6bc5455ed2932f188b4a689b5d1f739' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes fillField and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::fillField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryFillField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6cd823f0ccca4e71589b72483f49e51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Clears given field which isn\'t empty.
     *
     * ``` php
     * <?php
     * $I->clearField(\'#username\');
     * ```
     *
     * @param $field
     * @see \\Codeception\\Module\\WebDriver::clearField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'clearField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28c0bee4f085e6c2c393e35b31846977' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Clears given field which isn\'t empty.
     *
     * ``` php
     * <?php
     * $I->clearField(\'#username\');
     * ```
     *
     * @param $field
     * @see \\Codeception\\Module\\WebDriver::clearField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToClearField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd4f5503335fc31da6386c6dafd1fb25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes clearField and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::clearField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryClearField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0331dbba8431b800e7e6196f5298710' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Attaches a file relative to the Codeception `_data` directory to the given file upload field.
     *
     * ``` php
     * <?php
     * // file is stored in \'tests/_data/prices.xls\'
     * $I->attachFile(\'input[@type="file"]\', \'prices.xls\');
     * ?>
     * ```
     *
     * @param $field
     * @param $filename
     * @see \\Codeception\\Module\\WebDriver::attachFile()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'attachFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9b274fd038c5a4e28984c51e81fbe36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Attaches a file relative to the Codeception `_data` directory to the given file upload field.
     *
     * ``` php
     * <?php
     * // file is stored in \'tests/_data/prices.xls\'
     * $I->attachFile(\'input[@type="file"]\', \'prices.xls\');
     * ?>
     * ```
     *
     * @param $field
     * @param $filename
     * @see \\Codeception\\Module\\WebDriver::attachFile()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAttachFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd23ffb4027b87aff53b828ce3490518a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes attachFile and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::attachFile()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAttachFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5fb13cc67b7660208f83c04da9e2457' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Finds and returns the text contents of the given element.
     * If a fuzzy locator is used, the element is found using CSS, XPath,
     * and by matching the full page source by regular expression.
     *
     * ``` php
     * <?php
     * $heading = $I->grabTextFrom(\'h1\');
     * $heading = $I->grabTextFrom(\'descendant-or-self::h1\');
     * $value = $I->grabTextFrom(\'~<input value=(.*?)]~sgi\'); // match with a regex
     * ?>
     * ```
     *
     * @param $cssOrXPathOrRegex
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::grabTextFrom()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabTextFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f74ace1700b9e1cf2e9172b005792ed8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabTextFrom and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::grabTextFrom()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabTextFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ae869e46d33c4f78aae0052af3238af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grabs the value of the given attribute value from the given element.
     * Fails if element is not found.
     *
     * ``` php
     * <?php
     * $I->grabAttributeFrom(\'#tooltip\', \'title\');
     * ?>
     * ```
     *
     *
     * @param $cssOrXpath
     * @param $attribute
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::grabAttributeFrom()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabAttributeFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7624d8f358b9a5691bac3a6a6daf427c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabAttributeFrom and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::grabAttributeFrom()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabAttributeFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e309f924910fccf460188bef830522e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Finds the value for the given form field.
     * If a fuzzy locator is used, the field is found by field name, CSS, and XPath.
     *
     * ``` php
     * <?php
     * $name = $I->grabValueFrom(\'Name\');
     * $name = $I->grabValueFrom(\'input[name=username]\');
     * $name = $I->grabValueFrom(\'descendant-or-self::form/descendant::input[@name = \'username\']\');
     * $name = $I->grabValueFrom([\'name\' => \'username\']);
     * ?>
     * ```
     *
     * @param $field
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::grabValueFrom()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabValueFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d67178ac814c8dbca22b549ce0807a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabValueFrom and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::grabValueFrom()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabValueFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccbb72e4fe238aa40b72edc6ce0610e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Grabs either the text content, or attribute values, of nodes
     * matched by $cssOrXpath and returns them as an array.
     *
     * ```html
     * <a href="#first">First</a>
     * <a href="#second">Second</a>
     * <a href="#third">Third</a>
     * ```
     *
     * ```php
     * <?php
     * // would return [\'First\', \'Second\', \'Third\']
     * $aLinkText = $I->grabMultiple(\'a\');
     *
     * // would return [\'#first\', \'#second\', \'#third\']
     * $aLinks = $I->grabMultiple(\'a\', \'href\');
     * ?>
     * ```
     *
     * @param $cssOrXpath
     * @param $attribute
     * @return string[]
     * @see \\Codeception\\Module\\WebDriver::grabMultiple()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabMultiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6324b02cbe7e97becdac42aa7b098e06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabMultiple and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::grabMultiple()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabMultiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5551f7eda1be989e379d4ef776bc159c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the given element exists on the page and is visible.
     * You can also specify expected attributes of this element.
     *
     * ``` php
     * <?php
     * $I->seeElement(\'.error\');
     * $I->seeElement(\'//form/input[1]\');
     * $I->seeElement(\'input\', [\'name\' => \'login\']);
     * $I->seeElement(\'input\', [\'value\' => \'123456\']);
     *
     * // strict locator in first arg, attributes in second
     * $I->seeElement([\'css\' => \'form input\'], [\'name\' => \'login\']);
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * @return
     * @see \\Codeception\\Module\\WebDriver::seeElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '485b91f579075c505b906f4c3c3dc8e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the given element exists on the page and is visible.
     * You can also specify expected attributes of this element.
     *
     * ``` php
     * <?php
     * $I->seeElement(\'.error\');
     * $I->seeElement(\'//form/input[1]\');
     * $I->seeElement(\'input\', [\'name\' => \'login\']);
     * $I->seeElement(\'input\', [\'value\' => \'123456\']);
     *
     * // strict locator in first arg, attributes in second
     * $I->seeElement([\'css\' => \'form input\'], [\'name\' => \'login\']);
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * @return
     * @see \\Codeception\\Module\\WebDriver::seeElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b2b35e57a5a2441952a36b13a805203' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeElement and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97fe8453ab57810e3132f8fc21cc78b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the given element exists on the page and is visible.
     * You can also specify expected attributes of this element.
     *
     * ``` php
     * <?php
     * $I->seeElement(\'.error\');
     * $I->seeElement(\'//form/input[1]\');
     * $I->seeElement(\'input\', [\'name\' => \'login\']);
     * $I->seeElement(\'input\', [\'value\' => \'123456\']);
     *
     * // strict locator in first arg, attributes in second
     * $I->seeElement([\'css\' => \'form input\'], [\'name\' => \'login\']);
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * @return
     * @see \\Codeception\\Module\\WebDriver::seeElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d4fc7d56f330097c9c3f7953643fa9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the given element is invisible or not present on the page.
     * You can also specify expected attributes of this element.
     *
     * ``` php
     * <?php
     * $I->dontSeeElement(\'.error\');
     * $I->dontSeeElement(\'//form/input[1]\');
     * $I->dontSeeElement(\'input\', [\'name\' => \'login\']);
     * $I->dontSeeElement(\'input\', [\'value\' => \'123456\']);
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * @see \\Codeception\\Module\\WebDriver::dontSeeElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f198a325df4f3beed953f13cede98df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the given element is invisible or not present on the page.
     * You can also specify expected attributes of this element.
     *
     * ``` php
     * <?php
     * $I->dontSeeElement(\'.error\');
     * $I->dontSeeElement(\'//form/input[1]\');
     * $I->dontSeeElement(\'input\', [\'name\' => \'login\']);
     * $I->dontSeeElement(\'input\', [\'value\' => \'123456\']);
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * @see \\Codeception\\Module\\WebDriver::dontSeeElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32f70d25d0af6b3a0cf3dd343f396902' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeElement and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e3d9a645af041cf2c3a22d5f075b2bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the given element is invisible or not present on the page.
     * You can also specify expected attributes of this element.
     *
     * ``` php
     * <?php
     * $I->dontSeeElement(\'.error\');
     * $I->dontSeeElement(\'//form/input[1]\');
     * $I->dontSeeElement(\'input\', [\'name\' => \'login\']);
     * $I->dontSeeElement(\'input\', [\'value\' => \'123456\']);
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * @see \\Codeception\\Module\\WebDriver::dontSeeElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52ba506600c3f3c9e036a2a06765be1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the given element exists on the page, even it is invisible.
     *
     * ``` php
     * <?php
     * $I->seeElementInDOM(\'//form/input[type=hidden]\');
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * @see \\Codeception\\Module\\WebDriver::seeElementInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08ee26b0c4b7518a72d54ced60662630' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the given element exists on the page, even it is invisible.
     *
     * ``` php
     * <?php
     * $I->seeElementInDOM(\'//form/input[type=hidden]\');
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * @see \\Codeception\\Module\\WebDriver::seeElementInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b6bf0cd50ed1b166a33f8587f0eb383' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeElementInDOM and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeElementInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1fb633c7ec03a1bba22c555a7ecd7885' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the given element exists on the page, even it is invisible.
     *
     * ``` php
     * <?php
     * $I->seeElementInDOM(\'//form/input[type=hidden]\');
     * ?>
     * ```
     *
     * @param $selector
     * @param array $attributes
     * @see \\Codeception\\Module\\WebDriver::seeElementInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68f4815de7def220bdfde3a5b97d8dd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opposite of `seeElementInDOM`.
     *
     * @param $selector
     * @param array $attributes
     * @see \\Codeception\\Module\\WebDriver::dontSeeElementInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d0173e14290e5e36626d73b2cec5bae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Opposite of `seeElementInDOM`.
     *
     * @param $selector
     * @param array $attributes
     * @see \\Codeception\\Module\\WebDriver::dontSeeElementInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcb8d50c97a42fbacdc07eacbaeb9237' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeElementInDOM and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeElementInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b404591e12f452da6185f41230f7e79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Opposite of `seeElementInDOM`.
     *
     * @param $selector
     * @param array $attributes
     * @see \\Codeception\\Module\\WebDriver::dontSeeElementInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72949b100487b99c034a35deb43b3b03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that there are a certain number of elements matched by the given locator on the page.
     *
     * ``` php
     * <?php
     * $I->seeNumberOfElements(\'tr\', 10);
     * $I->seeNumberOfElements(\'tr\', [0,10]); // between 0 and 10 elements
     * ?>
     * ```
     * @param $selector
     * @param mixed $expected int or int[]
     * @see \\Codeception\\Module\\WebDriver::seeNumberOfElements()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeNumberOfElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0fef8723a4a566c2a35d3b0ee33d53c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that there are a certain number of elements matched by the given locator on the page.
     *
     * ``` php
     * <?php
     * $I->seeNumberOfElements(\'tr\', 10);
     * $I->seeNumberOfElements(\'tr\', [0,10]); // between 0 and 10 elements
     * ?>
     * ```
     * @param $selector
     * @param mixed $expected int or int[]
     * @see \\Codeception\\Module\\WebDriver::seeNumberOfElements()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeNumberOfElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '364e861a19fd1346a8f6ad08bf0b7229' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeNumberOfElements and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeNumberOfElements()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeNumberOfElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1508843f8884b43e143e6dc34c703b65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that there are a certain number of elements matched by the given locator on the page.
     *
     * ``` php
     * <?php
     * $I->seeNumberOfElements(\'tr\', 10);
     * $I->seeNumberOfElements(\'tr\', [0,10]); // between 0 and 10 elements
     * ?>
     * ```
     * @param $selector
     * @param mixed $expected int or int[]
     * @see \\Codeception\\Module\\WebDriver::seeNumberOfElements()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeNumberOfElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f6adc4334d515d92f14043d95262a4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\WebDriver::seeNumberOfElementsInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeNumberOfElementsInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac87df28ed7a572de56c60bacd9fc3c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\WebDriver::seeNumberOfElementsInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeNumberOfElementsInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '957dadeb28c4a193be04cc618bf19448' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeNumberOfElementsInDOM and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeNumberOfElementsInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeNumberOfElementsInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d7fecbf7761746a7a46712cfa93943f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     *
     * @see \\Codeception\\Module\\WebDriver::seeNumberOfElementsInDOM()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeNumberOfElementsInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8dc8bd45751949a24ff66783635bcbc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the given option is selected.
     *
     * ``` php
     * <?php
     * $I->seeOptionIsSelected(\'#form input[name=payment]\', \'Visa\');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::seeOptionIsSelected()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e1374183acdea99107e1f57854fcc64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the given option is selected.
     *
     * ``` php
     * <?php
     * $I->seeOptionIsSelected(\'#form input[name=payment]\', \'Visa\');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::seeOptionIsSelected()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff4d16416ced2ee8344f8bb51b69b47d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeOptionIsSelected and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeOptionIsSelected()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54b77bc711a5da8c45c7125cdad8f441' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the given option is selected.
     *
     * ``` php
     * <?php
     * $I->seeOptionIsSelected(\'#form input[name=payment]\', \'Visa\');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::seeOptionIsSelected()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df85491075571cfa0cca19f096592c7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the given option is not selected.
     *
     * ``` php
     * <?php
     * $I->dontSeeOptionIsSelected(\'#form input[name=payment]\', \'Visa\');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::dontSeeOptionIsSelected()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ec583fe6b40ebdef8f49b2089bda3b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the given option is not selected.
     *
     * ``` php
     * <?php
     * $I->dontSeeOptionIsSelected(\'#form input[name=payment]\', \'Visa\');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::dontSeeOptionIsSelected()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a76488dfaed700993a859342f3227bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeOptionIsSelected and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeOptionIsSelected()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b558403ecdafc2ecc23e1c0c40f7d7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the given option is not selected.
     *
     * ``` php
     * <?php
     * $I->dontSeeOptionIsSelected(\'#form input[name=payment]\', \'Visa\');
     * ?>
     * ```
     *
     * @param $selector
     * @param $optionText
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::dontSeeOptionIsSelected()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32d682eee6de1bd1bedce12d9b92c9ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the page title contains the given string.
     *
     * ``` php
     * <?php
     * $I->seeInTitle(\'Blog - Post #1\');
     * ?>
     * ```
     *
     * @param $title
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::seeInTitle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ff2d111c6a0914ec4762a5c286f3fe3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the page title contains the given string.
     *
     * ``` php
     * <?php
     * $I->seeInTitle(\'Blog - Post #1\');
     * ?>
     * ```
     *
     * @param $title
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::seeInTitle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a5b11de5f468c0f119f3cd9c54bc56e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeInTitle and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeInTitle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e88f0ff319bbb244f45f930795548fb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the page title contains the given string.
     *
     * ``` php
     * <?php
     * $I->seeInTitle(\'Blog - Post #1\');
     * ?>
     * ```
     *
     * @param $title
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::seeInTitle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64508b51c9b781d891f6968c8ed98468' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the page title does not contain the given string.
     *
     * @param $title
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::dontSeeInTitle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8037aa3f7caaeee45389a66be034deef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the page title does not contain the given string.
     *
     * @param $title
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::dontSeeInTitle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '738a1e04e7ef589bdc8b521cba89215c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeInTitle and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeInTitle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a893a8a52c008826cd5b9855696e57b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the page title does not contain the given string.
     *
     * @param $title
     *
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::dontSeeInTitle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '070ff2b171ff3f3d234696924ea431a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Accepts the active JavaScript native popup window, as created by `window.alert`|`window.confirm`|`window.prompt`.
     * Don\'t confuse popups with modal windows,
     * as created by [various libraries](http://jster.net/category/windows-modals-popups).
     * @see \\Codeception\\Module\\WebDriver::acceptPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'acceptPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed79e8625378dbf1538109a252ca936d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Accepts the active JavaScript native popup window, as created by `window.alert`|`window.confirm`|`window.prompt`.
     * Don\'t confuse popups with modal windows,
     * as created by [various libraries](http://jster.net/category/windows-modals-popups).
     * @see \\Codeception\\Module\\WebDriver::acceptPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAcceptPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e763af300c0ee87cf5b0d2cbfb52786f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes acceptPopup and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::acceptPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAcceptPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99efb364a0fa4a41d385888fba2db95b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Dismisses the active JavaScript popup, as created by `window.alert`, `window.confirm`, or `window.prompt`.
     * @see \\Codeception\\Module\\WebDriver::cancelPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cancelPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8288539855dcc75db3e7b8b747cb54dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Dismisses the active JavaScript popup, as created by `window.alert`, `window.confirm`, or `window.prompt`.
     * @see \\Codeception\\Module\\WebDriver::cancelPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToCancelPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52c2bd8b62231b8b3f5b13e349a988c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes cancelPopup and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::cancelPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryCancelPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62c6cbf679331da5efc4a4d279fcc4f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the active JavaScript popup,
     * as created by `window.alert`|`window.confirm`|`window.prompt`, contains the given string.
     *
     * @param $text
     *
     * @throws \\Codeception\\Exception\\ModuleException
     * @see \\Codeception\\Module\\WebDriver::seeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '028d7faed3eaa4685ec29c3c460acecf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the active JavaScript popup,
     * as created by `window.alert`|`window.confirm`|`window.prompt`, contains the given string.
     *
     * @param $text
     *
     * @throws \\Codeception\\Exception\\ModuleException
     * @see \\Codeception\\Module\\WebDriver::seeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25d160ee74ee425426a8f58669b9593e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeInPopup and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::seeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8261201ebb1621b844ff5f016d0298ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the active JavaScript popup,
     * as created by `window.alert`|`window.confirm`|`window.prompt`, contains the given string.
     *
     * @param $text
     *
     * @throws \\Codeception\\Exception\\ModuleException
     * @see \\Codeception\\Module\\WebDriver::seeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e15513c20654fc0052c8f6e0bbbe72b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the active JavaScript popup,
     * as created by `window.alert`|`window.confirm`|`window.prompt`, does NOT contain the given string.
     *
     * @param $text
     *
     * @throws \\Codeception\\Exception\\ModuleException
     * @see \\Codeception\\Module\\WebDriver::dontSeeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15e614f4c557b7c490e52838f012b44d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the active JavaScript popup,
     * as created by `window.alert`|`window.confirm`|`window.prompt`, does NOT contain the given string.
     *
     * @param $text
     *
     * @throws \\Codeception\\Exception\\ModuleException
     * @see \\Codeception\\Module\\WebDriver::dontSeeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14345984fe851ede1c7851db9c352722' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeInPopup and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dontSeeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d38abb973ce70920e2f4008bdb6361f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the active JavaScript popup,
     * as created by `window.alert`|`window.confirm`|`window.prompt`, does NOT contain the given string.
     *
     * @param $text
     *
     * @throws \\Codeception\\Exception\\ModuleException
     * @see \\Codeception\\Module\\WebDriver::dontSeeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f630a01cdd0d07ed4916a34b14e9862a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Enters text into a native JavaScript prompt popup, as created by `window.prompt`.
     *
     * @param $keys
     *
     * @throws \\Codeception\\Exception\\ModuleException
     * @see \\Codeception\\Module\\WebDriver::typeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'typeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c753589bd977e62e126dc00f353c245e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Enters text into a native JavaScript prompt popup, as created by `window.prompt`.
     *
     * @param $keys
     *
     * @throws \\Codeception\\Exception\\ModuleException
     * @see \\Codeception\\Module\\WebDriver::typeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToTypeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab043adf7233c8e2973f0c21ad099664' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes typeInPopup and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::typeInPopup()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryTypeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4887f79aa9d77c4d1ea91284d31bb99d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Reloads the current page.
     * @see \\Codeception\\Module\\WebDriver::reloadPage()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'reloadPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02b4a860924ce4ff69baf844d7ae1a98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Reloads the current page.
     * @see \\Codeception\\Module\\WebDriver::reloadPage()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToReloadPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e4d6f837695d2aaf9879ad3ced39e06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes reloadPage and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::reloadPage()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryReloadPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b421ed9cd81aefd0558a46194549ca9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Moves back in history.
     * @see \\Codeception\\Module\\WebDriver::moveBack()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'moveBack',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd82dd0620a6eebf75d2977914765c42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Moves back in history.
     * @see \\Codeception\\Module\\WebDriver::moveBack()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToMoveBack',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9882ef18b27b0b3bc55be56bf8142c63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes moveBack and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::moveBack()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryMoveBack',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15af637d12c3b36c1bf0258e9c5637b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Moves forward in history.
     * @see \\Codeception\\Module\\WebDriver::moveForward()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'moveForward',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff06214c14f74bee713dd9bb21142746' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Moves forward in history.
     * @see \\Codeception\\Module\\WebDriver::moveForward()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToMoveForward',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c95b34487b85bb7389fd7037c706d940' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes moveForward and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::moveForward()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryMoveForward',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63d3495aee96812ce30c389cf903c475' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Submits the given form on the page, optionally with the given form
     * values.  Give the form fields values as an array. Note that hidden fields
     * can\'t be accessed.
     *
     * Skipped fields will be filled by their values from the page.
     * You don\'t need to click the \'Submit\' button afterwards.
     * This command itself triggers the request to form\'s action.
     *
     * You can optionally specify what button\'s value to include
     * in the request with the last parameter as an alternative to
     * explicitly setting its value in the second parameter, as
     * button values are not otherwise included in the request.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->submitForm(\'#login\', [
     *     \'login\' => \'davert\',
     *     \'password\' => \'123456\'
     * ]);
     * // or
     * $I->submitForm(\'#login\', [
     *     \'login\' => \'davert\',
     *     \'password\' => \'123456\'
     * ], \'submitButtonName\');
     *
     * ```
     *
     * For example, given this sample "Sign Up" form:
     *
     * ``` html
     * <form action="/sign_up">
     *     Login:
     *     <input type="text" name="user[login]" /><br/>
     *     Password:
     *     <input type="password" name="user[password]" /><br/>
     *     Do you agree to our terms?
     *     <input type="checkbox" name="user[agree]" /><br/>
     *     Select pricing plan:
     *     <select name="plan">
     *         <option value="1">Free</option>
     *         <option value="2" selected="selected">Paid</option>
     *     </select>
     *     <input type="submit" name="submitButton" value="Submit" />
     * </form>
     * ```
     *
     * You could write the following to submit it:
     *
     * ``` php
     * <?php
     * $I->submitForm(
     *     \'#userForm\',
     *     [
     *         \'user[login]\' => \'Davert\',
     *         \'user[password]\' => \'123456\',
     *         \'user[agree]\' => true
     *     ],
     *     \'submitButton\'
     * );
     * ```
     * Note that "2" will be the submitted value for the "plan" field, as it is
     * the selected option.
     *
     * Also note that this differs from PhpBrowser, in that
     * ```\'user\' => [ \'login\' => \'Davert\' ]``` is not supported at the moment.
     * Named array keys *must* be included in the name as above.
     *
     * Pair this with seeInFormFields for quick testing magic.
     *
     * ``` php
     * <?php
     * $form = [
     *      \'field1\' => \'value\',
     *      \'field2\' => \'another value\',
     *      \'checkbox1\' => true,
     *      // ...
     * ];
     * $I->submitForm(\'//form[@id=my-form]\', $form, \'submitButton\');
     * // $I->amOnPage(\'/path/to/form-page\') may be needed
     * $I->seeInFormFields(\'//form[@id=my-form]\', $form);
     * ?>
     * ```
     *
     * Parameter values must be set to arrays for multiple input fields
     * of the same name, or multi-select combo boxes.  For checkboxes,
     * either the string value can be used, or boolean values which will
     * be replaced by the checkbox\'s value in the DOM.
     *
     * ``` php
     * <?php
     * $I->submitForm(\'#my-form\', [
     *      \'field1\' => \'value\',
     *      \'checkbox\' => [
     *          \'value of first checkbox\',
     *          \'value of second checkbox\',
     *      ],
     *      \'otherCheckboxes\' => [
     *          true,
     *          false,
     *          false,
     *      ],
     *      \'multiselect\' => [
     *          \'first option value\',
     *          \'second option value\',
     *      ]
     * ]);
     * ?>
     * ```
     *
     * Mixing string and boolean values for a checkbox\'s value is not supported
     * and may produce unexpected results.
     *
     * Field names ending in "[]" must be passed without the trailing square
     * bracket characters, and must contain an array for its value.  This allows
     * submitting multiple values with the same name, consider:
     *
     * ```php
     * $I->submitForm(\'#my-form\', [
     *     \'field[]\' => \'value\',
     *     \'field[]\' => \'another value\', // \'field[]\' is already a defined key
     * ]);
     * ```
     *
     * The solution is to pass an array value:
     *
     * ```php
     * // this way both values are submitted
     * $I->submitForm(\'#my-form\', [
     *     \'field\' => [
     *         \'value\',
     *         \'another value\',
     *     ]
     * ]);
     * ```
     *
     * The `$button` parameter can be either a string, an array or an instance
     * of Facebook\\WebDriver\\WebDriverBy. When it is a string, the
     * button will be found by its "name" attribute. If $button is an
     * array then it will be treated as a strict selector and a WebDriverBy
     * will be used verbatim.
     *
     * For example, given the following HTML:
     *
     * ``` html
     * <input type="submit" name="submitButton" value="Submit" />
     * ```
     *
     * `$button` could be any one of the following:
     *   - \'submitButton\'
     *   - [\'name\' => \'submitButton\']
     *   - WebDriverBy::name(\'submitButton\')
     *
     * @param $selector
     * @param $params
     * @param $button
     * @see \\Codeception\\Module\\WebDriver::submitForm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7de5a57583d45b1405f01e61e9ae03b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Submits the given form on the page, optionally with the given form
     * values.  Give the form fields values as an array. Note that hidden fields
     * can\'t be accessed.
     *
     * Skipped fields will be filled by their values from the page.
     * You don\'t need to click the \'Submit\' button afterwards.
     * This command itself triggers the request to form\'s action.
     *
     * You can optionally specify what button\'s value to include
     * in the request with the last parameter as an alternative to
     * explicitly setting its value in the second parameter, as
     * button values are not otherwise included in the request.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * $I->submitForm(\'#login\', [
     *     \'login\' => \'davert\',
     *     \'password\' => \'123456\'
     * ]);
     * // or
     * $I->submitForm(\'#login\', [
     *     \'login\' => \'davert\',
     *     \'password\' => \'123456\'
     * ], \'submitButtonName\');
     *
     * ```
     *
     * For example, given this sample "Sign Up" form:
     *
     * ``` html
     * <form action="/sign_up">
     *     Login:
     *     <input type="text" name="user[login]" /><br/>
     *     Password:
     *     <input type="password" name="user[password]" /><br/>
     *     Do you agree to our terms?
     *     <input type="checkbox" name="user[agree]" /><br/>
     *     Select pricing plan:
     *     <select name="plan">
     *         <option value="1">Free</option>
     *         <option value="2" selected="selected">Paid</option>
     *     </select>
     *     <input type="submit" name="submitButton" value="Submit" />
     * </form>
     * ```
     *
     * You could write the following to submit it:
     *
     * ``` php
     * <?php
     * $I->submitForm(
     *     \'#userForm\',
     *     [
     *         \'user[login]\' => \'Davert\',
     *         \'user[password]\' => \'123456\',
     *         \'user[agree]\' => true
     *     ],
     *     \'submitButton\'
     * );
     * ```
     * Note that "2" will be the submitted value for the "plan" field, as it is
     * the selected option.
     *
     * Also note that this differs from PhpBrowser, in that
     * ```\'user\' => [ \'login\' => \'Davert\' ]``` is not supported at the moment.
     * Named array keys *must* be included in the name as above.
     *
     * Pair this with seeInFormFields for quick testing magic.
     *
     * ``` php
     * <?php
     * $form = [
     *      \'field1\' => \'value\',
     *      \'field2\' => \'another value\',
     *      \'checkbox1\' => true,
     *      // ...
     * ];
     * $I->submitForm(\'//form[@id=my-form]\', $form, \'submitButton\');
     * // $I->amOnPage(\'/path/to/form-page\') may be needed
     * $I->seeInFormFields(\'//form[@id=my-form]\', $form);
     * ?>
     * ```
     *
     * Parameter values must be set to arrays for multiple input fields
     * of the same name, or multi-select combo boxes.  For checkboxes,
     * either the string value can be used, or boolean values which will
     * be replaced by the checkbox\'s value in the DOM.
     *
     * ``` php
     * <?php
     * $I->submitForm(\'#my-form\', [
     *      \'field1\' => \'value\',
     *      \'checkbox\' => [
     *          \'value of first checkbox\',
     *          \'value of second checkbox\',
     *      ],
     *      \'otherCheckboxes\' => [
     *          true,
     *          false,
     *          false,
     *      ],
     *      \'multiselect\' => [
     *          \'first option value\',
     *          \'second option value\',
     *      ]
     * ]);
     * ?>
     * ```
     *
     * Mixing string and boolean values for a checkbox\'s value is not supported
     * and may produce unexpected results.
     *
     * Field names ending in "[]" must be passed without the trailing square
     * bracket characters, and must contain an array for its value.  This allows
     * submitting multiple values with the same name, consider:
     *
     * ```php
     * $I->submitForm(\'#my-form\', [
     *     \'field[]\' => \'value\',
     *     \'field[]\' => \'another value\', // \'field[]\' is already a defined key
     * ]);
     * ```
     *
     * The solution is to pass an array value:
     *
     * ```php
     * // this way both values are submitted
     * $I->submitForm(\'#my-form\', [
     *     \'field\' => [
     *         \'value\',
     *         \'another value\',
     *     ]
     * ]);
     * ```
     *
     * The `$button` parameter can be either a string, an array or an instance
     * of Facebook\\WebDriver\\WebDriverBy. When it is a string, the
     * button will be found by its "name" attribute. If $button is an
     * array then it will be treated as a strict selector and a WebDriverBy
     * will be used verbatim.
     *
     * For example, given the following HTML:
     *
     * ``` html
     * <input type="submit" name="submitButton" value="Submit" />
     * ```
     *
     * `$button` could be any one of the following:
     *   - \'submitButton\'
     *   - [\'name\' => \'submitButton\']
     *   - WebDriverBy::name(\'submitButton\')
     *
     * @param $selector
     * @param $params
     * @param $button
     * @see \\Codeception\\Module\\WebDriver::submitForm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSubmitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cac9311d7318096db0b09db5d2976d80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes submitForm and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::submitForm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySubmitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06ee31b21ca9579daa3a18d33fbbaef6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits up to $timeout seconds for the given element to change.
     * Element "change" is determined by a callback function which is called repeatedly
     * until the return value evaluates to true.
     *
     * ``` php
     * <?php
     * use \\Facebook\\WebDriver\\WebDriverElement
     * $I->waitForElementChange(\'#menu\', function(WebDriverElement $el) {
     *     return $el->isDisplayed();
     * }, 100);
     * ?>
     * ```
     *
     * @param $element
     * @param \\Closure $callback
     * @param int $timeout seconds
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::waitForElementChange()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitForElementChange',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ee20f94c2f15c64e76c620ee885bcb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits up to $timeout seconds for an element to appear on the page.
     * If the element doesn\'t appear, a timeout exception is thrown.
     *
     * ``` php
     * <?php
     * $I->waitForElement(\'#agree_button\', 30); // secs
     * $I->click(\'#agree_button\');
     * ?>
     * ```
     *
     * @param $element
     * @param int $timeout seconds
     * @throws \\Exception
     * @see \\Codeception\\Module\\WebDriver::waitForElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitForElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b615a5a9643ee11972e3291891369c92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits up to $timeout seconds for the given element to be visible on the page.
     * If element doesn\'t appear, a timeout exception is thrown.
     *
     * ``` php
     * <?php
     * $I->waitForElementVisible(\'#agree_button\', 30); // secs
     * $I->click(\'#agree_button\');
     * ?>
     * ```
     *
     * @param $element
     * @param int $timeout seconds
     * @throws \\Exception
     * @see \\Codeception\\Module\\WebDriver::waitForElementVisible()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitForElementVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df0568ca159004c41add4111ba578da6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits up to $timeout seconds for the given element to become invisible.
     * If element stays visible, a timeout exception is thrown.
     *
     * ``` php
     * <?php
     * $I->waitForElementNotVisible(\'#agree_button\', 30); // secs
     * ?>
     * ```
     *
     * @param $element
     * @param int $timeout seconds
     * @throws \\Exception
     * @see \\Codeception\\Module\\WebDriver::waitForElementNotVisible()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitForElementNotVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '621fcfae8e6a5f1d2a000a68238f4497' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits up to $timeout seconds for the given element to be clickable.
     * If element doesn\'t become clickable, a timeout exception is thrown.
     *
     * ``` php
     * <?php
     * $I->waitForElementClickable(\'#agree_button\', 30); // secs
     * $I->click(\'#agree_button\');
     * ?>
     * ```
     *
     * @param $element
     * @param int $timeout seconds
     * @throws \\Exception
     * @see \\Codeception\\Module\\WebDriver::waitForElementClickable()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitForElementClickable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ed3fdcb6193d066366042659ba40251' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits up to $timeout seconds for the given string to appear on the page.
     *
     * Can also be passed a selector to search in, be as specific as possible when using selectors.
     * waitForText() will only watch the first instance of the matching selector / text provided.
     * If the given text doesn\'t appear, a timeout exception is thrown.
     *
     * ``` php
     * <?php
     * $I->waitForText(\'foo\', 30); // secs
     * $I->waitForText(\'foo\', 30, \'.title\'); // secs
     * ?>
     * ```
     *
     * @param string $text
     * @param int $timeout seconds
     * @param string $selector optional
     * @throws \\Exception
     * @see \\Codeception\\Module\\WebDriver::waitForText()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitForText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f2839646b42023323746e5d4891af24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Wait for $timeout seconds.
     *
     * @param int|float $timeout secs
     * @throws \\Codeception\\Exception\\TestRuntimeException
     * @see \\Codeception\\Module\\WebDriver::wait()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'wait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b79b71e71151ada05e8b78bb2cd4557' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Low-level API method.
     * If Codeception commands are not enough, this allows you to use Selenium WebDriver methods directly:
     *
     * ``` php
     * $I->executeInSelenium(function(\\Facebook\\WebDriver\\Remote\\RemoteWebDriver $webdriver) {
     *   $webdriver->get(\'http://google.com\');
     * });
     * ```
     *
     * This runs in the context of the
     * [RemoteWebDriver class](https://github.com/facebook/php-webdriver/blob/master/lib/remote/RemoteWebDriver.php).
     * Try not to use this command on a regular basis.
     * If Codeception lacks a feature you need, please implement it and submit a patch.
     *
     * @param callable $function
     * @see \\Codeception\\Module\\WebDriver::executeInSelenium()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'executeInSelenium',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9524ae78b6429fd35d1d6759c1b4cbe9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Low-level API method.
     * If Codeception commands are not enough, this allows you to use Selenium WebDriver methods directly:
     *
     * ``` php
     * $I->executeInSelenium(function(\\Facebook\\WebDriver\\Remote\\RemoteWebDriver $webdriver) {
     *   $webdriver->get(\'http://google.com\');
     * });
     * ```
     *
     * This runs in the context of the
     * [RemoteWebDriver class](https://github.com/facebook/php-webdriver/blob/master/lib/remote/RemoteWebDriver.php).
     * Try not to use this command on a regular basis.
     * If Codeception lacks a feature you need, please implement it and submit a patch.
     *
     * @param callable $function
     * @see \\Codeception\\Module\\WebDriver::executeInSelenium()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToExecuteInSelenium',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6aa1475f14255e58fa6c3ee23da9ee7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes executeInSelenium and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::executeInSelenium()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryExecuteInSelenium',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b48592db5d7ca0aaf0f280d150f1fb90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Switch to another window identified by name.
     *
     * The window can only be identified by name. If the $name parameter is blank, the parent window will be used.
     *
     * Example:
     * ``` html
     * <input type="button" value="Open window" onclick="window.open(\'http://example.com\', \'another_window\')">
     * ```
     *
     * ``` php
     * <?php
     * $I->click("Open window");
     * # switch to another window
     * $I->switchToWindow("another_window");
     * # switch to parent window
     * $I->switchToWindow();
     * ?>
     * ```
     *
     * If the window has no name, match it by switching to next active tab using `switchToNextTab` method.
     *
     * Or use native Selenium functions to get access to all opened windows:
     *
     * ``` php
     * <?php
     * $I->executeInSelenium(function (\\Facebook\\WebDriver\\Remote\\RemoteWebDriver $webdriver) {
     *      $handles=$webdriver->getWindowHandles();
     *      $last_window = end($handles);
     *      $webdriver->switchTo()->window($last_window);
     * });
     * ?>
     * ```
     *
     * @param string|null $name
     * @see \\Codeception\\Module\\WebDriver::switchToWindow()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'switchToWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce4d69ce8526a32cb9fc03d4fe458c23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Switch to another window identified by name.
     *
     * The window can only be identified by name. If the $name parameter is blank, the parent window will be used.
     *
     * Example:
     * ``` html
     * <input type="button" value="Open window" onclick="window.open(\'http://example.com\', \'another_window\')">
     * ```
     *
     * ``` php
     * <?php
     * $I->click("Open window");
     * # switch to another window
     * $I->switchToWindow("another_window");
     * # switch to parent window
     * $I->switchToWindow();
     * ?>
     * ```
     *
     * If the window has no name, match it by switching to next active tab using `switchToNextTab` method.
     *
     * Or use native Selenium functions to get access to all opened windows:
     *
     * ``` php
     * <?php
     * $I->executeInSelenium(function (\\Facebook\\WebDriver\\Remote\\RemoteWebDriver $webdriver) {
     *      $handles=$webdriver->getWindowHandles();
     *      $last_window = end($handles);
     *      $webdriver->switchTo()->window($last_window);
     * });
     * ?>
     * ```
     *
     * @param string|null $name
     * @see \\Codeception\\Module\\WebDriver::switchToWindow()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSwitchToWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c10a8f8b354ce22ee0bc2cc80160c76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes switchToWindow and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::switchToWindow()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySwitchToWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45ee9596b9e38b3fc8edf19bd981bb5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Switch to another frame on the page.
     *
     * Example:
     * ``` html
     * <iframe name="another_frame" src="http://example.com">
     *
     * ```
     *
     * ``` php
     * <?php
     * # switch to iframe
     * $I->switchToIFrame("another_frame");
     * # switch to parent page
     * $I->switchToIFrame();
     *
     * ```
     *
     * @param string|null $name
     * @see \\Codeception\\Module\\WebDriver::switchToIFrame()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'switchToIFrame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecb836d053556cc6a75d5ddf0e924e19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Switch to another frame on the page.
     *
     * Example:
     * ``` html
     * <iframe name="another_frame" src="http://example.com">
     *
     * ```
     *
     * ``` php
     * <?php
     * # switch to iframe
     * $I->switchToIFrame("another_frame");
     * # switch to parent page
     * $I->switchToIFrame();
     *
     * ```
     *
     * @param string|null $name
     * @see \\Codeception\\Module\\WebDriver::switchToIFrame()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSwitchToIFrame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b372472bb94666f4531a5552ad6e57df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes switchToIFrame and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::switchToIFrame()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySwitchToIFrame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb75b4bd8f6401b22146144e6e3f12b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Executes JavaScript and waits up to $timeout seconds for it to return true.
     *
     * In this example we will wait up to 60 seconds for all jQuery AJAX requests to finish.
     *
     * ``` php
     * <?php
     * $I->waitForJS("return $.active == 0;", 60);
     * ?>
     * ```
     *
     * @param string $script
     * @param int $timeout seconds
     * @see \\Codeception\\Module\\WebDriver::waitForJS()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitForJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3bfdb7bfa162735f549bca42ab34ee7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Executes custom JavaScript.
     *
     * This example uses jQuery to get a value and assigns that value to a PHP variable:
     *
     * ```php
     * <?php
     * $myVar = $I->executeJS(\'return $("#myField").val()\');
     *
     * // additional arguments can be passed as array
     * // Example shows `Hello World` alert:
     * $I->executeJS("window.alert(arguments[0])", [\'Hello world\']);
     * ```
     *
     * @param $script
     * @param array $arguments
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::executeJS()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'executeJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47e1139abcc9cea78eed50ac835662bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Executes custom JavaScript.
     *
     * This example uses jQuery to get a value and assigns that value to a PHP variable:
     *
     * ```php
     * <?php
     * $myVar = $I->executeJS(\'return $("#myField").val()\');
     *
     * // additional arguments can be passed as array
     * // Example shows `Hello World` alert:
     * $I->executeJS("window.alert(arguments[0])", [\'Hello world\']);
     * ```
     *
     * @param $script
     * @param array $arguments
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::executeJS()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToExecuteJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2b66162320a6b0da3fd6880d58d0a8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes executeJS and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::executeJS()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryExecuteJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7181951e727fc18831efe50513d9f6e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Executes asynchronous JavaScript.
     * A callback should be executed by JavaScript to exit from a script.
     * Callback is passed as a last element in `arguments` array.
     * Additional arguments can be passed as array in second parameter.
     *
     * ```js
     * // wait for 1200 milliseconds my running `setTimeout`
     * * $I->executeAsyncJS(\'setTimeout(arguments[0], 1200)\');
     *
     * $seconds = 1200; // or seconds are passed as argument
     * $I->executeAsyncJS(\'setTimeout(arguments[1], arguments[0])\', [$seconds]);
     * ```
     *
     * @param $script
     * @param array $arguments
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::executeAsyncJS()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'executeAsyncJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4e1c3518e222b765fce9e3164299185' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Executes asynchronous JavaScript.
     * A callback should be executed by JavaScript to exit from a script.
     * Callback is passed as a last element in `arguments` array.
     * Additional arguments can be passed as array in second parameter.
     *
     * ```js
     * // wait for 1200 milliseconds my running `setTimeout`
     * * $I->executeAsyncJS(\'setTimeout(arguments[0], 1200)\');
     *
     * $seconds = 1200; // or seconds are passed as argument
     * $I->executeAsyncJS(\'setTimeout(arguments[1], arguments[0])\', [$seconds]);
     * ```
     *
     * @param $script
     * @param array $arguments
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::executeAsyncJS()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToExecuteAsyncJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd0426a33b31eee53a23bb368191d852' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes executeAsyncJS and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::executeAsyncJS()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryExecuteAsyncJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6acbc90aa494151852883fd72d7a922' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Maximizes the current window.
     * @see \\Codeception\\Module\\WebDriver::maximizeWindow()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'maximizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a265713ca889f44f525c0c7e518e636f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Maximizes the current window.
     * @see \\Codeception\\Module\\WebDriver::maximizeWindow()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToMaximizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bb17b314d75a8806b1e9c58aff91c2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes maximizeWindow and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::maximizeWindow()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryMaximizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22a584a1b0aa8545e5b91f9478fc5d84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Performs a simple mouse drag-and-drop operation.
     *
     * ``` php
     * <?php
     * $I->dragAndDrop(\'#drag\', \'#drop\');
     * ?>
     * ```
     *
     * @param string $source (CSS ID or XPath)
     * @param string $target (CSS ID or XPath)
     * @see \\Codeception\\Module\\WebDriver::dragAndDrop()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dragAndDrop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4cb80ac73881dc91e0707404772ce75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Performs a simple mouse drag-and-drop operation.
     *
     * ``` php
     * <?php
     * $I->dragAndDrop(\'#drag\', \'#drop\');
     * ?>
     * ```
     *
     * @param string $source (CSS ID or XPath)
     * @param string $target (CSS ID or XPath)
     * @see \\Codeception\\Module\\WebDriver::dragAndDrop()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDragAndDrop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ccc919955f5c3df68fe59722c8ad0db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dragAndDrop and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::dragAndDrop()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDragAndDrop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30ed1aee113c11c059685481f549ad54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Move mouse over the first element matched by the given locator.
     * If the first parameter null then the page is used.
     * If the second and third parameters are given,
     * then the mouse is moved to an offset of the element\'s top-left corner.
     * Otherwise, the mouse is moved to the center of the element.
     *
     * ``` php
     * <?php
     * $I->moveMouseOver([\'css\' => \'.checkout\']);
     * $I->moveMouseOver(null, 20, 50);
     * $I->moveMouseOver([\'css\' => \'.checkout\'], 20, 50);
     * ?>
     * ```
     *
     * @param string $cssOrXPath css or xpath of the web element
     * @param int $offsetX
     * @param int $offsetY
     *
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::moveMouseOver()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'moveMouseOver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03953d261f3c170eb3e8c62b0adeff25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Move mouse over the first element matched by the given locator.
     * If the first parameter null then the page is used.
     * If the second and third parameters are given,
     * then the mouse is moved to an offset of the element\'s top-left corner.
     * Otherwise, the mouse is moved to the center of the element.
     *
     * ``` php
     * <?php
     * $I->moveMouseOver([\'css\' => \'.checkout\']);
     * $I->moveMouseOver(null, 20, 50);
     * $I->moveMouseOver([\'css\' => \'.checkout\'], 20, 50);
     * ?>
     * ```
     *
     * @param string $cssOrXPath css or xpath of the web element
     * @param int $offsetX
     * @param int $offsetY
     *
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::moveMouseOver()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToMoveMouseOver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf8eaa6a4a2c41bddb5c2248d935690e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes moveMouseOver and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::moveMouseOver()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryMoveMouseOver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65eb0853c6afffe3123aa6970e75e569' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Performs click with the left mouse button on an element.
     * If the first parameter `null` then the offset is relative to the actual mouse position.
     * If the second and third parameters are given,
     * then the mouse is moved to an offset of the element\'s top-left corner.
     * Otherwise, the mouse is moved to the center of the element.
     *
     * ``` php
     * <?php
     * $I->clickWithLeftButton([\'css\' => \'.checkout\']);
     * $I->clickWithLeftButton(null, 20, 50);
     * $I->clickWithLeftButton([\'css\' => \'.checkout\'], 20, 50);
     * ?>
     * ```
     *
     * @param string $cssOrXPath css or xpath of the web element (body by default).
     * @param int $offsetX
     * @param int $offsetY
     *
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::clickWithLeftButton()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'clickWithLeftButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7989db2124e46ba874e35d1e09f99bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Performs click with the left mouse button on an element.
     * If the first parameter `null` then the offset is relative to the actual mouse position.
     * If the second and third parameters are given,
     * then the mouse is moved to an offset of the element\'s top-left corner.
     * Otherwise, the mouse is moved to the center of the element.
     *
     * ``` php
     * <?php
     * $I->clickWithLeftButton([\'css\' => \'.checkout\']);
     * $I->clickWithLeftButton(null, 20, 50);
     * $I->clickWithLeftButton([\'css\' => \'.checkout\'], 20, 50);
     * ?>
     * ```
     *
     * @param string $cssOrXPath css or xpath of the web element (body by default).
     * @param int $offsetX
     * @param int $offsetY
     *
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::clickWithLeftButton()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToClickWithLeftButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7097541052d991bb46d3ecbc37ddeae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes clickWithLeftButton and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::clickWithLeftButton()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryClickWithLeftButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d61d19cd24ce851fa63382f1bcf37fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Performs contextual click with the right mouse button on an element.
     * If the first parameter `null` then the offset is relative to the actual mouse position.
     * If the second and third parameters are given,
     * then the mouse is moved to an offset of the element\'s top-left corner.
     * Otherwise, the mouse is moved to the center of the element.
     *
     * ``` php
     * <?php
     * $I->clickWithRightButton([\'css\' => \'.checkout\']);
     * $I->clickWithRightButton(null, 20, 50);
     * $I->clickWithRightButton([\'css\' => \'.checkout\'], 20, 50);
     * ?>
     * ```
     *
     * @param string $cssOrXPath css or xpath of the web element (body by default).
     * @param int $offsetX
     * @param int $offsetY
     *
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::clickWithRightButton()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'clickWithRightButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0020fc851046fea80a89f57c0e6feb0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Performs contextual click with the right mouse button on an element.
     * If the first parameter `null` then the offset is relative to the actual mouse position.
     * If the second and third parameters are given,
     * then the mouse is moved to an offset of the element\'s top-left corner.
     * Otherwise, the mouse is moved to the center of the element.
     *
     * ``` php
     * <?php
     * $I->clickWithRightButton([\'css\' => \'.checkout\']);
     * $I->clickWithRightButton(null, 20, 50);
     * $I->clickWithRightButton([\'css\' => \'.checkout\'], 20, 50);
     * ?>
     * ```
     *
     * @param string $cssOrXPath css or xpath of the web element (body by default).
     * @param int $offsetX
     * @param int $offsetY
     *
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::clickWithRightButton()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToClickWithRightButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39d4986d9600c4a453c55a2cb482f431' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes clickWithRightButton and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::clickWithRightButton()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryClickWithRightButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dca024e78b62505d528c5657e18de1a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Performs a double-click on an element matched by CSS or XPath.
     *
     * @param $cssOrXPath
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::doubleClick()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'doubleClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '645241b410aae81d838cfad6c6bb4c27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Performs a double-click on an element matched by CSS or XPath.
     *
     * @param $cssOrXPath
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::doubleClick()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDoubleClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88de819899f0e56e81c75e606624c28f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes doubleClick and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::doubleClick()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDoubleClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2488a43d09f846eb59a6e004754f9129' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Presses the given key on the given element.
     * To specify a character and modifier (e.g. ctrl, alt, shift, meta), pass an array for $char with
     * the modifier as the first element and the character as the second.
     * For special keys use key constants from WebDriverKeys class.
     *
     * ``` php
     * <?php
     * // <input id="page" value="old" />
     * $I->pressKey(\'#page\',\'a\'); // => olda
     * $I->pressKey(\'#page\',array(\'ctrl\',\'a\'),\'new\'); //=> new
     * $I->pressKey(\'#page\',array(\'shift\',\'111\'),\'1\',\'x\'); //=> old!!!1x
     * $I->pressKey(\'descendant-or-self::*[@id=\'page\']\',\'u\'); //=> oldu
     * $I->pressKey(\'#name\', array(\'ctrl\', \'a\'), \\Facebook\\WebDriver\\WebDriverKeys::DELETE); //=>\'\'
     * ?>
     * ```
     *
     * @param $element
     * @param $char string|array Can be char or array with modifier. You can provide several chars.
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::pressKey()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'pressKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6c5344f43624c29ee427f33302905c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Presses the given key on the given element.
     * To specify a character and modifier (e.g. ctrl, alt, shift, meta), pass an array for $char with
     * the modifier as the first element and the character as the second.
     * For special keys use key constants from WebDriverKeys class.
     *
     * ``` php
     * <?php
     * // <input id="page" value="old" />
     * $I->pressKey(\'#page\',\'a\'); // => olda
     * $I->pressKey(\'#page\',array(\'ctrl\',\'a\'),\'new\'); //=> new
     * $I->pressKey(\'#page\',array(\'shift\',\'111\'),\'1\',\'x\'); //=> old!!!1x
     * $I->pressKey(\'descendant-or-self::*[@id=\'page\']\',\'u\'); //=> oldu
     * $I->pressKey(\'#name\', array(\'ctrl\', \'a\'), \\Facebook\\WebDriver\\WebDriverKeys::DELETE); //=>\'\'
     * ?>
     * ```
     *
     * @param $element
     * @param $char string|array Can be char or array with modifier. You can provide several chars.
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::pressKey()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToPressKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cfa05a32a3c2ed8be7d505a35a35bef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes pressKey and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::pressKey()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryPressKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d874b5672c104eef9e9dd1f54d37322' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Append the given text to the given element.
     * Can also add a selection to a select box.
     *
     * ``` php
     * <?php
     * $I->appendField(\'#mySelectbox\', \'SelectValue\');
     * $I->appendField(\'#myTextField\', \'appended\');
     * ?>
     * ```
     *
     * @param string $field
     * @param string $value
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::appendField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'appendField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba87b6913d6f63ebd489904c5ec113d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Append the given text to the given element.
     * Can also add a selection to a select box.
     *
     * ``` php
     * <?php
     * $I->appendField(\'#mySelectbox\', \'SelectValue\');
     * $I->appendField(\'#myTextField\', \'appended\');
     * ?>
     * ```
     *
     * @param string $field
     * @param string $value
     * @throws \\Codeception\\Exception\\ElementNotFound
     * @see \\Codeception\\Module\\WebDriver::appendField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAppendField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c71db48c91bb6687f299ef376a4abc28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes appendField and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::appendField()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAppendField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc896824902a552d3a2186514ce8823e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Saves current cookies into named snapshot in order to restore them in other tests
     * This is useful to save session state between tests.
     * For example, if user needs log in to site for each test this scenario can be executed once
     * while other tests can just restore saved cookies.
     *
     * ``` php
     * <?php
     * // inside AcceptanceTester class:
     *
     * public function login()
     * {
     *      // if snapshot exists - skipping login
     *      if ($I->loadSessionSnapshot(\'login\')) return;
     *
     *      // logging in
     *      $I->amOnPage(\'/login\');
     *      $I->fillField(\'name\', \'jon\');
     *      $I->fillField(\'password\', \'123345\');
     *      $I->click(\'Login\');
     *
     *      // saving snapshot
     *      $I->saveSessionSnapshot(\'login\');
     * }
     * ?>
     * ```
     *
     * @param $name
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::saveSessionSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'saveSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88a59cea566902b53f0c1548dfbcc6f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Saves current cookies into named snapshot in order to restore them in other tests
     * This is useful to save session state between tests.
     * For example, if user needs log in to site for each test this scenario can be executed once
     * while other tests can just restore saved cookies.
     *
     * ``` php
     * <?php
     * // inside AcceptanceTester class:
     *
     * public function login()
     * {
     *      // if snapshot exists - skipping login
     *      if ($I->loadSessionSnapshot(\'login\')) return;
     *
     *      // logging in
     *      $I->amOnPage(\'/login\');
     *      $I->fillField(\'name\', \'jon\');
     *      $I->fillField(\'password\', \'123345\');
     *      $I->click(\'Login\');
     *
     *      // saving snapshot
     *      $I->saveSessionSnapshot(\'login\');
     * }
     * ?>
     * ```
     *
     * @param $name
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::saveSessionSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSaveSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e48c2198fbc8a7f83729ad35c979eadc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes saveSessionSnapshot and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::saveSessionSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySaveSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '742df0d15fda467dce787614b4328e2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Loads cookies from a saved snapshot.
     * Allows to reuse same session across tests without additional login.
     *
     * See [saveSessionSnapshot](#saveSessionSnapshot)
     *
     * @param $name
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::loadSessionSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'loadSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dea282c002191775d34076118ed4fa9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Loads cookies from a saved snapshot.
     * Allows to reuse same session across tests without additional login.
     *
     * See [saveSessionSnapshot](#saveSessionSnapshot)
     *
     * @param $name
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::loadSessionSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToLoadSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87b6b18ec711a72694eda578fd95f9c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes loadSessionSnapshot and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::loadSessionSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryLoadSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abf428d104b17e8d80b7c934628eabfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes session snapshot.
     *
     * See [saveSessionSnapshot](#saveSessionSnapshot)
     *
     * @param $name
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::deleteSessionSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'deleteSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '225399c58ef59784a64eaed53d027a13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Deletes session snapshot.
     *
     * See [saveSessionSnapshot](#saveSessionSnapshot)
     *
     * @param $name
     * @return mixed
     * @see \\Codeception\\Module\\WebDriver::deleteSessionSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDeleteSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a60305105ab9e9d680e967bf80f277d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes deleteSessionSnapshot and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::deleteSessionSnapshot()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDeleteSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6cac8a577bc99db7ee3c0d9eb16827b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Move to the middle of the given element matched by the given locator.
     * Extra shift, calculated from the top-left corner of the element,
     * can be set by passing $offsetX and $offsetY parameters.
     *
     * ``` php
     * <?php
     * $I->scrollTo([\'css\' => \'.checkout\'], 20, 50);
     * ?>
     * ```
     *
     * @param $selector
     * @param int $offsetX
     * @param int $offsetY
     * @see \\Codeception\\Module\\WebDriver::scrollTo()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'scrollTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd937ec8ee8f384038674ac44e572f3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Move to the middle of the given element matched by the given locator.
     * Extra shift, calculated from the top-left corner of the element,
     * can be set by passing $offsetX and $offsetY parameters.
     *
     * ``` php
     * <?php
     * $I->scrollTo([\'css\' => \'.checkout\'], 20, 50);
     * ?>
     * ```
     *
     * @param $selector
     * @param int $offsetX
     * @param int $offsetY
     * @see \\Codeception\\Module\\WebDriver::scrollTo()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToScrollTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ef867490210738cd4906631fe034aa4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes scrollTo and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::scrollTo()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryScrollTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd09532fcb92e7885ced213cc0b289999' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opens a new browser tab (wherever it is possible) and switches to it.
     *
     * ```php
     * <?php
     * $I->openNewTab();
     * ```
     * Tab is opened by using `window.open` javascript in a browser.
     * Please note, that adblock can restrict creating such tabs.
     *
     * Can\'t be used with PhantomJS
     *
     * @see \\Codeception\\Module\\WebDriver::openNewTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'openNewTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36b8f8709ba730321c7bfcad4b5a2320' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Opens a new browser tab (wherever it is possible) and switches to it.
     *
     * ```php
     * <?php
     * $I->openNewTab();
     * ```
     * Tab is opened by using `window.open` javascript in a browser.
     * Please note, that adblock can restrict creating such tabs.
     *
     * Can\'t be used with PhantomJS
     *
     * @see \\Codeception\\Module\\WebDriver::openNewTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToOpenNewTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b236345c8f7eeb5e6276e93ff419db35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes openNewTab and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::openNewTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryOpenNewTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f032c405927913d11fc5394076deb9f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Closes current browser tab and switches to previous active tab.
     *
     * ```php
     * <?php
     * $I->closeTab();
     * ```
     *
     * Can\'t be used with PhantomJS
     * @see \\Codeception\\Module\\WebDriver::closeTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'closeTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bfe5a6af1074f0044354968193920177' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Closes current browser tab and switches to previous active tab.
     *
     * ```php
     * <?php
     * $I->closeTab();
     * ```
     *
     * Can\'t be used with PhantomJS
     * @see \\Codeception\\Module\\WebDriver::closeTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToCloseTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24c1d41eb6b5f6968455a1bf7e43ad47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes closeTab and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::closeTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryCloseTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4780d0ef65a49049dc07b951d8ac107' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Switches to next browser tab.
     * An offset can be specified.
     *
     * ```php
     * <?php
     * // switch to next tab
     * $I->switchToNextTab();
     * // switch to 2nd next tab
     * $I->switchToNextTab(2);
     * ```
     *
     * Can\'t be used with PhantomJS
     *
     * @param int $offset 1
     * @see \\Codeception\\Module\\WebDriver::switchToNextTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'switchToNextTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02ee06cb98f68e83d5af3ab29f968bb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Switches to next browser tab.
     * An offset can be specified.
     *
     * ```php
     * <?php
     * // switch to next tab
     * $I->switchToNextTab();
     * // switch to 2nd next tab
     * $I->switchToNextTab(2);
     * ```
     *
     * Can\'t be used with PhantomJS
     *
     * @param int $offset 1
     * @see \\Codeception\\Module\\WebDriver::switchToNextTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSwitchToNextTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '783e20262621a77759f42b8525f8fa57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes switchToNextTab and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::switchToNextTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySwitchToNextTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '719cd08f55d4b0a6dad5174d4982ab44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Switches to previous browser tab.
     * An offset can be specified.
     *
     * ```php
     * <?php
     * // switch to previous tab
     * $I->switchToPreviousTab();
     * // switch to 2nd previous tab
     * $I->switchToPreviousTab(2);
     * ```
     *
     * Can\'t be used with PhantomJS
     *
     * @param int $offset 1
     * @see \\Codeception\\Module\\WebDriver::switchToPreviousTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'switchToPreviousTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d91c3729898deaea9b20ffc2aaa73d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Switches to previous browser tab.
     * An offset can be specified.
     *
     * ```php
     * <?php
     * // switch to previous tab
     * $I->switchToPreviousTab();
     * // switch to 2nd previous tab
     * $I->switchToPreviousTab(2);
     * ```
     *
     * Can\'t be used with PhantomJS
     *
     * @param int $offset 1
     * @see \\Codeception\\Module\\WebDriver::switchToPreviousTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSwitchToPreviousTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41e28ca1590e320d30e9d2432ada11d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes switchToPreviousTab and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::switchToPreviousTab()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySwitchToPreviousTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b53f34388dcc455c856aab42de112a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Waits for element and runs a sequence of actions inside its context.
     * Actions can be defined with array, callback, or `Codeception\\Util\\ActionSequence` instance.
     *
     * Actions as array are recommended for simple to combine "waitForElement" with assertions;
     * `waitForElement($el)` and `see(\'text\', $el)` can be simplified to:
     *
     * ```php
     * <?php
     * $I->performOn($el, [\'see\' => \'text\']);
     * ```
     *
     * List of actions can be pragmatically build using `Codeception\\Util\\ActionSequence`:
     *
     * ```php
     * <?php
     * $I->performOn(\'.model\', ActionSequence::build()
     *     ->see(\'Warning\')
     *     ->see(\'Are you sure you want to delete this?\')
     *     ->click(\'Yes\')
     * );
     * ```
     *
     * Actions executed from array or ActionSequence will print debug output for actions, and adds an action name to
     * exception on failure.
     *
     * Whenever you need to define more actions a callback can be used. A WebDriver module is passed for argument:
     *
     * ```php
     * <?php
     * $I->performOn(\'.rememberMe\', function (WebDriver $I) {
     *      $I->see(\'Remember me next time\');
     *      $I->seeElement(\'#LoginForm_rememberMe\');
     *      $I->dontSee(\'Login\');
     * });
     * ```
     *
     * In 3rd argument you can set number a seconds to wait for element to appear
     *
     * @param $element
     * @param $actions
     * @param int $timeout
     * @see \\Codeception\\Module\\WebDriver::performOn()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'performOn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '745395f67600b6f1e0561f71e9cbaa39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Waits for element and runs a sequence of actions inside its context.
     * Actions can be defined with array, callback, or `Codeception\\Util\\ActionSequence` instance.
     *
     * Actions as array are recommended for simple to combine "waitForElement" with assertions;
     * `waitForElement($el)` and `see(\'text\', $el)` can be simplified to:
     *
     * ```php
     * <?php
     * $I->performOn($el, [\'see\' => \'text\']);
     * ```
     *
     * List of actions can be pragmatically build using `Codeception\\Util\\ActionSequence`:
     *
     * ```php
     * <?php
     * $I->performOn(\'.model\', ActionSequence::build()
     *     ->see(\'Warning\')
     *     ->see(\'Are you sure you want to delete this?\')
     *     ->click(\'Yes\')
     * );
     * ```
     *
     * Actions executed from array or ActionSequence will print debug output for actions, and adds an action name to
     * exception on failure.
     *
     * Whenever you need to define more actions a callback can be used. A WebDriver module is passed for argument:
     *
     * ```php
     * <?php
     * $I->performOn(\'.rememberMe\', function (WebDriver $I) {
     *      $I->see(\'Remember me next time\');
     *      $I->seeElement(\'#LoginForm_rememberMe\');
     *      $I->dontSee(\'Login\');
     * });
     * ```
     *
     * In 3rd argument you can set number a seconds to wait for element to appear
     *
     * @param $element
     * @param $actions
     * @param int $timeout
     * @see \\Codeception\\Module\\WebDriver::performOn()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToPerformOn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff2f3b1aca67c6dd670a75f17553785c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes performOn and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\WebDriver::performOn()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryPerformOn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d509f9a735f670a0e034507a11483b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @throws ModuleException
     *
     * @return mixed
     * @see \\Helper\\Acceptance::getUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99ed8fae4b919cb5e00f6e4194fa28dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @throws ModuleException
     *
     * @return mixed
     * @see \\Helper\\Acceptance::getUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToGetUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0c37cb35e1b07538418d746a833f82a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes getUrl and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::getUrl()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGetUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d5d172abd0159b21f7c65dfbca9d08f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @throws ModuleException
     *
     * @return mixed
     * @see \\Helper\\Acceptance::getUrlFromConfig()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getUrlFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb8d697a4d2b67169da8246b8db9d2e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @throws ModuleException
     *
     * @return mixed
     * @see \\Helper\\Acceptance::getUrlFromConfig()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToGetUrlFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e989154b69bac3ed75acd60fc068666' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes getUrlFromConfig and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::getUrlFromConfig()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGetUrlFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f598ccc7160bda327f29139e6bf09748' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @throws ModuleException
     *
     * @return mixed
     * @see \\Helper\\Acceptance::getBrFromConfig()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getBrFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4479c2e25d049b44ca6089897816ce77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @throws ModuleException
     *
     * @return mixed
     * @see \\Helper\\Acceptance::getBrFromConfig()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToGetBrFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ec4c7ce76a7599909a21806b448a1b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes getBrFromConfig and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::getBrFromConfig()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGetBrFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1eebb056a007c145286d45c175d7ab23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return array
     * @see \\Helper\\Acceptance::envParse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'envParse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '045e707b18353f588bafff5abea6c7e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @return array
     * @see \\Helper\\Acceptance::envParse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToEnvParse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '269fb0da1b82df68e4a3ab83c620d36c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes envParse and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::envParse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryEnvParse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cc1dc5f33922e640a2098f67f92d75c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $testTitle
     *
     * @throws NoSuchException
     * @see \\Helper\\Acceptance::envValidate()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'envValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbdf02ed9f5347c138fb83dd9ae54a7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $testTitle
     *
     * @throws NoSuchException
     * @see \\Helper\\Acceptance::envValidate()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToEnvValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59e423ec063b9b58f1d4125fbea240a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes envValidate and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::envValidate()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryEnvValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2190857e15aa7fd1979a6209fa9f1150' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Helper\\Acceptance::testNeedless()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'testNeedless',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aede7f839b72ddf5dcc56272fabf3b87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Helper\\Acceptance::testNeedless()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToTestNeedless',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56c9c6046e784049cf300a2d5156fc14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes testNeedless and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::testNeedless()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryTestNeedless',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bc7a0767891f098cd5eff8b4cfa2ce7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $testList
     *
     * @return mixed
     * @see \\Helper\\Acceptance::sortTestNames()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'sortTestNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a022e825c7b3c953d626bd2a0391ce7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $testList
     *
     * @return mixed
     * @see \\Helper\\Acceptance::sortTestNames()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSortTestNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b122517f03baa5c2ffd504ad343ad90f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes sortTestNames and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::sortTestNames()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySortTestNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ddf27405678b1bcab187c226b812d3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $items
     *
     * @throws ModuleException
     *
     * @return mixed
     * @see \\Helper\\Acceptance::findMultipleLinks()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'findMultipleLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42bdb525e3bfae157e72c245e3b14f2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $items
     *
     * @throws ModuleException
     *
     * @return mixed
     * @see \\Helper\\Acceptance::findMultipleLinks()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToFindMultipleLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abd6739dcae7c0e2c90d3a278ff33141' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes findMultipleLinks and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::findMultipleLinks()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryFindMultipleLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e32ca09a8fc6c91791849da4db24bf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @Description("try/catch чтобы подставить в if")
     *
     * @param $element
     *
     * @throws ModuleException
     *
     * @return bool
     * @see \\Helper\\Acceptance::seePageHasElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seePageHasElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f769da8438ea8afe307e5b5d5e539ad6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @Description("try/catch чтобы подставить в if")
     *
     * @param $element
     *
     * @throws ModuleException
     *
     * @return bool
     * @see \\Helper\\Acceptance::seePageHasElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeePageHasElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c601a48c977784a11b0748d6b4d5df66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seePageHasElement and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::seePageHasElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeePageHasElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f9f9de114d3fa9c76df835eae3d0061' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * @Description("try/catch чтобы подставить в if")
     *
     * @param $element
     *
     * @throws ModuleException
     *
     * @return bool
     * @see \\Helper\\Acceptance::seePageHasElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeePageHasElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '102530c771ffe74e82250983d4993e77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param AcceptanceTester $I
     * @param $testName
     *
     * @throws Exception
     *
     * @return array
     * @see \\Helper\\Acceptance::prepareTest()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'prepareTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c6fbef8bd604354ef95506168fa9c57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param AcceptanceTester $I
     * @param $testName
     *
     * @throws Exception
     *
     * @return array
     * @see \\Helper\\Acceptance::prepareTest()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToPrepareTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7386f5852339b44ac45a5c0c939d3065' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes prepareTest and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::prepareTest()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryPrepareTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c14f3a6b45164b3710b709419d7228f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $testName
     *
     * @throws ModuleConfigException
     * @throws ModuleException
     * @see \\Helper\\Acceptance::restartConfirm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'restartConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20658660784a447bd146fb144e9ddcd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $testName
     *
     * @throws ModuleConfigException
     * @throws ModuleException
     * @see \\Helper\\Acceptance::restartConfirm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToRestartConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ace03dab01668841ed0a9b72b743d7d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes restartConfirm and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::restartConfirm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryRestartConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0935e7529abec949ca3178c0f22bce8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $testName
     *
     * @throws ModuleConfigException
     * @throws ModuleException
     * @see \\Helper\\Acceptance::cookieConfirm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cookieConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '275c1204552e3b6ee38d6501d85e6f3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $testName
     *
     * @throws ModuleConfigException
     * @throws ModuleException
     * @see \\Helper\\Acceptance::cookieConfirm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToCookieConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '539199db7bef7253e594f153a71a3882' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes cookieConfirm and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::cookieConfirm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryCookieConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b73112dfde8fe31406790313ed2fd6a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $locator
     * @param $styleAttr
     * @param AcceptanceTester $I
     *
     * @throws Exception
     * @see \\Helper\\Acceptance::getValueFromStyle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getValueFromStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fbbcba1f6c77f77556f968c1c9135ad5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $locator
     * @param $styleAttr
     * @param AcceptanceTester $I
     *
     * @throws Exception
     * @see \\Helper\\Acceptance::getValueFromStyle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToGetValueFromStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79ed42a216ce00a369d601a3e9b1f9af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes getValueFromStyle and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::getValueFromStyle()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGetValueFromStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75ac938c103806d49b349cb2b176e058' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $testName
     * @param Login $login
     *
     * @throws Exception
     * @see \\Helper\\Acceptance::loginConfirm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'loginConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b30638865af397de8dc7105f1ee6b025' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $testName
     * @param Login $login
     *
     * @throws Exception
     * @see \\Helper\\Acceptance::loginConfirm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToLoginConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e0fdf5d6507e6e2136ea6ffe99e0bfd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes loginConfirm and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::loginConfirm()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryLoginConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd6c7c1f60e8e2b369db3280d4e10cd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @throws ModuleException
     *
     * @return mixed
     * @see \\Helper\\Acceptance::getUrlFromCurrentPage()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getUrlFromCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '716706b8a8bff86719f644190a050797' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @throws ModuleException
     *
     * @return mixed
     * @see \\Helper\\Acceptance::getUrlFromCurrentPage()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToGetUrlFromCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4629cc29881a1f75f1a87cd9ab856fd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes getUrlFromCurrentPage and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Helper\\Acceptance::getUrlFromCurrentPage()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGetUrlFromCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d320fe57ae79504e277f5e44de1a7a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Handles and checks exception called inside callback function.
     * Either exception class name or exception instance should be provided.
     *
     * ```php
     * <?php
     * $I->expectException(MyException::class, function() {
     *     $this->doSomethingBad();
     * });
     *
     * $I->expectException(new MyException(), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     * If you want to check message or exception code, you can pass them with exception instance:
     * ```php
     * <?php
     * // will check that exception MyException is thrown with "Don\'t do bad things" message
     * $I->expectException(new MyException("Don\'t do bad things"), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     *
     * @deprecated Use expectThrowable() instead
     * @param $exception string or \\Exception
     * @param $callback
     * @see \\Codeception\\Module\\Asserts::expectException()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'expectException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99bf43a577ff86da29c4df4ba7744171' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Handles and checks exception called inside callback function.
     * Either exception class name or exception instance should be provided.
     *
     * ```php
     * <?php
     * $I->expectException(MyException::class, function() {
     *     $this->doSomethingBad();
     * });
     *
     * $I->expectException(new MyException(), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     * If you want to check message or exception code, you can pass them with exception instance:
     * ```php
     * <?php
     * // will check that exception MyException is thrown with "Don\'t do bad things" message
     * $I->expectException(new MyException("Don\'t do bad things"), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     *
     * @deprecated Use expectThrowable() instead
     * @param $exception string or \\Exception
     * @param $callback
     * @see \\Codeception\\Module\\Asserts::expectException()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToExpectException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd31b991a10f10453041549084b7f10c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes expectException and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::expectException()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryExpectException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '758a6101cfcbcfc956f82540684d60e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Handles and checks throwables (Exceptions/Errors) called inside the callback function.
     * Either throwable class name or throwable instance should be provided.
     *
     * ```php
     * <?php
     * $I->expectThrowable(MyThrowable::class, function() {
     *     $this->doSomethingBad();
     * });
     *
     * $I->expectThrowable(new MyException(), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     * If you want to check message or throwable code, you can pass them with throwable instance:
     * ```php
     * <?php
     * // will check that throwable MyError is thrown with "Don\'t do bad things" message
     * $I->expectThrowable(new MyError("Don\'t do bad things"), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     *
     * @param $throwable string or \\Throwable
     * @param $callback
     * @see \\Codeception\\Module\\Asserts::expectThrowable()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'expectThrowable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '240f05beab59a976c534bbf5d3dc104c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Handles and checks throwables (Exceptions/Errors) called inside the callback function.
     * Either throwable class name or throwable instance should be provided.
     *
     * ```php
     * <?php
     * $I->expectThrowable(MyThrowable::class, function() {
     *     $this->doSomethingBad();
     * });
     *
     * $I->expectThrowable(new MyException(), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     * If you want to check message or throwable code, you can pass them with throwable instance:
     * ```php
     * <?php
     * // will check that throwable MyError is thrown with "Don\'t do bad things" message
     * $I->expectThrowable(new MyError("Don\'t do bad things"), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     *
     * @param $throwable string or \\Throwable
     * @param $callback
     * @see \\Codeception\\Module\\Asserts::expectThrowable()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToExpectThrowable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fa135ce446ac99e2337265e1f0a678e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes expectThrowable and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::expectThrowable()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryExpectThrowable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0ba66855e51c34cc390b9961c21058c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are equal.
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float  $delta
     * @see \\Codeception\\Module\\Asserts::assertEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35397b8ff48d136078ee522a2718169e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that two variables are equal.
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float  $delta
     * @see \\Codeception\\Module\\Asserts::assertEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcd4ad52c4e2b9a51dcf53236ea5039d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a88007bea7a3ae694d62f05783856793' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are not equal
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float  $delta
     * @see \\Codeception\\Module\\Asserts::assertNotEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de3a7837f9fb4d63963824e7e716d939' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that two variables are not equal
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float  $delta
     * @see \\Codeception\\Module\\Asserts::assertNotEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71584ac2721b27c2d82ccdeb739d1498' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8952eecb45ffcd11a4c0c620b86dc6e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertSame()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c48e4998f1a3fbbe006c0b5c102f4bb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that two variables are same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertSame()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd48ba3bcd33e2128e0ad690bf18d036f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertSame and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertSame()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dac69df28f4e6914932dbbab3840592a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are not same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotSame()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2203aebbacd0048ff4dacc9c616e0da4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that two variables are not same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotSame()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5fbea35022e9c502e8fbd0d0335d8fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotSame and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotSame()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac806e2ed4221caad05e5d2e8755e303' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is greater than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertGreaterThan()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertGreaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21a43832ce0cdd1358f59dedd96ae294' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that actual is greater than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertGreaterThan()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertGreaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c03dbfa934ef21a23bdb951371593dfd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertGreaterThan and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertGreaterThan()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertGreaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '479376c478a77265c1420faa5bbf120e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is greater or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertGreaterThanOrEqual()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertGreaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd550378fc538de9d70e5df49c2c4134' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that actual is greater or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertGreaterThanOrEqual()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertGreaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2e6bbe0544dc7458ab9b779d7be0314' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertGreaterThanOrEqual and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertGreaterThanOrEqual()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertGreaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4beee00b9f5edd70c34c7a0f6746c7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is less than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertLessThan()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertLessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d1b0304d9042fb1a38fdc3932a72185' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that actual is less than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertLessThan()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertLessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23ce98a05e3642703ca9dd76bc65c623' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertLessThan and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertLessThan()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertLessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24b6d8c213d7298994a3974959c11226' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is less or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertLessThanOrEqual()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertLessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb0e330bc3c13c0400283d744738f73e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that actual is less or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertLessThanOrEqual()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertLessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '206077073b402958c9ec436ea0bcc79d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertLessThanOrEqual and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertLessThanOrEqual()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertLessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3fcbb4e5db6d7b348d76aabd011eeec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that haystack contains needle
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f2c7f8b9e9661c38e3472da5aea6929' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that haystack contains needle
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'babe5afa53ce18e0863d0b4aeef03557' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertContains and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dedef76686b538567189cf393c2dccba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that haystack doesn\'t contain needle.
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bbbe786af8924d1640d3795f528b5cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that haystack doesn\'t contain needle.
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d51d8b1d4095a51b9fea18b8a0d1371' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotContains and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b41ae20703bb2e690098832dc84a7a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that string match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertRegExp()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17967ea3c98108af9356fda60b805649' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that string match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertRegExp()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04aa5b6bc21d7dbaac927038f5d64c68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertRegExp and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertRegExp()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abca1c2ccfafc71aef8e1414f48b605d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that string not match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotRegExp()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b85a850fea1ebe8a53f631a19c56f8c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that string not match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotRegExp()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c229aa8162b6d027b80ffe7fed971b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotRegExp and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotRegExp()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62679af329489177e6db63380512d9f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that a string starts with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertStringStartsWith()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertStringStartsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a96d279d162c19ce93b58018cf98c472' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that a string starts with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertStringStartsWith()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertStringStartsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e965ed7bddc955634e217cfbc9f36e4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertStringStartsWith and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertStringStartsWith()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertStringStartsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bde9449eedd443fdeeb5bcacce4cf2de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that a string doesn\'t start with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertStringStartsNotWith()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertStringStartsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '278585751971a921221f63e65abfa87f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that a string doesn\'t start with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertStringStartsNotWith()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertStringStartsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9672c4209d90ac7afe04859da37f95c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertStringStartsNotWith and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertStringStartsNotWith()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertStringStartsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '349a183b462b9a99c26822f7e62d9a18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is empty.
     *
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertEmpty()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4621f9573d22bb2c26e1798040dd263' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that variable is empty.
     *
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertEmpty()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c07755ea7d387f64ba95cbc45a82c8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertEmpty and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertEmpty()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30f3a4f197ed26a10f2793af68893a41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is not empty.
     *
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotEmpty()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b25e6cf2fe2bc3c1714e697701047c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that variable is not empty.
     *
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotEmpty()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38421b897fe2ef3b7ab96182ed74ce64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotEmpty and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEmpty()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e217e7bdb64576c0b605752062c87ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is NULL
     *
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNull()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42909791cfdba8804879fa1daf892344' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that variable is NULL
     *
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNull()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd93b08b40d83cce5c5aa90ed7c47760' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNull and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNull()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6e25fd4f5d779241910c025be4d057f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is not NULL
     *
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotNull()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b43d19382b358bf41a3fb8a663cde4c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that variable is not NULL
     *
     * @param        $actual
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotNull()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a46feb6e2e1b9f0accfb1ae69f8cffe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotNull and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotNull()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6dbff0c2205d50c5892160a27a892ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that condition is positive.
     *
     * @param        $condition
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertTrue()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c54dceed5b2204c43b081f426f21c31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that condition is positive.
     *
     * @param        $condition
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertTrue()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab41f27965c72dd67e83e7149cd8f67b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertTrue and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertTrue()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b127028c53299f42be12b0a3c4d837c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the condition is NOT true (everything but true)
     *
     * @param        $condition
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotTrue()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1bffdbd3a40c6df9e62b174c9c4b044' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the condition is NOT true (everything but true)
     *
     * @param        $condition
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotTrue()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1cbaabcd3cc9b2a001f2c359983d3ada' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotTrue and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotTrue()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e16acadb65e3a0ce1fc106a909890731' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that condition is negative.
     *
     * @param        $condition
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertFalse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e7cdb7b59f48b23c64de1d09f6b0537' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that condition is negative.
     *
     * @param        $condition
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertFalse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4fd6c58ef51c5c863aa69127d895d4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertFalse and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertFalse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2805ef185a56d2a37793a71a4d203bb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the condition is NOT false (everything but false)
     *
     * @param        $condition
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotFalse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '941fa9176fe47bea51d740537f9d1414' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the condition is NOT false (everything but false)
     *
     * @param        $condition
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertNotFalse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31ea95749494a99f5e4937d2c845844e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotFalse and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotFalse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb19a0026c6a84500552dbb3393b43b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file exists
     *
     * @param string $filename
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertFileExists()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertFileExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a92e4026c26ea44e55b705327064276c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks if file exists
     *
     * @param string $filename
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertFileExists()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertFileExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9a5dbac659e5aebc6e1ed8c9a554bd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertFileExists and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertFileExists()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertFileExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '488b45c46667db1ee56dc0c4d811237b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file doesn\'t exist
     *
     * @param string $filename
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertFileNotExists()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertFileNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84a5dc6f7571b0996ab2f57f807c67a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks if file doesn\'t exist
     *
     * @param string $filename
     * @param string $message
     * @see \\Codeception\\Module\\Asserts::assertFileNotExists()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertFileNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db94e8de89104699463c1631f5acd18a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertFileNotExists and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertFileNotExists()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertFileNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7c0383daed131ff936d5198b2616fc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expected
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertGreaterOrEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertGreaterOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '193eb9c9c5ef7dcb48b029efdb8b3597' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $expected
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertGreaterOrEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertGreaterOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9804c642f39449ef58203a5de536ee7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertGreaterOrEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertGreaterOrEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertGreaterOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8ea1d7845a253cb7d43d6c93bdf04e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expected
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertLessOrEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertLessOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9d77bb5ab7252db2b83bed59b23afa8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $expected
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertLessOrEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertLessOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb4fa212a082e370db84637c39f7fb1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertLessOrEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertLessOrEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertLessOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '841665bb528126763fff55f4ab77455b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertIsEmpty()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f01c8cd72bd7edf8280258cb9aa65ab8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertIsEmpty()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c35ddfb6a15e78b6786b6fceb7f976a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsEmpty and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsEmpty()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'efa1a8cb7c9f77192817c8620f096ce4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $key
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertArrayHasKey()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertArrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29c8c1a57d01783f784d49a7b38ad7ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $key
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertArrayHasKey()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertArrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edd6f80053ff661d80b6b49a57b219e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertArrayHasKey and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertArrayHasKey()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertArrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3684ee2d94355f1c11704bbfc99649b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $key
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertArrayNotHasKey()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertArrayNotHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '576c9332838b2d2191eb2abc778b639d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $key
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertArrayNotHasKey()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertArrayNotHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08142ad5d9f5a60e779e7096b36b786d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertArrayNotHasKey and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertArrayNotHasKey()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertArrayNotHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7edaeab4cd8ea98b4b2edc144b06b78a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expectedCount
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertCount()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70cab6613eac7a7993a8d63c34f29c11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $expectedCount
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertCount()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ebbc3aa2e4341dbcad87f265dbe12df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertCount and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertCount()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff775de33ee9eaf4ed28ab43e922f390' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $class
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertInstanceOf()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1652ee57426ca8f11a411fa9cabff8e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $class
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertInstanceOf()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9128bc5148f16c6147e2649d1aaa3207' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertInstanceOf and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertInstanceOf()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f91256236d05c06a1cb9d6b310e3bc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $class
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertNotInstanceOf()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd61aeddaf03f4d8a6749710495e337a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $class
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertNotInstanceOf()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a3a08f581e91f824567e94d30c45f16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotInstanceOf and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotInstanceOf()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e9a950b2ef885f3cbcbcaddc0544a22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $type
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertInternalType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3308507576ee12b40b610599e7abfd0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * @param $type
     * @param $actual
     * @param $description
     * @see \\Codeception\\Module\\Asserts::assertInternalType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4055ba95f2a53c7c68d49bb39d789327' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertInternalType and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertInternalType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e401989202b98ca52ae289fcf8218b23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fails the test with message.
     *
     * @param $message
     * @see \\Codeception\\Module\\Asserts::fail()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'fail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5221c92d1dc0bca8c904530cb4a265f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Fails the test with message.
     *
     * @param $message
     * @see \\Codeception\\Module\\Asserts::fail()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToFail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30230339ceefde99e52ccd3d98a24183' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes fail and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::fail()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryFail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '769884c79292e5e2105ec4caae202c56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertStringContainsString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertStringContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3081b4aeee6c2528605c0cdfcfb72f2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertStringContainsString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertStringContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08f67b1fc28b90ae2c425fcdb7bc9ccd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertStringContainsString and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertStringContainsString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertStringContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f88ab5c866afdd23cfd3432c8f4fc9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertStringNotContainsString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertStringNotContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c48c630e44a74e95bc2a88ffa8edc11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertStringNotContainsString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertStringNotContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1142d9c372dc00ab14ef03a6432eec5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertStringNotContainsString and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertStringNotContainsString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertStringNotContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a8600cd75b2b59b8a1fe5471bb3d956' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertStringContainsStringIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertStringContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f02d0df510c17e7c9827437cd0c2e5fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertStringContainsStringIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertStringContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c7aea70316f5f4be9b2715af073b0af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertStringContainsStringIgnoringCase and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertStringContainsStringIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertStringContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ab09cf0eba8c93526b344403ff03061' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertStringNotContainsStringIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertStringNotContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17f05f23117e952dcf37a3ecd531cf41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertStringNotContainsStringIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertStringNotContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e75000bb8f1e4fce65c8ac8574d35557' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertStringNotContainsStringIgnoringCase and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertStringNotContainsStringIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertStringNotContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a946f4cb3eccd07461ff1f84366eb76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsArray()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc1ef7e4954fcecf0e70e95d150a1aad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsArray()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d6086fe34940aba74071671e3ad3939' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsArray and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsArray()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c39f5ff9e85b1f08949f860106bf5ac0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsBool()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aad50ae95d4429a42d88b15c5637c055' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsBool()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '852ef1221c5381d1a41c9b293a07838e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsBool and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsBool()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de74e95529b270a7a561d6669c2f4848' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsFloat()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1edb7262331dc990889636cc8775151' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsFloat()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5cedfb6f6771a5e4e57d83fbb99c9792' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsFloat and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsFloat()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7bf22d46788b27e86691f5ec762ffe3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsInt()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22f2bcbb8cf1a8ec947c7a76e8fb0e23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsInt()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5be0e083fde45c90356ffffe0225ac03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsInt and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsInt()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c680f96455f51dc12b9261f1151c1cd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNumeric()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6151b6ebccb13b0e69c07ad901791c5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNumeric()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f35b4144cb8e29902519e48b22dfaf9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNumeric and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNumeric()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae5e8b9ef6e8fae32c78444d7fe0562f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsObject()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9240c831d796153784d8d61d778ce3d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsObject()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a96e50539c32e99c7c5cde6b5e830384' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsObject and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsObject()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d29255acbefbe7948d338a3eda43aee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsResource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb083502e18ee5dba8875aeebcf692ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsResource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0da80378c810171fd7f2f7be63dfa117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsResource and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsResource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52af0cd2993d4010f9dce303afc3a8d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13774363ba4848e15e00e5bf0076e880' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f68a8805eb65f3e20379adaf1dc0ae7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsString and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d8bc71518941c016ba70ef21c5c7f76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsScalar()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e95f50f084cd1ff4dae4a62288d10bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsScalar()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b4c51d83c51f2c8864f9c8ebf5a39f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsScalar and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsScalar()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60a4f94a0b95a349e519a0ef80fe916e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsCallable()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34d8ba54d213b749a3923015a1adb290' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsCallable()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8497162960f6454915c69d79ef3a91e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsCallable and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsCallable()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '392f960240d0940500871d180c9a5455' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotArray()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNotArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '671b7c68aac4e77fa9620e5ac725f3bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotArray()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNotArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6fe03c4a8efce109636dcd50bc49632' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNotArray and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotArray()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNotArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '278929040f4b9e83a06a2d8cd97d9c3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotBool()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNotBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8fef352f771e6714ff4d6ccfb7b8f6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotBool()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNotBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'facc2abba92f0f206b6812505794386c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNotBool and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotBool()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNotBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da858da2dfb71cbe4df51aa9e168b49c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotFloat()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNotFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb70df7b24d11086faf9413f9831bd58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotFloat()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNotFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '694eb5b1a904d52911cf27652055a0b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNotFloat and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotFloat()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNotFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a80a9ad41384e8065b81883a2fe1dd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotInt()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNotInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f77617531c7cae419e8ffea4c3b1d93e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotInt()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNotInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe73f441ee66225762ba4a9d59f626c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNotInt and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotInt()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNotInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e72c39c4ca412f07917c54df9637266' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotNumeric()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNotNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d964c940b72bdc365361ded2df1985e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotNumeric()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNotNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35651355e4499cb57a4fb8e4b37748b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNotNumeric and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotNumeric()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNotNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c41c0f149235089085761925e9b4c56a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotObject()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNotObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f080da8767517e3aafd7254294e77fe2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotObject()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNotObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bec368ff57579da1ea066ee335af9b4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNotObject and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotObject()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNotObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80285cdb4124aa970ef59d8be7e8f6d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotResource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNotResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '666cb0cb735b8c77cb2bc98f6ac254f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotResource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNotResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a240d0183c38015016a70511b9f505b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNotResource and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotResource()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNotResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d6e966a63f8f09276c2f5f54ce1a5f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNotString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '872977156c2220cf622db3307f24068d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNotString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc74d9ee7979b3a0dc492778493b68b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNotString and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotString()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNotString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aeef72cd86ccfe6b02dccf3551774a49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotScalar()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNotScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a9db5b669e10072b32c47f3fb2bcbb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotScalar()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNotScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95bbe53ca741f52607acf6356321d2b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNotScalar and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotScalar()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNotScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fda22e9eaa1f0b685e31a381d551166a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotCallable()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertIsNotCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '350ecd23cf5a51e4eda7a4ea1f2e714b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotCallable()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertIsNotCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea465711956f6f7614bfb6ab66e50d60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertIsNotCallable and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertIsNotCallable()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertIsNotCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bcae0ea6b40b2dd078373468551b5656' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertEqualsCanonicalizing()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d5d3ae22ba03f4dcddee229640d4296' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertEqualsCanonicalizing()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1f84fe6efeaa61cd7d0a1e72f9bd2a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertEqualsCanonicalizing and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertEqualsCanonicalizing()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39122cfa4b7073fb18702d53ae12b9d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEqualsCanonicalizing()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ec2f094ba20c93dd6b0f76b58c376cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEqualsCanonicalizing()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eec976414ce2b3e2d5b20ba6b5ac0af8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotEqualsCanonicalizing and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEqualsCanonicalizing()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89ca69edc7ffba22a793698c0c4d7743' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertEqualsIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afed8fa76183bb511ce19cce5488e094' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertEqualsIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f5a2ed407b06eaec6349d3f14c5d3d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertEqualsIgnoringCase and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertEqualsIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33e076638110f96143c7b447aa4dbc31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEqualsIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05c6d7e4ba9f582213f3dd5b66ba71ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEqualsIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27685bfe737eb957fa6f0a5603975392' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotEqualsIgnoringCase and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEqualsIgnoringCase()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f75e3834e9eebf8b2ae63722cb5ab919' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertEqualsWithDelta()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2701f7676150aa14f0d7414b6810e58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertEqualsWithDelta()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4372d555a4a2e63b5fcad3f555c530d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertEqualsWithDelta and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertEqualsWithDelta()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07e00f86bf2f21f57a775bd06e0b1941' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEqualsWithDelta()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'assertNotEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd3ee372b2494519db6c49032451004a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEqualsWithDelta()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToAssertNotEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13d63134c83bb4200cff582ce220dce2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes assertNotEqualsWithDelta and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\Asserts::assertNotEqualsWithDelta()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryAssertNotEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f82b1c6a41403aeade1ee78619cd5056' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sets HTTP header valid for all next requests. Use `deleteHeader` to unset it
     *
     * ```php
     * <?php
     * $I->haveHttpHeader(\'Content-Type\', \'application/json\');
     * // all next requests will contain this header
     * ?>
     * ```
     *
     * @param $name
     * @param $value
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::haveHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'haveHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94b25be083d7bc90b1286401ce37171d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Deletes the header with the passed name.  Subsequent requests
     * will not have the deleted header in its request.
     *
     * Example:
     * ```php
     * <?php
     * $I->haveHttpHeader(\'X-Requested-With\', \'Codeception\');
     * $I->sendGET(\'test-headers.php\');
     * // ...
     * $I->deleteHeader(\'X-Requested-With\');
     * $I->sendPOST(\'some-other-page.php\');
     * ?>
     * ```
     *
     * @param string $name the name of the header to delete.
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::deleteHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'deleteHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd04d0207981d9f9823e8e9fbe909ce6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Deletes the header with the passed name.  Subsequent requests
     * will not have the deleted header in its request.
     *
     * Example:
     * ```php
     * <?php
     * $I->haveHttpHeader(\'X-Requested-With\', \'Codeception\');
     * $I->sendGET(\'test-headers.php\');
     * // ...
     * $I->deleteHeader(\'X-Requested-With\');
     * $I->sendPOST(\'some-other-page.php\');
     * ?>
     * ```
     *
     * @param string $name the name of the header to delete.
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::deleteHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDeleteHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2510aee92982e0da8dc033acfb0e67d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes deleteHeader and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::deleteHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDeleteHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1757e8e73c3ef6b2b5a28b19ead3ea7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks over the given HTTP header and (optionally)
     * its value, asserting that are there
     *
     * @param $name
     * @param $value
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4cfc937947cfef976b9e2533a3dc3aa0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks over the given HTTP header and (optionally)
     * its value, asserting that are there
     *
     * @param $name
     * @param $value
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '650fdbc20f49e51cbbc217c8aee191cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeHttpHeader and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '377a0f3cb4c2caf1b6c6eea51ee95101' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks over the given HTTP header and (optionally)
     * its value, asserting that are there
     *
     * @param $name
     * @param $value
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57ddd04c3061af44c0ccc02d7533046b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks over the given HTTP header and (optionally)
     * its value, asserting that are not there
     *
     * @param $name
     * @param $value
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff5c6cadec0d4e997f2b35590b4514e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks over the given HTTP header and (optionally)
     * its value, asserting that are not there
     *
     * @param $name
     * @param $value
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15376140e66fcde957355ed1e7b81993' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeHttpHeader and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6cb31e1f3077b11eb9fc06ff7fedf218' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks over the given HTTP header and (optionally)
     * its value, asserting that are not there
     *
     * @param $name
     * @param $value
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a427bddf1809caa2cdfc20f2dc5dfd4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that http response header is received only once.
     * HTTP RFC2616 allows multiple response headers with the same name.
     * You can check that you didn\'t accidentally sent the same header twice.
     *
     * ``` php
     * <?php
     * $I->seeHttpHeaderOnce(\'Cache-Control\');
     * ?>>
     * ```
     *
     * @param $name
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeHttpHeaderOnce()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeHttpHeaderOnce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '823f69cd97ac1fc262ce313df26b9fa4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that http response header is received only once.
     * HTTP RFC2616 allows multiple response headers with the same name.
     * You can check that you didn\'t accidentally sent the same header twice.
     *
     * ``` php
     * <?php
     * $I->seeHttpHeaderOnce(\'Cache-Control\');
     * ?>>
     * ```
     *
     * @param $name
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeHttpHeaderOnce()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeHttpHeaderOnce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee75147e886c46585f96fe99500b7fec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeHttpHeaderOnce and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeHttpHeaderOnce()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeHttpHeaderOnce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1a486c388eca6302cff25929084a6a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that http response header is received only once.
     * HTTP RFC2616 allows multiple response headers with the same name.
     * You can check that you didn\'t accidentally sent the same header twice.
     *
     * ``` php
     * <?php
     * $I->seeHttpHeaderOnce(\'Cache-Control\');
     * ?>>
     * ```
     *
     * @param $name
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeHttpHeaderOnce()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeHttpHeaderOnce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7053eaa2422324dc8a0b494450ae3d34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Returns the value of the specified header name
     *
     * @param $name
     * @param Boolean $first Whether to return the first value or all header values
     *
     * @return string|array The first header value if $first is true, an array of values otherwise
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::grabHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '004b6f017d33b1dc82105102a56ced13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabHttpHeader and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::grabHttpHeader()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf1e6924145349807710f439fb9e10d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Adds HTTP authentication via username/password.
     *
     * @param $username
     * @param $password
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::amHttpAuthenticated()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'amHttpAuthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3acc490cda3abd0e38ea541e65381d12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Adds Digest authentication via username/password.
     *
     * @param $username
     * @param $password
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::amDigestAuthenticated()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'amDigestAuthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e05d98a4d0b1172c65908ba87d13ace7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Adds Bearer authentication via access token.
     *
     * @param $accessToken
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::amBearerAuthenticated()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'amBearerAuthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac24b99f9a4fb3484c94220011887dd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Adds NTLM authentication via username/password.
     * Requires client to be Guzzle >=6.3.0
     * Out of scope for functional modules.
     *
     * Example:
     * ```php
     * <?php
     * $I->amNTLMAuthenticated(\'jon_snow\', \'targaryen\');
     * ?>
     * ```
     *
     * @param $username
     * @param $password
     * @throws ModuleException
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::amNTLMAuthenticated()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'amNTLMAuthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a8948ee01a18f6eff51398d5b6907ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Allows to send REST request using AWS Authorization
     *
     * Only works with PhpBrowser
     * Example Config:
     * ```yml
     * modules:
     *      enabled:
     *          - REST:
     *              aws:
     *                  key: accessKey
     *                  secret: accessSecret
     *                  service: awsService
     *                  region: awsRegion
     * ```
     * Code:
     * ```php
     * <?php
     * $I->amAWSAuthenticated();
     * ?>
     * ```
     * @param array $additionalAWSConfig
     * @throws ModuleException
     * @see \\Codeception\\Module\\REST::amAWSAuthenticated()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'amAWSAuthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31073c98c1af056b920b4c4c9b21ff92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sends a POST request to given uri. Parameters and files can be provided separately.
     *
     * Example:
     * ```php
     * <?php
     * //simple POST call
     * $I->sendPOST(\'/message\', [\'subject\' => \'Read this!\', \'to\' => \'johndoe@example.com\']);
     * //simple upload method
     * $I->sendPOST(\'/message/24\', [\'inline\' => 0], [\'attachmentFile\' => codecept_data_dir(\'sample_file.pdf\')]);
     * //uploading a file with a custom name and mime-type. This is also useful to simulate upload errors.
     * $I->sendPOST(\'/message/24\', [\'inline\' => 0], [
     *     \'attachmentFile\' => [
     *          \'name\' => \'document.pdf\',
     *          \'type\' => \'application/pdf\',
     *          \'error\' => UPLOAD_ERR_OK,
     *          \'size\' => filesize(codecept_data_dir(\'sample_file.pdf\')),
     *          \'tmp_name\' => codecept_data_dir(\'sample_file.pdf\')
     *     ]
     * ]);
     * ```
     *
     * @param $url
     * @param array|\\JsonSerializable $params
     * @param array $files A list of filenames or "mocks" of $_FILES (each entry being an array with the following
     *                     keys: name, type, error, size, tmp_name (pointing to the real file path). Each key works
     *                     as the "name" attribute of a file input field.
     *
     * @see http://php.net/manual/en/features.file-upload.post-method.php
     * @see codecept_data_dir()
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendPOST()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'sendPOST',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '566058c1f7d818d9b21e4d377967c0ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Sends a POST request to given uri. Parameters and files can be provided separately.
     *
     * Example:
     * ```php
     * <?php
     * //simple POST call
     * $I->sendPOST(\'/message\', [\'subject\' => \'Read this!\', \'to\' => \'johndoe@example.com\']);
     * //simple upload method
     * $I->sendPOST(\'/message/24\', [\'inline\' => 0], [\'attachmentFile\' => codecept_data_dir(\'sample_file.pdf\')]);
     * //uploading a file with a custom name and mime-type. This is also useful to simulate upload errors.
     * $I->sendPOST(\'/message/24\', [\'inline\' => 0], [
     *     \'attachmentFile\' => [
     *          \'name\' => \'document.pdf\',
     *          \'type\' => \'application/pdf\',
     *          \'error\' => UPLOAD_ERR_OK,
     *          \'size\' => filesize(codecept_data_dir(\'sample_file.pdf\')),
     *          \'tmp_name\' => codecept_data_dir(\'sample_file.pdf\')
     *     ]
     * ]);
     * ```
     *
     * @param $url
     * @param array|\\JsonSerializable $params
     * @param array $files A list of filenames or "mocks" of $_FILES (each entry being an array with the following
     *                     keys: name, type, error, size, tmp_name (pointing to the real file path). Each key works
     *                     as the "name" attribute of a file input field.
     *
     * @see http://php.net/manual/en/features.file-upload.post-method.php
     * @see codecept_data_dir()
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendPOST()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSendPOST',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69027c097a5df0364b072cea6117ab81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes sendPOST and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::sendPOST()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySendPOST',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a5957d9386471661ed4d4688a4ed0dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sends a HEAD request to given uri.
     *
     * @param $url
     * @param array $params
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendHEAD()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'sendHEAD',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '483af48a4876e9836a554e9bac330e49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Sends a HEAD request to given uri.
     *
     * @param $url
     * @param array $params
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendHEAD()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSendHEAD',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5994da74097ca6f0e73bea582b9ae766' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes sendHEAD and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::sendHEAD()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySendHEAD',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fadf8bf5419a911a4833c6164c466f9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sends an OPTIONS request to given uri.
     *
     * @param $url
     * @param array $params
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendOPTIONS()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'sendOPTIONS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b83adb92fd01af0a58f358c7fdf5c88a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Sends an OPTIONS request to given uri.
     *
     * @param $url
     * @param array $params
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendOPTIONS()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSendOPTIONS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2716e69c9317144b20c6577a5580efd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes sendOPTIONS and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::sendOPTIONS()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySendOPTIONS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97da3510a66fc08db0abe0a0184e36eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sends a GET request to given uri.
     *
     * @param $url
     * @param array $params
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendGET()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'sendGET',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '390b5eebfd8d74dea58e79f07be85b70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Sends a GET request to given uri.
     *
     * @param $url
     * @param array $params
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendGET()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSendGET',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb1e2e73f373b7099702e22e16b809a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes sendGET and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::sendGET()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySendGET',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00401dd91d3e2d7fc21373654642c8d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sends PUT request to given uri.
     *
     * @param $url
     * @param array $params
     * @param array $files
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendPUT()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'sendPUT',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b956cec53ea2eb66a98f4688f97bd31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Sends PUT request to given uri.
     *
     * @param $url
     * @param array $params
     * @param array $files
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendPUT()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSendPUT',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9db3a97cace252ddd80b4e99ba93417d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes sendPUT and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::sendPUT()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySendPUT',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '069e91d1b4d20ff525b59899d1303e1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sends PATCH request to given uri.
     *
     * @param       $url
     * @param array $params
     * @param array $files
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendPATCH()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'sendPATCH',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '092da903933ee1e5007aa298dd2d45ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Sends PATCH request to given uri.
     *
     * @param       $url
     * @param array $params
     * @param array $files
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendPATCH()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSendPATCH',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34f46006da4666834e19f6f16d6a4682' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes sendPATCH and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::sendPATCH()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySendPATCH',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '927b28a5e5c409a4917bc9f3fb028bdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sends DELETE request to given uri.
     *
     * @param $url
     * @param array $params
     * @param array $files
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendDELETE()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'sendDELETE',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b715d8035db40ae1c4512397daf701ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Sends DELETE request to given uri.
     *
     * @param $url
     * @param array $params
     * @param array $files
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendDELETE()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSendDELETE',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b13317a1a2f231b7c83c5f106f91ab63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes sendDELETE and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::sendDELETE()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySendDELETE',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '074571f54cfb4df3ae85bb1bed366a6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sends LINK request to given uri.
     *
     * @param       $url
     * @param array $linkEntries (entry is array with keys "uri" and "link-param")
     *
     * @link http://tools.ietf.org/html/rfc2068#section-19.6.2.4
     *
     * @author samva.ua@gmail.com
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendLINK()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'sendLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6a3ac77e02e89b32cad747c404f70cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Sends LINK request to given uri.
     *
     * @param       $url
     * @param array $linkEntries (entry is array with keys "uri" and "link-param")
     *
     * @link http://tools.ietf.org/html/rfc2068#section-19.6.2.4
     *
     * @author samva.ua@gmail.com
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendLINK()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSendLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f83fad458f80ecdd449d3ed9a47e7c19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes sendLINK and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::sendLINK()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySendLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '483727eb5bf57838ddaa99f94bef2c7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sends UNLINK request to given uri.
     *
     * @param       $url
     * @param array $linkEntries (entry is array with keys "uri" and "link-param")
     * @link http://tools.ietf.org/html/rfc2068#section-19.6.2.4
     * @author samva.ua@gmail.com
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendUNLINK()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'sendUNLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8beb02ea4d91d633e3f19ec19188bb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Sends UNLINK request to given uri.
     *
     * @param       $url
     * @param array $linkEntries (entry is array with keys "uri" and "link-param")
     * @link http://tools.ietf.org/html/rfc2068#section-19.6.2.4
     * @author samva.ua@gmail.com
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::sendUNLINK()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSendUNLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a952c9b350b814c5c1ccf1ef9cc3b27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes sendUNLINK and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::sendUNLINK()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySendUNLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d0aca4ded02e91c95480b32c4f96eab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks whether last response was valid JSON.
     * This is done with json_last_error function.
     *
     * @part json
     * @see \\Codeception\\Module\\REST::seeResponseIsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseIsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '201fea52a48716442a591a1c6927064a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks whether last response was valid JSON.
     * This is done with json_last_error function.
     *
     * @part json
     * @see \\Codeception\\Module\\REST::seeResponseIsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseIsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e65ac8a517fb20697f023bbaec71694a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseIsJson and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseIsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseIsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '328240fd0addd831b956d6b0871f4e90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks whether last response was valid JSON.
     * This is done with json_last_error function.
     *
     * @part json
     * @see \\Codeception\\Module\\REST::seeResponseIsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseIsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '617a6b686090612eb76058b6617a6ab2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks whether the last response contains text.
     *
     * @param $text
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6caff9d1eab65b3f510ee60475eea568' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks whether the last response contains text.
     *
     * @param $text
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3298f82fcb84a2453aa8699521285ad6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseContains and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '656c4582f102b55d114e809cfb667aee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks whether the last response contains text.
     *
     * @param $text
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46236d4b94712333a945456325ab0614' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks whether last response do not contain text.
     *
     * @param $text
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeResponseContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43ddd1dde89b20d1826d40f71843d25a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks whether last response do not contain text.
     *
     * @param $text
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeResponseContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c680aa6dd45515a25a97a7e52c85c92b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeResponseContains and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeResponseContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95bc3f6aea099a5e989574de98f11406' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks whether last response do not contain text.
     *
     * @param $text
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeResponseContains()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a3073ed7381a1d295895181b93a251a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks whether the last JSON response contains provided array.
     * The response is converted to array with json_decode($response, true)
     * Thus, JSON is represented by associative array.
     * This method matches that response array contains provided array.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * // response: {name: john, email: john@gmail.com}
     * $I->seeResponseContainsJson(array(\'name\' => \'john\'));
     *
     * // response {user: john, profile: { email: john@gmail.com }}
     * $I->seeResponseContainsJson(array(\'email\' => \'john@gmail.com\'));
     *
     * ?>
     * ```
     *
     * This method recursively checks if one array can be found inside of another.
     *
     * @param array $json
     * @part json
     * @see \\Codeception\\Module\\REST::seeResponseContainsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c47aac14aded238df5dee1fac51bcb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks whether the last JSON response contains provided array.
     * The response is converted to array with json_decode($response, true)
     * Thus, JSON is represented by associative array.
     * This method matches that response array contains provided array.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * // response: {name: john, email: john@gmail.com}
     * $I->seeResponseContainsJson(array(\'name\' => \'john\'));
     *
     * // response {user: john, profile: { email: john@gmail.com }}
     * $I->seeResponseContainsJson(array(\'email\' => \'john@gmail.com\'));
     *
     * ?>
     * ```
     *
     * This method recursively checks if one array can be found inside of another.
     *
     * @param array $json
     * @part json
     * @see \\Codeception\\Module\\REST::seeResponseContainsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8aa47b1686bddde55676165aabd97222' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseContainsJson and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseContainsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93f9e4fd8d741d635a9bdfc20e896fa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks whether the last JSON response contains provided array.
     * The response is converted to array with json_decode($response, true)
     * Thus, JSON is represented by associative array.
     * This method matches that response array contains provided array.
     *
     * Examples:
     *
     * ``` php
     * <?php
     * // response: {name: john, email: john@gmail.com}
     * $I->seeResponseContainsJson(array(\'name\' => \'john\'));
     *
     * // response {user: john, profile: { email: john@gmail.com }}
     * $I->seeResponseContainsJson(array(\'email\' => \'john@gmail.com\'));
     *
     * ?>
     * ```
     *
     * This method recursively checks if one array can be found inside of another.
     *
     * @param array $json
     * @part json
     * @see \\Codeception\\Module\\REST::seeResponseContainsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a35a5dfdb5629db755ca39aa6e344ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Returns current response so that it can be used in next scenario steps.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $user_id = $I->grabResponse();
     * $I->sendPUT(\'/user\', array(\'id\' => $user_id, \'name\' => \'davert\'));
     * ?>
     * ```
     *
     * @return string
     * @part json
     * @part xml
     * @version 1.1
     * @see \\Codeception\\Module\\REST::grabResponse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '285c404fd77a06a9282ec76b08db32a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabResponse and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::grabResponse()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53330ec4b5910dc29c1709eb6b570b71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Returns data from the current JSON response using [JSONPath](http://goessner.net/articles/JsonPath/) as selector.
     * JsonPath is XPath equivalent for querying Json structures.
     * Try your JsonPath expressions [online](http://jsonpath.curiousconcept.com/).
     * Even for a single value an array is returned.
     *
     * This method **require [`flow/jsonpath` > 0.2](https://github.com/FlowCommunications/JSONPath/) library to be installed**.
     *
     * Example:
     *
     * ``` php
     * <?php
     * // match the first `user.id` in json
     * $firstUserId = $I->grabDataFromResponseByJsonPath(\'$..users[0].id\');
     * $I->sendPUT(\'/user\', array(\'id\' => $firstUserId[0], \'name\' => \'davert\'));
     * ?>
     * ```
     *
     * @param string $jsonPath
     * @return array Array of matching items
     * @throws \\Exception
     * @part json
     * @version 2.0.9
     * @see \\Codeception\\Module\\REST::grabDataFromResponseByJsonPath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabDataFromResponseByJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4804291ff16faaf4e111aa7f4c896ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabDataFromResponseByJsonPath and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::grabDataFromResponseByJsonPath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabDataFromResponseByJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ecec7adc91a3c12ca169bdc0c4c9c87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if json structure in response matches the xpath provided.
     * JSON is not supposed to be checked against XPath, yet it can be converted to xml and used with XPath.
     * This assertion allows you to check the structure of response json.
     *     *
     * ```json
     *   { "store": {
     *       "book": [
     *         { "category": "reference",
     *           "author": "Nigel Rees",
     *           "title": "Sayings of the Century",
     *           "price": 8.95
     *         },
     *         { "category": "fiction",
     *           "author": "Evelyn Waugh",
     *           "title": "Sword of Honour",
     *           "price": 12.99
     *         }
     *    ],
     *       "bicycle": {
     *         "color": "red",
     *         "price": 19.95
     *       }
     *     }
     *   }
     * ```
     *
     * ```php
     * <?php
     * // at least one book in store has author
     * $I->seeResponseJsonMatchesXpath(\'//store/book/author\');
     * // first book in store has author
     * $I->seeResponseJsonMatchesXpath(\'//store/book[1]/author\');
     * // at least one item in store has price
     * $I->seeResponseJsonMatchesXpath(\'/store//price\');
     * ?>
     * ```
     * @param string $xpath
     * @part json
     * @version 2.0.9
     * @see \\Codeception\\Module\\REST::seeResponseJsonMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8705621912c49b3bf5d378bf6a2593c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks if json structure in response matches the xpath provided.
     * JSON is not supposed to be checked against XPath, yet it can be converted to xml and used with XPath.
     * This assertion allows you to check the structure of response json.
     *     *
     * ```json
     *   { "store": {
     *       "book": [
     *         { "category": "reference",
     *           "author": "Nigel Rees",
     *           "title": "Sayings of the Century",
     *           "price": 8.95
     *         },
     *         { "category": "fiction",
     *           "author": "Evelyn Waugh",
     *           "title": "Sword of Honour",
     *           "price": 12.99
     *         }
     *    ],
     *       "bicycle": {
     *         "color": "red",
     *         "price": 19.95
     *       }
     *     }
     *   }
     * ```
     *
     * ```php
     * <?php
     * // at least one book in store has author
     * $I->seeResponseJsonMatchesXpath(\'//store/book/author\');
     * // first book in store has author
     * $I->seeResponseJsonMatchesXpath(\'//store/book[1]/author\');
     * // at least one item in store has price
     * $I->seeResponseJsonMatchesXpath(\'/store//price\');
     * ?>
     * ```
     * @param string $xpath
     * @part json
     * @version 2.0.9
     * @see \\Codeception\\Module\\REST::seeResponseJsonMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '454c41760eca418a625e3cf9ed51f4a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseJsonMatchesXpath and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseJsonMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fd5dd9331bd638366920da5f0561d17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks if json structure in response matches the xpath provided.
     * JSON is not supposed to be checked against XPath, yet it can be converted to xml and used with XPath.
     * This assertion allows you to check the structure of response json.
     *     *
     * ```json
     *   { "store": {
     *       "book": [
     *         { "category": "reference",
     *           "author": "Nigel Rees",
     *           "title": "Sayings of the Century",
     *           "price": 8.95
     *         },
     *         { "category": "fiction",
     *           "author": "Evelyn Waugh",
     *           "title": "Sword of Honour",
     *           "price": 12.99
     *         }
     *    ],
     *       "bicycle": {
     *         "color": "red",
     *         "price": 19.95
     *       }
     *     }
     *   }
     * ```
     *
     * ```php
     * <?php
     * // at least one book in store has author
     * $I->seeResponseJsonMatchesXpath(\'//store/book/author\');
     * // first book in store has author
     * $I->seeResponseJsonMatchesXpath(\'//store/book[1]/author\');
     * // at least one item in store has price
     * $I->seeResponseJsonMatchesXpath(\'/store//price\');
     * ?>
     * ```
     * @param string $xpath
     * @part json
     * @version 2.0.9
     * @see \\Codeception\\Module\\REST::seeResponseJsonMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08857ade14f5d11d2ae6e8b83d6813d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opposite to seeResponseJsonMatchesXpath
     *
     * @param string $xpath
     * @part json
     * @see \\Codeception\\Module\\REST::dontSeeResponseJsonMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7326f09207c9359852b7e33159f53fa4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Opposite to seeResponseJsonMatchesXpath
     *
     * @param string $xpath
     * @part json
     * @see \\Codeception\\Module\\REST::dontSeeResponseJsonMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3337f2d022893e55fa494bec7884da1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeResponseJsonMatchesXpath and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeResponseJsonMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfb777d409d3a68c8776a27e6cbc8750' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Opposite to seeResponseJsonMatchesXpath
     *
     * @param string $xpath
     * @part json
     * @see \\Codeception\\Module\\REST::dontSeeResponseJsonMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6cb3f01d5155428971e07f1f7ae5c24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if json structure in response matches [JsonPath](http://goessner.net/articles/JsonPath/).
     * JsonPath is XPath equivalent for querying Json structures.
     * Try your JsonPath expressions [online](http://jsonpath.curiousconcept.com/).
     * This assertion allows you to check the structure of response json.
     *
     * This method **require [`flow/jsonpath` > 0.2](https://github.com/FlowCommunications/JSONPath/) library to be installed**.
     *
     * ```json
     *   { "store": {
     *       "book": [
     *         { "category": "reference",
     *           "author": "Nigel Rees",
     *           "title": "Sayings of the Century",
     *           "price": 8.95
     *         },
     *         { "category": "fiction",
     *           "author": "Evelyn Waugh",
     *           "title": "Sword of Honour",
     *           "price": 12.99
     *         }
     *    ],
     *       "bicycle": {
     *         "color": "red",
     *         "price": 19.95
     *       }
     *     }
     *   }
     * ```
     *
     * ```php
     * <?php
     * // at least one book in store has author
     * $I->seeResponseJsonMatchesJsonPath(\'$.store.book[*].author\');
     * // first book in store has author
     * $I->seeResponseJsonMatchesJsonPath(\'$.store.book[0].author\');
     * // at least one item in store has price
     * $I->seeResponseJsonMatchesJsonPath(\'$.store..price\');
     * ?>
     * ```
     *
     * @param string $jsonPath
     * @part json
     * @version 2.0.9
     * @see \\Codeception\\Module\\REST::seeResponseJsonMatchesJsonPath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f35212eb78da8ed67a0d2c22940746f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks if json structure in response matches [JsonPath](http://goessner.net/articles/JsonPath/).
     * JsonPath is XPath equivalent for querying Json structures.
     * Try your JsonPath expressions [online](http://jsonpath.curiousconcept.com/).
     * This assertion allows you to check the structure of response json.
     *
     * This method **require [`flow/jsonpath` > 0.2](https://github.com/FlowCommunications/JSONPath/) library to be installed**.
     *
     * ```json
     *   { "store": {
     *       "book": [
     *         { "category": "reference",
     *           "author": "Nigel Rees",
     *           "title": "Sayings of the Century",
     *           "price": 8.95
     *         },
     *         { "category": "fiction",
     *           "author": "Evelyn Waugh",
     *           "title": "Sword of Honour",
     *           "price": 12.99
     *         }
     *    ],
     *       "bicycle": {
     *         "color": "red",
     *         "price": 19.95
     *       }
     *     }
     *   }
     * ```
     *
     * ```php
     * <?php
     * // at least one book in store has author
     * $I->seeResponseJsonMatchesJsonPath(\'$.store.book[*].author\');
     * // first book in store has author
     * $I->seeResponseJsonMatchesJsonPath(\'$.store.book[0].author\');
     * // at least one item in store has price
     * $I->seeResponseJsonMatchesJsonPath(\'$.store..price\');
     * ?>
     * ```
     *
     * @param string $jsonPath
     * @part json
     * @version 2.0.9
     * @see \\Codeception\\Module\\REST::seeResponseJsonMatchesJsonPath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de5d2fcd978ef6af96749384eadc8532' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseJsonMatchesJsonPath and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseJsonMatchesJsonPath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b932ed07ad880792119df3cb99e586f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks if json structure in response matches [JsonPath](http://goessner.net/articles/JsonPath/).
     * JsonPath is XPath equivalent for querying Json structures.
     * Try your JsonPath expressions [online](http://jsonpath.curiousconcept.com/).
     * This assertion allows you to check the structure of response json.
     *
     * This method **require [`flow/jsonpath` > 0.2](https://github.com/FlowCommunications/JSONPath/) library to be installed**.
     *
     * ```json
     *   { "store": {
     *       "book": [
     *         { "category": "reference",
     *           "author": "Nigel Rees",
     *           "title": "Sayings of the Century",
     *           "price": 8.95
     *         },
     *         { "category": "fiction",
     *           "author": "Evelyn Waugh",
     *           "title": "Sword of Honour",
     *           "price": 12.99
     *         }
     *    ],
     *       "bicycle": {
     *         "color": "red",
     *         "price": 19.95
     *       }
     *     }
     *   }
     * ```
     *
     * ```php
     * <?php
     * // at least one book in store has author
     * $I->seeResponseJsonMatchesJsonPath(\'$.store.book[*].author\');
     * // first book in store has author
     * $I->seeResponseJsonMatchesJsonPath(\'$.store.book[0].author\');
     * // at least one item in store has price
     * $I->seeResponseJsonMatchesJsonPath(\'$.store..price\');
     * ?>
     * ```
     *
     * @param string $jsonPath
     * @part json
     * @version 2.0.9
     * @see \\Codeception\\Module\\REST::seeResponseJsonMatchesJsonPath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85e7494032b131d843d63a5a480b654c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opposite to seeResponseJsonMatchesJsonPath
     *
     * @param string $jsonPath
     * @part json
     * @see \\Codeception\\Module\\REST::dontSeeResponseJsonMatchesJsonPath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c968a679500e8343598914cc489ff653' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Opposite to seeResponseJsonMatchesJsonPath
     *
     * @param string $jsonPath
     * @part json
     * @see \\Codeception\\Module\\REST::dontSeeResponseJsonMatchesJsonPath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3c1bcad26fc805c805a705c2877f82b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeResponseJsonMatchesJsonPath and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeResponseJsonMatchesJsonPath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5b85cd04921f467da570610fc7032d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Opposite to seeResponseJsonMatchesJsonPath
     *
     * @param string $jsonPath
     * @part json
     * @see \\Codeception\\Module\\REST::dontSeeResponseJsonMatchesJsonPath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '884ce9d2fe7176629847d8b256aa575f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opposite to seeResponseContainsJson
     *
     * @part json
     * @param array $json
     * @see \\Codeception\\Module\\REST::dontSeeResponseContainsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a16b8a09b2d16ff6c111cf49ef03d3c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Opposite to seeResponseContainsJson
     *
     * @part json
     * @param array $json
     * @see \\Codeception\\Module\\REST::dontSeeResponseContainsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02c1d255c033c9d9debffa76e317ec9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeResponseContainsJson and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeResponseContainsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c5b542cd064107b342edeaa51720cc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Opposite to seeResponseContainsJson
     *
     * @part json
     * @param array $json
     * @see \\Codeception\\Module\\REST::dontSeeResponseContainsJson()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7910828b7f9abd02dbe39bffbe66e8db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that Json matches provided types.
     * In case you don\'t know the actual values of JSON data returned you can match them by type.
     * Starts check with a root element. If JSON data is array it will check the first element of an array.
     * You can specify the path in the json which should be checked with JsonPath
     *
     * Basic example:
     *
     * ```php
     * <?php
     * // {\'user_id\': 1, \'name\': \'davert\', \'is_active\': false}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'integer\',
     *      \'name\' => \'string|null\',
     *      \'is_active\' => \'boolean\'
     * ]);
     *
     * // narrow down matching with JsonPath:
     * // {"users": [{ "name": "davert"}, {"id": 1}]}
     * $I->seeResponseMatchesJsonType([\'name\' => \'string\'], \'$.users[0]\');
     * ?>
     * ```
     *
     * In this case you can match that record contains fields with data types you expected.
     * The list of possible data types:
     *
     * * string
     * * integer
     * * float
     * * array (json object is array as well)
     * * boolean
     *
     * You can also use nested data type structures:
     *
     * ```php
     * <?php
     * // {\'user_id\': 1, \'name\': \'davert\', \'company\': {\'name\': \'Codegyre\'}}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'integer|string\', // multiple types
     *      \'company\' => [\'name\' => \'string\']
     * ]);
     * ?>
     * ```
     *
     * You can also apply filters to check values. Filter can be applied with `:` char after the type declaration.
     *
     * Here is the list of possible filters:
     *
     * * `integer:>{val}` - checks that integer is greater than {val} (works with float and string types too).
     * * `integer:<{val}` - checks that integer is lower than {val} (works with float and string types too).
     * * `string:url` - checks that value is valid url.
     * * `string:date` - checks that value is date in JavaScript format: https://weblog.west-wind.com/posts/2014/Jan/06/JavaScript-JSON-Date-Parsing-and-real-Dates
     * * `string:email` - checks that value is a valid email according to http://emailregex.com/
     * * `string:regex({val})` - checks that string matches a regex provided with {val}
     *
     * This is how filters can be used:
     *
     * ```php
     * <?php
     * // {\'user_id\': 1, \'email\' => \'davert@codeception.com\'}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'string:>0:<1000\', // multiple filters can be used
     *      \'email\' => \'string:regex(~\\@~)\' // we just check that @ char is included
     * ]);
     *
     * // {\'user_id\': \'1\'}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'string:>0\', // works with strings as well
     * }
     * ?>
     * ```
     *
     * You can also add custom filters y accessing `JsonType::addCustomFilter` method.
     * See [JsonType reference](http://codeception.com/docs/reference/JsonType).
     *
     * @part json
     * @param array $jsonType
     * @param string $jsonPath
     * @version 2.1.3
     * @see \\Codeception\\Module\\REST::seeResponseMatchesJsonType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51f7341525564f5d00d09b31d8de1f10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that Json matches provided types.
     * In case you don\'t know the actual values of JSON data returned you can match them by type.
     * Starts check with a root element. If JSON data is array it will check the first element of an array.
     * You can specify the path in the json which should be checked with JsonPath
     *
     * Basic example:
     *
     * ```php
     * <?php
     * // {\'user_id\': 1, \'name\': \'davert\', \'is_active\': false}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'integer\',
     *      \'name\' => \'string|null\',
     *      \'is_active\' => \'boolean\'
     * ]);
     *
     * // narrow down matching with JsonPath:
     * // {"users": [{ "name": "davert"}, {"id": 1}]}
     * $I->seeResponseMatchesJsonType([\'name\' => \'string\'], \'$.users[0]\');
     * ?>
     * ```
     *
     * In this case you can match that record contains fields with data types you expected.
     * The list of possible data types:
     *
     * * string
     * * integer
     * * float
     * * array (json object is array as well)
     * * boolean
     *
     * You can also use nested data type structures:
     *
     * ```php
     * <?php
     * // {\'user_id\': 1, \'name\': \'davert\', \'company\': {\'name\': \'Codegyre\'}}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'integer|string\', // multiple types
     *      \'company\' => [\'name\' => \'string\']
     * ]);
     * ?>
     * ```
     *
     * You can also apply filters to check values. Filter can be applied with `:` char after the type declaration.
     *
     * Here is the list of possible filters:
     *
     * * `integer:>{val}` - checks that integer is greater than {val} (works with float and string types too).
     * * `integer:<{val}` - checks that integer is lower than {val} (works with float and string types too).
     * * `string:url` - checks that value is valid url.
     * * `string:date` - checks that value is date in JavaScript format: https://weblog.west-wind.com/posts/2014/Jan/06/JavaScript-JSON-Date-Parsing-and-real-Dates
     * * `string:email` - checks that value is a valid email according to http://emailregex.com/
     * * `string:regex({val})` - checks that string matches a regex provided with {val}
     *
     * This is how filters can be used:
     *
     * ```php
     * <?php
     * // {\'user_id\': 1, \'email\' => \'davert@codeception.com\'}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'string:>0:<1000\', // multiple filters can be used
     *      \'email\' => \'string:regex(~\\@~)\' // we just check that @ char is included
     * ]);
     *
     * // {\'user_id\': \'1\'}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'string:>0\', // works with strings as well
     * }
     * ?>
     * ```
     *
     * You can also add custom filters y accessing `JsonType::addCustomFilter` method.
     * See [JsonType reference](http://codeception.com/docs/reference/JsonType).
     *
     * @part json
     * @param array $jsonType
     * @param string $jsonPath
     * @version 2.1.3
     * @see \\Codeception\\Module\\REST::seeResponseMatchesJsonType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b35955b5158adcdfb6ee313f0bf9aa2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseMatchesJsonType and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseMatchesJsonType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2af4df8a228cad027ad2f6296750e35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that Json matches provided types.
     * In case you don\'t know the actual values of JSON data returned you can match them by type.
     * Starts check with a root element. If JSON data is array it will check the first element of an array.
     * You can specify the path in the json which should be checked with JsonPath
     *
     * Basic example:
     *
     * ```php
     * <?php
     * // {\'user_id\': 1, \'name\': \'davert\', \'is_active\': false}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'integer\',
     *      \'name\' => \'string|null\',
     *      \'is_active\' => \'boolean\'
     * ]);
     *
     * // narrow down matching with JsonPath:
     * // {"users": [{ "name": "davert"}, {"id": 1}]}
     * $I->seeResponseMatchesJsonType([\'name\' => \'string\'], \'$.users[0]\');
     * ?>
     * ```
     *
     * In this case you can match that record contains fields with data types you expected.
     * The list of possible data types:
     *
     * * string
     * * integer
     * * float
     * * array (json object is array as well)
     * * boolean
     *
     * You can also use nested data type structures:
     *
     * ```php
     * <?php
     * // {\'user_id\': 1, \'name\': \'davert\', \'company\': {\'name\': \'Codegyre\'}}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'integer|string\', // multiple types
     *      \'company\' => [\'name\' => \'string\']
     * ]);
     * ?>
     * ```
     *
     * You can also apply filters to check values. Filter can be applied with `:` char after the type declaration.
     *
     * Here is the list of possible filters:
     *
     * * `integer:>{val}` - checks that integer is greater than {val} (works with float and string types too).
     * * `integer:<{val}` - checks that integer is lower than {val} (works with float and string types too).
     * * `string:url` - checks that value is valid url.
     * * `string:date` - checks that value is date in JavaScript format: https://weblog.west-wind.com/posts/2014/Jan/06/JavaScript-JSON-Date-Parsing-and-real-Dates
     * * `string:email` - checks that value is a valid email according to http://emailregex.com/
     * * `string:regex({val})` - checks that string matches a regex provided with {val}
     *
     * This is how filters can be used:
     *
     * ```php
     * <?php
     * // {\'user_id\': 1, \'email\' => \'davert@codeception.com\'}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'string:>0:<1000\', // multiple filters can be used
     *      \'email\' => \'string:regex(~\\@~)\' // we just check that @ char is included
     * ]);
     *
     * // {\'user_id\': \'1\'}
     * $I->seeResponseMatchesJsonType([
     *      \'user_id\' => \'string:>0\', // works with strings as well
     * }
     * ?>
     * ```
     *
     * You can also add custom filters y accessing `JsonType::addCustomFilter` method.
     * See [JsonType reference](http://codeception.com/docs/reference/JsonType).
     *
     * @part json
     * @param array $jsonType
     * @param string $jsonPath
     * @version 2.1.3
     * @see \\Codeception\\Module\\REST::seeResponseMatchesJsonType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb0a141ffb2b708d2e7b62955afef437' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Opposite to `seeResponseMatchesJsonType`.
     *
     * @part json
     * @param $jsonType jsonType structure
     * @param null $jsonPath optionally set specific path to structure with JsonPath
     * @see seeResponseMatchesJsonType
     * @version 2.1.3
     * @see \\Codeception\\Module\\REST::dontSeeResponseMatchesJsonType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e74c809c36db3f4e9bb4e908a62f4e18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Opposite to `seeResponseMatchesJsonType`.
     *
     * @part json
     * @param $jsonType jsonType structure
     * @param null $jsonPath optionally set specific path to structure with JsonPath
     * @see seeResponseMatchesJsonType
     * @version 2.1.3
     * @see \\Codeception\\Module\\REST::dontSeeResponseMatchesJsonType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a28cde33deb0ce02e321ea7ba168eb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeResponseMatchesJsonType and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeResponseMatchesJsonType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8be4e6e6e72ea6a96f7cd67a22b20db1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Opposite to `seeResponseMatchesJsonType`.
     *
     * @part json
     * @param $jsonType jsonType structure
     * @param null $jsonPath optionally set specific path to structure with JsonPath
     * @see seeResponseMatchesJsonType
     * @version 2.1.3
     * @see \\Codeception\\Module\\REST::dontSeeResponseMatchesJsonType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91f25d10ce01aa364205d327e1f5e346' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if response is exactly the same as provided.
     *
     * @part json
     * @part xml
     * @param $response
     * @see \\Codeception\\Module\\REST::seeResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98dae0c65bdf445af7e58e78ccf2fcea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks if response is exactly the same as provided.
     *
     * @part json
     * @part xml
     * @param $response
     * @see \\Codeception\\Module\\REST::seeResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68da7ff6759d2629b5fa3ed690c8bbd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a3ac2efb38b6bc9a3ebd07155ed30dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks if response is exactly the same as provided.
     *
     * @part json
     * @part xml
     * @param $response
     * @see \\Codeception\\Module\\REST::seeResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41abf84473d3fac2bdc271a72d8a2410' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks response code equals to provided value.
     *
     * ```php
     * <?php
     * $I->seeResponseCodeIs(200);
     *
     * // preferred to use \\Codeception\\Util\\HttpCode
     * $I->seeResponseCodeIs(\\Codeception\\Util\\HttpCode::OK);
     * ```
     *
     * @part json
     * @part xml
     * @param $code
     * @see \\Codeception\\Module\\REST::seeResponseCodeIs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ebe04f8f530c8fb2f9ddf1b77fa8e55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks response code equals to provided value.
     *
     * ```php
     * <?php
     * $I->seeResponseCodeIs(200);
     *
     * // preferred to use \\Codeception\\Util\\HttpCode
     * $I->seeResponseCodeIs(\\Codeception\\Util\\HttpCode::OK);
     * ```
     *
     * @part json
     * @part xml
     * @param $code
     * @see \\Codeception\\Module\\REST::seeResponseCodeIs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f6c70b1e279f3c3858ce7f8f813ea2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseCodeIs and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseCodeIs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6515695f739c05b8e613c4650aced36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks response code equals to provided value.
     *
     * ```php
     * <?php
     * $I->seeResponseCodeIs(200);
     *
     * // preferred to use \\Codeception\\Util\\HttpCode
     * $I->seeResponseCodeIs(\\Codeception\\Util\\HttpCode::OK);
     * ```
     *
     * @part json
     * @part xml
     * @param $code
     * @see \\Codeception\\Module\\REST::seeResponseCodeIs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a639ac2694ddc41ae4ab71304f3e769c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that response code is not equal to provided value.
     *
     * ```php
     * <?php
     * $I->dontSeeResponseCodeIs(200);
     *
     * // preferred to use \\Codeception\\Util\\HttpCode
     * $I->dontSeeResponseCodeIs(\\Codeception\\Util\\HttpCode::OK);
     * ```
     *
     * @part json
     * @part xml
     * @param $code
     * @see \\Codeception\\Module\\REST::dontSeeResponseCodeIs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ac65ebf152eebd4f30df1cf3e45fa68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that response code is not equal to provided value.
     *
     * ```php
     * <?php
     * $I->dontSeeResponseCodeIs(200);
     *
     * // preferred to use \\Codeception\\Util\\HttpCode
     * $I->dontSeeResponseCodeIs(\\Codeception\\Util\\HttpCode::OK);
     * ```
     *
     * @part json
     * @part xml
     * @param $code
     * @see \\Codeception\\Module\\REST::dontSeeResponseCodeIs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ef64d43db63f151a87cfdd81608ad00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeResponseCodeIs and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeResponseCodeIs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a98ae61804b98211e0c7bda2d24fbba7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that response code is not equal to provided value.
     *
     * ```php
     * <?php
     * $I->dontSeeResponseCodeIs(200);
     *
     * // preferred to use \\Codeception\\Util\\HttpCode
     * $I->dontSeeResponseCodeIs(\\Codeception\\Util\\HttpCode::OK);
     * ```
     *
     * @part json
     * @part xml
     * @param $code
     * @see \\Codeception\\Module\\REST::dontSeeResponseCodeIs()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74249ad8b3ba3516492ed77b9bcabd57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the response code is 2xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsSuccessful()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseCodeIsSuccessful',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fed150954b7d70301dbd22ffdea5c85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the response code is 2xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsSuccessful()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseCodeIsSuccessful',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be8fa7a5c278b6660bcb1051358446f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseCodeIsSuccessful and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsSuccessful()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseCodeIsSuccessful',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72a3463749862a66543ecf82ae43c324' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the response code is 2xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsSuccessful()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseCodeIsSuccessful',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c268815de3b947264c8eb2a9ded44f7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the response code 3xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsRedirection()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseCodeIsRedirection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d97b1f8b62fe57793075f6a60cae35f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the response code 3xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsRedirection()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseCodeIsRedirection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc2d49e7d56da81f4a3c365b731f5416' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseCodeIsRedirection and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsRedirection()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseCodeIsRedirection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8c02c55d96998e0aa600fca7e6a549e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the response code 3xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsRedirection()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseCodeIsRedirection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fefa25f64c48200ace04227b3f3bd254' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the response code is 4xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsClientError()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseCodeIsClientError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fc6886108da8d4de2c357b78832ab7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the response code is 4xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsClientError()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseCodeIsClientError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff9c4a8fa4a820521b2f20cbde4fd5f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseCodeIsClientError and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsClientError()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseCodeIsClientError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acbf3f1b83fbea2f4d7b0368dc261212' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the response code is 4xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsClientError()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseCodeIsClientError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d656233af2ef910b0e6ae925c27bf08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the response code is 5xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsServerError()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseCodeIsServerError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2808900ad1b075791b202f09f9e0095a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks that the response code is 5xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsServerError()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseCodeIsServerError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd39a03be88b0544dd01cc0aa57f3d231' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseCodeIsServerError and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsServerError()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseCodeIsServerError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a1c06ba0ca5d2ba2141cdcf8909e430' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks that the response code is 5xx
     *
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseCodeIsServerError()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseCodeIsServerError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80f52f57bfd91fea34d79e1ff926e0ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks whether last response was valid XML.
     * This is done with libxml_get_last_error function.
     *
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseIsXml()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeResponseIsXml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33434180433d9cf642ceac382471cd0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks whether last response was valid XML.
     * This is done with libxml_get_last_error function.
     *
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseIsXml()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeResponseIsXml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a31ec403a9ae75ac7bee9bfec705f7eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeResponseIsXml and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeResponseIsXml()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeResponseIsXml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6dd500615cf412456a53e0638789b7bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks whether last response was valid XML.
     * This is done with libxml_get_last_error function.
     *
     * @part xml
     * @see \\Codeception\\Module\\REST::seeResponseIsXml()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeResponseIsXml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb7ff39021f32d41473377e90b2c1802' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks whether XML response matches XPath
     *
     * ```php
     * <?php
     * $I->seeXmlResponseMatchesXpath(\'//root/user[@id=1]\');
     * ```
     * @part xml
     * @param $xpath
     * @see \\Codeception\\Module\\REST::seeXmlResponseMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8701fb58359038e15a0422e19276235' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks whether XML response matches XPath
     *
     * ```php
     * <?php
     * $I->seeXmlResponseMatchesXpath(\'//root/user[@id=1]\');
     * ```
     * @part xml
     * @param $xpath
     * @see \\Codeception\\Module\\REST::seeXmlResponseMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3742ec85817279001b2a5637504666b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeXmlResponseMatchesXpath and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeXmlResponseMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74a933b5ae4718edc3a3d93bfeaa6234' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks whether XML response matches XPath
     *
     * ```php
     * <?php
     * $I->seeXmlResponseMatchesXpath(\'//root/user[@id=1]\');
     * ```
     * @part xml
     * @param $xpath
     * @see \\Codeception\\Module\\REST::seeXmlResponseMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8b0b25602a0d590f790d9539e43a47a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks whether XML response does not match XPath
     *
     * ```php
     * <?php
     * $I->dontSeeXmlResponseMatchesXpath(\'//root/user[@id=1]\');
     * ```
     * @part xml
     * @param $xpath
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a90a27e00dba8a083df1a3eec60da108' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks whether XML response does not match XPath
     *
     * ```php
     * <?php
     * $I->dontSeeXmlResponseMatchesXpath(\'//root/user[@id=1]\');
     * ```
     * @part xml
     * @param $xpath
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75d48fef5388f75cc5df1e666869c69e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeXmlResponseMatchesXpath and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c5e60da7d15dca12ec5f860114db398' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks whether XML response does not match XPath
     *
     * ```php
     * <?php
     * $I->dontSeeXmlResponseMatchesXpath(\'//root/user[@id=1]\');
     * ```
     * @part xml
     * @param $xpath
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseMatchesXpath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19e479824a77fef15955ed46588c89f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Finds and returns text contents of element.
     * Element is matched by either CSS or XPath
     *
     * @param $cssOrXPath
     * @return string
     * @part xml
     * @see \\Codeception\\Module\\REST::grabTextContentFromXmlElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabTextContentFromXmlElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d95430db718783573a89b8c71028ac9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabTextContentFromXmlElement and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::grabTextContentFromXmlElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabTextContentFromXmlElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b7c574c36bc342c635c218fd1fee835' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Finds and returns attribute of element.
     * Element is matched by either CSS or XPath
     *
     * @param $cssOrXPath
     * @param $attribute
     * @return string
     * @part xml
     * @see \\Codeception\\Module\\REST::grabAttributeFromXmlElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'grabAttributeFromXmlElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '147104adc13dc9c7dbb17a6a6d841c0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes grabAttributeFromXmlElement and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::grabAttributeFromXmlElement()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryGrabAttributeFromXmlElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c46285922a9babfe931c5611e5eda9e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks XML response equals provided XML.
     * Comparison is done by canonicalizing both xml`s.
     *
     * Parameters can be passed either as DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::seeXmlResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f7331cb694ca60462833cbc4fd93236' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks XML response equals provided XML.
     * Comparison is done by canonicalizing both xml`s.
     *
     * Parameters can be passed either as DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::seeXmlResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32cab9f4b42d82f821bb394e0f245fbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeXmlResponseEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeXmlResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2db6714b080ccbeb9388a7104f893cfd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks XML response equals provided XML.
     * Comparison is done by canonicalizing both xml`s.
     *
     * Parameters can be passed either as DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::seeXmlResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edf013bf701e1b2ee4c3c9379c8a9ecd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks XML response does not equal to provided XML.
     * Comparison is done by canonicalizing both xml`s.
     *
     * Parameter can be passed either as XmlBuilder, DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '929f7031c9f8009adb675e4d348799a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks XML response does not equal to provided XML.
     * Comparison is done by canonicalizing both xml`s.
     *
     * Parameter can be passed either as XmlBuilder, DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62469c1436e1ac57e3412088259bb2b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeXmlResponseEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '844c0b35c70366b83bf32c8677e47de7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks XML response does not equal to provided XML.
     * Comparison is done by canonicalizing both xml`s.
     *
     * Parameter can be passed either as XmlBuilder, DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e35c935f9f8ee591e9bfd464c2c49d53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks XML response includes provided XML.
     * Comparison is done by canonicalizing both xml`s.
     * Parameter can be passed either as XmlBuilder, DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeXmlResponseIncludes("<result>1</result>");
     * ?>
     * ```
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::seeXmlResponseIncludes()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff160593bf4fa718785cc0cbab4a479b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks XML response includes provided XML.
     * Comparison is done by canonicalizing both xml`s.
     * Parameter can be passed either as XmlBuilder, DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeXmlResponseIncludes("<result>1</result>");
     * ?>
     * ```
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::seeXmlResponseIncludes()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '102c8613ffa18aa2c3a1ddb15299be2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeXmlResponseIncludes and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeXmlResponseIncludes()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff97526872f300ab30ca8a39378a3bdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks XML response includes provided XML.
     * Comparison is done by canonicalizing both xml`s.
     * Parameter can be passed either as XmlBuilder, DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->seeXmlResponseIncludes("<result>1</result>");
     * ?>
     * ```
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::seeXmlResponseIncludes()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe7d6dedf1fb23685ce38691dcd4375b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks XML response does not include provided XML.
     * Comparison is done by canonicalizing both xml`s.
     * Parameter can be passed either as XmlBuilder, DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseIncludes()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96a4298714b6cf28687ea043102438f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks XML response does not include provided XML.
     * Comparison is done by canonicalizing both xml`s.
     * Parameter can be passed either as XmlBuilder, DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseIncludes()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74242774020550d5374e3894894ac836' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeXmlResponseIncludes and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseIncludes()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5943ec15516d9bc20c6dc0c8e67e4ee8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks XML response does not include provided XML.
     * Comparison is done by canonicalizing both xml`s.
     * Parameter can be passed either as XmlBuilder, DOMDocument, DOMNode, XML string, or array (if no attributes).
     *
     * @param $xml
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeXmlResponseIncludes()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb8d17cac9f87dbf2d4f7aa00fe7d294' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if the hash of a binary response is exactly the same as provided.
     * Parameter can be passed as any hash string supported by hash(), with an
     * optional second parameter to specify the hash type, which defaults to md5.
     *
     * Example: Using md5 hash key
     *
     * ```php
     * <?php
     * $I->seeBinaryResponseEquals("8c90748342f19b195b9c6b4eff742ded");
     * ?>
     * ```
     *
     * Example: Using md5 for a file contents
     *
     * ```php
     * <?php
     * $fileData = file_get_contents("test_file.jpg");
     * $I->seeBinaryResponseEquals(md5($fileData));
     * ?>
     * ```
     * Example: Using sha256 hash
     *
     * ```php
     * <?php
     * $fileData = \'/9j/2wBDAAMCAgICAgMCAgIDAwMDBAYEBAQEBAgGBgUGCQgKCgkICQkKDA8MCgsOCwkJDRENDg8QEBEQCgwSExIQEw8QEBD/yQALCAABAAEBAREA/8wABgAQEAX/2gAIAQEAAD8A0s8g/9k=\'; // very small jpeg
     * $I->seeBinaryResponseEquals(hash("sha256", base64_decode($fileData)), \'sha256\');
     * ?>
     * ```
     *
     * @param $hash the hashed data response expected
     * @param $algo the hash algorithm to use. Default md5.
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeBinaryResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'seeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c1b4adc004d49f6a746b6cd03ecd7b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks if the hash of a binary response is exactly the same as provided.
     * Parameter can be passed as any hash string supported by hash(), with an
     * optional second parameter to specify the hash type, which defaults to md5.
     *
     * Example: Using md5 hash key
     *
     * ```php
     * <?php
     * $I->seeBinaryResponseEquals("8c90748342f19b195b9c6b4eff742ded");
     * ?>
     * ```
     *
     * Example: Using md5 for a file contents
     *
     * ```php
     * <?php
     * $fileData = file_get_contents("test_file.jpg");
     * $I->seeBinaryResponseEquals(md5($fileData));
     * ?>
     * ```
     * Example: Using sha256 hash
     *
     * ```php
     * <?php
     * $fileData = \'/9j/2wBDAAMCAgICAgMCAgIDAwMDBAYEBAQEBAgGBgUGCQgKCgkICQkKDA8MCgsOCwkJDRENDg8QEBEQCgwSExIQEw8QEBD/yQALCAABAAEBAREA/8wABgAQEAX/2gAIAQEAAD8A0s8g/9k=\'; // very small jpeg
     * $I->seeBinaryResponseEquals(hash("sha256", base64_decode($fileData)), \'sha256\');
     * ?>
     * ```
     *
     * @param $hash the hashed data response expected
     * @param $algo the hash algorithm to use. Default md5.
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeBinaryResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4784f3205bc1743566908b3dc596037' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes seeBinaryResponseEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::seeBinaryResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retrySeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36090be74f39d18f0ef90b59ffd39d6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks if the hash of a binary response is exactly the same as provided.
     * Parameter can be passed as any hash string supported by hash(), with an
     * optional second parameter to specify the hash type, which defaults to md5.
     *
     * Example: Using md5 hash key
     *
     * ```php
     * <?php
     * $I->seeBinaryResponseEquals("8c90748342f19b195b9c6b4eff742ded");
     * ?>
     * ```
     *
     * Example: Using md5 for a file contents
     *
     * ```php
     * <?php
     * $fileData = file_get_contents("test_file.jpg");
     * $I->seeBinaryResponseEquals(md5($fileData));
     * ?>
     * ```
     * Example: Using sha256 hash
     *
     * ```php
     * <?php
     * $fileData = \'/9j/2wBDAAMCAgICAgMCAgIDAwMDBAYEBAQEBAgGBgUGCQgKCgkICQkKDA8MCgsOCwkJDRENDg8QEBEQCgwSExIQEw8QEBD/yQALCAABAAEBAREA/8wABgAQEAX/2gAIAQEAAD8A0s8g/9k=\'; // very small jpeg
     * $I->seeBinaryResponseEquals(hash("sha256", base64_decode($fileData)), \'sha256\');
     * ?>
     * ```
     *
     * @param $hash the hashed data response expected
     * @param $algo the hash algorithm to use. Default md5.
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::seeBinaryResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'canSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3883cd07668e18f99ef7517baae11bdb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if the hash of a binary response is not the same as provided.
     *
     * ```php
     * <?php
     * $I->dontSeeBinaryResponseEquals("8c90748342f19b195b9c6b4eff742ded");
     * ?>
     * ```
     * Opposite to `seeBinaryResponseEquals`
     *
     * @param $hash the hashed data response expected
     * @param $algo the hash algorithm to use. Default md5.
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeBinaryResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'dontSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd93def6be2db625d34a1739941d8fe5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Checks if the hash of a binary response is not the same as provided.
     *
     * ```php
     * <?php
     * $I->dontSeeBinaryResponseEquals("8c90748342f19b195b9c6b4eff742ded");
     * ?>
     * ```
     * Opposite to `seeBinaryResponseEquals`
     *
     * @param $hash the hashed data response expected
     * @param $algo the hash algorithm to use. Default md5.
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeBinaryResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToDontSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '358b31b0fd56c819c2bebb8ea6d88f77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes dontSeeBinaryResponseEquals and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::dontSeeBinaryResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryDontSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '243e37e4b64e31557045eda690fed324' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Conditional Assertion: Test won\'t be stopped on fail
     * Checks if the hash of a binary response is not the same as provided.
     *
     * ```php
     * <?php
     * $I->dontSeeBinaryResponseEquals("8c90748342f19b195b9c6b4eff742ded");
     * ?>
     * ```
     * Opposite to `seeBinaryResponseEquals`
     *
     * @param $hash the hashed data response expected
     * @param $algo the hash algorithm to use. Default md5.
     * @part json
     * @part xml
     * @see \\Codeception\\Module\\REST::dontSeeBinaryResponseEquals()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'cantSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a2f2a952c1cb5c59b1064a9878dd786' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Prevents automatic redirects to be followed by the client
     *
     * ```php
     * <?php
     * $I->stopFollowingRedirects();
     * ```
     *
     * @part xml
     * @part json
     * @see \\Codeception\\Module\\REST::stopFollowingRedirects()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'stopFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8219c38f2eb96c577ee39d0f105c2cb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Prevents automatic redirects to be followed by the client
     *
     * ```php
     * <?php
     * $I->stopFollowingRedirects();
     * ```
     *
     * @part xml
     * @part json
     * @see \\Codeception\\Module\\REST::stopFollowingRedirects()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToStopFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd064b7a06578753c9722128a3c5b0838' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes stopFollowingRedirects and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::stopFollowingRedirects()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryStopFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa0d1d27724c7b4c9d5de502c80718b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Enables automatic redirects to be followed by the client
     *
     * ```php
     * <?php
     * $I->startFollowingRedirects();
     * ```
     *
     * @part xml
     * @part json
     * @see \\Codeception\\Module\\REST::startFollowingRedirects()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'startFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b20c29b2acd104e65bf0cea30cad988' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * [!] Test won\'t be stopped on fail. Error won\'t be logged 
     * Enables automatic redirects to be followed by the client
     *
     * ```php
     * <?php
     * $I->startFollowingRedirects();
     * ```
     *
     * @part xml
     * @part json
     * @see \\Codeception\\Module\\REST::startFollowingRedirects()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'tryToStartFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4db8377fdb72f1bd03ca27d598859102' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * [!] Method is generated.
     * 
     * * Executes startFollowingRedirects and retries on failure.
     * 
     * Retry number and interval set by $I->retry();
     *
     * @see \\Codeception\\Module\\REST::startFollowingRedirects()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => '_generated',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retryStartFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f0f9dc164459948a1a50766a21465f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Configure number of retries and initial interval.
     * Interval will be doubled on each unsuccessful execution.
     *
     * Use with \\$I->retryXXX() methods;
     *
     * @param $num
     * @param int $interval
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Lib\\Actor\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'retry',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20ca0a0a9fa17913b654ae5cbf089087' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Define custom actions here.
     *
     * @param mixed $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'skip',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae72f002ec0efe9d2f025ff1c9fbba9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
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
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'checklink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d47f57c07a2686aae41ecbcf411e9d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Проверка текста на странице по локатору этого текста.
     *
     * @param mixed $text
     * @param mixed $locator
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'checkText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e56dae1a0faa19f28d4656141514d83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Ожидание лоадера.
     *
     * @param mixed $timeout
     * @param mixed $locator
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitLoader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da611417d6048ecb9ce014738ba1fda8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return false|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getRandString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '891f0e9e8cd48029b029f3fa4eca05f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getRandTelephone',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd291f638a1e7ff18aae6b4443311619' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getRandTelephoneWithOutMask',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afcc3e1e0904fdba5cf4b5883650a187' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param mixed $rawTelephone
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getMaskedTelephone',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a324148ce94c6282f9958f764f415f96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @Description(\'Клик и переход на новую вкладку\')
     *
     * @param string $socialLink
     * @param string $subUrl
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'clickLinkSwitchTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ede46383e2e581926988ef040a4cacff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $items
     * @param $text
     *
     * @return int|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'findItemNumber',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb0bc1c683767153f58a6789e73b256a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $loc
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'clearFieldPressKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61407b20b8a01484ddd222012a5ab038' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param array $items
     * @param int $id
     *
     * @return int|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'findItemNumberByID',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b5c784aeae50b363f92ff68a868cda7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'contains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd92ba41236bf83e7f0d4ca730a8781c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $xpath
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'clearFieldJs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '215ab7a9614dfa5d723135c2c9a4708d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $fieldXpathLocator
     * @param string $option
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'selectOptionList',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f95b84148aa786ff514083ea0c9575b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $locator
     *
     * @throws Exception
     *
     * @return string[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getItems',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '307bb82bf2bed094fd1c8b5440019626' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $ids
     * @param $attr
     *
     * @throws Exception
     *
     * @return string[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'getItemsIDs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd13ac1da053b7a0c5dcfd83771ff2370' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param int $timeout
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitForAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c75e5f77227a26d63d86b6bbf4c89ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $loc
     * @param $time
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitAndClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffadd4933aabb3d4d6c566edc5d765c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'scrollToTop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4aeb6ac48e0c37bab0e50fb4ec0b91a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $selector
     * @param $name
     * @param $value
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'setAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7dd4157999bf8edfc803fe4ce89863c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param int $timeout
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitForPageLoad',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3e321c4901780fa6bb7f01cb71b5d17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param int $timeout
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'locator' => 'Codeception\\Util\\Locator',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
        ),
         'className' => 'AcceptanceTester',
         'functionName' => 'waitForPageOnLoad',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
  ),
));