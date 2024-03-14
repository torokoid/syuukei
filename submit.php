<?php

// 送信されたデータを取得
$class_number = $_POST['class_number'];
$name = $_POST['name'];
$attendance = $_POST['attendance'];

// メール送信
$to = 'satoshi_hada@jp.honda';
$subject = '出欠確認';
$message = "クラス名: {$class_number}\n名前: {$name}\n出欠: {$attendance}";
$headers = 'From: yourname@example.com' . "\r\n" .
    'Reply-To: yourname@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo '送信が完了しました。';
} else {
    echo '送信に失敗しました。';
}
?>