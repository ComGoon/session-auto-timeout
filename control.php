<?php
/**
 * Created by PhpStorm.
 * User: comgoon
 * Date: 2019-02-18
 * Time: 11:49
 */
session_start();




if (!isset($_POST['submit'])){

    header('location:index.php?is&not&set');

}else if (isset($_POST['submit'])) {

    $_SESSION['name'] = strtoupper($_POST['username']);


    $_SESSION['expire'] = time();

    header('location:index.php?&welcome');

}else{
        header('location:index.php?&problem&not&madani');
    }

