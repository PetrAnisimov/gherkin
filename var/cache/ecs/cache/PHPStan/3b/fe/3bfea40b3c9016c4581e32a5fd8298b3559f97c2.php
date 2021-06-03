<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/tmp/PHPStantemp_folder10935/tests/_support/PageGher/LoginGher.php-1622559025,/home/hamster/Desktop/regression/tests/_support/_generated/AcceptanceTesterActions.php-1622536792',
   'data' => 
  array (
    '944ba5f3b586eafad8391a38fff82aed' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'getScenario',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19682397c2a010939aa978771053a313' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'debugWebDriverLogs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c600951fac6251a9faed11d1892408b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDebugWebDriverLogs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00d39f0cc4511de52082871f9e32e52a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDebugWebDriverLogs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd95aec02dceef4025b40db57c990639' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'amOnSubdomain',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ce7b532322ca6799b34ae4f94d1b4bb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'makeScreenshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0dd19063664c663de4775671fec38a8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToMakeScreenshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b27dbd1443a1b3a6d90e33d30128e52' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryMakeScreenshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ef2d9ebb4c482f65a394eb15d7a49f1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'makeHtmlSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dec6cc57f0d896fcad7be9f67bab299e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToMakeHtmlSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1023a7cddb3efde788340496f9fd95dd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryMakeHtmlSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '445ef8c4e6039ba0354cc7fc2ad9b8ba' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'resizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f6adf00e0cd6afeb31db4b4ec6075a8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToResizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43a669621e0c821012a5afea567dd0f5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryResizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14c1dc7da3853c504742ed5ba19ff1ea' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '395d80cf539fa8ae433b43ee302c4346' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4808aad2ff4b57676ada778641209c7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1443ee44b034e1778dd0b82140960fd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a5f246a0796f5e5bb87f253dc9f7815' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72d3744e61a56e3b353e1c096b48da1c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '250d6d20cf41b204691dbfc5e7889d26' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db08b83d8ab013254c8d6f409d48ace2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '325dba5dc6f2ce4eefdd67441982e9b3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'setCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a13734af12b3cf7d3e1ee16967e6727d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSetCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2b62c96abf07126b3a41056741db2fb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySetCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '931a236fb8134fc093e8ebe2176d081b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'resetCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb10bc2cf68ff0d4cca2ca4161350337' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToResetCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6089b1bbdbc50f367c5d8098df8cb32' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryResetCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0028cd7d50326999ac26c3268421061b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bda7614455bcb01ca4055ad52534429' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab6ce0987bd201c083ea853e62f3885a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4e6cf2ac520374a5c67aeef2ea6369a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '489e1da08870908690bf7f4d57a713fb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'amOnUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0836ae0c8052b0b82b0be44a04b4aa5d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'amOnPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3248f81d4ab296aa1a3e69cc2a94d104' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'see',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74e8dd38d814267bef307d1e04eaf8eb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '726a5ad1abe6f51a722ebd9ee25d4dd9' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '818922c930a9116226774a30170267c5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '776a11c6ec681e33a7b7c7a18cd3bb21' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '993e0032480c40e3bc12192c341a8a88' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3bf0c1a2634f9d979dcd90fe1619da3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3216786822af79ede451fb3a42ce9498' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSee',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c7d1f3ee7d625cfc5fc73256fa6d0c2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70d67ed72f0db87322ac5a0d84c7c2e3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f295d7ac8e53d8e263104e64da7f5161' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '474e3cd642eed4bb3b0e8d6ff8d848d5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9dfdbda9a8c0b3b17e3dec56c2a3d296' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef90ac0c5d2665cf09c7bca558b0a632' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3394f45922b0183e2d2fa10417dbd72a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '446f2c5731e12627a4804af973008a22' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeInSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0554fc3725110c966e3c52daa1fb7a8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1c647139003c0dcc60c58e2a4ec225d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e97a76ea49457e4ace058a3815ee47b7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb65a2e8cd148d8542863b403ac15af6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4ab3bd5d8b4ca21952d341614c21f96' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebd30f690b37454e4da35416e27c858d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a513b0012ac99b7ad23b32fd4f78781' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f40072adc441bb2db1408095cab207af' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeInPageSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65f0a0a987a669a989e575e3a0899d9b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'click',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4cd218d1d3ddeacf63f87c52e764858a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c09fde5b9e2dcef08937c28fa6990b7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e960a67e6d5e053d5952a0fff8db08d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54a9fa95ffb8d569e522bc0c19475844' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2326b4d2e8605ae9d8214520b12349e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4449109c63ed22f7d9c1aa65991f54a5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '450d617f1c89dae84fb7a12d83f543ee' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'baeaaf949af31bbd1b678aa054c12514' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5365041941ba901e72fff849b6794529' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d6bae22e7e88cb3d7fc7791c54366fa' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f38c3f19bb27d0491957e978406c64d5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b9ce0430e9e70f82531fddcf58446e2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcd9cb1d00945c2389b7fb0def64145f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e11c1308526582f2474e76b7016f6a1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a029fd07954d928101339bfa9d9140b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd45b79718b7193951a2ee1ab9076c430' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a226d4674be0cbac5990bdd05a7fd1b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e696c11b622c2d2f8013a2c931d56481' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '910da8b0f18a3356f49eff5f3acfbd75' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2d868fe4ed85126a8389a85df3c1e90' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7caf22989a49589211c293947b4e0d5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f10b398907b1621605f22ce6473176ee' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f83d79fc8bca6db6d52c2837f1a0e752' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f4079494b94f459107091e11facec14' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87025b27793eb5d97ebf6418d0512140' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c30e1adb626428a9e8605c844c72eb1b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeInCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90ad1e944d29c158b677869e48b73683' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e7770ab575e08e14d65291232731077' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e19b7cdff57a599aa146fb7ef3212d6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a95e67abda560439ddeeb530a1758ac8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeCurrentUrlEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4243eb85dd1477770bd89d149f00f63' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef3d2a6ea20ad92683093753852b8e04' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6ff77b8b47a05f13b71f953be4abc08' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b559f10b9ff3875468be90279b6bdd6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeCurrentUrlMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '433b87341a000c8705ad06e95bd625bc' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabFromCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9518b47196920b00d50ed2268a9b639' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabFromCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba7c6a78c4458335420c6e7712e8de8d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d5927a5c3dbd0d1795f3e924a5efe84' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64f2cee34791624b7ca38cdb1f8ec9dc' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88ed9a0c1aa0008314abe7964ad5d9bc' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '910013ee286db436957a80135582fb41' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '241129e41b3ac88820c1ba6557110d69' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9392b316cfb0e9bf6b2ad36bd10ca44' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7df6b571b9888109bd280eeca3f60d8e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeCheckboxIsChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec60940b242fe284b51b76cd9180b10a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2130f8288b45dab5f94ae995f5e881fc' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7d3c5c21f6ad5480bf2799e4cb61ddb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02b866d5b452d8e7101b2644c050c662' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb781f1bf85b44d7a1817495fc4fedb4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d88db1c2e398bca2c0c4be5b0643608' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f55b2e26008dc407a945bc8281cfa845' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e771a0dd4052697eb712bcf5743e7e91' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeInField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6365cbfcddbf51983404f9bcce1d1e99' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be5434fb088b134a67df943e24855807' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b9a1b29a6bd09d0095184ec6c05862e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d2e5c14caf5c3df52f13a9d3949b049' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5a5401b5232746c3076657b90916ace' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d888cee7f4fa4472dd9dd2463a4cb3d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01209f822cc0f440e011fb96df3e0774' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ab281f82826419e60beb71d154875d3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeInFormFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f85374db5f9a58f80698edb0899dc1d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'selectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eadcaddd3b6a2a86fb25586b0e2966ce' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSelectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bdfe0c6c8fb25ed997da0e0c1673f843' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySelectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '834cf1ea0c730f66549be71b1f148fc2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'unselectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99cef87e3d2ad174189f1c7ab0418d97' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToUnselectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '453cdd27a1e953bcd48f1a5b3c8b5937' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryUnselectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca19b8e43f941049ce404d614f96ff78' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'checkOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86d70d65b128d31c8b4e6d5012309eaa' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToCheckOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e1c48d860b570b38b401e1614abb5f0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryCheckOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d2600e3881cb803e92f6972cd13e0f4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'uncheckOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7056ba958bbd9640518f7fa00451ea4a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToUncheckOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e04a0e350f7ccd0514e2f4dfe33b5463' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryUncheckOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8ca62e0e1cf026882a20ced463cad1a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'fillField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1882f9b53820e850d920b0bcdcf3f50c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToFillField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dbd4d4b665df477afa5edff480e42f53' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryFillField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20d1353182432b9dacf4485be63d7b89' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'clearField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c2a8c2323ea9dc8535d47f15a27f0f7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToClearField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11cfec1fc8f74637fddda4fe7af66398' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryClearField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4191181e4e7ab59005c79e1dfecea3fb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'attachFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32c4cd5d507cea7f703024beaebe45fb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAttachFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7910e0d962d985fea3dea2f497b1351' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAttachFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '406fb9b18b40a7e06c31df14b57272d2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabTextFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f95072d6be4367b1418cb9a71aa8fd2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabTextFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e7eaf72eb5a274f1d7bd46a3638c0c7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabAttributeFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84e994bb873f0a705d3b906c96ec819c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabAttributeFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9476f7b14882861636e088a5b164f1d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabValueFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3e2c4cccd962f35dcc668d348b2fd3a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabValueFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64e8a48c05e2dbe5ea3179a823ce5729' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabMultiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '342b5a51f07b14b7fd19be154713a697' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabMultiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c94b8938f3ccca49a53da581286c1220' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82ea2dec7ae62a4a2232e348b2c2f8e6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f9cf3134492ab6e35aa604840094c1b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4dc7a36e766dfc69fc271e44342c4b54' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18f8c1314daf8597c1a5d0d7fc0f083a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '708dfc267aabd1e943129d288c482d63' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95093d28a0a706162f97ae7aa9ce7367' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c3940e43edb330c21967264846fb157' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c668058ab645e9b48e42965c578ca296' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c4dcf931a8deb5db9a3fe36cf7b8fdc' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c464473571bb704e38c1f501eec0fbc7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b30b90afeb99b2d7d1d1015625d44988' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ff70538027e7fa2171e4972df1b649e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a57d42540dd9c82b9be110bfcea5abf' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1bbb305fa493ca21e3b8cb463cfa29c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a14df14c478f64ac7f06ce83986c7815' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeElementInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfeeb19c9b3b4ffdbacdc63e81ca7e29' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeNumberOfElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8e5fe3b1e157568b8653f0317b7aab0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeNumberOfElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07acaeea1f0f953663778a72298bef4f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeNumberOfElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0f0f522d6241b6739a7a6ff4aba50b4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeNumberOfElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fefb198cb86c1ba2cbc12ded10709301' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeNumberOfElementsInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84c7ebcc6503e2004a99b4c6fa5307f0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeNumberOfElementsInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a27ac4feed157ef514317b29898114f8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeNumberOfElementsInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b0b2508b91dd3f8a58d5db8a83337f4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeNumberOfElementsInDOM',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3972b7f01b2b6617b1eeec775ba67f76' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3e8f06b6f42e1727caf4fa200dc221f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd806b34f9424e14506ed61682fb315e2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9abc7fc71e56ac09c4772d67ac8b0229' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c31b37647a29780aaf9a0054660458dd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce2461f699dc6ef73f4bf927c2026bae' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb57ee98727213c63bb7768e708908f4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6eb3a7f13479c1829b61363d54a3d6d6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeOptionIsSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf48ac53d6bded15ec44cff58e1f70f6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36f1a8460fdf20bcbee74757559daf81' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '483b0076a95fb26b453e4b01416c8765' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a069aa5e137f4aacd504b9da15e7e93' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6651eb528550ee49ab539ff2a810768' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6303abc5af5f0ce2e8e67c458fc844e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7a8baf4cd35e717bfeeba8e12b9b9d9' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ec8e6f126e06e05fec5245c40a484d8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeInTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2f62865b6da967aefb5a86f4c4c7a23' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'acceptPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d3827512138132389098686830259f2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAcceptPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '667eaff59fb5b899b8180e64b554f1e6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAcceptPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54c954549fc514780b8ff5793754c820' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cancelPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f70482e1c25ba91a760f536a987e43da' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToCancelPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b53cd14ca0be16967b8372a6ab78e7b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryCancelPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84ff60c84c2a2898edaf7a69921b44ab' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb4b86a07ead0e1e28836905896ef353' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58285365547f415a547e60695e183c0f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d7b4c7f5d09b31da6e35ea9f2c32aae' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab324ec7b493a48b49cab1adf7091f0c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a3cfb8e4f2f4ce39e7be71879bfdd97' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c92732f37a7b552306ebfca173ba601' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9635d90349e4c66deab4d49f15b5063b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67a625193629ffbabb6f66efa02a2681' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'typeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '729459818341518dea8e0ca2a30391ed' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToTypeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9d3e024bc088f781dc65ba03ebc2b15' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryTypeInPopup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1170409d233599dca48f42be4196cd06' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'reloadPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a3cb5e833b0e46a3e2723fbed1e0b0d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToReloadPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2537b899422f41328a3ecdf5a841d751' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryReloadPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f496797e2f4c20f970ba04e0e1cf08c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'moveBack',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce974041ea34a7c79768ddffb9d899de' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToMoveBack',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e943ae0180ce1c4799b5cbd39180490e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryMoveBack',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0df7bc622c65f90390ebf4441d8afbcd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'moveForward',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '621c1c5ce37e17e60cb976b732a1abd2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToMoveForward',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50d213f5616b1a55b30eb2fad027f197' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryMoveForward',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78b182e3a3e7a709c407cf21239a66be' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42b76e7d4a573cb35b50e3f8657c72a0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSubmitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a010b0e4f17b9cf45520ac64b1f9f970' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySubmitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '947fb1c2962a5e4dfe607b43948a2dab' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'waitForElementChange',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e245969ad77f045cbf66b5691d063a1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'waitForElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f5227b00e42cae855da1b67421b2f81' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'waitForElementVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccd639843115c85cb4b0c974dd197799' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'waitForElementNotVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f193ade86eeb4be69b892d5d8f480b60' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'waitForElementClickable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62297322c321bec598d1cf64682aacf9' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'waitForText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2536d145237075190579b10ca60d6a14' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'wait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23fb2b6ced03727275b7251c400d1a21' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'executeInSelenium',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3dad656a1b27f531afa4e8d8a8929973' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToExecuteInSelenium',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e64ae3bb4a502ff945241c4110ccefe4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryExecuteInSelenium',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc031cfd5b85817df2111ca531b38068' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'switchToWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58ef22027e0aad4accc52d2c499f6cbd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSwitchToWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1299d89b74ddab7368599ae46655ef82' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySwitchToWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30790d9b717de419a7c0a81307496cdd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'switchToIFrame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a2364b54f05be67e22488bc9fa76404' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSwitchToIFrame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '719994e768c1cf041b71f6fcdc278a54' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySwitchToIFrame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a918ac66f54767c71f225b335a5a8c8e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'waitForJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5765e7c456296f2ea7616888d97b8e82' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'executeJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05b4045bed093808e807d975db2692ce' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToExecuteJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7299d275258fcbb9ac81bcf1ffd5f26' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryExecuteJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ee5f270b4721c27b2a369968956e8ad' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'executeAsyncJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a42b76b19ca7773ef092c7fe3b83c11' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToExecuteAsyncJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cd745c85a9cbec8ecc03e5fc14f797e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryExecuteAsyncJS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e9abf426383d94bd227bc7ef0c12103' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'maximizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0506e43bebf32646ba6b65a0b3cd3a9b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToMaximizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96af699461e4f005d008192302394442' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryMaximizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70c65c45f151dcbbc967e8bc9b1aa4be' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dragAndDrop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8529fa1ca4233a6a10ee5ef0bd3779e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDragAndDrop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3187dc0a8874795c3612e8aed2733f5b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDragAndDrop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1be4ffd1fa62517dca83e1a9545de3ff' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'moveMouseOver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2d0b25c36adcb56b5c1458c96054370' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToMoveMouseOver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'beea59baf3e33b883555ad8ddf4ec373' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryMoveMouseOver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b83b55de2221b05fdfc8197f048938f7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'clickWithLeftButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f2889655b0158cd5de2fd641bf79ea3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToClickWithLeftButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f493e0d1b8f4daae35b5071a46a4a46' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryClickWithLeftButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ae1b5615f909b1b7648a90ba4ed8440' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'clickWithRightButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0796568907531418bd3d2cf12797cf1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToClickWithRightButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '358da75d22483cd49669a689cc0ace2c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryClickWithRightButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eca790903a36567d9281a14723ce28ea' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'doubleClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25953312921851add5e0e4e0d1b98f45' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDoubleClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '245ff7d2de342edddbded70ebdbb016d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDoubleClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff969b15e7dcd3b71cca4357782094d3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'pressKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '455f3165355481ecc667b8ab2b648b92' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToPressKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad981c15296132d922ec746d70fa079f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryPressKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ffc86d5e139980e0388a8b11f81063a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'appendField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d17de6a5d5e64b19bee04afffbd4ebe' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAppendField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6110cc01404580904e2fe418d49937d5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAppendField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '896ed85b95f4089fe00cf01ce7e90d8a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'saveSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '662aeac0a45aad2703c4ccd1c806914b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSaveSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1cf3a50b4164e1e3942ab59da1691d70' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySaveSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ced0d94d5e9c0e31972958f008e787a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'loadSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d0a89b73990fb87df28c89d4a1dc7a0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToLoadSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acac24d6c6d71a1f334bf33a29680446' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryLoadSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '400d39963c935b42ec3bbe73c2134ead' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'deleteSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99fb5ba9dd3238ad5515b5d61edcc917' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDeleteSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4d07c820eec3c2c5b30843c53f047ce' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDeleteSessionSnapshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c86b37ba5c75f24953405b78b284801e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'scrollTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2e70a22d49f1f998f1c13cb85cb3fa5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToScrollTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9c829bf4fee30bfd8751aad79f8ec8f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryScrollTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1c627e85f097e2d04f96a52d09374ba' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'openNewTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bad473f2c2c328aa4d9538c0edd82b24' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToOpenNewTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da4f0384392ab23e7e269bc3778588b0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryOpenNewTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03deef54e1bce92d9f348f28bb1546e3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'closeTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36487555cc5749b114618f176647ae03' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToCloseTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1628a7c409a61380701401e7b8943bf' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryCloseTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14511f38c1829b9700843e43a6c7105d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'switchToNextTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd22ad7ea648212358d3d2cce0cfbfc2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSwitchToNextTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '128878921771b00565afe53a0778f1bf' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySwitchToNextTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '824d14fc27c98ec076780e7a4d64db92' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'switchToPreviousTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0c25f70698e3f98d92d21888be6b4a5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSwitchToPreviousTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5b79e469d30dd4ba7ee61eb6b684694' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySwitchToPreviousTab',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '750a385ad13ed83c9285880b5542c280' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'performOn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '420dcf771c30afd6fabdfde6ec1b1cea' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToPerformOn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '835e6984c0d45ff6d640993834e8b684' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryPerformOn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f784b01a09e28a38fdf4363d68709a5d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'getUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48e53b3dde69a5b8c63d0ee9a9288e68' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToGetUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '031593a4a14b06a8807928d817a68b78' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGetUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6dff7e2b90eb48270f22f9b58138f481' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'getUrlFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15aca7e83b8d75c583b2de713cb78627' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToGetUrlFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29493cbe3c28538dd6a0891591c9955c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGetUrlFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02367a793bdaf05eab382e775cf039ee' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'getBrFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acfaba448aa317c43c4f04283eba68a3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToGetBrFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '164977043accb48c7a97631f4c265baf' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGetBrFromConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57f6c24b716df577b6c118fa2194e377' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'envParse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5663cf9aa9728568fdeae781799c319' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToEnvParse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd0572f8c472cd0d3d25fed133f099dc' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryEnvParse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51fb6436970796a33e1d02c0ecfc1e33' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'envValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9642246803942a5588d164013408d6f9' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToEnvValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a504579ad9a3964868e02f2146e6356b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryEnvValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c954e03fa90fbdb506bc7bef3593b8e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'testNeedless',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26ad4c88f261ba4be797bcf8cfbd3bc6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToTestNeedless',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7092216b2930f17cd17b49d79afbe180' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryTestNeedless',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd50d023233ac808a7dcfc754d0c5ea05' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'sortTestNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31e8319897fa11f76bd67bb53a3a000d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSortTestNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d10da01d093b1fe79621c6426f01290' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySortTestNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8df42a5148fd636f82735690ab2dcd0a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'findMultipleLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df07d17be22ed9053af1430393210b37' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToFindMultipleLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd67152d87575a8d78e2a93adc810f549' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryFindMultipleLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc7fd8581443a6127badf6bcdb34e1b0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seePageHasElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8a8cc76d92130d05cbfae9cd34fc611' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeePageHasElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0be17826af08801f90a535b7def8c87b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeePageHasElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4190d400d590f6c68b1adc2367191f27' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeePageHasElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '347779581b72ba2f69705166999f725c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'prepareTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77bcc626db5d4b936f88ba226c788197' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToPrepareTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b06128f5c6c0a85c4959a8a57f65fd80' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryPrepareTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e8bc8ac5e5a9af2d410f919c0611b0e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'restartConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ee27216637f6536015352bf9bbc3693' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToRestartConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e91f644473d78267f9f783521a68960' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryRestartConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '152580f97455f2aa12cf25830f02a06c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cookieConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecb38c7c72bd229da5c9089259eea70e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToCookieConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '712db53db614033a02001a58c8fe65f9' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryCookieConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9a87225e22c924f87aefc78c52bb2f7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'getValueFromStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7db162e4b7e9b104ff8c8a6abfdabd27' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToGetValueFromStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ec27eba1a07e1df8e5cf739cfbd1dcb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGetValueFromStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3820b1bb98dd0412de8d66df6ed1d68' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'loginConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21baef1bba352389096c4e3a14992c10' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToLoginConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '493451281c0caf429ceeb44384d1d6ab' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryLoginConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '933866347c1d3cf6fb2e233f7e15b9b0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'getUrlFromCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9125c0093127c26b90203b3364b5a5cc' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToGetUrlFromCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5648cc328daef7be34eb40962b8272e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGetUrlFromCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58ef3ecd2d657eb44a4968e5ec27183f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'expectException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ec53dd9d117be26f42b53566b8e9170' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToExpectException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89355a654db7d987f0e9cef60988f43b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryExpectException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04bb26879017dfd66c1eda34ee20a415' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'expectThrowable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '656514039220230675db0c88de26cc78' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToExpectThrowable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2198457cb13ea933d4e1fa2da43fbf0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryExpectThrowable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc7e002b5b8fb54407a2b7249b03c162' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc36ad11a722b497bd6d5cf2805a2d62' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8060bb102d5ef2532fcd8a380bd55dca' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f98225b5c14a1c37334eb02f1becc2bf' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29bbeab0b483720fed3e28ede19b54fd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9432f61b5f87fd80c8a188cb61b2e26' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f530c3af11da11fb9f2836c689c6218' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90b76c08c5aa3f36b6465d26bc6f4164' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fbb8458f760c14f4e92a2fd89ed01891' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f19f6f41dbd56044ac39db4627eb73ec' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd04408226e6f2051cf1f21320fc22ba4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f95a904b60d9c4b41d4d353311622421' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40c735b458b2a6a812f0b40b12ee2362' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertGreaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3286c5c9e8d0c4881e374c4a4299dfe5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertGreaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d2abc2af81b1bd029aeeb15f4aa1c75' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertGreaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b61974127c859d2a906b251ab5b67f72' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertGreaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc8a80a4e657682aaa51511ddbe7f670' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertGreaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af0c9630e2c3dde825aa502728d28655' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertGreaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eda912e8f460ff396f601a62d881959f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertLessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b117d245d10ef7881ef1cc9b7f9fb21' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertLessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e48c3a9d4c572a41c7d0b58c152a6f4a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertLessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe53e49353b5955782a9512db72e1a8f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertLessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04619278b707fa45b8aeb996c9b09b4a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertLessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd809287618e561e3483e3ac755a87166' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertLessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff491e552b70670a5146b478186816bb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1516570712816bf96935bdb5579fddf5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79c368f77fc3295dbc85ce5c2c430c56' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28b237b2a23b5155ac67a4593476de20' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55fdbd06e11a7b931b1395868971d19f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6af2c17db1b4e688f39226493f655eb3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be5c82f7e96351f9a615ba4d82056737' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e85ebd14c739b513c50929015b142c2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '320f665ceb22fc5c85eb8450a9ea2e28' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aeee8126c04ac105fedfe02a778e8b08' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd708b027aa044d5c0384ff8d76d29b08' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3e3116660b60e4a5668fedc95880d9f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01ada26ce06ad0ab94bfb35acf67db42' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertStringStartsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '295429a95fa3504379747105bf10a82c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertStringStartsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a14396416a49df1c59f26eae1f4957ca' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertStringStartsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4b95a1c322ab06befd6eab64cf2157a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertStringStartsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfe9818d1e649ed45961c0eb494b82e5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertStringStartsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '372b28b5497b08603c1ff6d9c1fff116' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertStringStartsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd28ba0a216f41c2f5241f108e0f8bb0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de25a6aa593d0e38ddacec7c7e799843' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9c191c6bc973a51880496651190b23b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a5dca69f98729ef9e6f9cc34960f848' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd49954573e7f89d2451317e75a3436cd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3b78a9bde73b59fc334781f46c904f9' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '187d23867ab70fe9aa67ea16e071d315' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22c1b97d05fc68e28ede9799c1822b03' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0488d83a1df5a95cd69c3e605a70d6ce' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6bea40b1824d13ea473ab89c8cc059c3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e15e01eb6ec1996f6adaa3a0e8fa8670' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '431879db0fa5155b6676a85fb8a7ed9e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5d6dad2af9a748e17cc3a01118324ad' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b80a217bc65fd5dc51cc21b909fa695' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b8c5651fdf098015c1b51c591e10d45' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30d41c06b52611ffcb2c19364c76be3b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1abbc6922ec60dff9877b5f7df8118c2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29e92b4bd3c66a5f675732f9c7c9a707' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '538931b9dc9f8fbdbed053090bc447be' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '253fda090d5a18b70b29009271078f6c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a4fc7d0803821cdfbeb58dbb615d84a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29cb60248b4ca7f57e602eaee078902d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c2838bd81117d9a8b572ca4688cdc22' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81449233542ab49d7eef35cf2b29d808' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b9c17761105fa5173d65f0049c3638f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertFileExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41b1b52a36c4b744947f1b3146c881b8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertFileExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa8f3ba559ca87cb54ec3d4e9a158ea3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertFileExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e5db1935b0881e00f4779c961203a18' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertFileNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc5da014d113d50810fd42606cd68d2a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertFileNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15b1ea701e6b6edb96556505c9823e01' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertFileNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14a7e3c65a912e4e2ef0ec884d2c01fc' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertGreaterOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2884ab8ed3600d12181248d3238a96ac' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertGreaterOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1fa188a89a19af445290296a2642e6b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertGreaterOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '272078fe69bec55025047932047a9740' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertLessOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c529a9854ee7bfda54a9cf9eebc890d1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertLessOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd83b7d091aeb1b88f9715e48aaa477c1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertLessOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5da3e175a2d9ac4e2e93299e5bff2d8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6469167a9b860deab3049b0302a331be' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b407ff51df5adb32750094ed95bf3c49' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'efecc4ca1f9eba73cb323e674f792ea1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertArrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b425bf8bb4abea190a9523c6dc4f3e31' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertArrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed75700715ad0a02ba4fa347f8ab9876' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertArrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82681b0276784196187d5212ba21f1b3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertArrayNotHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35cb4eb0428f8656f698fe8f7582968e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertArrayNotHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58ef309e43537bab7e5d02745ffb6ced' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertArrayNotHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b568d78362f67f06eaf893f6a1e2eca5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb597fea01bb095511fb0cf4b06a711c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bf5c00758ed885015e0a2fc7903f46e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9a95f5224bdd962751d70e0704f4490' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6e1d2109bbce031c1ed644e2daf7c1f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1c329966fa778b58f0894c44e714ad5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f29095dd196575aff7234ef9342df9e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4163938e416d78eccc580ba2c76e765d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3681102ca94921f29ae4b32dd1497a99' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21bc4b0c825be6cb160895c5a416c600' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c94ced8595d221d044a15989b9497969' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2af5c32270bb751e2c7e7420cc0b23b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a82ca29e3d3c84d6ee6963ddd59ca411' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'fail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da5da2a5e2b265b923d9c9af2de285e3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToFail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a3f6bb2752d53b92c1a7316eaab9bfe' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryFail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f9b40dd8448f0d101dbce53e129cc34' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertStringContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '525e263f09e4e1ec8d310807c1e1152d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertStringContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a7611a853dd4900ed440022224d3cba' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertStringContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f10ae232d52173e23fa7c2f0f6be438b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertStringNotContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2075c0540cf6dd95c001d0b7ac57a6f6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertStringNotContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '119580a6374a5a1c76c4943481c95035' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertStringNotContainsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d05f0fa36be09018131c71650aaa4ae' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertStringContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e873c256e18f592d864f7e25036cf45' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertStringContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4af15aafc7a51454317a0a1d198a5cbd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertStringContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8026696ae50eed96e70a4cc7871e8709' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertStringNotContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4d00d705f7935b9fb1ffe2fb4919aaa' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertStringNotContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f253bc1c4a6c4e59285278de784a1dd1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertStringNotContainsStringIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '555454069a10ef821c361fcc796b26e2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da98ba650e409869bf71554e63781245' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ccba929b8d4e0fc6a854d59fb09f411' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9fc246615100487e478a26d54125aeb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09a0ac230218e233c57d9885c079779a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90479946ec565abefe5e66f53661bf2a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90988b3e08557ac892aa26325bfcb924' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1250e0f6fe4757c6c27e2c496ea10dd1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe42465dcefa943e17fc82bc0eb2bed2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60d560fd88cc1b7ab34f801d5d406766' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '547954776909ded4f035b878492e8065' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '935dbf8420a833b075b795d147e7c4f2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb7acc6cb1ccfc91d49d810f964fde2f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f61cb871ab1ace6873e2e81f54ff34cb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '639c359f022c80a0d41454e7d5e83bb4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd601ee0f854fe3b033b02558cd470bb7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65f60604e62e0c2f6fac1c06c6cebe83' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f00412869e59119a724a1460d3ba2d3a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e318963ae286e6b1d59f799a10ea2df6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24b2a5036ef5e4318d569227b9d1422d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0ab048a5efcf0272c3959b5061d55ce' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54ca769087f916cd43818c2472c7a3fc' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e809b585211575fdaad95299a6a95c34' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1241b6a0ce423533dd27402626da137' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a1300831060dfd7277000e5ca9a65e3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0e9aedf3bf5fff2a2923acaeae7cb3a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0169c7fbc5a984ac43a9f25dd81a1be7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a68a2a84da8579141d5044bf2bd0a919' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1564b2aa63ed49d832c58521fee952fb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26ecbaa0a67bce86b1b692955536407d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '956bb4da8b28b224426e92cd4a8ff706' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNotArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d499b238a9f70c3479ace952bf4a926' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNotArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afaf86f6a22d119553a3cb21b925cfa4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNotArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee11083be1a8f41a4e87d7e3edf1e0a9' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNotBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c43036e2bcfc443132f2efdab95cce2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNotBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6b4cee4faee151f90546229ae59f143' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNotBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d68654178ebae06eaf58e6f4bb61c67' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNotFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da50ceaed0bd61cb4f7dfae290fc4d98' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNotFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a63f03524465a93d12bd061e06e0dd42' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNotFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a43481b2d362f8b36174a5f2c3b5554' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNotInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02c26c85e22f64b38f81e00757a4dfce' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNotInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7523b0c379f7c335694fce8a7bd178f6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNotInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e812076a1eae4a0b0ce24eff57cc18b1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNotNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23f2d28d78f941e0f80c45b6e377e1a8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNotNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbe80b985cc20ee226a14068c91ee9fd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNotNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aaa59bcb388616d17a33bc9de69cd331' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNotObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ebfbc56ed7ffe20f6177151112c4e05' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNotObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2c7fcb09dbc20e0b6ebd48378c9d4c4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNotObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fde6b09d9d50e2b3428f5b4dfe0535f1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNotResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96c20a4f70248459c6c2b0433b3c3d69' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNotResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd1ce4869103cbe000c3fc1b2fc6ac4a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNotResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '793a900fe8e38de96900d8cc554db620' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNotString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b33a4425deb818deea95373e8c5f6e5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNotString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '272f308ba145608b23358846267f8776' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNotString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '192da30afedf7dce7f547be64351becd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNotScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92936c1cbca19f9472f104302bf5cd88' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNotScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24b92c1cdb85bec38ec0077e0ddfb599' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNotScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3552ec866243ba3f6b5740a494ee6162' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertIsNotCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58aa56b0074184b73d4ecc103c41e88a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertIsNotCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04d5cbe588dd9371adeaf98f91c10371' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertIsNotCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e49d4747b284c7a00c354c46593afd8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '685b4f8ce256491135c9ca08d105c598' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '621b08bf83430c4176150673ac516266' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c972a0ca3f44d6ba6dcf68a1dbcfc4f5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2717e2d2a64b073ce184d2eb00a38780' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6b10d543cf8c3698d22428d233e2a70' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da12c95a1d5b23e79713b289aa4efd48' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec831edc8f6cafbf61d8d84eecc62773' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2127f2c7ba88f51d859e325670b4efb4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cded201f921339ec4e620ff88a291e5d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c142118ac068de0dab896c6d69576672' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2e89f98096f1610ae538c46f77bbf78' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc458a7d468d8bacfa67ac780f042166' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1812ae52427ecf9097074e3f681d0ea5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4037f1e33de412399241a7f9884feed0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a67388d96d3c2b1b7d07efa652966881' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'assertNotEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3c6aa7ecf4101e031565b03584c1a73' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToAssertNotEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8814e0556cf3f426211859ea37843822' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryAssertNotEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad769fe6dff9afe8003e8badd4b853f7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'haveHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28f740a34293b8df595362e6a2fd704c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'deleteHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93aef775ddbe0634f2081dbb83a24723' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDeleteHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f13fff168506bee3dc28ec7dd698cf5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDeleteHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76be87b37977ed3356ab9713bcaad79c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1209fec8413f8d93426ad7e849e5e851' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3faf781cad331a75da629039be84f255' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c4e8ee05297d2310627c9363627dd31' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7066fab9b5b2d5d3de3ccdb041d81595' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aea3fe171e0e49792c38657884d5433e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8050d01e811703f7bdf17dc335032134' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6974b26a6e909c001dc7a90c97997976' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '530101cf6b83c09878d457fbae680070' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeHttpHeaderOnce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edf1e92367651481e2945d2199f7fcc6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeHttpHeaderOnce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '388e17bd3abdbdb6c0c227b9c732f2f4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeHttpHeaderOnce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b3fe2ba59b7d18813f6e0b4430f7e92' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeHttpHeaderOnce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b36ad08a099d003ff8b2fa34b4703fc3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5811f8a72cd40fa839a45a12f37e1f2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabHttpHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8f79ed3fdd96be14b68799946ddb175' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'amHttpAuthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '994ec51208735c888693a09ebb5702a2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'amDigestAuthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8308938626fb108ed51370e11d33a5ed' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'amBearerAuthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13da3458cb862bdc461925985f89f384' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'amNTLMAuthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cfef19093bb0fe0e7cfe854750a9cb6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'amAWSAuthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82bc962facbc26ce65482873f5424b33' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'sendPOST',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c8252d4eb96cd008599cd91103e3f5a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSendPOST',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d19789c1c894739360f585e9268b52b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySendPOST',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1826393fdc543c94df020289a7b7f0bf' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'sendHEAD',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2de3b6f87f361812ee51ce718aafe48a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSendHEAD',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe0160a9ea785f340873c6c711608a03' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySendHEAD',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa24ad2f87c4cbb583dfab56081016b1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'sendOPTIONS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e8b2afbc6e70eedb9ebfa10a2573ea6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSendOPTIONS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '268d9a5de2907b12966d4cacc07cb1a8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySendOPTIONS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42e70f82bc601afb52174895ff7ee579' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'sendGET',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b59a7085e35f03ec7eb6031104ed012' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSendGET',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57f323989121e1f6252d7aec285de955' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySendGET',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '556968b11e318d2115bd07cbc3df0de1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'sendPUT',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a31f5f522a33f32cf454c4373f3b3396' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSendPUT',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ab4d50521c6e8b611ea3e71299ccf1d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySendPUT',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e43762588f7550dedfb4e69a64e396f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'sendPATCH',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fad393ece1fb40861371bb916b7916e6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSendPATCH',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffbaf80a201e1482c7f72bfc55aa02ef' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySendPATCH',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1ba159939f5cde8ad98760333424e81' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'sendDELETE',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5eda9e452a32aa66475ae58b8951e1ee' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSendDELETE',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bdb89a2297a1c7060574ab27023f032' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySendDELETE',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdf1e1fe4e60cb26747b8c518d11d74e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'sendLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f7599d782d536de5b0402f82a38b5e3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSendLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e967b928abcc47f59cbe599b81b1be7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySendLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0f1f07ef7e0950d78250bd37946e9b8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'sendUNLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e90aae3b2b15babcc119a848813d544' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSendUNLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2d8c6ff084441ae90192cc08bf9192c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySendUNLINK',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1443d649d6ad43ddc6ca9b8b14bea1f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseIsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8193466c0d25d6935ddbef8b8f365588' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseIsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d395f79ae86a99568751052cc7cc31f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseIsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '309307784eaee1d3c9eedef318d1163e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseIsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee8e2965053ae9a63adc302570511b84' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e91285ccf6f5f8a72c9ef8a605c2b16b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95b5833b521acf24a2417d80dad0a75e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3186d327ecfc42847d3854bbc769d1a4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb4efbdb1e16c6faaaa0c8deeff5d114' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '808fb12dd75b4cf3617060fb62cecdf7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb4dcb2daf60539d47f16b5cdb07a8fb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0142041e2f6606d343775034feae2181' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeResponseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd13ddef67d87f555156a36668cc6cca6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '502ed2b70c3e200cd1b65077216ccbd1' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56cc792a3780b897e83cb5d1a9837011' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c1ce555a9d58761dd8f71e8a1013417' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ce504d34f252f2b18406a6f8043104c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8b8aa05645e99c90f08bfc9d9254ed4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a667685053794929d015adf9a3f1a30' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabDataFromResponseByJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6171d706b5ddee94ee70bed1139b01a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabDataFromResponseByJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'efbc0acee8477922c1ee55c4434c7418' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d0eacaf55801ac501cdfbbf441dbb7c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f8c598b6f77ba5a6719279ed83d229d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d6a39b3fb4405a7e5441e31e787b693' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fd23addc942c2ecd171582fea3b0712' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2c09f66f2714739b2000cbf5bbb2a9d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51db68bbed41c8f5a2f78956c1bbd4a8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5607e6ebb31e29f09239501042fc0ed0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeResponseJsonMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f2866941b2ad38d559b16059dde3a76' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70e4a63fc0b350dc224294f1b91ddae2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45e447b3ea4710b3daedb17b27a51543' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b38fe9374f94f859775033abbae401e0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2adb64b136bca7713411e72bcb74628' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0c8fe7f39b6118c11554a85bbafbf6f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f9c1965a89e11aa4c5c8699f39c6179' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb0ecb6eaf4e28addb31053e4cf0f872' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeResponseJsonMatchesJsonPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4303945454abb1abe2a1b63b8a83a504' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '358f403db90c3dd9ff3c960d4a35f54a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e0aa821fd6e0b593fa918cabce75470' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16f7344ade597f5b73870ee8bce1731a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeResponseContainsJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ede925fa24ee920e4309112ac5840e5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cce6c2e15a720e1c625a1473e5071b1a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a754ef47a140198dc66efe72020b756' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7c1d76427f93700048fb63b9b4766d3' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '072d17d9947ee42a2c54ee55d01b307f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe54497ddc647bf2179dcc10faaabb09' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa9781d506e2881ae672c6dfdf5b5268' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf6d9223ce0b1ff25241a482fbac196e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeResponseMatchesJsonType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36ecea3b5eb7008dc4d7515eb1e8d781' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90d6b3c8bdf0a3335c7bbae8c8dc8257' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fed0875b3db589afa1fa4f564e54520d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b4bcc9b8f838a8e9038adc8eee975a0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d1f01fa40336f035c0a46dee5139d27' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'deda85f2491636ea6529e7890b504caa' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f283ebb90c497006e2fd01036f95001' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '217262bc98f19678e05edceeea53e63c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '278e4b9cd8feda97087122d944dc383f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bfb156d72500fa1b714377c9e89566d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a5b66ad137c23f6b9136853da4e475b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa6a42d99742d43c450fa58fc7ec36a8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeResponseCodeIs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80c6a7440224d48733ebcdc4bf19fe6b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseCodeIsSuccessful',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d747e908cfbc511b8f613f03f3f3ac6' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseCodeIsSuccessful',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '361ba919e7e5b2f428cbfc4199409530' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseCodeIsSuccessful',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '216819ffffe34459aa31a2a40f66c001' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseCodeIsSuccessful',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fce9044e06e56b0139800fc3540e28be' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseCodeIsRedirection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'baa528fb34da91fc9a67d25ed4b004e5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseCodeIsRedirection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c2f539c39c760cf450c9c387fb8698d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseCodeIsRedirection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1b90d64369b10cc6a6b8096a2ebaa41' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseCodeIsRedirection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8899bec9bfdfabee7c239d9d7ef1ff29' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseCodeIsClientError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '401e9015d385d91d41741c6514f630d8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseCodeIsClientError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55cb2c455c9e616e245a2474109dc301' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseCodeIsClientError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1a0f12a56018b5bbba2a4b615306579' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseCodeIsClientError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7571c7802634e920bb890c4381fc3386' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseCodeIsServerError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b4b264146ef7f910be3e9662d3bc97c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseCodeIsServerError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe9021acda3499958e2564e33dbab31c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseCodeIsServerError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b49fcfe41998984b112c4b3e4fc25c2e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseCodeIsServerError',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23e1af76996fd9f986cd887c3354e077' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeResponseIsXml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52283b7ebf550731d80dccacab01303f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeResponseIsXml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4cf35b94bf9ad81e58371b3245b4bcd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeResponseIsXml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fb55ca119556790690dbf326c7a20ea' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeResponseIsXml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6481c0dc3d1a68d68b018b49dd6a4fc5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c4aae55d097d27a79fcb10bc6b1b99f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bedc857e823b7f234136e558059de72e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae923d455a35c8fa6c10e3171845b59d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e31ba28f88f00d625bc2e691621c297' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c83024ed72b68fa562ecb8d864dc7fd' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e503f2a0338f1635a408644ec780d6d8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afffb94015f13dc5b35720ed3c037a57' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeXmlResponseMatchesXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76943cc306e0300edd1a7562c61450ed' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabTextContentFromXmlElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4ea9ffc3a3bd47b37350a1655af9aff' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabTextContentFromXmlElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c2c566194153e4a81c9b84694a32897' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'grabAttributeFromXmlElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'defc26ea7cb604bdabf6822455e8f73e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryGrabAttributeFromXmlElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '435f8a2923e960a4874940e49cafd486' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be3896d48723840b906845f087abf3f7' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19fff5a162abeecf29d47118b840925d' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '449ec7ce8968ea183ee93395bab79aba' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7bf12aed727bc877d307ec8b4a205c58' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a151f4337009550eb8291f7792b15e5' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4847639da0754a7970bf5e74bb9c269b' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcfcc8ccf2d1f8fe48c39dec03ebf77f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeXmlResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f127e149f054c17ca414783cdeeb5ff' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48890f5b11868ef91efcb40ce1db9eaf' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e29ab61f4774f700919005baa8106ef0' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b197516e0dbece47a92d7fde0e6f6b35' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aba4827981a7aa1ea04084009700c0a4' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f09383dde6a3bd175526ee4b0e8b0363' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8cc99be22b6a934e7d0a07f22f76d08' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51bb61692c5428e82561cefde612a096' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeXmlResponseIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e21361d4d3caff6667e98d63b6da5e7e' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'seeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '431d3b1d6ea8f7d36a7e557ad46cba76' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db2c5a765b47c540d9aa80a2b9c93dc2' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retrySeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e2ea574637140519795d137a4f2c982' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'canSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42627f3b7ff38ca81679497ba19adffa' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'dontSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec5dd969b0e428bc68db304085bdfd1c' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToDontSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99afb499e1b257dc04fd29a112059bec' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryDontSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64e0f74ed55452cd8dac13e078a30f58' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'cantSeeBinaryResponseEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa34350e18571dceb818e3d95cf0ddeb' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'stopFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b307450757f5db6d373cc10896f78a8' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToStopFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7b2920ac2c3cd9f768cf76c6ab9a02a' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryStopFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6a53f7ac4c954c8e702daea54157485' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'startFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4032afbfd37487614c5e517b53fd9b1f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'tryToStartFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed9a998d581795ba407de26428888c9f' => 
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
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'retryStartFollowingRedirects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '503ee465bc56cd616db8c8085d9d84ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Acceptance
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PageGher',
         'uses' => 
        array (
          'acceptancetesteractions' => '_generated\\AcceptanceTesterActions',
          'acceptancetester' => 'AcceptanceTester',
          'actor' => 'Codeception\\Actor',
          'scenario' => 'Codeception\\Scenario',
          'exception' => 'Exception',
          'acceptance' => 'Helper\\Acceptance',
          'login' => 'Page\\Login',
        ),
         'className' => 'PageGher\\LoginGher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4c434d8d82ec441b386fc743af5a1dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var AcceptanceTester
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PageGher',
         'uses' => 
        array (
          'acceptancetesteractions' => '_generated\\AcceptanceTesterActions',
          'acceptancetester' => 'AcceptanceTester',
          'actor' => 'Codeception\\Actor',
          'scenario' => 'Codeception\\Scenario',
          'exception' => 'Exception',
          'acceptance' => 'Helper\\Acceptance',
          'login' => 'Page\\Login',
        ),
         'className' => 'PageGher\\LoginGher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a854631d340e229099a9625f3399d912' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @When I log in to the site, I need to prepare AcceptanceTester, Acceptance, and Scenario
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PageGher',
         'uses' => 
        array (
          'acceptancetesteractions' => '_generated\\AcceptanceTesterActions',
          'acceptancetester' => 'AcceptanceTester',
          'actor' => 'Codeception\\Actor',
          'scenario' => 'Codeception\\Scenario',
          'exception' => 'Exception',
          'acceptance' => 'Helper\\Acceptance',
          'login' => 'Page\\Login',
        ),
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'iLogInToTheSiteINeedToPrepareAcceptanceTesterAcceptanceAndScenario',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f607f59a543e9b43e764b59a103637a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @Given order to login to the account we are clicking on the button button
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PageGher',
         'uses' => 
        array (
          'acceptancetesteractions' => '_generated\\AcceptanceTesterActions',
          'acceptancetester' => 'AcceptanceTester',
          'actor' => 'Codeception\\Actor',
          'scenario' => 'Codeception\\Scenario',
          'exception' => 'Exception',
          'acceptance' => 'Helper\\Acceptance',
          'login' => 'Page\\Login',
        ),
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'orderToLoginToTheAccountWeAreClickingOnTheButtonButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f55fcdde39a24e33230bb5985d215c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @Given inserting the field
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PageGher',
         'uses' => 
        array (
          'acceptancetesteractions' => '_generated\\AcceptanceTesterActions',
          'acceptancetester' => 'AcceptanceTester',
          'actor' => 'Codeception\\Actor',
          'scenario' => 'Codeception\\Scenario',
          'exception' => 'Exception',
          'acceptance' => 'Helper\\Acceptance',
          'login' => 'Page\\Login',
        ),
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'insertingTheField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9e65f892c592aeeacce069744322123' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @When we are log in into account, we need to check the header
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PageGher',
         'uses' => 
        array (
          'acceptancetesteractions' => '_generated\\AcceptanceTesterActions',
          'acceptancetester' => 'AcceptanceTester',
          'actor' => 'Codeception\\Actor',
          'scenario' => 'Codeception\\Scenario',
          'exception' => 'Exception',
          'acceptance' => 'Helper\\Acceptance',
          'login' => 'Page\\Login',
        ),
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'weAreLogInIntoAccountWeNeedToCheckTheHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7cda16a2128c11b6fc0a5a6042609249' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @When we finish checking we need to check whether an click is exist before exiting
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PageGher',
         'uses' => 
        array (
          'acceptancetesteractions' => '_generated\\AcceptanceTesterActions',
          'acceptancetester' => 'AcceptanceTester',
          'actor' => 'Codeception\\Actor',
          'scenario' => 'Codeception\\Scenario',
          'exception' => 'Exception',
          'acceptance' => 'Helper\\Acceptance',
          'login' => 'Page\\Login',
        ),
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'weFinishCheckingWeNeedToCheckWhetherAnClickIsExistBeforeExiting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a68dbec53c0560ecbe39955b42270be8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @When we are clicking exit button
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PageGher',
         'uses' => 
        array (
          'acceptancetesteractions' => '_generated\\AcceptanceTesterActions',
          'acceptancetester' => 'AcceptanceTester',
          'actor' => 'Codeception\\Actor',
          'scenario' => 'Codeception\\Scenario',
          'exception' => 'Exception',
          'acceptance' => 'Helper\\Acceptance',
          'login' => 'Page\\Login',
        ),
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'weAreClickingExitButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c1451ba757ae38ac9726f7acea1cae4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @When I log in to the site I click to my Account link
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PageGher',
         'uses' => 
        array (
          'acceptancetesteractions' => '_generated\\AcceptanceTesterActions',
          'acceptancetester' => 'AcceptanceTester',
          'actor' => 'Codeception\\Actor',
          'scenario' => 'Codeception\\Scenario',
          'exception' => 'Exception',
          'acceptance' => 'Helper\\Acceptance',
          'login' => 'Page\\Login',
        ),
         'className' => 'PageGher\\LoginGher',
         'functionName' => 'iLogInToTheSiteIclickToMyAccountLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '557a927c9729b46a469ea2adb4647e48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * 
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PageGher',
         'uses' => 
        array (
          'acceptancetesteractions' => '_generated\\AcceptanceTesterActions',
          'acceptancetester' => 'AcceptanceTester',
          'actor' => 'Codeception\\Actor',
          'scenario' => 'Codeception\\Scenario',
          'exception' => 'Exception',
          'acceptance' => 'Helper\\Acceptance',
          'login' => 'Page\\Login',
        ),
         'className' => 'PageGher\\LoginGher',
         'functionName' => NULL,
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