<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Handler\NativeMailerHandler;

require_once __DIR__ . '/vendor/autoload.php';

$log = new Logger('조상호', [], [], "date_default_timezone_set('Asia/Seoul')");
$log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::WARNING));
$log->pushHandler(new NativeMailerHandler(
  'teha007@naver.com',
  "경고 조상호",
  'cho@system.com',
  Logger::EMERGENCY
));

$log->warning('경고');
$log->error('에러');
$log->emergency('비상');