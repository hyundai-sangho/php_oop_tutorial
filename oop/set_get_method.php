<?php

class Person
{
  private $name;
  function sayHi()
  {
    return '안녕 ' . $this->name;
  }

  function get_name()
  {
    return $this->name;
  }

  function set_name($name)
  {
    $this->ifEmptyDie($name);
    $this->name = $name;
  }

  private function ifEmptyDie($value)
  {
    if (empty($value)) {
      die('I need name');
    }
  }
}

$cho = new Person();
$cho->set_name('chosangho');
echo $cho->get_name();
echo '<br>';
echo $cho->sayHi();