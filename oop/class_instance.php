<?php
class MyFileObject
{
  public $filename;
  function __construct($fname)
  {
    $this->filename = $fname;
    if (!file_exists($this->filename)) {
      die('파일이 없다. ' . $this->filename);
    }
  }

  function isFile()
  {
    return is_file($this->filename);
  }
}

$file = new MyFileObject('data.txt');
// $file = new MyFileObject();
// $file->filename = 'data.txt';
$file->filename = 'hello.txt';
var_dump($file->isFile());
var_dump($file->filename);

/* 
MyFileObject : 클래스
$file, $file2 : 인스턴스(객체)
isFile: 메소드, behavior(행위)라고도 불림.
$this->filename: 인스턴스 변수, 인스턴스 필드, 인스턴스 프로퍼티라고도 불림, status(상태)라고도 부름
*/