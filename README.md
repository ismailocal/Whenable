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
