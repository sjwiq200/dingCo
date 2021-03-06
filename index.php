<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="/dingCo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/dingCo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="/dingCo/css/clean-blog.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="/dingCo/vendor/jquery/jquery.min.js"></script>
    <script src="/dingCo/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/dingCo/js/clean-blog.min.js"></script>
    <!--Naver API-->
    <script type="text/javascript" src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.3.js" charset="utf-8"></script>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=ANZexXcsihPIUk6njWmm"></script>


    <!--    animation   -->
    <link rel="stylesheet" href="dingCo/css/animations.css">

    <script>
        $(function() {
            $("a:contains('LOGIN')").on("click", function() {
                $('#loginModal').modal('show');
            });

            $("a:contains('Logout')").on("click", function() {
                $("a:contains('Logout')").attr('href','./dingCo/logout.php');
            });

            $('button:contains("Login")').on('click',function () {
                $('#loginForm').attr('method','post').attr('action','./dingCo/login.php').submit();
            });

            $('h3:contains("문의")').on('click',function () {
                self.location="./dingCo/admin/modify.php";
            });


        });
    </script>

    <style>
        @keyframes tutsFade {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }



        .site-heading{
            animation-name: tutsFade;
            animation-duration: 2s;
            animation-delay: 0.1s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            animation-direction: alternate;
        }

        #footer{
            visibility: hidden;
        }

        #lastDiv{
            visibility: hidden;
        }

        @keyframes example {
            0%   {background-color:yellowgreen; left:0px; top:0px;}
            50%  {background-color:yellow; left:200px; }
            100% {background-color:whitesmoke; left:0px; top:0px;}
        }

        @keyframes example2 {
            0%   {color:gray; }
            100% {color:black; }
        }


        .firstTitle {

            position: relative;
            background-color: white;
            animation-name: example;
            animation-duration: 4s;
        }

        .secondTitle {
            position: relative;
            background-color: white;
            animation-name: example2;
            animation-duration: 4s;

        }


    </style>


</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/index.php">Dingco</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./dingCo/about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./dingCo/post.html">PortFolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./dingCo/contact.html">Contact</a>
                </li>

                <li class="nav-item">
                <?php


                if(!isset($_SESSION['user_id'])){
                    echo "<a class=\"nav-link\" href=\"\" data-toggle=\"modal\" data-target=\"#loginModal\">LOGIN</a>";
                }else{
                  echo "<a class=\"nav-link\">Logout</a>";
                }
                ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('/dingCo/img/main.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>딩코 : Dingco</h1>
                    <span class="subheading">Dingco's portfolio</span>
                    <h6>CONTACT : 01039397610</h6>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            <div class="post-preview" >
                <a href="/dingCo/post.html">
                    <h2 class="post-title firstTitle">
                        WORK WITH DINGCO
                    </h2>
                    <h3 class="post-subtitle">
                        사업에 필요한 모든 IT 서비스를 제공해드립니다.
                    </h3>
                </a>

            </div>
            <hr>

            <div class="post-preview" >
                <a href="/dingCo/post.html">
                    <h2 class="post-title secondTitle">
                        웹페이지 제작 및 유지보수
                    </h2>
                    <h3 class="post-subtitle">
                        웹사이트 개발 / 웹사이트 유지보수 / 모바일웹 & 앱 / 반응형홈페이지 / 커머스&쇼핑몰 / 데이터베이스 / 웹호스팅
                    </h3>
                </a>

            </div>


            <hr>
            <div class="post-preview">
                <a href="/dingCo/post.html">
                    <h2 class="post-title secondTitle">
                        어플리케이션 개발
                    </h2>
                    <h3 class="post-subtitle">
                       안드로이드 / ios / 스토어등록
                    </h3>
                </a>

            </div>
            <hr>
            <div id="lastDiv" class="post-preview animate">

                    <h3 class="post-subtitle text-lg-center">
                        </hr>딩코팀에게 홈페이지 및 어플리케이션 관련 문의하기
                    </h3>
                </a>


            </div>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>

<div>
    <?php
//    $conn = mysqli_connect('localhost', 'sjwiq200', '55tlswldud','sjwiq200','3306');
//    $conn = mysqli_connect('localhost', 'root', 'root','test','8889');
    include_once './dingCo/sql/connection.php';
    $conn = mysqlConnection();
    $sql = "SELECT * FROM contents WHERE content_no =6";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    echo $row['content'];
    mysqli_close($conn);
    ?>
</div>

<!-- Footer -->
<footer id="footer" class="animate">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
</footer>

<script>
    $(window).scroll(function() {
        $('#footer').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();

            if (imagePos < topOfWindow+750) {
                $(this).addClass("slideUp");
            }
        });
    });

    $(window).scroll(function() {
        $('#lastDiv').each(function(){
            var imagePos = $(this).offset().top;

            console.log('imagePos => '+imagePos);

            var topOfWindow = $(window).scrollTop();
            console.log('topOfWindow ==>' + topOfWindow);
            if (imagePos < topOfWindow+650) {
                $(this).addClass("slideExpandUp");
            }
        });
    });
