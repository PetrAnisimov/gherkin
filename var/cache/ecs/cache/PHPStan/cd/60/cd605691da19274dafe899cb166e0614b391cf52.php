<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///home/hamster/Desktop/regression/vendor/phpstan/phpstan/phpstan/stubs/ext-ds.stub-1584895880',
   'data' => 
  array (
    '63aec1a7334bb9a64eccf57609d6ddc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template-covariant TKey
 * @template-covariant TValue
 * @extends Traversable<TKey, TValue>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Collection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5df3002e0bda93e8ba98725609e0f9e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Collection<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Collection',
         'functionName' => 'copy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Collection',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Collection',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '119c02b887d196688b2da107d967f7e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return array<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Collection',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Collection',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Collection',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'dffb645183e1e3136cd7c233fc58d97b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template TValue
 * @implements Sequence<TValue>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Deque',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26e66648054da4c5a35cec31ec22f915' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param iterable<TValue>|null $values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Deque',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Deque',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '8cff6d82cc7fe37ffbb23dd636301e9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Deque<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Deque',
         'functionName' => 'copy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Deque',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'fcae3853a7f3d8426177457dd587066f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TValue2
	 * @param iterable<TValue2> $values
	 * @return Deque<TValue|TValue2>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Deque',
         'functionName' => 'merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Deque',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '84a8343aea8232497d3dd8ed4953ab0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue): bool)|null $callback
	 * @return Deque<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Deque',
         'functionName' => 'filter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Deque',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'ebf90a73e9cb3202b61e7756357205f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TNewValue
	 * @param callable(TValue): TNewValue $callback
	 * @return Deque<TNewValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Deque',
         'functionName' => 'map',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Deque',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'a7253a24decb2e6dd35f49d2645530d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Deque<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Deque',
         'functionName' => 'reversed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Deque',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '94874d13799d0902422b92474193e43c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Deque<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Deque',
         'functionName' => 'slice',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Deque',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '2944cff2651b589334ccc38f32fb6c92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template TKey
 * @template TValue
 * @implements Collection<TKey, TValue>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84fbf219570606c24ea7b18c095f1bbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param iterable<TKey, TValue>|null $values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '1a0e812a2cabcc39ad2445c51d7bd9f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Map<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'copy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'ddb3e0725e4483e8bbc13cf19d0ad32b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param callable(TKey, TValue): TValue $callback
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'apply',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '48ee3b5855e4a0d398c69fe20fcf6564' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Pair<TKey, TValue>
	 * @throws UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'first',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '38af794904cc490f9f21cbdf6e4d68f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Pair<TKey, TValue>
	 * @throws UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'last',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'eb5a447316c2d1c450bf680afc42651f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Pair<TKey, TValue>
	 * @throws OutOfRangeException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'skip',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'c816c2046e3210c891dff7d3bb06700e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TKey2
	 * @template TValue2
	 * @param iterable<TKey2, TValue2> $values
	 * @return Map<TKey|TKey2, TValue|TValue2>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '89998820a0f727a6ce5adc27989f93a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TKey2
	 * @template TValue2
	 * @param Map<TKey2, TValue2> $map
	 * @return Map<TKey&TKey2, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'intersect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '2ca3d52921add14eeb7d693faf46a1dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TValue2
	 * @param Map<TKey, TValue2> $map
	 * @return Map<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'diff',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '62f6dbe2ca23ab5fb60124dc4fbec710' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TKey $key
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'hasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'be90e32bce2a08c7798911912837e689' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue $value
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'hasValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '9a4248d2bf812d5f42d586f65ffa170b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TKey, TValue): bool)|null $callback
	 * @return Map<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'filter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '1460e7b9153226f206b988dcbcf5b29b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TDefault
	 * @param TKey $key
	 * @param TDefault $default
	 * @return TValue|TDefault
	 * @throws OutOfBoundsException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'bf87a4d1e817f15c56b1813c73bad080' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Set<TKey>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'keys',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '5b2a7329e685f283d25c56386c25c2f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TNewValue
	 * @param callable(TKey, TValue): TNewValue $callback
	 * @return Map<TKey, TNewValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'map',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '5210295ba5d392a0e15b907949c93557' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Sequence<Pair<TKey, TValue>>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'pairs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'bbc706762849fdaa9a02eeaf994ba24e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TKey $key
	 * @param TValue $value
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'put',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '57d9000dcdaa258de7abd0609999c566' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param iterable<TKey, TValue> $values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'putAll',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '4b6040d0430ae9e80a4b1fbd27d7e206' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TCarry
	 * @param callable(TCarry, TKey, TValue): TCarry $callback
	 * @param TCarry $initial
	 * @return TCarry
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'reduce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'aab3fdfa28245f6a230a7982aa785dbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TDefault
	 * @param TKey $key
	 * @param TDefault $default
	 * @return TValue|TDefault
	 * @throws \\OutOfBoundsException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'remove',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '0d7b68717336ef4cc573705d68a9e783' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Map<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'reversed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '79a47d96fee57a8065667faa008e9ec2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Map<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'slice',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '49851169a198e867093bdeaf04a0bfa6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue, TValue): int)|null $comparator
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'sort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '8ed0c87b7ceab4aa1eb93c62dde2df45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue, TValue): int)|null $comparator
	 * @return Map<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'sorted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '1f1e1c1b323d3a4b09102ca3f02f4dc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TKey, TKey): int)|null $comparator
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'ksort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'b1f2af4e0730cb1d41761917bc762b92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TKey, TKey): int)|null $comparator
	 * @return Map<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'ksorted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'de683147ad23fbed64dc28856b92e690' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return array<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '65bc90784782b312077e1c5c4148aa7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Sequence<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'values',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '3ba4fd71d4db58af957f132b6ba29b97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TKey2
	 * @template TValue2
	 * @param Map<TKey2, TValue2> $map
	 * @return Map<TKey|TKey2, TValue|TValue2>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'union',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '8b93aa61b4be161edeb1886727fcc05d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TKey2
	 * @template TValue2
	 * @param Map<TKey2, TValue2> $map
	 * @return Map<TKey|TKey2, TValue|TValue2>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Map',
         'functionName' => 'xor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Map',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'ca0571b554d7e936106b9f0bde384533' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template-covariant TKey
 * @template-covariant TValue
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Pair',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8c23f9d4ec986a7528adedc2a530879' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @var TKey
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Pair',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Pair',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Pair',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '355bd3441e5c151f4cd35fdc5c31b8c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @var TValue
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Pair',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Pair',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Pair',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '25389934237fb7482c4a7dde905c70ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TKey $key
	 * @param TValue $value
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Pair',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Pair',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Pair',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'ed05907a6d5b2e6407b572b528f08002' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Pair<TKey, TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Pair',
         'functionName' => 'copy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Pair',
                 'functionName' => NULL,
              )),
               'name' => 'TKey',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Pair',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'b3df67215f26417e1631212bba2cd07d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template TValue
 * @extends Collection<int, TValue>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1f0cea6d02836cc0b422b004813b2b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param callable(TValue): TValue $callback
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'apply',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '386f818067425d0b323d48a6a904709a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue ...$values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'contains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '320e8cc8c2acfd6ddec8acea0492406e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue): bool)|null $callback
	 * @return Sequence<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'filter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'd08838d09ebc56f728a65a9d83bd8e57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue $value
	 * @return int|false
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'find',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '6c0a4829915bf1f70622cf716e3df6c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws \\UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'first',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '9348ce3bc9ffe0b0ea9acc8dbe57bfc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws \\OutOfRangeException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'e58c8f2cf9dcbaa4ee8c215f7b462115' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue ...$values
	 * @throws \\OutOfRangeException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'insert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'bc7095c9280ea7b204f5316fff3c9150' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param string $glue
	 * @return string
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'join',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '87382845a1f10dc3e4bc0c19573b1a4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws \\UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'last',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '9dd8c2c9827cfe72aeaa6ae916f390d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TNewValue
	 * @param callable(TValue): TNewValue $callback
	 * @return Sequence<TNewValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'map',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '8d2113865c84936fa2b44b94a9a0ed55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TValue2
	 * @param iterable<TValue2> $values
	 * @return Sequence<TValue|TValue2>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'edf96c329d6c8267fefea89a070a0420' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws \\UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'pop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '9f9d1b0df6b99bc6a227b3bd6783074a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue ...$values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'push',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'b6f3daa0e83d0ae65057afbfae2fc770' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TCarry
	 * @param callable(TCarry, TValue): TCarry $callback
	 * @param TCarry $initial
	 * @return TCarry
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'reduce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '13d1472602282436bb5fa32b9af2b17c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws \\OutOfRangeException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'remove',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'f575f2873dad334d9ddcb95863816e10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Sequence<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'reversed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'd6724c83033e9367adfcc40eb0dc7d99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue $value
	 * @throws \\OutOfRangeException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'b463f09955fc6ef277fbfd4d6f2b7a33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws \\UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'shift',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '7ca08a112f6e863909f7f6d98a2a5933' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Sequence<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'slice',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '6b4c579ac7e20b95a63c299bd2e6f49e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue, TValue): int)|null $comparator
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'sort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '79b619f72c6385b417ef391b1ed71dcd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue, TValue): int)|null $comparator
	 * @return Sequence<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'sorted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '7eecbd716f695ec96b2a9a496aea2e17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue ...$values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Sequence',
         'functionName' => 'unshift',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Sequence',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '4e6fb3081c51eea1c436f4c21b10ba34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template TValue
 * @implements Sequence<TValue>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Vector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a39949a1572313c5ffadc001c195b19b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param iterable<TValue>|null $values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Vector',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Vector',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'c4c79a1bd67832040d7ac0d0667d1400' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Vector<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Vector',
         'functionName' => 'copy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Vector',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'a5c292f328c147bea15f62ad2657bb7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Vector<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Vector',
         'functionName' => 'reversed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Vector',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'd5ce41b161c10737ebfa2b5ae0cedb9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Vector<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Vector',
         'functionName' => 'slice',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Vector',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'f16cb27280ecdcd130348fc92fcfe282' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue, TValue): int)|null $comparator
	 * @return Vector<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Vector',
         'functionName' => 'sorted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Vector',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '6ce8160b6e8036aedcc99a652f901426' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue): bool)|null $callback
	 * @return Vector<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Vector',
         'functionName' => 'filter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Vector',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '468a6f2ef17d7111b7848b23d0fa2f59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TNewValue
	 * @param callable(TValue): TNewValue $callback
	 * @return Vector<TNewValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Vector',
         'functionName' => 'map',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Vector',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '469542c6d2e7eebe3d3dd1fc20cea701' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TValue2
	 * @param iterable<TValue2> $values
	 * @return Vector<TValue|TValue2>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Vector',
         'functionName' => 'merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Vector',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'ea5454164f5f1606e9ee088e9b3f1237' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template TValue
 * @implements Collection<int, TValue>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a52c8e4d87aead8e3bfa29d148e38a4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param iterable<TValue>|null $values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'b988129e93abbcab89c776a865ad4043' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue ...$values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'add',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'c2db7fc2f7bade7d40025dfe284b32ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue ...$values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'contains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'b8964e93730ba24a2fe2d15ed9b5d124' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Set<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'copy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '6d94a9b0667cced4c7af5c5511ae00b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TValue2
	 * @param Set<TValue2> $set
	 * @return Set<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'diff',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '59aeb33bf545cc3c3c482a7e802e1bc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue): bool)|null $callback
	 * @return Set<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'filter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '1f115819ee07c9d51cd275fcdb398fe2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws \\UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'first',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '545ca6d94f10f47c1cdbd60dc12b98c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws \\OutOfRangeException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '650ea90951e0c55dcf2866a421cc48bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TValue2
	 * @param Set<TValue2> $set
	 * @return Set<TValue&TValue2>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'intersect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'b3a7a9cc5ec2b88308b732cead99a9c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws \\UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'last',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '15e8b68e4d5e3f0697351f02b25d03de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TValue2
	 * @param iterable<TValue2> $values
	 * @return Set<TValue|TValue2>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '65981a8657b4087471545c5abca5e7d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue ...$values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'remove',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '63e1be2cff05a99bc384213b66436579' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Set<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'reversed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'e3157e4a9272cb677a38932fed618ab6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Set<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'slice',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '9406d35e9082172a2c163f7e41c099df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue, TValue): int)|null $comparator
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'sort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '610f6713d86b3afce8baade21eba6623' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param (callable(TValue, TValue): int)|null $comparator
	 * @return Set<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'sorted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '975d42b46a8064929dcb80a715467323' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return array<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '016c99f0fe454c2bffd89f9126ad8175' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TValue2
	 * @param Set<TValue2> $set
	 * @return Set<TValue|TValue2>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'union',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '57d5b7ba2330209aeb60e4a512e9ba96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @template TValue2
	 * @param Set<TValue2> $set
	 * @return Set<TValue|TValue2>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Set',
         'functionName' => 'xor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Set',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'db5eab0992505e98da914674e9d18497' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template TValue
 * @implements Collection<int, TValue>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Stack',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ce885a2b13a8cca136bf05c781079ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param iterable<TValue>|null $values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Stack',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Stack',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '30f13c6b923b5f5df931e4fd34925755' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Stack<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Stack',
         'functionName' => 'copy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Stack',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'f1e67d9b1897d7229a8248aecdc424dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Stack',
         'functionName' => 'peek',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Stack',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '9ddf80ec493918d0051a7954abfde098' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Stack',
         'functionName' => 'pop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Stack',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '00fd3c5da07843710b5fdc742a469379' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue ...$values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Stack',
         'functionName' => 'push',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Stack',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '9220889a0a4720755dbb4aebdb2d6d46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return array<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Stack',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Stack',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '330f184bd3fcf8c2b99c54987dc2aca5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template TValue
 * @implements Collection<int, TValue>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Queue',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0da153b2a4509a3bc22caf900e348863' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param iterable<TValue>|null $values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Queue',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Queue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '7d1d6fead0c9d2ec1ba6138672f65c9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return Queue<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Queue',
         'functionName' => 'copy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Queue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '6f77b617c7be2755ba40cffb4ab26038' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Queue',
         'functionName' => 'peek',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Queue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '6203f6bdf51479fa5e91643cf8fbea64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Queue',
         'functionName' => 'pop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Queue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'cf7659ac1350bf170d08e15beca91c52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue ...$values
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Queue',
         'functionName' => 'push',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Queue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '088e11e43d5bc2ee8527c5160a016185' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return array<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\Queue',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\Queue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '2e69c5d4e901f576ca84d0587d01d9cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @template TValue
 * @implements Collection<int, TValue>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\PriorityQueue',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51df22a8c674c94eb73070262b384aaf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return PriorityQueue<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\PriorityQueue',
         'functionName' => 'copy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\PriorityQueue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '861cca8512769c30f4a792596a6b9603' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\PriorityQueue',
         'functionName' => 'peek',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\PriorityQueue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '6b1820494f0adcfb4c88283f89f6ca3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return TValue
	 * @throws UnderflowException
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\PriorityQueue',
         'functionName' => 'pop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\PriorityQueue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    '00645d16c1e9d8ca1ba9c310f231e121' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param TValue $value
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\PriorityQueue',
         'functionName' => 'push',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\PriorityQueue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
    'a89d3dd1f67d8525b835626a7ecaed34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @return array<TValue>
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Ds',
         'uses' => 
        array (
          'countable' => 'Countable',
          'jsonserializable' => 'JsonSerializable',
          'outofboundsexception' => 'OutOfBoundsException',
          'outofrangeexception' => 'OutOfRangeException',
          'traversable' => 'Traversable',
          'underflowexception' => 'UnderflowException',
        ),
         'className' => 'Ds\\PriorityQueue',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TValue' => 
            PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'scope' => 
              PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Ds\\PriorityQueue',
                 'functionName' => NULL,
              )),
               'name' => 'TValue',
               'strategy' => 
              PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => NULL,
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
            )),
          ),
        )),
      )),
    )),
  ),
));