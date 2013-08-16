<?php
$header = "Oracle" . (($header) ? " | " . $header : "");
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html">
        <meta>
        <title><?php echo $header; ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- @todo: fill with your company info or remove -->
        <meta name="description" content="">
        <meta name="author" content="Themelize.me">

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet">

        <!-- Plugins -->
        <link href="css/flexslider.css" rel="stylesheet">

        <!-- Theme style -->
        <link href="css/theme-style.css" rel="stylesheet">

        <!-- Your custom override -->
        <link href="css/custom-style.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
        <!--
            <link rel="shortcut icon" href="index.php/demos/appstrap1.4/img/icons/favicon.png">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="index.php/demos/appstrap1.4/img/icons/114x114.png">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="index.php/demos/appstrap1.4/img/icons/72x72.png">
            <link rel="apple-touch-icon-precomposed" href="index.php/demos/appstrap1.4/img/icons/default.png">
        -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css'>
    </head>
    <body class="page page-index">

        <div id="navigation" class="wrapper">

            <div class="navbar  navbar-static-top">
                <!--Header & Branding region-->
                <div class="header">
                    <div class="header-inner container">
                        <div class="row-fluid">
                            <div class="span8">
                                <!--branding/logo-->
                                <a class="brand" href="index.php" title="Home">
                                    <h1><span>Ora</span>cle<span>.</span></h1>
                                </a>
                                <div class="slogan">Ask anything</div>
                            </div>

                            <!--header rightside-->
                            <div class="span4">

                                <!--social media icons-->
                                <div class="social-media pull-right">
                                    <!--@todo: replace with company social media details-->
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                    <a href="#"><i class="icon-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (isset($nav)) include_once 'nav.php'; ?>
            </div>
        </div>
