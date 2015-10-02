<?php
session_start();
$as_check = $_SESSION['check'];

include 'mail_cfg.php';

class SendMailSmtpClass {

    /**
     *
     * @var string $smtp_username - логин
     * @var string $smtp_password - пароль
     * @var string $smtp_host - хост
     * @var string $smtp_from - от кого
     * @var integer $smtp_port - порт
     * @var string $smtp_charset - кодировка
     *
     */
    public $smtp_username;
    public $smtp_password;
    public $smtp_host;
    public $smtp_from;
    public $smtp_port;
    public $smtp_charset;

    public function __construct($smtp_username, $smtp_password, $smtp_host, $smtp_from, $smtp_port = 25, $smtp_charset = "utf-8") {
        $this->smtp_username = $smtp_username;
        $this->smtp_password = $smtp_password;
        $this->smtp_host = $smtp_host;
        $this->smtp_from = $smtp_from;
        $this->smtp_port = $smtp_port;
        $this->smtp_charset = $smtp_charset;
    }

    /**
     * Отправка письма
     *
     * @param string $mailTo - получатель письма
     * @param string $subject - тема письма
     * @param string $message - тело письма
     * @param string $headers - заголовки письма
     *
     * @return bool|string В случаи отправки вернет true, иначе текст ошибки    *
     */
    function send($mailTo, $subject, $message, $headers) {
        $contentMail = "Date: " . date("D, d M Y H:i:s") . " UT\r\n";
        $contentMail .= 'Subject: =?' . $this->smtp_charset . '?B?'  . base64_encode($subject) . "=?=\r\n";
        $contentMail .= $headers . "\r\n";
        $contentMail .= $message . "\r\n";

        try {
            if(!$socket = @fsockopen($this->smtp_host, $this->smtp_port, $errorNumber, $errorDescription, 30)){
                throw new Exception($errorNumber.".".$errorDescription);
            }
            if (!$this->_parseServer($socket, "220")){
                throw new Exception('Connection error');
            }

            $server_name = $_SERVER["SERVER_NAME"];
            fputs($socket, "HELO $server_name\r\n");
            if (!$this->_parseServer($socket, "250")) {
                fclose($socket);
                throw new Exception('Error of command sending: HELO');
            }

            fputs($socket, "AUTH LOGIN\r\n");
            if (!$this->_parseServer($socket, "334")) {
                fclose($socket);
                throw new Exception('Authorization error');
            }



            fputs($socket, base64_encode($this->smtp_username) . "\r\n");
            if (!$this->_parseServer($socket, "334")) {
                fclose($socket);
                throw new Exception('Authorization error');
            }

            fputs($socket, base64_encode($this->smtp_password) . "\r\n");
            if (!$this->_parseServer($socket, "235")) {
                fclose($socket);
                throw new Exception('Authorization error');
            }

            fputs($socket, "MAIL FROM: <".$this->smtp_username.">\r\n");
            if (!$this->_parseServer($socket, "250")) {
                fclose($socket);
                throw new Exception('Error of command sending: MAIL FROM');
            }

            $mailTo = ltrim($mailTo, '<');
            $mailTo = rtrim($mailTo, '>');
            fputs($socket, "RCPT TO: <" . $mailTo . ">\r\n");
            if (!$this->_parseServer($socket, "250")) {
                fclose($socket);
                throw new Exception('Error of command sending: RCPT TO');
            }

            fputs($socket, "DATA\r\n");
            if (!$this->_parseServer($socket, "354")) {
                fclose($socket);
                throw new Exception('Error of command sending: DATA');
            }

            fputs($socket, $contentMail."\r\n.\r\n");
            if (!$this->_parseServer($socket, "250")) {
                fclose($socket);
                throw new Exception("E-mail didn't sent");
            }

            fputs($socket, "QUIT\r\n");
            fclose($socket);
        } catch (Exception $e) {
            return  $e->getMessage();
        }
        return true;
    }

    private function _parseServer($socket, $response) {
        while (@substr($responseServer, 3, 1) != ' ') {
            if (!($responseServer = fgets($socket, 256))) {
                return false;
            }
        }
        if (!(substr($responseServer, 0, 3) == $response)) {
            return false;
        }
        return true;

    }
}

