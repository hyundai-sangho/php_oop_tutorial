<?php

class ParentClass
{
  function callMethod($param)
  {
    echo "<h1>부모 {$param}</h1>";
  }
}

class ChildClass extends ParentClass
{
  function callMethod($param)
  {
    parent::callMethod($param);
    echo "<h1>자식 {$param}</h1>";
  }
}

$obj = new ChildClass();
$obj->callMethod('method');