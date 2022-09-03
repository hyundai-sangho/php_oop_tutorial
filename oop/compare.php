<h1>함수</h1>
<?php

// 'data.txt'파일이 있는지 true, false 출력
var_dump(is_file('data.txt'));
echo '<br>';
// 'data.txt'파일이 디렉토리인지 true, false 출력
var_dump(is_dir('data.txt'));
echo '<br>';
// 'data.txt' 파일 안에 내용을 화면에 출력
var_dump(file_get_contents('data.txt'));
echo '<br>';
// 'data.txt' 파일에 1 부터 100 사이의 값을 입력
file_put_contents('data.txt', rand(1, 100));

?>

<h1>객체</h1>
<?php
$file = new SplFileObject('data.txt', 'w+');
var_dump($file->isFile());
echo '<br>';
var_dump($file->isDir());
echo '<br>';
var_dump($file->fread($file->getSize()));
echo '<br>';
$file->fwrite(rand(1, 100));

$file = new SplFileObject('data.txt', "r");
$contents = $file->fread($file->getSize());

echo $contents;

// SplFileObject : 클래스
// $file : 인스턴스(객체)
// isFile, isDir : 메소드(함수)
// data.txt : state(상태)
?>