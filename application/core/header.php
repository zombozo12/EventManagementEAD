<?php
    use rcastera\Browser\Session\Session;
    $sessionManager = new Session();

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Management EAD</title>
    <meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
    <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
    <meta name="author" content="Luka Cvetinovic for Codrops" />
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="shortcut icon" href="img/icon-ead.png">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
<div class="preloader">
    <img src="img/loader.gif" alt="Preloader image">
</div>
<nav class="navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/icon-ead.png" data-active-url="img/icon-ead.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
                if($sessionManager->isRegistered()){
                    echo '<ul class="nav navbar-nav navbar-right main-nav">
                            <li><a href="#intro">Home</a></li>
                            <li><a href="#pricing">Event</a></li>
                            <li><a href="#yyy">About Us</a></li>
                            <li><a href="#">'. $sessionManager->get('current_user') .'</a></li>
                            <li><a href="../application/logout.php" data-toggle="modal" class="btn btn-blue">Logout</a></li>
                        </ul>';
                }else{
                    echo '<ul class="nav navbar-nav navbar-right main-nav">
                            <li><a href="#intro">Home</a></li>
                            <li><a href="#pricing">Event</a></li>
                            <li><a href="#yyy">About Us</a></li>
                            <li><a href="#hhh" data-toggle="modal" data-target="#modal2">Register</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Sign In</a></li>
                        </ul>';
                }
            ?>
        </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>