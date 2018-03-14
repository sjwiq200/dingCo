<?php
/**
 * Created by PhpStorm.
 * User: sjwiq200
 * Date: 2018. 3. 13.
 * Time: AM 11:41
 */

include_once '../sql/connection.php';
$conn = mysqlConnection();
if ($_FILES['file']['name']) {

    echo "aaaa";
}
$sql = "INSERT INTO contents(content) VALUES ('".$_POST['editordata']."')";

$result = mysqli_query($conn,$sql);

mysqli_close($conn);

header('location:../../index.php');