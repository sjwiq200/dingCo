<?php
/**
 * Created by PhpStorm.
 * User: sjwiq200
 * Date: 2018. 3. 13.
 * Time: PM 12:10
 */

if ($_FILES['file']['name']) {
    if (!$_FILES['file']['error']) {
        $name = md5(rand(100, 200));
        $ext = explode('.', $_FILES['file']['name']);
        $filename = $name . '.' . $ext[1];
        $destination = '../upload/' . $filename; //change this directory
        $location = $_FILES["file"]["tmp_name"];
        move_uploaded_file($location, $destination);
//        echo '사용자의 이미지 저장위치 url' . $filename;//change this URL
//        echo 'http://localhost:8888/dingCo/upload/'.$filename;
        echo 'http://sjwiq200.dothome.co.kr/dingCo/upload/'.$filename;
    } else {
        echo $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
    }
}

?>