<?php
error_reporting(E_ALL);

require_once "../model/db.php";
include_once "../model/functions.php";
session_start();
require "header.php";
$db = new Db();
$user = $_SESSION['user'][0];
$selectLastPost = "SELECT * FROM posts WHERE user_id='" . $user[0] . "'";
$selectPost = $db->query($selectLastPost);

?>
    <!-- breadcrumb area start here	 -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb-title">
                        <h2>Blog Page</h2>
                    </div>
                    <div class="breadcrumb-sibtitle">
                        <h4>Our Latest Blog</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here	 -->
    <!-- portfolio area start here	 -->
    <div class="blog-details-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-post box-shadow">
                        <?php foreach ($selectPost as $post): ?>
                            <div class="post" id="postRow">
                                <div class="post-thumnile">
                                    <div class="slide-thumbnile">
                                        <div class="single-image">
                                            <img src="../public/images/post/<?= $post[3]; ?>" alt="blog">
                                            <div class="post-date">
                                                <span>01</span>
                                            </div>
                                        </div>
                                        <div class="single-image">
                                            <img src="../public/images/blog/1.jpg" alt="blog">
                                            <div class="post-date two">
                                                <span>02</span>
                                            </div>
                                        </div>
                                        <div class="single-image">
                                            <img src="../public/images/blog/1.jpg" alt="blog">
                                            <div class="post-date three">
                                                <span>03</span>
                                            </div>
                                        </div>
                                        <div class="single-image">
                                            <img src="../public/images/blog/1.jpg" alt="blog">
                                            <div class="post-date four">
                                                <span>04</span>
                                            </div>
                                        </div>
                                        <div class="single-image">
                                            <img src="../public/images/blog/1.jpg" alt="blog">
                                            <div class="post-date five">
                                                <span>05</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title">
                                    <h3><?= $post[1]; ?></h3>
                                </div>
                                <div class="blog-meta">
                                    <ul>
                                        <li><span class="flaticon-man-user user"></span>
                                            <p>By <a href="profile.php"> <?= $user[2]; ?></a></p></li>
                                        <li><span class="flaticon-calendar clendar"></span>
                                            <p>20 Jan 2018 </p></li>
                                        <li><span class="flaticon-chat comment"></span>
                                            <p>Comment</p></li>
                                    </ul>
                                </div>
                                <div class="blog-content">
                                    <p><?= $post[2]; ?></p>
                                </div>

                                <div class="social-share fix">
                                    <div class="share-title pull-left">
                                        <h4>Share with:</h4>
                                    </div>
                                    <div class="share-media pull-right">
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

                                <div>
                                    <button type="submit" class="primary-btn" data-id="<?= $post[0] ?>"
                                            data-toggle="modal" data-target="#postModal<?= $post[0] ?>"
                                            data-whatever="@mdo">Update
                                    </button>
                                    <div class="modal fade" id="postModal<?= $post[0] ?>" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Change Article</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="updateArticle" method="post"
                                                          enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="postTitle"
                                                                   class="col-form-label">Post Title</label>
                                                            <input type="text" class="form-control" id="postTitle"
                                                                   name="postTitle" value="<?= $post[1] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="postPicture"
                                                                   class="col-form-label">Post Picture</label>
                                                            <input type="file" class="form-control" id="postPicture"
                                                                   name="postPicture">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="postContent"
                                                                   class="col-form-label">Post Content</label>
                                                            <textarea class="form-control" id="postContent"
                                                                      name="postContent"><?= $post[2] ?></textarea>
                                                        </div>
                                                        <button type="button" class="btn btn-primary update"
                                                                data-id="<?= $post[0]; ?>" data-dismiss="modal">Update
                                                        </button>
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal"> Close
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="primary-btn delete" data-id="<?= $post[0] ?>">
                                        Delete
                                    </button>
                                </div>
                            </div>
                            <br>
                        <?php endforeach; ?>
                    </div>
                    <div class="pagination-area">
                        <div class="pagination">
                            <ul>
                                <li class="prev"><a href="#">PRev</a></li>
                                <li class="next pull-right"><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="related-post box-shadow mt-70">
                        <div class="section-title">
                            <h3>Related Post</h3>
                        </div>
                        <div class="related-slide-post">
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dum my text ever since the when
                                            an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li><span class="flaticon-man-user user"></span>
                                                    <p>By <a href="#">Admin</a></p></li>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dum my text ever since the when
                                            an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li><span class="flaticon-man-user user"></span>
                                                    <p>By <a href="#">Admin</a></p></li>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dum my text ever since the when
                                            an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li><span class="flaticon-man-user user"></span>
                                                    <p>By <a href="#">Admin</a></p></li>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dum my text ever since the when
                                            an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li><span class="flaticon-man-user user"></span>
                                                    <p>By <a href="#">Admin</a></p></li>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dum my text ever since the when
                                            an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li><span class="flaticon-man-user user"></span>
                                                    <p>By <a href="#">Admin</a></p></li>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dum my text ever since the when
                                            an unknown </p>
                                    </div>
                                    <div class="blog-meta fix">
                                        <div class="meta-left pull-left">
                                            <ul>
                                                <li><span class="flaticon-man-user user"></span>
                                                    <p>By <a href="#">Admin</a></p></li>
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
                    <div class="comment-area box-shadow mt-70">
                        <div class="section-title">
                            <h3>02 Caomment</h3>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment">
                                <div class="member-image">
                                    <a href="#"><img src="../public/images/blog/comment1.png" alt="comment img"></a>
                                </div>
                                <div class="comment-info">
                                    <div class="comment-title">
                                        <h4><a href="#"><?= $user[2]; ?></a> <span>6 Dec,20</span></h4>
                                    </div>
                                    <div class="comment-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the </p>
                                    </div>
                                    <div class="comment-replay">
                                        <a href="#" class="replay-btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment pl-100">
                                <div class="member-image">
                                    <a href="#"><img src="../public/images/blog/comment2.png" alt="comment img"></a>
                                </div>
                                <div class="comment-info">
                                    <div class="comment-title">
                                        <h4><a href="#">Jhon Smith</a> <span>6 Dec,20</span></h4>
                                    </div>
                                    <div class="comment-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the </p>
                                    </div>
                                    <div class="comment-replay">
                                        <a href="#" class="replay-btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-from mt-63">
                            <div class="section-title">
                                <h3>Leave A Comment</h3>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="Your name ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group box-shadow">
                                            <input type="email" class="form-control" id="emailtwo" name="emailtwo"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group box-shadow">
                                            <textarea name="messagetwo" id="messagestwo" cols="30" rows="10"
                                                      placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="from-btn">
                                            <button type="submit" class="primary-btn">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--                    --><?php //endforeach; ?>
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        <div class="single-widget search-widget box-shadow">
                            <div class="widget-inner">
                                <form action="#">
                                    <div class="search-from box-shadow">
                                        <input type="text" id="search" name="search" placeholder="Serach">
                                        <button class="search-icon"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="single-widget profile-widget box-shadow">
                            <div class="widget-inner text-center">
                                <div class="profile-img">
                                    <a href="#"><img src="../public/images/profile/1.png" alt="profile"></a>
                                </div>
                                <div class="profile-name">
                                    <h3><a href="#"><?= $user[1]; ?></a></h3>
                                    <h3><a href="#"><?= $user[2]; ?></a></h3>
                                    <p>Professional Blogger</p>
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
                                        <li class="active"><a href="#">Fashion <span>10</span></a></li>
                                        <li><a href="#">Life style <span>20</span></a></li>
                                        <li><a href="#">Creative <span>30</span></a></li>
                                        <li><a href="#">Traveling <span>40</span></a></li>
                                        <li><a href="#">Guide <span>10</span></a></li>
                                        <li><a href="#">World Tour <span>20</span></a></li>
                                        <li><a href="#">Ship Tour <span>30</span></a></li>
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
                                            <h4><a href="#">Voluptatum atque delenit </a></h4>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="posty-img">
                                            <a href="#"><img src="../public/images/blog/r3.png" alt="post"></a>
                                        </div>
                                        <div class="post-title">
                                            <h4><a href="#">Debitis aut rerum necessitatibus </a></h4>
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
                                        <li><a href="#"><img src="../public/images/instagram/1.png" alt="instagram"></a>
                                        </li>
                                        <li><a href="#"><img src="../public/images/instagram/2.png" alt="instagram"></a>
                                        </li>
                                        <li><a href="#"><img src="../public/images/instagram/3.png" alt="instagram"></a>
                                        </li>
                                        <li><a href="#"><img src="../public/images/instagram/4.png" alt="instagram"></a>
                                        </li>
                                        <li><a href="#"><img src="../public/images/instagram/5.png" alt="instagram"></a>
                                        </li>
                                        <li><a href="#"><img src="../public/images/instagram/6.png" alt="instagram"></a>
                                        </li>
                                        <li><a href="#"><img src="../public/images/instagram/7.png" alt="instagram"></a>
                                        </li>
                                        <li><a href="#"><img src="../public/images/instagram/8.png" alt="instagram"></a>
                                        </li>
                                        <li><a href="#"><img src="../public/images/instagram/9.png" alt="instagram"></a>
                                        </li>
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
    <!-- portfolio area start here	 -->
    <!-- footer area start here -->


<?php require "footer.php" ?>