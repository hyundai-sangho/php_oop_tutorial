<?php

class ParentClass
{
  public $_public = '<h1>public</h1>';
  protected $_protected = '<h1>protected</h1>';
  private $_private = '<h1>private</h1>';

  public function get_private()
  {
    echo $this->_private;
  }
}

class ChildClass extends ParentClass
{
  public function callPublic()
  {
    echo "{$this->_public}";
  }

  public function callProtected()
  {
    echo "{$this->_protected}";
  }

  public function callPrivate()
  {
    echo "{$this->_private}";
  }

  public function get_protected()
  {
    return $this->_protected;
  }
}

$obj = new ChildClass();
$obj->callPublic();
$obj->callProtected();
$obj->get_private();

print($obj->_public);
print($obj->get_protected());
print($obj->get_private());