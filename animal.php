<?php

// Інтерфейс
interface animalInterface
{
    public function feed();
}

// Trait
trait canTalk
{
    public function talk()
    {
        echo 'I am ferari!';
    }
}

// Клас Базовий
class animal
{
    // Public fields
    public $name;
    public $age;

    public static $owner = 'Adam';

    // Private fields
    public $isHungry = true;

    // Methods
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function feed()
    {
        $this->isHungry = false;
    }
}

// Нащадок класу animal

class dog extends animal implements animalInterface
{
    public $breed;

    public function __construct($name, $age, $breed)
    {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    public function feed()
    {
        parent::feed();
        echo 'Dog is fed!';
    }

    public function bark()
    {
        echo 'Woof!';
    }

    public function __tostring()
    {
        return 'Dog: ' . $this->name . ' ' . $this->age . ' ' . $this->breed;
    }
}

class cat extends animal
{
    use canTalk;
    public $color;

    public function __construct($name, $age, $color)
    {
        parent::__construct($name, $age);
        $this->color = $color;
    }

    public function feed()
    {
        parent::feed();
        echo 'Cat is fed!';
    }

    public function meow()
    {
        echo 'Meow!';
        $this->talk();
    }

    public static function getOwner()
    {
        return self::$owner;
    }

    public function __toString()
    {
        return 'Cat: ' . $this->name . ' ' . $this->age . ' ' . $this->color;
    }
}

// Magic methods
class bird extends animal
{
    public $color;

    public function __construct($name, $age, $color)
    {
        parent::__construct($name, $age);
        $this->color = $color;
    }

    public function __toString()
    {
        return 'Bird: ' . $this->name . '<br>Age: ' . $this->age . '<br>Color: ' . $this->color;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __call($name, $arguments)
    {
        echo 'Method ' . $name . ' not found!';
    }
}

echo '<br>';
$dog = new dog('Rex', 5, 'Bulldog');
$dog->feed();
$dog->bark();
echo $dog;

echo '<br>';echo '<br>';
$cat = new cat('Tom', 3, 'Black');
$cat_Mot = new cat('Mot', 5, 'White');
$cat->feed();
$cat->meow();
echo '<br>';
echo 'Owner: ' . $cat->getOwner();
echo '  |  Owner of Mot: ' . $cat_Mot->getOwner();
echo '<br>';
echo $cat;

echo '<br>';
echo  $cat->isHungry ? "Cat {$cat->name} Hungry" : "Cat {$cat->name} Not hungry";
echo '<br>';
echo  $cat_Mot->isHungry ? "Cat {$cat_Mot->name} Hungry" : "Cat {$cat_Mot->name} Not hungry";

echo '<br>';echo '<br>';
$bird = new bird('Kesha', 1, 'Green');
echo $bird;
echo '<br>';echo '<br>';
$bird->name = 'David';
echo $bird;
echo '<br>';
