<?
$person = new Person;

class Person {
    public $name;
    public $age;
    public function intro() {
        return $this -> name. $this -> age;
    }
}
$person -> name = "степан\n";
$person -> age = "18";
echo $person -> intro();
