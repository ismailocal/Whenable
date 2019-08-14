# Whenable

User Class With WhenableTrait
~~~ php
class User{
    use \Ismailocal\Whenable\WhenableTrait;

    protected $id;
    protected $name;
    protected $active = true;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    
    public function setPassive(){
      // Logic
    }
}
~~~

Example Usage
~~~ php
$user = new User(1, 'ismailocal');

$user->when(function (){
    return $this->active;
})->then(function(){
    $this->setPassive();
})->else(function(){
    log($this->name +' not active user!')
});
~~~

Example Usage Without Trait
~~~ php
$user = new User(1, 'ismailocal');

\Ismailocal\Whenable\Whenable::when(function () use($user){
    return $user->active;
})->then(function () use($user){
    $user->setPassive();
})->else(function () use($user){
    log($user->name +' not active user!')
});
~~~
