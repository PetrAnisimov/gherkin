<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/hamster/Desktop/regression/vendor/codeception/codeception/src/Codeception/Util/Locator.php-1571490955',
   'data' => 
  array (
    'fc1ab732efa73f6d3fd65f52ab63b5da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Set of useful functions for using CSS and XPath locators.
 * Please check them before writing complex functional or acceptance tests.
 *
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5167401a8ff006ff62c3d70601d7ba3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Applies OR operator to any number of CSS or XPath selectors.
     * You can mix up CSS and XPath selectors here.
     *
     * ```php
     * <?php
     * use \\Codeception\\Util\\Locator;
     *
     * $I->see(\'Title\', Locator::combine(\'h1\',\'h2\',\'h3\'));
     * ?>
     * ```
     *
     * This will search for `Title` text in either `h1`, `h2`, or `h3` tag.
     * You can also combine CSS selector with XPath locator:
     *
     * ```php
     * <?php
     * use \\Codeception\\Util\\Locator;
     *
     * $I->fillField(Locator::combine(\'form input[type=text]\',\'//form/textarea[2]\'), \'qwerty\');
     * ?>
     * ```
     *
     * As a result the Locator will produce a mixed XPath value that will be used in fillField action.
     *
     * @static
     *
     * @param $selector1
     * @param $selector2
     *
     * @throws \\Exception
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'combine',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95f0b3f03b6dfad5cb247d46f00cbc60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Matches the *a* element with given URL
     *
     * ```php
     * <?php
     * use \\Codeception\\Util\\Locator;
     *
     * $I->see(\'Log In\', Locator::href(\'/login.php\'));
     * ?>
     * ```
     *
     * @static
     *
     * @param $url
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'href',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ebbc43bd006e45d5ffd4b8d66c46d7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Matches the element with given tab index
     *
     * Do you often use the `TAB` key to navigate through the web page? How do your site respond to this navigation?
     * You could try to match elements by their tab position using `tabIndex` method of `Locator` class.
     * ```php
     * <?php
     * use \\Codeception\\Util\\Locator;
     *
     * $I->fillField(Locator::tabIndex(1), \'davert\');
     * $I->fillField(Locator::tabIndex(2) , \'qwerty\');
     * $I->click(\'Login\');
     * ?>
     * ```
     *
     * @static
     *
     * @param $index
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'tabIndex',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2aff7d523e843554b3c522791dadf0b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Matches option by text:
     *
     * ```php
     * <?php
     * use Codeception\\Util\\Locator;
     *
     * $I->seeElement(Locator::option(\'Male\'), \'#select-gender\');
     * ```
     *
     * @param $value
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'option',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f45449e3e8e350cb7542e7928c4ce918' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds element by it\'s attribute(s)
     *
     * ```php
     * <?php
     * use \\Codeception\\Util\\Locator;
     *
     * $I->seeElement(Locator::find(\'img\', [\'title\' => \'diagram\']));
     * ```
     *
     * @static
     *
     * @param $element
     * @param $attributes
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'find',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6a9a37e48f3bb0546cecae3ef333844' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that provided string is CSS selector
     *
     * ```php
     * <?php
     * Locator::isCSS(\'#user .hello\') => true
     * Locator::isCSS(\'body\') => true
     * Locator::isCSS(\'//body/p/user\') => false
     * ```
     *
     * @param $selector
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'isCSS',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6470c320a11668be14e652b0a000168' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that locator is an XPath
     *
     * ```php
     * <?php
     * Locator::isXPath(\'#user .hello\') => false
     * Locator::isXPath(\'body\') => false
     * Locator::isXPath(\'//body/p/user\') => true
     * ```
     *
     * @param $locator
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'isXPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '335b6a4546457a00985ec6d15b94537d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $locator
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'isPrecise',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55bab718c53abe3890f1850127b607be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that a string is valid CSS ID
     *
     * ```php
     * <?php
     * Locator::isID(\'#user\') => true
     * Locator::isID(\'body\') => false
     * Locator::isID(\'//body/p/user\') => false
     * ```
     *
     * @param $id
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'isID',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40103226079f1bc72a3710bf93e74c10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that a string is valid CSS class
     *
     * ```php
     * <?php
     * Locator::isClass(\'.hello\') => true
     * Locator::isClass(\'body\') => false
     * Locator::isClass(\'//body/p/user\') => false
     * ```
     *
     * @param $class
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'isClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '014786679636e453038279e317970519' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Locates an element containing a text inside.
     * Either CSS or XPath locator can be passed, however they will be converted to XPath.
     *
     * ```php
     * <?php
     * use Codeception\\Util\\Locator;
     *
     * Locator::contains(\'label\', \'Name\'); // label containing name
     * Locator::contains(\'div[@contenteditable=true]\', \'hello world\');
     * ```
     *
     * @param $element
     * @param $text
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'contains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ce5236cb865290cde04821c5e136cce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Locates element at position.
     * Either CSS or XPath locator can be passed as locator,
     * position is an integer. If a negative value is provided, counting starts from the last element.
     * First element has index 1
     *
     * ```php
     * <?php
     * use Codeception\\Util\\Locator;
     *
     * Locator::elementAt(\'//table/tr\', 2); // second row
     * Locator::elementAt(\'//table/tr\', -1); // last row
     * Locator::elementAt(\'table#grind>tr\', -2); // previous than last row
     * ```
     *
     * @param string $element CSS or XPath locator
     * @param int $position xpath index
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'elementAt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7c72dc1eb2747be08cbf5437848f0b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Locates first element of group elements.
     * Either CSS or XPath locator can be passed as locator,
     * Equal to `Locator::elementAt($locator, 1)`
     *
     * ```php
     * <?php
     * use Codeception\\Util\\Locator;
     *
     * Locator::firstElement(\'//table/tr\');
     * ```
     *
     * @param $element
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'firstElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d85a6fadb3ce8b723fe6377233c4639' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Locates last element of group elements.
     * Either CSS or XPath locator can be passed as locator,
     * Equal to `Locator::elementAt($locator, -1)`
     *
     * ```php
     * <?php
     * use Codeception\\Util\\Locator;
     *
     * Locator::lastElement(\'//table/tr\');
     * ```
     *
     * @param $element
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'lastElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ee54a7cb148a94e6bad71687c0a3fc3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Transforms strict locator, \\Facebook\\WebDriver\\WebDriverBy into a string represenation
     *
     * @param $selector
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util',
         'uses' => 
        array (
          'webdriverby' => 'Facebook\\WebDriver\\WebDriverBy',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'parseexception' => 'Symfony\\Component\\CssSelector\\Exception\\ParseException',
          'translator' => 'Symfony\\Component\\CssSelector\\XPath\\Translator',
        ),
         'className' => 'Codeception\\Util\\Locator',
         'functionName' => 'humanReadableString',
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