<?php
error_reporting(E_ALL);
require_once "../model/db.php";
include_once "../model/functions.php";
session_start();
require "header.php";
$db = new Db();
$user = $_SESSION['user'][0];


?>
    <!-- menu area start here -->
    <!-- breadcrumb area start here	 -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb-title">
                        <h2>About Me</h2>
                    </div>
                    <div class="breadcrumb-sibtitle">
                        <h4>introduice my self</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here	 -->
    <!-- profile area start here	 -->
    <div class="profile-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 ">
                    <div class="profile-img box-shadow">
                        <img src="../public/images/user/<?= $user[3]; ?>" alt="profile">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="profile-info">
                        <div class="profile-name">
                            <h2><?= $user[1]; ?> <?= $user[2]; ?></h2>
                        </div>
                        <div class="profile-profason">
                            <h4>Professional Blogger</h4>
                        </div>
                        <div class="frofile-detels table-responsive">
                            <table>
                                <tbody>
                                <tr>
                                    <td><span>Name</span></td>
                                    <td><b>:</b></td>
                                    <td><?= $user[1]; ?></td>
                                </tr>
                                <tr>
                                    <td><span>Date if Birth</span></td>
                                    <td><b>:</b></td>
                                    <td>08-2-1988</td>
                                </tr>
                                <tr>
                                    <td><span>Phone</span></td>
                                    <td><b>:</b></td>
                                    <td> +8854125000</td>
                                </tr>
                                <tr>
                                    <td><span>Email</span></td>
                                    <td><b>:</b></td>
                                    <td><a href="#"><?= $user[4]; ?></a></td>
                                </tr>
                                <tr>
                                    <td><span>Website</span></td>
                                    <td><b>:</b></td>
                                    <td><a href="#">www.yourwebsite.com</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary">
                                           <a href="../controller/logOutController.php" >Logout</a></td>
                                        </button>
                                    <td>/</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal">
                                            Modify user info
                                        </button>
                                        <div id="myModal" class="modal fade" style="z-index: 9999">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content" style="padding: 15px;">
                                                    <div class="modal-body">
                                                        <form class="form-horizontal" method="post" id="modifyInfo">
                                                            <div class="form-group">
                                                                <label for="fName" class="cols-sm-2 control-label">Your First Name</label>
                                                                <div class="cols-sm-8">
                                                                    <div class="input-group"><span class="input-group-addon"><i
                                                                                    class="fa fa-user fa"
                                                                                    aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="fName" id="fName"
                                                                               value="<?= $user[1]; ?>"/>
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
                                                                               id="lName" value="<?= $user[2]; ?>"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="picture" class="cols-sm-2 control-label">Choose Picture</label>
                                                                <div class="cols-sm-8">
                                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-picture-o"
                                                                                       aria-hidden="true"></i></span>
                                                                        <input type="file" class="form-control" id="picture" name="picture">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password" class="cols-sm-2 control-label">Change Password
                                                                    (optional)</label>
                                                                <div class="cols-sm-8">
                                                                    <div class="input-group"><span class="input-group-addon"><i
                                                                                    class="fa fa-lock fa-lg"
                                                                                    aria-hidden="true"></i></span>
                                                                        <input type="password" class="form-control" name="password"
                                                                               id="password"
                                                                               placeholder="Enter your Password"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary modify" data-dismiss="modal"
                                                                    data-id="<?= $user[0]; ?>">Modify
                                                            </button>
                                                            <!--                                        //?????????????????????????????????// [0]-->
                                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                                                                Close
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="social-media">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <div class="counter-list">
                            <div class="single-counter text-center box-shadow">
                                <div class="counter-item">
                                    <h1 class="counter">100</h1>
                                </div>
                                <div class="counter-title">
                                    <h4>Travel Country</h4>
                                </div>
                            </div>
                            <div class="single-counter text-center box-shadow">
                                <div class="counter-item">
                                    <h1 class="counter">200</h1>
                                </div>
                                <div class="counter-title">
                                    <h4>Photo Award</h4>
                                </div>
                            </div>
                            <div class="single-counter text-center box-shadow">
                                <div class="counter-item">
                                    <h1 class="counter">300</h1>
                                </div>
                                <div class="counter-title">
                                    <h4>Travel Guide</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                </div>
            </div>

            <!-----  start add article area-->

            <div class="row mt-110">
                <div class="col-lg-12 col-md-12 ">
                    <div class="single-resume education-resume box-shadow">
                        <div class="resume-title">
                            <h3>Add New Post</h3>
                        </div>
                        <form class="reg_form" id="postForm" method="post" enctype="multipart/form-data">
                            <div class="form-group ">
                                <label for="postTitle" class="col-form-label">Post Title</label>
                                <input type="text" class="form-control" id="postTitle"
                                       name="postTitle">
                            </div>
                            <div class="form-group">
                                <label for="postContent" class="col-form-label">Post Content</label>
                                <textarea class="form-control add_article" id="postContent"
                                          name="postContent" rows="5" cols="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="postPicture">Article Picture</label>
                                <input type="file"  id="postPicture"
                                       name="postPicture">
                            </div>
                            <button type="button" class="btn btn-primary addNewPost">Add new Post
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--                finish  article area-->
        <div class="row mt-110">
            <div class="col-lg-12 col-md-12 ">
                <div class="single-resume education-resume box-shadow">
                    <div class="resume-title">
                        <h3>Education</h3>
                    </div>
                    <div class="education-list">
                        <div class="single-education">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>01</span>B.sc in Computer Engineer </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Envato
                                        University
                                    </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2010-2014 </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-education">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>02</span>B.sc in Computer Engineer </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Themeforest
                                        University </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2014-2018 </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-education">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>03</span>B.sc in Computer Engineer </p>
                                </div>
                                <div class="col-md-4 ">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Graphiv River
                                        University </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2012-2022 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-110">
            <div class="col-lg-12 col-md-12 ">
                <div class="single-resume work-resume box-shadow">
                    <div class="resume-title">
                        <h3>Work Experiance</h3>
                    </div>
                    <div class="work-list">
                        <div class="single-work">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>01</span>B.sc in Computer Engineer </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Envato
                                        University
                                    </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2010-2014 </p>
                                </div>
                            </div>
                        </div>

                        <div class="single-work">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>02</span>B.sc in Computer Engineer </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Themeforest
                                        University </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2014-2018 </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-work">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>03</span>B.sc in Computer Engineer </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Graphiv River
                                        University </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2012-2022 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-110">
            <div class="col-lg-6 col-md-12 ">
                <div class="single-resume skill-resume box-shadow">
                    <div class="resume-title">
                        <h3>Professional Skill</h3>
                    </div>
                    <div id="progress-bar">
                        <div class="single-skill">
                            <p>Auto cade</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                        <div class="single-skill">
                            <p>Photoshop</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="84"></span>
                            </div>
                        </div>
                        <div class="single-skill">
                            <p>Illustrator</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="96"></span>
                            </div>
                        </div>
                        <div class="single-skill">
                            <p>Auto cade</p>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="92"></span>
                            </div>
                        </div>
                        <div class="single-skill">
                            <p>Photoshop</p>
                            <div id="bar5" class="barfiller mb-0">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="70"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="single-resume language-resume box-shadow">
                    <div class="resume-title">
                        <h3>Language Skill</h3>
                    </div>
                    <div class="language-list">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-language">
                                    <div class="barcontainer">
                                        <div class="bar bar1"></div>
                                    </div>
                                    <span class="title">English</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-language">
                                    <div class="barcontainer">
                                        <div class="bar bar2"></div>
                                    </div>
                                    <span class="title">Bangla</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-language mt-30">
                                    <div class="barcontainer">
                                        <div class="bar bar3"></div>
                                    </div>
                                    <span class="title">Turkey</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-language mt-30">
                                    <div class="barcontainer">
                                        <div class="bar bar4"></div>
                                    </div>
                                    <span class="title">Hindi</span>
                                </div>
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
    <!-- profile area start here	 -->
    <!-- footer area start here -->
<?php require "footer.php" ?>