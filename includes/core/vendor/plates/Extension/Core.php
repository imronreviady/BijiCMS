<?php

namespace Template\Extension;

use Template\Engine;
use LogicException;

require_once 'includes/core/core.php';

/**
 * Extension that adds a number of URI checks.
 */
class Core implements ExtensionInterface
{
	/**
     * Instance of the current call.
     * @var Call
     */
    public $call;

    /**
     * Create new URI instance.
     */
    public function __construct()
    {
        $this->call = new \Core();
    }

	/**
     * Register extension functions.
     * @return null
     */
    public function register(Engine $engine)
    {
        $engine->registerFunction('core', [$this, 'getObject']);
    }

	/**
     * Create getObject function.
     */
	public function getObject()
    {
        return $this;
    }
}
