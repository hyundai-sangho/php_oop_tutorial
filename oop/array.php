<h1>함수 스타일</h1>
<?php
$data1 = array('조상호', '김성환', '이병철');
array_push($data1, '오인철');
foreach ($data1 as $item) {
  echo $item . '<br>';
}
var_dump(count($data1));
?>

<h1>객체 스타일</h1>
<?php
$data2 = new ArrayObject(array('조상호', '김성환', '이병철'));
$data2->append('김정환');
foreach ($data2 as $item) {
  echo $item . '<br>';
}
var_dump($data2->count());
?>