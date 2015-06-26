<?php
session_start();
$as_check = $_SESSION['check'];

require 'lib/SendMailSmtpClass.php';
require 'cfg/config.php';

//$input_asb_check = filter_input(INPUT_POST, 'inputCheck', FILTER_VALIDATE_INT);
$phone = trim(filter_input(INPUT_POST, 'inputPhone', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'inputEmail', FILTER_VALIDATE_EMAIL));
$theme = trim(filter_input(INPUT_POST, 'inputTheme', FILTER_SANITIZE_STRING));

/*$res['phone'] = $_POST['inputPhone'] . ' - ' . $phone;
$res['email'] = $_POST['inputEmail'] . ' - ' . $email;
$res['theme'] = $_POST['inputTheme'] . ' - ' . $theme;*/

//if( $input_asb_check !== false && !is_null($input_asb_check) && $as_check == $input_asb_check ):
    $mailSMTP = new SendMailSmtpClass($cfg['login'], $cfg['pass'], 'ssl://smtp.gmail.com', 'THRONE Project', 465); // создаем экземпляр класса
// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя');

// заголовок письма
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
    $headers .= "From:  <" . $cfg['login'] . ">\r\n"; // от кого письмо
    $subject = "throne.pro - " . $theme ;
    $to = $cfg['to'];
    $message =  Date("d.m.Y H:i")."<br/>"
        . ( is_null($phone) || $phone == '' ? '' : "Телефон: " . $phone . "<br/>")
        . ( $email === FALSE || $email == '' || is_null($email) ? '' : "Почта: " . $email);

    $result =  $mailSMTP->send($to, $subject, $message, $headers); // отправляем письмо
// $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');
    if($result === true){
        $res['msg'] = 1; //echo "Письмо успешно отправлено";
    }else{
        $res['msg'] = $result; //echo "Письмо не отправлено. Ошибка: " . $result;
    }
//endif;

echo json_encode($res);