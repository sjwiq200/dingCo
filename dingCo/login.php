<?php
/**
 * Created by PhpStorm.
 * User: sjwiq200
 * Date: 2018. 3. 12.
 * Time: PM 11:03
 */

include_once './sql/connection.php';
$conn = mysqlConnection();


$sql = "SELECT * FROM users WHERE user_id= '".$_POST['userId']."'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

//echo $row['password'];
session_start();
if($_POST['password'] == $row['password']){

$_SESSION['user_id'] = $_POST['userId'];
header('Location:../index.php');
}else{
header('Location:../index.php');
echo "<script>alert('failed');</script>";
}
mysqli_free_result($result);
mysqli_close($conn);

?>