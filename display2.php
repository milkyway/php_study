<?php
session_start();
$_SESSION['vallidation'] = array();

$name  = $_POST['name'];
$sex   = $_POST['sex'];
$mail  = $_POST['mail'];
$phone = $_POST['phone'];

// Name
if (! empty ( $name ) ) {
    if ( mb_strlen ( $name, 'UTF-8') > 15) {
        $_SESSION['vallidation']['name']['message'][] = "15文字以内で入力してください";
    }
}
else {
    $_SESSION['vallidation']['name']['message'][] = "必須項目です";
}
$_SESSION['vallidation']['name']['org'] = $name;

// Mail
if (! empty ( $mail ) ) {
    if (! preg_match("/^[-.\w\/]+@[-._[:lower:]\d]+\.[[:lower:]]{2,4}$/", $mail)) {
        $_SESSION['vallidation']['mail']['message'][] = "フォーマットを確認してください";
    }
}
else {
    $_SESSION['vallidation']['mail']['message'][] = "必須項目です";
}
$_SESSION['vallidation']['mail']['org'] = $mail;

// Phone
if (! empty ( $phone ) ) {
    if (! preg_match("/^0\d{1,4}[-(]?\d{1,4}[-)]?\d{3,4}$/", $phone)) {
        $_SESSION['vallidation']['phone']['message'][] = "フォーマットを確認してください";
    }
}
else {
    $_SESSION['vallidation']['phone']['message'][] = "必須項目です";
}
$_SESSION['vallidation']['phone']['org'] = $phone;


if ( $_SESSION['vallidation']['name']['message'] || $_SESSION['vallidation']['mail']['message'] || $_SESSION['vallidation']['phone']['message'] ) {
    header('Location: ./form2.php');
    exit;
}
else {
    header('Location: ./form2.php?is_success=1');
    exit;
}

?>