$res['msg'] = 0;
$name = trim(filter_input(INPUT_POST, 'inputName', FILTER_SANITIZE_STRING));
$phone = trim(filter_input(INPUT_POST, 'inputPhone', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'inputEmail', FILTER_VALIDATE_EMAIL));
$theme = trim(filter_input(INPUT_POST, 'inputTheme', FILTER_SANITIZE_STRING));
$call_time = trim(filter_input(INPUT_POST, 'inputTime', FILTER_SANITIZE_STRING));

if( file_exists('cfg/config.php') ):
    require 'cfg/config.php';

    $mailSMTP = new SendMailSmtpClass($cfg['login'], $cfg['pass'], 'ssl://smtp.gmail.com', 'THRONE Project', 465); // создаем экземпляр класса

// заголовок письма
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
    $headers .= "From:  <" . $cfg['login'] . ">\r\n"; // от кого письмо
    $subject = "throne.pro - " . $theme ;
    $to = $cfg['to'];
    $message =  Date("d.m.Y H:i")."<br/>"
        . ( is_null($name) || $name == '' ? '' : "Имя: " . $name . "<br/>")
        . ( is_null($phone) || $phone == '' ? '' : "Телефон: " . $phone . "<br/>")
        . ( is_null($call_time) || $call_time == '' ? '' : "Время звонка: " . $call_time . "<br/>")
        . ( $email === FALSE || $email == '' || is_null($email) ? '' : "Почта: " . $email);

    $result =  $mailSMTP->send($to, $subject, $message, $headers); // отправляем письмо
    if( $result === true ) {
        $res['msg'] = 1; //Письмо успешно отправлено
    } else {
        $res['msg'] = $result; //Письмо не отправлено.

        // отправляем админу письмо об ошибке
        $mailSMTP = new SendMailSmtpClass($cfg['mlogin'], $cfg['mpass'], 'ssl://smtp.gmail.com', 'THRONE Project', 465); // создаем экземпляр класса

        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From:  <" . $cfg['login'] . ">\r\n"; // от кого письмо
        $to = $cfg['to_adm'];
        $subject = "throne.pro - Ошибка при отправке письма.";
        $message = 'Ошибка отправки письма: ' . $res['msg'] . '<br/>'
            . ( is_null($name) || $name == '' ? '' : "Имя: " . $name . "<br/>")
            . ( is_null($phone) || $phone == '' ? '' : "Телефон: " . $phone . "<br/>")
            . ( is_null($call_time) || $call_time == '' ? '' : "Время звонка: " . $call_time . "<br/>")
            . ( $email === FALSE || $email == '' || is_null($email) ? '' : "Почта: " . $email);
        $result =  $mailSMTP->send($to, $subject, $message, $headers);
    }
else:
    $res['msg'] = 'Отсутствуют необходимые данные для отправки письма.';
    $mailSMTP = new SendMailSmtpClass($cfg['mlogin'], $cfg['mpass'], 'ssl://smtp.gmail.com', 'THRONE Project', 465); // создаем экземпляр класса
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
    $headers .= "From:  <" . $cfg['mlogin'] . ">\r\n"; // от кого письмо
    $subject = "throne.pro - Ошибка: файл config.php не найден.";
    $to = $cfg['to_adm'];
    $message =  Date("d.m.Y H:i")."<br/>"
        . 'Ошибка при отправке<br/>'
        . ( is_null($name) || $name == '' ? '' : "Имя: " . $name . "<br/>")
        . ( is_null($phone) || $phone == '' ? '' : "Телефон: " . $phone . "<br/>")
        . ( $email === FALSE || $email == '' || is_null($email) ? '' : "Почта: " . $email);

    $result =  $mailSMTP->send($to, $subject, $message, $headers); // отправляем письмо
endif;

if( file_exists('logs/callback_logs.csv') ):
    file_put_contents('logs/callback_logs.csv', date('d.m.Y H:i') . '#' . $name . '#' . $phone . '#' . $res['msg'] . "\r\n", FILE_APPEND);
endif;

echo json_encode($res);