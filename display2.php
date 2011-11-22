<?php

$name  = $_POST['name'];
$sex   = $_POST['sex'];
$mail  = $_POST['mail'];
$phone = $_POST['phone'];

$error_message = array();

// Name
if (! empty ( $name ) ) {
    if ( mb_strlen ( $name, 'UTF-8') > 15) {
        $error_message['name'][] = "15文字以内で入力してください";
    }
}
else {
    $error_message['name'][] = "必須項目です";
}

// Mail
if (! empty ( $mail ) ) {
    if (! preg_match("/^[-.\w\/]+@[-._[:lower:]\d]+\.[[:lower:]]{2,4}$/", $mail)) {
        $error_message['mail'][] = "フォーマットを確認してください";
    }
}
else {
    $error_message['mail'][] = "必須項目です";
}

// Phone
if (! empty ( $phone ) ) {
    if (! preg_match("/^0\d{1,4}[-(]?\d{1,4}[-)]?\d{3,4}$/", $phone)) {
        $error_message['phone'][] = "フォーマットを確認してください";
    }
}
else {
    $error_message['phone'][] = "必須項目です";
}


if ( $error_message['name'] || $error_message['mail'] || $error_message['phone'] ) {
    include ('./form2.php');
    exit;
}
else {
    header('Location: ./form2.php?is_success=1');
    exit;
}

?>
