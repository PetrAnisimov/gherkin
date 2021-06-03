<?php

namespace Codeception\Extension;

use Codeception\Event\StepEvent;
use Codeception\Events;
use Codeception\Extension;
use Yandex\Allure\Adapter\Annotation\Description;

/**
 * @Description("Дополнение для работы с шагами")
 * Class Listener
 */
class Listener extends Extension
{
    /**
     * @Description("Список функций слушающих каждый шаг")
     *
     * @var array
     */
    public static $events = [
        Events::SUITE_BEFORE => 'beforeSuite',
        Events::STEP_BEFORE => 'beforeStep',
    ];

    /**
     * @var array
     */
    protected $fails = [];

    protected $steps = true;

    protected $debug = false;

    /**
     * @Description("Включение вывода для этого дополнения")
     */
    public function _initialize()
    {
        $this->options['silent'] = false; // turn on printing for this extension
    }

    public function beforeSuite(\Codeception\Event\SuiteEvent $e)
    {
        codecept_debug($e->getSettings());
    }

    /**
     * @Description("Действия после каждого шага")
     *
     * @param StepEvent $e
     */
    public function afterStep(StepEvent $e)
    {
        codecept_debug('STEPa');
        $step = $e->getStep();
        if ($step->hasFailed()) {
            $this->fails[] = $step;
        }
    }
}
