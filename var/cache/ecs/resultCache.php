<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1622632095,
	'meta' => array (
  'cacheVersion' => 'v4-callback',
  'phpstanVersion' => '0.12.18',
  'phpVersion' => 70234,
  'configFiles' => 
  array (
    '/home/hamster/Desktop/regression/phpstan.neon' => '5f613b626afed4b155b881a204230fa5137432f5',
    '/home/hamster/Desktop/regression/phpstan-baseline.neon' => '0d83211c5471abe4aab5753aa3fc4d1450f5bf22',
  ),
  'analysedPaths' => 
  array (
    0 => '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php',
  ),
  'composerLocks' => 
  array (
    '/home/hamster/Desktop/regression/composer.lock' => 'c4dbb849771c77938dbe7bb904816f03c10934a1',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'calendar',
    8 => 'ctype',
    9 => 'curl',
    10 => 'date',
    11 => 'dom',
    12 => 'exif',
    13 => 'fileinfo',
    14 => 'filter',
    15 => 'ftp',
    16 => 'gd',
    17 => 'gettext',
    18 => 'hash',
    19 => 'iconv',
    20 => 'intl',
    21 => 'json',
    22 => 'libxml',
    23 => 'mbstring',
    24 => 'mysqli',
    25 => 'mysqlnd',
    26 => 'openssl',
    27 => 'pcntl',
    28 => 'pcre',
    29 => 'pdo_mysql',
    30 => 'posix',
    31 => 'readline',
    32 => 'session',
    33 => 'shmop',
    34 => 'sockets',
    35 => 'sodium',
    36 => 'standard',
    37 => 'sysvmsg',
    38 => 'sysvsem',
    39 => 'sysvshm',
    40 => 'tokenizer',
    41 => 'wddx',
    42 => 'xml',
    43 => 'xmlreader',
    44 => 'xmlwriter',
    45 => 'xsl',
    46 => 'zip',
    47 => 'zlib',
  ),
  'stubFiles' => 
  array (
    'phar:///home/hamster/Desktop/regression/vendor/phpstan/phpstan/phpstan/stubs/ReflectionClass.stub' => '39fbcd0062f0715872459c85ab680e5473ab915b',
    'phar:///home/hamster/Desktop/regression/vendor/phpstan/phpstan/phpstan/stubs/iterable.stub' => '51b66228729531d1b305cf8ca28ab84c90b2a910',
    'phar:///home/hamster/Desktop/regression/vendor/phpstan/phpstan/phpstan/stubs/ArrayObject.stub' => 'dc23c95d7715267249a2530eb276acd7abd4f85f',
    'phar:///home/hamster/Desktop/regression/vendor/phpstan/phpstan/phpstan/stubs/WeakReference.stub' => '2a6220f72171aa65d979f4f8ee06a707ecb96ff4',
    'phar:///home/hamster/Desktop/regression/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub' => '9238e58ed411e816ea4685ac099484f1d38e185c',
  ),
  'level' => '7',
),
	'errorsCallback' => static function (): array { return array (
  '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property LoginCest::$config has no typehint specified.',
       'file' => '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Stmt\\PropertyProperty',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property LoginCest::$testName has no typehint specified.',
       'file' => '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Stmt\\PropertyProperty',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method LoginCest::_before() has no return typehint specified.',
       'file' => '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Stmt\\ClassMethod',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method LoginCest::loginTest() has no return typehint specified.',
       'file' => '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php',
       'line' => 65,
       'canBeIgnored' => true,
       'filePath' => '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 65,
       'nodeType' => 'PhpParser\\Node\\Stmt\\ClassMethod',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'dependencies' => array (
  '/tmp/PHPStantemp_folder7804/tests/acceptance/LoginCest.php' => 
  array (
    'fileHash' => 'a2051aefefb56cb08b1dc23fe01cedacdce4bf33',
    'dependentFiles' => 
    array (
    ),
  ),
),
];