</script>

<div id="map" style="width:100%;height:400px;"></div>
</body>

<!--LoginModal-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <div class="row">
                        <label for="userId" class="col-md-4">ID</label>
                        <input type="text" id="userId" name="userId" class="col-md-7">
                    </div>

                    <div class="row">
                        <label for="password" class="col-md-4">Password</label>
                        <input type="password" id="password" name="password" class="col-md-7">
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Login</button>
                <!-- (1) 버튼 event 처리를 위하여 id를 지정 id=loginButton -->
                <div id="naver_id_login"><a id="naverIdLogin_loginButton" href="#" role="button"><img src="https://static.nid.naver.com/oauth/big_g.PNG" width=200></a></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    // var naver_id_login = new naver_id_login("ANZexXcsihPIUk6njWmm", "http://sjwiq200.dothome.co.kr/");
    var naver_id_login = new naver_id_login("ANZexXcsihPIUk6njWmm", "http://localhost:8888/index.php");
    var state = naver_id_login.getUniqState();
    naver_id_login.setButton("white", 2,40);
    // naver_id_login.setDomain("http://sjwiq200.dothome.co.kr/index.php");
    naver_id_login.setDomain("http://localhost:8888/index.php");
    naver_id_login.setState(state);
    // naver_id_login.setPopup();
    naver_id_login.init_naver_id_login();

    // 접근 토큰 값 출력
    // alert(naver_id_login.oauthParams.access_token);
    //
    // alert(naver_id_login.getUniqState());
    // 네이버 사용자 프로필 조회
    naver_id_login.get_naver_userprofile("naverSignInCallback()");
    // 네이버 사용자 프로필 조회 이후 프로필 정보를 처리할 callback function
    function naverSignInCallback() {
        // alert(naver_id_login.getProfileData('email'));
        // alert(naver_id_login.getProfileData('nickname'));
        // alert(naver_id_login.getProfileData('age'));
        if(naver_id_login.oauthParams.access_token != null){
            self.location="./dingCo/loginNaver.php?email="+naver_id_login.getProfileData('email')+"&token="+naver_id_login.oauthParams.access_token;
        }
    }


</script>
<script>
    var map = new naver.maps.Map('map', {center: new naver.maps.LatLng(37.3595704, 127.105399)});
</script>


// 네이버 지도 Open API 예제 - 주소좌표변환
<?php
$client_id = "ANZexXcsihPIUk6njWmm";
$client_secret = "CLrKXAqCic";
$encText = urlencode("불정로 6");
$url = "https://openapi.naver.com/v1/map/geocode?query=".$encText; // json
// $url = "https://openapi.naver.com/v1/map/geocode.xml?query=".$encText; // xml

$is_post = false;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, $is_post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array();
$headers[] = "X-Naver-Client-Id: ".$client_id;
$headers[] = "X-Naver-Client-Secret: ".$client_secret;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo "status_code:".$status_code."<br>";
curl_close ($ch);
if($status_code == 200) {
    echo $response;
} else {
    echo "Error 내용:".$response;
}
?>



</html>


