<?php
/**
 * Created by PhpStorm.
 * User: ismailocal
 * Date: 14.08.2019
 * Time: 18:07
 */

namespace Ismailocal\Whenable;

class User{
    use \Ismailocal\Whenable\WhenableTrait;

    protected $id;
    protected $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function save(){

    }
}