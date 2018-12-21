<?php
/**
 * Created by PhpStorm.
 * User: oleksii.khodakivskyi
 * Date: 21.12.18
 * Time: 13:20
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoloader.php';

$folders_with_classes = array(
    'controller',
    'model'
);

Autoloader::register($folders_with_classes);

$path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'numbers.php';
$phone_numbers = new PhoneNumbers(new ModelManager(new ModelArray($path)));

if (!empty($phone_numbers)) {
    $numbers = $phone_numbers->getNumbers();

    if (!empty($numbers)) {
        shuffle($numbers);
        $res = array();

        for($i = 0; $i < count($numbers); $i++) {
            $res[$numbers[$i]['phone_number']] = $numbers[$i+1]['name'];
        }

        $res[$numbers[count($numbers)-1]['phone_number']] = $numbers[0]['name'];

        foreach ($res as $number => $name) {
            $message = 'HO-HO-HO! Your goal is - ' . $name . '. And this is a secret! I\'m watching you!##';
            $to = $number . '@txtlocal.co.uk';
            $from = 'From: example@gmail.com';
            $response = mail($to, "SecretSanta", $message, $from);
        }
    }
}