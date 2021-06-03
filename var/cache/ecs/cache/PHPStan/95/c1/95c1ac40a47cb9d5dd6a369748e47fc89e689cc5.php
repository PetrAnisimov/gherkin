<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/hamster/Desktop/regression/vendor/codeception/codeception/src/Codeception/Module.php-1571490955,/home/hamster/Desktop/regression/vendor/codeception/codeception/src/Codeception/Util/Shared/Asserts.php-1571490955',
   'data' => 
  array (
    '3c3d0753a5df56ac4dd01d0d12f3295d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Basic class for Modules and Helpers.
 * You must extend from it while implementing own helpers.
 *
 * Public methods of this class start with `_` prefix in order to ignore them in actor classes.
 * Module contains **HOOKS** which allow to handle test execution routine.
 *
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90d1bb63c31f64b97e90fe1d8a75b6f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that two variables are equal.
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float  $delta
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ec380b79cf54d8c45e3d4ae314af762' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that two variables are not equal
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float  $delta
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fb9642a26ef30a2b72ec8ef4628d1e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that two variables are same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '350786f745e5f13b7e191c3ed9623ca3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that two variables are not same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertNotSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f86e08b561357b0e3a6dd7ad67fba61c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that actual is greater than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertGreaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '232ff8d34293d69702fed93388942bc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that actual is greater or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertGreaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7de0cefa2aed6b6bc9da9dae4d383b3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that actual is less than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertLessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f502fa91dd54e37881acab102f159cb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that actual is less or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertLessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7d8fc6069f503f0bdfe2999c767e10e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that haystack contains needle
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba40d491a9c422c53bb25fd0de29b5f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that haystack doesn\'t contain needle.
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1b7c1d894f23641f27c71a8def1fa84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that string match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53c356dffb27c580472c887a8a59f02c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that string not match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertNotRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c856ac0cbaaea722d4c568ce0a45e7db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that a string starts with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertStringStartsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86335abbe9fd37337c513fa4d08ce2d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that a string doesn\'t start with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertStringStartsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af786561ca6af83f16463b1b3c76ffcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that variable is empty.
     *
     * @param        $actual
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '013304401b57bbf7a611002803710682' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that variable is not empty.
     *
     * @param        $actual
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertNotEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a36bf10f493fd2b5cbccc2c3cc10bac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that variable is NULL
     *
     * @param        $actual
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74b2df1ab34fc014dd444fc94b613e8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that variable is not NULL
     *
     * @param        $actual
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertNotNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65a1622adbeb03c61da8d6b1c7b001e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that condition is positive.
     *
     * @param        $condition
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c058d9b319734eec2a42f663db04ec1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that the condition is NOT true (everything but true)
     *
     * @param        $condition
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertNotTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a411caf791e85c8d0750317c74a45012' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that condition is negative.
     *
     * @param        $condition
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '986f138162a4dcd6c542c6a080881a73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that the condition is NOT false (everything but false)
     *
     * @param        $condition
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertNotFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5a31b7df9bd145e9019b795d67f53ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     *
     * @param        $haystack
     * @param        $constraint
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertThat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf264401cae4fa32f651f5789094a117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that haystack doesn\'t attend
     *
     * @param        $haystack
     * @param        $constraint
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertThatItsNot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a28e9df8ca96e55b1a7200022156c4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if file exists
     *
     * @param string $filename
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertFileExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffeb15934fd9f431bcfffd55c2fe18c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if file doesn\'t exist
     *
     * @param string $filename
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertFileNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05ac46d003c07fc06b63434f3cebb5e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $expected
     * @param $actual
     * @param $description
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertGreaterOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36079b0aff43eeada6e3ce0f44b4b279' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $expected
     * @param $actual
     * @param $description
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertLessOrEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e81feebcd98bc5afba46a3e68793f952' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $actual
     * @param $description
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertIsEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e223cc4165aee8ad6dff3e778cb9ad7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $key
     * @param $actual
     * @param $description
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertArrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c501ba0d597d354715f11471fde1e27e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $key
     * @param $actual
     * @param $description
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertArrayNotHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ba4e58fb407d78e70f73597776a12b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that array contains subset.
     *
     * @param array  $subset
     * @param array  $array
     * @param bool   $strict
     * @param string $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertArraySubset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd78c8b5af80805316c55009dd5e78d2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $expectedCount
     * @param $actual
     * @param $description
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b27bd0a3b18e2f52a054e2b8ace04e6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $class
     * @param $actual
     * @param $description
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5fec5240817e115d440c9c07abeea25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $class
     * @param $actual
     * @param $description
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertNotInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ac3671b5632971f154ab956ac99ad22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $type
     * @param $actual
     * @param $description
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'assertInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8fe15fff14e25c08bf80b78ab41dd67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Fails the test with message.
     *
     * @param $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception\\Util\\Shared',
         'uses' => 
        array (
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'fail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b37b08ce687ec3d8b730cebcd2d553c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ModuleContainer
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fc99cda0575c98176f6d56535a198e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * By setting it to false module wan\'t inherit methods of parent class.
     *
     * @var bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a51a5c01919dc971c89d1fde265d8f31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Allows to explicitly set what methods have this class.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd02dad9f6788b88a245c85bc74ce2aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Allows to explicitly exclude actions from module.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9237279aa6fbb82c2c98fa8ed8da0295' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Allows to rename actions
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd16923be1d26cbdb567a545064a7ba6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Module constructor.
     *
     * Requires module container (to provide access between modules of suite) and config.
     *
     * @param ModuleContainer $moduleContainer
     * @param array|null $config
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4d45ed817592d711640273b14932ed5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Allows to define initial module config.
     * Can be used in `_beforeSuite` hook of Helpers or Extensions
     *
     * ```php
     * <?php
     * public function _beforeSuite($settings = []) {
     *     $this->getModule(\'otherModule\')->_setConfig($this->myOtherConfig);
     * }
     * ```
     *
     * @param $config
     * @throws Exception\\ModuleConfigException
     * @throws ModuleException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_setConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7dbc317e1df4791f9ca9cc01211e83e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Allows to redefine config for a specific test.
     * Config is restored at the end of a test.
     *
     * ```php
     * <?php
     * // cleanup DB only for specific group of tests
     * public function _before(Test $test) {
     *     if (in_array(\'cleanup\', $test->getMetadata()->getGroups()) {
     *         $this->getModule(\'Db\')->_reconfigure([\'cleanup\' => true]);
     *     }
     * }
     * ```
     *
     * @param $config
     * @throws Exception\\ModuleConfigException
     * @throws ModuleException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_reconfigure',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e19e92da416f3a60d2b17820421cf926' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * HOOK to be executed when config changes with `_reconfigure`.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'onReconfigure',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7285202f026f31945eb6f59f0018ae7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reverts config changed by `_reconfigure`
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_resetConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ba2eb1fab80fa17240cdb329a8c7078' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Validates current config for required fields and required packages.
     *
     * @throws Exception\\ModuleConfigException
     * @throws ModuleException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'validateConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28d562a944de48ae820848d78d5c56cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a module name for a Module, a class name for Helper
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_getName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdc442de6e4fdbf7e627698a99d57f0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if a module has required fields
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_hasRequiredFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0d8b5475a3e7eae18574f4238a38bc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * **HOOK** triggered after module is created and configuration is loaded
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_initialize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f87774845914c7340834ddf05076614' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * **HOOK** executed before suite
     *
     * @param array $settings
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_beforeSuite',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef56d3ddc04afa5d7e585f86ea94396f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * **HOOK** executed after suite
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_afterSuite',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0dc1fed4d161108f5053fabe93551b98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * **HOOK** executed before step
     *
     * @param Step $step
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_beforeStep',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a0b956763ee0ebac199e9e728084516' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * **HOOK** executed after step
     *
     * @param Step $step
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_afterStep',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c65997a2ac8a0b7c9f097e59f4a9796c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * **HOOK** executed before test
     *
     * @param TestInterface $test
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_before',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2afba45d7ac630594a2e604b0d2e7546' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * **HOOK** executed after test
     *
     * @param TestInterface $test
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_after',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fbee5c4b6c92c8ff0c8cf2c10935c0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * **HOOK** executed when test fails but before `_after`
     *
     * @param TestInterface $test
     * @param \\Exception $fail
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_failed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa13642b35d48928dfaec6e0b9a70ca5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Print debug message to the screen.
     *
     * @param $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'debug',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b174a666e6f5474798000cc73b2e54d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Print debug message with a title
     *
     * @param $title
     * @param $message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'debugSection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '544d17730cd57088d4c3da9f7f0e0bbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Short text message to an amount of chars
     *
     * @param $message
     * @param $chars
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'shortenMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a124d822551de33e4e2d3bb1c57ff83e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that module is enabled.
     *
     * @param $name
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'hasModule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ef22b32faee1fe86025cec903739304' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get all enabled modules
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'getModules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19236c5bf468881768cff00f5e5c8221' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get another module by its name:
     *
     * ```php
     * <?php
     * $this->getModule(\'WebDriver\')->_findElements(\'.items\');
     * ```
     *
     * @param $name
     * @return Module
     * @throws ModuleException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => 'getModule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a57a4b271b9fe2bf6d0a8987f85bbc19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get config values or specific config item.
     *
     * @param mixed $key
     * @return mixed the config item\'s value or null if it doesn\'t exist
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Codeception',
         'uses' => 
        array (
          'moduleexception' => 'Codeception\\Exception\\ModuleException',
          'requirespackage' => 'Codeception\\Lib\\Interfaces\\RequiresPackage',
          'modulecontainer' => 'Codeception\\Lib\\ModuleContainer',
          'asserts' => 'Codeception\\Util\\Shared\\Asserts',
        ),
         'className' => 'Codeception\\Module',
         'functionName' => '_getConfig',
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