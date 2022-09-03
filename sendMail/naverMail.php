<?php

// phpmailer를 활용해 로그 기록을 특정 메일 주소로 일정한 시간에
// 보내는 방식으로 활용할 수 있다.

// aws 서버에서 cron으로 스크립트를 돌리는 방법으로
// 특정한 로그를 cron으로 스크립트를 만들어서
// 특정한 이메일에 보내 서버 상태를 관리한다.

/* 메일을 보내기 위해 php.ini 파일 수정

extension=openssl
extension=curl 
출처: https://ronaldocfg.tistory.com/4 [내맘대로 Developer:티스토리]
 */

// composer로 다운로드된 라이브러리 참조하기
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// PHPMailer 선언
$mail = new PHPMailer(true);
// 디버그 모드(production 환경에서는 주석 처리한다.)
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
// SMTP 서버 세팅
$mail->isSMTP();
try {
  // 구글 smtp 설정
  $mail->Host = "smtp.naver.com";
  // SMTP 암호화 여부
  $mail->SMTPAuth = true;
  // SMTP 포트
  $mail->Port = 587;
  // SMTP 보안 프초트콜
  $mail->SMTPSecure = "tls";
  // gmail or naver 유저 아이디
  $mail->Username = "teha007";
  // gmail or naver 패스워드
  // 네이버 2단계 인증했으면 계정 - 설정에서 2단계 보안 인증 탭에 들어가서
  // phpmailer로 메일을 보낼 수 있도록 비밀번호를 따로 생성해서 
  // 그 비밀번호를 사용해야지만 메일을 보낼 수 있음
  // 2단계 인증하고 일반 비밀번호를 사용하면 계속 안 됨. 주의 요망
  $mail->Password = "WQLHR2RP";
  // 인코딩 셋
  $mail->CharSet = 'utf-8';
  $mail->Encoding = "base64";

  // 보내는 사람
  $mail->setFrom('teha007@naver.com', 'teha007');
  // 받는 사람
  $mail->AddAddress("hyundai_sangho@naver.com", "hyundai_sangho123 테스트");

  // 본문 html 타입 설정
  $mail->isHTML(true);
  // 제목
  $mail->Subject = 'Here is the subject';
  // 본문 (HTML 전용)
  $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
  // 본문 (non-HTML 전용)
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  $mail->Send();
  echo "Message has been sent";
} catch (phpmailerException $e) {
  echo $e->errorMessage();
} catch (Exception $e) {
  echo $e->getMessage();
}