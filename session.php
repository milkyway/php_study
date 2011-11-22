<?php
session_start();

    if( isset( $_SESSION[ "count" ] ) ) {

        $_SESSION[ "count" ]++;

    } else {

        $_SESSION[ "count" ] = 1;
    }
?>

<html>
<body>
あなたは
<?php echo htmlspecialchars( $_SESSION[ "count" ] ) ?>
回目の訪問です
<a href="<?php echo htmlspecialchars( $_SERVER[ "PHP_SELF" ] ) ?>">ページを更新する</a>
</body>
</html>
