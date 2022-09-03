<?php

ob_start();

echo "Hello World";
echo "Hello World";
echo "Hello World";

$out = ob_get_clean();
$out = strtolower($out);

var_dump($out);