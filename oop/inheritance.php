<?php

class Animal
{
  function run()
  {
    print("running...<br>");
  }

  function breathe()
  {
    print("breathing...<br>");
  }
}

class Human extends Animal
{
  function think()
  {
    print('thinking...<br>');
  }
  function talk()
  {
    print('talking...<br>');
  }
}

$cho = new Human();
$cho->run();
$cho->breathe();
$cho->think();
$cho->talk();