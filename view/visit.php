<?php
//include_once "../controller/search.php";

include_once "../model/db.php";
$db = new Db();

if (isset($_GET['user'])) {
    $search = $_GET['user'];
    $visitor = $db->query("SELECT * FROM users WHERE id = {$search}");
//    foreach ($visitor as $visit){
//        return $visit;
//    }
}

foreach ($visitor as $visit) {
    $visitId = $visit[0];
    $visitArticle = $db->query("SELECT * FROM posts WHERE user_id = '$visitId'");
}

//------------------------------------for pagination----------------------

$limitShow = 5;
$totalResult = $db->connectQuery("SELECT COUNT(id) FROM posts where user_id = '" . $visitId . "'");
$row = mysqli_fetch_row($totalResult);
$totalArticles = $row[0];
$totalPages = ceil($totalArticles / $limitShow);
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
};

$start_from = ($page - 1) * $limitShow;
$sql = "SELECT * FROM posts where user_id = '" . $visitId . "' LIMIT " . $start_from . "," . $limitShow;
$showResult = $db->query($sql);

?>

<?php include_once "header.php" ?>
    <div class="banner-area banner-three">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <div class="banner-content">

    <?php foreach ($visitor as $visit) : ?>
    <div class="banner-title white">
        <h1><?= $visit[1]; ?></h1>
        <h1><?= $visit[2]; ?></h1>
    </div>
    <div class="banner-subtitle white ">
        <h4>Professional Blogger</h4>
    </div>
    <div class="social-media">
        <ul>
            <li class="active"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-skype"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
        </ul>
    </div>
    </div>
    </div>
    <div class="col-md-6">
        <div class="banner-img">
            <img src="../public/images/user/<?= $visit[3]; ?>" alt="banner">
        </div>
    </div>
    <?php endforeach;?>
    </div>
    </div>
    </div>
    <!-- banner area start here -->

    <!-- secendary menu area start here -->
    <div class="secendary-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="secendary-menu">
                        <nav>
                            <ul>
                                <li class="active"><a href="#"> <span class="flaticon-sunset"></span> Travel </a></li>
                                <li><a href="#"> <span class="flaticon-worldwide"></span> World Tour </a></li>
                                <li><a href="#"> <span class="flaticon-boat"></span> Ship tour </a></li>
                                <li><a href="#"> <span class="flaticon-sunset"></span> Sea Tour </a></li>
                                <li><a href="#"> <span class="flaticon-museum"></span> Guide </a></li>
                                <li><a href="#"> <span class="flaticon-video-camera"></span> Fashion </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- secendary menu area start here -->

    <!-- post area start here	 -->
    <div class="post-two-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-list">
                    <div class="single-post">
                        <?php foreach ($showResult as $posts) : ?>
                            <div class="inner-post">
                                <div class="post-img">
                                    <a href="#"><img src="../public/images/post/<?= $posts[3]; ?>"
                                                     alt="blog"></a>
                                </div>
                                <div class="post-info">
                                    <div class="post-title">
                                        <h3><a href="#"><?= $posts[1]; ?></a></h3>
                                    </div>
                                    <div class="post-content">
                                        <p id="limit"><?= $posts[2]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="post-date one">
                                <span>01</span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- leaf left area start here	 -->
        <div class="leaf-left">
            <img src="../public/images/leaf-left.png" alt="leaf-right">
        </div>
        <!-- leaf left area end here	 -->
        <!-- leaf right area start here	 -->
        <div class="leaf-right">
            <img src="../public/images/leaf-right.png" alt="leaf-right">
        </div>
        <!-- leaf right area end here	 -->
    </div>
    <!-- post area end here	 -->

    <?php require "footer.php" ?>