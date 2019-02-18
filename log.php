<?php
/**
 * Created by PhpStorm.
 * User: comgoon
 * Date: 2019-02-18
 * Time: 11:46
 */
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="font-size: 24px">

<p><u><h1 style="font-family: '.SF NS Display', '.SF NS Text', 'American Typewriter'">MEMBER SPACE !!!</h1></u></p>

<?php

    if (isset($_SESSION['name']) AND !empty($_SESSION['name'])){
        ?>
<h1>Welcome: <span style="color: #28a745"> <?=  $_SESSION['name'] ?> </span></h1>
        <h1>You have <span style="color: #28a745">5 seconds</span>, after that; you need to log in again!</h1>

    <?php
        echo 'We offer you this unique id: <span style="color: #28a745">' . time() . '</span><br>';
//        echo $_SESSION['expire'] + 10;
        ?>

        <form action="">
            <input type="submit" value="REFRESH" style=" border-radius: 3px ;height: 50px; padding: 10px; width: 200px; font-size: 24px; background: #007bff">
        </form>

<?php

//        $_SESSION['expire'] = time();
        if (time() >= ($_SESSION['expire'] + 5)){
            echo '<h5 style="color: #ffc107 ;">Your member space timeout!</h5>';
            session_unset();
            session_destroy();
        }
    }
?>

<form action='control.php' method="post">
    <br><br>
    <input type="text" name="username" placeholder=" user name" style="height: 20px; border-radius: 3px"><br><br>
    <input type="submit" name="submit" value="send" style="height: 64px">
</form>

</body>
</html>
