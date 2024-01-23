<?php>

//decalring a varible on php



//creating a funtion 
function greet(){
    echo "Hello world";
    $myVariable = "hello, world";
    return $myVariable;

}
//creating a class with a method;
class Myclas{
    public function sayhello(name){
        echo "Hello"
    }
}
//invoking the function..
sayhello('Mandla');

//create an object of the class
$myObjecct = new Myclass();

//call the method on the object...
$myObjecct->sayhello('Mandla');
greet()

echo $myVariable;


//decalring a variable..
$message = "Hi John";
//create a function...
function greet($name){
    echo "hello",.$name ."!";


}

//create a class with a method 
class Person{
    public $snam;
    //method..
    public function sayhello(){
        echo "helo , ".$this->name. "!";

    }
}

//create an object of the class.
$person1 = new Persn();
$person->name = "John";

//call the method on the object..
$person->sayhello();



greet('jane');
echo $message;
?>