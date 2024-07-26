<?php
class Person {
    public $name;
    public $age;

    public function to_present() {
        echo "Hello my name is " . $this->name . " and I have " . $this->age . " years.";
    }
}

$personI = new Person();
$personI->name = "Mary";
$personI->age = 33;
$personI->to_present();
?>

