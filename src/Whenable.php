<?php
/**
 * Created by PhpStorm.
 * User: ismailocal
 * Date: 14.08.2019
 * Time: 19:19
 */

namespace Ismailocal\Whenable;

class Whenable
{
    use WhenableTrait;

    /**
     * @param \Closure $callable
     * @return Whenable
     */
    public static function when(\Closure $callable)
    {
        $whenable = new static();
        $whenable->condition = $whenable->call($callable);
        return $whenable;
    }
}