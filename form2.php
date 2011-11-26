<?php                                                                                                                                                   
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Vallidation</title>
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <style type="text/css">
<!--
body {
    background-color: #FFFAFA;
}

input {
    height: 25px;
}

a:hover {
    text-decoration: none;
}

p.firstMessage {
    font-size: 1.5em;
}

.alert-message {
    margin-top: 5px;
    margin-bottom: -5px;
}

.success {
    margin-bottom: 10px;
}
-->
    </style>
</head>
<body>
    <div class="container span12">
        <div>
            <a href="./form2.php"><h1>Vallidation</h1></a>
        </div>
<?
if ( $_GET['is_success'] ) {
    echo '<div class="alert-message success">';
    echo "<p>正常に処理が終了しました</p>";
    echo '</div>';
}
?>
        <div>
            <p class="firstMessage">Please fill in the fields.</p>
        </div>
        <form class="form-stacked" action="./display2.php" method="post">
        <table class="zebra-striped">
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="<?php echo ($_SESSION['vallidation']['name']['org']); ?>">
<?
if ( isset ($_SESSION['vallidation']['name']['message']) ) {
    foreach ( $_SESSION['vallidation']['name']['message'] as $str ) {
        echo '<div class="alert-message error">';
        echo "<p>$str</p>";
        echo '</div>';
    }
}
?>
                </td>
            </tr>
            <tr>
                <td>Sex</td>
                <td>
                    <select name="sex">
                        <option checked>male</option>
                        <option>female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Mail</td>
                <td>
                    <input type="text" name="mail" value="<?php echo ($_SESSION['vallidation']['mail']['org']); ?>">
<?
if ( isset ($_SESSION['vallidation']['mail']['message']) ) {
    foreach ( $_SESSION['vallidation']['mail']['message'] as $str ) {
        echo '<div class="alert-message error">';
        echo "<p>$str</p>";
        echo '</div>';
    }
}
?>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="text" name="phone" value="<?php echo ($_SESSION['vallidation']['phone']['org']); ?>">
<?
if ( isset ($_SESSION['vallidation']['phone']['message']) ) {
    foreach ( $_SESSION['vallidation']['phone']['message'] as $str ) {
        echo '<div class="alert-message error">';
        echo "<p>$str</p>";
        echo '</div>';
    }
}
?>
                </td>
            </tr>
        </table>
        <div class="actions">
            <button class="btn primary" type="submit">Submit</button>
            <button class="btn" type="reset">Cancel</button>
        </div>
        </form>
    </div>
</body>
</html>
<?php
$_SESSION['vallidation'] = array();
session_destroy();
?>
