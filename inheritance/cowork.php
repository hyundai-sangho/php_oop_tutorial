<?php

interface ContractInterface
{
  public function compare(string $str1, string $str2): bool;
}

class Dummy implements ContractInterface
{
  public function compare(string $str1, string $str2): bool
  {
    if ($str1 == $str2)
      return true;
    else
      return false;
  }
}

$obj = new Dummy();

if ($obj->compare('test11', 'test11')) {
  echo '<h1>같다.</h1>';
} else {
  echo '<h1>틀리다.</h1>';
}