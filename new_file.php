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



// URL of the image
$imageUrl = 'https://example.com/image.jpg';

// Make the API request
$imageData = file_get_contents($imageUrl);

// Save the image to a file
file_put_contents('downloaded_image.jpg', $imageData);

// URL of the image
$imageUrl = 'https://example.com/image.jpg';

// Initialize cURL session
$ch = curl_init($imageUrl);

// Set options for the cURL session
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session
$imageData = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Save the image to a file
file_put_contents('downloaded_image.jpg', $imageData);




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
//////////////////////
//create an object of the class.
$person1 = new Persn();
$person->name = "John";

//call the method on the object..
$person->sayhello();

///styles.......

greet('jane');
echo $message;
?>