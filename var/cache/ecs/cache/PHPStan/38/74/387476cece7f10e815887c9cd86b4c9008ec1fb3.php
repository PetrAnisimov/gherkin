<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/tmp/PHPStantemp_folder2313/tests/acceptance/CheckInfoCest.php-1622546154',
   'data' => 
  array (
    '48de7cc666d9e0d452ec44fa4fc4cb33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @Description("Тест проверки OPT-IN в Личном Кабинете (ЛК) ")
 * @Title("CheckInfoTest")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'scenario' => 'Codeception\\Scenario',
          'locator' => 'Codeception\\Util\\Locator',
          'acceptance' => 'Helper\\Acceptance',
          'account' => 'Page\\Account',
          'login' => 'Page\\Login',
          'main' => 'Page\\Main',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
          'title' => 'Yandex\\Allure\\Adapter\\Annotation\\Title',
        ),
         'className' => 'CheckInfoCest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a32468f6082232bfbfc37c6f0496de36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Login
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'scenario' => 'Codeception\\Scenario',
          'locator' => 'Codeception\\Util\\Locator',
          'acceptance' => 'Helper\\Acceptance',
          'account' => 'Page\\Account',
          'login' => 'Page\\Login',
          'main' => 'Page\\Main',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
          'title' => 'Yandex\\Allure\\Adapter\\Annotation\\Title',
        ),
         'className' => 'CheckInfoCest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6076dc827a259eebe34343d669442afd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Account
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'scenario' => 'Codeception\\Scenario',
          'locator' => 'Codeception\\Util\\Locator',
          'acceptance' => 'Helper\\Acceptance',
          'account' => 'Page\\Account',
          'login' => 'Page\\Login',
          'main' => 'Page\\Main',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
          'title' => 'Yandex\\Allure\\Adapter\\Annotation\\Title',
        ),
         'className' => 'CheckInfoCest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fda10c7b8027805da0bb9726ffedac0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var Main
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'scenario' => 'Codeception\\Scenario',
          'locator' => 'Codeception\\Util\\Locator',
          'acceptance' => 'Helper\\Acceptance',
          'account' => 'Page\\Account',
          'login' => 'Page\\Login',
          'main' => 'Page\\Main',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
          'title' => 'Yandex\\Allure\\Adapter\\Annotation\\Title',
        ),
         'className' => 'CheckInfoCest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9a31c59749d07e73f3e7c37d8d4dddc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @Description("Вход в аккаунт, запускается перед каждым тестом")
     *
     * @param AcceptanceTester $I
     * @param Acceptance $acceptance
     * @param Scenario $scenario
     *
     * @throws Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'scenario' => 'Codeception\\Scenario',
          'locator' => 'Codeception\\Util\\Locator',
          'acceptance' => 'Helper\\Acceptance',
          'account' => 'Page\\Account',
          'login' => 'Page\\Login',
          'main' => 'Page\\Main',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
          'title' => 'Yandex\\Allure\\Adapter\\Annotation\\Title',
        ),
         'className' => 'CheckInfoCest',
         'functionName' => '_before',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9320347e23d80b6e6adc0d7c88855ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Перейти в раздел Мои предпочтения
     *     -> Выбрать способ связи
     *     -> Сохранить
     *     -> Проверить что способ связи сохранился")
     *
     * @throws Exception
     * @Title("checkOptIn")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'scenario' => 'Codeception\\Scenario',
          'locator' => 'Codeception\\Util\\Locator',
          'acceptance' => 'Helper\\Acceptance',
          'account' => 'Page\\Account',
          'login' => 'Page\\Login',
          'main' => 'Page\\Main',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
          'title' => 'Yandex\\Allure\\Adapter\\Annotation\\Title',
        ),
         'className' => 'CheckInfoCest',
         'functionName' => 'checkOptIn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c13aca723a65c804cbd259d3820b72cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Перейти в раздел Мои заказы
     *     -> Проверить подзаголовки")
     *
     * @throws Exception
     * @Title("checkTextWithin")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'scenario' => 'Codeception\\Scenario',
          'locator' => 'Codeception\\Util\\Locator',
          'acceptance' => 'Helper\\Acceptance',
          'account' => 'Page\\Account',
          'login' => 'Page\\Login',
          'main' => 'Page\\Main',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
          'title' => 'Yandex\\Allure\\Adapter\\Annotation\\Title',
        ),
         'className' => 'CheckInfoCest',
         'functionName' => 'checkTextWithin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4769aadfea7404e7e6d54a9d12383720' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Перейти в раздел Мои устройства
     *     -> Заполнить серийный номер
     *     -> Зарегистрировать устройство
     *     -> Проверить что устройство зарегистрировалось")
     *
     * @throws Exception
     * @Title("checkAddDevice")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'scenario' => 'Codeception\\Scenario',
          'locator' => 'Codeception\\Util\\Locator',
          'acceptance' => 'Helper\\Acceptance',
          'account' => 'Page\\Account',
          'login' => 'Page\\Login',
          'main' => 'Page\\Main',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
          'title' => 'Yandex\\Allure\\Adapter\\Annotation\\Title',
        ),
         'className' => 'CheckInfoCest',
         'functionName' => 'checkAddDevice',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f816ff4111901dd36f2a2dc296ccdf64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @Description("Логин
     *     -> Переход в ЛК
     *     -> Перейти в раздел Мои устройства
     *     -> Заполнить неверный серийный номер
     *     -> Зарегистрировать устройство
     *     -> Проверить что устройство не зарегистрировалось")
     *
     * @throws Exception
     * @Title("negativeCheckAddDevice")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'scenario' => 'Codeception\\Scenario',
          'locator' => 'Codeception\\Util\\Locator',
          'acceptance' => 'Helper\\Acceptance',
          'account' => 'Page\\Account',
          'login' => 'Page\\Login',
          'main' => 'Page\\Main',
          'description' => 'Yandex\\Allure\\Adapter\\Annotation\\Description',
          'title' => 'Yandex\\Allure\\Adapter\\Annotation\\Title',
        ),
         'className' => 'CheckInfoCest',
         'functionName' => 'negativeCheckAddDevice',
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