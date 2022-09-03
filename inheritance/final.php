<?php

// 아직 미완성된 클래스 앞에 final를 붙여주면
// 혹시나 모르고 상속받아서 생길 문제를 제거해준다.
// ex) final class ParentClass, final function a()
// final 키워드는 메소드나 클래스에만 가능함, 변수는 사용 안 됨.
class ParentClass
{
  public $name = '조상호';
  function a()
  {
    echo '부모 a() 함수';
  }

  function b()
  {
    echo '부모 b() 함수';
  }
}

class ChildClass extends ParentClass
{
  function a()
  {
    echo '자식 a() 함수';
  }

  function b()
  {
    echo '자식 b() 함수';
  }
}

$obj = new ChildClass();
$obj->a();
echo '<br>';
$obj->b();
echo '<br>';
echo $obj->name;