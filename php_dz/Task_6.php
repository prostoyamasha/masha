<?php
/* Task-6 Объекты и классы. создать класс Myself. 
 * добавить классу свойства age; name 
 * создать функции getAge - должно вернуть строку 'Мне N лет',
 * getName = должно вернуть строку "Меня зовут N',
 * getAll - должно вернуть строку 'Мне N лет, Меня зовут N'.
 * cсоздать экземпляр класса и поочередно вывести на экран
 * результат работы всех трех функций.
 * а так же вывести на экран все свойства 
 */
class Myself {
    public $age;
    public $name;
    
    public function getAge (){
        echo "Мне $this->age лет. ";
    }
    
    public function getName (){
        echo "Меня зовут $this->name. ";
    }
    public function getAll (){  
       $this->getName ();
       $this->getAge ();
    }

}

$myselfPerson1 = new Myself;
$myselfPerson1->age = 29;
$myselfPerson1->name = 'Маша';

echo "</br>";
$myselfPerson1->getAge();
echo "</br>";
$myselfPerson1->getName();
echo "</br>";
$myselfPerson1->getAll();
echo "<pre>";
print_r ($myselfPerson1);

