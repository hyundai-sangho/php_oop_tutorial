<?php

class Person
{
  // static이 들어간 Person 클래스의 멤버 $count
  // 멤버는 변수, 함수 모두 포함
  private static $count = 0;

  // 인스턴스에 멤버 변수 $name
  private $name;
  function __construct($name)
  {
    $this->name = $name;
    self::$count =  self::$count + 1;
  }

  function enter()
  {
    echo "<h1>입장 " . $this->name . " " . self::$count . " th</h1> ";
  }

  static function getCount()
  {
    return self::$count;
  }
}

$p1 = new Person('조상호');
$p1->enter();
$p2 = new Person('이승철');
$p2->enter();
$p3 = new Person('김성환');
$p3->enter();

echo Person::getCount();

// 인스턴스에 자기 자신은 this를 사용 
// ex) $this->name = $name;

// 클래스에 자기 자신을 선택할 때는 self를 사용 
// ex) self::$count = self::$count + 1;