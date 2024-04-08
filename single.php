<?php

class single
{
    private static $instance;

    public $name = 'Adam';

    private function __construct() { }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function myName()
    {
        echo 'My name is ' . $this->name . '!';
    }
}

$singleton = single::getInstance();
$singleton2 = single::getInstance();
$singleton->myName();
echo '<br>';
$singleton2->myName();
$singleton->name = 'Ivaniush';
echo '<br>';
$singleton->myName();
echo '<br>';
$singleton2->myName();

echo '<br>';echo '<br>';

echo  $singleton === $singleton2 ? 'Singleton works!' : 'Singleton failed!';
