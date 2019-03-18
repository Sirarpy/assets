<?php //session_start();

?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">

<!-- Mirrored from xfar.netlify.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2019 09:10:21 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="smartit-source">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- title here -->
    <title>Xfars - Personal Tour Travelers Blog HTML5 Template</title>
    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="public/images/fav.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="view/apple-touch-icon.html">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/flaticon.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <link rel="stylesheet" href="public/css/owl.carousel.css">
    <link rel="stylesheet" href="public/css/owl.theme.css">
    <link rel="stylesheet" href="public/css/owl.transitions.css">
    <link rel="stylesheet" href="public/css/jquery.barfiller.css">
    <!--Theme custom css -->
    <link rel="stylesheet" href="public/css/style.css">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="public/css/responsive.css"/>
    <script src="public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <!--    new links bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">

</head>
<body>
<!-- header area start here -->
<header class="header-area-main header-one" id="sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="log-area">
                    <a href="view/account.php"><img src="public/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-8">
                <form method="post" action="controller/AuthController.php">
                    <div class="form-row d-flex justify-content-end">
                        <?php if (isset($_GET['mess'])) : ?>
                            <p class="text-danger">
                                <?php echo $_GET['mess'] ?>
                            </p>
                        <?php endif; ?>
                        <div class="col-sm-3 my-1">
                            <label class="sr-only" for="email">E_mail</label>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">@</span>
                                </div>
                                <input id="email" placeholder="E_mail" name="email" type="email"
                                       class="form-control" aria-label="Sizing example input"
                                       aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                        <div class="col-sm-3 my-1">
                            <label class="sr-only" for="password">Password</label>
                            <div class="input-group input-group-sm mb-3">
                                <input id="password" placeholder="Password" name="password" type="password"
                                       class="form-control" aria-label="Sizing example input"
                                       aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                        <div class="col-sm-3 my-1">
                            <div class="input-group input-group-sm mb-3">
                                <div class="col-auto my-1">
                                    <button type="submit" class="btn btn-primary btn-sm" name="submit" value="logIn">Log in</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<!-- header area start here -->

<!-- banner area start here -->
<div class="banner-area-reg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-img">
                    <img src="public/images/banner/1.png" alt="banner">
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="controller/AuthController.php">
                            <div class="form-group">
                                <label for="fName" class="cols-sm-2 control-label">Your First Name</label>
                                <div class="cols-sm-8">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa"
                                                                               aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="fName" id="fName"
                                               placeholder="Enter your First Name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lName" class="cols-sm-2 control-label">Your Last Name</label>
                                <div class="cols-sm-8">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-users fa"
                                                                               aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="lName"
                                               id="lName"
                                               placeholder="Enter your Last Name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                <div class="cols-sm-8">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa"
                                                                               aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="email" id="email"
                                               placeholder="Enter your Email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Password</label>
                                <div class="cols-sm-8">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg"
                                                                               aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password"
                                               id="password"
                                               placeholder="Enter your Password"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Confirm
                                    Password</label>
                                <div class="cols-sm-8">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg"
                                                                               aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="confirm"
                                               id="confirm"
                                               placeholder="Confirm your Password"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit" value="regIn">
                                    Register
                                </button>
                                <?php if (isset($_GET['sms'])) : ?>
                                        <p class="text-danger">
                                            <?php echo $_GET['sms'] ?>;
                                        </p>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>