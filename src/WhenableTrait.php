<?php
/**
 * Created by PhpStorm.
 * User: ismailocal
 * Date: 14.08.2019
 * Time: 18:00
 */

namespace Ismailocal\Whenable;

trait WhenableTrait
{
    /** @var bool $condition */
    protected $condition = false;

    /**
     * @param \Closure $callable
     * @return $this
     */
    public function when(\Closure $callable)
    {
        echo '2';
        $this->condition = $this->call($callable);

        return $this;
    }

    /**
     * @param \Closure $callable
     * @return $this
     */
    public function then(\Closure $callable)
    {
        $this->condition && $this->call($callable);
        return $this;
    }

    /**
     * @param \Closure $callable
     * @return $this
     */
    public function else(\Closure $callable)
    {
        $this->condition || $this->call($callable);
        return $this;
    }

    /**
     * @param \Closure $callable
     * @return boolean
     */
    private function call(\Closure $callable)
    {
        return call_user_func($callable->bindTo($this, get_class($this)));
    }
}