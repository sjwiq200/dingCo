<?php
/**
 * Created by PhpStorm.
 * User: sjwiq200
 * Date: 2018. 3. 13.
 * Time: PM 7:42
 */
session_start();
$_SESSION['user_id'] = $_GET['email'];
$_SESSION['token'] = $_GET['token'];
?>
<meta http-equiv='refresh' content='0;url=../index.php'>
