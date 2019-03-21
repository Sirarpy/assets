<?php
error_reporting(E_ALL);

require_once "../model/db.php";
//include_once "../controller/paginationController.php";
session_start();
$db = new Db();
$user = $_SESSION['user'][0];

$output = "";

if (isset($_POST['search'])) {
    $_SESSION['search'] = $_POST['search'];
}
else if (!isset($_GET['limit'])){
    header('Location:account.php');
}

$search = $_SESSION['search'];

$result = "SELECT COUNT(title) 
           FROM posts 
           where title = '$search'";

$totalResult = $db->connectQuery($result);
$row = mysqli_fetch_row($totalResult);
$totalPosts = $row[0];
$totalPages = ceil($totalPosts / 5);

if (isset($_GET['limit'])){
    $offset = ($_GET['limit']-1)*5;
}
else{
    $offset = 0;
}

$result = mysqli_query($db->con(),"SELECT * FROM posts as p 
                             INNER JOIN users ON users.id = p.user_id
                             WHERE title LIKE '%$search%' LIMIT 5 OFFSET $offset");

$count = mysqli_num_rows($result);
if ($count == 0) {
    $output = "There is no results";
} else {
    $matches = mysqli_fetch_all($result);
}

require "header.php";
?>
    <!--------------- banner area start here --------------->
    <div class="banner-area banner-three">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-content">
                        <div class="banner-title white">
                            <h1><?= $user[1]; ?></h1>
                            <h1><?= $user[2]; ?></h1>
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
                        <img src="../public/images/user/<?= $user[3]; ?>" alt="banner">
                    </div>
                </div>
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
                        <?php foreach ($matches as $match) : ?>
                            <div class="single-post">
                                <div class="inner-post">
                                    <div class="post-img">
                                        <a href="#"><img src="../public/images/post/<?= $match[3]; ?>"
                                                         alt="blog"></a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-title">
                                            <h3><a href="blog-details.php"><?= $match[1]; ?></a></h3>
                                        </div>
                                        <div class="post-content">
                                            <p id="limit"><?= $match[2]; ?></p>
                                        </div>
                                        <div class="blog-meta fix">
                                            <div class="meta-left pull-left">
                                                <ul>
                                                    <li><span class="flaticon-man-user user"></span>
                                                        <p>By <a href="visit.php?user=<?= $match[4] ?>"><?= $match[6]; ?></a></p></li>

                                                    <li><span class="flaticon-calendar clendar"></span>
                                                        <p>20 Jan 2018</p></li>
                                                </ul>
                                            </div>
                                            <div class="post-readmore pull-right">
                                                <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-date one">
                                    <span>01</span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="pagination-area">
                        <div class="pagination">
                            <ul>
                                <li class="prev"><a href="#">Prev</a></li>
                                <?php if (!empty($totalPages)):for ($i = 1; $i <= $totalPages; $i++):
                                    if (isset($_GET['limit'])){
                                        $active = $_GET['limit'];
                                    }
                                    else{
                                        $active = 1;
                                    }
                                ?>
                                <?php if($i==$active): ?>
                                        <li class='page active' id="<?= $i; ?>">
                                            <a class='page-link' href='searchResults.php?limit=<?= $i; ?>'><?= $i; ?></a>
                                        </li>
                                    <?php else: ?>
                                        <li class="page" id="<?= $i; ?>">
                                            <a class='page-link' href='searchResults.php?limit=<?= $i; ?>'><?= $i; ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endfor;endif; ?>
                                <li class="next pull-right"><a href="#">Next</a></li>
                            </ul>
                        </div>
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