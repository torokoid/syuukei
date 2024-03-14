<?php

// 送信されたデータを取得
$class_number = $_POST['class_number'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$attendance = $_POST['attendance'];

// メール送信
$to = 'example@mail.com';
$subject = '出欠確認';
$message = "クラス名: {$class_number}\n名前: {$name}\nコメント: {$comment}\n出欠: {$attendance}";
mail($to, $subject, $message);

?>