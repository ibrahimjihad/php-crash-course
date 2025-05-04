<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;
  //a contructor is a method that runs when an object is created
  public function __construct($name, $email, $password){
    echo 'contructor ran';
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }
//method is a function that belongs to a class
    function set_name($name){
        $this->name=$name;
}   
    function get_name(){
        return $this->name;
}
  // The constructor is called whenever an object is created from the class.
  // We pass in properties to the constructor from the outside.
}
//instatiate a user object
$user1=new User('brad','brad@gmail.com','7676');
$user1->name="brad";
var_dump($user1);
echo $user1->name;


$user2=new User("x","xr@gmail.com",'kkk');
$user2->set_name("jihad"); //name overwrite hoye gese
var_dump(value: $user2);
echo $user2->name;

$user3=new User("jihad","j@gmail.com",'88');
$user3->set_name("ibrahim");
var_dump($user3);

//use get name function
echo $user3->get_name();
echo $user2->get_name();
echo $user2->email;

/* ----------- Inheritence ---------- */

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class employee extends User {
    public function __construct($name, $email, $password, $title) {
      parent::__construct($name, $email, $password);
      $this->title = $title;
    }
  
    public function getTitle() {
      return $this->title;
    }
  }
  
  $employee1 = new employee('John','johndoe@gmail.com','123456','Manager');
  echo $employee1->getTitle();