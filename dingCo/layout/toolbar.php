

    <link href="/dingCo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/dingCo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>



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
            });

        });
    </script>

    <style>


        #footer{
            visibility: hidden;
        }




    </style>


</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/index.php"><h1>Dingco</h1></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="./dingCo/about.html"><h3>About</h3></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./dingCo/post.html"><h3>PortFolio</h3></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./dingCo/post.html"><h3>Service</h3></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="./dingCo/contact.html"><h3>Contact</h3></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./dingCo/contact.html">&nbsp;&nbsp;&nbsp;</a>
                </li>

                <li class="nav-item">
                    <?php

                    session_start();
                    if(!isset($_SESSION['user_id'])){
                        echo "<a class=\"nav-link\" href=\"\" data-toggle=\"modal\" data-target=\"#loginModal\"><h3>Login</h3></a>";
                    }else{
                        echo "<a class=\"nav-link\">Logout</a>";
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>



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





