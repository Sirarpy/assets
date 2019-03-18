<?php
error_reporting(E_ALL);

require_once "../model/db.php";
include_once "../model/auth.php";
include_once "../model/functions.php";

require "header.php";

var_dump($_SESSION);
die();
//$db = new Db();

//$selectPost = $db->query("SELECT * FROM posts WHERE user_id='" . $user[0][0] . "'");

//$func->dd($selectPost)[0];

//var_dump($selectPost);
//foreach ($selectPost as $post){
//    var_dump($post[3]);
//}
//die();
//var_dump($user[0]);
?>
<!-- banner area start here -->
<div class="banner-area banner-three">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-content">

                    <div class="banner-title white">
<!--                        <h1>--><?//= $user['firstName'];?><!--</h1>-->
<!--                        <h1>--><?//= $user['lastName'];?><!--</h1>-->

<!--                        <h1>--><?//= $user[1];?><!--</h1>-->
<!--                        <h1>--><?//= $user[2];?><!--</h1>-->
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
                    <img src="../public/images/user/<?= $user['picture'];?>" alt="banner">
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
                            <li><a href="#"> <span class="flaticon-boat"></span> Ship tour  </a></li>
                            <li><a href="#"> <span class="flaticon-sunset"></span> Sea Tour  </a></li>
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
                    <?php foreach ($selectPost as $post): ?>
                        <div class="single-post">
                            <div class="inner-post">
                                <div class="post-img">
                                    <a href="#"><img src="../public/images/post/<?= $post[3]; ?>" alt="blog"></a>
                                </div>
                                <div class="post-info">
                                    <div class="post-title">
                                        <h3><a href="blog-details.php #""><?= $post[1]; ?></a></h3>
                                    </div>
                                    <div class="post-content">
                                        <p id="limit"><?= $post[2]; ?></p>
                                    </div>
                                    <div class="blog-meta fix" >
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li> <span class="flaticon-man-user user"></span> <p>By <a href="#"><?= $user['firstName'];; ?></a> </p></li>
                                                <li> <span class="flaticon-calendar clendar"></span> <p>20 Jan 2018</p></li>
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
                    <div class="related-post-two box-shadow">
                        <div class="related-slidetwo-post">
                            <div class="single-blog">
                                <div class="post-thumbnile">
                                    <a href="#"><img src="../public/images/blog/rp1.jpg" alt="related post"></a>
                                    <div class="cetagory-icon">
                                        <span class="flaticon-art"></span>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="#">Tourism in saint martin </a></h3>
                                    </div>
                                    <div class="blog-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            </ul>
                                        </div>
                                        <div class="post-readmore pull-right">
                                            <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog">
                                <div class="post-thumbnile">
                                    <a href="#"><img src="../public/images/blog/rp2.jpg" alt="related post"></a>
                                    <div class="cetagory-icon">
                                        <span class="flaticon-video-player"></span>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="#">Tourism in saint martin </a></h3>
                                    </div>
                                    <div class="blog-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            </ul>
                                        </div>
                                        <div class="post-readmore pull-right">
                                            <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog">
                                <div class="post-thumbnile">
                                    <a href="#"><img src="../public/images/blog/rp1.jpg" alt="related post"></a>
                                    <div class="cetagory-icon">
                                        <span class="flaticon-art"></span>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="#">Tourism in saint martin </a></h3>
                                    </div>
                                    <div class="blog-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            </ul>
                                        </div>
                                        <div class="post-readmore pull-right">
                                            <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog">
                                <div class="post-thumbnile">
                                    <a href="#"><img src="../public/images/blog/rp2.jpg" alt="related post"></a>
                                    <div class="cetagory-icon">
                                        <span class="flaticon-video-player"></span>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="#">Tourism in saint martin </a></h3>
                                    </div>
                                    <div class="blog-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            </ul>
                                        </div>
                                        <div class="post-readmore pull-right">
                                            <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="single-blog">
                                <div class="post-thumbnile">
                                    <a href="#"><img src="../public/images/blog/rp1.jpg" alt="related post"></a>
                                    <div class="cetagory-icon">
                                        <span class="flaticon-art"></span>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="#">Tourism in saint martin </a></h3>
                                    </div>
                                    <div class="blog-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            </ul>
                                        </div>
                                        <div class="post-readmore pull-right">
                                            <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog">
                                <div class="post-thumbnile">
                                    <a href="#"><img src="../public/images/blog/rp2.jpg" alt="related post"></a>
                                    <div class="cetagory-icon">
                                        <span class="flaticon-video-player"></span>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="#">Tourism in saint martin </a></h3>
                                    </div>
                                    <div class="blog-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            </ul>
                                        </div>
                                        <div class="post-readmore pull-right">
                                            <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-post">
                        <div class="inner-post">
                            <div class="post-img">
                                <a href="#"><img src="../public/images/blog/7.png" alt="blog"></a>
                            </div>
                            <div class="post-info">
                                <div class="post-title">
                                    <h3><a href="#">Tourism in cox's bazar</a></h3>
                                </div>
                                <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown printer took a galley of type and scrambled it to make aspecimen book.</p>
                                </div>
                                <div class="blog-meta fix" >
                                    <div class="meta-left pull-left">
                                        <ul>
                                            <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            <li> <span class="flaticon-calendar clendar"></span> <p>20 Jan 2018</p></li>
                                        </ul>
                                    </div>
                                    <div class="post-readmore pull-right">
                                        <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-date one">
                            <span>03</span>
                        </div>
                    </div>
                    <div class="single-post">
                        <div class="inner-post">
                            <div class="post-img">
                                <a href="#"><img src="../public/images/blog/9.png" alt="blog"></a>
                            </div>
                            <div class="post-info">
                                <div class="post-title">
                                    <h3><a href="#">Tourism in cox's bazar</a></h3>
                                </div>
                                <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown printer took a galley of type and scrambled it to make aspecimen book.</p>
                                </div>
                                <div class="blog-meta fix" >
                                    <div class="meta-left pull-left">
                                        <ul>
                                            <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            <li> <span class="flaticon-calendar clendar"></span> <p>20 Jan 2018</p></li>
                                        </ul>
                                    </div>
                                    <div class="post-readmore pull-right">
                                        <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-date one">
                            <span>04</span>
                        </div>
                    </div>
                    <div class="single-post">
                        <div class="inner-post">
                            <div class="post-img">
                                <a href="#"><img src="../public/images/blog/10.png" alt="blog"></a>
                            </div>
                            <div class="post-info">
                                <div class="post-title">
                                    <h3><a href="#">Tourism in cox's bazar</a></h3>
                                </div>
                                <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown printer took a galley of type and scrambled it to make aspecimen book.</p>
                                </div>
                                <div class="blog-meta fix" >
                                    <div class="meta-left pull-left">
                                        <ul>
                                            <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            <li> <span class="flaticon-calendar clendar"></span> <p>20 Jan 2018</p></li>
                                        </ul>
                                    </div>
                                    <div class="post-readmore pull-right">
                                        <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-date one">
                            <span>05</span>
                        </div>
                    </div>
                    <div class="single-post">
                        <div class="inner-post">
                            <div class="post-img">
                                <a href="#"><img src="../public/images/blog/11.png" alt="blog"></a>
                            </div>
                            <div class="post-info">
                                <div class="post-title">
                                    <h3><a href="#">Tourism in cox's bazar</a></h3>
                                </div>
                                <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown printer took a galley of type and scrambled it to make aspecimen book.</p>
                                </div>
                                <div class="blog-meta fix" >
                                    <div class="meta-left pull-left">
                                        <ul>
                                            <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            <li> <span class="flaticon-calendar clendar"></span> <p>20 Jan 2018</p></li>
                                        </ul>
                                    </div>
                                    <div class="post-readmore pull-right">
                                        <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-date one">
                            <span>06</span>
                        </div>
                    </div>
                    <div class="single-post">
                        <div class="inner-post">
                            <div class="post-img">
                                <a href="#"><img src="../public/images/blog/12.png" alt="blog"></a>
                            </div>
                            <div class="post-info">
                                <div class="post-title">
                                    <h3><a href="#">Tourism in cox's bazar</a></h3>
                                </div>
                                <div class="post-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry's standard dum	my text ever since the when an unknown printer took a galley of type and scrambled it to make aspecimen book.</p>
                                </div>
                                <div class="blog-meta fix" >
                                    <div class="meta-left pull-left">
                                        <ul>
                                            <li> <span class="flaticon-man-user user"></span> <p>By <a href="#">Admin</a> </p></li>
                                            <li> <span class="flaticon-calendar clendar"></span> <p>20 Jan 2018</p></li>
                                        </ul>
                                    </div>
                                    <div class="post-readmore pull-right">
                                        <a href="#" class="readmore-btn">Read More <span>+</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-date one">
                            <span>07</span>
                        </div>
                    </div>
                    <div class="pagination-area">
                        <div class="pagination">
                            <ul>
                                <li class="prev"><a href="#">PRev</a></li>
                                <li class="page"><a href="#">01</a></li>
                                <li class="page"><a href="#">02</a></li>
                                <li class="page"><a href="#">03</a></li>
                                <li class="page"><a href="#">04</a></li>
                                <li class="page active"><a href="#">05</a></li>
                                <li class="page"><a href="#">06</a></li>
                                <li class="page"><a href="#">07</a></li>
                                <li class="next pull-right"><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <div class="col-lg-4">
                <div class="sidebar-widget">
                    <div class="single-widget profile-widget box-shadow">
                        <div class="widget-inner text-center">
                            <div class="profile-img">
                                <a href="#"> <img src="../public/images/user/<?= $user['picture'];?>" alt="profile"></a>
                            </div>
                            <div class="profile-name">
                                <h3><a href="profile.php"><?= $user['firstName'];?> <?= $user['lastName'];?></a></h3>
                                <p>Professional Blogger</p>
                                <p><a href="../controller/logOutController.php" >Logout</a></p>
                            </div>
                            <div class="social-media">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget category-widget box-shadow">
                        <div class="widget-inner">
                            <div class="widget-title">
                                <h3>Category</h3>
                            </div>
                            <div class="category-list">
                                <ul>
                                    <li class="active"><a href="#">Fashion   <span>10</span></a></li>
                                    <li><a href="#">Life style   <span>20</span></a></li>
                                    <li><a href="#">Creative   <span>30</span></a></li>
                                    <li><a href="#">Traveling   <span>40</span></a></li>
                                    <li><a href="#">Guide   <span>10</span></a></li>
                                    <li><a href="#">World Tour   <span>20</span></a></li>
                                    <li><a href="#">Ship Tour   <span>30</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget recent-post-widget box-shadow">
                        <div class="widget-inner">
                            <div class="widget-title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="recent-post-list">
                                <div class="single-post">
                                    <div class="posty-img">
                                        <a href="#"><img src="../public/images/blog/r1.png" alt="post"></a>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="#">We denounce with right indig</a></h4>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="posty-img">
                                        <a href="#"><img src="../public/images/blog/r2.png" alt="post"></a>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="#">Voluptatum  atque  delenit   </a></h4>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="posty-img">
                                        <a href="#"><img src="../public/images/blog/r3.png" alt="post"></a>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="#">Debitis aut rerum necessitatibus   </a></h4>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="posty-img">
                                        <a href="#"><img src="../public/images/blog/r4.png" alt="post"></a>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="#">Ndignation and dislike men who</a></h4>
                                    </div>
                                </div>
                                <div class="single-post mb-0">
                                    <div class="posty-img">
                                        <a href="#"><img src="../public/images/blog/r5.png" alt="post"></a>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="#">Ndignation and dislike men who </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget banner-widget box-shadow">
                        <div class="banner-img">
                            <a href="#"><img src="../public/images/banner/2.png" alt="profile"></a>
                            <div class="banner-title">
                                <h3>Banner Space Here</h3>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget instagram-widget box-shadow">
                        <div class="widget-inner">
                            <div class="widget-title">
                                <h3>Instagram</h3>
                            </div>
                            <div class="instagram-list">
                                <ul>
                                    <li><a href="#"><img src="../public/images/instagram/1.png" alt="instagram"></a></li>
                                    <li><a href="#"><img src="../public/images/instagram/2.png" alt="instagram"></a></li>
                                    <li><a href="#"><img src="../public/images/instagram/3.png" alt="instagram"></a></li>
                                    <li><a href="#"><img src="../public/images/instagram/4.png" alt="instagram"></a></li>
                                    <li><a href="#"><img src="../public/images/instagram/5.png" alt="instagram"></a></li>
                                    <li><a href="#"><img src="../public/images/instagram/6.png" alt="instagram"></a></li>
                                    <li><a href="#"><img src="../public/images/instagram/7.png" alt="instagram"></a></li>
                                    <li><a href="#"><img src="../public/images/instagram/8.png" alt="instagram"></a></li>
                                    <li><a href="#"><img src="../public/images/instagram/9.png" alt="instagram"></a></li>
                                </ul>
                            </div>
                        </div>
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

<?php require "footer.php"?>