<?php
require('config.php');
$db = DataBase::getInstance();
DataBase::createSubscriber($db);

if (isset($_POST['request'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $answer = $_POST['answer'];

    $token = $_POST['token'];
    $secret = "6Lfgw5QUAAAAAO9PeUkh0H5A4MEhLxqcVLDyucaY";

    $telegram = '624859988:AAHZKrPhXejJgtsFWgXrf2U-FMW8okH8eS0';
    $chat_id = '@healthwaywebinar';

    $account = "webinar@my-health-way.com";
    $subject = "Запись на вебинар";
    $subject = '=?utf-8?b?' . base64_encode($subject) . '?=';
    $message = file_get_contents("../messages/message_1.php");

    //Формируем заголовки для почтового сервера
    $headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
    $headers .= "From: " . $account . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: " . date('D, d M Y h:i:s O') . "\r\n";


//    curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
//    curl_setopt($curl, CURLOPT_POST, true);
//    curl_setopt($curl, CURLOPT_POSTFIELDS, "secret=$secret&response=$token");
//    $out = curl_exec($curl);
//    curl_close($curl);
//
//    $captcha_response = json_decode($out);
//    if ($captcha_response != null && $captcha_response->success) {
//
//    }

    $emailExist = $db->query("SELECT email FROM subscribers WHERE email='$email'")->fetch(PDO::FETCH_LAZY);
    if ($emailExist) {
        echo '{"status":"false","message":"Вы уже записались на данный вебинар!"}';
    } else {
         $result =  $db->exec("INSERT INTO subscribers (name,email,phone,answer) VALUES ('$name','$email','$phone','$answer') ");
       $all = $db->query("SELECT * FROM subscribers")->fetchAll(PDO::FETCH_ASSOC);
       $members = count($all);
       $instagram = 0;
       $youtube = 0;
       $third = 0;
       foreach ($all as $user){
           if($user['answer']==1)$instagram++;
           if($user['answer']==2)$youtube++;
           if($user['answer']==3)$third++;
        }

       if ($result) {
           $telegramMessage = "Новая заявка: 
                Имя: $name 
                Email: $email
                Телефон: $phone
                Instagram:  $instagram. Youtube:  $youtube. Оба:  $third
                Количество участников: $members";

            // Отправить сообщение
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,
                'https://api.telegram.org/bot' . $telegram . '/sendMessage');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,
                'chat_id=' . $chat_id . '&text=' . urlencode($telegramMessage));
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
            // Отправить сообщение
            $telegram_response = curl_exec($ch);
            curl_close($ch);

            $telegram_status = json_decode($telegram_response)->ok;
            $mail_status = mail($email, $subject, $message, $headers);
            echo '{"status":"true","message":"Поздравляем, Вы успешно записаны на вебинар, ждем Вас 26 июля в 19:00 по киевскому времени"}';
        }
    }
}