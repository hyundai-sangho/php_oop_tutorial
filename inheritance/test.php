<?php

class Person
{
  private $m_szName;
  private $m_iAge;

  function __construct($m_szName, $m_iAge)
  {
    $this->m_szName = $m_szName;
    $this->m_iAge = $m_iAge;
  }

  public function setName($szName)
  {
    $this->m_szName = $szName;
    return $this; //  $this (the Person)를 리턴
  }

  public function setAge($iAge)
  {
    $this->m_iAge = $iAge;
    return $this; // $this (the Person)를 리턴
  }

  public function introduce()
  {
    printf(
      'Hello my name is %s and I am %d years old.',
      $this->m_szName,
      $this->m_iAge
    );
  }
}


$peter = new Person('조일장', '23');

// 한줄로 끝!
$peter->setName('Peter')->setAge(23)->introduce();
// $peter->introduce();