<?php

class ParentClass
{
  private $name;
  private $age;
  function __construct($param)
  {
    echo "<h1>부모 {$param}</h1>";
  }

  function callMethod($param)
  {
    echo "<h2>부모 {$param}</h2>";
  }
}

class ChildClass extends ParentClass
{
  function __construct($param)
  {
    parent::__construct($param);
    echo "<h1>자식 {$param}</h1>";
  }

  function callMethod($param)
  {
    parent::callMethod($param);
    echo "<h2>자식 {$param}</h2>";
  }
}

$cho = new ChildClass('조상호');
$cho->callMethod('이승열');