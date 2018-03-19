<?php
/**
 * Created by PhpStorm.
 * User: sjwiq200
 * Date: 2018. 3. 13.
 * Time: PM 11:56
 */

function mysqlConnection(){
    $conn = mysqli_connect('localhost', 'root', 'root','test','8889');
//    $conn = mysqli_connect('localhost', 'sjwiq200', '55tlswldud','sjwiq200','3306');
    return $conn;
}
?>