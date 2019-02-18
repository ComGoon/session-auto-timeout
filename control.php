<?php
/**
 * Created by PhpStorm.
 * User: comgoon
 * Date: 2019-02-18
 * Time: 11:49
 */
session_start();




if (!isset($_POST['submit'])){

    header('location:log.php?is&not&set');

}else if (isset($_POST['submit'])) {

    $_SESSION['name'] = strtoupper($_POST['username']);


    $_SESSION['expire'] = time();

    header('location:log.php?&welcome');

}else{
        header('location:log.php?&problem&not&madani');
    }

