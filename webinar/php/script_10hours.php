<?php
include('config.php');
$db = DataBase::getInstance();

$account = "webinar@my-health-way.com";
$subject = "Бесплатный вебинар";
$subject = '=?utf-8?b?' . base64_encode($subject) . '?=';
$message = file_get_contents("../messages/message_2.php");

//Формируем заголовки для почтового сервера
$headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
$headers .= "From: " . $account . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Date: " . date('D, d M Y h:i:s O') . "\r\n";

$all = $db->query("SELECT * FROM subscribers")->fetchAll(PDO::FETCH_ASSOC);
foreach($all as $user){
    $mail_status = mail($user['email'], $subject, $message, $headers);
}

