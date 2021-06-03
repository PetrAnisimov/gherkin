<?php

namespace Page;

use AcceptanceTester;

/**
 * Class BasePage.
 */
class BasePage
{
    public $config;

    /**
     * @var AcceptanceTester
     */
    protected $tester;

    /**
     * BasePage constructor.
     *
     * @param AcceptanceTester $I
     * @param $config
     */
    public function __construct(\AcceptanceTester $I, $config = null)
    {
        $this->tester = $I;
        $this->config = $config;
    }
}
