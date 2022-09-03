<?php

/* 
인터페이스를 상속받을 때는 무조건
인터페이스 안에 구축된 함수를 그대로 받아와서 
오버라이딩 해서 써아먄 한다. 

그것이 바로 인터페이스를 사용하는 목적이자 규약이다. 
*/

// Concreate 구체적인
// Contract 계약

interface ContractInterface
{
  public function promiseMethod(array $param): int;
}

interface ContractInterface2
{
  public function promiseMethod2(array $param): int;
}

class ConcreateClass implements ContractInterface, ContractInterface2
{
  public function promiseMethod(array $param): int
  {
    return $param[0] + $param[1];
  }

  public function promiseMethod2(array $param): int
  {
    return 1;
  }
}

$obj = new ConcreateClass();
echo $obj->promiseMethod([1, 2]);