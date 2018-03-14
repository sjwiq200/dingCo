<?php
session_start();



if(isset($_SESSION['token'])){
    echo $_SESSION['token'];

    $ch = curl_init('https://nid.naver.com/oauth2.0/token?grant_type=delete&client_id=ANZexXcsihPIUk6njWmm&client_secret=CLrKXAqCic&access_token='.preg_replace("/\s+/","",$_SESSION['token']).'&service_provider=NAVER');
    var_dump('https://nid.naver.com/oauth2.0/token?grant_type=delete&client_id=ANZexXcsihPIUk6njWmm&client_secret=CLrKXAqCic&access_token='.preg_replace("/\s+/","",$_SESSION['token']).'&service_provider=NAVER');
    var_dump($ch);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt ($curlsession, CURLOPT_POSTFIELDSIZE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    $res = curl_exec($ch);
    var_dump($res);
    curl_close($ch);
}

$_SESSION = array();
session_unset($_SESSION['user_id']);
unset($_SESSION['user_id']);

session_unset($_SESSION['token']);
unset($_SESSION['token']);

session_destroy();

?>

<meta http-equiv='refresh' content='0;url=../index.php'>

