<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Vallidation</title>
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <style type="text/css">
<!--
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
if ($_GET['is_success']) {
    echo '<div class="alert-message success">';
    echo "<p>正常に処理されました</p>";
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
                    <input type="text" name="name">
<?
if ( isset ($error_message['name']) ) {
    foreach ( $error_message['name'] as $str ) {
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
                    <input type="text" name="mail">
<?
if ( isset ($error_message['mail']) ) {
    foreach ( $error_message['mail'] as $str ) {
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
                    <input type="text" name="phone">
<?
if ( isset ($error_message['phone']) ) {
    foreach ( $error_message['phone'] as $str ) {
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
