<?php
    session_start();
    include('../includes/dbconn.php');
    include('../includes/check-login.php');
    check_login();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- By CodeAstro - codeastro.com -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Student Dashboard</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php include '../includes/student-navigation.php'?>
            
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include '../includes/student-sidebar.php'?>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== 
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                       
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                    
                </div>
            </div>
             ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="slideshow-container">
               
                <style>
                    
                    body {
                        font-family: Verdana, sans-serif;
                        margin: 0
                    }
                    .mySlides {
                        display: none
                    }
                    img {
                        vertical-align: middle;
                    }
                    .slideshow-container {
                        
                        position: relative;
                        margin: auto;
                        
                    }
                    /* Next & previous buttons */
                    .prev,
                    .next {
                        cursor: pointer;
                        position: absolute;
                        top: 50%;
                        width: auto;
                        padding: 16px;
                        margin-top: -22px;
                        color: white;
                        font-weight: bold;
                        font-size: 18px;
                        transition: 0.6s ease;
                        border-radius: 0 3px 3px 0;
                        user-select: none;
                        background-color: rgba(0, 0, 0, 0.4);
                    }
                    /* Position the "next button" to the right */
                    .next {
                        right: 0;
                        border-radius: 3px 0 0 3px;
                    }
                    /* On hover, add a black background color with a little bit see-through */
                    .prev:hover,
                    .next:hover {
                        background-color: rgba(0, 0, 0, 0.8);
                    }
                    /* Caption text */
                    .text {
                        color: #000;
                        font-size: 15px;
                    
                        position: 
                        
                        width: 100%;
                        text-align: center;
                    }
                    .fade {
                        -webkit-animation-name: fade;
                        -webkit-animation-duration: 5s;
                        animation-name: fade;
                        animation-duration: 5s;
                    }
                    @-webkit-keyframes fade {
                        from {
                        opacity: .8
                        }
                        to {
                        opacity: 1
                        }
                    }
                    @keyframes fade {
                        from {
                        opacity: .8
                        }
                        to {
                        opacity: 1
                        }
                    }
            
                
                </style>
            
                
                <div class="mySlides fade">
                    <img src="../assets/images/1.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="../assets/images/2.jpg" style="width:100%">
                </div>
                
                <div class="mySlides fade">
                    <img src="../assets/images/3.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="../assets/images/4.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="../assets/images/5.jpg" style="width:100%">
                </div>
                <!--
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                -->

                <script>
                    var slideIndex = 0;
                    carousel();

                    function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > x.length) {slideIndex = 1}
                    x[slideIndex-1].style.display = "block";
                    setTimeout(carousel, 2200); // Change image every 2 seconds
                    }
                </script>

  
</br>
</div>
</div>
               
            </div>

            <style>
                .vc_non_responsive .vc_row .vc_col-sm-1,.vc_non_responsive .vc_row .vc_col-sm-10,.vc_non_responsive .vc_row .vc_col-sm-11,.vc_non_responsive .vc_row .vc_col-sm-12,.vc_non_responsive .vc_row .vc_col-sm-2,.vc_non_responsive .vc_row .vc_col-sm-3,.vc_non_responsive .vc_row .vc_col-sm-4,.vc_non_responsive .vc_row .vc_col-sm-5,.vc_non_responsive .vc_row .vc_col-sm-7,.vc_non_responsive .vc_row .vc_col-sm-8,.vc_non_responsive .vc_row .vc_col-sm-9 {
                    padding-left: auto;
                    padding-right: 15px;
                    float: left
                }

                .vc_parallax-inner iframe,.vc_video-bg iframe {
                    max-width: 1000%
                }

                .vc_clearfix:after,.vc_column-inner::after,.vc_el-clearfix,.vc_row:after {
                    clear: both
                }

                .vc-composer-icon,[class*=" vc_arrow-icon-"],[class^=vc_arrow-icon-] {
                    speak: none;
                    font-variant: normal;
                    text-transform: none;
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale
                }

                .vc_row:after,.vc_row:before {
                    content: " ";
                    display: table
                }

                @media (max-width: 767px) {
                    .vc_hidden-xs {
                        display:none!important
                    }

                    .vc_el-clearfix-xs {
                        clear: both
                    }
                }

                @media (min-width: 768px) and (max-width:991px) {
                    .vc_hidden-sm {
                        display:none!important
                    }

                    .vc_el-clearfix-sm {
                        clear: both
                    }
                }

                @media (min-width: 992px) and (max-width:1199px) {
                    .vc_hidden-md {
                        display:none!important
                    }

                    .vc_el-clearfix-md {
                        clear: both
                    }
                }

                .vc_non_responsive .vc_row .vc_col-sm-1 {
                    position: relative;
                    width: 8.33333333%;
                    min-height: 1px
                }

                .vc_non_responsive .vc_row .vc_col-sm-2 {
                    position: relative;
                    width: 16.66666667%;
                    min-height: 1px
                }

                .vc_non_responsive .vc_row .vc_col-sm-3 {
                    position: relative;
                    width: 25%;
                    min-height: 1px
                }

                .vc_non_responsive .vc_row .vc_col-sm-4 {
                    position: relative;
                    width: 33.33333333%;
                    min-height: 1px
                }

                .vc_non_responsive .vc_row .vc_col-sm-5 {
                    position: relative;
                    width: 41.66666667%;
                    min-height: 1px
                }

                .vc_non_responsive .vc_row .vc_col-sm-6 {
                    position: relative;
                    float: left;
                    width: 50%;
                    min-height: 1px;
                    padding-left: 15px;
                    padding-right: 15px
                }

                .vc_non_responsive .vc_row .vc_col-sm-7 {
                    position: relative;
                    width: 58.33333333%;
                    min-height: 1px
                }

                .vc_non_responsive .vc_row .vc_col-sm-8 {
                    position: relative;
                    width: 66.66666667%;
                    min-height: 1px
                }

                .vc_non_responsive .vc_row .vc_col-sm-9 {
                    position: relative;
                    width: 75%;
                    min-height: 1px
                }

                .vc_non_responsive .vc_row .vc_col-sm-10 {
                    position: relative;
                    width: 83.33333333%;
                    min-height: 1px
                }

                .vc_non_responsive .vc_row .vc_col-sm-11 {
                    position: relative;
                    width: 91.66666667%;
                    min-height: 1px
                }

                .vc_col-xs-12,.vc_column_container {
                    width: 100%
                }

                .vc_non_responsive .vc_row .vc_col-sm-12 {
                    position: relative;
                    width: 100%;
                    min-height: 1px
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-12 {
                    margin-left: 100%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-11 {
                    margin-left: 91.66666667%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-10 {
                    margin-left: 83.33333333%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-9 {
                    margin-left: 75%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-8 {
                    margin-left: 66.66666667%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-7 {
                    margin-left: 58.33333333%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-6 {
                    margin-left: 50%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-5 {
                    margin-left: 41.66666667%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-4 {
                    margin-left: 33.33333333%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-3 {
                    margin-left: 25%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-2 {
                    margin-left: 16.66666667%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-1 {
                    margin-left: 8.33333333%
                }

                .vc_non_responsive .vc_row .vc_col-sm-offset-0 {
                    margin-left: 0
                }

                .vc_non_responsive .vc_row .vc_hidden-sm {
                    display: none!important
                }

                .vc_row {
                    margin-left: 105px;
                    margin-right: -15px;
                }

                .vc_col-lg-1,.vc_col-lg-10,.vc_col-lg-11,.vc_col-lg-12,.vc_col-lg-2,.vc_col-lg-3,.vc_col-lg-4,.vc_col-lg-5,.vc_col-lg-6,.vc_col-lg-7,.vc_col-lg-8,.vc_col-lg-9,.vc_col-md-1,.vc_col-md-10,.vc_col-md-11,.vc_col-md-12,.vc_col-md-2,.vc_col-md-3,.vc_col-md-4,.vc_col-md-5,.vc_col-md-6,.vc_col-md-7,.vc_col-md-8,.vc_col-md-9,.vc_col-sm-1,.vc_col-sm-10,.vc_col-sm-11,.vc_col-sm-12,.vc_col-sm-2,.vc_col-sm-3,.vc_col-sm-4,.vc_col-sm-5,.vc_col-sm-6,.vc_col-sm-7,.vc_col-sm-8,.vc_col-sm-9,.vc_col-xs-1,.vc_col-xs-10,.vc_col-xs-11,.vc_col-xs-12,.vc_col-xs-2,.vc_col-xs-3,.vc_col-xs-4,.vc_col-xs-5,.vc_col-xs-6,.vc_col-xs-7,.vc_col-xs-8,.vc_col-xs-9 {
                    position: relative;
                    min-height: 1px;
                    padding-left: 15px;
                    padding-right: 15px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box
                }

                .vc_col-xs-1,.vc_col-xs-10,.vc_col-xs-11,.vc_col-xs-12,.vc_col-xs-2,.vc_col-xs-3,.vc_col-xs-4,.vc_col-xs-5,.vc_col-xs-6,.vc_col-xs-7,.vc_col-xs-8,.vc_col-xs-9 {
                    float: left
                }

                .vc_col-xs-11 {
                    width: 91.66666667%
                }

                .vc_col-xs-10 {
                    width: 83.33333333%
                }

                .vc_col-xs-9 {
                    width: 75%
                }

                .vc_col-xs-8 {
                    width: 66.66666667%
                }

                .vc_col-xs-7 {
                    width: 58.33333333%
                }

                .vc_col-xs-6 {
                    width: 50%
                }

                .vc_col-xs-5 {
                    width: 41.66666667%
                }

                .vc_col-xs-4 {
                    width: 33.33333333%
                }

                .vc_col-xs-3 {
                    width: 25%
                }

                .vc_col-xs-2 {
                    width: 16.66666667%
                }

                .vc_col-xs-1 {
                    width: 8.33333333%
                }

                .vc_col-xs-pull-12 {
                    right: 100%
                }

                .vc_col-xs-pull-11 {
                    right: 91.66666667%
                }

                .vc_col-xs-pull-10 {
                    right: 83.33333333%
                }

                .vc_col-xs-pull-9 {
                    right: 75%
                }

                .vc_col-xs-pull-8 {
                    right: 66.66666667%
                }

                .vc_col-xs-pull-7 {
                    right: 58.33333333%
                }

                .vc_col-xs-pull-6 {
                    right: 50%
                }

                .vc_col-xs-pull-5 {
                    right: 41.66666667%
                }

                .vc_col-xs-pull-4 {
                    right: 33.33333333%
                }

                .vc_col-xs-pull-3 {
                    right: 25%
                }

                .vc_col-xs-pull-2 {
                    right: 16.66666667%
                }

                .vc_col-xs-pull-1 {
                    right: 8.33333333%
                }

                .vc_col-xs-pull-0 {
                    right: auto
                }

                .vc_col-xs-push-12 {
                    left: 100%
                }

                .vc_col-xs-push-11 {
                    left: 91.66666667%
                }

                .vc_col-xs-push-10 {
                    left: 83.33333333%
                }

                .vc_col-xs-push-9 {
                    left: 75%
                }

                .vc_col-xs-push-8 {
                    left: 66.66666667%
                }

                .vc_col-xs-push-7 {
                    left: 58.33333333%
                }

                .vc_col-xs-push-6 {
                    left: 50%
                }

                .vc_col-xs-push-5 {
                    left: 41.66666667%
                }

                .vc_col-xs-push-4 {
                    left: 33.33333333%
                }

                .vc_col-xs-push-3 {
                    left: 25%
                }

                .vc_col-xs-push-2 {
                    left: 16.66666667%
                }

                .vc_col-xs-push-1 {
                    left: 8.33333333%
                }

                .vc_col-xs-push-0 {
                    left: auto
                }

                .vc_col-xs-offset-12 {
                    margin-left: 100%
                }

                .vc_col-xs-offset-11 {
                    margin-left: 91.66666667%
                }

                .vc_col-xs-offset-10 {
                    margin-left: 83.33333333%
                }

                .vc_col-xs-offset-9 {
                    margin-left: 75%
                }

                .vc_col-xs-offset-8 {
                    margin-left: 66.66666667%
                }

                .vc_col-xs-offset-7 {
                    margin-left: 58.33333333%
                }

                .vc_col-xs-offset-6 {
                    margin-left: 50%
                }

                .vc_col-xs-offset-5 {
                    margin-left: 41.66666667%
                }

                .vc_col-xs-offset-4 {
                    margin-left: 33.33333333%
                }

                .vc_col-xs-offset-3 {
                    margin-left: 25%
                }

                .vc_col-xs-offset-2 {
                    margin-left: 16.66666667%
                }

                .vc_col-xs-offset-1 {
                    margin-left: 8.33333333%
                }

                .vc_col-xs-offset-0 {
                    margin-left: 0
                }

                @media (min-width: 768px) {
                    .vc_col-sm-1,.vc_col-sm-10,.vc_col-sm-11,.vc_col-sm-12,.vc_col-sm-2,.vc_col-sm-3,.vc_col-sm-4,.vc_col-sm-5,.vc_col-sm-6,.vc_col-sm-7,.vc_col-sm-8,.vc_col-sm-9 {
                        float:left
                    }

                    .vc_col-sm-12 {
                        width: 100%
                    }

                    .vc_col-sm-11 {
                        width: 91.66666667%
                    }

                    .vc_col-sm-10 {
                        width: 83.33333333%
                    }

                    .vc_col-sm-9 {
                        width: 75%
                    }

                    .vc_col-sm-8 {
                        width: 66.66666667%
                    }

                    .vc_col-sm-7 {
                        width: 58.33333333%
                    }

                    .vc_col-sm-6 {
                        width: 50%
                    }

                    .vc_col-sm-5 {
                        width: 41.66666667%
                    }

                    .vc_col-sm-4 {
                        width: 33.33333333%
                    }

                    .vc_col-sm-3 {
                        width: 25%
                    }

                    .vc_col-sm-2 {
                        width: 16.66666667%
                    }

                    .vc_col-sm-1 {
                        width: 8.33333333%
                    }

                    .vc_col-sm-pull-12 {
                        right: 100%
                    }

                    .vc_col-sm-pull-11 {
                        right: 91.66666667%
                    }

                    .vc_col-sm-pull-10 {
                        right: 83.33333333%
                    }

                    .vc_col-sm-pull-9 {
                        right: 75%
                    }

                    .vc_col-sm-pull-8 {
                        right: 66.66666667%
                    }

                    .vc_col-sm-pull-7 {
                        right: 58.33333333%
                    }

                    .vc_col-sm-pull-6 {
                        right: 50%
                    }

                    .vc_col-sm-pull-5 {
                        right: 41.66666667%
                    }

                    .vc_col-sm-pull-4 {
                        right: 33.33333333%
                    }

                    .vc_col-sm-pull-3 {
                        right: 25%
                    }

                    .vc_col-sm-pull-2 {
                        right: 16.66666667%
                    }

                    .vc_col-sm-pull-1 {
                        right: 8.33333333%
                    }

                    .vc_col-sm-pull-0 {
                        right: auto
                    }

                    .vc_col-sm-push-12 {
                        left: 100%
                    }

                    .vc_col-sm-push-11 {
                        left: 91.66666667%
                    }

                    .vc_col-sm-push-10 {
                        left: 83.33333333%
                    }

                    .vc_col-sm-push-9 {
                        left: 75%
                    }

                    .vc_col-sm-push-8 {
                        left: 66.66666667%
                    }

                    .vc_col-sm-push-7 {
                        left: 58.33333333%
                    }

                    .vc_col-sm-push-6 {
                        left: 50%
                    }

                    .vc_col-sm-push-5 {
                        left: 41.66666667%
                    }

                    .vc_col-sm-push-4 {
                        left: 33.33333333%
                    }

                    .vc_col-sm-push-3 {
                        left: 25%
                    }

                    .vc_col-sm-push-2 {
                        left: 16.66666667%
                    }

                    .vc_col-sm-push-1 {
                        left: 8.33333333%
                    }

                    .vc_col-sm-push-0 {
                        left: auto
                    }

                    .vc_col-sm-offset-12 {
                        margin-left: 100%
                    }

                    .vc_col-sm-offset-11 {
                        margin-left: 91.66666667%
                    }

                    .vc_col-sm-offset-10 {
                        margin-left: 83.33333333%
                    }

                    .vc_col-sm-offset-9 {
                        margin-left: 75%
                    }

                    .vc_col-sm-offset-8 {
                        margin-left: 66.66666667%
                    }

                    .vc_col-sm-offset-7 {
                        margin-left: 58.33333333%
                    }

                    .vc_col-sm-offset-6 {
                        margin-left: 50%
                    }

                    .vc_col-sm-offset-5 {
                        margin-left: 41.66666667%
                    }

                    .vc_col-sm-offset-4 {
                        margin-left: 33.33333333%
                    }

                    .vc_col-sm-offset-3 {
                        margin-left: 25%
                    }

                    .vc_col-sm-offset-2 {
                        margin-left: 16.66666667%
                    }

                    .vc_col-sm-offset-1 {
                        margin-left: 8.33333333%
                    }

                    .vc_col-sm-offset-0 {
                        margin-left: 0
                    }
                }

                @media (min-width: 992px) {
                    .vc_col-md-1,.vc_col-md-10,.vc_col-md-11,.vc_col-md-12,.vc_col-md-2,.vc_col-md-3,.vc_col-md-4,.vc_col-md-5,.vc_col-md-6,.vc_col-md-7,.vc_col-md-8,.vc_col-md-9 {
                        float:left
                    }

                    .vc_col-md-12 {
                        width: 100%
                    }

                    .vc_col-md-11 {
                        width: 91.66666667%
                    }

                    .vc_col-md-10 {
                        width: 83.33333333%
                    }

                    .vc_col-md-9 {
                        width: 75%
                    }

                    .vc_col-md-8 {
                        width: 66.66666667%
                    }

                    .vc_col-md-7 {
                        width: 58.33333333%
                    }

                    .vc_col-md-6 {
                        width: 50%
                    }

                    .vc_col-md-5 {
                        width: 41.66666667%
                    }

                    .vc_col-md-4 {
                        width: 33.33333333%
                    }

                    .vc_col-md-3 {
                        width: 25%
                    }

                    .vc_col-md-2 {
                        width: 16.66666667%
                    }

                    .vc_col-md-1 {
                        width: 8.33333333%
                    }

                    .vc_col-md-pull-12 {
                        right: 100%
                    }

                    .vc_col-md-pull-11 {
                        right: 91.66666667%
                    }

                    .vc_col-md-pull-10 {
                        right: 83.33333333%
                    }

                    .vc_col-md-pull-9 {
                        right: 75%
                    }

                    .vc_col-md-pull-8 {
                        right: 66.66666667%
                    }

                    .vc_col-md-pull-7 {
                        right: 58.33333333%
                    }

                    .vc_col-md-pull-6 {
                        right: 50%
                    }

                    .vc_col-md-pull-5 {
                        right: 41.66666667%
                    }

                    .vc_col-md-pull-4 {
                        right: 33.33333333%
                    }

                    .vc_col-md-pull-3 {
                        right: 25%
                    }

                    .vc_col-md-pull-2 {
                        right: 16.66666667%
                    }

                    .vc_col-md-pull-1 {
                        right: 8.33333333%
                    }

                    .vc_col-md-pull-0 {
                        right: auto
                    }

                    .vc_col-md-push-12 {
                        left: 100%
                    }

                    .vc_col-md-push-11 {
                        left: 91.66666667%
                    }

                    .vc_col-md-push-10 {
                        left: 83.33333333%
                    }

                    .vc_col-md-push-9 {
                        left: 75%
                    }

                    .vc_col-md-push-8 {
                        left: 66.66666667%
                    }

                    .vc_col-md-push-7 {
                        left: 58.33333333%
                    }

                    .vc_col-md-push-6 {
                        left: 50%
                    }

                    .vc_col-md-push-5 {
                        left: 41.66666667%
                    }

                    .vc_col-md-push-4 {
                        left: 33.33333333%
                    }

                    .vc_col-md-push-3 {
                        left: 25%
                    }

                    .vc_col-md-push-2 {
                        left: 16.66666667%
                    }

                    .vc_col-md-push-1 {
                        left: 8.33333333%
                    }

                    .vc_col-md-push-0 {
                        left: auto
                    }

                    .vc_col-md-offset-12 {
                        margin-left: 100%
                    }

                    .vc_col-md-offset-11 {
                        margin-left: 91.66666667%
                    }

                    .vc_col-md-offset-10 {
                        margin-left: 83.33333333%
                    }

                    .vc_col-md-offset-9 {
                        margin-left: 75%
                    }

                    .vc_col-md-offset-8 {
                        margin-left: 66.66666667%
                    }

                    .vc_col-md-offset-7 {
                        margin-left: 58.33333333%
                    }

                    .vc_col-md-offset-6 {
                        margin-left: 50%
                    }

                    .vc_col-md-offset-5 {
                        margin-left: 41.66666667%
                    }

                    .vc_col-md-offset-4 {
                        margin-left: 33.33333333%
                    }

                    .vc_col-md-offset-3 {
                        margin-left: 25%
                    }

                    .vc_col-md-offset-2 {
                        margin-left: 16.66666667%
                    }

                    .vc_col-md-offset-1 {
                        margin-left: 8.33333333%
                    }

                    .vc_col-md-offset-0 {
                        margin-left: 0
                    }
                }

                @media (min-width: 1200px) {
                    .vc_hidden-lg {
                        display:none!important
                    }

                    .vc_col-lg-1,.vc_col-lg-10,.vc_col-lg-11,.vc_col-lg-12,.vc_col-lg-2,.vc_col-lg-3,.vc_col-lg-4,.vc_col-lg-5,.vc_col-lg-6,.vc_col-lg-7,.vc_col-lg-8,.vc_col-lg-9 {
                        float: left
                    }

                    .vc_col-lg-12 {
                        width: 100%
                    }

                    .vc_col-lg-11 {
                        width: 91.66666667%
                    }

                    .vc_col-lg-10 {
                        width: 83.33333333%
                    }

                    .vc_col-lg-9 {
                        width: 75%
                    }

                    .vc_col-lg-8 {
                        width: 66.66666667%
                    }

                    .vc_col-lg-7 {
                        width: 58.33333333%
                    }

                    .vc_col-lg-6 {
                        width: 50%
                    }

                    .vc_col-lg-5 {
                        width: 41.66666667%
                    }

                    .vc_col-lg-4 {
                        width: 33.33333333%
                    }

                    .vc_col-lg-3 {
                        width: 25%
                    }

                    .vc_col-lg-2 {
                        width: 16.66666667%
                    }

                    .vc_col-lg-1 {
                        width: 8.33333333%
                    }

                    .vc_col-lg-pull-12 {
                        right: 100%
                    }

                    .vc_col-lg-pull-11 {
                        right: 91.66666667%
                    }

                    .vc_col-lg-pull-10 {
                        right: 83.33333333%
                    }

                    .vc_col-lg-pull-9 {
                        right: 75%
                    }

                    .vc_col-lg-pull-8 {
                        right: 66.66666667%
                    }

                    .vc_col-lg-pull-7 {
                        right: 58.33333333%
                    }

                    .vc_col-lg-pull-6 {
                        right: 50%
                    }

                    .vc_col-lg-pull-5 {
                        right: 41.66666667%
                    }

                    .vc_col-lg-pull-4 {
                        right: 33.33333333%
                    }

                    .vc_col-lg-pull-3 {
                        right: 25%
                    }

                    .vc_col-lg-pull-2 {
                        right: 16.66666667%
                    }

                    .vc_col-lg-pull-1 {
                        right: 8.33333333%
                    }

                    .vc_col-lg-pull-0 {
                        right: auto
                    }

                    .vc_col-lg-push-12 {
                        left: 100%
                    }

                    .vc_col-lg-push-11 {
                        left: 91.66666667%
                    }

                    .vc_col-lg-push-10 {
                        left: 83.33333333%
                    }

                    .vc_col-lg-push-9 {
                        left: 75%
                    }

                    .vc_col-lg-push-8 {
                        left: 66.66666667%
                    }

                    .vc_col-lg-push-7 {
                        left: 58.33333333%
                    }

                    .vc_col-lg-push-6 {
                        left: 50%
                    }

                    .vc_col-lg-push-5 {
                        left: 41.66666667%
                    }

                    .vc_col-lg-push-4 {
                        left: 33.33333333%
                    }

                    .vc_col-lg-push-3 {
                        left: 25%
                    }

                    .vc_col-lg-push-2 {
                        left: 16.66666667%
                    }

                    .vc_col-lg-push-1 {
                        left: 8.33333333%
                    }

                    .vc_col-lg-push-0 {
                        left: auto
                    }

                    .vc_col-lg-offset-12 {
                        margin-left: 100%
                    }

                    .vc_col-lg-offset-11 {
                        margin-left: 91.66666667%
                    }

                    .vc_col-lg-offset-10 {
                        margin-left: 83.33333333%
                    }

                    .vc_col-lg-offset-9 {
                        margin-left: 75%
                    }

                    .vc_col-lg-offset-8 {
                        margin-left: 66.66666667%
                    }

                    .vc_col-lg-offset-7 {
                        margin-left: 58.33333333%
                    }

                    .vc_col-lg-offset-6 {
                        margin-left: 50%
                    }

                    .vc_col-lg-offset-5 {
                        margin-left: 41.66666667%
                    }

                    .vc_col-lg-offset-4 {
                        margin-left: 33.33333333%
                    }

                    .vc_col-lg-offset-3 {
                        margin-left: 25%
                    }

                    .vc_col-lg-offset-2 {
                        margin-left: 16.66666667%
                    }

                    .vc_col-lg-offset-1 {
                        margin-left: 8.33333333%
                    }

                    .vc_col-lg-offset-0 {
                        margin-left: 0
                    }

                    .vc_el-clearfix-lg {
                        clear: both
                    }
                }

                .vc_el_width_100,.vc_el_width_50,.vc_el_width_60,.vc_el_width_70,.vc_el_width_80,.vc_el_width_90 {
                    margin-left: auto!important;
                    margin-right: auto!important
                }

                .vc_pull-right {
                    float: right!important
                }

                .vc_pull-left {
                    float: left!important
                }

                .vc_clearfix:after,.vc_clearfix:before {
                    content: " ";
                    display: table
                }

                .vc_visible {
                    display: block
                }

                .vc_table {
                    width: 100%;
                    margin-bottom: 20px;
                    border-collapse: collapse
                }

                .vc_table>tbody>tr>td,.vc_table>tbody>tr>th,.vc_table>tfoot>tr>td,.vc_table>tfoot>tr>th,.vc_table>thead>tr>td,.vc_table>thead>tr>th {
                    padding: 8px;
                    line-height: 1.42857143;
                    vertical-align: top;
                    border-top: 1px solid #ddd
                }

                .vc_table>thead>tr>th {
                    vertical-align: bottom;
                    border-bottom: 2px solid #ddd
                }

                .vc_button-2-wrapper,.vc_pixel_icon {
                    display: inline-block;
                    vertical-align: middle
                }

                .vc_table>caption+thead>tr:first-child>td,.vc_table>caption+thead>tr:first-child>th,.vc_table>colgroup+thead>tr:first-child>td,.vc_table>colgroup+thead>tr:first-child>th,.vc_table>thead:first-child>tr:first-child>td,.vc_table>thead:first-child>tr:first-child>th {
                    border-top: 0
                }

                .vc_table>tbody+tbody {
                    border-top: 2px solid #ddd
                }

                .vc_table .table {
                    background-color: #fff
                }

                .vc_table-bordered,.vc_table-bordered>tbody>tr>td,.vc_table-bordered>tbody>tr>th,.vc_table-bordered>tfoot>tr>td,.vc_table-bordered>tfoot>tr>th,.vc_table-bordered>thead>tr>td,.vc_table-bordered>thead>tr>th {
                    border: 1px solid #ddd
                }

                .vc_table-bordered>thead>tr>td,.vc_table-bordered>thead>tr>th {
                    border-bottom-width: 2px
                }

                .vc_pixel_icon {
                    height: 16px;
                    width: 16px;
                    background-position: 0 0;
                    background-repeat: no-repeat
                }

                .vc_pixel_icon-alert {
                    background-image: url(../vc/alert.png)
                }

                .vc_pixel_icon-info {
                    background-image: url(../vc/info.png)
                }

                .vc_pixel_icon-tick {
                    background-image: url(../vc/tick.png)
                }

                .vc_pixel_icon-explanation {
                    background-image: url(../vc/exclamation.png)
                }

                .vc_pixel_icon-address_book {
                    background-image: url(../images/icons/address-book.png)
                }

                .vc_pixel_icon-alarm_clock {
                    background-image: url(../images/icons/alarm-clock.png)
                }

                .vc_pixel_icon-anchor {
                    background-image: url(../images/icons/anchor.png)
                }

                .vc_pixel_icon-application_image {
                    background-image: url(../images/icons/application-image.png)
                }

                .vc_pixel_icon-arrow {
                    background-image: url(../images/icons/arrow.png)
                }

                .vc_pixel_icon-asterisk {
                    background-image: url(../images/icons/asterisk.png)
                }

                .vc_pixel_icon-hammer {
                    background-image: url(../images/icons/auction-hammer.png)
                }

                .vc_pixel_icon-balloon {
                    background-image: url(../images/icons/balloon.png)
                }

                .vc_pixel_icon-balloon_buzz {
                    background-image: url(../images/icons/balloon-buzz.png)
                }

                .vc_pixel_icon-balloon_facebook {
                    background-image: url(../images/icons/balloon-facebook.png)
                }

                .vc_pixel_icon-balloon_twitter {
                    background-image: url(../images/icons/balloon-twitter.png)
                }

                .vc_pixel_icon-battery {
                    background-image: url(../images/icons/battery-full.png)
                }

                .vc_pixel_icon-binocular {
                    background-image: url(../images/icons/binocular.png)
                }

                .vc_pixel_icon-document_excel {
                    background-image: url(../images/icons/blue-document-excel.png)
                }

                .vc_pixel_icon-document_image {
                    background-image: url(../images/icons/blue-document-image.png)
                }

                .vc_pixel_icon-document_music {
                    background-image: url(../images/icons/blue-document-music.png)
                }

                .vc_pixel_icon-document_office {
                    background-image: url(../images/icons/blue-document-office.png)
                }

                .vc_pixel_icon-document_pdf {
                    background-image: url(../images/icons/blue-document-pdf.png)
                }

                .vc_pixel_icon-document_powerpoint {
                    background-image: url(../images/icons/blue-document-powerpoint.png)
                }

                .vc_pixel_icon-document_word {
                    background-image: url(../images/icons/blue-document-word.png)
                }

                .vc_pixel_icon-bookmark {
                    background-image: url(../images/icons/bookmark.png)
                }

                .vc_pixel_icon-camcorder {
                    background-image: url(../images/icons/camcorder.png)
                }

                .vc_pixel_icon-camera {
                    background-image: url(../images/icons/camera.png)
                }

                .vc_pixel_icon-chart {
                    background-image: url(../images/icons/chart.png)
                }

                .vc_pixel_icon-chart_pie {
                    background-image: url(../images/icons/chart-pie.png)
                }

                .vc_pixel_icon-clock {
                    background-image: url(../images/icons/clock.png)
                }

                .vc_pixel_icon-play {
                    background-image: url(../images/icons/control.png)
                }

                .vc_pixel_icon-fire {
                    background-image: url(../images/icons/fire.png)
                }

                .vc_pixel_icon-heart {
                    background-image: url(../images/icons/heart.png)
                }

                .vc_pixel_icon-mail {
                    background-image: url(../images/icons/mail.png)
                }

                .vc_pixel_icon-shield {
                    background-image: url(../images/icons/plus-shield.png)
                }

                .vc_pixel_icon-video {
                    background-image: url(../images/icons/video.png)
                }

                @font-face {
                    font-family: vcpb-plugin-icons;
                    src: url(../fonts/vc_icons_v2/fonts/vcpb-plugin-icons.ttf?i5rhx5) format('truetype'),url(../fonts/vc_icons_v2/fonts/vcpb-plugin-icons.woff?i5rhx5) format('woff'),url(../fonts/vc_icons_v2/fonts/vcpb-plugin-icons.svg?i5rhx5#vcpb-plugin-icons) format('svg');
                    font-weight: 400;
                    font-style: normal
                }

                .vc-composer-icon {
                    font-family: vcpb-plugin-icons!important;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 1
                }

                .vc-c-icon-minimize:before {
                    content: "\e91b"
                }

                .vc-c-icon-close:before {
                    content: "\e5cd"
                }

                .vc-c-icon-1-6_4-6_1-6:before {
                    content: "\e90d"
                }

                .vc-c-icon-add_template:before {
                    content: "\e903"
                }

                .vc-c-icon-arrow_back:before {
                    content: "\e5c4"
                }

                .vc-c-icon-arrow_drop_down:before {
                    content: "\e5c5"
                }

                .vc-c-icon-arrow_drop_up:before {
                    content: "\e5c7"
                }

                .vc-c-icon-arrow_forward:before {
                    content: "\e5c8"
                }

                .vc-c-icon-check:before {
                    content: "\e5ca"
                }

                .vc-c-icon-arrow_upward:before {
                    content: "\e5d8"
                }

                .vc-c-icon-arrow_downward:before {
                    content: "\e5db"
                }

                .vc-c-icon-sync:before {
                    content: "\e627"
                }

                .vc-c-icon-search:before {
                    content: "\e8b6"
                }

                .vc-c-icon-1-1:before {
                    content: "\e900"
                }

                .vc-c-icon-1-2_1-2:before {
                    content: "\e901"
                }

                .vc-c-icon-1-3_1-3_1-3:before {
                    content: "\e902"
                }

                .vc-c-icon-1-4_1-2_1-4:before {
                    content: "\e904"
                }

                .vc-c-icon-1-4_1-4_1-4_1-4:before {
                    content: "\e905"
                }

                .vc-c-icon-1-4_3-4:before {
                    content: "\e906"
                }

                .vc-c-icon-1-6_1-6_1-6_1-2:before {
                    content: "\e907"
                }

                .vc-c-icon-1-6_1-6_1-6_1-6_1-6_1-6:before {
                    content: "\e908"
                }

                .vc-c-icon-1-6_2-3_1-6:before {
                    content: "\e909"
                }

                .vc-c-icon-2-3_1-3:before {
                    content: "\e90a"
                }

                .vc-c-icon-5-6_1-6:before {
                    content: "\e90b"
                }

                .vc-c-icon-add_element:before {
                    content: "\e90c"
                }

                .vc-c-icon-add:before {
                    content: "\e90e"
                }

                .vc-c-icon-cog:before {
                    content: "\e90f"
                }

                .vc-c-icon-content_copy:before {
                    content: "\e910"
                }

                .vc-c-icon-delete_empty:before {
                    content: "\e911"
                }

                .vc-c-icon-dragndrop:before {
                    content: "\e912"
                }

                .vc-c-icon-fullscreen_exit:before {
                    content: "\e913"
                }

                .vc-c-icon-fullscreen:before {
                    content: "\e914"
                }

                .vc-c-icon-arrow_drop_right:before {
                    content: "\e915"
                }

                .vc-c-icon-layout_default:before {
                    content: "\e916"
                }

                .vc-c-icon-layout_landscape-smartphones:before {
                    content: "\e917"
                }

                .vc-c-icon-layout_landscape-tablets:before {
                    content: "\e918"
                }

                .vc-c-icon-layout_portrait-smartphones:before {
                    content: "\e919"
                }

                .vc-c-icon-layout_portrait-tablets:before {
                    content: "\e91a"
                }

                .vc-c-icon-mode_edit:before {
                    content: "\e91c"
                }

                .vc-c-icon-row_default_fe:before {
                    content: "\e91d"
                }

                .vc-c-icon-text-block:before {
                    content: "\e91e"
                }

                .vc_txt_align_left {
                    text-align: left
                }

                .vc_txt_align_right {
                    text-align: right
                }

                .vc_txt_align_center {
                    text-align: center
                }

                .vc_txt_align_justify {
                    text-align: justify;
                    text-justify: inter-word
                }

                .vc_el_width_50 {
                    width: 50%
                }

                .vc_el_width_60 {
                    width: 60%
                }

                .vc_el_width_70 {
                    width: 70%
                }

                .vc_el_width_80 {
                    width: 80%
                }

                .vc_el_width_90 {
                    width: 90%
                }

                .vc_el_width_100 {
                    width: 100%
                }

                .vc_btn,a.vc_btn,button.vc_btn {
                    cursor: pointer;
                    display: inline-block;
                    text-decoration: none!important;
                    padding: 9px 12px;
                    font-size: 100%;
                    line-height: 20px;
                    border-radius: 4px
                }

                .vc_general.vc_btn3,.wpb_button:hover,a.wpb_button_a,a.wpb_button_a:hover {
                    text-decoration: none
                }

                .vc_btn,.vc_btn:focus,.vc_btn:hover,a.vc_btn,a.vc_btn:focus,a.vc_btn:hover,button.vc_btn,button.vc_btn:focus,button.vc_btn:hover {
                    border: 1px solid transparent;
                    -webkit-box-shadow: none;
                    -moz-box-shadow: none;
                    box-shadow: none
                }

                .vc_btn-lg,a.vc_btn-lg,button.vc_btn-lg {
                    padding: 10px 16px;
                    font-size: 18px;
                    line-height: 1.33;
                    border-radius: 6px
                }

                .vc_btn-sm,a.vc_btn-sm,button.vc_btn-sm {
                    padding: 5px 10px;
                    font-size: 12px;
                    line-height: 1.5;
                    border-radius: 3px
                }

                .vc_btn-xs,a.vc_btn-xs,button.vc_btn-xs {
                    padding: 1px 5px;
                    font-size: 12px;
                    line-height: 1.5;
                    border-radius: 3px
                }

                .vc_btn_square,a.vc_btn_square,button.vc_btn_square {
                    border-radius: 0
                }

                .vc_btn_square_outlined,a.vc_btn_square_outlined,button.vc_btn_square_outlined {
                    border-radius: 0;
                    background: 0 0!important
                }

                .vc_btn_square_outlined,.vc_btn_square_outlined:focus,.vc_btn_square_outlined:hover,a.vc_btn_square_outlined,a.vc_btn_square_outlined:focus,a.vc_btn_square_outlined:hover,button.vc_btn_square_outlined,button.vc_btn_square_outlined:focus,button.vc_btn_square_outlined:hover {
                    border: 2px solid
                }

                .vc_btn_round,a.vc_btn_round,button.vc_btn_round {
                    border-radius: 25px
                }

                .vc_btn_outlined,a.vc_btn_outlined,button.vc_btn_outlined {
                    background: 0 0!important
                }

                .open>.dropdown-toggle.vc_btn-danger,.open>.dropdown-toggle.vc_btn-default,.open>.dropdown-toggle.vc_btn-info,.open>.dropdown-toggle.vc_btn-primary,.open>.dropdown-toggle.vc_btn-success,.open>.dropdown-toggle.vc_btn-warning,.open>.dropdown-togglea.vc_btn-danger,.open>.dropdown-togglea.vc_btn-default,.open>.dropdown-togglea.vc_btn-info,.open>.dropdown-togglea.vc_btn-primary,.open>.dropdown-togglea.vc_btn-success,.open>.dropdown-togglea.vc_btn-warning,.open>.dropdown-togglebutton.vc_btn-danger,.open>.dropdown-togglebutton.vc_btn-default,.open>.dropdown-togglebutton.vc_btn-info,.open>.dropdown-togglebutton.vc_btn-primary,.open>.dropdown-togglebutton.vc_btn-success,.open>.dropdown-togglebutton.vc_btn-warning,.vc_btn-danger.active,.vc_btn-danger:active,.vc_btn-default.active,.vc_btn-default:active,.vc_btn-info.active,.vc_btn-info:active,.vc_btn-primary.active,.vc_btn-primary:active,.vc_btn-success.active,.vc_btn-success:active,.vc_btn-warning.active,.vc_btn-warning:active,a.vc_btn-danger.active,a.vc_btn-danger:active,a.vc_btn-default.active,a.vc_btn-default:active,a.vc_btn-info.active,a.vc_btn-info:active,a.vc_btn-primary.active,a.vc_btn-primary:active,a.vc_btn-success.active,a.vc_btn-success:active,a.vc_btn-warning.active,a.vc_btn-warning:active,button.vc_btn-danger.active,button.vc_btn-danger:active,button.vc_btn-default.active,button.vc_btn-default:active,button.vc_btn-info.active,button.vc_btn-info:active,button.vc_btn-primary.active,button.vc_btn-primary:active,button.vc_btn-success.active,button.vc_btn-success:active,button.vc_btn-warning.active,button.vc_btn-warning:active {
                    background-image: none
                }

                .vc_btn_outlined,.vc_btn_outlined:focus,.vc_btn_outlined:hover,a.vc_btn_outlined,a.vc_btn_outlined:focus,a.vc_btn_outlined:hover,button.vc_btn_outlined,button.vc_btn_outlined:focus,button.vc_btn_outlined:hover {
                    border: 2px solid
                }

                .vc_btn-blue,a.vc_btn-blue,button.vc_btn-blue {
                    background-color: #5472D2;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-blue:hover,a.vc_btn-blue:hover,button.vc_btn-blue:hover {
                    background-color: #3c5ecc;
                    color: #f7f7f7!important
                }

                .vc_btn-blue.vc_btn_outlined,.vc_btn-blue.vc_btn_square_outlined,a.vc_btn-blue.vc_btn_outlined,a.vc_btn-blue.vc_btn_square_outlined,button.vc_btn-blue.vc_btn_outlined,button.vc_btn-blue.vc_btn_square_outlined {
                    color: #5472D2!important
                }

                .vc_btn-blue.vc_btn_outlined:hover,.vc_btn-blue.vc_btn_square_outlined:hover,a.vc_btn-blue.vc_btn_outlined:hover,a.vc_btn-blue.vc_btn_square_outlined:hover,button.vc_btn-blue.vc_btn_outlined:hover,button.vc_btn-blue.vc_btn_square_outlined:hover {
                    border-color: #3c5ecc
                }

                .vc_btn-blue.vc_btn_3d,a.vc_btn-blue.vc_btn_3d,button.vc_btn-blue.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #3253bc;
                    box-shadow: 0 5px 0 #3253bc;
                    margin-bottom: 5px
                }

                .vc_btn-blue.vc_btn_3d.vc_btn_xs,a.vc_btn-blue.vc_btn_3d.vc_btn_xs,button.vc_btn-blue.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #3253bc;
                    box-shadow: 0 3px 0 #3253bc;
                    margin-bottom: 3px
                }

                .vc_btn-blue.vc_btn_3d.vc_btn_sm,a.vc_btn-blue.vc_btn_3d.vc_btn_sm,button.vc_btn-blue.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #3253bc;
                    box-shadow: 0 4px 0 #3253bc;
                    margin-bottom: 4px
                }

                .vc_btn-turquoise,a.vc_btn-turquoise,button.vc_btn-turquoise {
                    background-color: #00C1CF;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-turquoise:hover,a.vc_btn-turquoise:hover,button.vc_btn-turquoise:hover {
                    background-color: #00a4b0;
                    color: #f7f7f7!important
                }

                .vc_btn-turquoise.vc_btn_outlined,.vc_btn-turquoise.vc_btn_square_outlined,a.vc_btn-turquoise.vc_btn_outlined,a.vc_btn-turquoise.vc_btn_square_outlined,button.vc_btn-turquoise.vc_btn_outlined,button.vc_btn-turquoise.vc_btn_square_outlined {
                    color: #00C1CF!important
                }

                .vc_btn-turquoise.vc_btn_outlined:hover,.vc_btn-turquoise.vc_btn_square_outlined:hover,a.vc_btn-turquoise.vc_btn_outlined:hover,a.vc_btn-turquoise.vc_btn_square_outlined:hover,button.vc_btn-turquoise.vc_btn_outlined:hover,button.vc_btn-turquoise.vc_btn_square_outlined:hover {
                    border-color: #00a4b0
                }

                .vc_btn-turquoise.vc_btn_3d,a.vc_btn-turquoise.vc_btn_3d,button.vc_btn-turquoise.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #008d97;
                    box-shadow: 0 5px 0 #008d97;
                    margin-bottom: 5px
                }

                .vc_btn-turquoise.vc_btn_3d.vc_btn_xs,a.vc_btn-turquoise.vc_btn_3d.vc_btn_xs,button.vc_btn-turquoise.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #008d97;
                    box-shadow: 0 3px 0 #008d97;
                    margin-bottom: 3px
                }

                .vc_btn-turquoise.vc_btn_3d.vc_btn_sm,a.vc_btn-turquoise.vc_btn_3d.vc_btn_sm,button.vc_btn-turquoise.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #008d97;
                    box-shadow: 0 4px 0 #008d97;
                    margin-bottom: 4px
                }

                .vc_btn-pink,a.vc_btn-pink,button.vc_btn-pink {
                    background-color: #FE6C61;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-pink:hover,a.vc_btn-pink:hover,button.vc_btn-pink:hover {
                    background-color: #fe5043;
                    color: #f7f7f7!important
                }

                .vc_btn-pink.vc_btn_outlined,.vc_btn-pink.vc_btn_square_outlined,a.vc_btn-pink.vc_btn_outlined,a.vc_btn-pink.vc_btn_square_outlined,button.vc_btn-pink.vc_btn_outlined,button.vc_btn-pink.vc_btn_square_outlined {
                    color: #FE6C61!important
                }

                .vc_btn-pink.vc_btn_outlined:hover,.vc_btn-pink.vc_btn_square_outlined:hover,a.vc_btn-pink.vc_btn_outlined:hover,a.vc_btn-pink.vc_btn_square_outlined:hover,button.vc_btn-pink.vc_btn_outlined:hover,button.vc_btn-pink.vc_btn_square_outlined:hover {
                    border-color: #fe5043
                }

                .vc_btn-pink.vc_btn_3d,a.vc_btn-pink.vc_btn_3d,button.vc_btn-pink.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #fe3829;
                    box-shadow: 0 5px 0 #fe3829;
                    margin-bottom: 5px
                }

                .vc_btn-pink.vc_btn_3d.vc_btn_xs,a.vc_btn-pink.vc_btn_3d.vc_btn_xs,button.vc_btn-pink.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #fe3829;
                    box-shadow: 0 3px 0 #fe3829;
                    margin-bottom: 3px
                }

                .vc_btn-pink.vc_btn_3d.vc_btn_sm,a.vc_btn-pink.vc_btn_3d.vc_btn_sm,button.vc_btn-pink.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #fe3829;
                    box-shadow: 0 4px 0 #fe3829;
                    margin-bottom: 4px
                }

                .vc_btn-violet,a.vc_btn-violet,button.vc_btn-violet {
                    background-color: #8D6DC4;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-violet:hover,a.vc_btn-violet:hover,button.vc_btn-violet:hover {
                    background-color: #7c57bb;
                    color: #f7f7f7!important
                }

                .vc_btn-violet.vc_btn_outlined,.vc_btn-violet.vc_btn_square_outlined,a.vc_btn-violet.vc_btn_outlined,a.vc_btn-violet.vc_btn_square_outlined,button.vc_btn-violet.vc_btn_outlined,button.vc_btn-violet.vc_btn_square_outlined {
                    color: #8D6DC4!important
                }

                .vc_btn-violet.vc_btn_outlined:hover,.vc_btn-violet.vc_btn_square_outlined:hover,a.vc_btn-violet.vc_btn_outlined:hover,a.vc_btn-violet.vc_btn_square_outlined:hover,button.vc_btn-violet.vc_btn_outlined:hover,button.vc_btn-violet.vc_btn_square_outlined:hover {
                    border-color: #7c57bb
                }

                .vc_btn-violet.vc_btn_3d,a.vc_btn-violet.vc_btn_3d,button.vc_btn-violet.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #6e48b1;
                    box-shadow: 0 5px 0 #6e48b1;
                    margin-bottom: 5px
                }

                .vc_btn-violet.vc_btn_3d.vc_btn_xs,a.vc_btn-violet.vc_btn_3d.vc_btn_xs,button.vc_btn-violet.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #6e48b1;
                    box-shadow: 0 3px 0 #6e48b1;
                    margin-bottom: 3px
                }

                .vc_btn-violet.vc_btn_3d.vc_btn_sm,a.vc_btn-violet.vc_btn_3d.vc_btn_sm,button.vc_btn-violet.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #6e48b1;
                    box-shadow: 0 4px 0 #6e48b1;
                    margin-bottom: 4px
                }

                .vc_btn-peacoc,a.vc_btn-peacoc,button.vc_btn-peacoc {
                    background-color: #4CADC9;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-peacoc:hover,a.vc_btn-peacoc:hover,button.vc_btn-peacoc:hover {
                    background-color: #39a0bd;
                    color: #f7f7f7!important
                }

                .vc_btn-peacoc.vc_btn_outlined,.vc_btn-peacoc.vc_btn_square_outlined,a.vc_btn-peacoc.vc_btn_outlined,a.vc_btn-peacoc.vc_btn_square_outlined,button.vc_btn-peacoc.vc_btn_outlined,button.vc_btn-peacoc.vc_btn_square_outlined {
                    color: #4CADC9!important
                }

                .vc_btn-peacoc.vc_btn_outlined:hover,.vc_btn-peacoc.vc_btn_square_outlined:hover,a.vc_btn-peacoc.vc_btn_outlined:hover,a.vc_btn-peacoc.vc_btn_square_outlined:hover,button.vc_btn-peacoc.vc_btn_outlined:hover,button.vc_btn-peacoc.vc_btn_square_outlined:hover {
                    border-color: #39a0bd
                }

                .vc_btn-peacoc.vc_btn_3d,a.vc_btn-peacoc.vc_btn_3d,button.vc_btn-peacoc.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #338faa;
                    box-shadow: 0 5px 0 #338faa;
                    margin-bottom: 5px
                }

                .vc_btn-peacoc.vc_btn_3d.vc_btn_xs,a.vc_btn-peacoc.vc_btn_3d.vc_btn_xs,button.vc_btn-peacoc.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #338faa;
                    box-shadow: 0 3px 0 #338faa;
                    margin-bottom: 3px
                }

                .vc_btn-peacoc.vc_btn_3d.vc_btn_sm,a.vc_btn-peacoc.vc_btn_3d.vc_btn_sm,button.vc_btn-peacoc.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #338faa;
                    box-shadow: 0 4px 0 #338faa;
                    margin-bottom: 4px
                }

                .vc_btn-chino,a.vc_btn-chino,button.vc_btn-chino {
                    background-color: #CEC2AB;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-chino:hover,a.vc_btn-chino:hover,button.vc_btn-chino:hover {
                    background-color: #c3b498;
                    color: #f7f7f7!important
                }

                .vc_btn-chino.vc_btn_outlined,.vc_btn-chino.vc_btn_square_outlined,a.vc_btn-chino.vc_btn_outlined,a.vc_btn-chino.vc_btn_square_outlined,button.vc_btn-chino.vc_btn_outlined,button.vc_btn-chino.vc_btn_square_outlined {
                    color: #CEC2AB!important
                }

                .vc_btn-chino.vc_btn_outlined:hover,.vc_btn-chino.vc_btn_square_outlined:hover,a.vc_btn-chino.vc_btn_outlined:hover,a.vc_btn-chino.vc_btn_square_outlined:hover,button.vc_btn-chino.vc_btn_outlined:hover,button.vc_btn-chino.vc_btn_square_outlined:hover {
                    border-color: #c3b498
                }

                .vc_btn-chino.vc_btn_3d,a.vc_btn-chino.vc_btn_3d,button.vc_btn-chino.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #b9a888;
                    box-shadow: 0 5px 0 #b9a888;
                    margin-bottom: 5px
                }

                .vc_btn-chino.vc_btn_3d.vc_btn_xs,a.vc_btn-chino.vc_btn_3d.vc_btn_xs,button.vc_btn-chino.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #b9a888;
                    box-shadow: 0 3px 0 #b9a888;
                    margin-bottom: 3px
                }

                .vc_btn-chino.vc_btn_3d.vc_btn_sm,a.vc_btn-chino.vc_btn_3d.vc_btn_sm,button.vc_btn-chino.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #b9a888;
                    box-shadow: 0 4px 0 #b9a888;
                    margin-bottom: 4px
                }

                .vc_btn-mulled_wine,a.vc_btn-mulled_wine,button.vc_btn-mulled_wine {
                    background-color: #50485B;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-mulled_wine:hover,a.vc_btn-mulled_wine:hover,button.vc_btn-mulled_wine:hover {
                    background-color: #413a4a;
                    color: #f7f7f7!important
                }

                .vc_btn-mulled_wine.vc_btn_outlined,.vc_btn-mulled_wine.vc_btn_square_outlined,a.vc_btn-mulled_wine.vc_btn_outlined,a.vc_btn-mulled_wine.vc_btn_square_outlined,button.vc_btn-mulled_wine.vc_btn_outlined,button.vc_btn-mulled_wine.vc_btn_square_outlined {
                    color: #50485B!important
                }

                .vc_btn-mulled_wine.vc_btn_outlined:hover,.vc_btn-mulled_wine.vc_btn_square_outlined:hover,a.vc_btn-mulled_wine.vc_btn_outlined:hover,a.vc_btn-mulled_wine.vc_btn_square_outlined:hover,button.vc_btn-mulled_wine.vc_btn_outlined:hover,button.vc_btn-mulled_wine.vc_btn_square_outlined:hover {
                    border-color: #413a4a
                }

                .vc_btn-mulled_wine.vc_btn_3d,a.vc_btn-mulled_wine.vc_btn_3d,button.vc_btn-mulled_wine.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #342f3c;
                    box-shadow: 0 5px 0 #342f3c;
                    margin-bottom: 5px
                }

                .vc_btn-mulled_wine.vc_btn_3d.vc_btn_xs,a.vc_btn-mulled_wine.vc_btn_3d.vc_btn_xs,button.vc_btn-mulled_wine.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #342f3c;
                    box-shadow: 0 3px 0 #342f3c;
                    margin-bottom: 3px
                }

                .vc_btn-mulled_wine.vc_btn_3d.vc_btn_sm,a.vc_btn-mulled_wine.vc_btn_3d.vc_btn_sm,button.vc_btn-mulled_wine.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #342f3c;
                    box-shadow: 0 4px 0 #342f3c;
                    margin-bottom: 4px
                }

                .vc_btn-vista_blue,a.vc_btn-vista_blue,button.vc_btn-vista_blue {
                    background-color: #75D69C;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-vista_blue:hover,a.vc_btn-vista_blue:hover,button.vc_btn-vista_blue:hover {
                    background-color: #5dcf8b;
                    color: #f7f7f7!important
                }

                .vc_btn-vista_blue.vc_btn_outlined,.vc_btn-vista_blue.vc_btn_square_outlined,a.vc_btn-vista_blue.vc_btn_outlined,a.vc_btn-vista_blue.vc_btn_square_outlined,button.vc_btn-vista_blue.vc_btn_outlined,button.vc_btn-vista_blue.vc_btn_square_outlined {
                    color: #75D69C!important
                }

                .vc_btn-vista_blue.vc_btn_outlined:hover,.vc_btn-vista_blue.vc_btn_square_outlined:hover,a.vc_btn-vista_blue.vc_btn_outlined:hover,a.vc_btn-vista_blue.vc_btn_square_outlined:hover,button.vc_btn-vista_blue.vc_btn_outlined:hover,button.vc_btn-vista_blue.vc_btn_square_outlined:hover {
                    border-color: #5dcf8b
                }

                .vc_btn-vista_blue.vc_btn_3d,a.vc_btn-vista_blue.vc_btn_3d,button.vc_btn-vista_blue.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #4ac97d;
                    box-shadow: 0 5px 0 #4ac97d;
                    margin-bottom: 5px
                }

                .vc_btn-vista_blue.vc_btn_3d.vc_btn_xs,a.vc_btn-vista_blue.vc_btn_3d.vc_btn_xs,button.vc_btn-vista_blue.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #4ac97d;
                    box-shadow: 0 3px 0 #4ac97d;
                    margin-bottom: 3px
                }

                .vc_btn-vista_blue.vc_btn_3d.vc_btn_sm,a.vc_btn-vista_blue.vc_btn_3d.vc_btn_sm,button.vc_btn-vista_blue.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #4ac97d;
                    box-shadow: 0 4px 0 #4ac97d;
                    margin-bottom: 4px
                }

                .vc_btn-black,a.vc_btn-black,button.vc_btn-black {
                    background-color: #2A2A2A;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-black:hover,a.vc_btn-black:hover,button.vc_btn-black:hover {
                    background-color: #1b1b1b;
                    color: #f7f7f7!important
                }

                .vc_btn-black.vc_btn_outlined,.vc_btn-black.vc_btn_square_outlined,a.vc_btn-black.vc_btn_outlined,a.vc_btn-black.vc_btn_square_outlined,button.vc_btn-black.vc_btn_outlined,button.vc_btn-black.vc_btn_square_outlined {
                    color: #2A2A2A!important
                }

                .vc_btn-black.vc_btn_outlined:hover,.vc_btn-black.vc_btn_square_outlined:hover,a.vc_btn-black.vc_btn_outlined:hover,a.vc_btn-black.vc_btn_square_outlined:hover,button.vc_btn-black.vc_btn_outlined:hover,button.vc_btn-black.vc_btn_square_outlined:hover {
                    border-color: #1b1b1b
                }

                .vc_btn-black.vc_btn_3d,a.vc_btn-black.vc_btn_3d,button.vc_btn-black.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #0e0e0e;
                    box-shadow: 0 5px 0 #0e0e0e;
                    margin-bottom: 5px
                }

                .vc_btn-black.vc_btn_3d.vc_btn_xs,a.vc_btn-black.vc_btn_3d.vc_btn_xs,button.vc_btn-black.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #0e0e0e;
                    box-shadow: 0 3px 0 #0e0e0e;
                    margin-bottom: 3px
                }

                .vc_btn-black.vc_btn_3d.vc_btn_sm,a.vc_btn-black.vc_btn_3d.vc_btn_sm,button.vc_btn-black.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #0e0e0e;
                    box-shadow: 0 4px 0 #0e0e0e;
                    margin-bottom: 4px
                }

                .vc_btn-grey,a.vc_btn-grey,button.vc_btn-grey {
                    background-color: #EBEBEB;
                    color: #666!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-grey:hover,a.vc_btn-grey:hover,button.vc_btn-grey:hover {
                    background-color: #dcdcdc;
                    color: #5e5e5e!important
                }

                .vc_btn-grey.vc_btn_outlined,.vc_btn-grey.vc_btn_square_outlined,a.vc_btn-grey.vc_btn_outlined,a.vc_btn-grey.vc_btn_square_outlined,button.vc_btn-grey.vc_btn_outlined,button.vc_btn-grey.vc_btn_square_outlined {
                    color: #EBEBEB!important
                }

                .vc_btn-grey.vc_btn_outlined:hover,.vc_btn-grey.vc_btn_square_outlined:hover,a.vc_btn-grey.vc_btn_outlined:hover,a.vc_btn-grey.vc_btn_square_outlined:hover,button.vc_btn-grey.vc_btn_outlined:hover,button.vc_btn-grey.vc_btn_square_outlined:hover {
                    border-color: #dcdcdc
                }

                .vc_btn-grey.vc_btn_3d,a.vc_btn-grey.vc_btn_3d,button.vc_btn-grey.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #cfcfcf;
                    box-shadow: 0 5px 0 #cfcfcf;
                    margin-bottom: 5px
                }

                .vc_btn-grey.vc_btn_3d.vc_btn_xs,a.vc_btn-grey.vc_btn_3d.vc_btn_xs,button.vc_btn-grey.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #cfcfcf;
                    box-shadow: 0 3px 0 #cfcfcf;
                    margin-bottom: 3px
                }

                .vc_btn-grey.vc_btn_3d.vc_btn_sm,a.vc_btn-grey.vc_btn_3d.vc_btn_sm,button.vc_btn-grey.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #cfcfcf;
                    box-shadow: 0 4px 0 #cfcfcf;
                    margin-bottom: 4px
                }

                .vc_btn-orange,a.vc_btn-orange,button.vc_btn-orange {
                    background-color: #F7BE68;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-orange:hover,a.vc_btn-orange:hover,button.vc_btn-orange:hover {
                    background-color: #f5b14b;
                    color: #f7f7f7!important
                }

                .vc_btn-orange.vc_btn_outlined,.vc_btn-orange.vc_btn_square_outlined,a.vc_btn-orange.vc_btn_outlined,a.vc_btn-orange.vc_btn_square_outlined,button.vc_btn-orange.vc_btn_outlined,button.vc_btn-orange.vc_btn_square_outlined {
                    color: #F7BE68!important
                }

                .vc_btn-orange.vc_btn_outlined:hover,.vc_btn-orange.vc_btn_square_outlined:hover,a.vc_btn-orange.vc_btn_outlined:hover,a.vc_btn-orange.vc_btn_square_outlined:hover,button.vc_btn-orange.vc_btn_outlined:hover,button.vc_btn-orange.vc_btn_square_outlined:hover {
                    border-color: #f5b14b
                }

                .vc_btn-orange.vc_btn_3d,a.vc_btn-orange.vc_btn_3d,button.vc_btn-orange.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #f4a733;
                    box-shadow: 0 5px 0 #f4a733;
                    margin-bottom: 5px
                }

                .vc_btn-orange.vc_btn_3d.vc_btn_xs,a.vc_btn-orange.vc_btn_3d.vc_btn_xs,button.vc_btn-orange.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #f4a733;
                    box-shadow: 0 3px 0 #f4a733;
                    margin-bottom: 3px
                }

                .vc_btn-orange.vc_btn_3d.vc_btn_sm,a.vc_btn-orange.vc_btn_3d.vc_btn_sm,button.vc_btn-orange.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #f4a733;
                    box-shadow: 0 4px 0 #f4a733;
                    margin-bottom: 4px
                }

                .vc_btn-sky,a.vc_btn-sky,button.vc_btn-sky {
                    background-color: #5AA1E3;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-sky:hover,a.vc_btn-sky:hover,button.vc_btn-sky:hover {
                    background-color: #4092df;
                    color: #f7f7f7!important
                }

                .vc_btn-sky.vc_btn_outlined,.vc_btn-sky.vc_btn_square_outlined,a.vc_btn-sky.vc_btn_outlined,a.vc_btn-sky.vc_btn_square_outlined,button.vc_btn-sky.vc_btn_outlined,button.vc_btn-sky.vc_btn_square_outlined {
                    color: #5AA1E3!important
                }

                .vc_btn-sky.vc_btn_outlined:hover,.vc_btn-sky.vc_btn_square_outlined:hover,a.vc_btn-sky.vc_btn_outlined:hover,a.vc_btn-sky.vc_btn_square_outlined:hover,button.vc_btn-sky.vc_btn_outlined:hover,button.vc_btn-sky.vc_btn_square_outlined:hover {
                    border-color: #4092df
                }

                .vc_btn-sky.vc_btn_3d,a.vc_btn-sky.vc_btn_3d,button.vc_btn-sky.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #2a86db;
                    box-shadow: 0 5px 0 #2a86db;
                    margin-bottom: 5px
                }

                .vc_btn-sky.vc_btn_3d.vc_btn_xs,a.vc_btn-sky.vc_btn_3d.vc_btn_xs,button.vc_btn-sky.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #2a86db;
                    box-shadow: 0 3px 0 #2a86db;
                    margin-bottom: 3px
                }

                .vc_btn-sky.vc_btn_3d.vc_btn_sm,a.vc_btn-sky.vc_btn_3d.vc_btn_sm,button.vc_btn-sky.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #2a86db;
                    box-shadow: 0 4px 0 #2a86db;
                    margin-bottom: 4px
                }

                .vc_btn-green,a.vc_btn-green,button.vc_btn-green {
                    background-color: #6DAB3C;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-green:hover,a.vc_btn-green:hover,button.vc_btn-green:hover {
                    background-color: #5f9434;
                    color: #f7f7f7!important
                }

                .vc_btn-green.vc_btn_outlined,.vc_btn-green.vc_btn_square_outlined,a.vc_btn-green.vc_btn_outlined,a.vc_btn-green.vc_btn_square_outlined,button.vc_btn-green.vc_btn_outlined,button.vc_btn-green.vc_btn_square_outlined {
                    color: #6DAB3C!important
                }

                .vc_btn-green.vc_btn_outlined:hover,.vc_btn-green.vc_btn_square_outlined:hover,a.vc_btn-green.vc_btn_outlined:hover,a.vc_btn-green.vc_btn_square_outlined:hover,button.vc_btn-green.vc_btn_outlined:hover,button.vc_btn-green.vc_btn_square_outlined:hover {
                    border-color: #5f9434
                }

                .vc_btn-green.vc_btn_3d,a.vc_btn-green.vc_btn_3d,button.vc_btn-green.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #53812d;
                    box-shadow: 0 5px 0 #53812d;
                    margin-bottom: 5px
                }

                .vc_btn-green.vc_btn_3d.vc_btn_xs,a.vc_btn-green.vc_btn_3d.vc_btn_xs,button.vc_btn-green.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #53812d;
                    box-shadow: 0 3px 0 #53812d;
                    margin-bottom: 3px
                }

                .vc_btn-green.vc_btn_3d.vc_btn_sm,a.vc_btn-green.vc_btn_3d.vc_btn_sm,button.vc_btn-green.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #53812d;
                    box-shadow: 0 4px 0 #53812d;
                    margin-bottom: 4px
                }

                .vc_btn-juicy_pink,a.vc_btn-juicy_pink,button.vc_btn-juicy_pink {
                    background-color: #F4524D;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-juicy_pink:hover,a.vc_btn-juicy_pink:hover,button.vc_btn-juicy_pink:hover {
                    background-color: #f23630;
                    color: #f7f7f7!important
                }

                .vc_btn-juicy_pink.vc_btn_outlined,.vc_btn-juicy_pink.vc_btn_square_outlined,a.vc_btn-juicy_pink.vc_btn_outlined,a.vc_btn-juicy_pink.vc_btn_square_outlined,button.vc_btn-juicy_pink.vc_btn_outlined,button.vc_btn-juicy_pink.vc_btn_square_outlined {
                    color: #F4524D!important
                }

                .vc_btn-juicy_pink.vc_btn_outlined:hover,.vc_btn-juicy_pink.vc_btn_square_outlined:hover,a.vc_btn-juicy_pink.vc_btn_outlined:hover,a.vc_btn-juicy_pink.vc_btn_square_outlined:hover,button.vc_btn-juicy_pink.vc_btn_outlined:hover,button.vc_btn-juicy_pink.vc_btn_square_outlined:hover {
                    border-color: #f23630
                }

                .vc_btn-juicy_pink.vc_btn_3d,a.vc_btn-juicy_pink.vc_btn_3d,button.vc_btn-juicy_pink.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #f11f18;
                    box-shadow: 0 5px 0 #f11f18;
                    margin-bottom: 5px
                }

                .vc_btn-juicy_pink.vc_btn_3d.vc_btn_xs,a.vc_btn-juicy_pink.vc_btn_3d.vc_btn_xs,button.vc_btn-juicy_pink.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #f11f18;
                    box-shadow: 0 3px 0 #f11f18;
                    margin-bottom: 3px
                }

                .vc_btn-juicy_pink.vc_btn_3d.vc_btn_sm,a.vc_btn-juicy_pink.vc_btn_3d.vc_btn_sm,button.vc_btn-juicy_pink.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #f11f18;
                    box-shadow: 0 4px 0 #f11f18;
                    margin-bottom: 4px
                }

                .vc_btn-sandy_brown,a.vc_btn-sandy_brown,button.vc_btn-sandy_brown {
                    background-color: #F79468;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-sandy_brown:hover,a.vc_btn-sandy_brown:hover,button.vc_btn-sandy_brown:hover {
                    background-color: #f57f4b;
                    color: #f7f7f7!important
                }

                .vc_btn-sandy_brown.vc_btn_outlined,.vc_btn-sandy_brown.vc_btn_square_outlined,a.vc_btn-sandy_brown.vc_btn_outlined,a.vc_btn-sandy_brown.vc_btn_square_outlined,button.vc_btn-sandy_brown.vc_btn_outlined,button.vc_btn-sandy_brown.vc_btn_square_outlined {
                    color: #F79468!important
                }

                .vc_btn-sandy_brown.vc_btn_outlined:hover,.vc_btn-sandy_brown.vc_btn_square_outlined:hover,a.vc_btn-sandy_brown.vc_btn_outlined:hover,a.vc_btn-sandy_brown.vc_btn_square_outlined:hover,button.vc_btn-sandy_brown.vc_btn_outlined:hover,button.vc_btn-sandy_brown.vc_btn_square_outlined:hover {
                    border-color: #f57f4b
                }

                .vc_btn-sandy_brown.vc_btn_3d,a.vc_btn-sandy_brown.vc_btn_3d,button.vc_btn-sandy_brown.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #f46e33;
                    box-shadow: 0 5px 0 #f46e33;
                    margin-bottom: 5px
                }

                .vc_btn-sandy_brown.vc_btn_3d.vc_btn_xs,a.vc_btn-sandy_brown.vc_btn_3d.vc_btn_xs,button.vc_btn-sandy_brown.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #f46e33;
                    box-shadow: 0 3px 0 #f46e33;
                    margin-bottom: 3px
                }

                .vc_btn-sandy_brown.vc_btn_3d.vc_btn_sm,a.vc_btn-sandy_brown.vc_btn_3d.vc_btn_sm,button.vc_btn-sandy_brown.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #f46e33;
                    box-shadow: 0 4px 0 #f46e33;
                    margin-bottom: 4px
                }

                .vc_btn-purple,a.vc_btn-purple,button.vc_btn-purple {
                    background-color: #B97EBB;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-purple:hover,a.vc_btn-purple:hover,button.vc_btn-purple:hover {
                    background-color: #ae6ab0;
                    color: #f7f7f7!important
                }

                .vc_btn-purple.vc_btn_outlined,.vc_btn-purple.vc_btn_square_outlined,a.vc_btn-purple.vc_btn_outlined,a.vc_btn-purple.vc_btn_square_outlined,button.vc_btn-purple.vc_btn_outlined,button.vc_btn-purple.vc_btn_square_outlined {
                    color: #B97EBB!important
                }

                .vc_btn-purple.vc_btn_outlined:hover,.vc_btn-purple.vc_btn_square_outlined:hover,a.vc_btn-purple.vc_btn_outlined:hover,a.vc_btn-purple.vc_btn_square_outlined:hover,button.vc_btn-purple.vc_btn_outlined:hover,button.vc_btn-purple.vc_btn_square_outlined:hover {
                    border-color: #ae6ab0
                }

                .vc_btn-purple.vc_btn_3d,a.vc_btn-purple.vc_btn_3d,button.vc_btn-purple.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #a559a8;
                    box-shadow: 0 5px 0 #a559a8;
                    margin-bottom: 5px
                }

                .vc_btn-purple.vc_btn_3d.vc_btn_xs,a.vc_btn-purple.vc_btn_3d.vc_btn_xs,button.vc_btn-purple.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #a559a8;
                    box-shadow: 0 3px 0 #a559a8;
                    margin-bottom: 3px
                }

                .vc_btn-purple.vc_btn_3d.vc_btn_sm,a.vc_btn-purple.vc_btn_3d.vc_btn_sm,button.vc_btn-purple.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #a559a8;
                    box-shadow: 0 4px 0 #a559a8;
                    margin-bottom: 4px
                }

                .vc_btn-white,a.vc_btn-white,button.vc_btn-white {
                    background-color: #FFF;
                    color: #666!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-white:hover,a.vc_btn-white:hover,button.vc_btn-white:hover {
                    background-color: #f0f0f0;
                    color: #5e5e5e!important
                }

                .vc_btn-white.vc_btn_outlined,.vc_btn-white.vc_btn_square_outlined,a.vc_btn-white.vc_btn_outlined,a.vc_btn-white.vc_btn_square_outlined,button.vc_btn-white.vc_btn_outlined,button.vc_btn-white.vc_btn_square_outlined {
                    color: #FFF!important
                }

                .vc_btn-white.vc_btn_outlined:hover,.vc_btn-white.vc_btn_square_outlined:hover,a.vc_btn-white.vc_btn_outlined:hover,a.vc_btn-white.vc_btn_square_outlined:hover,button.vc_btn-white.vc_btn_outlined:hover,button.vc_btn-white.vc_btn_square_outlined:hover {
                    border-color: #f0f0f0
                }

                .vc_btn-white.vc_btn_3d,a.vc_btn-white.vc_btn_3d,button.vc_btn-white.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #e3e3e3;
                    box-shadow: 0 5px 0 #e3e3e3;
                    margin-bottom: 5px
                }

                .vc_btn-white.vc_btn_3d.vc_btn_xs,a.vc_btn-white.vc_btn_3d.vc_btn_xs,button.vc_btn-white.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #e3e3e3;
                    box-shadow: 0 3px 0 #e3e3e3;
                    margin-bottom: 3px
                }

                .vc_btn-white.vc_btn_3d.vc_btn_sm,a.vc_btn-white.vc_btn_3d.vc_btn_sm,button.vc_btn-white.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #e3e3e3;
                    box-shadow: 0 4px 0 #e3e3e3;
                    margin-bottom: 4px
                }

                .vc_btn-grace,a.vc_btn-grace,button.vc_btn-grace {
                    background-color: #AED13B;
                    color: #fff!important;
                    -webkit-transition: all .5s;
                    -o-transition: all .5s;
                    transition: all .5s
                }

                .vc_btn-grace:hover,a.vc_btn-grace:hover,button.vc_btn-grace:hover {
                    background-color: #9ec02d;
                    color: #f7f7f7!important
                }

                .vc_btn-grace.vc_btn_outlined,.vc_btn-grace.vc_btn_square_outlined,a.vc_btn-grace.vc_btn_outlined,a.vc_btn-grace.vc_btn_square_outlined,button.vc_btn-grace.vc_btn_outlined,button.vc_btn-grace.vc_btn_square_outlined {
                    color: #AED13B!important
                }

                .vc_btn-grace.vc_btn_outlined:hover,.vc_btn-grace.vc_btn_square_outlined:hover,a.vc_btn-grace.vc_btn_outlined:hover,a.vc_btn-grace.vc_btn_square_outlined:hover,button.vc_btn-grace.vc_btn_outlined:hover,button.vc_btn-grace.vc_btn_square_outlined:hover {
                    border-color: #9ec02d
                }

                .vc_btn-grace.vc_btn_3d,a.vc_btn-grace.vc_btn_3d,button.vc_btn-grace.vc_btn_3d {
                    -webkit-box-shadow: 0 5px 0 #8dac28;
                    box-shadow: 0 5px 0 #8dac28;
                    margin-bottom: 5px
                }

                .vc_btn-grace.vc_btn_3d.vc_btn_xs,a.vc_btn-grace.vc_btn_3d.vc_btn_xs,button.vc_btn-grace.vc_btn_3d.vc_btn_xs {
                    -webkit-box-shadow: 0 3px 0 #8dac28;
                    box-shadow: 0 3px 0 #8dac28;
                    margin-bottom: 3px
                }

                .vc_btn-grace.vc_btn_3d.vc_btn_sm,a.vc_btn-grace.vc_btn_3d.vc_btn_sm,button.vc_btn-grace.vc_btn_3d.vc_btn_sm {
                    -webkit-box-shadow: 0 4px 0 #8dac28;
                    box-shadow: 0 4px 0 #8dac28;
                    margin-bottom: 4px
                }

                .vc_btn-default,a.vc_btn-default,button.vc_btn-default {
                    color: #7d7d7d;
                    background-color: #fff;
                    border-color: transparent
                }

                .open>.dropdown-toggle.vc_btn-default,.open>.dropdown-togglea.vc_btn-default,.open>.dropdown-togglebutton.vc_btn-default,.vc_btn-default.active,.vc_btn-default:active,.vc_btn-default:focus,.vc_btn-default:hover,a.vc_btn-default.active,a.vc_btn-default:active,a.vc_btn-default:focus,a.vc_btn-default:hover,button.vc_btn-default.active,button.vc_btn-default:active,button.vc_btn-default:focus,button.vc_btn-default:hover {
                    color: #7d7d7d;
                    background-color: #e6e6e6;
                    border-color: transparent
                }

                .vc_btn-default.disabled,.vc_btn-default.disabled.active,.vc_btn-default.disabled:active,.vc_btn-default.disabled:focus,.vc_btn-default.disabled:hover,.vc_btn-default[disabled],.vc_btn-default[disabled].active,.vc_btn-default[disabled]:active,.vc_btn-default[disabled]:focus,.vc_btn-default[disabled]:hover,a.vc_btn-default.disabled,a.vc_btn-default.disabled.active,a.vc_btn-default.disabled:active,a.vc_btn-default.disabled:focus,a.vc_btn-default.disabled:hover,a.vc_btn-default[disabled],a.vc_btn-default[disabled].active,a.vc_btn-default[disabled]:active,a.vc_btn-default[disabled]:focus,a.vc_btn-default[disabled]:hover,button.vc_btn-default.disabled,button.vc_btn-default.disabled.active,button.vc_btn-default.disabled:active,button.vc_btn-default.disabled:focus,button.vc_btn-default.disabled:hover,button.vc_btn-default[disabled],button.vc_btn-default[disabled].active,button.vc_btn-default[disabled]:active,button.vc_btn-default[disabled]:focus,button.vc_btn-default[disabled]:hover,fieldset[disabled] .vc_btn-default,fieldset[disabled] .vc_btn-default.active,fieldset[disabled] .vc_btn-default:active,fieldset[disabled] .vc_btn-default:focus,fieldset[disabled] .vc_btn-default:hover,fieldset[disabled] a.vc_btn-default,fieldset[disabled] a.vc_btn-default.active,fieldset[disabled] a.vc_btn-default:active,fieldset[disabled] a.vc_btn-default:focus,fieldset[disabled] a.vc_btn-default:hover,fieldset[disabled] button.vc_btn-default,fieldset[disabled] button.vc_btn-default.active,fieldset[disabled] button.vc_btn-default:active,fieldset[disabled] button.vc_btn-default:focus,fieldset[disabled] button.vc_btn-default:hover {
                    background-color: #fff;
                    border-color: transparent
                }

                .vc_btn-default .badge,a.vc_btn-default .badge,button.vc_btn-default .badge {
                    color: #fff;
                    background-color: #7d7d7d
                }

                .vc_btn-primary,a.vc_btn-primary,button.vc_btn-primary {
                    color: #fff;
                    background-color: #00aef0;
                    border-color: transparent
                }

                .open>.dropdown-toggle.vc_btn-primary,.open>.dropdown-togglea.vc_btn-primary,.open>.dropdown-togglebutton.vc_btn-primary,.vc_btn-primary.active,.vc_btn-primary:active,.vc_btn-primary:focus,.vc_btn-primary:hover,a.vc_btn-primary.active,a.vc_btn-primary:active,a.vc_btn-primary:focus,a.vc_btn-primary:hover,button.vc_btn-primary.active,button.vc_btn-primary:active,button.vc_btn-primary:focus,button.vc_btn-primary:hover {
                    color: #fff;
                    background-color: #0089bd;
                    border-color: transparent
                }

                .vc_btn-primary.disabled,.vc_btn-primary.disabled.active,.vc_btn-primary.disabled:active,.vc_btn-primary.disabled:focus,.vc_btn-primary.disabled:hover,.vc_btn-primary[disabled],.vc_btn-primary[disabled].active,.vc_btn-primary[disabled]:active,.vc_btn-primary[disabled]:focus,.vc_btn-primary[disabled]:hover,a.vc_btn-primary.disabled,a.vc_btn-primary.disabled.active,a.vc_btn-primary.disabled:active,a.vc_btn-primary.disabled:focus,a.vc_btn-primary.disabled:hover,a.vc_btn-primary[disabled],a.vc_btn-primary[disabled].active,a.vc_btn-primary[disabled]:active,a.vc_btn-primary[disabled]:focus,a.vc_btn-primary[disabled]:hover,button.vc_btn-primary.disabled,button.vc_btn-primary.disabled.active,button.vc_btn-primary.disabled:active,button.vc_btn-primary.disabled:focus,button.vc_btn-primary.disabled:hover,button.vc_btn-primary[disabled],button.vc_btn-primary[disabled].active,button.vc_btn-primary[disabled]:active,button.vc_btn-primary[disabled]:focus,button.vc_btn-primary[disabled]:hover,fieldset[disabled] .vc_btn-primary,fieldset[disabled] .vc_btn-primary.active,fieldset[disabled] .vc_btn-primary:active,fieldset[disabled] .vc_btn-primary:focus,fieldset[disabled] .vc_btn-primary:hover,fieldset[disabled] a.vc_btn-primary,fieldset[disabled] a.vc_btn-primary.active,fieldset[disabled] a.vc_btn-primary:active,fieldset[disabled] a.vc_btn-primary:focus,fieldset[disabled] a.vc_btn-primary:hover,fieldset[disabled] button.vc_btn-primary,fieldset[disabled] button.vc_btn-primary.active,fieldset[disabled] button.vc_btn-primary:active,fieldset[disabled] button.vc_btn-primary:focus,fieldset[disabled] button.vc_btn-primary:hover {
                    background-color: #00aef0;
                    border-color: transparent
                }

                .vc_btn-primary .badge,a.vc_btn-primary .badge,button.vc_btn-primary .badge {
                    color: #00aef0;
                    background-color: #fff
                }

                .vc_btn-success,a.vc_btn-success,button.vc_btn-success {
                    color: #fff;
                    background-color: #5cb85c;
                    border-color: transparent
                }

                .open>.dropdown-toggle.vc_btn-success,.open>.dropdown-togglea.vc_btn-success,.open>.dropdown-togglebutton.vc_btn-success,.vc_btn-success.active,.vc_btn-success:active,.vc_btn-success:focus,.vc_btn-success:hover,a.vc_btn-success.active,a.vc_btn-success:active,a.vc_btn-success:focus,a.vc_btn-success:hover,button.vc_btn-success.active,button.vc_btn-success:active,button.vc_btn-success:focus,button.vc_btn-success:hover {
                    color: #fff;
                    background-color: #449d44;
                    border-color: transparent
                }

                .vc_btn-success.disabled,.vc_btn-success.disabled.active,.vc_btn-success.disabled:active,.vc_btn-success.disabled:focus,.vc_btn-success.disabled:hover,.vc_btn-success[disabled],.vc_btn-success[disabled].active,.vc_btn-success[disabled]:active,.vc_btn-success[disabled]:focus,.vc_btn-success[disabled]:hover,a.vc_btn-success.disabled,a.vc_btn-success.disabled.active,a.vc_btn-success.disabled:active,a.vc_btn-success.disabled:focus,a.vc_btn-success.disabled:hover,a.vc_btn-success[disabled],a.vc_btn-success[disabled].active,a.vc_btn-success[disabled]:active,a.vc_btn-success[disabled]:focus,a.vc_btn-success[disabled]:hover,button.vc_btn-success.disabled,button.vc_btn-success.disabled.active,button.vc_btn-success.disabled:active,button.vc_btn-success.disabled:focus,button.vc_btn-success.disabled:hover,button.vc_btn-success[disabled],button.vc_btn-success[disabled].active,button.vc_btn-success[disabled]:active,button.vc_btn-success[disabled]:focus,button.vc_btn-success[disabled]:hover,fieldset[disabled] .vc_btn-success,fieldset[disabled] .vc_btn-success.active,fieldset[disabled] .vc_btn-success:active,fieldset[disabled] .vc_btn-success:focus,fieldset[disabled] .vc_btn-success:hover,fieldset[disabled] a.vc_btn-success,fieldset[disabled] a.vc_btn-success.active,fieldset[disabled] a.vc_btn-success:active,fieldset[disabled] a.vc_btn-success:focus,fieldset[disabled] a.vc_btn-success:hover,fieldset[disabled] button.vc_btn-success,fieldset[disabled] button.vc_btn-success.active,fieldset[disabled] button.vc_btn-success:active,fieldset[disabled] button.vc_btn-success:focus,fieldset[disabled] button.vc_btn-success:hover {
                    background-color: #5cb85c;
                    border-color: transparent
                }

                .vc_btn-success .badge,a.vc_btn-success .badge,button.vc_btn-success .badge {
                    color: #5cb85c;
                    background-color: #fff
                }

                .vc_btn-info,a.vc_btn-info,button.vc_btn-info {
                    color: #fff;
                    background-color: #5bc0de;
                    border-color: transparent
                }

                .open>.dropdown-toggle.vc_btn-info,.open>.dropdown-togglea.vc_btn-info,.open>.dropdown-togglebutton.vc_btn-info,.vc_btn-info.active,.vc_btn-info:active,.vc_btn-info:focus,.vc_btn-info:hover,a.vc_btn-info.active,a.vc_btn-info:active,a.vc_btn-info:focus,a.vc_btn-info:hover,button.vc_btn-info.active,button.vc_btn-info:active,button.vc_btn-info:focus,button.vc_btn-info:hover {
                    color: #fff;
                    background-color: #31b0d5;
                    border-color: transparent
                }

                .vc_btn-info.disabled,.vc_btn-info.disabled.active,.vc_btn-info.disabled:active,.vc_btn-info.disabled:focus,.vc_btn-info.disabled:hover,.vc_btn-info[disabled],.vc_btn-info[disabled].active,.vc_btn-info[disabled]:active,.vc_btn-info[disabled]:focus,.vc_btn-info[disabled]:hover,a.vc_btn-info.disabled,a.vc_btn-info.disabled.active,a.vc_btn-info.disabled:active,a.vc_btn-info.disabled:focus,a.vc_btn-info.disabled:hover,a.vc_btn-info[disabled],a.vc_btn-info[disabled].active,a.vc_btn-info[disabled]:active,a.vc_btn-info[disabled]:focus,a.vc_btn-info[disabled]:hover,button.vc_btn-info.disabled,button.vc_btn-info.disabled.active,button.vc_btn-info.disabled:active,button.vc_btn-info.disabled:focus,button.vc_btn-info.disabled:hover,button.vc_btn-info[disabled],button.vc_btn-info[disabled].active,button.vc_btn-info[disabled]:active,button.vc_btn-info[disabled]:focus,button.vc_btn-info[disabled]:hover,fieldset[disabled] .vc_btn-info,fieldset[disabled] .vc_btn-info.active,fieldset[disabled] .vc_btn-info:active,fieldset[disabled] .vc_btn-info:focus,fieldset[disabled] .vc_btn-info:hover,fieldset[disabled] a.vc_btn-info,fieldset[disabled] a.vc_btn-info.active,fieldset[disabled] a.vc_btn-info:active,fieldset[disabled] a.vc_btn-info:focus,fieldset[disabled] a.vc_btn-info:hover,fieldset[disabled] button.vc_btn-info,fieldset[disabled] button.vc_btn-info.active,fieldset[disabled] button.vc_btn-info:active,fieldset[disabled] button.vc_btn-info:focus,fieldset[disabled] button.vc_btn-info:hover {
                    background-color: #5bc0de;
                    border-color: transparent
                }

                .vc_btn-info .badge,a.vc_btn-info .badge,button.vc_btn-info .badge {
                    color: #5bc0de;
                    background-color: #fff
                }

                .vc_btn-warning,a.vc_btn-warning,button.vc_btn-warning {
                    color: #fff;
                    background-color: #f0ad4e;
                    border-color: transparent
                }

                .open>.dropdown-toggle.vc_btn-warning,.open>.dropdown-togglea.vc_btn-warning,.open>.dropdown-togglebutton.vc_btn-warning,.vc_btn-warning.active,.vc_btn-warning:active,.vc_btn-warning:focus,.vc_btn-warning:hover,a.vc_btn-warning.active,a.vc_btn-warning:active,a.vc_btn-warning:focus,a.vc_btn-warning:hover,button.vc_btn-warning.active,button.vc_btn-warning:active,button.vc_btn-warning:focus,button.vc_btn-warning:hover {
                    color: #fff;
                    background-color: #ec971f;
                    border-color: transparent
                }

                .vc_btn-warning.disabled,.vc_btn-warning.disabled.active,.vc_btn-warning.disabled:active,.vc_btn-warning.disabled:focus,.vc_btn-warning.disabled:hover,.vc_btn-warning[disabled],.vc_btn-warning[disabled].active,.vc_btn-warning[disabled]:active,.vc_btn-warning[disabled]:focus,.vc_btn-warning[disabled]:hover,a.vc_btn-warning.disabled,a.vc_btn-warning.disabled.active,a.vc_btn-warning.disabled:active,a.vc_btn-warning.disabled:focus,a.vc_btn-warning.disabled:hover,a.vc_btn-warning[disabled],a.vc_btn-warning[disabled].active,a.vc_btn-warning[disabled]:active,a.vc_btn-warning[disabled]:focus,a.vc_btn-warning[disabled]:hover,button.vc_btn-warning.disabled,button.vc_btn-warning.disabled.active,button.vc_btn-warning.disabled:active,button.vc_btn-warning.disabled:focus,button.vc_btn-warning.disabled:hover,button.vc_btn-warning[disabled],button.vc_btn-warning[disabled].active,button.vc_btn-warning[disabled]:active,button.vc_btn-warning[disabled]:focus,button.vc_btn-warning[disabled]:hover,fieldset[disabled] .vc_btn-warning,fieldset[disabled] .vc_btn-warning.active,fieldset[disabled] .vc_btn-warning:active,fieldset[disabled] .vc_btn-warning:focus,fieldset[disabled] .vc_btn-warning:hover,fieldset[disabled] a.vc_btn-warning,fieldset[disabled] a.vc_btn-warning.active,fieldset[disabled] a.vc_btn-warning:active,fieldset[disabled] a.vc_btn-warning:focus,fieldset[disabled] a.vc_btn-warning:hover,fieldset[disabled] button.vc_btn-warning,fieldset[disabled] button.vc_btn-warning.active,fieldset[disabled] button.vc_btn-warning:active,fieldset[disabled] button.vc_btn-warning:focus,fieldset[disabled] button.vc_btn-warning:hover {
                    background-color: #f0ad4e;
                    border-color: transparent
                }

                .vc_btn-warning .badge,a.vc_btn-warning .badge,button.vc_btn-warning .badge {
                    color: #f0ad4e;
                    background-color: #fff
                }

                .vc_btn-danger,a.vc_btn-danger,button.vc_btn-danger {
                    color: #fff;
                    background-color: #d9534f;
                    border-color: transparent
                }

                .open>.dropdown-toggle.vc_btn-danger,.open>.dropdown-togglea.vc_btn-danger,.open>.dropdown-togglebutton.vc_btn-danger,.vc_btn-danger.active,.vc_btn-danger:active,.vc_btn-danger:focus,.vc_btn-danger:hover,a.vc_btn-danger.active,a.vc_btn-danger:active,a.vc_btn-danger:focus,a.vc_btn-danger:hover,button.vc_btn-danger.active,button.vc_btn-danger:active,button.vc_btn-danger:focus,button.vc_btn-danger:hover {
                    color: #fff;
                    background-color: #c9302c;
                    border-color: transparent
                }

                .vc_btn-danger.disabled,.vc_btn-danger.disabled.active,.vc_btn-danger.disabled:active,.vc_btn-danger.disabled:focus,.vc_btn-danger.disabled:hover,.vc_btn-danger[disabled],.vc_btn-danger[disabled].active,.vc_btn-danger[disabled]:active,.vc_btn-danger[disabled]:focus,.vc_btn-danger[disabled]:hover,a.vc_btn-danger.disabled,a.vc_btn-danger.disabled.active,a.vc_btn-danger.disabled:active,a.vc_btn-danger.disabled:focus,a.vc_btn-danger.disabled:hover,a.vc_btn-danger[disabled],a.vc_btn-danger[disabled].active,a.vc_btn-danger[disabled]:active,a.vc_btn-danger[disabled]:focus,a.vc_btn-danger[disabled]:hover,button.vc_btn-danger.disabled,button.vc_btn-danger.disabled.active,button.vc_btn-danger.disabled:active,button.vc_btn-danger.disabled:focus,button.vc_btn-danger.disabled:hover,button.vc_btn-danger[disabled],button.vc_btn-danger[disabled].active,button.vc_btn-danger[disabled]:active,button.vc_btn-danger[disabled]:focus,button.vc_btn-danger[disabled]:hover,fieldset[disabled] .vc_btn-danger,fieldset[disabled] .vc_btn-danger.active,fieldset[disabled] .vc_btn-danger:active,fieldset[disabled] .vc_btn-danger:focus,fieldset[disabled] .vc_btn-danger:hover,fieldset[disabled] a.vc_btn-danger,fieldset[disabled] a.vc_btn-danger.active,fieldset[disabled] a.vc_btn-danger:active,fieldset[disabled] a.vc_btn-danger:focus,fieldset[disabled] a.vc_btn-danger:hover,fieldset[disabled] button.vc_btn-danger,fieldset[disabled] button.vc_btn-danger.active,fieldset[disabled] button.vc_btn-danger:active,fieldset[disabled] button.vc_btn-danger:focus,fieldset[disabled] button.vc_btn-danger:hover {
                    background-color: #d9534f;
                    border-color: transparent
                }

                .vc_btn-danger .badge,a.vc_btn-danger .badge,button.vc_btn-danger .badge {
                    color: #d9534f;
                    background-color: #fff
                }

                .vc_button-2-wrapper.vc_button-2-align-left {
                    display: block;
                    text-align: left
                }

                .vc_button-2-wrapper.vc_button-2-align-right {
                    display: block;
                    text-align: right
                }

                .vc_button-2-wrapper.vc_button-2-align-center {
                    display: block;
                    text-align: center
                }

                i.icon {
                    display: inline-block;
                    width: 16px;
                    height: 16px;
                    line-height: 16px;
                    vertical-align: text-top;
                    margin-left: 5px
                }

                .wpb_btn-large i.icon {
                    height: 19px;
                    margin-left: 9px
                }

                .wpb_btn-small i.icon {
                    height: 15px
                }

                .wpb_btn-mini i.icon {
                    display: none
                }

                .wpb_address_book i.icon,option.wpb_address_book {
                    background: url(../images/icons/address-book.png) right center no-repeat
                }

                .wpb_alarm_clock i.icon,option.wpb_alarm_clock {
                    background: url(../images/icons/alarm-clock.png) right center no-repeat
                }

                .wpb_anchor i.icon,option.wpb_anchor {
                    background: url(../images/icons/anchor.png) right center no-repeat
                }

                .wpb_application_image i.icon,option.wpb_application_image {
                    background: url(../images/icons/application-image.png) right center no-repeat
                }

                .wpb_arrow i.icon,option.wpb_arrow {
                    background: url(../images/icons/arrow.png) right center no-repeat
                }

                .wpb_asterisk i.icon,option.wpb_asterisk {
                    background: url(../images/icons/asterisk.png) right center no-repeat
                }

                .wpb_hammer i.icon,option.wpb_hammer {
                    background: url(../images/icons/auction-hammer.png) right center no-repeat
                }

                .wpb_balloon i.icon,option.wpb_balloon {
                    background: url(../images/icons/balloon.png) right center no-repeat
                }

                .wpb_balloon_buzz i.icon,option.wpb_balloon_buzz {
                    background: url(../images/icons/balloon-buzz.png) right center no-repeat
                }

                .wpb_balloon_facebook i.icon,option.wpb_balloon_facebook {
                    background: url(../images/icons/balloon-facebook.png) right center no-repeat
                }

                .wpb_balloon_twitter i.icon,option.wpb_balloon_twitter {
                    background: url(../images/icons/balloon-twitter.png) right center no-repeat
                }

                .wpb_battery i.icon,option.wpb_battery {
                    background: url(../images/icons/battery-full.png) right center no-repeat
                }

                .wpb_binocular i.icon,option.wpb_binocular {
                    background: url(../images/icons/binocular.png) right center no-repeat
                }

                .wpb_document_excel i.icon,option.wpb_document_excel {
                    background: url(../images/icons/blue-document-excel.png) right center no-repeat
                }

                .wpb_document_image i.icon,option.wpb_document_image {
                    background: url(../images/icons/blue-document-image.png) right center no-repeat
                }

                .wpb_document_music i.icon,option.wpb_document_music {
                    background: url(../images/icons/blue-document-music.png) right center no-repeat
                }

                .wpb_document_office i.icon,option.wpb_document_office {
                    background: url(../images/icons/blue-document-office.png) right center no-repeat
                }

                .wpb_document_pdf i.icon,option.wpb_document_pdf {
                    background: url(../images/icons/blue-document-pdf.png) right center no-repeat
                }

                .wpb_document_powerpoint i.icon,option.wpb_document_powerpoint {
                    background: url(../images/icons/blue-document-powerpoint.png) right center no-repeat
                }

                .wpb_document_word i.icon,option.wpb_document_word {
                    background: url(../images/icons/blue-document-word.png) right center no-repeat
                }

                .wpb_bookmark i.icon,option.wpb_bookmark {
                    background: url(../images/icons/bookmark.png) right center no-repeat
                }

                .wpb_camcorder i.icon,option.wpb_camcorder {
                    background: url(../images/icons/camcorder.png) right center no-repeat
                }

                .wpb_camera i.icon,option.wpb_camera {
                    background: url(../images/icons/camera.png) right center no-repeat
                }

                .wpb_chart i.icon,option.wpb_chart {
                    background: url(../images/icons/chart.png) right center no-repeat
                }

                .wpb_chart_pie i.icon,option.wpb_chart_pie {
                    background: url(../images/icons/chart-pie.png) right center no-repeat
                }

                .wpb_clock i.icon,option.wpb_clock {
                    background: url(../images/icons/clock.png) right center no-repeat
                }

                .wpb_play i.icon,option.wpb_play {
                    background: url(../images/icons/control.png) right center no-repeat
                }

                .wpb_fire i.icon,option.wpb_fire {
                    background: url(../images/icons/fire.png) right center no-repeat
                }

                .wpb_heart i.icon,option.wpb_heart {
                    background: url(../images/icons/heart.png) right center no-repeat
                }

                .wpb_mail i.icon,option.wpb_mail {
                    background: url(../images/icons/mail.png) right center no-repeat
                }

                .wpb_shield i.icon,option.wpb_shield {
                    background: url(../images/icons/plus-shield.png) right center no-repeat
                }

                .wpb_video i.icon,option.wpb_video {
                    background: url(../images/icons/video.png) right center no-repeat
                }

                .vc_column_container .vc_btn,.vc_column_container .wpb_button {
                    margin-top: 5px;
                    margin-bottom: 5px
                }

                .vc_message_box {
                    border: 1px solid transparent;
                    display: block;
                    overflow: hidden;
                    margin: 0 0 21.74px;
                    padding: 1em 1em 1em 4em;
                    position: relative;
                    font-size: 1em;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box
                }

                .vc_row.vc_row-flex,.vc_row.vc_row-flex>.vc_column_container {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox
                }

                #content .wpb_alert p:last-child,#content .wpb_text_column :last-child,#content .wpb_text_column p:last-child,.vc_message_box>p:last-child,.wpb_alert p:last-child,.wpb_text_column :last-child,.wpb_text_column p:last-child {
                    margin-bottom: 0
                }

                .vc_message_box-icon,.vc_message_box-icon>* {
                    position: absolute;
                    font-weight: 400;
                    font-style: normal
                }

                .vc_message_box>p:first-child {
                    margin-top: 0
                }

                .vc_message_box-icon {
                    bottom: 0;
                    font-size: 1em;
                    left: 0;
                    top: 0;
                    width: 4em
                }

                .vc_message_box-icon>*,.vc_message_box-icon>.fa {
                    font-size: 1.7em;
                    line-height: 1
                }

                .vc_message_box-icon>*,.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_simple .vc_toggle_icon::before {
                    left: 50%;
                    top: 50%;
                    -webkit-transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    -o-transform: translate(-50%,-50%)
                }

                .vc_message_box-icon>* {
                    transform: translate(-50%,-50%)
                }

                .vc_color-blue.vc_message_box {
                    color: #364a8a;
                    border-color: #c5cff0;
                    background-color: #edf1fa
                }

                .vc_color-blue.vc_message_box .vc_message_box-icon {
                    color: #5472D2
                }

                .vc_color-blue.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #5472D2
                }

                .vc_color-blue.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-blue.vc_message_box-outline,.vc_color-blue.vc_message_box-solid-icon {
                    color: #364a8a;
                    border-color: #5472D2;
                    background-color: transparent
                }

                .vc_color-blue.vc_message_box-outline .vc_message_box-icon,.vc_color-blue.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #5472D2
                }

                .vc_color-blue.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #5472D2
                }

                .vc_color-blue.vc_message_box-3d {
                    box-shadow: 0 5px 0 #9daee5
                }

                .vc_color-turquoise.vc_message_box {
                    color: #085b61;
                    border-color: #c6ecee;
                    background-color: #ebfcfd
                }

                .vc_color-turquoise.vc_message_box .vc_message_box-icon {
                    color: #00C1CF
                }

                .vc_color-turquoise.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #00C1CF
                }

                .vc_color-turquoise.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-turquoise.vc_message_box-outline,.vc_color-turquoise.vc_message_box-solid-icon {
                    color: #085b61;
                    border-color: #00C1CF;
                    background-color: transparent
                }

                .vc_color-turquoise.vc_message_box-outline .vc_message_box-icon,.vc_color-turquoise.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #00C1CF
                }

                .vc_color-turquoise.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #00C1CF
                }

                .vc_color-turquoise.vc_message_box-3d {
                    box-shadow: 0 5px 0 #9fdee3
                }

                .vc_color-pink.vc_message_box {
                    color: #d82e21;
                    border-color: #ffd8d6;
                    background-color: #fff0ef
                }

                .vc_color-pink.vc_message_box .vc_message_box-icon {
                    color: #FE6C61
                }

                .vc_color-pink.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #FE6C61
                }

                .vc_color-pink.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-pink.vc_message_box-outline,.vc_color-pink.vc_message_box-solid-icon {
                    color: #d82e21;
                    border-color: #FE6C61;
                    background-color: transparent
                }

                .vc_color-pink.vc_message_box-outline .vc_message_box-icon,.vc_color-pink.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #FE6C61
                }

                .vc_color-pink.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #FE6C61
                }

                .vc_color-pink.vc_message_box-3d {
                    box-shadow: 0 5px 0 #fea9a3
                }

                .vc_color-violet.vc_message_box {
                    color: #5e4a81;
                    border-color: #d4c8e9;
                    background-color: #f0ecf7
                }

                .vc_color-violet.vc_message_box .vc_message_box-icon {
                    color: #8D6DC4
                }

                .vc_color-violet.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #8D6DC4
                }

                .vc_color-violet.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-violet.vc_message_box-outline,.vc_color-violet.vc_message_box-solid-icon {
                    color: #5e4a81;
                    border-color: #8D6DC4;
                    background-color: transparent
                }

                .vc_color-violet.vc_message_box-outline .vc_message_box-icon,.vc_color-violet.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #8D6DC4
                }

                .vc_color-violet.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #8D6DC4
                }

                .vc_color-violet.vc_message_box-3d {
                    box-shadow: 0 5px 0 #b8a3da
                }

                .vc_color-peacoc.vc_message_box {
                    color: #366a79;
                    border-color: #c2e3ec;
                    background-color: #e9f5f8
                }

                .vc_color-peacoc.vc_message_box .vc_message_box-icon {
                    color: #4CADC9
                }

                .vc_color-peacoc.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #4CADC9
                }

                .vc_color-peacoc.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-peacoc.vc_message_box-outline,.vc_color-peacoc.vc_message_box-solid-icon {
                    color: #366a79;
                    border-color: #4CADC9;
                    background-color: transparent
                }

                .vc_color-peacoc.vc_message_box-outline .vc_message_box-icon,.vc_color-peacoc.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #4CADC9
                }

                .vc_color-peacoc.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #4CADC9
                }

                .vc_color-peacoc.vc_message_box-3d {
                    box-shadow: 0 5px 0 #9ad1e1
                }

                .vc_color-chino.vc_message_box {
                    color: #978258;
                    border-color: #e5ded2;
                    background-color: #f7f5f2
                }

                .vc_color-chino.vc_message_box .vc_message_box-icon {
                    color: #CEC2AB
                }

                .vc_color-chino.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #CEC2AB
                }

                .vc_color-chino.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-chino.vc_message_box-outline,.vc_color-chino.vc_message_box-solid-icon {
                    color: #978258;
                    border-color: #CEC2AB;
                    background-color: transparent
                }

                .vc_color-chino.vc_message_box-outline .vc_message_box-icon,.vc_color-chino.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #CEC2AB
                }

                .vc_color-chino.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #CEC2AB
                }

                .vc_color-chino.vc_message_box-3d {
                    box-shadow: 0 5px 0 #d2c7b1
                }

                .vc_color-mulled_wine.vc_message_box {
                    color: #1e1b22;
                    border-color: #d0ccd6;
                    background-color: #eae8ed
                }

                .vc_color-mulled_wine.vc_message_box .vc_message_box-icon {
                    color: #50485B
                }

                .vc_color-mulled_wine.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #50485B
                }

                .vc_color-mulled_wine.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-mulled_wine.vc_message_box-outline,.vc_color-mulled_wine.vc_message_box-solid-icon {
                    color: #1e1b22;
                    border-color: #50485B;
                    background-color: transparent
                }

                .vc_color-mulled_wine.vc_message_box-outline .vc_message_box-icon,.vc_color-mulled_wine.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #50485B
                }

                .vc_color-mulled_wine.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #50485B
                }

                .vc_color-mulled_wine.vc_message_box-3d {
                    box-shadow: 0 5px 0 #b6afc0
                }

                .vc_color-vista_blue.vc_message_box {
                    color: #3e8e5e;
                    border-color: #bcebcf;
                    background-color: #e3f7eb
                }

                .vc_color-vista_blue.vc_message_box .vc_message_box-icon {
                    color: #75D69C
                }

                .vc_color-vista_blue.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #75D69C
                }

                .vc_color-vista_blue.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-vista_blue.vc_message_box-outline,.vc_color-vista_blue.vc_message_box-solid-icon {
                    color: #3e8e5e;
                    border-color: #75D69C;
                    background-color: transparent
                }

                .vc_color-vista_blue.vc_message_box-outline .vc_message_box-icon,.vc_color-vista_blue.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #75D69C
                }

                .vc_color-vista_blue.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #75D69C
                }

                .vc_color-vista_blue.vc_message_box-3d {
                    box-shadow: 0 5px 0 #94dfb3
                }

                .vc_color-orange.vc_message_box {
                    color: #c3811c;
                    border-color: #fbe1ba;
                    background-color: #fef6eb
                }

                .vc_color-orange.vc_message_box .vc_message_box-icon {
                    color: #F7BE68
                }

                .vc_color-orange.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #F7BE68
                }

                .vc_color-orange.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-orange.vc_message_box-outline,.vc_color-orange.vc_message_box-solid-icon {
                    color: #c3811c;
                    border-color: #F7BE68;
                    background-color: transparent
                }

                .vc_color-orange.vc_message_box-outline .vc_message_box-icon,.vc_color-orange.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #F7BE68
                }

                .vc_color-orange.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #F7BE68
                }

                .vc_color-orange.vc_message_box-3d {
                    box-shadow: 0 5px 0 #f9cd8a
                }

                .vc_color-sky.vc_message_box {
                    color: #2a6194;
                    border-color: #bedaf4;
                    background-color: #eaf3fb
                }

                .vc_color-sky.vc_message_box .vc_message_box-icon {
                    color: #5AA1E3
                }

                .vc_color-sky.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #5AA1E3
                }

                .vc_color-sky.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-sky.vc_message_box-outline,.vc_color-sky.vc_message_box-solid-icon {
                    color: #2a6194;
                    border-color: #5AA1E3;
                    background-color: transparent
                }

                .vc_color-sky.vc_message_box-outline .vc_message_box-icon,.vc_color-sky.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #5AA1E3
                }

                .vc_color-sky.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #5AA1E3
                }

                .vc_color-sky.vc_message_box-3d {
                    box-shadow: 0 5px 0 #93c1ed
                }

                .vc_color-green.vc_message_box {
                    color: #3e562b;
                    border-color: #c2e1a9;
                    background-color: #eaf5e2
                }

                .vc_color-green.vc_message_box .vc_message_box-icon {
                    color: #6DAB3C
                }

                .vc_color-green.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #6DAB3C
                }

                .vc_color-green.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-green.vc_message_box-outline,.vc_color-green.vc_message_box-solid-icon {
                    color: #3e562b;
                    border-color: #6DAB3C;
                    background-color: transparent
                }

                .vc_color-green.vc_message_box-outline .vc_message_box-icon,.vc_color-green.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #6DAB3C
                }

                .vc_color-green.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #6DAB3C
                }

                .vc_color-green.vc_message_box-3d {
                    box-shadow: 0 5px 0 #a7d484
                }

                .vc_color-juicy_pink.vc_message_box {
                    color: #a3231f;
                    border-color: #fbc7c5;
                    background-color: #fef5f5
                }

                .vc_color-juicy_pink.vc_message_box .vc_message_box-icon {
                    color: #F4524D
                }

                .vc_color-juicy_pink.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #F4524D
                }

                .vc_color-juicy_pink.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-juicy_pink.vc_message_box-outline,.vc_color-juicy_pink.vc_message_box-solid-icon {
                    color: #a3231f;
                    border-color: #F4524D;
                    background-color: transparent
                }

                .vc_color-juicy_pink.vc_message_box-outline .vc_message_box-icon,.vc_color-juicy_pink.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #F4524D
                }

                .vc_color-juicy_pink.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #F4524D
                }

                .vc_color-juicy_pink.vc_message_box-3d {
                    box-shadow: 0 5px 0 #f89895
                }

                .vc_color-sandy_brown.vc_message_box {
                    color: #c3501c;
                    border-color: #fbceba;
                    background-color: #fef1eb
                }

                .vc_color-sandy_brown.vc_message_box .vc_message_box-icon {
                    color: #F79468
                }

                .vc_color-sandy_brown.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #F79468
                }

                .vc_color-sandy_brown.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-sandy_brown.vc_message_box-outline,.vc_color-sandy_brown.vc_message_box-solid-icon {
                    color: #c3501c;
                    border-color: #F79468;
                    background-color: transparent
                }

                .vc_color-sandy_brown.vc_message_box-outline .vc_message_box-icon,.vc_color-sandy_brown.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #F79468
                }

                .vc_color-sandy_brown.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #F79468
                }

                .vc_color-sandy_brown.vc_message_box-3d {
                    box-shadow: 0 5px 0 #f9ac8a
                }

                .vc_color-purple.vc_message_box {
                    color: #886389;
                    border-color: #e3cbe3;
                    background-color: #f5ecf5
                }

                .vc_color-purple.vc_message_box .vc_message_box-icon {
                    color: #B97EBB
                }

                .vc_color-purple.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #B97EBB
                }

                .vc_color-purple.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-purple.vc_message_box-outline,.vc_color-purple.vc_message_box-solid-icon {
                    color: #886389;
                    border-color: #B97EBB;
                    background-color: transparent
                }

                .vc_color-purple.vc_message_box-outline .vc_message_box-icon,.vc_color-purple.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #B97EBB
                }

                .vc_color-purple.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #B97EBB
                }

                .vc_color-purple.vc_message_box-3d {
                    box-shadow: 0 5px 0 #d1a9d2
                }

                .vc_color-black.vc_message_box {
                    color: #fff;
                    border-color: #2A2A2A;
                    background-color: #3c3c3c
                }

                .vc_color-black.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #2A2A2A
                }

                .vc_color-black.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-black.vc_message_box-outline,.vc_color-black.vc_message_box-solid-icon {
                    border-color: #2A2A2A;
                    background-color: transparent
                }

                .vc_color-black.vc_message_box-outline .vc_message_box-icon,.vc_color-black.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #2A2A2A
                }

                .vc_color-black.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #2A2A2A
                }

                .vc_color-black.vc_message_box-3d {
                    box-shadow: 0 5px 0 #101010
                }

                .vc_color-grey.vc_message_box {
                    color: #858585;
                    border-color: #d2d2d2;
                    background-color: #EBEBEB
                }

                .vc_color-grey.vc_message_box-solid {
                    color: #858585;
                    border-color: transparent;
                    background-color: #EBEBEB
                }

                .vc_color-grey.vc_message_box-solid .vc_message_box-icon {
                    color: #858585
                }

                .vc_color-grey.vc_message_box-outline,.vc_color-grey.vc_message_box-solid-icon {
                    color: #858585;
                    border-color: #EBEBEB;
                    background-color: transparent
                }

                .vc_color-grey.vc_message_box-outline .vc_message_box-icon,.vc_color-grey.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #EBEBEB
                }

                .vc_color-grey.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #858585;
                    background-color: #EBEBEB
                }

                .vc_color-grey.vc_message_box-3d {
                    box-shadow: 0 5px 0 #b8b8b8
                }

                .vc_color-white.vc_message_box {
                    color: #b3b3b3;
                    border-color: #e6e6e6;
                    background-color: #FFF
                }

                .vc_color-white.vc_message_box-solid {
                    color: #b3b3b3;
                    border-color: transparent;
                    background-color: #FFF
                }

                .vc_color-white.vc_message_box-solid .vc_message_box-icon {
                    color: #b3b3b3
                }

                .vc_color-white.vc_message_box-outline,.vc_color-white.vc_message_box-solid-icon {
                    border-color: #FFF;
                    background-color: transparent
                }

                .vc_color-white.vc_message_box-outline .vc_message_box-icon,.vc_color-white.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #FFF
                }

                .vc_color-white.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #b3b3b3;
                    background-color: #FFF
                }

                .vc_color-white.vc_message_box-3d {
                    box-shadow: 0 5px 0 #ccc
                }

                .vc_color-info.vc_message_box-3d,.vc_color-success.vc_message_box-3d {
                    box-shadow: 0 5px 0 #9dd6fd
                }

                .vc_color-info.vc_message_box {
                    color: #5e7f96;
                    border-color: #cfebfe;
                    background-color: #dff2fe
                }

                .vc_color-info.vc_message_box .vc_message_box-icon {
                    color: #56b0ee
                }

                .vc_color-info.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #56b0ee
                }

                .vc_color-info.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-info.vc_message_box-outline,.vc_color-info.vc_message_box-solid-icon {
                    color: #5e7f96;
                    border-color: #56b0ee;
                    background-color: transparent
                }

                .vc_color-info.vc_message_box-outline .vc_message_box-icon,.vc_color-info.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #56b0ee
                }

                .vc_color-info.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #56b0ee
                }

                .vc_color-success.vc_message_box {
                    color: #5e7f96;
                    border-color: #cfebfe;
                    background-color: #e6fdf8
                }

                .vc_color-success.vc_message_box .vc_message_box-icon {
                    color: #1bbc9b
                }

                .vc_color-success.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #1bbc9b
                }

                .vc_color-success.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-success.vc_message_box-outline,.vc_color-success.vc_message_box-solid-icon {
                    color: #5e7f96;
                    border-color: #1bbc9b;
                    background-color: transparent
                }

                .vc_color-success.vc_message_box-outline .vc_message_box-icon,.vc_color-success.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #1bbc9b
                }

                .vc_color-success.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #1bbc9b
                }

                .vc_color-warning.vc_message_box {
                    color: #9d8967;
                    border-color: #ffeccc;
                    background-color: #fff4e2
                }

                .vc_color-warning.vc_message_box .vc_message_box-icon {
                    color: #fcb53f
                }

                .vc_color-warning.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #fcb53f
                }

                .vc_color-warning.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-warning.vc_message_box-outline,.vc_color-warning.vc_message_box-solid-icon {
                    color: #9d8967;
                    border-color: #fcb53f;
                    background-color: transparent
                }

                .vc_color-warning.vc_message_box-outline .vc_message_box-icon,.vc_color-warning.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fcb53f
                }

                .vc_color-warning.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #fcb53f
                }

                .vc_color-warning.vc_message_box-3d {
                    box-shadow: 0 5px 0 #ffd999
                }

                .vc_color-danger.vc_message_box {
                    color: #a85959;
                    border-color: #fedede;
                    background-color: #fdeaea
                }

                .vc_color-danger.vc_message_box .vc_message_box-icon {
                    color: #ff7877
                }

                .vc_color-danger.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #ff7877
                }

                .vc_color-danger.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-danger.vc_message_box-outline,.vc_color-danger.vc_message_box-solid-icon {
                    color: #a85959;
                    border-color: #ff7877;
                    background-color: transparent
                }

                .vc_color-danger.vc_message_box-outline .vc_message_box-icon,.vc_color-danger.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #ff7877
                }

                .vc_color-danger.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #ff7877
                }

                .vc_color-danger.vc_message_box-3d {
                    box-shadow: 0 5px 0 #fdacac
                }

                .vc_color-alert-info.vc_message_box {
                    color: #31708f;
                    border-color: #bce8f1;
                    background-color: #d9edf7
                }

                .vc_color-alert-info.vc_message_box .vc_message_box-icon {
                    color: #67CCE0
                }

                .vc_color-alert-info.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #67CCE0
                }

                .vc_color-alert-info.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-alert-info.vc_message_box-outline,.vc_color-alert-info.vc_message_box-solid-icon {
                    color: #31708f;
                    border-color: #67CCE0;
                    background-color: transparent
                }

                .vc_color-alert-info.vc_message_box-outline .vc_message_box-icon,.vc_color-alert-info.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #67CCE0
                }

                .vc_color-alert-info.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #67CCE0
                }

                .vc_color-alert-info.vc_message_box-3d {
                    box-shadow: 0 5px 0 #91d9e8
                }

                .vc_color-alert-success.vc_message_box {
                    color: #3c763d;
                    border-color: #d6e9c6;
                    background-color: #dff0d8
                }

                .vc_color-alert-success.vc_message_box .vc_message_box-icon {
                    color: #9AD36A
                }

                .vc_color-alert-success.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #9AD36A
                }

                .vc_color-alert-success.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-alert-success.vc_message_box-outline,.vc_color-alert-success.vc_message_box-solid-icon {
                    color: #3c763d;
                    border-color: #9AD36A;
                    background-color: transparent
                }

                .vc_color-alert-success.vc_message_box-outline .vc_message_box-icon,.vc_color-alert-success.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #9AD36A
                }

                .vc_color-alert-success.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #9AD36A
                }

                .vc_color-alert-success.vc_message_box-3d {
                    box-shadow: 0 5px 0 #bbdba1
                }

                .vc_color-alert-warning.vc_message_box {
                    color: #8a6d3b;
                    border-color: #faebcc;
                    background-color: #fcf8e3
                }

                .vc_color-alert-warning.vc_message_box .vc_message_box-icon {
                    color: #F9CF79
                }

                .vc_color-alert-warning.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #F9CF79
                }

                .vc_color-alert-warning.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-alert-warning.vc_message_box-outline,.vc_color-alert-warning.vc_message_box-solid-icon {
                    color: #8a6d3b;
                    border-color: #F9CF79;
                    background-color: transparent
                }

                .vc_color-alert-warning.vc_message_box-outline .vc_message_box-icon,.vc_color-alert-warning.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #F9CF79
                }

                .vc_color-alert-warning.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #F9CF79
                }

                .vc_color-alert-warning.vc_message_box-3d {
                    box-shadow: 0 5px 0 #f5d89e
                }

                .vc_color-alert-danger.vc_message_box {
                    color: #a94442;
                    border-color: #ebccd1;
                    background-color: #f2dede
                }

                .vc_color-alert-danger.vc_message_box .vc_message_box-icon {
                    color: #EF8495
                }

                .vc_color-alert-danger.vc_message_box-solid {
                    color: #fff;
                    border-color: transparent;
                    background-color: #EF8495
                }

                .vc_color-alert-danger.vc_message_box-solid .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-alert-danger.vc_message_box-outline,.vc_color-alert-danger.vc_message_box-solid-icon {
                    color: #a94442;
                    border-color: #EF8495;
                    background-color: transparent
                }

                .vc_color-alert-danger.vc_message_box-outline .vc_message_box-icon,.vc_color-alert-danger.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #EF8495
                }

                .vc_color-alert-danger.vc_message_box-solid-icon .vc_message_box-icon {
                    color: #fff;
                    background-color: #EF8495
                }

                .vc_color-alert-danger.vc_message_box-3d {
                    box-shadow: 0 5px 0 #dca7b0
                }

                .vc_color-black.vc_message_box .vc_message_box-icon {
                    color: #fff
                }

                .vc_color-black.vc_message_box-outline,.vc_color-black.vc_message_box-outline .vc_message_box-icon,.vc_color-black.vc_message_box-solid-icon {
                    color: #2A2A2A
                }

                .vc_color-grey.vc_message_box .vc_message_box-icon {
                    color: #858585
                }

                .vc_color-white.vc_message_box .vc_message_box-icon {
                    color: #b3b3b3
                }

                .vc_color-white.vc_message_box-outline,.vc_color-white.vc_message_box-outline .vc_message_box-icon,.vc_color-white.vc_message_box-solid-icon {
                    color: #FFF
                }

                .vc_message_box-outline,.vc_message_box-solid-icon {
                    border-width: 2px
                }

                .vc_message_box-solid-icon .vc_message_box-icon {
                    width: 3.25em
                }

                .vc_message_box-rounded {
                    border-radius: 5px
                }

                .vc_message_box-round {
                    border-radius: 4em
                }

                .wpb_button,.wpb_content_element,ul.wpb_thumbnails-fluid>li {
                    margin-bottom: 35px
                }

                .entry-content .twitter-share-button,.fb_like,.twitter-share-button,.wpb_accordion .wpb_content_element,.wpb_googleplus,.wpb_pinterest,.wpb_tab .wpb_content_element {
                    margin-bottom: 21.74px
                }

                .vc_parallax {
                    position: relative;
                    overflow: hidden
                }

                .vc_parallax>* {
                    position: relative;
                    z-index: 1
                }

                .vc_parallax .vc_parallax-inner {
                    pointer-events: none;
                    position: absolute;
                    left: 0;
                    right: 0;
                    top: 0;
                    background-attachment: scroll;
                    background-color: transparent;
                    background-image: inherit;
                    background-size: cover;
                    z-index: 0;
                    background-position: 50% 0
                }

                .vc_video-bg-container {
                    position: relative
                }

                .vc_video-bg {
                    height: 100%;
                    overflow: hidden;
                    pointer-events: none;
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    z-index: 0
                }

                .vc_row.vc_row-no-padding .vc_column-inner {
                    padding-left: 0;
                    padding-right: 0
                }

                .vc_row[data-vc-full-width] {
                    -webkit-transition: opacity .5s ease;
                    -o-transition: opacity .5s ease;
                    transition: opacity .5s ease;
                    overflow: hidden
                }

                .vc_row[data-vc-full-width].vc_hidden {
                    opacity: 0
                }

                .vc_row-no-padding .vc_inner {
                    margin-left: 0;
                    margin-right: 0
                }

                .vc_row.vc_row-o-full-height {
                    min-height: 100vh
                }

                .vc_row.vc_row-flex {
                    box-sizing: border-box;
                    display: flex;
                    -webkit-flex-wrap: wrap;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap
                }

                .vc_row.vc_row-flex>.vc_column_container {
                    display: flex
                }

                .vc_ie-flexbox-fixer,.vc_row.vc_row-flex>.vc_column_container>.vc_column-inner {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal
                }

                .vc_row.vc_row-flex>.vc_column_container>.vc_column-inner {
                    -webkit-box-flex: 1;
                    -webkit-flex-grow: 1;
                    -ms-flex-positive: 1;
                    flex-grow: 1;
                    display: flex;
                    -webkit-flex-direction: column;
                    -ms-flex-direction: column;
                    flex-direction: column;
                    z-index: 1
                }

                @media (-ms-high-contrast:active),(-ms-high-contrast:none) {
                    .vc_row.vc_row-flex>.vc_column_container>.vc_column-inner>* {
                        min-height: 1em
                    }
                }

                .vc_row.vc_row-flex::after,.vc_row.vc_row-flex::before {
                    display: none
                }

                .vc_row.vc_row-o-columns-stretch {
                    -webkit-align-content: stretch;
                    -ms-flex-line-pack: stretch;
                    align-content: stretch
                }

                .vc_row.vc_row-o-columns-top {
                    -webkit-align-content: flex-start;
                    -ms-flex-line-pack: start;
                    align-content: flex-start
                }

                .vc_row.vc_row-o-columns-bottom {
                    -webkit-align-content: flex-end;
                    -ms-flex-line-pack: end;
                    align-content: flex-end
                }

                .vc_row.vc_row-o-columns-middle {
                    -webkit-align-content: center;
                    -ms-flex-line-pack: center;
                    align-content: center
                }

                .vc_row.vc_row-o-columns-bottom::after,.vc_row.vc_row-o-columns-middle::after,.vc_row.vc_row-o-columns-top::after {
                    content: '';
                    width: 100%;
                    height: 0;
                    overflow: hidden;
                    visibility: hidden;
                    display: block
                }

                .vc_row.vc_row-o-content-top>.vc_column_container>.vc_column-inner {
                    -webkit-box-pack: start;
                    -webkit-justify-content: flex-start;
                    -ms-flex-pack: start;
                    justify-content: flex-start
                }

                .vc_row.vc_row-o-content-top:not(.vc_row-o-equal-height)>.vc_column_container {
                    -webkit-box-align: start;
                    -webkit-align-items: flex-start;
                    -ms-flex-align: start;
                    align-items: flex-start
                }

                .vc_row.vc_row-o-content-bottom>.vc_column_container>.vc_column-inner {
                    -webkit-box-pack: end;
                    -webkit-justify-content: flex-end;
                    -ms-flex-pack: end;
                    justify-content: flex-end
                }

                .vc_row.vc_row-o-content-bottom:not(.vc_row-o-equal-height)>.vc_column_container {
                    -webkit-box-align: end;
                    -webkit-align-items: flex-end;
                    -ms-flex-align: end;
                    align-items: flex-end
                }

                .vc_row.vc_row-o-content-middle>.vc_column_container>.vc_column-inner {
                    -webkit-box-pack: center;
                    -webkit-justify-content: center;
                    -ms-flex-pack: center;
                    justify-content: center
                }

                .vc_row.vc_row-o-content-middle:not(.vc_row-o-equal-height)>.vc_column_container {
                    -webkit-box-align: center;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center
                }

                .vc_column-inner::after,.vc_column-inner::before {
                    content: " ";
                    display: table
                }

                .vc_ie-flexbox-fixer {
                    display: flex;
                    -webkit-flex-direction: column;
                    -ms-flex-direction: column;
                    flex-direction: column
                }

                .vc_ie-flexbox-fixer>.vc_row {
                    -webkit-box-flex: 1;
                    -webkit-flex: 1 1 auto;
                    -ms-flex: 1 1 auto;
                    flex: 1 1 auto
                }

                .vc_row.vc_column-gap-1 {
                    margin-left: -15.5px;
                    margin-right: -15.5px
                }

                .vc_row.vc_column-gap-1>.vc_column_container {
                    padding: .5px
                }

                .vc_row.vc_column-gap-2 {
                    margin-left: -16px;
                    margin-right: -16px
                }

                .vc_row.vc_column-gap-2>.vc_column_container {
                    padding: 1px
                }

                .vc_row.vc_column-gap-3 {
                    margin-left: -16.5px;
                    margin-right: -16.5px
                }

                .vc_row.vc_column-gap-3>.vc_column_container {
                    padding: 1.5px
                }

                .vc_row.vc_column-gap-4 {
                    margin-left: -17px;
                    margin-right: -17px
                }

                .vc_row.vc_column-gap-4>.vc_column_container {
                    padding: 2px
                }

                .vc_row.vc_column-gap-5 {
                    margin-left: -17.5px;
                    margin-right: -17.5px
                }

                .vc_row.vc_column-gap-5>.vc_column_container {
                    padding: 2.5px
                }

                .vc_row.vc_column-gap-10 {
                    margin-left: -20px;
                    margin-right: -20px
                }

                .vc_row.vc_column-gap-10>.vc_column_container {
                    padding: 5px
                }

                .vc_row.vc_column-gap-15 {
                    margin-left: -22.5px;
                    margin-right: -22.5px
                }

                .vc_row.vc_column-gap-15>.vc_column_container {
                    padding: 7.5px
                }

                .vc_row.vc_column-gap-20 {
                    margin-left: -25px;
                    margin-right: -25px
                }

                .vc_row.vc_column-gap-20>.vc_column_container {
                    padding: 10px
                }

                .vc_row.vc_column-gap-25 {
                    margin-left: -27.5px;
                    margin-right: -27.5px
                }

                .vc_row.vc_column-gap-25>.vc_column_container {
                    padding: 12.5px
                }

                .vc_row.vc_column-gap-30 {
                    margin-left: -30px;
                    margin-right: -30px
                }

                .vc_row.vc_column-gap-30>.vc_column_container {
                    padding: 15px
                }

                .vc_row.vc_column-gap-35 {
                    margin-left: -32.5px;
                    margin-right: -32.5px
                }

                .vc_row.vc_column-gap-35>.vc_column_container {
                    padding: 17.5px
                }

                .vc_col-has-fill>.vc_column-inner,.vc_row-has-fill+.vc_row-full-width+.vc_row>.vc_column_container>.vc_column-inner,.vc_row-has-fill+.vc_row>.vc_column_container>.vc_column-inner,.vc_row-has-fill+.vc_vc_row>.vc_row>.vc_vc_column>.vc_column_container>.vc_column-inner,.vc_row-has-fill+.vc_vc_row_inner>.vc_row>.vc_vc_column_inner>.vc_column_container>.vc_column-inner,.vc_row-has-fill>.vc_column_container>.vc_column-inner,.vc_row-has-fill>.vc_row>.vc_vc_column>.vc_column_container>.vc_column-inner,.vc_row-has-fill>.vc_vc_column_inner>.vc_column_container>.vc_column-inner,.vc_section.vc_section-has-fill,.vc_section.vc_section-has-fill+.vc_row-full-width+.vc_section,.vc_section.vc_section-has-fill+.vc_section {
                    padding-top: 35px
                }

                .vc_column_container {
                    padding-left: 0;
                    padding-right: 0
                }

                .vc_column_container>.vc_column-inner {
                    box-sizing: border-box;
                    padding-left: 15px;
                    padding-right: 15px;
                    width: 100%
                }

                .vc_section {
                    padding-left: 15px;
                    padding-right: 15px;
                    margin-left: -15px;
                    margin-right: -15px
                }

                .vc_section[data-vc-full-width] {
                    -webkit-transition: opacity .5s ease;
                    -o-transition: opacity .5s ease;
                    transition: opacity .5s ease;
                    overflow: hidden
                }

                .vc_section[data-vc-full-width].vc_hidden {
                    opacity: 0
                }

                .vc_section[data-vc-full-width]>.vc_row {
                    margin-left: 0;
                    margin-right: 0
                }

                .vc_section[data-vc-stretch-content] {
                    padding-left: 0;
                    padding-right: 0
                }

                .vc_section.vc_row-o-full-height {
                    min-height: 100vh
                }

                .vc_section.vc_section-flex {
                    box-sizing: border-box;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex-flow: column nowrap;
                    flex-flow: column nowrap
                }

                .vc_section.vc_section-flex .vc_vc_row {
                    width: 100%
                }

                .vc_section.vc_section-flex::after,.vc_section.vc_section-flex::before {
                    display: none
                }

                .vc_section.vc_section-o-content-top {
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    justify-content: flex-start
                }

                .vc_section.vc_section-o-content-bottom {
                    -webkit-box-pack: end;
                    -ms-flex-pack: end;
                    justify-content: flex-end
                }

                .vc_section.vc_section-o-content-middle {
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center
                }

                .vc_section.vc_section-o-content-bottom::after,.vc_section.vc_section-o-content-middle::after,.vc_section.vc_section-o-content-top::after {
                    content: '';
                    width: 100%;
                    height: 0;
                    overflow: hidden;
                    visibility: hidden;
                    display: block
                }

                .vc_row.vc_column-gap-1>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-1>.vc_vc_column_inner>.vc_column_container {
                    padding-left: .5px;
                    padding-right: .5px
                }

                .vc_row.vc_column-gap-2>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-2>.vc_vc_column_inner>.vc_column_container {
                    padding-left: 1px;
                    padding-right: 1px
                }

                .vc_row.vc_column-gap-3>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-3>.vc_vc_column_inner>.vc_column_container {
                    padding-left: 1.5px;
                    padding-right: 1.5px
                }

                .vc_row.vc_column-gap-4>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-4>.vc_vc_column_inner>.vc_column_container {
                    padding-left: 2px;
                    padding-right: 2px
                }

                .vc_row.vc_column-gap-5>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-5>.vc_vc_column_inner>.vc_column_container {
                    padding-left: 2.5px;
                    padding-right: 2.5px
                }

                .vc_row.vc_column-gap-10>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-10>.vc_vc_column_inner>.vc_column_container {
                    padding-left: 5px;
                    padding-right: 5px
                }

                .vc_row.vc_column-gap-15>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-15>.vc_vc_column_inner>.vc_column_container {
                    padding-left: 7.5px;
                    padding-right: 7.5px
                }

                .vc_row.vc_column-gap-20>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-20>.vc_vc_column_inner>.vc_column_container {
                    padding-left: 10px;
                    padding-right: 10px
                }

                .vc_row.vc_column-gap-25>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-25>.vc_vc_column_inner>.vc_column_container {
                    padding-left: 12.5px;
                    padding-right: 12.5px
                }

                .vc_row.vc_column-gap-30>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-30>.vc_vc_column_inner>.vc_column_container {
                    padding-left: 15px;
                    padding-right: 15px
                }

                .vc_row.vc_column-gap-35>.vc_vc_column>.vc_column_container,.vc_row.vc_column-gap-35>.vc_vc_column_inner>.vc_column_container {
                    padding-left: 17.5px;
                    padding-right: 17.5px
                }

                .vc_vc_column,.vc_vc_column_inner {
                    padding-left: 0;
                    padding-right: 0
                }

                .vc_row.vc_row-flex>.vc_vc_column,.vc_row.vc_row-flex>.vc_vc_column_inner {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex
                }

                .vc_row.vc_row-flex>.vc_vc_column>.vc_column_container,.vc_row.vc_row-flex>.vc_vc_column_inner>.vc_column_container {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    width: 100%
                }

                .vc_row.vc_row-flex>.vc_vc_column>.vc_column_container>.vc_column-inner,.vc_row.vc_row-flex>.vc_vc_column_inner>.vc_column_container>.vc_column-inner {
                    -webkit-box-flex: 1;
                    -webkit-flex-grow: 1;
                    -ms-flex-positive: 1;
                    flex-grow: 1;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -webkit-flex-direction: column;
                    -ms-flex-direction: column;
                    flex-direction: column
                }

                .vc_row.vc_row-o-equal-height>.vc_column_container {
                    -webkit-box-align: stretch;
                    -webkit-align-items: stretch;
                    -ms-flex-align: stretch;
                    align-items: stretch
                }

                .vc_row.vc_row-o-content-top>.vc_vc_column>.vc_column_container>.vc_column-inner,.vc_row.vc_row-o-content-top>.vc_vc_column_inner>.vc_column_container>.vc_column-inner {
                    -webkit-box-pack: start;
                    -webkit-justify-content: flex-start;
                    -ms-flex-pack: start;
                    justify-content: flex-start
                }

                .vc_row.vc_row-o-content-top:not(.vc_row-o-equal-height)>.vc_vc_column>.vc_column_container,.vc_row.vc_row-o-content-top:not(.vc_row-o-equal-height)>.vc_vc_column_inner>.vc_column_container {
                    -webkit-box-align: start;
                    -webkit-align-items: flex-start;
                    -ms-flex-align: start;
                    align-items: flex-start
                }

                .vc_row.vc_row-o-content-bottom>.vc_vc_column>.vc_column_container>.vc_column-inner,.vc_row.vc_row-o-content-bottom>.vc_vc_column_inner>.vc_column_container>.vc_column-inner {
                    -webkit-box-pack: end;
                    -webkit-justify-content: flex-end;
                    -ms-flex-pack: end;
                    justify-content: flex-end
                }

                .vc_row.vc_row-o-content-bottom:not(.vc_row-o-equal-height)>.vc_vc_column>.vc_column_container,.vc_row.vc_row-o-content-bottom:not(.vc_row-o-equal-height)>.vc_vc_column_inner>.vc_column_container {
                    -webkit-box-align: end;
                    -webkit-align-items: flex-end;
                    -ms-flex-align: end;
                    align-items: flex-end
                }

                .vc_row.vc_row-o-content-middle>.vc_vc_column>.vc_column_container>.vc_column-inner,.vc_row.vc_row-o-content-middle>.vc_vc_column_inner>.vc_column_container>.vc_column-inner {
                    -webkit-box-pack: center;
                    -webkit-justify-content: center;
                    -ms-flex-pack: center;
                    justify-content: center
                }

                .vc_row.vc_row-o-content-middle:not(.vc_row-o-equal-height)>.vc_vc_column>.vc_column_container,.vc_row.vc_row-o-content-middle:not(.vc_row-o-equal-height)>.vc_vc_column_inner>.vc_column_container {
                    -webkit-box-align: center;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center
                }

                .vc_empty-element>.vc_column-inner {
                    min-height: 100px
                }

                .fb_type_standard,.fb_type_standard iframe {
                    height: 25px
                }

                .fb_type_button_count,.fb_type_button_count iframe {
                    height: 20px
                }

                .fb_type_box_count,.fb_type_box_count iframe {
                    height: 62px
                }

                .wpb_googleplus_type_standard {
                    height: 25px
                }

                .wpb_googleplus_type_small {
                    height: 19px
                }

                .wpb_googleplus_type_medium,.wpb_googleplus_type_tall {
                    height: 21px
                }

                .wpb_googleplus_type_tall.vc_googleplus-annotation-bubble {
                    height: 62px
                }

                .wpb_pinterest_type_horizontal,.wpb_pinterest_type_none {
                    height: 21px
                }

                .wpb_pinterest a {
                    border-bottom: 0
                }

                .wpb_pinterest_type_vertical {
                    box-sizing: content-box;
                    padding-top: 29px;
                    height: 21px
                }

                iframe.twitter-share-button {
                    margin: 0
                }

                .vc_toggle {
                    display: block;
                    margin: 0 0 21.74px;
                    padding: 0;
                    font-size: 1em
                }

                .vc_toggle:last-of-type {
                    margin-bottom: 35px
                }

                .vc_toggle_title {
                    cursor: pointer;
                    display: block;
                    margin: 0;
                    padding: 0;
                    position: relative;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    font-weight: 400
                }

                .vc_toggle_title>h4 {
                    display: inline
                }

                .vc_toggle_icon {
                    display: none;
                    position: relative;
                    vertical-align: middle
                }

                .vc_toggle_content {
                    display: none;
                    margin-bottom: 21.74px;
                    margin-top: 1em;
                    overflow: hidden;
                    padding: 0
                }

                .vc_toggle.vc_toggle_active>.vc_toggle_content {
                    display: block
                }

                .vc_toggle_simple .vc_toggle_icon {
                    border: 0 solid transparent;
                    border-radius: 0;
                    display: inline-block;
                    height: 22px;
                    width: 22px;
                    background-color: transparent;
                    margin-left: 2px
                }

                .vc_toggle_simple.vc_toggle_active .vc_toggle_icon::after {
                    visibility: hidden
                }

                .vc_toggle_simple .vc_toggle_icon::before {
                    height: 2px;
                    width: 10px
                }

                .vc_toggle_simple .vc_toggle_icon::after {
                    height: 10px;
                    width: 2px
                }

                .vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_simple .vc_toggle_icon::before {
                    content: '';
                    display: block;
                    position: absolute;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    transform: translate(-50%,-50%);
                    background-color: #2A2A2A
                }

                .vc_toggle_round .vc_toggle_icon::after,.vc_toggle_round .vc_toggle_icon::before,.vc_toggle_rounded .vc_toggle_icon::after,.vc_toggle_rounded .vc_toggle_icon::before {
                    -moz-box-sizing: border-box;
                    -webkit-transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    -o-transform: translate(-50%,-50%);
                    content: '';
                    left: 50%;
                    position: absolute;
                    top: 50%
                }

                .vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #444
                }

                .vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_round .vc_toggle_icon {
                    border: 2px solid transparent;
                    border-radius: 50%;
                    display: inline-block;
                    height: 22px;
                    width: 22px;
                    background-color: #2A2A2A
                }

                .vc_toggle_round.vc_toggle_active .vc_toggle_icon::after {
                    visibility: hidden
                }

                .vc_toggle_round .vc_toggle_icon::before {
                    height: 2px;
                    width: 10px
                }

                .vc_toggle_round .vc_toggle_icon::after {
                    height: 10px;
                    width: 2px
                }

                .vc_toggle_round .vc_toggle_icon::after,.vc_toggle_round .vc_toggle_icon::before {
                    display: block;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    transform: translate(-50%,-50%);
                    background-color: #FFF
                }

                .vc_toggle_round.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #2A2A2A
                }

                .vc_toggle_round.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_round.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #2A2A2A
                }

                .vc_toggle_round .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #444
                }

                .vc_toggle_round .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_round .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_round.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #444
                }

                .vc_toggle_round.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_round.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #444
                }

                .vc_toggle_rounded .vc_toggle_icon {
                    border: 2px solid transparent;
                    border-radius: 20%;
                    display: inline-block;
                    height: 22px;
                    width: 22px;
                    background-color: #2A2A2A
                }

                .vc_toggle_rounded.vc_toggle_active .vc_toggle_icon::after {
                    visibility: hidden
                }

                .vc_toggle_rounded .vc_toggle_icon::before {
                    height: 2px;
                    width: 10px
                }

                .vc_toggle_rounded .vc_toggle_icon::after {
                    height: 10px;
                    width: 2px
                }

                .vc_toggle_rounded .vc_toggle_icon::after,.vc_toggle_rounded .vc_toggle_icon::before {
                    display: block;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    transform: translate(-50%,-50%);
                    background-color: #FFF
                }

                .vc_toggle_rounded.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #2A2A2A
                }

                .vc_toggle_rounded.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_rounded.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #2A2A2A
                }

                .vc_toggle_rounded .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #444
                }

                .vc_toggle_rounded .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_rounded .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_rounded.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #444
                }

                .vc_toggle_rounded.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_rounded.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #444
                }

                .vc_toggle_square .vc_toggle_icon {
                    border: 2px solid transparent;
                    border-radius: 0;
                    display: inline-block;
                    height: 22px;
                    width: 22px;
                    background-color: #2A2A2A
                }

                .vc_toggle_square.vc_toggle_active .vc_toggle_icon::after {
                    visibility: hidden
                }

                .vc_toggle_square .vc_toggle_icon::before {
                    height: 2px;
                    width: 10px
                }

                .vc_toggle_square .vc_toggle_icon::after {
                    height: 10px;
                    width: 2px
                }

                .vc_toggle_square .vc_toggle_icon::after,.vc_toggle_square .vc_toggle_icon::before {
                    content: '';
                    display: block;
                    left: 50%;
                    position: absolute;
                    top: 50%;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    -webkit-transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    -o-transform: translate(-50%,-50%);
                    transform: translate(-50%,-50%);
                    background-color: #FFF
                }

                .vc_toggle_square.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #2A2A2A
                }

                .vc_toggle_square.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_square.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #2A2A2A
                }

                .vc_toggle_square .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #444
                }

                .vc_toggle_square .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_square .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_square.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #444
                }

                .vc_toggle_square.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_square.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #444
                }

                .vc_toggle_text_only .vc_toggle_icon {
                    display: none
                }

                .vc_toggle_arrow .vc_toggle_icon {
                    display: inline-block
                }

                .vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_arrow .vc_toggle_icon::before {
                    content: '';
                    border-style: solid;
                    display: block;
                    left: 50%;
                    position: absolute;
                    top: 50%;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    -webkit-transform: rotate(45deg);
                    -moz-transform: rotate(45deg);
                    -ms-transform: rotate(45deg);
                    -o-transform: rotate(45deg);
                    transform: rotate(45deg)
                }

                .vc_toggle_arrow .vc_toggle_icon::before {
                    border-left: none;
                    border-top: none
                }

                .vc_toggle_arrow .vc_toggle_icon::after {
                    border-right: none;
                    border-bottom: none;
                    visibility: hidden
                }

                .vc_toggle_arrow.vc_toggle_active .vc_toggle_icon::before {
                    visibility: hidden
                }

                .vc_toggle_arrow.vc_toggle_active .vc_toggle_icon::after {
                    visibility: visible
                }

                .vc_toggle.vc_toggle_arrow .vc_toggle_icon {
                    height: 22px;
                    width: 22px;
                    background: 0 0
                }

                .vc_toggle.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle.vc_toggle_arrow .vc_toggle_icon::before {
                    border-width: 2px;
                    height: 10px;
                    margin-left: -5px;
                    width: 10px;
                    border-color: #2A2A2A;
                    background: 0 0
                }

                .vc_toggle.vc_toggle_arrow .vc_toggle_icon::before {
                    margin-top: -10px
                }

                .vc_toggle.vc_toggle_arrow .vc_toggle_icon::after {
                    margin-top: -5px
                }

                .vc_toggle.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #444;
                    background: 0 0
                }

                .vc_toggle_default .vc_toggle_icon {
                    background: #bababa;
                    border: 1px solid #acacac;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    -webkit-transform: translate(0,-50%);
                    -ms-transform: translate(0,-50%);
                    -o-transform: translate(0,-50%);
                    transform: translate(0,-50%)
                }

                .vc_toggle_default .vc_toggle_icon::after,.vc_toggle_default .vc_toggle_icon::before {
                    content: '';
                    display: block;
                    left: 50%;
                    position: absolute;
                    top: 50%;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    -webkit-transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    -o-transform: translate(-50%,-50%);
                    transform: translate(-50%,-50%);
                    background: #bababa
                }

                .vc_toggle_default .vc_toggle_icon::before {
                    border: 1px solid #acacac
                }

                .vc_toggle_default.vc_toggle_active .vc_toggle_icon::after,.vc_toggle_default.vc_toggle_active .vc_toggle_icon::before {
                    visibility: hidden
                }

                .vc_toggle.vc_toggle_default .vc_toggle_icon {
                    display: inline-block;
                    width: 10px;
                    margin-left: 5px;
                    height: 4px
                }

                .vc_toggle.vc_toggle_default .vc_toggle_icon::before {
                    height: 10px;
                    width: 4px
                }

                .vc_toggle.vc_toggle_default .vc_toggle_icon::after {
                    width: 8px;
                    height: 2px
                }

                .vc_toggle_color_blue.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_blue.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_blue.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #5472D2
                }

                .vc_toggle_color_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_blue.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_blue.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_blue.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #7c93dd
                }

                .vc_toggle_color_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_blue .vc_toggle_icon {
                    background-color: #5472D2;
                    border-color: transparent
                }

                .vc_toggle_color_blue .vc_toggle_icon::after,.vc_toggle_color_blue .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_blue.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #5472D2
                }

                .vc_toggle_color_blue.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_blue.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #5472D2
                }

                .vc_toggle_color_blue .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #7c93dd
                }

                .vc_toggle_color_blue .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_blue .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_blue.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #7c93dd
                }

                .vc_toggle_color_blue.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_blue.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #3354c0;
                    background: #5472D2
                }

                .vc_toggle_color_blue.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_blue.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #7c93dd
                }

                .vc_toggle_color_blue.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_blue.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #5472d2;
                    background: #7c93dd
                }

                .vc_toggle_color_blue.vc_toggle_default .vc_toggle_icon::after {
                    background: #5472D2
                }

                .vc_toggle_color_blue.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #7c93dd
                }

                .vc_toggle_color_blue.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_blue.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_blue.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #5472D2;
                    background: 0 0
                }

                .vc_toggle_color_blue.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_blue.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_blue.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #7c93dd;
                    background: 0 0
                }

                .vc_toggle_color_turquoise.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_turquoise.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_turquoise.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #00C1CF
                }

                .vc_toggle_color_turquoise.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_turquoise.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_turquoise.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_turquoise.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_turquoise.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_turquoise.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #00919c
                }

                .vc_toggle_color_turquoise.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_turquoise.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_turquoise.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_turquoise .vc_toggle_icon {
                    background-color: #00C1CF;
                    border-color: transparent
                }

                .vc_toggle_color_turquoise .vc_toggle_icon::after,.vc_toggle_color_turquoise .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_turquoise.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #00C1CF
                }

                .vc_toggle_color_turquoise.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_turquoise.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #00919c;
                    background: #00C1CF
                }

                .vc_toggle_color_turquoise.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_turquoise.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #00C1CF
                }

                .vc_toggle_color_turquoise .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #00919c
                }

                .vc_toggle_color_turquoise .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_turquoise .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_turquoise.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #00919c
                }

                .vc_toggle_color_turquoise.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_turquoise.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #00919c
                }

                .vc_toggle_color_turquoise.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_turquoise.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #006269;
                    background: #00919c
                }

                .vc_toggle_color_turquoise.vc_toggle_default .vc_toggle_icon::after {
                    background: #00C1CF
                }

                .vc_toggle_color_turquoise.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #00919c
                }

                .vc_toggle_color_turquoise.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_turquoise.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_turquoise.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #00C1CF;
                    background: 0 0
                }

                .vc_toggle_color_turquoise.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_turquoise.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_turquoise.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #00919c;
                    background: 0 0
                }

                .vc_toggle_color_pink.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_pink.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_pink.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #FE6C61
                }

                .vc_toggle_color_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_pink.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_pink.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_pink.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #fe9b94
                }

                .vc_toggle_color_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_pink .vc_toggle_icon {
                    background-color: #FE6C61;
                    border-color: transparent
                }

                .vc_toggle_color_pink .vc_toggle_icon::after,.vc_toggle_color_pink .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_pink.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #FE6C61
                }

                .vc_toggle_color_pink.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_pink.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #FE6C61
                }

                .vc_toggle_color_pink .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #fe9b94
                }

                .vc_toggle_color_pink .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_pink .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_pink.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #fe9b94
                }

                .vc_toggle_color_pink.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_pink.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #fe3d2e;
                    background: #FE6C61
                }

                .vc_toggle_color_pink.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_pink.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #fe9b94
                }

                .vc_toggle_color_pink.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_pink.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #fe6c61;
                    background: #fe9b94
                }

                .vc_toggle_color_pink.vc_toggle_default .vc_toggle_icon::after {
                    background: #FE6C61
                }

                .vc_toggle_color_pink.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #fe9b94
                }

                .vc_toggle_color_pink.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_pink.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_pink.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #FE6C61;
                    background: 0 0
                }

                .vc_toggle_color_pink.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_pink.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_pink.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #fe9b94;
                    background: 0 0
                }

                .vc_toggle_color_violet.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_violet.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_violet.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #8D6DC4
                }

                .vc_toggle_color_violet.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_violet.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_violet.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_violet.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_violet.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_violet.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #a991d3
                }

                .vc_toggle_color_violet.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_violet.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_violet.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_violet .vc_toggle_icon {
                    background-color: #8D6DC4;
                    border-color: transparent
                }

                .vc_toggle_color_violet .vc_toggle_icon::after,.vc_toggle_color_violet .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_violet.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #8D6DC4
                }

                .vc_toggle_color_violet.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_violet.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #8D6DC4
                }

                .vc_toggle_color_violet .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #a991d3
                }

                .vc_toggle_color_violet .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_violet .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_violet.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #a991d3
                }

                .vc_toggle_color_violet.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_violet.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #7149b5;
                    background: #8D6DC4
                }

                .vc_toggle_color_violet.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_violet.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #a991d3
                }

                .vc_toggle_color_violet.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_violet.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #8d6dc4;
                    background: #a991d3
                }

                .vc_toggle_color_violet.vc_toggle_default .vc_toggle_icon::after {
                    background: #8D6DC4
                }

                .vc_toggle_color_violet.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #a991d3
                }

                .vc_toggle_color_violet.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_violet.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_violet.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #8D6DC4;
                    background: 0 0
                }

                .vc_toggle_color_violet.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_violet.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_violet.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #a991d3;
                    background: 0 0
                }

                .vc_toggle_color_peacoc.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_peacoc.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_peacoc.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #4CADC9
                }

                .vc_toggle_color_peacoc.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_peacoc.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_peacoc.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_peacoc.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_peacoc.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_peacoc.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #73bfd5
                }

                .vc_toggle_color_peacoc.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_peacoc.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_peacoc.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_peacoc .vc_toggle_icon {
                    background-color: #4CADC9;
                    border-color: transparent
                }

                .vc_toggle_color_peacoc .vc_toggle_icon::after,.vc_toggle_color_peacoc .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_peacoc.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #4CADC9
                }

                .vc_toggle_color_peacoc.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_peacoc.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #4CADC9
                }

                .vc_toggle_color_peacoc .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #73bfd5
                }

                .vc_toggle_color_peacoc .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_peacoc .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_peacoc.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #73bfd5
                }

                .vc_toggle_color_peacoc.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_peacoc.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #3492ae;
                    background: #4CADC9
                }

                .vc_toggle_color_peacoc.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_peacoc.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #73bfd5
                }

                .vc_toggle_color_peacoc.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_peacoc.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #4cadc9;
                    background: #73bfd5
                }

                .vc_toggle_color_peacoc.vc_toggle_default .vc_toggle_icon::after {
                    background: #4CADC9
                }

                .vc_toggle_color_peacoc.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #73bfd5
                }

                .vc_toggle_color_peacoc.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_peacoc.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_peacoc.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #4CADC9;
                    background: 0 0
                }

                .vc_toggle_color_peacoc.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_peacoc.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_peacoc.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #73bfd5;
                    background: 0 0
                }

                .vc_toggle_color_chino.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_chino.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_chino.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #CEC2AB
                }

                .vc_toggle_color_chino.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_chino.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_chino.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_chino.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_chino.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_chino.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #e1d9cb
                }

                .vc_toggle_color_chino.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_chino.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_chino.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_chino .vc_toggle_icon {
                    background-color: #CEC2AB;
                    border-color: transparent
                }

                .vc_toggle_color_chino .vc_toggle_icon::after,.vc_toggle_color_chino .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_chino.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #CEC2AB
                }

                .vc_toggle_color_chino.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_chino.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #CEC2AB
                }

                .vc_toggle_color_chino .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #e1d9cb
                }

                .vc_toggle_color_chino .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_chino .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_chino.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #e1d9cb
                }

                .vc_toggle_color_chino.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_chino.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #bbab8b;
                    background: #CEC2AB
                }

                .vc_toggle_color_chino.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_chino.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #e1d9cb
                }

                .vc_toggle_color_chino.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_chino.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #cec2ab;
                    background: #e1d9cb
                }

                .vc_toggle_color_chino.vc_toggle_default .vc_toggle_icon::after {
                    background: #CEC2AB
                }

                .vc_toggle_color_chino.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #e1d9cb
                }

                .vc_toggle_color_chino.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_chino.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_chino.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #CEC2AB;
                    background: 0 0
                }

                .vc_toggle_color_chino.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_chino.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_chino.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #e1d9cb;
                    background: 0 0
                }

                .vc_toggle_color_mulled_wine.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_mulled_wine.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_mulled_wine.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #50485B
                }

                .vc_toggle_color_mulled_wine.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_mulled_wine.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_mulled_wine.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_mulled_wine.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_mulled_wine.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_mulled_wine.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #695f77
                }

                .vc_toggle_color_mulled_wine.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_mulled_wine.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_mulled_wine.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_mulled_wine .vc_toggle_icon {
                    background-color: #50485B;
                    border-color: transparent
                }

                .vc_toggle_color_mulled_wine .vc_toggle_icon::after,.vc_toggle_color_mulled_wine .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_mulled_wine.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #50485B
                }

                .vc_toggle_color_mulled_wine.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_mulled_wine.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #50485B
                }

                .vc_toggle_color_mulled_wine .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #695f77
                }

                .vc_toggle_color_mulled_wine .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_mulled_wine .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_mulled_wine.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #695f77
                }

                .vc_toggle_color_mulled_wine.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_mulled_wine.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #37313f;
                    background: #50485B
                }

                .vc_toggle_color_mulled_wine.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_mulled_wine.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #695f77
                }

                .vc_toggle_color_mulled_wine.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_mulled_wine.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #50485b;
                    background: #695f77
                }

                .vc_toggle_color_mulled_wine.vc_toggle_default .vc_toggle_icon::after {
                    background: #50485B
                }

                .vc_toggle_color_mulled_wine.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #695f77
                }

                .vc_toggle_color_mulled_wine.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_mulled_wine.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_mulled_wine.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #50485B;
                    background: 0 0
                }

                .vc_toggle_color_mulled_wine.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_mulled_wine.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_mulled_wine.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #695f77;
                    background: 0 0
                }

                .vc_toggle_color_vista_blue.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_vista_blue.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_vista_blue.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #75D69C
                }

                .vc_toggle_color_vista_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_vista_blue.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_vista_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_vista_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_vista_blue.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_vista_blue.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #9ce2b8
                }

                .vc_toggle_color_vista_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_vista_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_vista_blue.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_vista_blue .vc_toggle_icon {
                    background-color: #75D69C;
                    border-color: transparent
                }

                .vc_toggle_color_vista_blue .vc_toggle_icon::after,.vc_toggle_color_vista_blue .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_vista_blue.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #75D69C
                }

                .vc_toggle_color_vista_blue.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_vista_blue.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #75D69C
                }

                .vc_toggle_color_vista_blue .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #9ce2b8
                }

                .vc_toggle_color_vista_blue .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_vista_blue .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_vista_blue.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #9ce2b8
                }

                .vc_toggle_color_vista_blue.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_vista_blue.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #4eca80;
                    background: #75D69C
                }

                .vc_toggle_color_vista_blue.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_vista_blue.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #9ce2b8
                }

                .vc_toggle_color_vista_blue.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_vista_blue.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #75d69c;
                    background: #9ce2b8
                }

                .vc_toggle_color_vista_blue.vc_toggle_default .vc_toggle_icon::after {
                    background: #75D69C
                }

                .vc_toggle_color_vista_blue.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #9ce2b8
                }

                .vc_toggle_color_vista_blue.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_vista_blue.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_vista_blue.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #75D69C;
                    background: 0 0
                }

                .vc_toggle_color_vista_blue.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_vista_blue.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_vista_blue.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #9ce2b8;
                    background: 0 0
                }

                .vc_toggle_color_black.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_black.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_black.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #2A2A2A
                }

                .vc_toggle_color_black.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_black.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_black.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_black.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_black.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_black.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #444
                }

                .vc_toggle_color_black.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_black.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_black.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_black .vc_toggle_icon {
                    background-color: #2A2A2A;
                    border-color: transparent
                }

                .vc_toggle_color_black .vc_toggle_icon::after,.vc_toggle_color_black .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_black.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #2A2A2A
                }

                .vc_toggle_color_black.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_black.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #2A2A2A
                }

                .vc_toggle_color_black .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #444
                }

                .vc_toggle_color_black .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_black .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_black.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #444
                }

                .vc_toggle_color_black.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_black.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #101010;
                    background: #2A2A2A
                }

                .vc_toggle_color_black.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_black.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #444
                }

                .vc_toggle_color_black.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_black.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #2a2a2a;
                    background: #444
                }

                .vc_toggle_color_black.vc_toggle_default .vc_toggle_icon::after {
                    background: #2A2A2A
                }

                .vc_toggle_color_black.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #444
                }

                .vc_toggle_color_black.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_black.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_black.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #2A2A2A;
                    background: 0 0
                }

                .vc_toggle_color_black.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_black.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_black.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #444;
                    background: 0 0
                }

                .vc_toggle_color_grey.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_grey.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_grey.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #EBEBEB
                }

                .vc_toggle_color_grey.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_grey.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_grey.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_grey.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_grey.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_grey.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #d2d2d2
                }

                .vc_toggle_color_grey.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_grey.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_grey.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_grey .vc_toggle_icon {
                    background-color: #EBEBEB;
                    border-color: transparent
                }

                .vc_toggle_color_grey .vc_toggle_icon::after,.vc_toggle_color_grey .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_grey.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #EBEBEB
                }

                .vc_toggle_color_grey.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_grey.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #d2d2d2;
                    background: #EBEBEB
                }

                .vc_toggle_color_grey.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_grey.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #EBEBEB
                }

                .vc_toggle_color_grey .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #d2d2d2
                }

                .vc_toggle_color_grey .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_grey .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_grey.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #d2d2d2
                }

                .vc_toggle_color_grey.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_grey.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #d2d2d2
                }

                .vc_toggle_color_grey.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_grey.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #b8b8b8;
                    background: #d2d2d2
                }

                .vc_toggle_color_grey.vc_toggle_default .vc_toggle_icon::after {
                    background: #EBEBEB
                }

                .vc_toggle_color_grey.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #d2d2d2
                }

                .vc_toggle_color_grey.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_grey.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_grey.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #EBEBEB;
                    background: 0 0
                }

                .vc_toggle_color_grey.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_grey.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_grey.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #d2d2d2;
                    background: 0 0
                }

                .vc_toggle_color_orange.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_orange.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_orange.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #F7BE68
                }

                .vc_toggle_color_orange.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_orange.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_orange.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_orange.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_orange.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_orange.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #fad398
                }

                .vc_toggle_color_orange.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_orange.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_orange.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_orange .vc_toggle_icon {
                    background-color: #F7BE68;
                    border-color: transparent
                }

                .vc_toggle_color_orange .vc_toggle_icon::after,.vc_toggle_color_orange .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_orange.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #F7BE68
                }

                .vc_toggle_color_orange.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_orange.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #F7BE68
                }

                .vc_toggle_color_orange .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #fad398
                }

                .vc_toggle_color_orange .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_orange .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_orange.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #fad398
                }

                .vc_toggle_color_orange.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_orange.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #f4a938;
                    background: #F7BE68
                }

                .vc_toggle_color_orange.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_orange.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #fad398
                }

                .vc_toggle_color_orange.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_orange.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #f7be68;
                    background: #fad398
                }

                .vc_toggle_color_orange.vc_toggle_default .vc_toggle_icon::after {
                    background: #F7BE68
                }

                .vc_toggle_color_orange.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #fad398
                }

                .vc_toggle_color_orange.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_orange.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_orange.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #F7BE68;
                    background: 0 0
                }

                .vc_toggle_color_orange.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_orange.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_orange.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #fad398;
                    background: 0 0
                }

                .vc_toggle_color_sky.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_sky.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_sky.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #5AA1E3
                }

                .vc_toggle_color_sky.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_sky.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_sky.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_sky.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_sky.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_sky.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #86baea
                }

                .vc_toggle_color_sky.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_sky.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_sky.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_sky .vc_toggle_icon {
                    background-color: #5AA1E3;
                    border-color: transparent
                }

                .vc_toggle_color_sky .vc_toggle_icon::after,.vc_toggle_color_sky .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_sky.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #5AA1E3
                }

                .vc_toggle_color_sky.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_sky.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #5AA1E3
                }

                .vc_toggle_color_sky .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #86baea
                }

                .vc_toggle_color_sky .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_sky .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_sky.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #86baea
                }

                .vc_toggle_color_sky.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_sky.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #2e88dc;
                    background: #5AA1E3
                }

                .vc_toggle_color_sky.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_sky.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #86baea
                }

                .vc_toggle_color_sky.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_sky.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #5aa1e3;
                    background: #86baea
                }

                .vc_toggle_color_sky.vc_toggle_default .vc_toggle_icon::after {
                    background: #5AA1E3
                }

                .vc_toggle_color_sky.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #86baea
                }

                .vc_toggle_color_sky.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_sky.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_sky.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #5AA1E3;
                    background: 0 0
                }

                .vc_toggle_color_sky.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_sky.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_sky.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #86baea;
                    background: 0 0
                }

                .vc_toggle_color_green.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_green.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_green.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #6DAB3C
                }

                .vc_toggle_color_green.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_green.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_green.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_green.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_green.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_green.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #87c456
                }

                .vc_toggle_color_green.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_green.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_green.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_green .vc_toggle_icon {
                    background-color: #6DAB3C;
                    border-color: transparent
                }

                .vc_toggle_color_green .vc_toggle_icon::after,.vc_toggle_color_green .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_green.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #6DAB3C
                }

                .vc_toggle_color_green.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_green.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #6DAB3C
                }

                .vc_toggle_color_green .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #87c456
                }

                .vc_toggle_color_green .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_green .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_green.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #87c456
                }

                .vc_toggle_color_green.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_green.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #55852f;
                    background: #6DAB3C
                }

                .vc_toggle_color_green.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_green.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #87c456
                }

                .vc_toggle_color_green.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_green.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #6dab3c;
                    background: #87c456
                }

                .vc_toggle_color_green.vc_toggle_default .vc_toggle_icon::after {
                    background: #6DAB3C
                }

                .vc_toggle_color_green.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #87c456
                }

                .vc_toggle_color_green.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_green.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_green.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #6DAB3C;
                    background: 0 0
                }

                .vc_toggle_color_green.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_green.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_green.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #87c456;
                    background: 0 0
                }

                .vc_toggle_color_juicy_pink.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_juicy_pink.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_juicy_pink.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #F4524D
                }

                .vc_toggle_color_juicy_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_juicy_pink.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_juicy_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_juicy_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_juicy_pink.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_juicy_pink.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #f7817d
                }

                .vc_toggle_color_juicy_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_juicy_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_juicy_pink.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_juicy_pink .vc_toggle_icon {
                    background-color: #F4524D;
                    border-color: transparent
                }

                .vc_toggle_color_juicy_pink .vc_toggle_icon::after,.vc_toggle_color_juicy_pink .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_juicy_pink.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #F4524D
                }

                .vc_toggle_color_juicy_pink.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_juicy_pink.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #F4524D
                }

                .vc_toggle_color_juicy_pink .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #f7817d
                }

                .vc_toggle_color_juicy_pink .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_juicy_pink .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_juicy_pink.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #f7817d
                }

                .vc_toggle_color_juicy_pink.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_juicy_pink.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #f1231d;
                    background: #F4524D
                }

                .vc_toggle_color_juicy_pink.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_juicy_pink.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #f7817d
                }

                .vc_toggle_color_juicy_pink.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_juicy_pink.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #f4524d;
                    background: #f7817d
                }

                .vc_toggle_color_juicy_pink.vc_toggle_default .vc_toggle_icon::after {
                    background: #F4524D
                }

                .vc_toggle_color_juicy_pink.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #f7817d
                }

                .vc_toggle_color_juicy_pink.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_juicy_pink.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_juicy_pink.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #F4524D;
                    background: 0 0
                }

                .vc_toggle_color_juicy_pink.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_juicy_pink.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_juicy_pink.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #f7817d;
                    background: 0 0
                }

                .vc_toggle_color_sandy_brown.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_sandy_brown.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_sandy_brown.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #F79468
                }

                .vc_toggle_color_sandy_brown.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_sandy_brown.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_sandy_brown.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_sandy_brown.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_sandy_brown.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_sandy_brown.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #fab698
                }

                .vc_toggle_color_sandy_brown.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_sandy_brown.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_sandy_brown.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_sandy_brown .vc_toggle_icon {
                    background-color: #F79468;
                    border-color: transparent
                }

                .vc_toggle_color_sandy_brown .vc_toggle_icon::after,.vc_toggle_color_sandy_brown .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_sandy_brown.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #F79468
                }

                .vc_toggle_color_sandy_brown.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_sandy_brown.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #F79468
                }

                .vc_toggle_color_sandy_brown .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #fab698
                }

                .vc_toggle_color_sandy_brown .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_sandy_brown .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_sandy_brown.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #fab698
                }

                .vc_toggle_color_sandy_brown.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_sandy_brown.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #f47238;
                    background: #F79468
                }

                .vc_toggle_color_sandy_brown.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_sandy_brown.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #fab698
                }

                .vc_toggle_color_sandy_brown.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_sandy_brown.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #f79468;
                    background: #fab698
                }

                .vc_toggle_color_sandy_brown.vc_toggle_default .vc_toggle_icon::after {
                    background: #F79468
                }

                .vc_toggle_color_sandy_brown.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #fab698
                }

                .vc_toggle_color_sandy_brown.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_sandy_brown.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_sandy_brown.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #F79468;
                    background: 0 0
                }

                .vc_toggle_color_sandy_brown.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_sandy_brown.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_sandy_brown.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #fab698;
                    background: 0 0
                }

                .vc_toggle_color_purple.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_purple.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_purple.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #B97EBB
                }

                .vc_toggle_color_purple.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_purple.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_purple.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_purple.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_purple.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_purple.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #cb9fcd
                }

                .vc_toggle_color_purple.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_purple.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_purple.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_purple .vc_toggle_icon {
                    background-color: #B97EBB;
                    border-color: transparent
                }

                .vc_toggle_color_purple .vc_toggle_icon::after,.vc_toggle_color_purple .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_purple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #B97EBB
                }

                .vc_toggle_color_purple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_purple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #B97EBB
                }

                .vc_toggle_color_purple .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #cb9fcd
                }

                .vc_toggle_color_purple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_purple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_purple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #cb9fcd
                }

                .vc_toggle_color_purple.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_purple.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #a75da9;
                    background: #B97EBB
                }

                .vc_toggle_color_purple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_purple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #cb9fcd
                }

                .vc_toggle_color_purple.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_purple.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #b97ebb;
                    background: #cb9fcd
                }

                .vc_toggle_color_purple.vc_toggle_default .vc_toggle_icon::after {
                    background: #B97EBB
                }

                .vc_toggle_color_purple.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #cb9fcd
                }

                .vc_toggle_color_purple.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_purple.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_purple.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #B97EBB;
                    background: 0 0
                }

                .vc_toggle_color_purple.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_purple.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_purple.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #cb9fcd;
                    background: 0 0
                }

                .vc_toggle_color_white.vc_toggle_simple .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_white.vc_toggle_simple .vc_toggle_icon::after,.vc_toggle_color_white.vc_toggle_simple .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_white.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_white.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_white.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_white.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_white.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_white.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #e6e6e6
                }

                .vc_toggle_color_white.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: transparent
                }

                .vc_toggle_color_white.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_white.vc_toggle_simple.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: transparent
                }

                .vc_toggle_color_white .vc_toggle_icon {
                    background-color: #FFF;
                    border-color: transparent
                }

                .vc_toggle_color_white .vc_toggle_icon::after,.vc_toggle_color_white .vc_toggle_icon::before {
                    background-color: #2A2A2A
                }

                .vc_toggle_color_white.vc_toggle_color_inverted .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #FFF
                }

                .vc_toggle_color_white.vc_toggle_default .vc_toggle_icon,.vc_toggle_color_white.vc_toggle_default .vc_toggle_icon::before {
                    border-color: #e6e6e6;
                    background: #FFF
                }

                .vc_toggle_color_white.vc_toggle_color_inverted .vc_toggle_icon::after,.vc_toggle_color_white.vc_toggle_color_inverted .vc_toggle_icon::before {
                    background-color: #FFF
                }

                .vc_toggle_color_white .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: #e6e6e6
                }

                .vc_toggle_color_white .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_white .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #2A2A2A
                }

                .vc_toggle_color_white.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon {
                    background-color: transparent;
                    border-color: #e6e6e6
                }

                .vc_toggle_color_white.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_white.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before {
                    background-color: #e6e6e6
                }

                .vc_toggle_color_white.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon,.vc_toggle_color_white.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #ccc;
                    background: #e6e6e6
                }

                .vc_toggle_color_white.vc_toggle_default .vc_toggle_icon::after {
                    background: #FFF
                }

                .vc_toggle_color_white.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon::after {
                    background: #e6e6e6
                }

                .vc_toggle_color_white.vc_toggle_arrow .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_white.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_color_white.vc_toggle_arrow .vc_toggle_icon::before {
                    border-color: #FFF;
                    background: 0 0
                }

                .vc_toggle_color_white.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon {
                    background: 0 0
                }

                .vc_toggle_color_white.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::after,.vc_toggle_color_white.vc_toggle_arrow .vc_toggle_title:hover .vc_toggle_icon::before {
                    border-color: #e6e6e6;
                    background: 0 0
                }

                .vc_toggle_size_sm .vc_toggle_icon {
                    height: 16px;
                    width: 16px
                }

                .vc_toggle_size_sm .vc_toggle_icon::before {
                    height: 2px;
                    width: 8px
                }

                .vc_toggle_size_sm .vc_toggle_icon::after {
                    height: 8px;
                    width: 2px
                }

                .vc_toggle_size_sm.vc_toggle_default .vc_toggle_icon {
                    display: inline-block;
                    width: 8px;
                    margin-left: 4px;
                    height: 2px
                }

                .vc_toggle_size_sm.vc_toggle_default .vc_toggle_icon::before {
                    height: 8px;
                    width: 2px
                }

                .vc_toggle_size_sm.vc_toggle_default .vc_toggle_icon::after {
                    width: 6px;
                    height: 0
                }

                .vc_toggle_size_sm.vc_toggle_arrow .vc_toggle_icon {
                    height: 16px;
                    width: 16px
                }

                .vc_toggle_size_sm.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_size_sm.vc_toggle_arrow .vc_toggle_icon::before {
                    border-width: 2px;
                    height: 8px;
                    margin-left: -4px;
                    width: 8px
                }

                .vc_toggle_size_sm.vc_toggle_arrow .vc_toggle_icon::before {
                    margin-top: -8px
                }

                .vc_toggle_size_sm.vc_toggle_arrow .vc_toggle_icon::after {
                    margin-top: -4px
                }

                .vc_toggle_size_sm.vc_toggle_default .vc_toggle_content,.vc_toggle_size_sm.vc_toggle_default .vc_toggle_title,.vc_toggle_size_sm.vc_toggle_round .vc_toggle_content,.vc_toggle_size_sm.vc_toggle_round .vc_toggle_title,.vc_toggle_size_sm.vc_toggle_rounded .vc_toggle_content,.vc_toggle_size_sm.vc_toggle_rounded .vc_toggle_title,.vc_toggle_size_sm.vc_toggle_simple .vc_toggle_content,.vc_toggle_size_sm.vc_toggle_simple .vc_toggle_title,.vc_toggle_size_sm.vc_toggle_square .vc_toggle_content,.vc_toggle_size_sm.vc_toggle_square .vc_toggle_title {
                    padding-left: 24px
                }

                .vc_toggle_size_sm.vc_toggle_default .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_sm.vc_toggle_default .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_sm.vc_toggle_round .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_sm.vc_toggle_round .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_sm.vc_toggle_rounded .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_sm.vc_toggle_rounded .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_sm.vc_toggle_simple .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_sm.vc_toggle_simple .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_sm.vc_toggle_square .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_sm.vc_toggle_square .vc_toggle_title .vc_toggle_icon {
                    position: absolute;
                    left: 0;
                    top: 50%;
                    -webkit-transform: translate(0,-50%);
                    -ms-transform: translate(0,-50%);
                    -o-transform: translate(0,-50%);
                    transform: translate(0,-50%)
                }

                .vc_toggle_size_sm.vc_toggle_default .vc_toggle_content,.vc_toggle_size_sm.vc_toggle_default .vc_toggle_title {
                    padding-left: 17.6px
                }

                .vc_toggle_size_sm.vc_toggle_arrow .vc_toggle_icon {
                    margin-left: 8px
                }

                .vc_toggle_size_md .vc_toggle_icon {
                    height: 22px;
                    width: 22px
                }

                .vc_toggle_size_md .vc_toggle_icon::before {
                    height: 2px;
                    width: 10px
                }

                .vc_toggle_size_md .vc_toggle_icon::after {
                    height: 10px;
                    width: 2px
                }

                .vc_toggle_size_md.vc_toggle_default .vc_toggle_icon {
                    display: inline-block;
                    width: 10px;
                    margin-left: 5px;
                    height: 4px
                }

                .vc_toggle_size_md.vc_toggle_default .vc_toggle_icon::before {
                    height: 10px;
                    width: 4px
                }

                .vc_toggle_size_md.vc_toggle_default .vc_toggle_icon::after {
                    width: 8px;
                    height: 2px
                }

                .vc_toggle_size_md.vc_toggle_arrow .vc_toggle_icon {
                    height: 22px;
                    width: 22px
                }

                .vc_toggle_size_md.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_size_md.vc_toggle_arrow .vc_toggle_icon::before {
                    border-width: 2px;
                    height: 10px;
                    margin-left: -5px;
                    width: 10px
                }

                .vc_toggle_size_md.vc_toggle_arrow .vc_toggle_icon::before {
                    margin-top: -10px
                }

                .vc_toggle_size_md.vc_toggle_arrow .vc_toggle_icon::after {
                    margin-top: -5px
                }

                .vc_toggle_size_md.vc_toggle_default .vc_toggle_content,.vc_toggle_size_md.vc_toggle_default .vc_toggle_title,.vc_toggle_size_md.vc_toggle_round .vc_toggle_content,.vc_toggle_size_md.vc_toggle_round .vc_toggle_title,.vc_toggle_size_md.vc_toggle_rounded .vc_toggle_content,.vc_toggle_size_md.vc_toggle_rounded .vc_toggle_title,.vc_toggle_size_md.vc_toggle_simple .vc_toggle_content,.vc_toggle_size_md.vc_toggle_simple .vc_toggle_title,.vc_toggle_size_md.vc_toggle_square .vc_toggle_content,.vc_toggle_size_md.vc_toggle_square .vc_toggle_title {
                    padding-left: 33px
                }

                .vc_toggle_size_md.vc_toggle_default .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_md.vc_toggle_default .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_md.vc_toggle_round .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_md.vc_toggle_round .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_md.vc_toggle_rounded .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_md.vc_toggle_rounded .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_md.vc_toggle_simple .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_md.vc_toggle_simple .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_md.vc_toggle_square .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_md.vc_toggle_square .vc_toggle_title .vc_toggle_icon {
                    position: absolute;
                    left: 0;
                    top: 50%;
                    -webkit-transform: translate(0,-50%);
                    -ms-transform: translate(0,-50%);
                    -o-transform: translate(0,-50%);
                    transform: translate(0,-50%)
                }

                .vc_toggle_size_md.vc_toggle_default .vc_toggle_content,.vc_toggle_size_md.vc_toggle_default .vc_toggle_title {
                    padding-left: 24.2px
                }

                .vc_toggle_size_md.vc_toggle_arrow .vc_toggle_icon {
                    margin-left: 11px
                }

                .vc_toggle_size_lg .vc_toggle_icon {
                    height: 28px;
                    width: 28px
                }

                .vc_toggle_size_lg .vc_toggle_icon::before {
                    height: 2px;
                    width: 14px
                }

                .vc_toggle_size_lg .vc_toggle_icon::after {
                    height: 14px;
                    width: 2px
                }

                .vc_toggle_size_lg.vc_toggle_default .vc_toggle_icon {
                    display: inline-block;
                    width: 14px;
                    margin-left: 7px;
                    height: 4px
                }

                .vc_toggle_size_lg.vc_toggle_default .vc_toggle_icon::before {
                    height: 14px;
                    width: 4px
                }

                .vc_toggle_size_lg.vc_toggle_default .vc_toggle_icon::after {
                    width: 12px;
                    height: 2px
                }

                .vc_toggle_size_lg.vc_toggle_arrow .vc_toggle_icon {
                    height: 28px;
                    width: 28px
                }

                .vc_toggle_size_lg.vc_toggle_arrow .vc_toggle_icon::after,.vc_toggle_size_lg.vc_toggle_arrow .vc_toggle_icon::before {
                    border-width: 2px;
                    height: 14px;
                    margin-left: -7px;
                    width: 14px
                }

                .vc_toggle_size_lg.vc_toggle_arrow .vc_toggle_icon::before {
                    margin-top: -14px
                }

                .vc_toggle_size_lg.vc_toggle_arrow .vc_toggle_icon::after {
                    margin-top: -7px
                }

                .vc_toggle_size_lg.vc_toggle_default .vc_toggle_content,.vc_toggle_size_lg.vc_toggle_default .vc_toggle_title,.vc_toggle_size_lg.vc_toggle_round .vc_toggle_content,.vc_toggle_size_lg.vc_toggle_round .vc_toggle_title,.vc_toggle_size_lg.vc_toggle_rounded .vc_toggle_content,.vc_toggle_size_lg.vc_toggle_rounded .vc_toggle_title,.vc_toggle_size_lg.vc_toggle_simple .vc_toggle_content,.vc_toggle_size_lg.vc_toggle_simple .vc_toggle_title,.vc_toggle_size_lg.vc_toggle_square .vc_toggle_content,.vc_toggle_size_lg.vc_toggle_square .vc_toggle_title {
                    padding-left: 42px
                }

                .vc_toggle_size_lg.vc_toggle_default .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_lg.vc_toggle_default .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_lg.vc_toggle_round .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_lg.vc_toggle_round .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_lg.vc_toggle_rounded .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_lg.vc_toggle_rounded .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_lg.vc_toggle_simple .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_lg.vc_toggle_simple .vc_toggle_title .vc_toggle_icon,.vc_toggle_size_lg.vc_toggle_square .vc_toggle_content .vc_toggle_icon,.vc_toggle_size_lg.vc_toggle_square .vc_toggle_title .vc_toggle_icon {
                    position: absolute;
                    left: 0;
                    top: 50%;
                    -webkit-transform: translate(0,-50%);
                    -ms-transform: translate(0,-50%);
                    -o-transform: translate(0,-50%);
                    transform: translate(0,-50%)
                }

                .vc_toggle_size_lg.vc_toggle_default .vc_toggle_content,.vc_toggle_size_lg.vc_toggle_default .vc_toggle_title {
                    padding-left: 30.8px
                }

                .vc_toggle_size_lg.vc_toggle_arrow .vc_toggle_icon {
                    margin-left: 14px
                }

                .vc_toggle_default .vc_toggle_content,.vc_toggle_default .vc_toggle_title,.vc_toggle_round .vc_toggle_content,.vc_toggle_round .vc_toggle_title,.vc_toggle_rounded .vc_toggle_content,.vc_toggle_rounded .vc_toggle_title,.vc_toggle_simple .vc_toggle_content,.vc_toggle_simple .vc_toggle_title,.vc_toggle_square .vc_toggle_content,.vc_toggle_square .vc_toggle_title {
                    padding-left: 33px
                }

                .vc_toggle_default .vc_toggle_content .vc_toggle_icon,.vc_toggle_default .vc_toggle_title .vc_toggle_icon,.vc_toggle_round .vc_toggle_content .vc_toggle_icon,.vc_toggle_round .vc_toggle_title .vc_toggle_icon,.vc_toggle_rounded .vc_toggle_content .vc_toggle_icon,.vc_toggle_rounded .vc_toggle_title .vc_toggle_icon,.vc_toggle_simple .vc_toggle_content .vc_toggle_icon,.vc_toggle_simple .vc_toggle_title .vc_toggle_icon,.vc_toggle_square .vc_toggle_content .vc_toggle_icon,.vc_toggle_square .vc_toggle_title .vc_toggle_icon {
                    position: absolute;
                    left: 0;
                    top: 50%;
                    -webkit-transform: translate(0,-50%);
                    -ms-transform: translate(0,-50%);
                    -o-transform: translate(0,-50%);
                    transform: translate(0,-50%)
                }

                .vc_toggle_default .vc_toggle_content,.vc_toggle_default .vc_toggle_title {
                    padding-left: 24.2px
                }

                .vc_toggle_arrow .vc_toggle_icon {
                    margin-left: 11px
                }

                .wpb_widgetised_column .wpb_wrapper>ul {
                    margin: 0
                }

                .wpb_widgetised_column .wpb_wrapper>ul>li {
                    margin-left: 0;
                    background-image: none;
                    list-style: none!important
                }

                .wpb_widgetised_column .wpb_wrapper>ul>li:after,.wpb_widgetised_column .wpb_wrapper>ul>li:before {
                    display: none!important
                }

                .wpb_button {
                    display: inline-block;
                    padding: 4px 10px;
                    margin-bottom: 0;
                    margin-top: 0;
                    font-size: 13px;
                    line-height: 18px;
                    color: #333;
                    text-align: center;
                    text-shadow: 0 1px 1px rgba(255,255,255,.75);
                    vertical-align: middle;
                    cursor: pointer;
                    background-color: #f7f7f7;
                    border: 1px solid #ccc;
                    -webkit-border-radius: 2px;
                    -moz-border-radius: 2px;
                    border-radius: 2px;
                    -webkit-box-shadow: none;
                    -moz-box-shadow: none;
                    box-shadow: none;
                    border-color: rgba(0,0,0,.1)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_black .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_blue .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_green .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_orange .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_red .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_turquoise .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-blue .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-chino .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-mulled-wine .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-peacoc .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-pink .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-violet .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-vista-blue .vc_label,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-vista_blue .vc_label,.vc_progress_bar.vc_progress-bar-color-bar_black .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-bar_blue .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-bar_green .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-bar_orange .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-bar_red .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-bar_turquoise .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-black .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-blue .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-chino .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-mulled-wine .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-peacoc .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-pink .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-turquoise .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-violet .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-vista-blue .vc_single_bar .vc_label,.vc_progress_bar.vc_progress-bar-color-vista_blue .vc_single_bar .vc_label {
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25);
                    color: #fff
                }

                .wpb_button.active,.wpb_button.disabled,.wpb_button:active,.wpb_button:hover,.wpb_button[disabled] {
                    background-color: #eaeaea
                }

                .vc_vc_button .vc_btn,.vc_vc_button2 .vc_btn {
                    margin-top: 5px;
                    margin-bottom: 5px
                }

                .wpb_button:hover {
                    color: #333;
                    background-color: #e6e6e6;
                    -webkit-transition: background-color .1s linear;
                    -o-transition: background-color .1s linear;
                    transition: background-color .1s linear;
                    background-image: none
                }

                .wpb_button:focus {
                    outline: dotted thin;
                    outline: -webkit-focus-ring-color auto 5px;
                    outline-offset: -2px
                }

                .wpb_button.active,.wpb_button:active {
                    background-color: #e6e6e6;
                    background-image: none;
                    outline: 0;
                    -webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);
                    box-shadow: inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05)
                }

                button.wpb_btn-large,span.wpb_btn-large {
                    padding: 9px 14px;
                    font-size: 15px;
                    line-height: normal;
                    -webkit-border-radius: 2px;
                    -moz-border-radius: 2px;
                    border-radius: 2px
                }

                button.wpb_btn-large [class^=icon-],span.wpb_btn-large [class^=icon-] {
                    margin-top: 1px
                }

                button.wpb_btn-small,span.wpb_btn-small {
                    padding: 5px 9px;
                    font-size: 11px;
                    line-height: 16px
                }

                button.wpb_btn-small [class^=icon-],span.wpb_btn-small [class^=icon-] {
                    margin-top: -1px
                }

                button.wpb_btn-mini,span.wpb_btn-mini {
                    padding: 2px 6px;
                    font-size: 11px;
                    line-height: 14px
                }

                .wpb_btn-danger,.wpb_btn-danger:hover,.wpb_btn-info,.wpb_btn-info:hover,.wpb_btn-inverse,.wpb_btn-inverse:hover,.wpb_btn-primary,.wpb_btn-primary:hover,.wpb_btn-success,.wpb_btn-success:hover,.wpb_btn-warning,.wpb_btn-warning:hover {
                    color: #FFF;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .wpb_btn-danger.active,.wpb_btn-info.active,.wpb_btn-inverse.active,.wpb_btn-primary.active,.wpb_btn-success.active,.wpb_btn-warning.active {
                    color: rgba(255,255,255,.75)
                }

                .wpb_btn-primary {
                    background-color: #08c
                }

                .wpb_btn-primary.active,.wpb_btn-primary.disabled,.wpb_btn-primary:active,.wpb_btn-primary:hover,.wpb_btn-primary[disabled] {
                    background-color: #0077b3
                }

                .wpb_btn-warning {
                    background-color: #F90
                }

                .wpb_btn-warning.active,.wpb_btn-warning.disabled,.wpb_btn-warning:active,.wpb_btn-warning:hover,.wpb_btn-warning[disabled] {
                    background-color: #e68a00
                }

                .wpb_btn-danger {
                    background-color: #FF675B
                }

                .wpb_btn-danger.active,.wpb_btn-danger.disabled,.wpb_btn-danger:active,.wpb_btn-danger:hover,.wpb_btn-danger[disabled] {
                    background-color: #ff4f42
                }

                .wpb_btn-success {
                    background-color: #6AB165
                }

                .wpb_btn-success.active,.wpb_btn-success.disabled,.wpb_btn-success:active,.wpb_btn-success:hover,.wpb_btn-success[disabled] {
                    background-color: #5aa855
                }

                .wpb_btn-info {
                    background-color: #58B9DA
                }

                .wpb_btn-info.active,.wpb_btn-info.disabled,.wpb_btn-info:active,.wpb_btn-info:hover,.wpb_btn-info[disabled] {
                    background-color: #43b0d5
                }

                .wpb_btn-inverse {
                    background-color: #555
                }

                .wpb_btn-inverse.active,.wpb_btn-inverse.disabled,.wpb_btn-inverse:active,.wpb_btn-inverse:hover,.wpb_btn-inverse[disabled] {
                    background-color: #484848
                }

                button.wpb_button::-moz-focus-inner,input[type=submit].wpb_button::-moz-focus-inner {
                    padding: 0;
                    border: 0
                }

                a.wpb_button_a {
                    border: none
                }

                .vc_btn3-container {
                    display: block;
                    margin-bottom: 21.74px;
                    max-width: 100%
                }

                .vc_btn3-container.vc_btn3-inline {
                    display: inline-block;
                    vertical-align: top
                }

                .vc_general.vc_btn3 {
                    display: inline-block;
                    margin-bottom: 0;
                    text-align: center;
                    vertical-align: middle;
                    cursor: pointer;
                    background-image: none;
                    background-color: transparent;
                    color: #5472D2;
                    border: 1px solid transparent;
                    box-sizing: border-box;
                    word-wrap: break-word;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    position: relative;
                    top: 0;
                    -webkit-transition: all .2s ease-in-out;
                    transition: all .2s ease-in-out;
                    line-height: normal;
                    -webkit-box-shadow: none;
                    -moz-box-shadow: none;
                    box-shadow: none;
                    font-size: 14px;
                    padding: 14px 20px
                }

                .wpb_content_element .wpb_tabs_nav li.ui-tabs-active a,.wpb_gallery .wpb_flexslider .flex-caption {
                    cursor: default
                }

                .wpb_call_to_action,.wpb_call_to_action .wpb_button {
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box
                }

                .vc_general.vc_btn3.vc_btn3-style-outline,.vc_general.vc_btn3.vc_btn3-style-outline-custom {
                    padding: 13px 19px
                }

                .vc_general.vc_btn3.active,.vc_general.vc_btn3:active,.vc_general.vc_btn3:focus {
                    outline: 0
                }

                .vc_general.vc_btn3:focus,.vc_general.vc_btn3:hover {
                    border: 1px solid transparent;
                    text-decoration: none;
                    color: #4868cf
                }

                .vc_general.vc_btn3 .vc_btn3-icon {
                    vertical-align: top;
                    height: 14px;
                    line-height: 1;
                    font-size: 16px
                }

                .vc_general.vc_btn3 .vc_btn3-icon-inner {
                    display: block;
                    position: absolute;
                    top: 50%;
                    left: 0;
                    -webkit-transform: translate(0,-50%);
                    -ms-transform: translate(0,-50%);
                    transform: translate(0,-50%)
                }

                .vc_general.vc_btn3 .vc_btn3-placeholder {
                    display: inline-block;
                    vertical-align: top;
                    width: 0
                }

                .vc_btn3.vc_btn3-icon-left,.vc_btn3.vc_btn3-icon-right {
                    position: relative
                }

                .vc_btn3.vc_btn3-icon-left .vc_btn3-icon,.vc_btn3.vc_btn3-icon-right .vc_btn3-icon {
                    display: block;
                    position: absolute;
                    top: 50%;
                    -webkit-transform: translate(0,-50%);
                    -ms-transform: translate(0,-50%);
                    -o-transform: translate(0,-50%);
                    transform: translate(0,-50%)
                }

                .vc_btn3.vc_btn3-icon-left {
                    text-align: left
                }

                .vc_btn3.vc_btn3-icon-right {
                    text-align: right
                }

                .vc_btn3.vc_btn3-icon-right:not(.vc_btn3-block) .vc_btn3-icon-inner {
                    -webkit-transform: translate(-75%,-50%);
                    -ms-transform: translate(-75%,-50%);
                    transform: translate(-75%,-50%)
                }

                .vc_btn3.vc_btn3-o-empty .vc_btn3-icon {
                    -webkit-transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    transform: translate(-50%,-50%)
                }

                .vc_btn3.vc_btn3-o-empty:not(.vc_btn3-block) .vc_btn3-icon-inner {
                    -webkit-transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    transform: translate(-50%,-50%)
                }

                .vc_btn3.vc_btn3-style-classic {
                    border-color: rgba(0,0,0,.1)
                }

                .vc_btn3.vc_btn3-style-modern {
                    background-image: -webkit-linear-gradient(top,rgba(255,255,255,.2) 0,rgba(255,255,255,.01) 100%);
                    background-image: -o-linear-gradient(top,rgba(255,255,255,.2) 0,rgba(255,255,255,.01) 100%);
                    background-image: linear-gradient(to bottom,rgba(255,255,255,.2) 0,rgba(255,255,255,.01) 100%);
                    background-repeat: repeat-x;
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#33ffffff', endColorstr='#03ffffff', GradientType=0)
                }

                .vc_btn3.vc_btn3-style-outline,.vc_btn3.vc_btn3-style-outline-custom,.vc_btn3.vc_btn3-style-outline-custom:focus,.vc_btn3.vc_btn3-style-outline-custom:hover,.vc_btn3.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-style-outline:hover {
                    border-width: 2px
                }

                .vc_btn3.vc_btn3-style-custom {
                    background-image: -webkit-linear-gradient(rgba(0,0,0,0),rgba(0,0,0,.1) 50%,rgba(0,0,0,.1));
                    background-image: -o-linear-gradient(rgba(0,0,0,0),rgba(0,0,0,.1) 50%,rgba(0,0,0,.1));
                    background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,.1) 50%,rgba(0,0,0,.1));
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#1a000000', GradientType=0);
                    background-repeat: repeat-x;
                    background-size: 200%;
                    background-position: 0 -100%
                }

                .vc_btn3.vc_btn3-style-custom:focus,.vc_btn3.vc_btn3-style-custom:hover {
                    background-position: 0 100%
                }

                .vc_btn3.vc_btn3-block {
                    display: block;
                    width: 100%;
                    text-align: inherit
                }

                .vc_btn3.vc_btn3-shape-square {
                    border-radius: 0
                }

                .vc_btn3.vc_btn3-shape-rounded {
                    border-radius: 5px
                }

                .vc_btn3.vc_btn3-shape-round {
                    border-radius: 2em
                }

                .vc_btn3.vc_btn3-size-xs {
                    font-size: 11px;
                    padding: 8px 12px
                }

                .vc_btn3.vc_btn3-size-xs.vc_btn3-style-outline,.vc_btn3.vc_btn3-size-xs.vc_btn3-style-outline-custom {
                    padding: 7px 11px
                }

                .vc_btn3.vc_btn3-size-xs .vc_btn3-icon {
                    font-size: 14px;
                    height: 11px;
                    line-height: 11px
                }

                .vc_btn3.vc_btn3-size-xs.vc_btn3-icon-left:not(.vc_btn3-o-empty) {
                    padding-left: 31px
                }

                .vc_btn3.vc_btn3-size-xs.vc_btn3-icon-left:not(.vc_btn3-o-empty) .vc_btn3-icon {
                    left: 12px
                }

                .vc_btn3.vc_btn3-size-xs.vc_btn3-icon-right:not(.vc_btn3-o-empty) {
                    padding-right: 31px
                }

                .vc_btn3.vc_btn3-size-xs.vc_btn3-icon-right:not(.vc_btn3-o-empty) .vc_btn3-icon {
                    right: 12px
                }

                .vc_btn3.vc_btn3-size-sm {
                    font-size: 12px;
                    padding: 11px 16px
                }

                .vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline,.vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline-custom {
                    padding: 10px 15px
                }

                .vc_btn3.vc_btn3-size-sm .vc_btn3-icon {
                    font-size: 14px;
                    height: 12px;
                    line-height: 12px
                }

                .vc_btn3.vc_btn3-size-sm.vc_btn3-icon-left:not(.vc_btn3-o-empty) {
                    padding-left: 39px
                }

                .vc_btn3.vc_btn3-size-sm.vc_btn3-icon-left:not(.vc_btn3-o-empty) .vc_btn3-icon {
                    left: 16px
                }

                .vc_btn3.vc_btn3-size-sm.vc_btn3-icon-right:not(.vc_btn3-o-empty) {
                    padding-right: 39px
                }

                .vc_btn3.vc_btn3-size-sm.vc_btn3-icon-right:not(.vc_btn3-o-empty) .vc_btn3-icon {
                    right: 16px
                }

                .vc_btn3.vc_btn3-size-md {
                    font-size: 14px;
                    padding: 14px 20px
                }

                .vc_btn3.vc_btn3-size-md.vc_btn3-style-outline,.vc_btn3.vc_btn3-size-md.vc_btn3-style-outline-custom {
                    padding: 13px 19px
                }

                .vc_btn3.vc_btn3-size-md .vc_btn3-icon {
                    font-size: 16px;
                    height: 14px;
                    line-height: 14px
                }

                .vc_btn3.vc_btn3-size-md.vc_btn3-icon-left:not(.vc_btn3-o-empty) {
                    padding-left: 48px
                }

                .vc_btn3.vc_btn3-size-md.vc_btn3-icon-left:not(.vc_btn3-o-empty) .vc_btn3-icon {
                    left: 20px
                }

                .vc_btn3.vc_btn3-size-md.vc_btn3-icon-right:not(.vc_btn3-o-empty) {
                    padding-right: 48px
                }

                .vc_btn3.vc_btn3-size-md.vc_btn3-icon-right:not(.vc_btn3-o-empty) .vc_btn3-icon {
                    right: 20px
                }

                .vc_btn3.vc_btn3-size-lg {
                    font-size: 16px;
                    padding: 18px 25px
                }

                .vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline,.vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline-custom {
                    padding: 17px 24px
                }

                .vc_btn3.vc_btn3-size-lg .vc_btn3-icon {
                    font-size: 20px;
                    height: 16px;
                    line-height: 16px
                }

                .vc_btn3.vc_btn3-size-lg.vc_btn3-icon-left:not(.vc_btn3-o-empty) {
                    padding-left: 60px
                }

                .vc_btn3.vc_btn3-size-lg.vc_btn3-icon-left:not(.vc_btn3-o-empty) .vc_btn3-icon {
                    left: 25px
                }

                .vc_btn3.vc_btn3-size-lg.vc_btn3-icon-right:not(.vc_btn3-o-empty) {
                    padding-right: 60px
                }

                .vc_btn3.vc_btn3-size-lg.vc_btn3-icon-right:not(.vc_btn3-o-empty) .vc_btn3-icon {
                    right: 25px
                }

                .vc_btn3.vc_btn3-color-blue,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #5472D2
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-blue:focus,.vc_btn3.vc_btn3-color-blue:hover {
                    color: #f7f7f7;
                    background-color: #3c5ecc
                }

                .vc_btn3.vc_btn3-color-blue.active,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-blue:active {
                    color: #f2f2f2;
                    background-color: #3558c8
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-outline {
                    color: #5472D2;
                    border-color: #5472D2;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #5472D2;
                    background-color: #5472D2
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #5472D2;
                    box-shadow: 0 5px 0 #3253bc
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #5472D2;
                    top: 3px;
                    box-shadow: 0 2px 0 #3253bc
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #5472D2
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #3253bc
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #3253bc
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #3253bc
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #3253bc
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #3253bc
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #3253bc
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #5472D2;
                    background-color: #5472D2
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #3c5ecc;
                    background-color: #3c5ecc
                }

                .vc_btn3.vc_btn3-color-blue.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-blue.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #3558c8;
                    background-color: #3558c8
                }

                .vc_btn3.vc_btn3-color-turquoise,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #00C1CF
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-turquoise:focus,.vc_btn3.vc_btn3-color-turquoise:hover {
                    color: #f7f7f7;
                    background-color: #00a4b0
                }

                .vc_btn3.vc_btn3-color-turquoise.active,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-turquoise:active {
                    color: #f2f2f2;
                    background-color: #009ba6
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-outline {
                    color: #00C1CF;
                    border-color: #00C1CF;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #00C1CF;
                    background-color: #00C1CF
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #00C1CF;
                    box-shadow: 0 5px 0 #008d97
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #00C1CF;
                    top: 3px;
                    box-shadow: 0 2px 0 #008d97
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #00C1CF
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #008d97
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #008d97
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #008d97
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #008d97
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #008d97
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #008d97
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #00C1CF;
                    background-color: #00C1CF
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #00a4b0;
                    background-color: #00a4b0
                }

                .vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-turquoise.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #009ba6;
                    background-color: #009ba6
                }

                .vc_btn3.vc_btn3-color-pink,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #FE6C61
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-pink:focus,.vc_btn3.vc_btn3-color-pink:hover {
                    color: #f7f7f7;
                    background-color: #fe5043
                }

                .vc_btn3.vc_btn3-color-pink.active,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-pink:active {
                    color: #f2f2f2;
                    background-color: #fe4638
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-outline {
                    color: #FE6C61;
                    border-color: #FE6C61;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #FE6C61;
                    background-color: #FE6C61
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #FE6C61;
                    box-shadow: 0 5px 0 #fe3829
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #FE6C61;
                    top: 3px;
                    box-shadow: 0 2px 0 #fe3829
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #FE6C61
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #fe3829
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #fe3829
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #fe3829
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #fe3829
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #fe3829
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #fe3829
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #FE6C61;
                    background-color: #FE6C61
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #fe5043;
                    background-color: #fe5043
                }

                .vc_btn3.vc_btn3-color-pink.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-pink.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #fe4638;
                    background-color: #fe4638
                }

                .vc_btn3.vc_btn3-color-violet,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #8D6DC4
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-violet:focus,.vc_btn3.vc_btn3-color-violet:hover {
                    color: #f7f7f7;
                    background-color: #7c57bb
                }

                .vc_btn3.vc_btn3-color-violet.active,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-violet:active {
                    color: #f2f2f2;
                    background-color: #7650b8
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-outline {
                    color: #8D6DC4;
                    border-color: #8D6DC4;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #8D6DC4;
                    background-color: #8D6DC4
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #8D6DC4;
                    box-shadow: 0 5px 0 #6e48b1
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #8D6DC4;
                    top: 3px;
                    box-shadow: 0 2px 0 #6e48b1
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #8D6DC4
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #6e48b1
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #6e48b1
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #6e48b1
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #6e48b1
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #6e48b1
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #6e48b1
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #8D6DC4;
                    background-color: #8D6DC4
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #7c57bb;
                    background-color: #7c57bb
                }

                .vc_btn3.vc_btn3-color-violet.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-violet.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #7650b8;
                    background-color: #7650b8
                }

                .vc_btn3.vc_btn3-color-peacoc,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #4CADC9
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-peacoc:focus,.vc_btn3.vc_btn3-color-peacoc:hover {
                    color: #f7f7f7;
                    background-color: #39a0bd
                }

                .vc_btn3.vc_btn3-color-peacoc.active,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-peacoc:active {
                    color: #f2f2f2;
                    background-color: #3799b5
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-outline {
                    color: #4CADC9;
                    border-color: #4CADC9;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #4CADC9;
                    background-color: #4CADC9
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #4CADC9;
                    box-shadow: 0 5px 0 #338faa
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #4CADC9;
                    top: 3px;
                    box-shadow: 0 2px 0 #338faa
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #4CADC9
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #338faa
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #338faa
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #338faa
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #338faa
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #338faa
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #338faa
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #4CADC9;
                    background-color: #4CADC9
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #39a0bd;
                    background-color: #39a0bd
                }

                .vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-peacoc.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #3799b5;
                    background-color: #3799b5
                }

                .vc_btn3.vc_btn3-color-chino,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #CEC2AB
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-chino:focus,.vc_btn3.vc_btn3-color-chino:hover {
                    color: #f7f7f7;
                    background-color: #c3b498
                }

                .vc_btn3.vc_btn3-color-chino.active,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-chino:active {
                    color: #f2f2f2;
                    background-color: #bfaf91
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-outline {
                    color: #CEC2AB;
                    border-color: #CEC2AB;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #CEC2AB;
                    background-color: #CEC2AB
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #CEC2AB;
                    box-shadow: 0 5px 0 #b9a888
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #CEC2AB;
                    top: 3px;
                    box-shadow: 0 2px 0 #b9a888
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #CEC2AB
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #b9a888
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #b9a888
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #b9a888
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #b9a888
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #b9a888
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #b9a888
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #CEC2AB;
                    background-color: #CEC2AB
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #c3b498;
                    background-color: #c3b498
                }

                .vc_btn3.vc_btn3-color-chino.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-chino.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #bfaf91;
                    background-color: #bfaf91
                }

                .vc_btn3.vc_btn3-color-mulled-wine,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #50485B
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-mulled-wine:focus,.vc_btn3.vc_btn3-color-mulled-wine:hover {
                    color: #f7f7f7;
                    background-color: #413a4a
                }

                .vc_btn3.vc_btn3-color-mulled-wine.active,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-mulled-wine:active {
                    color: #f2f2f2;
                    background-color: #3c3644
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-outline {
                    color: #50485B;
                    border-color: #50485B;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #50485B;
                    background-color: #50485B
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #50485B;
                    box-shadow: 0 5px 0 #342f3c
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #50485B;
                    top: 3px;
                    box-shadow: 0 2px 0 #342f3c
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #50485B
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #342f3c
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #342f3c
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #342f3c
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #342f3c
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #342f3c
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #342f3c
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #50485B;
                    background-color: #50485B
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #413a4a;
                    background-color: #413a4a
                }

                .vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-mulled-wine.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #3c3644;
                    background-color: #3c3644
                }

                .vc_btn3.vc_btn3-color-vista-blue,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #75D69C
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-vista-blue:focus,.vc_btn3.vc_btn3-color-vista-blue:hover {
                    color: #f7f7f7;
                    background-color: #5dcf8b
                }

                .vc_btn3.vc_btn3-color-vista-blue.active,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-vista-blue:active {
                    color: #f2f2f2;
                    background-color: #56cd85
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-outline {
                    color: #75D69C;
                    border-color: #75D69C;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #75D69C;
                    background-color: #75D69C
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #75D69C;
                    box-shadow: 0 5px 0 #4ac97d
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #75D69C;
                    top: 3px;
                    box-shadow: 0 2px 0 #4ac97d
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #75D69C
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #4ac97d
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #4ac97d
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #4ac97d
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #4ac97d
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #4ac97d
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #4ac97d
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #75D69C;
                    background-color: #75D69C
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #5dcf8b;
                    background-color: #5dcf8b
                }

                .vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-vista-blue.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #56cd85;
                    background-color: #56cd85
                }

                .vc_btn3.vc_btn3-color-orange,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #F7BE68
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-orange:focus,.vc_btn3.vc_btn3-color-orange:hover {
                    color: #f7f7f7;
                    background-color: #f5b14b
                }

                .vc_btn3.vc_btn3-color-orange.active,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-orange:active {
                    color: #f2f2f2;
                    background-color: #f5ad41
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-outline {
                    color: #F7BE68;
                    border-color: #F7BE68;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #F7BE68;
                    background-color: #F7BE68
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #F7BE68;
                    box-shadow: 0 5px 0 #f4a733
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #F7BE68;
                    top: 3px;
                    box-shadow: 0 2px 0 #f4a733
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #F7BE68
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #f4a733
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #f4a733
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #f4a733
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #f4a733
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #f4a733
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #f4a733
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #F7BE68;
                    background-color: #F7BE68
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #f5b14b;
                    background-color: #f5b14b
                }

                .vc_btn3.vc_btn3-color-orange.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-orange.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #f5ad41;
                    background-color: #f5ad41
                }

                .vc_btn3.vc_btn3-color-sky,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #5AA1E3
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-sky:focus,.vc_btn3.vc_btn3-color-sky:hover {
                    color: #f7f7f7;
                    background-color: #4092df
                }

                .vc_btn3.vc_btn3-color-sky.active,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-sky:active {
                    color: #f2f2f2;
                    background-color: #378ddd
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-outline {
                    color: #5AA1E3;
                    border-color: #5AA1E3;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #5AA1E3;
                    background-color: #5AA1E3
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #5AA1E3;
                    box-shadow: 0 5px 0 #2a86db
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #5AA1E3;
                    top: 3px;
                    box-shadow: 0 2px 0 #2a86db
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #5AA1E3
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #2a86db
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #2a86db
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #2a86db
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #2a86db
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #2a86db
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #2a86db
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #5AA1E3;
                    background-color: #5AA1E3
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #4092df;
                    background-color: #4092df
                }

                .vc_btn3.vc_btn3-color-sky.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-sky.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #378ddd;
                    background-color: #378ddd
                }

                .vc_btn3.vc_btn3-color-green,.vc_btn3.vc_btn3-color-green.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #6DAB3C
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-green.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-green:focus,.vc_btn3.vc_btn3-color-green:hover {
                    color: #f7f7f7;
                    background-color: #5f9434
                }

                .vc_btn3.vc_btn3-color-green.active,.vc_btn3.vc_btn3-color-green.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-green.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-green:active {
                    color: #f2f2f2;
                    background-color: #5a8d31
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-outline {
                    color: #6DAB3C;
                    border-color: #6DAB3C;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-green.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-green.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-green.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #6DAB3C;
                    background-color: #6DAB3C
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #6DAB3C;
                    box-shadow: 0 5px 0 #53812d
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-green.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #6DAB3C;
                    top: 3px;
                    box-shadow: 0 2px 0 #53812d
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-green.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #6DAB3C
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #53812d
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-green.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #53812d
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #53812d
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-green.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #53812d
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #53812d
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-green.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #53812d
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #6DAB3C;
                    background-color: #6DAB3C
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-green.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #5f9434;
                    background-color: #5f9434
                }

                .vc_btn3.vc_btn3-color-green.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-green.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #5a8d31;
                    background-color: #5a8d31
                }

                .vc_btn3.vc_btn3-color-juicy-pink,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #F4524D
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-juicy-pink:focus,.vc_btn3.vc_btn3-color-juicy-pink:hover {
                    color: #f7f7f7;
                    background-color: #f23630
                }

                .vc_btn3.vc_btn3-color-juicy-pink.active,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-juicy-pink:active {
                    color: #f2f2f2;
                    background-color: #f22d27
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-outline {
                    color: #F4524D;
                    border-color: #F4524D;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #F4524D;
                    background-color: #F4524D
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #F4524D;
                    box-shadow: 0 5px 0 #f11f18
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #F4524D;
                    top: 3px;
                    box-shadow: 0 2px 0 #f11f18
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #F4524D
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #f11f18
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #f11f18
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #f11f18
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #f11f18
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #f11f18
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #f11f18
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #F4524D;
                    background-color: #F4524D
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #f23630;
                    background-color: #f23630
                }

                .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #f22d27;
                    background-color: #f22d27
                }

                .vc_btn3.vc_btn3-color-sandy-brown,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #F79468
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-sandy-brown:focus,.vc_btn3.vc_btn3-color-sandy-brown:hover {
                    color: #f7f7f7;
                    background-color: #f57f4b
                }

                .vc_btn3.vc_btn3-color-sandy-brown.active,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-sandy-brown:active {
                    color: #f2f2f2;
                    background-color: #f57941
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-outline {
                    color: #F79468;
                    border-color: #F79468;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #F79468;
                    background-color: #F79468
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #F79468;
                    box-shadow: 0 5px 0 #f46e33
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #F79468;
                    top: 3px;
                    box-shadow: 0 2px 0 #f46e33
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #F79468
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #f46e33
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #f46e33
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #f46e33
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #f46e33
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #f46e33
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #f46e33
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #F79468;
                    background-color: #F79468
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #f57f4b;
                    background-color: #f57f4b
                }

                .vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-sandy-brown.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #f57941;
                    background-color: #f57941
                }

                .vc_btn3.vc_btn3-color-purple,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #B97EBB
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-purple:focus,.vc_btn3.vc_btn3-color-purple:hover {
                    color: #f7f7f7;
                    background-color: #ae6ab0
                }

                .vc_btn3.vc_btn3-color-purple.active,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-purple:active {
                    color: #f2f2f2;
                    background-color: #ab63ad
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-outline {
                    color: #B97EBB;
                    border-color: #B97EBB;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #B97EBB;
                    background-color: #B97EBB
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #B97EBB;
                    box-shadow: 0 5px 0 #a559a8
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #B97EBB;
                    top: 3px;
                    box-shadow: 0 2px 0 #a559a8
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #B97EBB
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #a559a8
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #a559a8
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #a559a8
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #a559a8
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #a559a8
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #a559a8
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #B97EBB;
                    background-color: #B97EBB
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #ae6ab0;
                    background-color: #ae6ab0
                }

                .vc_btn3.vc_btn3-color-purple.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-purple.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #ab63ad;
                    background-color: #ab63ad
                }

                .vc_btn3.vc_btn3-color-black,.vc_btn3.vc_btn3-color-black.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #2A2A2A
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-black.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-black:focus,.vc_btn3.vc_btn3-color-black:hover {
                    color: #f7f7f7;
                    background-color: #1b1b1b
                }

                .vc_btn3.vc_btn3-color-black.active,.vc_btn3.vc_btn3-color-black.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-black.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-black:active {
                    color: #f2f2f2;
                    background-color: #161616
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-outline {
                    border-color: #2A2A2A;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-black.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-black.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-black.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #2A2A2A;
                    background-color: #2A2A2A
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #2A2A2A;
                    box-shadow: 0 5px 0 #0e0e0e
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-black.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #2A2A2A;
                    top: 3px;
                    box-shadow: 0 2px 0 #0e0e0e
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-black.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #2A2A2A
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #0e0e0e
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-black.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #0e0e0e
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #0e0e0e
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-black.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #0e0e0e
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #0e0e0e
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-black.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #0e0e0e
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #2A2A2A;
                    background-color: #2A2A2A
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-black.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #1b1b1b;
                    background-color: #1b1b1b
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-black.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #161616;
                    background-color: #161616
                }

                .vc_btn3.vc_btn3-color-grey,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-flat {
                    color: #666;
                    background-color: #EBEBEB
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-grey:focus,.vc_btn3.vc_btn3-color-grey:hover {
                    color: #5e5e5e;
                    background-color: #dcdcdc
                }

                .vc_btn3.vc_btn3-color-grey.active,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-grey:active {
                    color: #595959;
                    background-color: #d7d7d7
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-outline {
                    border-color: #EBEBEB;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-outline:hover {
                    color: #666;
                    border-color: #EBEBEB;
                    background-color: #EBEBEB
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d {
                    color: #666;
                    background-color: #EBEBEB;
                    box-shadow: 0 5px 0 #cfcfcf
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d:hover {
                    color: #5e5e5e;
                    background-color: #EBEBEB;
                    top: 3px;
                    box-shadow: 0 2px 0 #cfcfcf
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d:active {
                    color: #595959;
                    background-color: #EBEBEB
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #cfcfcf
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #cfcfcf
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #cfcfcf
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #cfcfcf
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #cfcfcf
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #cfcfcf
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern {
                    color: #666;
                    border-color: #EBEBEB;
                    background-color: #EBEBEB
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern:hover {
                    color: #5e5e5e;
                    border-color: #dcdcdc;
                    background-color: #dcdcdc
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern:active {
                    color: #595959;
                    border-color: #d7d7d7;
                    background-color: #d7d7d7
                }

                .vc_btn3.vc_btn3-color-white,.vc_btn3.vc_btn3-color-white.vc_btn3-style-flat {
                    color: #666;
                    background-color: #FFF
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-white.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-white:focus,.vc_btn3.vc_btn3-color-white:hover {
                    color: #5e5e5e;
                    background-color: #f0f0f0
                }

                .vc_btn3.vc_btn3-color-white.active,.vc_btn3.vc_btn3-color-white.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-white.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-white:active {
                    color: #595959;
                    background-color: #ebebeb
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-outline {
                    border-color: #FFF;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-white.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-white.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-white.vc_btn3-style-outline:hover {
                    color: #666;
                    border-color: #FFF;
                    background-color: #FFF
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-3d {
                    color: #666;
                    background-color: #FFF;
                    box-shadow: 0 5px 0 #e3e3e3
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-white.vc_btn3-style-3d:hover {
                    color: #5e5e5e;
                    background-color: #FFF;
                    top: 3px;
                    box-shadow: 0 2px 0 #e3e3e3
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-white.vc_btn3-style-3d:active {
                    color: #595959;
                    background-color: #FFF
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #e3e3e3
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-white.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #e3e3e3
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #e3e3e3
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-white.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #e3e3e3
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #e3e3e3
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-white.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #e3e3e3
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-modern {
                    color: #666;
                    border-color: #FFF;
                    background-color: #FFF;
                    background-image: -webkit-linear-gradient(top,rgba(0,0,0,.01) 0,rgba(0,0,0,.02) 100%);
                    background-image: -o-linear-gradient(top,rgba(0,0,0,.01) 0,rgba(0,0,0,.02) 100%);
                    background-image: linear-gradient(to bottom,rgba(0,0,0,.01) 0,rgba(0,0,0,.02) 100%);
                    background-repeat: repeat-x;
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#03000000', endColorstr='#05000000', GradientType=0)
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-white.vc_btn3-style-modern:hover {
                    color: #5e5e5e;
                    border-color: #f0f0f0;
                    background-color: #f0f0f0
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-white.vc_btn3-style-modern:active {
                    color: #595959;
                    border-color: #ebebeb;
                    background-color: #ebebeb
                }

                .vc_btn3.vc_btn3-color-default,.vc_btn3.vc_btn3-color-default.vc_btn3-style-flat {
                    color: #333;
                    background-color: #f7f7f7
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-default.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-default:focus,.vc_btn3.vc_btn3-color-default:hover {
                    color: #2b2b2b;
                    background-color: #e8e8e8
                }

                .vc_btn3.vc_btn3-color-default.active,.vc_btn3.vc_btn3-color-default.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-default.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-default:active {
                    color: #262626;
                    background-color: #e3e3e3
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-outline {
                    color: #f7f7f7;
                    border-color: #f7f7f7;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-default.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-default.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-default.vc_btn3-style-outline:hover {
                    color: #333;
                    border-color: #f7f7f7;
                    background-color: #f7f7f7
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-3d {
                    color: #333;
                    background-color: #f7f7f7;
                    box-shadow: 0 5px 0 #dbdbdb
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-default.vc_btn3-style-3d:hover {
                    color: #2b2b2b;
                    background-color: #f7f7f7;
                    top: 3px;
                    box-shadow: 0 2px 0 #dbdbdb
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-default.vc_btn3-style-3d:active {
                    color: #262626;
                    background-color: #f7f7f7
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #dbdbdb
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-default.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #dbdbdb
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #dbdbdb
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-default.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #dbdbdb
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #dbdbdb
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-default.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #dbdbdb
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-modern {
                    color: #333;
                    border-color: #f7f7f7;
                    background-color: #f7f7f7
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-default.vc_btn3-style-modern:hover {
                    color: #2b2b2b;
                    border-color: #e8e8e8;
                    background-color: #e8e8e8
                }

                .vc_btn3.vc_btn3-color-default.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-default.vc_btn3-style-modern:active {
                    color: #262626;
                    border-color: #e3e3e3;
                    background-color: #e3e3e3
                }

                .vc_btn3.vc_btn3-color-primary,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-flat {
                    color: #FFF;
                    background-color: #08c
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-primary:focus,.vc_btn3.vc_btn3-color-primary:hover {
                    color: #f7f7f7;
                    background-color: #0074ad
                }

                .vc_btn3.vc_btn3-color-primary.active,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-primary:active {
                    color: #f2f2f2;
                    background-color: #006da3
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-outline {
                    color: #08c;
                    border-color: #08c;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-outline:hover {
                    color: #FFF;
                    border-color: #08c;
                    background-color: #08c
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d {
                    color: #FFF;
                    background-color: #08c;
                    box-shadow: 0 5px 0 #006394
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #08c;
                    top: 3px;
                    box-shadow: 0 2px 0 #006394
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #08c
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #006394
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #006394
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #006394
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #006394
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #006394
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #006394
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-modern {
                    color: #FFF;
                    border-color: #08c;
                    background-color: #08c
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #0074ad;
                    background-color: #0074ad
                }

                .vc_btn3.vc_btn3-color-primary.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-primary.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #006da3;
                    background-color: #006da3
                }

                .vc_btn3.vc_btn3-color-info,.vc_btn3.vc_btn3-color-info.vc_btn3-style-flat {
                    color: #FFF;
                    background-color: #58B9DA
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-info.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-info:focus,.vc_btn3.vc_btn3-color-info:hover {
                    color: #f7f7f7;
                    background-color: #3fafd4
                }

                .vc_btn3.vc_btn3-color-info.active,.vc_btn3.vc_btn3-color-info.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-info.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-info:active {
                    color: #f2f2f2;
                    background-color: #37abd3
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-outline {
                    color: #58B9DA;
                    border-color: #58B9DA;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-info.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-info.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-info.vc_btn3-style-outline:hover {
                    color: #FFF;
                    border-color: #58B9DA;
                    background-color: #58B9DA
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-3d {
                    color: #FFF;
                    background-color: #58B9DA;
                    box-shadow: 0 5px 0 #2da4cd
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-info.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #58B9DA;
                    top: 3px;
                    box-shadow: 0 2px 0 #2da4cd
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-info.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #58B9DA
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #2da4cd
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-info.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #2da4cd
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #2da4cd
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-info.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #2da4cd
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #2da4cd
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-info.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #2da4cd
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-modern {
                    color: #FFF;
                    border-color: #58B9DA;
                    background-color: #58B9DA
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-info.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #3fafd4;
                    background-color: #3fafd4
                }

                .vc_btn3.vc_btn3-color-info.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-info.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #37abd3;
                    background-color: #37abd3
                }

                .vc_btn3.vc_btn3-color-success,.vc_btn3.vc_btn3-color-success.vc_btn3-style-flat {
                    color: #fff;
                    background-color: #6AB165
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-success.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-success:focus,.vc_btn3.vc_btn3-color-success:hover {
                    color: #f7f7f7;
                    background-color: #59a453
                }

                .vc_btn3.vc_btn3-color-success.active,.vc_btn3.vc_btn3-color-success.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-success.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-success:active {
                    color: #f2f2f2;
                    background-color: #559d50
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-outline {
                    color: #6AB165;
                    border-color: #6AB165;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-success.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-success.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-success.vc_btn3-style-outline:hover {
                    color: #fff;
                    border-color: #6AB165;
                    background-color: #6AB165
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-3d {
                    color: #fff;
                    background-color: #6AB165;
                    box-shadow: 0 5px 0 #4f934b
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-success.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #6AB165;
                    top: 3px;
                    box-shadow: 0 2px 0 #4f934b
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-success.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #6AB165
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #4f934b
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-success.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #4f934b
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #4f934b
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-success.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #4f934b
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #4f934b
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-success.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #4f934b
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-modern {
                    color: #fff;
                    border-color: #6AB165;
                    background-color: #6AB165
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-success.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #59a453;
                    background-color: #59a453
                }

                .vc_btn3.vc_btn3-color-success.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-success.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #559d50;
                    background-color: #559d50
                }

                .vc_btn3.vc_btn3-color-warning,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-flat {
                    color: #FFF;
                    background-color: #F90
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-warning:focus,.vc_btn3.vc_btn3-color-warning:hover {
                    color: #f7f7f7;
                    background-color: #e08700
                }

                .vc_btn3.vc_btn3-color-warning.active,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-warning:active {
                    color: #f2f2f2;
                    background-color: #d68100
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-outline {
                    color: #F90;
                    border-color: #F90;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-outline:hover {
                    color: #FFF;
                    border-color: #F90;
                    background-color: #F90
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d {
                    color: #FFF;
                    background-color: #F90;
                    box-shadow: 0 5px 0 #c77700
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #F90;
                    top: 3px;
                    box-shadow: 0 2px 0 #c77700
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #F90
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #c77700
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #c77700
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #c77700
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #c77700
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #c77700
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #c77700
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-modern {
                    color: #FFF;
                    border-color: #F90;
                    background-color: #F90
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #e08700;
                    background-color: #e08700
                }

                .vc_btn3.vc_btn3-color-warning.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-warning.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #d68100;
                    background-color: #d68100
                }

                .vc_btn3.vc_btn3-color-danger,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-flat {
                    color: #FFF;
                    background-color: #FF675B
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-danger:focus,.vc_btn3.vc_btn3-color-danger:hover {
                    color: #f7f7f7;
                    background-color: #ff4b3c
                }

                .vc_btn3.vc_btn3-color-danger.active,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-danger:active {
                    color: #f2f2f2;
                    background-color: #ff4132
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-outline {
                    color: #FF675B;
                    border-color: #FF675B;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-outline:hover {
                    color: #FFF;
                    border-color: #FF675B;
                    background-color: #FF675B
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d {
                    color: #FFF;
                    background-color: #FF675B;
                    box-shadow: 0 5px 0 #ff3323
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #FF675B;
                    top: 3px;
                    box-shadow: 0 2px 0 #ff3323
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #FF675B
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #ff3323
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #ff3323
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #ff3323
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #ff3323
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #ff3323
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #ff3323
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-modern {
                    color: #FFF;
                    border-color: #FF675B;
                    background-color: #FF675B
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #ff4b3c;
                    background-color: #ff4b3c
                }

                .vc_btn3.vc_btn3-color-danger.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-danger.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #ff4132;
                    background-color: #ff4132
                }

                .vc_btn3.vc_btn3-color-inverse,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-flat {
                    color: #FFF;
                    background-color: #555
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-flat:focus,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-flat:hover,.vc_btn3.vc_btn3-color-inverse:focus,.vc_btn3.vc_btn3-color-inverse:hover {
                    color: #f7f7f7;
                    background-color: #464646
                }

                .vc_btn3.vc_btn3-color-inverse.active,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-flat.active,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-flat:active,.vc_btn3.vc_btn3-color-inverse:active {
                    color: #f2f2f2;
                    background-color: #414141
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-outline {
                    color: #555;
                    border-color: #555;
                    background-color: transparent
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-outline.active,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-outline:active,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-outline:focus,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-outline:hover {
                    color: #FFF;
                    border-color: #555;
                    background-color: #555
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d {
                    color: #FFF;
                    background-color: #555;
                    box-shadow: 0 5px 0 #393939
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d:focus,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d:hover {
                    color: #f7f7f7;
                    background-color: #555;
                    top: 3px;
                    box-shadow: 0 2px 0 #393939
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d.active,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d:active {
                    color: #f2f2f2;
                    background-color: #555
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d.vc_btn3-size-xs {
                    box-shadow: 0 3px 0 #393939
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d.vc_btn3-size-xs:focus,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d.vc_btn3-size-xs:hover {
                    top: 1px;
                    box-shadow: 0 2px 0 #393939
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d.vc_btn3-size-sm {
                    box-shadow: 0 4px 0 #393939
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d.vc_btn3-size-sm:focus,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d.vc_btn3-size-sm:hover {
                    top: 2px;
                    box-shadow: 0 2px 0 #393939
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d.vc_btn3-size-lg {
                    box-shadow: 0 5px 0 #393939
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d.vc_btn3-size-lg:focus,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-3d.vc_btn3-size-lg:hover {
                    top: 3px;
                    box-shadow: 0 2px 0 #393939
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-modern {
                    color: #FFF;
                    border-color: #555;
                    background-color: #555
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-modern:focus,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-modern:hover {
                    color: #f7f7f7;
                    border-color: #464646;
                    background-color: #464646
                }

                .vc_btn3.vc_btn3-color-inverse.vc_btn3-style-modern.active,.vc_btn3.vc_btn3-color-inverse.vc_btn3-style-modern:active {
                    color: #f2f2f2;
                    border-color: #414141;
                    background-color: #414141
                }

                .vc_btn3.vc_btn3-color-black.vc_btn3-style-outline {
                    color: #2A2A2A
                }

                .vc_btn3.vc_btn3-color-grey.vc_btn3-style-outline {
                    color: #EBEBEB
                }

                .vc_btn3.vc_btn3-color-white.vc_btn3-style-outline {
                    color: #FFF
                }

                .vc_general.vc_cta3.vc_cta3-style-3d .vc_cta3-content-header h2,.vc_general.vc_cta3.vc_cta3-style-3d .vc_cta3-content-header h4,.vc_general.vc_cta3.vc_cta3-style-classic:not(.vc_cta3-color-classic) .vc_cta3-content-header h2,.vc_general.vc_cta3.vc_cta3-style-classic:not(.vc_cta3-color-classic) .vc_cta3-content-header h4,.vc_general.vc_cta3.vc_cta3-style-flat .vc_cta3-content-header h2,.vc_general.vc_cta3.vc_cta3-style-flat .vc_cta3-content-header h4,.vc_general.vc_cta3.vc_cta3-style-outline:not(.vc_cta3-color-classic) .vc_cta3-content-header h2,.vc_general.vc_cta3.vc_cta3-style-outline:not(.vc_cta3-color-classic) .vc_cta3-content-header h4 {
                    color: inherit
                }

                .vc_btn3-container.vc_btn3-center {
                    text-align: center
                }

                .vc_btn3-container.vc_btn3-left {
                    text-align: left
                }

                .vc_btn3-container.vc_btn3-right {
                    text-align: right
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-icon-left .vc_btn3-icon,.vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-icon-right .vc_btn3-icon {
                    display: inline-block;
                    position: static;
                    -webkit-transform: translate(0,0);
                    -ms-transform: translate(0,0);
                    transform: translate(0,0);
                    min-width: 1em
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-icon-left:not(.vc_btn3-o-empty) .vc_btn3-icon {
                    margin-right: .5em
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-icon-right:not(.vc_btn3-o-empty) .vc_btn3-icon {
                    margin-left: .5em
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-xs {
                    font-size: 11px;
                    padding: 8px 12px
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-xs.vc_btn3-style-outline,.vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-xs.vc_btn3-style-outline-custom {
                    padding: 7px 11px
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-sm {
                    font-size: 12px;
                    padding: 11px 16px
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-sm.vc_btn3-style-outline,.vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-sm.vc_btn3-style-outline-custom {
                    padding: 10px 15px
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-md {
                    font-size: 14px;
                    padding: 14px 20px
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-md.vc_btn3-style-outline,.vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-md.vc_btn3-style-outline-custom {
                    padding: 13px 19px
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-lg {
                    font-size: 16px;
                    padding: 18px 25px
                }

                .vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-lg.vc_btn3-style-outline,.vc_btn3-container.vc_btn3-center .vc_btn3-block.vc_btn3-size-lg.vc_btn3-style-outline-custom {
                    padding: 17px 24px
                }

                .vc_btn3-container .vc_btn3-block.vc_btn3-icon-left,.vc_btn3-container .vc_btn3-block.vc_btn3-icon-right {
                    text-align: inherit
                }

                .vc_custom_heading a,.vc_custom_heading a:focus,.vc_custom_heading a:hover,.vc_custom_heading a:visited {
                    border: none;
                    text-decoration: inherit;
                    color: inherit
                }

                .vc_custom_heading a {
                    -webkit-transition: all .2s ease-in-out;
                    transition: all .2s ease-in-out;
                    opacity: 1
                }

                .vc_custom_heading a:hover {
                    opacity: .85
                }

                .vc_call_to_action {
                    background-color: #EBEBEB;
                    border: 2px solid #EBEBEB;
                    padding: 2em;
                    border-radius: 5px
                }

                .vc_call_to_action :last-child {
                    margin-bottom: 0
                }

                .vc_call_to_action.vc_cta_square {
                    border-radius: 0
                }

                .vc_call_to_action.vc_cta_square_outlined {
                    border-radius: 0;
                    background: 0 0!important
                }

                .vc_call_to_action.vc_cta_round {
                    border-radius: 50px
                }

                .vc_call_to_action.vc_cta_outlined {
                    background: 0 0!important
                }

                .vc_call_to_action hgroup h2,.vc_call_to_action hgroup h4 {
                    margin: 0;
                    clear: none
                }

                .vc_call_to_action hgroup+p {
                    margin-top: 1em
                }

                .vc_call_to_action.vc_cta_btn_pos_right .vc_cta_btn {
                    float: right;
                    margin-left: 2em
                }

                .vc_call_to_action.vc_cta_btn_pos_left .vc_cta_btn {
                    float: left;
                    margin-right: 2em
                }

                .wpb_call_to_action {
                    position: relative;
                    background-color: #f7f7f7;
                    padding: 35px;
                    border: 1px solid #F0F0F0;
                    box-sizing: border-box
                }

                .wpb_call_to_action .wpb_button {
                    margin: 0;
                    box-sizing: border-box
                }

                .cta_align_left .wpb_button {
                    float: left
                }

                .cta_align_right .wpb_button {
                    float: right
                }

                .cta_align_left .wpb_button,.cta_align_right .wpb_button {
                    max-width: 27.5%
                }

                .cta_align_left .wpb_call_text,.cta_align_right .wpb_call_text {
                    width: 70%;
                    float: left;
                    clear: none
                }

                .cta_align_left .wpb_call_text {
                    float: right
                }

                #content .wpb_call_to_action .wpb_call_text,.wpb_call_to_action .wpb_call_text {
                    margin: 0;
                    padding-top: 0
                }

                .cta_align_bottom {
                    text-align: center
                }

                .cta_align_bottom .wpb_button {
                    position: static;
                    margin-top: 21.74px;
                    display: inline-block
                }

                .cta_no_button .wpb_call_text {
                    width: auto;
                    float: none
                }

                @media (max-width: 600px) {
                    .vc_responsive .cta_align_left .wpb_button,.vc_responsive .cta_align_right .wpb_button {
                        max-width:70%;
                        width: 70%;
                        float: none;
                        display: block;
                        margin: 3% auto
                    }

                    .vc_responsive .cta_align_left .wpb_call_text,.vc_responsive .cta_align_right .wpb_call_text {
                        width: auto;
                        max-width: none;
                        text-align: center
                    }
                }

                .vc_cta3-container {
                    margin-bottom: 35px;
                    margin-left: auto;
                    margin-right: auto
                }

                .vc_cta3-container::after,.vc_cta3-container::before {
                    display: table;
                    content: ' '
                }

                .vc_general.vc_cta3.vc_cta3-icons-bottom .vc_cta3-icons .vc_icon_element,.vc_general.vc_cta3.vc_cta3-icons-top .vc_cta3-icons .vc_icon_element {
                    display: inline-block
                }

                .vc_cta3-container.vc_cta3-size-xs {
                    width: 50%
                }

                .vc_cta3-container.vc_cta3-size-sm {
                    width: 60%
                }

                .vc_cta3-container.vc_cta3-size-md {
                    width: 70%
                }

                .vc_cta3-container.vc_cta3-size-lg {
                    width: 80%
                }

                .vc_cta3-container.vc_cta3-size-xl {
                    width: 90%
                }

                .vc_general.vc_cta3 {
                    border: 1px solid transparent;
                    font-size: 1em;
                    padding: 28px;
                    word-wrap: break-word
                }

                .vc_general.vc_cta3.vc_cta3-style-classic,.vc_general.vc_cta3.vc_cta3-style-custom {
                    border-color: #F0F0F0;
                    background-color: #f7f7f7
                }

                .vc_general.vc_cta3 .vc_cta3-content {
                    vertical-align: top
                }

                .vc_general.vc_cta3 .vc_cta3-content>:last-child,.vc_general.vc_cta3 .vc_cta3-icons>:last-child {
                    margin-bottom: 0
                }

                .vc_general.vc_cta3 .vc_cta3-actions {
                    vertical-align: middle;
                    white-space: nowrap
                }

                @media (min-width: 768px) {
                    .vc_general.vc_cta3 .vc_cta3-actions .vc_btn3-container {
                        margin:0
                    }
                }

                .vc_general.vc_cta3 .vc_cta3-icons {
                    vertical-align: middle
                }

                .vc_general.vc_cta3 h2,.vc_general.vc_cta3 h4 {
                    margin-top: 0;
                    margin-left: 0;
                    margin-right: 0
                }

                .vc_general.vc_cta3.vc_cta3-align-left .vc_cta3-content {
                    text-align: left
                }

                .vc_general.vc_cta3.vc_cta3-align-right .vc_cta3-content {
                    text-align: right
                }

                .vc_general.vc_cta3.vc_cta3-align-center .vc_cta3-content {
                    text-align: center
                }

                .vc_general.vc_cta3.vc_cta3-align-justify .vc_cta3-content {
                    text-align: justify
                }

                .separator_align_center,.vc_general.vc_cta3.vc_cta3-icons-bottom .vc_cta3-icons,.vc_general.vc_cta3.vc_cta3-icons-top .vc_cta3-icons,.vc_pie_chart {
                    text-align: center
                }

                .vc_general.vc_cta3.vc_cta3-icons-top .vc_cta3_content-container {
                    padding-top: 1em
                }

                .vc_general.vc_cta3.vc_cta3-icons-bottom .vc_cta3_content-container {
                    padding-bottom: 1em
                }

                .vc_general.vc_cta3.vc_cta3-icons-left .vc_cta3-icons {
                    display: table-cell
                }

                .vc_general.vc_cta3.vc_cta3-icons-left .vc_cta3_content-container {
                    display: table-cell;
                    padding-left: 1em
                }

                .vc_general.vc_cta3.vc_cta3-icons-right .vc_cta3-icons {
                    display: table-cell
                }

                .vc_general.vc_cta3.vc_cta3-icons-right .vc_cta3_content-container {
                    display: table-cell;
                    padding-right: 1em
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border {
                    position: relative
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border .vc_cta3-icons {
                    position: absolute
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right .vc_cta3-icons {
                    right: 0;
                    top: 50%;
                    -webkit-transform: translate(50%,-50%);
                    -ms-transform: translate(50%,-50%);
                    transform: translate(50%,-50%)
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-xs {
                    margin-right: 17px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-xs .vc_cta3_content-container {
                    padding-right: 0
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-sm .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-xs.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-right: 7px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-sm {
                    margin-right: 22px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-md .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-sm.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-right: 14px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-md {
                    margin-right: 28px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-lg .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-md.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-right: 21px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-lg {
                    margin-right: 35px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-lg.vc_cta3-icons-in-box .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-xl .vc_cta3_content-container {
                    padding-right: 28px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-xl {
                    margin-right: 50px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-right.vc_cta3-icon-size-xl.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-right: 35px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left .vc_cta3-icons {
                    left: 0;
                    top: 50%;
                    -webkit-transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    transform: translate(-50%,-50%)
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-xs {
                    margin-left: 17px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-xs .vc_cta3_content-container {
                    padding-left: 0
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-sm .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-xs.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-left: 7px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-sm {
                    margin-left: 22px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-md .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-sm.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-left: 14px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-md {
                    margin-left: 28px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-lg .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-md.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-left: 21px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-lg {
                    margin-left: 35px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-lg.vc_cta3-icons-in-box .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-xl .vc_cta3_content-container {
                    padding-left: 28px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-xl {
                    margin-left: 50px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-left.vc_cta3-icon-size-xl.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-left: 35px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top .vc_cta3-icons {
                    left: 50%;
                    top: 0;
                    -webkit-transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    transform: translate(-50%,-50%)
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-xs {
                    margin-top: 17px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-xs .vc_cta3_content-container {
                    padding-top: 0
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-sm .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-xs.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-top: 7px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-sm {
                    margin-top: 22px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-md .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-sm.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-top: 14px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-md {
                    margin-top: 28px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-lg .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-md.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-top: 21px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-lg {
                    margin-top: 35px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-lg.vc_cta3-icons-in-box .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-xl .vc_cta3_content-container {
                    padding-top: 28px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-xl {
                    margin-top: 50px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-top.vc_cta3-icon-size-xl.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-top: 35px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom .vc_cta3-icons {
                    left: 50%;
                    bottom: 0;
                    -webkit-transform: translate(-50%,50%);
                    -ms-transform: translate(-50%,50%);
                    transform: translate(-50%,50%)
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-xs {
                    margin-bottom: 17px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-xs .vc_cta3_content-container {
                    padding-bottom: 0
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-sm .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-xs.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-bottom: 7px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-sm {
                    margin-bottom: 22px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-md .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-sm.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-bottom: 14px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-md {
                    margin-bottom: 28px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-lg .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-md.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-bottom: 21px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-lg {
                    margin-bottom: 35px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-lg.vc_cta3-icons-in-box .vc_cta3_content-container,.vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-xl .vc_cta3_content-container {
                    padding-bottom: 28px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-xl {
                    margin-bottom: 50px
                }

                .vc_general.vc_cta3.vc_cta3-icons-on-border.vc_cta3-icons-bottom.vc_cta3-icon-size-xl.vc_cta3-icons-in-box .vc_cta3_content-container {
                    padding-bottom: 35px
                }

                .vc_general.vc_cta3.vc_cta3-actions-top .vc_cta3-content {
                    margin-top: 1em
                }

                .vc_general.vc_cta3.vc_cta3-actions-bottom .vc_cta3-content {
                    margin-bottom: 1em
                }

                @media (min-width: 768px) {
                    .vc_general.vc_cta3.vc_cta3-actions-left .vc_cta3-actions,.vc_general.vc_cta3.vc_cta3-actions-right .vc_cta3-actions {
                        max-width:30%;
                        display: table-cell
                    }

                    .vc_general.vc_cta3.vc_cta3-actions-left .vc_cta3-content {
                        padding-left: 28px;
                        display: table-cell
                    }

                    .vc_general.vc_cta3.vc_cta3-actions-right .vc_cta3-content {
                        padding-right: 28px;
                        display: table-cell
                    }
                }

                .vc_general.vc_cta3.vc_cta3-style-outline {
                    border-width: 3px
                }

                .vc_general.vc_cta3.vc_cta3-shape-square {
                    border-radius: 0
                }

                .vc_general.vc_cta3.vc_cta3-shape-rounded {
                    border-radius: 5px
                }

                .vc_general.vc_cta3.vc_cta3-shape-round {
                    border-radius: 4em
                }

                .vc_general.vc_cta3.vc_cta3-color-blue.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #5472D2
                }

                .vc_general.vc_cta3.vc_cta3-color-blue.vc_cta3-style-flat {
                    color: #c9d2f0;
                    border-color: transparent;
                    background-color: #5472D2
                }

                .vc_general.vc_cta3.vc_cta3-color-blue.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-blue.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #3253bc;
                    color: #c9d2f0;
                    border-color: transparent;
                    background-color: #5472D2
                }

                .vc_general.vc_cta3.vc_cta3-color-blue.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-blue.vc_cta3-style-outline {
                    border-color: #5472D2;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-blue.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #5472D2
                }

                .vc_general.vc_cta3.vc_cta3-color-turquoise.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #00C1CF
                }

                .vc_general.vc_cta3.vc_cta3-color-turquoise.vc_cta3-style-flat {
                    color: #d3f5f1;
                    border-color: transparent;
                    background-color: #00C1CF
                }

                .vc_general.vc_cta3.vc_cta3-color-turquoise.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-turquoise.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #008d97;
                    color: #d3f5f1;
                    border-color: transparent;
                    background-color: #00C1CF
                }

                .vc_general.vc_cta3.vc_cta3-color-turquoise.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-turquoise.vc_cta3-style-outline {
                    border-color: #00C1CF;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-turquoise.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #00C1CF
                }

                .vc_general.vc_cta3.vc_cta3-color-pink.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #FE6C61
                }

                .vc_general.vc_cta3.vc_cta3-color-pink.vc_cta3-style-flat {
                    color: #fcdbd7;
                    border-color: transparent;
                    background-color: #FE6C61
                }

                .vc_general.vc_cta3.vc_cta3-color-pink.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-pink.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #fe3829;
                    color: #fcdbd7;
                    border-color: transparent;
                    background-color: #FE6C61
                }

                .vc_general.vc_cta3.vc_cta3-color-pink.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-pink.vc_cta3-style-outline {
                    border-color: #FE6C61;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-pink.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #FE6C61
                }

                .vc_general.vc_cta3.vc_cta3-color-violet.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #8D6DC4
                }

                .vc_general.vc_cta3.vc_cta3-color-violet.vc_cta3-style-flat {
                    color: #e1d5f5;
                    border-color: transparent;
                    background-color: #8D6DC4
                }

                .vc_general.vc_cta3.vc_cta3-color-violet.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-violet.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #6e48b1;
                    color: #e1d5f5;
                    border-color: transparent;
                    background-color: #8D6DC4
                }

                .vc_general.vc_cta3.vc_cta3-color-violet.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-violet.vc_cta3-style-outline {
                    border-color: #8D6DC4;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-violet.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #8D6DC4
                }

                .vc_general.vc_cta3.vc_cta3-color-peacoc.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #4CADC9
                }

                .vc_general.vc_cta3.vc_cta3-color-peacoc.vc_cta3-style-flat {
                    color: #d0edf5;
                    border-color: transparent;
                    background-color: #4CADC9
                }

                .vc_general.vc_cta3.vc_cta3-color-peacoc.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-peacoc.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #338faa;
                    color: #d0edf5;
                    border-color: transparent;
                    background-color: #4CADC9
                }

                .vc_general.vc_cta3.vc_cta3-color-peacoc.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-peacoc.vc_cta3-style-outline {
                    border-color: #4CADC9;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-peacoc.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #4CADC9
                }

                .vc_general.vc_cta3.vc_cta3-color-chino.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #CEC2AB
                }

                .vc_general.vc_cta3.vc_cta3-color-chino.vc_cta3-style-flat {
                    color: #f7f3eb;
                    border-color: transparent;
                    background-color: #CEC2AB
                }

                .vc_general.vc_cta3.vc_cta3-color-chino.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-chino.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #b9a888;
                    color: #f7f3eb;
                    border-color: transparent;
                    background-color: #CEC2AB
                }

                .vc_general.vc_cta3.vc_cta3-color-chino.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-chino.vc_cta3-style-outline {
                    border-color: #CEC2AB;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-chino.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #CEC2AB
                }

                .vc_general.vc_cta3.vc_cta3-color-mulled-wine.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #50485B
                }

                .vc_general.vc_cta3.vc_cta3-color-mulled-wine.vc_cta3-style-flat {
                    color: #e2ddeb;
                    border-color: transparent;
                    background-color: #50485B
                }

                .vc_general.vc_cta3.vc_cta3-color-mulled-wine.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-mulled-wine.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #342f3c;
                    color: #e2ddeb;
                    border-color: transparent;
                    background-color: #50485B
                }

                .vc_general.vc_cta3.vc_cta3-color-mulled-wine.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-mulled-wine.vc_cta3-style-outline {
                    border-color: #50485B;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-mulled-wine.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #50485B
                }

                .vc_general.vc_cta3.vc_cta3-color-vista-blue.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #75D69C
                }

                .vc_general.vc_cta3.vc_cta3-color-vista-blue.vc_cta3-style-flat {
                    color: #e1f5e9;
                    border-color: transparent;
                    background-color: #75D69C
                }

                .vc_general.vc_cta3.vc_cta3-color-vista-blue.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-vista-blue.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #4ac97d;
                    color: #e1f5e9;
                    border-color: transparent;
                    background-color: #75D69C
                }

                .vc_general.vc_cta3.vc_cta3-color-vista-blue.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-vista-blue.vc_cta3-style-outline {
                    border-color: #75D69C;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-vista-blue.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #75D69C
                }

                .vc_general.vc_cta3.vc_cta3-color-orange.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #F7BE68
                }

                .vc_general.vc_cta3.vc_cta3-color-orange.vc_cta3-style-flat {
                    color: #faf0e1;
                    border-color: transparent;
                    background-color: #F7BE68
                }

                .vc_general.vc_cta3.vc_cta3-color-orange.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-orange.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #f4a733;
                    color: #faf0e1;
                    border-color: transparent;
                    background-color: #F7BE68
                }

                .vc_general.vc_cta3.vc_cta3-color-orange.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-orange.vc_cta3-style-outline {
                    border-color: #F7BE68;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-orange.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #F7BE68
                }

                .vc_general.vc_cta3.vc_cta3-color-sky.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #5AA1E3
                }

                .vc_general.vc_cta3.vc_cta3-color-sky.vc_cta3-style-flat {
                    color: #dce9f5;
                    border-color: transparent;
                    background-color: #5AA1E3
                }

                .vc_general.vc_cta3.vc_cta3-color-sky.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-sky.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #2a86db;
                    color: #dce9f5;
                    border-color: transparent;
                    background-color: #5AA1E3
                }

                .vc_general.vc_cta3.vc_cta3-color-sky.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-sky.vc_cta3-style-outline {
                    border-color: #5AA1E3;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-sky.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #5AA1E3
                }

                .vc_general.vc_cta3.vc_cta3-color-green.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #6DAB3C
                }

                .vc_general.vc_cta3.vc_cta3-color-green.vc_cta3-style-flat {
                    color: #e5f2da;
                    border-color: transparent;
                    background-color: #6DAB3C
                }

                .vc_general.vc_cta3.vc_cta3-color-green.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-green.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #53812d;
                    color: #e5f2da;
                    border-color: transparent;
                    background-color: #6DAB3C
                }

                .vc_general.vc_cta3.vc_cta3-color-green.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-green.vc_cta3-style-outline {
                    border-color: #6DAB3C;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-green.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #6DAB3C
                }

                .vc_general.vc_cta3.vc_cta3-color-juicy-pink.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #F4524D
                }

                .vc_general.vc_cta3.vc_cta3-color-juicy-pink.vc_cta3-style-flat {
                    color: #fce2e1;
                    border-color: transparent;
                    background-color: #F4524D
                }

                .vc_general.vc_cta3.vc_cta3-color-juicy-pink.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-juicy-pink.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #f11f18;
                    color: #fce2e1;
                    border-color: transparent;
                    background-color: #F4524D
                }

                .vc_general.vc_cta3.vc_cta3-color-juicy-pink.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-juicy-pink.vc_cta3-style-outline {
                    border-color: #F4524D;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-juicy-pink.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #F4524D
                }

                .vc_general.vc_cta3.vc_cta3-color-sandy-brown.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #F79468
                }

                .vc_general.vc_cta3.vc_cta3-color-sandy-brown.vc_cta3-style-flat {
                    color: #f7e1d7;
                    border-color: transparent;
                    background-color: #F79468
                }

                .vc_general.vc_cta3.vc_cta3-color-sandy-brown.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-sandy-brown.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #f46e33;
                    color: #f7e1d7;
                    border-color: transparent;
                    background-color: #F79468
                }

                .vc_general.vc_cta3.vc_cta3-color-sandy-brown.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-sandy-brown.vc_cta3-style-outline {
                    border-color: #F79468;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-sandy-brown.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #F79468
                }

                .vc_general.vc_cta3.vc_cta3-color-purple.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #B97EBB
                }

                .vc_general.vc_cta3.vc_cta3-color-purple.vc_cta3-style-flat {
                    color: #f4dff5;
                    border-color: transparent;
                    background-color: #B97EBB
                }

                .vc_general.vc_cta3.vc_cta3-color-purple.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-purple.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #a559a8;
                    color: #f4dff5;
                    border-color: transparent;
                    background-color: #B97EBB
                }

                .vc_general.vc_cta3.vc_cta3-color-purple.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-purple.vc_cta3-style-outline {
                    border-color: #B97EBB;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-purple.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #B97EBB
                }

                .vc_general.vc_cta3.vc_cta3-color-black.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #2A2A2A
                }

                .vc_general.vc_cta3.vc_cta3-color-black.vc_cta3-style-flat {
                    color: #d9d9d9;
                    border-color: transparent;
                    background-color: #2A2A2A
                }

                .vc_general.vc_cta3.vc_cta3-color-black.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-black.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #0e0e0e;
                    color: #d9d9d9;
                    border-color: transparent;
                    background-color: #2A2A2A
                }

                .vc_general.vc_cta3.vc_cta3-color-black.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #fff
                }

                .vc_general.vc_cta3.vc_cta3-color-black.vc_cta3-style-outline {
                    border-color: #2A2A2A;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-black.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #2A2A2A
                }

                .vc_general.vc_cta3.vc_cta3-color-grey.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #EBEBEB
                }

                .vc_general.vc_cta3.vc_cta3-color-grey.vc_cta3-style-flat {
                    color: #9d9d9e;
                    border-color: transparent;
                    background-color: #EBEBEB
                }

                .vc_general.vc_cta3.vc_cta3-color-grey.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #666
                }

                .vc_general.vc_cta3.vc_cta3-color-grey.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #cfcfcf;
                    color: #9d9d9e;
                    border-color: transparent;
                    background-color: #EBEBEB
                }

                .vc_general.vc_cta3.vc_cta3-color-grey.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #666
                }

                .vc_general.vc_cta3.vc_cta3-color-grey.vc_cta3-style-outline {
                    border-color: #EBEBEB;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-grey.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #EBEBEB
                }

                .vc_general.vc_cta3.vc_cta3-color-white.vc_cta3-style-classic .vc_cta3-content-header {
                    color: #FFF
                }

                .vc_general.vc_cta3.vc_cta3-color-white.vc_cta3-style-flat {
                    color: #9d9d9e;
                    border-color: transparent;
                    background-color: #FFF
                }

                .vc_general.vc_cta3.vc_cta3-color-white.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #666
                }

                .vc_general.vc_cta3.vc_cta3-color-white.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #e3e3e3;
                    color: #9d9d9e;
                    border-color: transparent;
                    background-color: #FFF
                }

                .vc_general.vc_cta3.vc_cta3-color-white.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #666
                }

                .vc_general.vc_cta3.vc_cta3-color-white.vc_cta3-style-outline {
                    border-color: #FFF;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-white.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #FFF
                }

                .vc_general.vc_cta3.vc_cta3-color-classic.vc_cta3-style-flat {
                    color: #9d9d9e;
                    border-color: transparent;
                    background-color: #F0F0F0
                }

                .vc_general.vc_cta3.vc_cta3-color-classic.vc_cta3-style-flat .vc_cta3-content-header {
                    color: #666
                }

                .vc_general.vc_cta3.vc_cta3-color-classic.vc_cta3-style-3d {
                    box-shadow: 0 5px 0 #d4d4d4;
                    color: #9d9d9e;
                    border-color: transparent;
                    background-color: #F0F0F0
                }

                .vc_general.vc_cta3.vc_cta3-color-classic.vc_cta3-style-3d .vc_cta3-content-header {
                    color: #666
                }

                .vc_general.vc_cta3.vc_cta3-color-classic.vc_cta3-style-outline {
                    border-color: #F0F0F0;
                    background-color: transparent
                }

                .vc_general.vc_cta3.vc_cta3-color-classic.vc_cta3-style-outline .vc_cta3-content-header {
                    color: #F0F0F0
                }

                .vc_cta3.vc_cta3-icon-size-xs .vc_icon_element .vc_icon_element-inner {
                    height: 1em;
                    width: 1em
                }

                .vc_cta3.vc_cta3-icon-size-sm .vc_icon_element .vc_icon_element-inner {
                    height: 2em;
                    width: 2em
                }

                .vc_cta3.vc_cta3-icon-size-md .vc_icon_element .vc_icon_element-inner {
                    height: 3em;
                    width: 3em
                }

                .vc_cta3.vc_cta3-icon-size-lg .vc_icon_element .vc_icon_element-inner {
                    height: 4em;
                    width: 4em
                }

                .vc_cta3.vc_cta3-icon-size-xl .vc_icon_element .vc_icon_element-inner {
                    height: 5em;
                    width: 5em
                }

                .wpb_gmaps_widget .wpb_wrapper {
                    background-color: #f7f7f7;
                    padding: 5px
                }

                .wpb_gmaps_widget .wpb_map_wraper iframe {
                    margin-bottom: 0;
                    padding: 0;
                    display: block;
                    width: 100%;
                    border: none
                }

                .wpb_gmaps_widget.vc_map_responsive .wpb_map_wraper {
                    position: relative;
                    padding-bottom: 56.25%;
                    height: 0
                }

                .wpb_gmaps_widget.vc_map_responsive .wpb_map_wraper iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    height: 100%
                }

                .wpb_accordion_section .wpb_accordion_header a:focus,.wpb_content_element .wpb_tabs_nav li a:focus,.wpb_tour_next_prev_nav a:focus {
                    outline: 0
                }

                .wpb_content_element .wpb_tabs_nav,.wpb_content_element .wpb_tour_tabs_wrapper {
                    padding: 0
                }

                .wpb_content_element .wpb_tabs_nav {
                    margin: 0;
                    padding-left: 0!important;
                    text-indent: inherit!important
                }

                #content .wpb_content_element .wpb_tabs_nav {
                    margin: 0
                }

                .wpb_content_element .wpb_tabs_nav li {
                    background-color: #FFF;
                    white-space: nowrap;
                    padding: 0;
                    background-image: none;
                    list-style: none!important
                }

                .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header,.wpb_content_element .wpb_tabs_nav li.ui-tabs-active,.wpb_content_element .wpb_tabs_nav li:hover,.wpb_content_element.wpb_tabs .wpb_tour_tabs_wrapper .wpb_tab {
                    background-color: #f7f7f7
                }

                .wpb_content_element .wpb_tabs_nav li:after,.wpb_content_element .wpb_tabs_nav li:before {
                    display: none!important
                }

                .wpb_content_element .wpb_tour_tabs_wrapper .wpb_ui-tabs-hide {
                    display: none
                }

                .wpb_content_element .wpb_accordion_header a,.wpb_content_element .wpb_tour_tabs_wrapper .wpb_tabs_nav a {
                    border-bottom: none;
                    text-decoration: none;
                    display: block;
                    padding: .5em 1em
                }

                .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_content,.wpb_content_element .wpb_tour_tabs_wrapper .wpb_tab {
                    padding: 1em
                }

                .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_content .wpb_row:last-child>div>div.wpb_wrapper .wpb_content_element:last-child,.wpb_content_element .wpb_accordion_wrapper .wpb_accordion_content>.wpb_content_element:last-child,.wpb_content_element .wpb_tour_tabs_wrapper .wpb_tab .wpb_row:last-child>div>div.wpb_wrapper .wpb_content_element:last-child,.wpb_content_element .wpb_tour_tabs_wrapper .wpb_tab>.wpb_content_element:last-child {
                    margin-bottom: 0
                }

                .wpb_tabs .wpb_tabs_nav li {
                    float: left;
                    margin: 0 1px 0 0
                }

                .wpb_tour .wpb_tabs_nav {
                    float: left;
                    width: 31.66666667%
                }

                .wpb_tour .wpb_tabs_nav li {
                    margin: 0 0 1px;
                    clear: left;
                    width: 100%
                }

                .wpb_tour .wpb_tabs_nav a {
                    width: 100%
                }

                .wpb_tour .wpb_tour_tabs_wrapper .wpb_tab {
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    border: none;
                    float: left;
                    width: 68.33333333%;
                    padding: 0 0 0 21.74px
                }

                .wpb_tour_next_prev_nav {
                    margin-left: 31.66666667%;
                    padding-left: 21.74px;
                    font-size: 80%
                }

                .wpb_tour_next_prev_nav a {
                    border-bottom: 1px dotted;
                    text-decoration: none
                }

                .wpb_tour_next_prev_nav a:hover {
                    text-decoration: none;
                    border-bottom: none
                }

                .wpb_tour_next_prev_nav span {
                    width: 48%;
                    display: inline-block;
                    padding-top: 1em;
                    float: left
                }

                .wpb_tour_next_prev_nav span.wpb_next_slide {
                    text-align: right;
                    float: right
                }

                .wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header {
                    margin: 0 0 1px;
                    padding-top: 0;
                    position: relative;
                    text-transform: none;
                    font-weight: inherit;
                    font-size: inherit;
                    font-family: inherit;
                    line-height: inherit;
                    letter-spacing: inherit
                }

                .wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header a {
                    padding-left: 1em
                }

                .wpb_accordion .wpb_accordion_wrapper .ui-state-active .ui-icon,.wpb_accordion .wpb_accordion_wrapper .ui-state-default .ui-icon {
                    display: block;
                    width: 16px;
                    height: 16px;
                    background-image: url(../images/toggle_open.png);
                    background-repeat: no-repeat;
                    position: absolute;
                    right: .7em;
                    top: .7em
                }

                .wpb_accordion .wpb_accordion_wrapper .ui-state-active .ui-icon {
                    background-image: url(../images/toggle_close.png)
                }

                @media (max-width: 480px) {
                    .vc_responsive .wpb_tour .wpb_tab,.vc_responsive .wpb_tour .wpb_tour_tabs_wrapper .wpb_tabs_nav,.vc_responsive .wpb_tour_next_prev_nav {
                        width:100%;
                        float: none;
                        margin-left: 0
                    }

                    .vc_responsive .wpb_tour_next_prev_nav {
                        width: auto;
                        padding: 0 1em
                    }

                    .vc_responsive #content .wpb_tour .wpb_tour_tabs_wrapper .wpb_tabs_nav {
                        margin-bottom: 1em
                    }

                    .vc_responsive .wpb_tour .wpb_tab {
                        padding-left: 1em;
                        padding-right: 1em
                    }
                }

                .grid_layout-thumbnail .post-thumb,body ul.wpb_thumbnails-fluid li .entry-content :last-child {
                    margin-bottom: 0
                }

                .wpb_column .wpb_wrapper .wpb_teaser_grid {
                    float: none
                }

                body ul.wpb_thumbnails-fluid li {
                    padding: 0;
                    margin-left: 0;
                    background-image: none;
                    list-style: none!important
                }

                body ul.wpb_thumbnails-fluid li:after,body ul.wpb_thumbnails-fluid li:before {
                    display: none!important
                }

                .wpb_row .wpb_filtered_grid ul.wpb_thumbnails-fluid,.wpb_row .wpb_grid ul.wpb_thumbnails-fluid {
                    padding: 0;
                    overflow: visible!important
                }

                .wpb_teaser_grid .entry-content {
                    margin: 0;
                    padding: 0;
                    width: 100%
                }

                .grid_layout-thumbnail .post-thumb img {
                    max-width: 100%
                }

                .wpb_carousel .wpb_wrapper {
                    position: relative
                }

                .wpb_carousel .next,.wpb_carousel .prev {
                    position: absolute;
                    top: 3px;
                    background-color: #f7f7f7;
                    padding: 0 6px;
                    font-size: 12px;
                    z-index: 10;
                    text-decoration: none;
                    transition: all .2s linear;
                    -moz-transition: all .2s linear;
                    -webkit-transition: all .2s linear;
                    -o-transition: all .2s linear
                }

                .wpb_carousel .next:hover,.wpb_carousel .prev:hover {
                    background-color: #F0F0F0
                }

                .wpb_carousel .next:focus,.wpb_carousel .prev:focus {
                    outline: 0;
                    text-decoration: none
                }

                .wpb_carousel .prev {
                    right: 30px
                }

                .wpb_carousel .next {
                    right: 0
                }

                .wpb_carousel .wpb_thumbnails-fluid {
                    width: 100%
                }

                .wpb_carousel .wpb_thumbnails-fluid>[class*=vc_span] {
                    height: auto!important
                }

                .wpb_categories_filter,.wpb_teaser_grid .categories_filter {
                    list-style: none;
                    padding: 0;
                    margin: 0 0 10px
                }

                .wpb_categories_filter li,.wpb_teaser_grid .categories_filter li {
                    display: block;
                    float: left;
                    margin: 0 10px 10px 0;
                    background-image: none;
                    list-style: none!important
                }

                .wpb_categories_filter li:after,.wpb_categories_filter li:before,.wpb_teaser_grid .categories_filter li:after,.wpb_teaser_grid .categories_filter li:before {
                    display: none!important
                }

                .wpb_categories_filter li a,.wpb_teaser_grid .categories_filter li a {
                    border: none;
                    text-decoration: none
                }

                .wpb_categories_filter li a:hover,.wpb_categories_filter li.active a,.wpb_teaser_grid .categories_filter li a:hover,.wpb_teaser_grid .categories_filter li.active a {
                    border-bottom: 1px dotted
                }

                @media (max-width: 480px) {
                    .vc_responsive .wpb_row ul.wpb_thumbnails-fluid {
                        margin-left:0;
                        width: auto
                    }

                    .vc_responsive .wpb_row .wpb_teaser_grid ul.wpb_thumbnails-fluid [class*=vc_col-] {
                        width: 100%;
                        float: none;
                        display: block;
                        margin-left: 0;
                        margin-right: 0
                    }
                }

                .wpb_image_grid .wpb_image_grid_ul {
                    margin: 0;
                    padding: 0
                }

                .wpb_image_grid .wpb_image_grid_ul>li {
                    background-image: none;
                    list-style: none!important
                }

                .wpb_image_grid .wpb_image_grid_ul>li:after,.wpb_image_grid .wpb_image_grid_ul>li:before {
                    display: none!important
                }

                .wpb_image_grid .wpb_image_grid_ul .isotope-item {
                    list-style: none;
                    margin: 0 1px 1px 0;
                    max-width: 100%;
                    float: left
                }

                .wpb_image_grid .wpb_image_grid_ul a {
                    display: block
                }

                .wpb_image_grid .wpb_image_grid_ul img {
                    display: block;
                    max-width: 100%;
                    height: auto
                }

                .wpb_gallery .theme-default .nivoSlider {
                    margin-bottom: 0
                }

                .wpb_gallery .theme-default .nivo-controlNav {
                    padding: 10px 0 3px
                }

                .wpb_gallery .wpb_flexslider .flex-control-nav {
                    bottom: auto;
                    top: 100%;
                    margin-top: 15px
                }

                .wpb_gallery .wpb_flexslider .flex-direction-nav a {
                    border: none;
                    -webkit-box-shadow: none;
                    -moz-box-shadow: none;
                    box-shadow: none
                }

                .wpb_gallery .wpb_flexslider .flex-direction-nav a:hover {
                    -webkit-box-shadow: none;
                    -moz-box-shadow: none;
                    box-shadow: none
                }

                .wpb_gallery .wpb_flexslider .flex-direction-nav a:before {
                    line-height: 1
                }

                .wpb_gallery .wpb_flexslider .flex-control-paging {
                    z-index: 10
                }

                #content .wpb_gallery_slides ul.flex-direction-nav,#content .wpb_gallery_slides ul.slides,.content .wpb_gallery_slides ul.flex-direction-nav,.content .wpb_gallery_slides ul.slides,.wpb_content_element .wpb_gallery_slides ul li,.wpb_gallery_slides ul.flex-direction-nav,.wpb_gallery_slides ul.slides,body .wpb_gallery_slides ul li {
                    list-style: none;
                    padding: 0;
                    background-image: none;
                    margin: 0
                }

                .flickr_badge_image {
                    margin: 0 10px 10px 0;
                    width: 72px;
                    height: 72px;
                    float: left;
                    background: 0 0;
                    padding: 0
                }

                .flickr_badge_image a {
                    border: none
                }

                .flickr_badge_image img {
                    margin: 0;
                    overflow: hidden;
                    position: relative;
                    width: 100%;
                    height: 100%;
                    max-width: 100%;
                    max-height: 100%
                }

                .wpb_flickr_widget p.flickr_stream_wrap {
                    clear: both;
                    margin-bottom: 0;
                    font-size: 80%
                }

                .wpb_flickr_widget p.flickr_stream_wrap a {
                    background-image: url(../images/flickr.png);
                    background-repeat: no-repeat;
                    background-position: left center;
                    padding-left: 25px;
                    display: inline-block
                }

                .wpb_video_widget.vc_video-el-width-10 .wpb_wrapper {
                    width: 10%
                }

                .wpb_video_widget.vc_video-el-width-20 .wpb_wrapper {
                    width: 20%
                }

                .wpb_video_widget.vc_video-el-width-30 .wpb_wrapper {
                    width: 30%
                }

                .wpb_video_widget.vc_video-el-width-40 .wpb_wrapper {
                    width: 40%
                }

                .wpb_video_widget.vc_video-el-width-50 .wpb_wrapper {
                    width: 50%
                }

                .wpb_video_widget.vc_video-el-width-60 .wpb_wrapper {
                    width: 60%
                }

                .wpb_video_widget.vc_video-el-width-70 .wpb_wrapper {
                    width: 70%
                }

                .wpb_video_widget.vc_video-el-width-80 .wpb_wrapper {
                    width: 80%
                }

                .wpb_video_widget.vc_video-el-width-90 .wpb_wrapper {
                    width: 90%
                }

                .wpb_video_widget.vc_video-el-width-100 .wpb_wrapper {
                    width: 100%
                }

                .wpb_video_widget .wpb_video_wrapper {
                    padding-top: 56.25%;
                    position: relative;
                    width: 100%
                }

                .wpb_video_widget .wpb_video_wrapper>div {
                    padding-top: 0!important;
                    position: static
                }

                .wpb_video_widget.vc_video-aspect-ratio-169 .wpb_video_wrapper {
                    padding-top: 56.25%
                }

                .wpb_video_widget.vc_video-aspect-ratio-43 .wpb_video_wrapper {
                    padding-top: 75%
                }

                .wpb_video_widget.vc_video-aspect-ratio-235 .wpb_video_wrapper {
                    padding-top: 42.55319149%
                }

                .wpb_video_widget.vc_video-align-left .wpb_wrapper {
                    float: left
                }

                .wpb_video_widget.vc_video-align-center .wpb_wrapper {
                    margin: 0 auto
                }

                .wpb_video_widget.vc_video-align-right .wpb_wrapper {
                    float: right
                }

                .wpb_video_widget .wpb_wrapper {
                    position: relative
                }

                .wpb_video_widget .wpb_wrapper iframe {
                    width: 100%;
                    height: 100%;
                    display: block;
                    position: absolute;
                    margin: 0;
                    top: 0;
                    left: 0;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box
                }

                .wpb_video_wrapper .fluid-width-video-wrapper {
                    padding-top: 0!important;
                    position: static
                }

                .wpb_posts_slider .flex-caption,.wpb_posts_slider .nivo-caption {
                    background-color: #f7f7f7;
                    opacity: 1;
                    filter: alpha(opacity=100);
                    color: inherit;
                    padding: 10px 15px;
                    position: static
                }

                .wpb_posts_slider .wpb_gallery_slides>ul>li {
                    background-image: none;
                    list-style: none!important
                }

                .wpb_posts_slider .wpb_gallery_slides>ul>li:after,.wpb_posts_slider .wpb_gallery_slides>ul>li:before {
                    display: none!important
                }

                .vc_progress_bar .vc_single_bar {
                    background: #f7f7f7;
                    position: relative;
                    margin-bottom: 11.67px;
                    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.1) inset;
                    box-shadow: 0 1px 2px rgba(0,0,0,.1) inset;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    border-radius: 3px
                }

                .vc_progress_bar .vc_single_bar:last-child {
                    margin-bottom: 0
                }

                .vc_progress_bar .vc_single_bar .vc_label {
                    display: block;
                    padding: .5em 1em;
                    position: relative;
                    z-index: 1
                }

                .vc_progress_bar .vc_single_bar .vc_bar {
                    display: block;
                    position: absolute;
                    height: 100%;
                    background-color: #e0e0e0;
                    width: 0%;
                    top: 0;
                    left: 0;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    border-radius: 3px;
                    transition: width 1s linear;
                    -moz-transition: width 1s linear;
                    -webkit-transition: width 1s linear;
                    -o-transition: width 1s linear
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_blue .vc_bar,.vc_progress_bar.vc_progress-bar-color-bar_blue .vc_single_bar .vc_bar {
                    background-color: #0074CC
                }

                .vc_progress_bar .vc_single_bar .vc_bar.striped {
                    background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,.15)),color-stop(.75,rgba(255,255,255,.15)),color-stop(.75,transparent),to(transparent));
                    background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
                    background-image: -moz-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
                    background-image: -o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
                    background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
                    -webkit-background-size: 40px 40px;
                    -moz-background-size: 40px 40px;
                    -o-background-size: 40px 40px;
                    background-size: 40px 40px
                }

                .vc_progress_bar .vc_single_bar .vc_bar.animated {
                    -webkit-animation: progress-bar-stripes 2s linear infinite;
                    -moz-animation: progress-bar-stripes 2s linear infinite;
                    -ms-animation: progress-bar-stripes 2s linear infinite;
                    -o-animation: progress-bar-stripes 2s linear infinite;
                    animation: progress-bar-stripes 2s linear infinite
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_turquoise .vc_bar,.vc_progress_bar.vc_progress-bar-color-bar_turquoise .vc_single_bar .vc_bar {
                    background-color: #49afcd
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_green .vc_bar,.vc_progress_bar.vc_progress-bar-color-bar_green .vc_single_bar .vc_bar {
                    background-color: #5bb75b
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_orange .vc_bar,.vc_progress_bar.vc_progress-bar-color-bar_orange .vc_single_bar .vc_bar {
                    background-color: #faa732
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_red .vc_bar,.vc_progress_bar.vc_progress-bar-color-bar_red .vc_single_bar .vc_bar {
                    background-color: #da4f49
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-bar_black .vc_bar,.vc_progress_bar.vc_progress-bar-color-bar_black .vc_single_bar .vc_bar {
                    background-color: #414141
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-blue .vc_bar,.vc_progress_bar.vc_progress-bar-color-blue .vc_single_bar .vc_bar {
                    background-color: #5472D2
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-turquoise .vc_bar,.vc_progress_bar.vc_progress-bar-color-turquoise .vc_single_bar .vc_bar {
                    background-color: #00C1CF
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-pink .vc_bar,.vc_progress_bar.vc_progress-bar-color-pink .vc_single_bar .vc_bar {
                    background-color: #FE6C61
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-turquoise .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-violet .vc_bar,.vc_progress_bar.vc_progress-bar-color-violet .vc_single_bar .vc_bar {
                    background-color: #8D6DC4
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-peacoc .vc_bar,.vc_progress_bar.vc_progress-bar-color-peacoc .vc_single_bar .vc_bar {
                    background-color: #4CADC9
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-chino .vc_bar,.vc_progress_bar.vc_progress-bar-color-chino .vc_single_bar .vc_bar {
                    background-color: #CEC2AB
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-mulled-wine .vc_bar,.vc_progress_bar.vc_progress-bar-color-mulled-wine .vc_single_bar .vc_bar {
                    background-color: #50485B
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-vista-blue .vc_bar,.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-vista_blue .vc_bar,.vc_progress_bar.vc_progress-bar-color-vista-blue .vc_single_bar .vc_bar,.vc_progress_bar.vc_progress-bar-color-vista_blue .vc_single_bar .vc_bar {
                    background-color: #75D69C
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-black .vc_bar,.vc_progress_bar.vc_progress-bar-color-black .vc_single_bar .vc_bar {
                    background-color: #2A2A2A
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-grey .vc_bar,.vc_progress_bar.vc_progress-bar-color-grey .vc_single_bar .vc_bar {
                    background-color: #EBEBEB
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-black .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-grey .vc_label,.vc_progress_bar.vc_progress-bar-color-grey .vc_single_bar .vc_label {
                    color: #666;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-orange .vc_bar,.vc_progress_bar.vc_progress-bar-color-orange .vc_single_bar .vc_bar {
                    background-color: #F7BE68
                }

                .vc_progress_bar.vc_progress-bar-color-orange .vc_single_bar .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-sky .vc_bar,.vc_progress_bar.vc_progress-bar-color-sky .vc_single_bar .vc_bar {
                    background-color: #5AA1E3
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-orange .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar.vc_progress-bar-color-sky .vc_single_bar .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-green .vc_bar,.vc_progress_bar.vc_progress-bar-color-green .vc_single_bar .vc_bar {
                    background-color: #6DAB3C
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-sky .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar.vc_progress-bar-color-green .vc_single_bar .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-juicy-pink .vc_bar,.vc_progress_bar.vc_progress-bar-color-juicy-pink .vc_single_bar .vc_bar {
                    background-color: #F4524D
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-green .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar.vc_progress-bar-color-juicy-pink .vc_single_bar .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-sandy-brown .vc_bar,.vc_progress_bar.vc_progress-bar-color-sandy-brown .vc_single_bar .vc_bar {
                    background-color: #F79468
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-juicy-pink .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar.vc_progress-bar-color-sandy-brown .vc_single_bar .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-purple .vc_bar,.vc_progress_bar.vc_progress-bar-color-purple .vc_single_bar .vc_bar {
                    background-color: #B97EBB
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-sandy-brown .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar.vc_progress-bar-color-purple .vc_single_bar .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-white .vc_bar,.vc_progress_bar.vc_progress-bar-color-white .vc_single_bar .vc_bar {
                    background-color: #FFF
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-purple .vc_label {
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                .vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-white .vc_label,.vc_progress_bar.vc_progress-bar-color-white .vc_single_bar .vc_label {
                    color: #666;
                    text-shadow: 0 -1px 0 rgba(0,0,0,.25)
                }

                @-webkit-keyframes progress-bar-stripes {
                    from {
                        background-position: 40px 0
                    }

                    to {
                        background-position: 0 0
                    }
                }

                @-moz-keyframes progress-bar-stripes {
                    from {
                        background-position: 40px 0
                    }

                    to {
                        background-position: 0 0
                    }
                }

                @-ms-keyframes progress-bar-stripes {
                    from {
                        background-position: 40px 0
                    }

                    to {
                        background-position: 0 0
                    }
                }

                @-o-keyframes progress-bar-stripes {
                    from {
                        background-position: 0 0
                    }

                    to {
                        background-position: 40px 0
                    }
                }

                @keyframes progress-bar-stripes {
                    from {
                        background-position: 40px 0
                    }

                    to {
                        background-position: 0 0
                    }
                }

                .vc_pie_chart {
                    z-index: 0;
                    opacity: 0;
                    filter: alpha(opacity=0)
                }

                .vc_pie_chart.vc_ready {
                    opacity: 1;
                    filter: alpha(opacity=100)
                }

                .vc_pie_chart .vc_pie_wrapper {
                    position: relative;
                    margin: 0 auto
                }

                .vc_pie_chart canvas {
                    position: relative;
                    z-index: 1
                }

                .vc_pie_chart .vc_pie_chart_value,.vc_pie_chart_back {
                    display: block;
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    left: 0
                }

                .vc_pie_chart .vc_pie_chart_value {
                    font-size: 200%;
                    text-align: center
                }

                .vc_pie_chart_back {
                    border: 6px solid #f7f7f7;
                    border-radius: 50%;
                    opacity: .3;
                    filter: alpha(opacity=30);
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box
                }

                .vc_images_carousel .vc_carousel-control {
                    border: none
                }

                .vc_carousel .vc_carousel-control {
                    text-shadow: none;
                    border: none;
                    transition: all .2s linear;
                    -moz-transition: all .2s linear;
                    -webkit-transition: all .2s linear;
                    -o-transition: all .2s linear
                }

                .vc_carousel .vc_carousel-control:active,.vc_carousel .vc_carousel-control:focus {
                    outline: 0
                }

                .vc_carousel .vc_carousel-indicators li {
                    width: 5px;
                    height: 5px;
                    margin: 0;
                    border-color: #f7f7f7;
                    transition: all .2s linear;
                    -moz-transition: all .2s linear;
                    -webkit-transition: all .2s linear;
                    -o-transition: all .2s linear
                }

                .vc_separator {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-orient: horizontal;
                    -webkit-box-direction: normal;
                    -webkit-flex-direction: row;
                    -ms-flex-direction: row;
                    flex-direction: row;
                    -webkit-flex-wrap: nowrap;
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                    -webkit-box-align: center;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center
                }

                .vc_separator h4 {
                    line-height: 1em;
                    font-size: 100%;
                    margin: 0;
                    word-wrap: break-word;
                    -webkit-box-flex: 0;
                    -webkit-flex: 0 1 auto;
                    -ms-flex: 0 1 auto;
                    flex: 0 1 auto
                }

                .vc_separator h4 .normal {
                    font-size: 12px;
                    font-weight: 400
                }

                .vc_separator .vc_sep_holder {
                    height: 1px;
                    position: relative;
                    -webkit-box-flex: 1;
                    -webkit-flex: 1 1 auto;
                    -ms-flex: 1 1 auto;
                    flex: 1 1 auto;
                    min-width: 10%
                }

                .vc_separator .vc_sep_holder .vc_sep_line {
                    height: 1px;
                    border-top: 1px solid #EBEBEB;
                    display: block;
                    position: relative;
                    top: 1px;
                    width: 100%
                }

                .vc_separator.vc_separator_align_left .vc_sep_holder.vc_sep_holder_l,.vc_separator.vc_separator_align_right .vc_sep_holder.vc_sep_holder_r {
                    display: none
                }

                .vc_separator.vc_separator_align_center h4 {
                    padding: 0 .8em
                }

                .vc_separator.vc_separator_align_left h4 {
                    padding: 0 .8em 0 0
                }

                .vc_separator.vc_separator_align_right h4 {
                    padding: 0 0 0 .8em;
                    margin: 0!important
                }

                .vc_separator.vc_sep_double {
                    height: 3px
                }

                .vc_separator.vc_sep_double .vc_sep_line {
                    border-bottom: 1px solid #EBEBEB;
                    border-top: 1px solid #EBEBEB;
                    height: 3px
                }

                .vc_separator.vc_sep_dashed .vc_sep_line {
                    border-top-style: dashed
                }

                .vc_separator.vc_sep_dotted .vc_sep_line {
                    border-top-style: dotted
                }

                .vc_separator.vc_sep_shadow .vc_sep_line {
                    border: none;
                    position: relative;
                    height: 20px;
                    top: 0;
                    overflow: hidden
                }

                .vc_separator.vc_sep_shadow .vc_sep_line::after {
                    content: '';
                    display: block;
                    position: absolute;
                    left: 0;
                    top: -20px;
                    right: 0;
                    height: 10px;
                    border-radius: 100%
                }

                .vc_separator.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    right: -100%;
                    box-shadow: 10px 10px 10px 1px
                }

                .vc_separator.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    left: -100%;
                    box-shadow: -10px 10px 10px 1px
                }

                .vc_separator.vc_separator_no_text:not(.vc_sep_shadow) .vc_sep_holder_l {
                    width: 100%
                }

                .vc_separator.vc_separator_no_text:not(.vc_sep_shadow) .vc_sep_holder_r {
                    display: none
                }

                .vc_separator .vc_icon_element {
                    margin-bottom: 0
                }

                .vc_separator .vc_icon_element:not(.vc_icon_element-have-style)+h4 {
                    padding-left: 0
                }

                .vc_separator .vc_icon_element:not(.vc_icon_element-have-style) .vc_icon_element-size-xl {
                    margin-left: .8em;
                    margin-right: .8em
                }

                .vc_separator.vc_separator-has-text.vc_separator_align_center .vc_icon_element.vc_icon_element-have-style,.vc_separator.vc_separator-has-text.vc_separator_align_right .vc_icon_element.vc_icon_element-have-style {
                    margin-left: .8em
                }

                .vc_separator.vc_separator_align_left .vc_icon_element.vc_icon_element-have-style+h4 {
                    padding-left: .8em
                }

                .vc_separator.vc_sep_border_width_1 .vc_sep_holder .vc_sep_line {
                    border-top-width: 1px
                }

                .vc_separator.vc_sep_border_width_1.vc_sep_double .vc_sep_holder .vc_sep_line {
                    border-bottom-width: 1px;
                    top: 0
                }

                .vc_separator.vc_sep_border_width_1.vc_sep_shadow .vc_sep_line {
                    top: 0
                }

                .vc_separator.vc_sep_border_width_1.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    box-shadow: 10px 10px 10px 1px
                }

                .vc_separator.vc_sep_border_width_1.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    box-shadow: -10px 10px 10px 1px
                }

                .vc_separator.vc_sep_border_width_2 .vc_sep_holder .vc_sep_line {
                    border-top-width: 2px
                }

                .vc_separator.vc_sep_border_width_2.vc_sep_double .vc_sep_holder .vc_sep_line {
                    border-bottom-width: 2px;
                    top: -1px
                }

                .vc_separator.vc_sep_border_width_2.vc_sep_shadow .vc_sep_line {
                    top: -1px
                }

                .vc_separator.vc_sep_border_width_2.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    box-shadow: 10px 10px 10px 2px
                }

                .vc_separator.vc_sep_border_width_2.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    box-shadow: -10px 10px 10px 2px
                }

                .vc_separator.vc_sep_border_width_3 .vc_sep_holder .vc_sep_line {
                    border-top-width: 3px
                }

                .vc_separator.vc_sep_border_width_3.vc_sep_double .vc_sep_holder .vc_sep_line {
                    border-bottom-width: 3px;
                    top: -1px
                }

                .vc_separator.vc_sep_border_width_3.vc_sep_shadow .vc_sep_line {
                    top: -1px
                }

                .vc_separator.vc_sep_border_width_3.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    box-shadow: 10px 10px 10px 3px
                }

                .vc_separator.vc_sep_border_width_3.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    box-shadow: -10px 10px 10px 3px
                }

                .vc_separator.vc_sep_border_width_4 .vc_sep_holder .vc_sep_line {
                    border-top-width: 4px
                }

                .vc_separator.vc_sep_border_width_4.vc_sep_double .vc_sep_holder .vc_sep_line {
                    border-bottom-width: 4px;
                    top: -2px
                }

                .vc_separator.vc_sep_border_width_4.vc_sep_shadow .vc_sep_line {
                    top: -2px
                }

                .vc_separator.vc_sep_border_width_4.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    box-shadow: 10px 10px 10px 4px
                }

                .vc_separator.vc_sep_border_width_4.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    box-shadow: -10px 10px 10px 4px
                }

                .vc_separator.vc_sep_border_width_5 .vc_sep_holder .vc_sep_line {
                    border-top-width: 5px
                }

                .vc_separator.vc_sep_border_width_5.vc_sep_double .vc_sep_holder .vc_sep_line {
                    border-bottom-width: 5px;
                    top: -2px
                }

                .vc_separator.vc_sep_border_width_5.vc_sep_shadow .vc_sep_line {
                    top: -2px
                }

                .vc_separator.vc_sep_border_width_5.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    box-shadow: 10px 10px 10px 5px
                }

                .vc_separator.vc_sep_border_width_5.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    box-shadow: -10px 10px 10px 5px
                }

                .vc_separator.vc_sep_border_width_6 .vc_sep_holder .vc_sep_line {
                    border-top-width: 6px
                }

                .vc_separator.vc_sep_border_width_6.vc_sep_double .vc_sep_holder .vc_sep_line {
                    border-bottom-width: 6px;
                    top: -3px
                }

                .vc_separator.vc_sep_border_width_6.vc_sep_shadow .vc_sep_line {
                    top: -3px
                }

                .vc_separator.vc_sep_border_width_6.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    box-shadow: 10px 10px 10px 6px
                }

                .vc_separator.vc_sep_border_width_6.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    box-shadow: -10px 10px 10px 6px
                }

                .vc_separator.vc_sep_border_width_7 .vc_sep_holder .vc_sep_line {
                    border-top-width: 7px
                }

                .vc_separator.vc_sep_border_width_7.vc_sep_double .vc_sep_holder .vc_sep_line {
                    border-bottom-width: 7px;
                    top: -3px
                }

                .vc_separator.vc_sep_border_width_7.vc_sep_shadow .vc_sep_line {
                    top: -3px
                }

                .vc_separator.vc_sep_border_width_7.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    box-shadow: 10px 10px 10px 7px
                }

                .vc_separator.vc_sep_border_width_7.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    box-shadow: -10px 10px 10px 7px
                }

                .vc_separator.vc_sep_border_width_8 .vc_sep_holder .vc_sep_line {
                    border-top-width: 8px
                }

                .vc_separator.vc_sep_border_width_8.vc_sep_double .vc_sep_holder .vc_sep_line {
                    border-bottom-width: 8px;
                    top: -4px
                }

                .vc_separator.vc_sep_border_width_8.vc_sep_shadow .vc_sep_line {
                    top: -4px
                }

                .vc_separator.vc_sep_border_width_8.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    box-shadow: 10px 10px 10px 8px
                }

                .vc_separator.vc_sep_border_width_8.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    box-shadow: -10px 10px 10px 8px
                }

                .vc_separator.vc_sep_border_width_9 .vc_sep_holder .vc_sep_line {
                    border-top-width: 9px
                }

                .vc_separator.vc_sep_border_width_9.vc_sep_double .vc_sep_holder .vc_sep_line {
                    border-bottom-width: 9px;
                    top: -4px
                }

                .vc_separator.vc_sep_border_width_9.vc_sep_shadow .vc_sep_line {
                    top: -4px
                }

                .vc_separator.vc_sep_border_width_9.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    box-shadow: 10px 10px 10px 9px
                }

                .vc_separator.vc_sep_border_width_9.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    box-shadow: -10px 10px 10px 9px
                }

                .vc_separator.vc_sep_border_width_10 .vc_sep_holder .vc_sep_line {
                    border-top-width: 10px
                }

                .vc_separator.vc_sep_border_width_10.vc_sep_double .vc_sep_holder .vc_sep_line {
                    border-bottom-width: 10px;
                    top: -5px
                }

                .vc_separator.vc_sep_border_width_10.vc_sep_shadow .vc_sep_line {
                    top: -5px
                }

                .vc_separator.vc_sep_border_width_10.vc_sep_shadow .vc_sep_holder_l .vc_sep_line::after {
                    box-shadow: 10px 10px 10px 10px
                }

                .vc_separator.vc_sep_border_width_10.vc_sep_shadow .vc_sep_holder_r .vc_sep_line::after {
                    box-shadow: -10px 10px 10px 10px
                }

                .vc_separator.vc_sep_color_blue .vc_sep_line {
                    border-color: #5472D2
                }

                .vc_separator.vc_sep_color_blue.vc_sep_shadow .vc_sep_holder {
                    color: #5472D2
                }

                .vc_separator.vc_sep_color_turquoise .vc_sep_line {
                    border-color: #00C1CF
                }

                .vc_separator.vc_sep_color_turquoise.vc_sep_shadow .vc_sep_holder {
                    color: #00C1CF
                }

                .vc_separator.vc_sep_color_pink .vc_sep_line {
                    border-color: #FE6C61
                }

                .vc_separator.vc_sep_color_pink.vc_sep_shadow .vc_sep_holder {
                    color: #FE6C61
                }

                .vc_separator.vc_sep_color_violet .vc_sep_line {
                    border-color: #8D6DC4
                }

                .vc_separator.vc_sep_color_violet.vc_sep_shadow .vc_sep_holder {
                    color: #8D6DC4
                }

                .vc_separator.vc_sep_color_peacoc .vc_sep_line {
                    border-color: #4CADC9
                }

                .vc_separator.vc_sep_color_peacoc.vc_sep_shadow .vc_sep_holder {
                    color: #4CADC9
                }

                .vc_separator.vc_sep_color_chino .vc_sep_line {
                    border-color: #CEC2AB
                }

                .vc_separator.vc_sep_color_chino.vc_sep_shadow .vc_sep_holder {
                    color: #CEC2AB
                }

                .vc_separator.vc_sep_color_mulled_wine .vc_sep_line {
                    border-color: #50485B
                }

                .vc_separator.vc_sep_color_mulled_wine.vc_sep_shadow .vc_sep_holder {
                    color: #50485B
                }

                .vc_separator.vc_sep_color_vista_blue .vc_sep_line {
                    border-color: #75D69C
                }

                .vc_separator.vc_sep_color_vista_blue.vc_sep_shadow .vc_sep_holder {
                    color: #75D69C
                }

                .vc_separator.vc_sep_color_black .vc_sep_line {
                    border-color: #2A2A2A
                }

                .vc_separator.vc_sep_color_black.vc_sep_shadow .vc_sep_holder {
                    color: #2A2A2A
                }

                .vc_separator.vc_sep_color_grey .vc_sep_line {
                    border-color: #EBEBEB
                }

                .vc_separator.vc_sep_color_grey.vc_sep_shadow .vc_sep_holder {
                    color: #EBEBEB
                }

                .vc_separator.vc_sep_color_orange .vc_sep_line {
                    border-color: #F7BE68
                }

                .vc_separator.vc_sep_color_orange.vc_sep_shadow .vc_sep_holder {
                    color: #F7BE68
                }

                .vc_separator.vc_sep_color_sky .vc_sep_line {
                    border-color: #5AA1E3
                }

                .vc_separator.vc_sep_color_sky.vc_sep_shadow .vc_sep_holder {
                    color: #5AA1E3
                }

                .vc_separator.vc_sep_color_green .vc_sep_line {
                    border-color: #6DAB3C
                }

                .vc_separator.vc_sep_color_green.vc_sep_shadow .vc_sep_holder {
                    color: #6DAB3C
                }

                .vc_separator.vc_sep_color_juicy_pink .vc_sep_line {
                    border-color: #F4524D
                }

                .vc_separator.vc_sep_color_juicy_pink.vc_sep_shadow .vc_sep_holder {
                    color: #F4524D
                }

                .vc_separator.vc_sep_color_sandy_brown .vc_sep_line {
                    border-color: #F79468
                }

                .vc_separator.vc_sep_color_sandy_brown.vc_sep_shadow .vc_sep_holder {
                    color: #F79468
                }

                .vc_separator.vc_sep_color_purple .vc_sep_line {
                    border-color: #B97EBB
                }

                .vc_separator.vc_sep_color_purple.vc_sep_shadow .vc_sep_holder {
                    color: #B97EBB
                }

                .vc_separator.vc_sep_color_white .vc_sep_line {
                    border-color: #FFF
                }

                .vc_separator.vc_sep_color_white.vc_sep_shadow .vc_sep_holder {
                    color: #FFF
                }

                .vc_text_separator,.wpb_separator {
                    border-bottom: 1px solid #EBEBEB;
                    clear: both;
                    height: 1px
                }

                .vc_sep_width_10 {
                    width: 10%
                }

                .vc_sep_width_20 {
                    width: 20%
                }

                .vc_sep_width_30 {
                    width: 30%
                }

                .vc_sep_width_40 {
                    width: 40%
                }

                .vc_sep_width_50 {
                    width: 50%
                }

                .vc_sep_width_60 {
                    width: 60%
                }

                .vc_sep_width_70 {
                    width: 70%
                }

                .vc_sep_width_80 {
                    width: 80%
                }

                .vc_sep_width_90 {
                    width: 90%
                }

                .vc_sep_width_100,.wpb_single_image img.vc_img-placeholder {
                    width: 100%
                }

                .vc_sep_pos_align_center {
                    margin-left: auto;
                    margin-right: auto
                }

                .vc_sep_pos_align_left {
                    margin-left: 0;
                    margin-right: auto
                }

                .vc_sep_pos_align_right {
                    margin-left: auto;
                    margin-right: 0
                }

                .vc_text_separator div {
                    display: inline-block;
                    background-color: #FFF;
                    padding: 1px 1em;
                    position: relative;
                    top: -9px
                }

                .separator_align_left {
                    text-align: left
                }

                .separator_align_right {
                    text-align: right
                }

                .vc-zigzag-wrapper {
                    text-align: center
                }

                .vc-zigzag-wrapper.vc-zigzag-align-left {
                    text-align: left
                }

                .vc-zigzag-wrapper.vc-zigzag-align-right {
                    text-align: right
                }

                .vc-zigzag-inner {
                    display: inline-block
                }

                .wpb_single_image a {
                    border: none;
                    outline: 0
                }

                .wpb_single_image img {
                    height: auto;
                    max-width: 100%;
                    vertical-align: top
                }

                .wpb_single_image .vc_single_image-wrapper {
                    display: inline-block;
                    vertical-align: top;
                    max-width: 100%
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_rounded,.wpb_single_image .vc_single_image-wrapper.vc_box_rounded img {
                    border-radius: 4px;
                    -webkit-box-shadow: none;
                    box-shadow: none
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_outline,.wpb_single_image .vc_single_image-wrapper.vc_box_outline_circle {
                    border-radius: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                    padding: 6px;
                    border: 1px solid #EBEBEB
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_outline img,.wpb_single_image .vc_single_image-wrapper.vc_box_outline_circle img {
                    border-radius: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                    border: 1px solid #EBEBEB
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_border,.wpb_single_image .vc_single_image-wrapper.vc_box_border_circle {
                    border-radius: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                    padding: 6px;
                    border: none
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_border img,.wpb_single_image .vc_single_image-wrapper.vc_box_border_circle img {
                    border-radius: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                    border: none
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_shadow,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow img,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_border,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_border img,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_border_circle,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_border_circle img,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_circle,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_circle img {
                    border-radius: 0;
                    -webkit-box-shadow: 0 0 5px rgba(0,0,0,.1);
                    box-shadow: 0 0 5px rgba(0,0,0,.1)
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_shadow_border,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_border_circle {
                    padding: 6px
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_shadow_3d {
                    border-radius: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                    margin-bottom: 15px
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_shadow_3d img {
                    border-radius: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_border_circle,.wpb_single_image .vc_single_image-wrapper.vc_box_border_circle img,.wpb_single_image .vc_single_image-wrapper.vc_box_circle,.wpb_single_image .vc_single_image-wrapper.vc_box_circle img,.wpb_single_image .vc_single_image-wrapper.vc_box_outline_circle,.wpb_single_image .vc_single_image-wrapper.vc_box_outline_circle img,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_border_circle,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_border_circle img,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_circle,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_circle img {
                    border-radius: 50%;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                    overflow: hidden
                }

                .wpb_single_image .vc_single_image-wrapper.vc_box_shadow_border_circle,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_border_circle img,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_circle,.wpb_single_image .vc_single_image-wrapper.vc_box_shadow_circle img {
                    -webkit-box-shadow: 0 0 5px rgba(0,0,0,.1);
                    box-shadow: 0 0 5px rgba(0,0,0,.1)
                }

                .wpb_single_image.vc_align_center {
                    text-align: center
                }

                .wpb_single_image.vc_align_right {
                    text-align: right
                }

                .wpb_single_image.vc_align_left {
                    text-align: left
                }

                .wpb_single_image .vc_box_shadow_3d {
                    position: relative;
                    z-index: 0;
                    display: inline-block;
                    max-width: 100%
                }

                .wpb_single_image .vc_box_shadow_3d:after,.wpb_single_image .vc_box_shadow_3d:before {
                    content: "";
                    position: absolute;
                    -webkit-box-shadow: 0 15px 10px rgba(0,0,0,.6);
                    box-shadow: 0 15px 10px rgba(0,0,0,.6);
                    left: 5px;
                    right: 50%;
                    bottom: 8px;
                    height: 30%;
                    z-index: -1;
                    border-radius: inherit;
                    -webkit-transform-origin: 0 0;
                    -moz-transform-origin: 0 0;
                    -ms-transform-origin: 0 0;
                    transform-origin: 0 0;
                    -webkit-transform: skewY(-6deg);
                    -ms-transform: skewY(-6deg);
                    transform: skewY(-6deg)
                }

                .wpb_single_image .vc_box_shadow_3d:after {
                    left: 50%;
                    right: 5px;
                    -webkit-transform: skewY(6deg);
                    -ms-transform: skewY(6deg);
                    transform: skewY(6deg);
                    -webkit-transform-origin: 100% 0;
                    -moz-transform-origin: 100% 0;
                    -ms-transform-origin: 100% 0;
                    transform-origin: 100% 0
                }

                .wpb_single_image .vc_figure {
                    display: inline-block;
                    vertical-align: top;
                    margin: 0;
                    max-width: 100%
                }

                .wpb_single_image .vc_figure-caption {
                    margin-top: .2em;
                    font-size: .8em
                }

                .wpb_single_image .vc_box_outline.vc_box_border_blue,.wpb_single_image .vc_box_outline_circle.vc_box_border_blue {
                    border-color: #5472D2
                }

                .wpb_single_image .vc_box_border.vc_box_border_blue,.wpb_single_image .vc_box_border_circle.vc_box_border_blue {
                    background-color: #5472D2
                }

                .wpb_single_image .vc_box_outline.vc_box_border_turquoise,.wpb_single_image .vc_box_outline_circle.vc_box_border_turquoise {
                    border-color: #00C1CF
                }

                .wpb_single_image .vc_box_border.vc_box_border_turquoise,.wpb_single_image .vc_box_border_circle.vc_box_border_turquoise {
                    background-color: #00C1CF
                }

                .wpb_single_image .vc_box_outline.vc_box_border_pink,.wpb_single_image .vc_box_outline_circle.vc_box_border_pink {
                    border-color: #FE6C61
                }

                .wpb_single_image .vc_box_border.vc_box_border_pink,.wpb_single_image .vc_box_border_circle.vc_box_border_pink {
                    background-color: #FE6C61
                }

                .wpb_single_image .vc_box_outline.vc_box_border_violet,.wpb_single_image .vc_box_outline_circle.vc_box_border_violet {
                    border-color: #8D6DC4
                }

                .wpb_single_image .vc_box_border.vc_box_border_violet,.wpb_single_image .vc_box_border_circle.vc_box_border_violet {
                    background-color: #8D6DC4
                }

                .wpb_single_image .vc_box_outline.vc_box_border_peacoc,.wpb_single_image .vc_box_outline_circle.vc_box_border_peacoc {
                    border-color: #4CADC9
                }

                .wpb_single_image .vc_box_border.vc_box_border_peacoc,.wpb_single_image .vc_box_border_circle.vc_box_border_peacoc {
                    background-color: #4CADC9
                }

                .wpb_single_image .vc_box_outline.vc_box_border_chino,.wpb_single_image .vc_box_outline_circle.vc_box_border_chino {
                    border-color: #CEC2AB
                }

                .wpb_single_image .vc_box_border.vc_box_border_chino,.wpb_single_image .vc_box_border_circle.vc_box_border_chino {
                    background-color: #CEC2AB
                }

                .wpb_single_image .vc_box_outline.vc_box_border_mulled_wine,.wpb_single_image .vc_box_outline_circle.vc_box_border_mulled_wine {
                    border-color: #50485B
                }

                .wpb_single_image .vc_box_border.vc_box_border_mulled_wine,.wpb_single_image .vc_box_border_circle.vc_box_border_mulled_wine {
                    background-color: #50485B
                }

                .wpb_single_image .vc_box_outline.vc_box_border_vista_blue,.wpb_single_image .vc_box_outline_circle.vc_box_border_vista_blue {
                    border-color: #75D69C
                }

                .wpb_single_image .vc_box_border.vc_box_border_vista_blue,.wpb_single_image .vc_box_border_circle.vc_box_border_vista_blue {
                    background-color: #75D69C
                }

                .wpb_single_image .vc_box_outline.vc_box_border_black,.wpb_single_image .vc_box_outline_circle.vc_box_border_black {
                    border-color: #2A2A2A
                }

                .wpb_single_image .vc_box_border.vc_box_border_black,.wpb_single_image .vc_box_border_circle.vc_box_border_black {
                    background-color: #2A2A2A
                }

                .wpb_single_image .vc_box_outline.vc_box_border_grey,.wpb_single_image .vc_box_outline_circle.vc_box_border_grey {
                    border-color: #EBEBEB
                }

                .wpb_single_image .vc_box_border.vc_box_border_grey,.wpb_single_image .vc_box_border_circle.vc_box_border_grey {
                    background-color: #EBEBEB
                }

                .wpb_single_image .vc_box_outline.vc_box_border_orange,.wpb_single_image .vc_box_outline_circle.vc_box_border_orange {
                    border-color: #F7BE68
                }

                .wpb_single_image .vc_box_border.vc_box_border_orange,.wpb_single_image .vc_box_border_circle.vc_box_border_orange {
                    background-color: #F7BE68
                }

                .wpb_single_image .vc_box_outline.vc_box_border_sky,.wpb_single_image .vc_box_outline_circle.vc_box_border_sky {
                    border-color: #5AA1E3
                }

                .wpb_single_image .vc_box_border.vc_box_border_sky,.wpb_single_image .vc_box_border_circle.vc_box_border_sky {
                    background-color: #5AA1E3
                }

                .wpb_single_image .vc_box_outline.vc_box_border_green,.wpb_single_image .vc_box_outline_circle.vc_box_border_green {
                    border-color: #6DAB3C
                }

                .wpb_single_image .vc_box_border.vc_box_border_green,.wpb_single_image .vc_box_border_circle.vc_box_border_green {
                    background-color: #6DAB3C
                }

                .wpb_single_image .vc_box_outline.vc_box_border_juicy_pink,.wpb_single_image .vc_box_outline_circle.vc_box_border_juicy_pink {
                    border-color: #F4524D
                }

                .wpb_single_image .vc_box_border.vc_box_border_juicy_pink,.wpb_single_image .vc_box_border_circle.vc_box_border_juicy_pink {
                    background-color: #F4524D
                }

                .wpb_single_image .vc_box_outline.vc_box_border_sandy_brown,.wpb_single_image .vc_box_outline_circle.vc_box_border_sandy_brown {
                    border-color: #F79468
                }

                .wpb_single_image .vc_box_border.vc_box_border_sandy_brown,.wpb_single_image .vc_box_border_circle.vc_box_border_sandy_brown {
                    background-color: #F79468
                }

                .wpb_single_image .vc_box_outline.vc_box_border_purple,.wpb_single_image .vc_box_outline_circle.vc_box_border_purple {
                    border-color: #B97EBB
                }

                .wpb_single_image .vc_box_border.vc_box_border_purple,.wpb_single_image .vc_box_border_circle.vc_box_border_purple {
                    background-color: #B97EBB
                }

                .wpb_single_image .vc_box_outline.vc_box_border_white,.wpb_single_image .vc_box_outline_circle.vc_box_border_white {
                    border-color: #FFF
                }

                .wpb_single_image .vc_box_border.vc_box_border_white,.wpb_single_image .vc_box_border_circle.vc_box_border_white {
                    background-color: #FFF
                }

                .vc_icon_element {
                    line-height: 0;
                    font-size: 14px;
                    margin-bottom: 35px
                }

                .vc_icon_element.vc_icon_element-outer {
                    box-sizing: border-box;
                    text-align: center
                }

                .vc_icon_element.vc_icon_element-outer.vc_icon_element-align-left {
                    text-align: left
                }

                .vc_icon_element.vc_icon_element-outer.vc_icon_element-align-center {
                    text-align: center
                }

                .vc_icon_element.vc_icon_element-outer.vc_icon_element-align-right {
                    text-align: right
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner {
                    text-align: center;
                    display: inline-block;
                    border: 2px solid transparent;
                    width: 4em;
                    height: 4em;
                    box-sizing: content-box;
                    position: relative
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner .vc_icon_element-icon {
                    font-size: 2.15em;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 1!important;
                    font-size-adjust: none;
                    font-stretch: normal;
                    -webkit-font-feature-settings: normal;
                    font-feature-settings: normal;
                    -webkit-font-language-override: normal;
                    font-language-override: normal;
                    -webkit-font-kerning: auto;
                    font-kerning: auto;
                    font-synthesis: weight style;
                    font-variant: normal;
                    text-rendering: auto;
                    display: inline-block;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    -webkit-transform: translate(-50%,-50%);
                    -ms-transform: translate(-50%,-50%);
                    -o-transform: translate(-50%,-50%);
                    transform: translate(-50%,-50%)
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner .vc_icon_element-icon:before {
                    font-style: normal;
                    font-weight: 400;
                    display: inline-block;
                    text-decoration: inherit;
                    width: inherit;
                    height: inherit;
                    font-size: 1em;
                    text-align: center;
                    text-rendering: optimizelegibility
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner .vc_gitem-link,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner .vc_icon_element-link {
                    width: 100%;
                    height: 100%;
                    display: block;
                    position: absolute;
                    top: 0;
                    box-sizing: content-box;
                    border: none
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-xs {
                    max-width: 100%!important;
                    line-height: 1.2em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-xs.vc_icon_element-have-style-inner {
                    width: 2.5em!important;
                    height: 2.5em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-xs .vc_icon_element-icon {
                    font-size: 1.2em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-sm {
                    max-width: 100%!important;
                    line-height: 1.6em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-sm.vc_icon_element-have-style-inner {
                    width: 3.15em!important;
                    height: 3.15em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-sm .vc_icon_element-icon {
                    font-size: 1.6em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-md {
                    max-width: 100%!important;
                    line-height: 2.15em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-md.vc_icon_element-have-style-inner {
                    width: 4em!important;
                    height: 4em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-md .vc_icon_element-icon {
                    font-size: 2.15em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-lg {
                    max-width: 100%!important;
                    line-height: 2.85em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-lg.vc_icon_element-have-style-inner {
                    width: 5em!important;
                    height: 5em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-lg .vc_icon_element-icon {
                    font-size: 2.85em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-xl {
                    max-width: 100%!important;
                    line-height: 5em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-xl.vc_icon_element-have-style-inner {
                    width: 7.15em!important;
                    height: 7.15em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-xl .vc_icon_element-icon {
                    font-size: 5em!important
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded .vc_gitem-link,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded .vc_icon_element-link,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded-outline,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded-outline .vc_gitem-link,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded-outline .vc_icon_element-link {
                    border-radius: 50%
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded-less,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded-less .vc_gitem-link,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded-less .vc_icon_element-link,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded-less-outline,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded-less-outline .vc_gitem-link,.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-style-rounded-less-outline .vc_icon_element-link {
                    border-radius: 5px
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-blue .vc_icon_element-icon {
                    color: #5472D2
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-turquoise .vc_icon_element-icon {
                    color: #00C1CF
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-pink .vc_icon_element-icon {
                    color: #FE6C61
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-violet .vc_icon_element-icon {
                    color: #8D6DC4
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-peacoc .vc_icon_element-icon {
                    color: #4CADC9
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-chino .vc_icon_element-icon {
                    color: #CEC2AB
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-mulled_wine .vc_icon_element-icon {
                    color: #50485B
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-vista_blue .vc_icon_element-icon {
                    color: #75D69C
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-black .vc_icon_element-icon {
                    color: #2A2A2A
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-grey .vc_icon_element-icon {
                    color: #EBEBEB
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-orange .vc_icon_element-icon {
                    color: #F7BE68
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-sky .vc_icon_element-icon {
                    color: #5AA1E3
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-green .vc_icon_element-icon {
                    color: #6DAB3C
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-juicy_pink .vc_icon_element-icon {
                    color: #F4524D
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-sandy_brown .vc_icon_element-icon {
                    color: #F79468
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-purple .vc_icon_element-icon {
                    color: #B97EBB
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-white .vc_icon_element-icon {
                    color: #FFF
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-blue.vc_icon_element-outline {
                    border-color: #5472D2
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-blue.vc_icon_element-background {
                    background-color: #5472D2
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-turquoise.vc_icon_element-outline {
                    border-color: #00C1CF
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-turquoise.vc_icon_element-background {
                    background-color: #00C1CF
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-pink.vc_icon_element-outline {
                    border-color: #FE6C61
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-pink.vc_icon_element-background {
                    background-color: #FE6C61
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-violet.vc_icon_element-outline {
                    border-color: #8D6DC4
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-violet.vc_icon_element-background {
                    background-color: #8D6DC4
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-peacoc.vc_icon_element-outline {
                    border-color: #4CADC9
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-peacoc.vc_icon_element-background {
                    background-color: #4CADC9
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-chino.vc_icon_element-outline {
                    border-color: #CEC2AB
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-chino.vc_icon_element-background {
                    background-color: #CEC2AB
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-mulled_wine.vc_icon_element-outline {
                    border-color: #50485B
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-mulled_wine.vc_icon_element-background {
                    background-color: #50485B
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-vista_blue.vc_icon_element-outline {
                    border-color: #75D69C
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-vista_blue.vc_icon_element-background {
                    background-color: #75D69C
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-black.vc_icon_element-outline {
                    border-color: #2A2A2A
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-black.vc_icon_element-background {
                    background-color: #2A2A2A
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-grey.vc_icon_element-outline {
                    border-color: #EBEBEB
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-grey.vc_icon_element-background {
                    background-color: #EBEBEB
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-orange.vc_icon_element-outline {
                    border-color: #F7BE68
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-orange.vc_icon_element-background {
                    background-color: #F7BE68
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-sky.vc_icon_element-outline {
                    border-color: #5AA1E3
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-sky.vc_icon_element-background {
                    background-color: #5AA1E3
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-green.vc_icon_element-outline {
                    border-color: #6DAB3C
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-green.vc_icon_element-background {
                    background-color: #6DAB3C
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-juicy_pink.vc_icon_element-outline {
                    border-color: #F4524D
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-juicy_pink.vc_icon_element-background {
                    background-color: #F4524D
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-sandy_brown.vc_icon_element-outline {
                    border-color: #F79468
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-sandy_brown.vc_icon_element-background {
                    background-color: #F79468
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-purple.vc_icon_element-outline {
                    border-color: #B97EBB
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-purple.vc_icon_element-background {
                    background-color: #B97EBB
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-white.vc_icon_element-outline {
                    border-color: #FFF
                }

                .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-white.vc_icon_element-background {
                    background-color: #FFF
                }

                .vc_chart .vc_chart-legend {
                    font-size: 14px;
                    margin: 0;
                    padding: 0
                }

                .vc_chart .vc_chart-legend li {
                    line-height: 1.3em;
                    list-style: none;
                    margin: 0 0 .3em;
                    min-height: 1.3em
                }

                .vc_chart .vc_chart-legend span {
                    border-radius: .3em;
                    display: inline-block;
                    height: 1.3em;
                    left: 0;
                    margin-right: .5em;
                    vertical-align: middle;
                    width: 1.3em
                }

                @media (min-width: 768px) {
                    .vc_chart .vc_chart-legend {
                        display:inline-block;
                        vertical-align: middle;
                        width: 40%
                    }

                    .vc_chart .vc_chart-legend li {
                        margin-left: 1em
                    }

                    .vc_chart .vc_chart-with-legend {
                        display: inline-block;
                        vertical-align: middle;
                        width: 60%
                    }
                }

                .vc_line-chart .vc_chart-with-legend {
                    width: 75%
                }

                .vc_line-chart .vc_chart-legend {
                    width: 25%
                }

                .wpb_single_image .wpb_wrapper .vc_single_image-wrapper .zoomImg {
                    border-radius: 0
                }

                .wpb_single_image [class*='_circle'] .vc-zoom-wrapper {
                    border-radius: 50%
                }

                .wpb_single_image [class*='_rounded'] .vc-zoom-wrapper {
                    border-radius: 4px
                }

                .vc_general.vc_pagination {
                    display: block;
                    margin: 0;
                    padding: 0;
                    text-align: center
                }

                .vc_general.vc_pagination .vc_pagination-item {
                    display: inline-block;
                    margin: 0;
                    padding: 0;
                    vertical-align: middle
                }

                .vc_general.vc_pagination .vc_pagination-trigger {
                    display: block;
                    text-decoration: none;
                    cursor: pointer;
                    height: 10px;
                    width: 10px;
                    margin: 5px 7px;
                    background: 0 0;
                    -webkit-transition: all .2s ease-in-out;
                    transition: all .2s ease-in-out;
                    border: none
                }

                .vc_gitem-zone,.vc_gitem_row .vc_gitem-col {
                    background-repeat: no-repeat;
                    background-position: 50% 50%;
                    background-size: cover;
                    box-sizing: border-box
                }

                .vc_general.vc_pagination .vc_pagination-trigger:focus {
                    outline: 0
                }

                .vc_general.vc_pagination .vc_active .vc_pagination-trigger {
                    cursor: default
                }

                .vc_pagination.vc_pagination-style-outline .vc_pagination-trigger {
                    border: 3px solid transparent
                }

                .vc_pagination.vc_pagination-style-flat .vc_pagination-trigger {
                    opacity: .6
                }

                .vc_pagination.vc_pagination-style-flat .vc_active .vc_pagination-trigger,.vc_pagination.vc_pagination-style-flat .vc_pagination-trigger:hover {
                    opacity: 1
                }

                .vc_pagination.vc_pagination-shape-round .vc_pagination-trigger {
                    border-radius: 50%
                }

                .vc_pagination.vc_pagination-shape-rounded .vc_pagination-trigger {
                    border-radius: 3px
                }

                .vc_pagination-color-blue.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #5472D2
                }

                .vc_pagination-color-blue.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-blue.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-blue.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #5472D2
                }

                .vc_pagination-color-turquoise.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #00C1CF
                }

                .vc_pagination-color-turquoise.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-turquoise.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-turquoise.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #00C1CF
                }

                .vc_pagination-color-pink.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #FE6C61
                }

                .vc_pagination-color-pink.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-pink.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-pink.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #FE6C61
                }

                .vc_pagination-color-violet.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #8D6DC4
                }

                .vc_pagination-color-violet.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-violet.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-violet.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #8D6DC4
                }

                .vc_pagination-color-peacoc.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #4CADC9
                }

                .vc_pagination-color-peacoc.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-peacoc.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-peacoc.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #4CADC9
                }

                .vc_pagination-color-chino.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #CEC2AB
                }

                .vc_pagination-color-chino.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-chino.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-chino.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #CEC2AB
                }

                .vc_pagination-color-mulled-wine.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #50485B
                }

                .vc_pagination-color-mulled-wine.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-mulled-wine.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-mulled-wine.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #50485B
                }

                .vc_pagination-color-vista-blue.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #75D69C
                }

                .vc_pagination-color-vista-blue.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-vista-blue.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-vista-blue.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #75D69C
                }

                .vc_pagination-color-orange.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #F7BE68
                }

                .vc_pagination-color-orange.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-orange.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-orange.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #F7BE68
                }

                .vc_pagination-color-sky.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #5AA1E3
                }

                .vc_pagination-color-sky.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-sky.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-sky.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #5AA1E3
                }

                .vc_pagination-color-green.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #6DAB3C
                }

                .vc_pagination-color-green.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-green.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-green.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #6DAB3C
                }

                .vc_pagination-color-juicy-pink.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #F4524D
                }

                .vc_pagination-color-juicy-pink.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-juicy-pink.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-juicy-pink.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #F4524D
                }

                .vc_pagination-color-sandy-brown.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #F79468
                }

                .vc_pagination-color-sandy-brown.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-sandy-brown.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-sandy-brown.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #F79468
                }

                .vc_pagination-color-purple.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #B97EBB
                }

                .vc_pagination-color-purple.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-purple.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-purple.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #B97EBB
                }

                .vc_pagination-color-black.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #2A2A2A
                }

                .vc_pagination-color-black.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-black.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-black.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #2A2A2A
                }

                .vc_pagination-color-grey.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #EBEBEB
                }

                .vc_pagination-color-grey.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-grey.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-grey.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #EBEBEB
                }

                .vc_pagination-color-white.vc_pagination-style-outline .vc_pagination-trigger {
                    border-color: #FFF
                }

                .vc_pagination-color-white.vc_pagination-style-flat .vc_pagination-trigger,.vc_pagination-color-white.vc_pagination-style-outline .vc_active .vc_pagination-trigger,.vc_pagination-color-white.vc_pagination-style-outline .vc_pagination-trigger:hover {
                    background-color: #FFF
                }

                .vc_grid.vc_row {
                    padding-left: 0;
                    padding-right: 0;
                    margin-left: 0;
                    margin-right: 0
                }

                .vc-row[data-vc-full-width] .vc_grid.vc_row {
                    overflow: hidden
                }

                .vc_grid.vc_row.vc_grid-gutter-1px {
                    margin-bottom: -1px
                }

                .vc_grid.vc_row.vc_grid-gutter-1px .vc_pageable-slide-wrapper {
                    margin-right: -1px
                }

                .vc_grid.vc_row.vc_grid-gutter-1px .vc_grid-item {
                    padding-right: 1px;
                    padding-bottom: 1px
                }

                .vc_grid.vc_row.vc_grid-gutter-2px {
                    margin-bottom: -2px
                }

                .vc_grid.vc_row.vc_grid-gutter-2px .vc_pageable-slide-wrapper {
                    margin-right: -2px
                }

                .vc_grid.vc_row.vc_grid-gutter-2px .vc_grid-item {
                    padding-right: 2px;
                    padding-bottom: 2px
                }

                .vc_grid.vc_row.vc_grid-gutter-3px {
                    margin-bottom: -3px
                }

                .vc_grid.vc_row.vc_grid-gutter-3px .vc_pageable-slide-wrapper {
                    margin-right: -3px
                }

                .vc_grid.vc_row.vc_grid-gutter-3px .vc_grid-item {
                    padding-right: 3px;
                    padding-bottom: 3px
                }

                .vc_grid.vc_row.vc_grid-gutter-4px {
                    margin-bottom: -4px
                }

                .vc_grid.vc_row.vc_grid-gutter-4px .vc_pageable-slide-wrapper {
                    margin-right: -4px
                }

                .vc_grid.vc_row.vc_grid-gutter-4px .vc_grid-item {
                    padding-right: 4px;
                    padding-bottom: 4px
                }

                .vc_grid.vc_row.vc_grid-gutter-5px {
                    margin-bottom: -5px
                }

                .vc_grid.vc_row.vc_grid-gutter-5px .vc_pageable-slide-wrapper {
                    margin-right: -5px
                }

                .vc_grid.vc_row.vc_grid-gutter-5px .vc_grid-item {
                    padding-right: 5px;
                    padding-bottom: 5px
                }

                .vc_grid.vc_row.vc_grid-gutter-10px {
                    margin-bottom: -10px
                }

                .vc_grid.vc_row.vc_grid-gutter-10px .vc_pageable-slide-wrapper {
                    margin-right: -10px
                }

                .vc_grid.vc_row.vc_grid-gutter-10px .vc_grid-item {
                    padding-right: 10px;
                    padding-bottom: 10px
                }

                .vc_grid.vc_row.vc_grid-gutter-15px {
                    margin-bottom: -15px
                }

                .vc_grid.vc_row.vc_grid-gutter-15px .vc_pageable-slide-wrapper {
                    margin-right: -15px
                }

                .vc_grid.vc_row.vc_grid-gutter-15px .vc_grid-item {
                    padding-right: 15px;
                    padding-bottom: 15px
                }

                .vc_grid.vc_row.vc_grid-gutter-20px {
                    margin-bottom: -20px
                }

                .vc_grid.vc_row.vc_grid-gutter-20px .vc_pageable-slide-wrapper {
                    margin-right: -20px
                }

                .vc_grid.vc_row.vc_grid-gutter-20px .vc_grid-item {
                    padding-right: 20px;
                    padding-bottom: 20px
                }

                .vc_grid.vc_row.vc_grid-gutter-25px {
                    margin-bottom: -25px
                }

                .vc_grid.vc_row.vc_grid-gutter-25px .vc_pageable-slide-wrapper {
                    margin-right: -25px
                }

                .vc_grid.vc_row.vc_grid-gutter-25px .vc_grid-item {
                    padding-right: 25px;
                    padding-bottom: 25px
                }

                .vc_grid.vc_row.vc_grid-gutter-30px {
                    margin-bottom: -30px
                }

                .vc_grid.vc_row.vc_grid-gutter-30px .vc_pageable-slide-wrapper {
                    margin-right: -30px
                }

                .vc_grid.vc_row.vc_grid-gutter-30px .vc_grid-item {
                    padding-right: 30px;
                    padding-bottom: 30px
                }

                .vc_grid.vc_row.vc_grid-gutter-35px {
                    margin-bottom: -35px
                }

                .vc_grid.vc_row.vc_grid-gutter-35px .vc_pageable-slide-wrapper {
                    margin-right: -35px
                }

                .vc_grid.vc_row.vc_grid-gutter-35px .vc_grid-item {
                    padding-right: 35px;
                    padding-bottom: 35px
                }

                .vc_grid.vc_row .vc_pageable-slide-wrapper .vc_grid-item.vc_visible-item:hover {
                    z-index: 3
                }

                .vc_grid.vc_row .vc_grid-item {
                    display: none;
                    padding: 0;
                    vertical-align: top;
                    float: none;
                    box-sizing: border-box;
                    z-index: 1
                }

                .vc_grid.vc_row .vc_grid-item .vc_grid-item-mini .vc_grid-item-content {
                    overflow: hidden
                }

                .vc_grid.vc_row .vc_grid-item .vc_btn,.vc_grid.vc_row .vc_grid-item .vc_icon_element,.vc_grid.vc_row .vc_grid-item .wpb_content_element {
                    margin-bottom: 15px
                }

                .vc_gitem_row,.vc_gitem_row .vc_gitem_row {
                    margin-bottom: 0
                }

                .vc_grid.vc_row .vc_grid-item .vc_btn a,.vc_grid.vc_row .vc_grid-item .vc_icon_element a,.vc_grid.vc_row .vc_grid-item .wpb_content_element a {
                    text-decoration: none;
                    border-bottom: 0
                }

                .vc_grid .vc_gitem-link {
                    border-bottom: none;
                    outline: 0;
                    -webkit-box-shadow: none;
                    -moz-box-shadow: none;
                    box-shadow: none
                }

                .vc_masonry_grid .vc_grid.vc_row .vc_grid-item,.vc_masonry_media_grid .vc_grid.vc_row .vc_grid-item {
                    position: static
                }

                .vc_basic_grid .vc_grid.vc_row .vc_grid-item.vc_visible-item,.vc_masonry_grid .vc_grid.vc_row .vc_grid-item.vc_visible-item,.vc_masonry_media_grid .vc_grid.vc_row .vc_grid-item.vc_visible-item,.vc_media_grid .vc_grid.vc_row .vc_grid-item.vc_visible-item {
                    display: block
                }

                @media (min-width: 768px) {
                    .vc_basic_grid .vc_grid.vc_row .vc_grid-item.vc_visible-item,.vc_media_grid .vc_grid.vc_row .vc_grid-item.vc_visible-item {
                        display:inline-block
                    }
                }

                @-moz-document url-prefix() {
                    .vc_masonry_grid .vc_grid-item,.vc_masonry_media_grid .vc_grid-item {
                        margin-left: -.01px
                    }
                }

                .vc_gitem-zone-b {
                    display: none;
                    overflow: hidden
                }

                .vc_gitem-float-none {
                    float: none
                }

                .vc_gitem-float-left {
                    float: left
                }

                .vc_gitem-float-right {
                    float: right
                }

                .vc_gitem-align-center {
                    text-align: center
                }

                .vc_gitem-align-right {
                    text-align: right
                }

                .vc_gitem-align-justify {
                    text-align: justify
                }

                .vc_gitem-block {
                    position: relative;
                    overflow: hidden
                }

                .vc_gitem-is-link {
                    cursor: pointer
                }

                .vc_gitem-link {
                    text-decoration: none
                }

                .vc_gitem_row {
                    margin-left: 0;
                    margin-right: 0;
                    padding: inherit;
                    box-sizing: border-box
                }

                .vc_gitem-zone-a .vc_gitem-row-position-top,.vc_gitem-zone-b .vc_gitem-row-position-top {
                    position: absolute;
                    left: 0;
                    right: 0;
                    top: 0
                }

                .vc_gitem-zone-a .vc_gitem-row-position-middle,.vc_gitem-zone-b .vc_gitem-row-position-middle {
                    position: absolute;
                    left: 0;
                    right: 0;
                    top: 50%;
                    -webkit-transform: translate(0,-50%);
                    -ms-transform: translate(0,-50%);
                    -o-transform: translate(0,-50%);
                    transform: translate(0,-50%)
                }

                .vc_gitem-zone-a .vc_gitem-row-position-bottom,.vc_gitem-zone-b .vc_gitem-row-position-bottom {
                    position: absolute;
                    left: 0;
                    right: 0;
                    bottom: 0
                }

                .vc_gitem_row .vc_gitem-col {
                    padding: 10px
                }

                .vc_gitem-zone {
                    position: relative;
                    background-clip: border-box;
                    overflow: hidden
                }

                .vc_gitem-zone .vc-zone-link {
                    display: block;
                    position: absolute;
                    top: 0;
                    right: 0;
                    left: 0;
                    bottom: 0;
                    z-index: 5
                }

                .vc_gitem-zone-img {
                    width: 100%;
                    display: block;
                    visibility: hidden;
                    height: auto
                }

                .vc_gitem-zone-a .vc_gitem-zone-mini {
                    box-sizing: border-box;
                    padding: inherit;
                    position: static;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0
                }

                .vc_gitem-zone-b .vc_gitem-zone-mini {
                    position: static;
                    padding: inherit;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    margin: 0
                }

                .vc_grid-item-zone-c-left .vc_gitem-animated-block {
                    float: right;
                    width: 50%
                }

                .vc_grid-item-zone-c-left .vc_gitem-zone-c,.vc_grid-item-zone-c-right .vc_gitem-animated-block {
                    float: left;
                    width: 50%
                }

                .vc_grid-item-zone-c-right .vc_gitem-zone-c {
                    float: right;
                    width: 50%
                }

                .vc-gitem-zone-height-mode-auto .vc_gitem-zone-img {
                    display: none!important
                }

                .vc-gitem-zone-height-mode-auto:before {
                    content: "";
                    display: block;
                    padding-top: 100%
                }

                .vc-gitem-zone-height-mode-auto.vc-gitem-zone-height-mode-auto-4-3:before {
                    padding-top: 75%
                }

                .vc-gitem-zone-height-mode-auto.vc-gitem-zone-height-mode-auto-3-4:before {
                    padding-top: 133.33333333%
                }

                .vc-gitem-zone-height-mode-auto.vc-gitem-zone-height-mode-auto-16-9:before {
                    padding-top: 56.25%
                }

                .vc-gitem-zone-height-mode-auto.vc-gitem-zone-height-mode-auto-9-16:before {
                    padding-top: 177.77777778%
                }

                .vc_gitem-animated-block {
                    position: relative
                }

                .vc_gitem-animate .vc_btn {
                    -webkit-transition: all 0s ease;
                    -o-transition: all 0s ease;
                    transition: all 0s ease
                }

                .vc_gitem-animate .vc_gitem-zone-b {
                    z-index: 199
                }

                .vc_gitem-animate-none .vc_gitem-zone-b {
                    display: block;
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: 0;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    box-sizing: border-box
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-none .vc_gitem-zone-b {
                    opacity: 1;
                    filter: alpha(opacity=100)
                }

                .vc_gitem-animate-blurOut .vc_gitem-zone-b,.vc_gitem-animate-blurScaleOut .vc_gitem-zone-b,.vc_gitem-animate-fadeIn .vc_gitem-zone-b,.vc_gitem-animate-scaleIn .vc_gitem-zone-b,.vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b {
                    display: block;
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: 0;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    -webkit-transition: all 1s ease;
                    -o-transition: all 1s ease;
                    transition: all 1s ease;
                    box-sizing: border-box
                }

                .vc_gitem-animate-blurOut .vc_gitem-zone-b .vc_separator,.vc_gitem-animate-blurScaleOut .vc_gitem-zone-b .vc_separator,.vc_gitem-animate-fadeIn .vc_gitem-zone-b .vc_separator,.vc_gitem-animate-scaleIn .vc_gitem-zone-b .vc_separator,.vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b .vc_separator {
                    -webkit-transition: all 1s ease;
                    -o-transition: all 1s ease;
                    transition: all 1s ease;
                    width: 0
                }

                .vc_gitem-animate-blurOut .vc_gitem-zone-b .vc_btn,.vc_gitem-animate-blurScaleOut .vc_gitem-zone-b .vc_btn,.vc_gitem-animate-fadeIn .vc_gitem-zone-b .vc_btn,.vc_gitem-animate-scaleIn .vc_gitem-zone-b .vc_btn,.vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b .vc_btn {
                    -webkit-transition: all 1s ease;
                    -o-transition: all 1s ease;
                    transition: all 1s ease;
                    -webkit-transform: scale(0);
                    -ms-transform: scale(0);
                    -o-transform: scale(0);
                    transform: scale(0)
                }

                .vc_gitem-animate-blurOut .vc_gitem-zone-b .vc_post-title,.vc_gitem-animate-blurScaleOut .vc_gitem-zone-b .vc_post-title,.vc_gitem-animate-fadeIn .vc_gitem-zone-b .vc_post-title,.vc_gitem-animate-scaleIn .vc_gitem-zone-b .vc_post-title,.vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b .vc_post-title {
                    display: inline-block;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    -webkit-transform: translate3d(0,-100%,0);
                    transform: translate3d(0,-100%,0);
                    -webkit-perspective: 1000;
                    -webkit-backface-visibility: hidden;
                    -webkit-transition: -webkit-transform 1s cubic-bezier(0,.275,.125,1),opacity .5s cubic-bezier(0,.275,.125,1);
                    -moz-transition: -moz-transform 1s cubic-bezier(0,.275,.125,1),opacity .5s cubic-bezier(0,.275,.125,1);
                    transition: transform 1s cubic-bezier(0,.275,.125,1),opacity .5s cubic-bezier(0,.275,.125,1)
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurOut .vc_gitem-zone-b .vc_post-title .vc_separator,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurScaleOut .vc_gitem-zone-b .vc_post-title .vc_separator,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-fadeIn .vc_gitem-zone-b .vc_post-title .vc_separator,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleIn .vc_gitem-zone-b .vc_post-title .vc_separator,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b .vc_post-title .vc_separator {
                    -webkit-transition: all 1s ease;
                    -o-transition: all 1s ease;
                    transition: all 1s ease;
                    width: 50%
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurOut .vc_gitem-zone-b .vc_post-title .vc_btn,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurScaleOut .vc_gitem-zone-b .vc_post-title .vc_btn,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-fadeIn .vc_gitem-zone-b .vc_post-title .vc_btn,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleIn .vc_gitem-zone-b .vc_post-title .vc_btn,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b .vc_post-title .vc_btn {
                    -webkit-transition: all 1s ease;
                    -o-transition: all 1s ease;
                    transition: all 1s ease;
                    -webkit-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1)
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurOut .vc_gitem-zone-b .vc_post-title .vc_post-title,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurScaleOut .vc_gitem-zone-b .vc_post-title .vc_post-title,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-fadeIn .vc_gitem-zone-b .vc_post-title .vc_post-title,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleIn .vc_gitem-zone-b .vc_post-title .vc_post-title,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b .vc_post-title .vc_post-title {
                    opacity: 1;
                    filter: alpha(opacity=100);
                    -webkit-transform: translate3d(0,0,0);
                    transform: translate3d(0,0,0)
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurOut .vc_gitem-zone-b,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurScaleOut .vc_gitem-zone-b,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-fadeIn .vc_gitem-zone-b,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleIn .vc_gitem-zone-b,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b {
                    opacity: 1;
                    filter: alpha(opacity=100)
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurOut .vc_gitem-zone-b .vc_separator,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurScaleOut .vc_gitem-zone-b .vc_separator,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-fadeIn .vc_gitem-zone-b .vc_separator,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleIn .vc_gitem-zone-b .vc_separator,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b .vc_separator {
                    -webkit-transition: all 1s ease;
                    -o-transition: all 1s ease;
                    transition: all 1s ease;
                    width: 50%
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurOut .vc_gitem-zone-b .vc_btn,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurScaleOut .vc_gitem-zone-b .vc_btn,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-fadeIn .vc_gitem-zone-b .vc_btn,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleIn .vc_gitem-zone-b .vc_btn,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b .vc_btn {
                    -webkit-transition: all 1s ease;
                    -o-transition: all 1s ease;
                    transition: all 1s ease;
                    -webkit-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1)
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurOut .vc_gitem-zone-b .vc_post-title,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurScaleOut .vc_gitem-zone-b .vc_post-title,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-fadeIn .vc_gitem-zone-b .vc_post-title,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleIn .vc_gitem-zone-b .vc_post-title,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b .vc_post-title {
                    opacity: 1;
                    filter: alpha(opacity=100);
                    -webkit-transform: translate3d(0,0,0);
                    transform: translate3d(0,0,0)
                }

                .vc_gitem-animate-scaleIn {
                    overflow: hidden
                }

                .vc_gitem-animate-scaleIn .vc_gitem-zone-a {
                    -webkit-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: -webkit-transform .3s ease-in-out;
                    -moz-transition: -moz-transform .3s ease-in-out;
                    -o-transition: -o-transform .3s ease-in-out;
                    transition: transform .3s ease-in-out
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleIn .vc_gitem-zone-a {
                    -webkit-transform: scale(1.1);
                    -ms-transform: scale(1.1);
                    -o-transform: scale(1.1);
                    transform: scale(1.1)
                }

                .vc_gitem-animate-scaleRotateIn {
                    overflow: hidden
                }

                .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-a {
                    -webkit-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: -webkit-transform .3s ease-in-out;
                    -moz-transition: -moz-transform .3s ease-in-out;
                    -o-transition: -o-transform .3s ease-in-out;
                    transition: transform .3s ease-in-out
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-a {
                    -webkit-transform: scale(1.5) rotate(10deg);
                    -moz-transform: scale(1.5) rotate(10deg);
                    -ms-transform: scale(1.5) rotate(10deg);
                    -o-transform: scale(1.5) rotate(10deg);
                    transform: scale(1.5) rotate(10deg)
                }

                .vc_gitem-animate-blurOut .vc_gitem-zone-a,.vc_gitem-animate-blurScaleOut .vc_gitem-zone-a {
                    -webkit-filter: blur(0);
                    -moz-filter: blur(0);
                    -ms-filter: blur(0);
                    filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius='0');
                    -webkit-transform-origin: 50% 50%;
                    -moz-transform-origin: 50% 50%;
                    -ms-transform-origin: 50% 50%;
                    transform-origin: 50% 50%;
                    -webkit-perspective: 1000;
                    -webkit-backface-visibility: hidden;
                    webkit-transition: filter .5s cubic-bezier(0,.275,.125,1),-webkit-transform .5s cubic-bezier(0,.275,.125,1);
                    -moz-transition: filter .5s cubic-bezier(0,.275,.125,1),-moz-transform .5s cubic-bezier(0,.275,.125,1);
                    transition: filter .5s cubic-bezier(0,.275,.125,1),transform .5s cubic-bezier(0,.275,.125,1)
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurOut .vc_gitem-zone-a,.vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurScaleOut .vc_gitem-zone-a {
                    -webkit-filter: blur(2px);
                    -moz-filter: blur(2px);
                    -ms-filter: blur(2px);
                    filter: blur(2px);
                    filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius='0')
                }

                .vc_gitem-animate-blurScaleOut {
                    overflow: hidden
                }

                .vc_gitem-animate-blurScaleOut .vc_gitem-zone-a {
                    -webkit-transform: scale(1.1);
                    -ms-transform: scale(1.1);
                    -o-transform: scale(1.1);
                    transform: scale(1.1)
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-blurScaleOut .vc_gitem-zone-a {
                    -webkit-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1)
                }

                .vc_gitem-animate-slideInRight {
                    overflow: hidden
                }

                .vc_gitem-animate-slideInRight .vc_gitem-zone-b {
                    display: block;
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    margin: 0;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    -webkit-transition: all 1s ease;
                    -o-transition: all 1s ease;
                    transition: all 1s ease;
                    -webkit-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%)
                }

                .vc_gitem-animate-slideBottom .vc_gitem-zone-b,.vc_gitem-animate-slideInLeft .vc_gitem-zone-b {
                    -webkit-transition: all 1s ease;
                    -o-transition: all 1s ease;
                    left: 0;
                    right: 0;
                    display: block;
                    margin: 0
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-slideInRight .vc_gitem-zone-b {
                    opacity: 1;
                    filter: alpha(opacity=100);
                    -webkit-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0)
                }

                .vc_gitem-animate-slideInLeft {
                    overflow: hidden
                }

                .vc_gitem-animate-slideInLeft .vc_gitem-zone-b {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    transition: all 1s ease;
                    -webkit-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                    opacity: 0;
                    filter: alpha(opacity=0)
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-slideInLeft .vc_gitem-zone-b {
                    opacity: 1;
                    filter: alpha(opacity=100);
                    -webkit-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0)
                }

                .vc_gitem-animate-slideBottom {
                    overflow: hidden;
                    position: relative
                }

                .vc_gitem-animate-slideBottom .vc_gitem-zone-b {
                    transition: all 1s ease;
                    z-index: 1000;
                    position: absolute;
                    top: 100%;
                    height: 100%
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-slideBottom .vc_gitem-zone-b {
                    top: 0
                }

                .vc_gitem-animate-slideTop {
                    overflow: hidden;
                    position: relative
                }

                .vc_gitem-animate-slideTop .vc_gitem-zone-b {
                    display: block;
                    -webkit-transition: all 1s ease;
                    -o-transition: all 1s ease;
                    transition: all 1s ease;
                    z-index: 1000;
                    position: absolute;
                    top: -100%;
                    height: 100%;
                    left: 0;
                    right: 0;
                    margin: 0
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-slideTop .vc_gitem-zone-b {
                    top: 0
                }

                .vc_gitem-animate-flipFadeIn {
                    overflow: hidden
                }

                .vc_gitem-animate-flipFadeIn .vc_gitem-zone-a {
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transition: -webkit-transform 1s;
                    -moz-transition: -moz-transform 1s;
                    -o-transition: -o-transform 1s;
                    transition: transform 1s;
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    -o-transform-style: preserve-3d;
                    transform-style: preserve-3d
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-flipFadeIn .vc_gitem-zone-a {
                    -webkit-transform: rotateX(180deg);
                    -ms-transform: rotateX(180deg);
                    -o-transform: rotateX(180deg);
                    transform: rotateX(180deg)
                }

                .vc_gitem-animate-flipFadeIn .vc_gitem-zone-b {
                    display: block;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    position: absolute;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    -webkit-transition: all .6s ease;
                    -o-transition: all .6s ease;
                    transition: all .6s ease;
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    -o-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                    -webkit-transform: rotateX(180deg);
                    -ms-transform: rotateX(180deg);
                    -o-transform: rotateX(180deg);
                    transform: rotateX(180deg);
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-flipFadeIn .vc_gitem-zone-b {
                    opacity: 1;
                    filter: alpha(opacity=100);
                    -webkit-transform: rotateX(0);
                    -ms-transform: rotateX(0);
                    -o-transform: rotateX(0);
                    transform: rotateX(0)
                }

                .vc_gitem-animate-flipHorizontalFadeIn {
                    overflow: hidden
                }

                .vc_gitem-animate-flipHorizontalFadeIn .vc_gitem-zone-a {
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transition: -webkit-transform 1s;
                    -moz-transition: -moz-transform 1s;
                    -o-transition: -o-transform 1s;
                    transition: transform 1s;
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    -o-transform-style: preserve-3d;
                    transform-style: preserve-3d
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-flipHorizontalFadeIn .vc_gitem-zone-a {
                    -webkit-transform: rotateY(180deg);
                    -ms-transform: rotateY(180deg);
                    -o-transform: rotateY(180deg);
                    transform: rotateY(180deg)
                }

                .vc_gitem-animate-flipHorizontalFadeIn .vc_gitem-zone-b {
                    display: block;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    position: absolute;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    -webkit-transition: all .6s ease;
                    -o-transition: all .6s ease;
                    transition: all .6s ease;
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    -o-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                    -webkit-transform: rotateY(180deg);
                    -ms-transform: rotateY(180deg);
                    -o-transform: rotateY(180deg);
                    transform: rotateY(180deg);
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    backface-visibility: hidden
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-flipHorizontalFadeIn .vc_gitem-zone-b {
                    opacity: 1;
                    filter: alpha(opacity=100);
                    -webkit-transform: rotateY(0);
                    -ms-transform: rotateY(0);
                    -o-transform: rotateY(0);
                    transform: rotateY(0)
                }

                .vc_gitem-animate-goTop20 {
                    overflow: hidden
                }

                .vc_gitem-animate-goTop20 .vc_gitem-zone-a {
                    position: relative;
                    -webkit-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    -webkit-transition: -webkit-transform .5s ease;
                    -moz-transition: -moz-transform .5s ease;
                    -o-transition: -o-transform .5s ease;
                    transition: transform .5s ease
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-goTop20 .vc_gitem-zone-a {
                    -webkit-transform: translateY(-20%);
                    -ms-transform: translateY(-20%);
                    -o-transform: translateY(-20%);
                    transform: translateY(-20%)
                }

                .vc_gitem-animate-goTop20 .vc_gitem-zone-b {
                    display: block;
                    -webkit-transition: bottom .5s ease;
                    -o-transition: bottom .5s ease;
                    transition: bottom .5s ease;
                    bottom: -100%;
                    z-index: 1000;
                    position: absolute;
                    width: 100%;
                    margin: 0
                }

                .vc_gitem-animate-goTop20 .vc_gitem-zone-b .vc_gitem-zone-mini {
                    position: static;
                    -webkit-transform: none;
                    -ms-transform: none;
                    transform: none
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-goTop20 .vc_gitem-zone-b {
                    bottom: 0
                }

                .vc_gitem-animate-goBottom20 {
                    overflow: hidden
                }

                .vc_gitem-animate-goBottom20 .vc_gitem-zone-a {
                    position: relative;
                    -webkit-transform: translateY(0);
                    -ms-transform: translateY(0);
                    transform: translateY(0);
                    -webkit-transition: -webkit-transform .5s ease;
                    -moz-transition: -moz-transform .5s ease;
                    -o-transition: -o-transform .5s ease;
                    transition: transform .5s ease
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-goBottom20 .vc_gitem-zone-a {
                    -webkit-transform: translateY(20%);
                    -ms-transform: translateY(20%);
                    transform: translateY(20%)
                }

                .vc_gitem-animate-goBottom20 .vc_gitem-zone-b {
                    display: block;
                    -webkit-transition: top .5s ease;
                    -o-transition: top .5s ease;
                    transition: top .5s ease;
                    top: -100%;
                    z-index: 1000;
                    position: absolute;
                    width: 100%;
                    margin: 0
                }

                .vc_gitem-animate-goBottom20 .vc_gitem-zone-b .vc_gitem-zone-mini {
                    position: static;
                    -webkit-transform: none;
                    -ms-transform: none;
                    transform: none
                }

                .vc_grid-item-mini.vc_is-hover .vc_gitem-animate-goBottom20 .vc_gitem-zone-b {
                    top: 0
                }

                .vc_gitem-post-data {
                    margin-bottom: 15px
                }

                .vc_gitem-post-data h2 {
                    margin: 0
                }

                .vc_gitem-post-category-name .vc_gitem-link {
                    color: inherit
                }

                .vc_grid .vc_pageable-load-more-btn {
                    text-align: center;
                    margin-top: 25px
                }

                .vc_grid .vc_pageable-load-more-btn>.vc_btn {
                    outline: 0
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots {
                    display: none;
                    margin-top: 20px;
                    text-align: center;
                    -webkit-tap-highlight-color: transparent
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots .vc_grid-owl-dot {
                    cursor: pointer;
                    display: inline-block
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots .vc_grid-owl-dot span {
                    width: 10px;
                    height: 10px;
                    margin: 5px 7px;
                    display: block;
                    -webkit-backface-visibility: visible;
                    -webkit-transition: opacity .2s ease;
                    -o-transition: opacity .2s ease;
                    transition: opacity .2s ease
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots {
                    display: block
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots .vc_grid-owl-dot span {
                    border: 3px solid;
                    -webkit-transition: background-color .2s ease;
                    -o-transition: background-color .2s ease;
                    transition: background-color .2s ease
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots {
                    display: block
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots .vc_grid-owl-dot span {
                    border: 3px solid;
                    -webkit-border-radius: 10px;
                    -moz-border-radius: 10px;
                    border-radius: 10px;
                    -webkit-transition: background-color .2s ease;
                    -o-transition: background-color .2s ease;
                    transition: background-color .2s ease
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots {
                    display: block
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot span {
                    -webkit-border-radius: 30px;
                    -moz-border-radius: 30px;
                    border-radius: 30px;
                    opacity: .6;
                    filter: alpha(opacity=60)
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot:hover span {
                    opacity: 1;
                    filter: alpha(opacity=100)
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots {
                    display: block
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot span {
                    width: 10px;
                    height: 10px;
                    margin: 5px 7px;
                    display: block;
                    -webkit-backface-visibility: visible;
                    -webkit-transition: opacity .2s ease;
                    -o-transition: opacity .2s ease;
                    transition: opacity .2s ease;
                    opacity: .6;
                    filter: alpha(opacity=60)
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot:hover span {
                    opacity: 1;
                    filter: alpha(opacity=100)
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots {
                    display: block
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot span {
                    width: 10px;
                    height: 10px;
                    margin: 5px 7px;
                    display: block;
                    -webkit-backface-visibility: visible;
                    -webkit-transition: opacity .2s ease;
                    -o-transition: opacity .2s ease;
                    transition: opacity .2s ease;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    border-radius: 3px;
                    opacity: .6;
                    filter: alpha(opacity=60)
                }

                .vc-hoverbox-block,.vc-hoverbox-block-inner * {
                    backface-visibility: hidden
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme:hover .vc_grid-owl-nav {
                    opacity: 1;
                    filter: alpha(opacity=100)
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-blue .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-blue .vc_grid-owl-dot span {
                    border-color: #5472D2!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-blue .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-blue .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-blue .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-blue .vc_grid-owl-dot:hover span {
                    background-color: #5472D2!important;
                    border-color: #5472D2!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-turquoise .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-turquoise .vc_grid-owl-dot span {
                    border-color: #00C1CF!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-turquoise .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-turquoise .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-turquoise .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-turquoise .vc_grid-owl-dot:hover span {
                    background-color: #00C1CF!important;
                    border-color: #00C1CF!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-pink .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-pink .vc_grid-owl-dot span {
                    border-color: #FE6C61!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-pink .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-pink .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-pink .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-pink .vc_grid-owl-dot:hover span {
                    background-color: #FE6C61!important;
                    border-color: #FE6C61!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-violet .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-violet .vc_grid-owl-dot span {
                    border-color: #8D6DC4!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-violet .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-violet .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-violet .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-violet .vc_grid-owl-dot:hover span {
                    background-color: #8D6DC4!important;
                    border-color: #8D6DC4!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-peacoc .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-peacoc .vc_grid-owl-dot span {
                    border-color: #4CADC9!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-peacoc .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-peacoc .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-peacoc .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-peacoc .vc_grid-owl-dot:hover span {
                    background-color: #4CADC9!important;
                    border-color: #4CADC9!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-chino .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-chino .vc_grid-owl-dot span {
                    border-color: #CEC2AB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-chino .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-chino .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-chino .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-chino .vc_grid-owl-dot:hover span {
                    background-color: #CEC2AB!important;
                    border-color: #CEC2AB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-mulled_wine .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-mulled_wine .vc_grid-owl-dot span {
                    border-color: #50485B!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-mulled_wine .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-mulled_wine .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-mulled_wine .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-mulled_wine .vc_grid-owl-dot:hover span {
                    background-color: #50485B!important;
                    border-color: #50485B!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-vista_blue .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-vista_blue .vc_grid-owl-dot span {
                    border-color: #75D69C!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-vista_blue .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-vista_blue .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-vista_blue .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-vista_blue .vc_grid-owl-dot:hover span {
                    background-color: #75D69C!important;
                    border-color: #75D69C!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-black .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-black .vc_grid-owl-dot span {
                    border-color: #2A2A2A!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-black .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-black .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-black .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-black .vc_grid-owl-dot:hover span {
                    background-color: #2A2A2A!important;
                    border-color: #2A2A2A!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-grey .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-grey .vc_grid-owl-dot span {
                    border-color: #EBEBEB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-grey .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-grey .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-grey .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-grey .vc_grid-owl-dot:hover span {
                    background-color: #EBEBEB!important;
                    border-color: #EBEBEB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-orange .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-orange .vc_grid-owl-dot span {
                    border-color: #F7BE68!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-orange .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-orange .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-orange .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-orange .vc_grid-owl-dot:hover span {
                    background-color: #F7BE68!important;
                    border-color: #F7BE68!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-sky .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-sky .vc_grid-owl-dot span {
                    border-color: #5AA1E3!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-sky .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-sky .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-sky .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-sky .vc_grid-owl-dot:hover span {
                    background-color: #5AA1E3!important;
                    border-color: #5AA1E3!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-green .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-green .vc_grid-owl-dot span {
                    border-color: #6DAB3C!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-green .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-green .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-green .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-green .vc_grid-owl-dot:hover span {
                    background-color: #6DAB3C!important;
                    border-color: #6DAB3C!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-juicy_pink .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-juicy_pink .vc_grid-owl-dot span {
                    border-color: #F4524D!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-juicy_pink .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-juicy_pink .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-juicy_pink .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-juicy_pink .vc_grid-owl-dot:hover span {
                    background-color: #F4524D!important;
                    border-color: #F4524D!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-sandy_brown .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-sandy_brown .vc_grid-owl-dot span {
                    border-color: #F79468!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-sandy_brown .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-sandy_brown .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-sandy_brown .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-sandy_brown .vc_grid-owl-dot:hover span {
                    background-color: #F79468!important;
                    border-color: #F79468!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-purple .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-purple .vc_grid-owl-dot span {
                    border-color: #B97EBB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-purple .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-purple .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-purple .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-purple .vc_grid-owl-dot:hover span {
                    background-color: #B97EBB!important;
                    border-color: #B97EBB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-white .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-white .vc_grid-owl-dot span {
                    border-color: #FFF!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-white .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots.vc_grid-owl-dots-color-white .vc_grid-owl-dot:hover span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-white .vc_grid-owl-dot.active span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots.vc_grid-owl-dots-color-white .vc_grid-owl-dot:hover span {
                    background-color: #FFF!important;
                    border-color: #FFF!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-blue .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-blue .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-blue .vc_grid-owl-dot span {
                    background-color: #5472D2!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-turquoise .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-turquoise .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-turquoise .vc_grid-owl-dot span {
                    background-color: #00C1CF!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-pink .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-pink .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-pink .vc_grid-owl-dot span {
                    background-color: #FE6C61!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-violet .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-violet .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-violet .vc_grid-owl-dot span {
                    background-color: #8D6DC4!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-peacoc .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-peacoc .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-peacoc .vc_grid-owl-dot span {
                    background-color: #4CADC9!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-chino .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-chino .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-chino .vc_grid-owl-dot span {
                    background-color: #CEC2AB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-mulled_wine .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-mulled_wine .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-mulled_wine .vc_grid-owl-dot span {
                    background-color: #50485B!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-vista_blue .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-vista_blue .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-vista_blue .vc_grid-owl-dot span {
                    background-color: #75D69C!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-black .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-black .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-black .vc_grid-owl-dot span {
                    background-color: #2A2A2A!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-grey .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-grey .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-grey .vc_grid-owl-dot span {
                    background-color: #EBEBEB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-orange .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-orange .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-orange .vc_grid-owl-dot span {
                    background-color: #F7BE68!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-sky .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-sky .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-sky .vc_grid-owl-dot span {
                    background-color: #5AA1E3!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-green .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-green .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-green .vc_grid-owl-dot span {
                    background-color: #6DAB3C!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-juicy_pink .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-juicy_pink .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-juicy_pink .vc_grid-owl-dot span {
                    background-color: #F4524D!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-sandy_brown .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-sandy_brown .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-sandy_brown .vc_grid-owl-dot span {
                    background-color: #F79468!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-purple .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-purple .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-purple .vc_grid-owl-dot span {
                    background-color: #B97EBB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots.vc_grid-owl-dots-color-white .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots.vc_grid-owl-dots-color-white .vc_grid-owl-dot span,.vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots.vc_grid-owl-dots-color-white .vc_grid-owl-dot span {
                    background-color: #FFF!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav {
                    cursor: pointer;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    -webkit-transition: opacity .3s ease-in 0s;
                    -o-transition: opacity .3s ease-in 0s;
                    transition: opacity .3s ease-in 0s;
                    -webkit-tap-highlight-color: transparent
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav .disabled {
                    display: none!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme .vc_grid-owl-nav .vc_grid-owl-prev {
                    position: absolute;
                    top: 50%;
                    margin-top: -12.5px;
                    opacity: .5;
                    filter: alpha(opacity=50);
                    font-size: 25px;
                    line-height: 25px;
                    height: 25px;
                    display: inline-block;
                    text-decoration: none;
                    cursor: pointer;
                    -webkit-transition: opacity .3s ease-in 0s;
                    -o-transition: opacity .3s ease-in 0s;
                    transition: opacity .3s ease-in 0s
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav .vc_grid-owl-next:hover,.vc_grid.vc_grid-owl-theme .vc_grid-owl-nav .vc_grid-owl-prev:hover {
                    opacity: 1;
                    filter: alpha(opacity=100)
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav .vc_grid-owl-prev {
                    left: 5px
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav .vc_grid-owl-prev.vc_grid-nav-prev-outside {
                    left: -30px
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav .vc_grid-owl-next {
                    right: 5px
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav .vc_grid-owl-next.vc_grid-nav-next-outside {
                    right: -30px
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-blue {
                    color: #5472D2!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-turquoise {
                    color: #00C1CF!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-pink {
                    color: #FE6C61!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-violet {
                    color: #8D6DC4!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-peacoc {
                    color: #4CADC9!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-chino {
                    color: #CEC2AB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-mulled_wine {
                    color: #50485B!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-vista_blue {
                    color: #75D69C!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-black {
                    color: #2A2A2A!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-grey {
                    color: #EBEBEB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-orange {
                    color: #F7BE68!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-sky {
                    color: #5AA1E3!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-green {
                    color: #6DAB3C!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-juicy_pink {
                    color: #F4524D!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-sandy_brown {
                    color: #F79468!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-purple {
                    color: #B97EBB!important
                }

                .vc_grid.vc_grid-owl-theme .vc_grid-owl-nav.vc_grid-owl-nav-color-white {
                    color: #FFF!important
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-1px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-1px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -13px
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-2px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-2px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -13.5px
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-3px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-3px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -14px
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-4px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-4px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -14.5px
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-5px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-5px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -15px
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-10px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-10px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -17.5px
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-15px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-15px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -20px
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-20px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-20px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -22.5px
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-25px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-25px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -25px
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-30px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-30px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -27.5px
                }

                .vc_grid.vc_grid-owl-theme.vc_grid-gutter-35px .vc_grid-owl-nav .vc_grid-owl-next,.vc_grid.vc_grid-owl-theme.vc_grid-gutter-35px .vc_grid-owl-nav .vc_grid-owl-prev {
                    margin-top: -30px
                }

                .vc_grid-pagination .vc_grid-pagination-list {
                    outline: 0;
                    display: block;
                    padding-left: 0;
                    text-align: center;
                    margin: 20px 0 0!important;
                    border-radius: 2px
                }

                .vc_grid-pagination .vc_grid-pagination-list>li {
                    display: inline-block;
                    margin: 0;
                    border: 0 solid transparent
                }

                .vc_grid-pagination .vc_grid-pagination-list>li>a,.vc_grid-pagination .vc_grid-pagination-list>li>span {
                    color: #fff;
                    background-color: #428bca;
                    border: 1px solid #428bca;
                    -webkit-transition: opacity .3s ease-in 0s;
                    -o-transition: opacity .3s ease-in 0s;
                    transition: opacity .3s ease-in 0s;
                    position: relative;
                    float: left;
                    padding: 3px 10px;
                    line-height: 1.42857143;
                    text-decoration: none;
                    opacity: .5;
                    filter: alpha(opacity=50);
                    margin-left: -1px;
                    font-size: 10px
                }

                .vc_grid-pagination .vc_grid-pagination-list>li:first-child>a,.vc_grid-pagination .vc_grid-pagination-list>li:first-child>span {
                    margin-left: 0
                }

                .vc_grid-pagination .vc_grid-pagination-list>li:focus a,.vc_grid-pagination .vc_grid-pagination-list>li:focus span,.vc_grid-pagination .vc_grid-pagination-list>li:hover a,.vc_grid-pagination .vc_grid-pagination-list>li:hover span {
                    opacity: 1;
                    filter: alpha(opacity=100)
                }

                .vc_grid-pagination .vc_grid-pagination-list>.vc_grid-prev>a:after {
                    font-family: vc_grid_v1;
                    display: inline-block;
                    content: "\e61b"
                }

                .vc_grid-pagination .vc_grid-pagination-list>.vc_grid-next>a:after {
                    font-family: vc_grid_v1;
                    display: inline-block;
                    content: "\e61a"
                }

                .vc_grid-pagination .vc_grid-pagination-list>.vc_grid-first>a:after {
                    font-family: vc_grid_v1;
                    display: inline-block;
                    content: "\e618"
                }

                .vc_grid-pagination .vc_grid-pagination-list>.vc_grid-last>a:after {
                    font-family: vc_grid_v1;
                    display: inline-block;
                    content: "\e619"
                }

                .vc_grid-pagination .vc_grid-pagination-list>.vc_grid-active>a,.vc_grid-pagination .vc_grid-pagination-list>.vc_grid-active>a:focus,.vc_grid-pagination .vc_grid-pagination-list>.vc_grid-active>a:hover,.vc_grid-pagination .vc_grid-pagination-list>.vc_grid-active>span,.vc_grid-pagination .vc_grid-pagination-list>.vc_grid-active>span:focus,.vc_grid-pagination .vc_grid-pagination-list>.vc_grid-active>span:hover {
                    z-index: 2;
                    opacity: 1;
                    filter: alpha(opacity=100);
                    cursor: default
                }

                .vc_grid-pagination .vc_grid-pagination-list>.vc_grid-disabled>a,.vc_grid-pagination .vc_grid-pagination-list>.vc_grid-disabled>a:focus,.vc_grid-pagination .vc_grid-pagination-list>.vc_grid-disabled>a:hover,.vc_grid-pagination .vc_grid-pagination-list>.vc_grid-disabled>span,.vc_grid-pagination .vc_grid-pagination-list>.vc_grid-disabled>span:focus,.vc_grid-pagination .vc_grid-pagination-list>.vc_grid-disabled>span:hover {
                    display: none
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-blue>li {
                    border-color: #5472D2!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-blue>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-blue>li>span {
                    background-color: #5472D2!important;
                    border-color: #5472D2!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-turquoise>li {
                    border-color: #00C1CF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-turquoise>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-turquoise>li>span {
                    background-color: #00C1CF!important;
                    border-color: #00C1CF!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-pink>li {
                    border-color: #FE6C61!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-pink>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-pink>li>span {
                    background-color: #FE6C61!important;
                    border-color: #FE6C61!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-violet>li {
                    border-color: #8D6DC4!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-violet>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-violet>li>span {
                    background-color: #8D6DC4!important;
                    border-color: #8D6DC4!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-peacoc>li {
                    border-color: #4CADC9!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-peacoc>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-peacoc>li>span {
                    background-color: #4CADC9!important;
                    border-color: #4CADC9!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-chino>li {
                    border-color: #CEC2AB!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-chino>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-chino>li>span {
                    background-color: #CEC2AB!important;
                    border-color: #CEC2AB!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-mulled_wine>li {
                    border-color: #50485B!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-mulled_wine>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-mulled_wine>li>span {
                    background-color: #50485B!important;
                    border-color: #50485B!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-vista_blue>li {
                    border-color: #75D69C!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-vista_blue>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-vista_blue>li>span {
                    background-color: #75D69C!important;
                    border-color: #75D69C!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-black>li {
                    border-color: #2A2A2A!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-black>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-black>li>span {
                    background-color: #2A2A2A!important;
                    border-color: #2A2A2A!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-grey>li {
                    border-color: #EBEBEB!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-grey>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-grey>li>span {
                    background-color: #EBEBEB!important;
                    border-color: #EBEBEB!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-orange>li {
                    border-color: #F7BE68!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-orange>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-orange>li>span {
                    background-color: #F7BE68!important;
                    border-color: #F7BE68!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-sky>li {
                    border-color: #5AA1E3!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-sky>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-sky>li>span {
                    background-color: #5AA1E3!important;
                    border-color: #5AA1E3!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-green>li {
                    border-color: #6DAB3C!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-green>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-green>li>span {
                    background-color: #6DAB3C!important;
                    border-color: #6DAB3C!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-juicy_pink>li {
                    border-color: #F4524D!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-juicy_pink>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-juicy_pink>li>span {
                    background-color: #F4524D!important;
                    border-color: #F4524D!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-sandy_brown>li {
                    border-color: #F79468!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-sandy_brown>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-sandy_brown>li>span {
                    background-color: #F79468!important;
                    border-color: #F79468!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-purple>li {
                    border-color: #B97EBB!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-purple>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-purple>li>span {
                    background-color: #B97EBB!important;
                    border-color: #B97EBB!important;
                    color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-white>li {
                    border-color: #FFF!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-white>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination-color-white>li>span {
                    background-color: #FFF!important;
                    border-color: #FFF!important;
                    color: #2A2A2A!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_dark>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_dark>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_light>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_light>li>span {
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    min-width: 28px;
                    min-height: 22px
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default>li:first-child>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default>li:first-child>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_dark>li:first-child>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_dark>li:first-child>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_light>li:first-child>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_light>li:first-child>span {
                    border-bottom-left-radius: 2px;
                    border-top-left-radius: 2px
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default>li:last-child>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default>li:last-child>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_dark>li:last-child>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_dark>li:last-child>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_light>li:last-child>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_light>li:last-child>span {
                    border-bottom-right-radius: 2px;
                    border-top-right-radius: 2px
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_square>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_square>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_square_dark>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_square_dark>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_square_light>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_square_light>li>span {
                    margin-left: 5px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    min-height: 22px;
                    min-width: 22px;
                    padding: 3px
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_dark>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_dark>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_light>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_light>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_dark>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_dark>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_light>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_light>li>span {
                    margin-left: 5px;
                    border-radius: 30px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    min-height: 22px;
                    min-width: 22px;
                    padding: 3px
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_dark>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_dark>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_light>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_light>li>span {
                    -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;
                    border-radius: 5px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    min-height: 22px;
                    min-width: 22px;
                    padding: 3px
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_dark>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_dark>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_dark>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_dark>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_dark>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_dark>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_square_dark>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_square_dark>li>span {
                    background-color: transparent!important;
                    color: #000!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_light>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_default_light>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_light>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_light>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_light>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_rounded_square_light>li>span,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_square_light>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_square_light>li>span {
                    background-color: transparent!important;
                    color: #fff!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_stripes_dark>li,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_stripes_light>li {
                    border-left-width: 1px!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_stripes_dark>li>a,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_stripes_light>li>a {
                    border-width: 0;
                    background: rgba(0,0,0,0)!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_stripes_dark li.vc_grid-disabled+li,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_stripes_dark>li:first-child,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_stripes_light li.vc_grid-disabled+li,.vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_stripes_light>li:first-child {
                    border-width: 0!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_stripes_dark>li>a {
                    color: #000!important
                }

                .vc_grid-pagination .vc_grid-pagination-list.vc_grid-pagination_stripes_light>li>a {
                    color: #fff!important
                }

                .vc_grid-filter.vc_grid-filter-color-black>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-black>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-blue>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-blue>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-chino>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-chino>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-peacoc>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-peacoc>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-pink>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-pink>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-turquoise>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-turquoise>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-violet>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-violet>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-vista_blue>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-vista_blue>.vc_grid-filter-item:hover>span {
                    color: #FFF
                }

                .vc_grid-loading {
                    margin: 2em auto;
                    font-size: 10px;
                    position: relative;
                    text-indent: -9999em
                }

                .vc_grid-loading,.vc_grid-loading:after,.vc_grid-loading:before {
                    border-radius: 50%;
                    width: 12px;
                    height: 12px;
                    -webkit-animation: load7 1.8s infinite ease-in-out;
                    animation: load7 1.8s infinite ease-in-out
                }

                .vc_grid-loading:before {
                    left: -20px
                }

                .vc_grid-loading:after {
                    left: 20px;
                    -webkit-animation-delay: .32s;
                    animation-delay: .32s
                }

                .vc_grid-loading:after,.vc_grid-loading:before {
                    content: '';
                    position: absolute;
                    top: 0
                }

                @-webkit-keyframes load7 {
                    0%,100%,80% {
                        box-shadow: 0 2.5em 0 -1.3em rgba(235,235,235,.75)
                    }

                    40% {
                        box-shadow: 0 2.5em 0 0 rgba(235,235,235,.75)
                    }
                }

                @keyframes load7 {
                    0%,100%,80% {
                        box-shadow: 0 2.5em 0 -1.3em rgba(235,235,235,.75)
                    }

                    40% {
                        box-shadow: 0 2.5em 0 0 rgba(235,235,235,.75)
                    }
                }

                .vc_grid-filter {
                    margin-left: 0;
                    margin-bottom: 20px;
                    list-style: none;
                    padding: 0
                }

                .vc_grid-filter.vc_grid-filter-center {
                    text-align: center
                }

                .vc_grid-filter.vc_grid-filter-right {
                    text-align: right
                }

                .vc_grid-filter.vc_grid-filter-left {
                    text-align: left
                }

                .vc_grid-filter.vc_grid-filter-color-blue>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-blue>.vc_grid-filter-item:hover {
                    background-color: #5472D2
                }

                .vc_grid-filter.vc_grid-filter-color-turquoise>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-turquoise>.vc_grid-filter-item:hover {
                    background-color: #00C1CF
                }

                .vc_grid-filter.vc_grid-filter-color-pink>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-pink>.vc_grid-filter-item:hover {
                    background-color: #FE6C61
                }

                .vc_grid-filter.vc_grid-filter-color-violet>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-violet>.vc_grid-filter-item:hover {
                    background-color: #8D6DC4
                }

                .vc_grid-filter.vc_grid-filter-color-peacoc>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-peacoc>.vc_grid-filter-item:hover {
                    background-color: #4CADC9
                }

                .vc_grid-filter.vc_grid-filter-color-chino>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-chino>.vc_grid-filter-item:hover {
                    background-color: #CEC2AB
                }

                .vc_grid-filter.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item:hover {
                    background-color: #50485B
                }

                .vc_grid-filter.vc_grid-filter-color-vista_blue>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-vista_blue>.vc_grid-filter-item:hover {
                    background-color: #75D69C
                }

                .vc_grid-filter.vc_grid-filter-color-black>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-black>.vc_grid-filter-item:hover {
                    background-color: #2A2A2A
                }

                .vc_grid-filter.vc_grid-filter-color-grey>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-grey>.vc_grid-filter-item:hover {
                    background-color: #EBEBEB
                }

                .vc_grid-filter.vc_grid-filter-color-grey>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-grey>.vc_grid-filter-item:hover>span {
                    color: #666
                }

                .vc_grid-filter.vc_grid-filter-color-green>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-green>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-orange>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-orange>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-purple>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-purple>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-color-sky>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-sky>.vc_grid-filter-item:hover>span {
                    color: #FFF
                }

                .vc_grid-filter.vc_grid-filter-color-orange>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-orange>.vc_grid-filter-item:hover {
                    background-color: #F7BE68
                }

                .vc_grid-filter.vc_grid-filter-color-sky>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-sky>.vc_grid-filter-item:hover {
                    background-color: #5AA1E3
                }

                .vc_grid-filter.vc_grid-filter-color-green>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-green>.vc_grid-filter-item:hover {
                    background-color: #6DAB3C
                }

                .vc_grid-filter.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item:hover {
                    background-color: #F4524D
                }

                .vc_grid-filter.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item:hover {
                    background-color: #F79468
                }

                .vc_grid-filter.vc_grid-filter-color-purple>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-purple>.vc_grid-filter-item:hover {
                    background-color: #B97EBB
                }

                .vc_grid-filter.vc_grid-filter-color-white>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-color-white>.vc_grid-filter-item:hover {
                    background-color: #FFF
                }

                .vc_grid-filter.vc_grid-filter-color-white>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-color-white>.vc_grid-filter-item:hover>span {
                    color: #666
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-black>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-black>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-black>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-blue>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-blue>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-blue>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-chino>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-chino>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-chino>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-peacoc>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-peacoc>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-pink>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-pink>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-pink>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-turquoise>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-turquoise>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-turquoise>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-violet>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-violet>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-violet>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-vista_blue>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-vista_blue>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-vista_blue>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-black>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-black>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-black>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-blue>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-blue>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-blue>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-chino>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-chino>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-chino>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-peacoc>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-peacoc>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-pink>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-pink>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-pink>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-turquoise>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-turquoise>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-turquoise>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-violet>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-violet>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-violet>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-vista_blue>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-vista_blue>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-vista_blue>.vc_grid-filter-item>span {
                    color: #FFF
                }

                .vc_grid-filter>.vc_grid-filter-item {
                    cursor: pointer;
                    display: inline-block;
                    background: 0 0;
                    padding: 4px 10px;
                    -webkit-transition: background-color .1s linear;
                    -o-transition: background-color .1s linear;
                    transition: background-color .1s linear
                }

                .vc_grid-filter-dropdown .vc_grid-styled-select .vc_arrow-icon-navicon,.vc_grid-filter-select,.vc_grid-filter-select .vc_grid-styled-select .vc_arrow-icon-navicon {
                    display: none
                }

                .vc_grid-filter>.vc_grid-filter-item:first-child {
                    margin-left: 0!important
                }

                .vc_grid-filter>.vc_grid-filter-item>span {
                    -webkit-transition: color .1s linear;
                    -o-transition: color .1s linear;
                    transition: color .1s linear;
                    outline: 0;
                    padding: 0;
                    text-decoration: none
                }

                .vc_grid-filter>.vc_grid-filter-item.vc_active>span,.vc_grid-filter>.vc_grid-filter-item:hover>span {
                    text-decoration: none
                }

                .vc_grid-filter.vc_grid-filter-default>.vc_grid-filter-item {
                    margin: 0 5px 5px 0;
                    border-radius: 30px
                }

                .vc_grid-filter.vc_grid-filter- .vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-comma .vc_grid-filter-item {
                    padding: 0!important
                }

                .vc_grid-filter.vc_grid-filter-default-less-rounded>.vc_grid-filter-item {
                    margin: 0 5px 5px 0;
                    border-radius: 5px
                }

                .vc_grid-filter.vc_grid-filter-bordered-rounded-less>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-bordered-rounded>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-bordered>.vc_grid-filter-item {
                    margin: 0;
                    border: 1px solid rgba(235,235,235,.8);
                    border-collapse: collapse
                }

                .vc_grid-filter.vc_grid-filter-bordered-rounded-less>.vc_grid-filter-item:nth-child(n+2),.vc_grid-filter.vc_grid-filter-bordered-rounded>.vc_grid-filter-item:nth-child(n+2),.vc_grid-filter.vc_grid-filter-bordered>.vc_grid-filter-item:nth-child(n+2) {
                    margin-left: -1px;
                    margin-top: -1px
                }

                .vc_grid-filter.vc_grid-filter-bordered-rounded-less>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-bordered-rounded-less>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-bordered-rounded>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-bordered-rounded>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-bordered>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-bordered>.vc_grid-filter-item:hover {
                    position: relative;
                    z-index: 1;
                    border-color: transparent
                }

                .vc_grid-filter.vc_grid-filter-bordered-rounded-less>.vc_grid-filter-item.vc_active>a,.vc_grid-filter.vc_grid-filter-bordered-rounded-less>.vc_grid-filter-item:hover>a,.vc_grid-filter.vc_grid-filter-bordered-rounded>.vc_grid-filter-item.vc_active>a,.vc_grid-filter.vc_grid-filter-bordered-rounded>.vc_grid-filter-item:hover>a,.vc_grid-filter.vc_grid-filter-bordered>.vc_grid-filter-item.vc_active>a,.vc_grid-filter.vc_grid-filter-bordered>.vc_grid-filter-item:hover>a {
                    text-decoration: none
                }

                .vc_grid-filter.vc_grid-filter-bordered-rounded>.vc_grid-filter-item:first-child {
                    border-top-left-radius: 30px;
                    border-bottom-left-radius: 30px
                }

                .vc_grid-filter.vc_grid-filter-bordered-rounded>.vc_grid-filter-item:last-child {
                    border-top-right-radius: 30px;
                    border-bottom-right-radius: 30px
                }

                .vc_grid-filter.vc_grid-filter-bordered-rounded-less>.vc_grid-filter-item:first-child {
                    border-top-left-radius: 3px;
                    border-bottom-left-radius: 3px
                }

                .vc_grid-filter.vc_grid-filter-bordered-rounded-less>.vc_grid-filter-item:last-child {
                    border-top-right-radius: 3px;
                    border-bottom-right-radius: 3px
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-blue>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-blue>.vc_grid-filter-item {
                    background-color: #7c93dd
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-blue>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-blue>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-blue>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-blue>.vc_grid-filter-item:hover {
                    background-color: #5472D2
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-turquoise>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-turquoise>.vc_grid-filter-item {
                    background-color: #00919c
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-turquoise>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-turquoise>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-turquoise>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-turquoise>.vc_grid-filter-item:hover {
                    background-color: #00C1CF
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-pink>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-pink>.vc_grid-filter-item {
                    background-color: #fe9b94
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-pink>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-pink>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-pink>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-pink>.vc_grid-filter-item:hover {
                    background-color: #FE6C61
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-violet>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-violet>.vc_grid-filter-item {
                    background-color: #a991d3
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-violet>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-violet>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-violet>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-violet>.vc_grid-filter-item:hover {
                    background-color: #8D6DC4
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-peacoc>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-peacoc>.vc_grid-filter-item {
                    background-color: #73bfd5
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-peacoc>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-peacoc>.vc_grid-filter-item>span {
                    color: #FFF
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-peacoc>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-peacoc>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-peacoc>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-peacoc>.vc_grid-filter-item:hover {
                    background-color: #4CADC9
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-chino>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-chino>.vc_grid-filter-item {
                    background-color: #e1d9cb
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-chino>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-chino>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-chino>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-chino>.vc_grid-filter-item:hover {
                    background-color: #CEC2AB
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item {
                    background-color: #695f77
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-mulled_wine>.vc_grid-filter-item:hover {
                    background-color: #50485B
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-vista_blue>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-vista_blue>.vc_grid-filter-item {
                    background-color: #9ce2b8
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-vista_blue>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-vista_blue>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-vista_blue>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-vista_blue>.vc_grid-filter-item:hover {
                    background-color: #75D69C
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-black>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-black>.vc_grid-filter-item {
                    background-color: #444
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-black>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-black>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-black>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-black>.vc_grid-filter-item:hover {
                    background-color: #2A2A2A
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-grey>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-grey>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-grey>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-grey>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-grey>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-grey>.vc_grid-filter-item>span {
                    color: #666
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-grey>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-grey>.vc_grid-filter-item {
                    background-color: #d2d2d2
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-grey>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-grey>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-grey>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-grey>.vc_grid-filter-item:hover {
                    background-color: #EBEBEB
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-green>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-orange>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-orange>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-orange>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-purple>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-purple>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-purple>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sky>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sky>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sky>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-green>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-orange>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-orange>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-orange>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-purple>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-purple>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-purple>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sky>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sky>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sky>.vc_grid-filter-item>span {
                    color: #FFF
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-orange>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-orange>.vc_grid-filter-item {
                    background-color: #fad398
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-orange>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-orange>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-orange>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-orange>.vc_grid-filter-item:hover {
                    background-color: #F7BE68
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sky>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sky>.vc_grid-filter-item {
                    background-color: #86baea
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sky>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sky>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sky>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sky>.vc_grid-filter-item:hover {
                    background-color: #5AA1E3
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-green>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-green>.vc_grid-filter-item {
                    background-color: #87c456
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-green>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-green>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-green>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-green>.vc_grid-filter-item:hover {
                    background-color: #6DAB3C
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-green>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-green>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-green>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-green>.vc_grid-filter-item:hover>span {
                    color: #FFF
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item {
                    background-color: #f7817d
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-juicy_pink>.vc_grid-filter-item:hover {
                    background-color: #F4524D
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item {
                    background-color: #fab698
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-sandy_brown>.vc_grid-filter-item:hover {
                    background-color: #F79468
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-purple>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-purple>.vc_grid-filter-item {
                    background-color: #cb9fcd
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-purple>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-purple>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-purple>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-purple>.vc_grid-filter-item:hover {
                    background-color: #B97EBB
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-white>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-white>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-white>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-white>.vc_grid-filter-item.vc_active>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-white>.vc_grid-filter-item:hover>span,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-white>.vc_grid-filter-item>span {
                    color: #666
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-white>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-white>.vc_grid-filter-item {
                    background-color: #e6e6e6
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-white>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled-rounded.vc_grid-filter-color-white>.vc_grid-filter-item:hover,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-white>.vc_grid-filter-item.vc_active,.vc_grid-filter.vc_grid-filter-filled.vc_grid-filter-color-white>.vc_grid-filter-item:hover {
                    background-color: #FFF
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded>.vc_grid-filter-item,.vc_grid-filter.vc_grid-filter-filled>.vc_grid-filter-item {
                    margin: 0;
                    border: 1px solid transparent;
                    border-collapse: collapse;
                    padding: 3px 7px
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded>.vc_grid-filter-item>span,.vc_grid-filter.vc_grid-filter-filled>.vc_grid-filter-item>span {
                    color: #FFF
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded>.vc_grid-filter-item:nth-child(n+2),.vc_grid-filter.vc_grid-filter-filled>.vc_grid-filter-item:nth-child(n+2) {
                    border-left: none;
                    margin-left: 1px;
                    border-top: none;
                    margin-top: 1px
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded>.vc_grid-filter-item:first-child,.vc_grid-filter.vc_grid-filter-filled>.vc_grid-filter-item:first-child {
                    border-top-left-radius: 3px;
                    border-bottom-left-radius: 3px;
                    border-top: 0
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded>.vc_grid-filter-item:last-child,.vc_grid-filter.vc_grid-filter-filled>.vc_grid-filter-item:last-child {
                    border-top-right-radius: 3px;
                    border-bottom-right-radius: 3px
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded>.vc_grid-filter-item:first-child {
                    border-top-left-radius: 30px;
                    border-bottom-left-radius: 30px;
                    border-top: 0
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded>.vc_grid-filter-item:last-child {
                    border-top-right-radius: 30px;
                    border-bottom-right-radius: 30px
                }

                .vc_grid-filter.vc_grid-filter-filled-rounded-all>.vc_grid-filter-item {
                    border-radius: 3px!important
                }

                .vc_grid-filter.vc_grid-filter-filled-round-all>.vc_grid-filter-item {
                    border-radius: 30px!important
                }

                .vc_grid-filter.vc_grid-filter-size-xs .vc_grid-filter-item {
                    font-size: 12px;
                    padding: 1px 5px
                }

                .vc_grid-filter.vc_grid-filter-size-sm .vc_grid-filter-item {
                    font-size: 13px;
                    padding: 2px 7px
                }

                .vc_grid-filter.vc_grid-filter-size-md .vc_grid-filter-item {
                    font-size: 100%;
                    padding: 2px 10px
                }

                .vc_grid-filter.vc_grid-filter-size-lg .vc_grid-filter-item {
                    font-size: 18px;
                    padding: 4px 10px
                }

                .vc_grid-filter-dropdown,.vc_grid-filter-select {
                    font-size: 12px;
                    margin-bottom: 20px
                }

                .vc_grid-filter-dropdown.vc_grid-filter-center,.vc_grid-filter-select.vc_grid-filter-center {
                    text-align: center
                }

                .vc_grid-filter-dropdown.vc_grid-filter-right,.vc_grid-filter-select.vc_grid-filter-right {
                    text-align: right
                }

                .vc_grid-filter-dropdown.vc_grid-filter-left,.vc_grid-filter-select.vc_grid-filter-left {
                    text-align: left
                }

                .vc_grid-filter-dropdown .vc_grid-styled-select select,.vc_grid-filter-select .vc_grid-styled-select select {
                    outline: 0;
                    display: inline-block
                }

                @media (min-width: 768px) {
                    .vc_grid-filter-dropdown.vc_grid-filter-color-blue .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-blue .vc_arrow-icon-navicon {
                        color:#5472D2
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-turquoise .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-turquoise .vc_arrow-icon-navicon {
                        color: #00C1CF
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-pink .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-pink .vc_arrow-icon-navicon {
                        color: #FE6C61
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-violet .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-violet .vc_arrow-icon-navicon {
                        color: #8D6DC4
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-peacoc .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-peacoc .vc_arrow-icon-navicon {
                        color: #4CADC9
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-chino .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-chino .vc_arrow-icon-navicon {
                        color: #CEC2AB
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-mulled_wine .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-mulled_wine .vc_arrow-icon-navicon {
                        color: #50485B
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-vista_blue .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-vista_blue .vc_arrow-icon-navicon {
                        color: #75D69C
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-black .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-black .vc_arrow-icon-navicon {
                        color: #2A2A2A
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-grey .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-grey .vc_arrow-icon-navicon {
                        color: #EBEBEB
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-orange .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-orange .vc_arrow-icon-navicon {
                        color: #F7BE68
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-sky .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-sky .vc_arrow-icon-navicon {
                        color: #5AA1E3
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-green .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-green .vc_arrow-icon-navicon {
                        color: #6DAB3C
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-juicy_pink .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-juicy_pink .vc_arrow-icon-navicon {
                        color: #F4524D
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-sandy_brown .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-sandy_brown .vc_arrow-icon-navicon {
                        color: #F79468
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-purple .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-purple .vc_arrow-icon-navicon {
                        color: #B97EBB
                    }

                    .vc_grid-filter-dropdown.vc_grid-filter-color-white .vc_arrow-icon-navicon,.vc_grid-filter-select.vc_grid-filter-color-white .vc_arrow-icon-navicon {
                        color: #FFF
                    }

                    .vc_grid-filter-dropdown .vc_grid-styled-select,.vc_grid-filter-select .vc_grid-styled-select {
                        border: 1px solid #ccc;
                        display: inline-block;
                        height: 30px;
                        overflow: hidden;
                        padding-right: 5px;
                        text-align: left;
                        width: auto;
                        vertical-align: middle
                    }

                    .vc_grid-filter-dropdown .vc_grid-styled-select .vc_arrow-icon-navicon,.vc_grid-filter-select .vc_grid-styled-select .vc_arrow-icon-navicon {
                        font-size: 17px;
                        display: inline;
                        vertical-align: middle
                    }

                    .vc_grid-filter-dropdown .vc_grid-styled-select select,.vc_grid-filter-select .vc_grid-styled-select select {
                        background: none;
                        border: 0;
                        border-radius: 0;
                        height: 30px;
                        line-height: 1;
                        margin-right: -50px;
                        padding: 5px;
                        position: relative;
                        font-size: 12px;
                        z-index: 0;
                        cursor: pointer;
                        max-width: inherit!important
                    }
                }

                @media (max-width: 768px) {
                    .vc_responsive .vc_grid-filter-select {
                        display:block
                    }

                    .vc_responsive .vc_grid-filter {
                        display: none!important
                    }
                }

                .owl-carousel .owl-item .vc_grid-item {
                    -webkit-transform: translate3D(0,0,0);
                    -ms-transform: translate3D(0,0,0);
                    transform: translate3D(0,0,0)
                }

                .owl-carousel .owl-animated-out {
                    z-index: 0
                }

                .owl-carousel .owl-animated-in {
                    z-index: 1
                }

                .vc-hoverbox-wrapper,.vc-hoverbox-wrapper * {
                    box-sizing: border-box
                }

                .vc-hoverbox-wrapper.vc-hoverbox-shape--rounded .vc-hoverbox-back,.vc-hoverbox-wrapper.vc-hoverbox-shape--rounded .vc-hoverbox-front {
                    border-radius: 10px
                }

                .vc-hoverbox-wrapper.vc-hoverbox-shape--round .vc-hoverbox-back,.vc-hoverbox-wrapper.vc-hoverbox-shape--round .vc-hoverbox-front {
                    border-radius: 50px
                }

                .vc-hoverbox-wrapper.vc-hoverbox-align--center {
                    text-align: center
                }

                .vc-hoverbox-wrapper.vc-hoverbox-align--left {
                    text-align: left
                }

                .vc-hoverbox-wrapper.vc-hoverbox-align--right {
                    text-align: right
                }

                .vc-hoverbox-wrapper .vc-hoverbox {
                    position: relative;
                    display: inline-block;
                    text-align: center;
                    width: 100%
                }

                .vc-hoverbox-wrapper.vc-hoverbox-width--100 .vc-hoverbox {
                    width: 100%
                }

                .vc-hoverbox-wrapper.vc-hoverbox-width--90 .vc-hoverbox {
                    width: 90%
                }

                .vc-hoverbox-wrapper.vc-hoverbox-width--80 .vc-hoverbox {
                    width: 80%
                }

                .vc-hoverbox-wrapper.vc-hoverbox-width--70 .vc-hoverbox {
                    width: 70%
                }

                .vc-hoverbox-wrapper.vc-hoverbox-width--60 .vc-hoverbox {
                    width: 60%
                }

                .vc-hoverbox-wrapper.vc-hoverbox-width--50 .vc-hoverbox {
                    width: 50%
                }

                .vc-hoverbox-wrapper.vc-hoverbox-width--40 .vc-hoverbox {
                    width: 40%
                }

                .vc-hoverbox-wrapper.vc-hoverbox-width--30 .vc-hoverbox {
                    width: 30%
                }

                .vc-hoverbox-wrapper.vc-hoverbox-width--20 .vc-hoverbox {
                    width: 20%
                }

                .vc-hoverbox-wrapper.vc-hoverbox-width--10 .vc-hoverbox {
                    width: 10%
                }

                .vc-hoverbox-inner {
                    width: 100%;
                    display: inline-block;
                    min-height: 250px
                }

                .vc-hoverbox-inner :last-child {
                    margin-bottom: 0
                }

                .vc-hoverbox-block {
                    height: 100%;
                    width: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    transition: transform .5s ease-in-out;
                    transform-style: preserve-3d;
                    background-size: cover;
                    background-position: center
                }

                .vc-hoverbox-block-inner {
                    flex-shrink: 0;
                    padding: 20px
                }

                .vc-hoverbox-front {
                    transform: rotateY(0);
                    z-index: 1
                }

                .vc-hoverbox-back {
                    transform: rotateY(180deg)
                }

                .vc-hoverbox:hover .vc-hoverbox-front {
                    transform: rotateY(-180deg)
                }

                .vc-hoverbox:hover .vc-hoverbox-back {
                    transform: rotateY(0)
                }

                .vc-hoverbox-wrapper.vc-hoverbox-direction--reverse .vc-hoverbox-front {
                    transform: rotateY(180deg)
                }

                .vc-hoverbox-wrapper.vc-hoverbox-direction--reverse .vc-hoverbox-back {
                    transform: rotateY(0);
                    z-index: 2
                }

                .vc-hoverbox-wrapper.vc-hoverbox-direction--reverse .vc-hoverbox:hover .vc-hoverbox-front {
                    transform: rotateY(0)
                }

                .vc-hoverbox-wrapper.vc-hoverbox-direction--reverse .vc-hoverbox:hover .vc-hoverbox-back {
                    transform: rotateY(-180deg)
                }

                @font-face {
                    font-family: vc_grid_v1;
                    src: url(../fonts/vc_grid/vc_grid_v1.eot?-9hbgac);
                    src: url(../fonts/vc_grid/vc_grid_v1.eot?#iefix-9hbgac) format('embedded-opentype'),url(../fonts/vc_grid/vc_grid_v1.woff?-9hbgac) format('woff'),url(../fonts/vc_grid/vc_grid_v1.ttf?-9hbgac) format('truetype'),url(../fonts/vc_grid/vc_grid_v1.svg?-9hbgac#vc_grid_v1) format('svg');
                    font-weight: 400;
                    font-style: normal
                }

                [class*=" vc_arrow-icon-"],[class^=vc_arrow-icon-] {
                    font-family: vc_grid_v1;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 1
                }

                .vc_arrow-icon-minus:before {
                    content: "\e61c"
                }

                .vc_arrow-icon-plus:before {
                    content: "\e61d"
                }

                .vc_arrow-icon-arrow_down:before {
                    content: "\e61e"
                }

                .vc_arrow-icon-arrow_up:before {
                    content: "\e61f"
                }

                .vc_arrow-icon-arrow_01_left:before {
                    content: "\e600"
                }

                .vc_arrow-icon-arrow_01_right:before {
                    content: "\e601"
                }

                .vc_arrow-icon-arrow_02_left:before {
                    content: "\e602"
                }

                .vc_arrow-icon-arrow_02_right:before {
                    content: "\e603"
                }

                .vc_arrow-icon-arrow_03_left:before {
                    content: "\e604"
                }

                .vc_arrow-icon-arrow_03_right:before {
                    content: "\e605"
                }

                .vc_arrow-icon-arrow_04_left:before {
                    content: "\e606"
                }

                .vc_arrow-icon-arrow_04_right:before {
                    content: "\e607"
                }

                .vc_arrow-icon-arrow_05_left:before {
                    content: "\e608"
                }

                .vc_arrow-icon-arrow_05_right:before {
                    content: "\e609"
                }

                .vc_arrow-icon-arrow_06_left:before {
                    content: "\e60a"
                }

                .vc_arrow-icon-arrow_06_right:before {
                    content: "\e60b"
                }

                .vc_arrow-icon-arrow_07_left:before {
                    content: "\e60c"
                }

                .vc_arrow-icon-arrow_07_right:before {
                    content: "\e60d"
                }

                .vc_arrow-icon-arrow_08_left:before {
                    content: "\e60e"
                }

                .vc_arrow-icon-arrow_08_right:before {
                    content: "\e60f"
                }

                .vc_arrow-icon-arrow_09_left:before {
                    content: "\e610"
                }

                .vc_arrow-icon-arrow_09_right:before {
                    content: "\e611"
                }

                .vc_arrow-icon-arrow_10_left:before {
                    content: "\e612"
                }

                .vc_arrow-icon-arrow_10_right:before {
                    content: "\e613"
                }

                .vc_arrow-icon-arrow_11_left:before {
                    content: "\e614"
                }

                .vc_arrow-icon-arrow_11_right:before {
                    content: "\e615"
                }

                .vc_arrow-icon-arrow_12_left:before {
                    content: "\e616"
                }

                .vc_arrow-icon-arrow_12_right:before {
                    content: "\e617"
                }

                .vc_arrow-icon-navicon:before {
                    content: "\f0c9"
                }

                .wpb_animate_when_almost_visible {
                    opacity: 0;
                    filter: alpha(opacity=0)
                }

                .wpb_animate_when_almost_visible:not(.wpb_start_animation) {
                    -webkit-animation: none;
                    -o-animation: none;
                    animation: none
                }

                .top-to-bottom,.wpb_top-to-bottom {
                    -webkit-animation: wpb_ttb .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    -o-animation: wpb_ttb .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    animation: wpb_ttb .7s 1 cubic-bezier(.175,.885,.32,1.275)
                }

                .bottom-to-top,.wpb_bottom-to-top {
                    -webkit-animation: wpb_btt .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    -o-animation: wpb_btt .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    animation: wpb_btt .7s 1 cubic-bezier(.175,.885,.32,1.275)
                }

                .left-to-right,.wpb_left-to-right {
                    -webkit-animation: wpb_ltr .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    -o-animation: wpb_ltr .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    animation: wpb_ltr .7s 1 cubic-bezier(.175,.885,.32,1.275)
                }

                .right-to-left,.wpb_right-to-left {
                    -webkit-animation: wpb_rtl .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    -o-animation: wpb_rtl .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    animation: wpb_rtl .7s 1 cubic-bezier(.175,.885,.32,1.275)
                }

                .appear,.wpb_appear {
                    -webkit-animation: wpb_appear .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    -o-animation: wpb_appear .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    animation: wpb_appear .7s 1 cubic-bezier(.175,.885,.32,1.275);
                    -webkit-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1)
                }

                .wpb_start_animation {
                    opacity: 1;
                    filter: alpha(opacity=100)
                }

                @-webkit-keyframes wpb_ttb {
                    0% {
                        -webkit-transform: translate(0,-10%);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -webkit-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-moz-keyframes wpb_ttb {
                    0% {
                        -moz-transform: translate(0,-10%);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -moz-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-o-keyframes wpb_ttb {
                    0% {
                        -o-transform: translate(0,-10%);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -o-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @keyframes wpb_ttb {
                    0% {
                        -webkit-transform: translate(0,-10%);
                        -ms-transform: translate(0,-10%);
                        -o-transform: translate(0,-10%);
                        transform: translate(0,-10%);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -webkit-transform: translate(0,0);
                        -ms-transform: translate(0,0);
                        -o-transform: translate(0,0);
                        transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-webkit-keyframes wpb_btt {
                    0% {
                        -webkit-transform: translate(0,10%);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -webkit-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-moz-keyframes wpb_btt {
                    0% {
                        -moz-transform: translate(0,10%);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -moz-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-o-keyframes wpb_btt {
                    0% {
                        -o-transform: translate(0,10%);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -o-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @keyframes wpb_btt {
                    0% {
                        -webkit-transform: translate(0,10%);
                        -ms-transform: translate(0,10%);
                        -o-transform: translate(0,10%);
                        transform: translate(0,10%);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -webkit-transform: translate(0,0);
                        -ms-transform: translate(0,0);
                        -o-transform: translate(0,0);
                        transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-webkit-keyframes wpb_ltr {
                    0% {
                        -webkit-transform: translate(-10%,0);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -webkit-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-moz-keyframes wpb_ltr {
                    0% {
                        -moz-transform: translate(-10%,0);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -moz-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-o-keyframes wpb_ltr {
                    0% {
                        -o-transform: translate(-10%,0);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -o-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @keyframes wpb_ltr {
                    0% {
                        -webkit-transform: translate(-10%,0);
                        -ms-transform: translate(-10%,0);
                        -o-transform: translate(-10%,0);
                        transform: translate(-10%,0);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -webkit-transform: translate(0,0);
                        -ms-transform: translate(0,0);
                        -o-transform: translate(0,0);
                        transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-webkit-keyframes wpb_rtl {
                    0% {
                        -webkit-transform: translate(10%,0);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -webkit-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-moz-keyframes wpb_rtl {
                    0% {
                        -moz-transform: translate(10%,0);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -moz-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-o-keyframes wpb_rtl {
                    0% {
                        -o-transform: translate(10%,0);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -o-transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @keyframes wpb_rtl {
                    0% {
                        -webkit-transform: translate(10%,0);
                        -ms-transform: translate(10%,0);
                        -o-transform: translate(10%,0);
                        transform: translate(10%,0);
                        opacity: 0;
                        filter: alpha(opacity=0)
                    }

                    100% {
                        -webkit-transform: translate(0,0);
                        -ms-transform: translate(0,0);
                        -o-transform: translate(0,0);
                        transform: translate(0,0);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-webkit-keyframes wpb_appear {
                    0% {
                        -webkit-transform: scale(.5);
                        opacity: .1;
                        filter: alpha(opacity=10)
                    }

                    100% {
                        -webkit-transform: scale(1);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-moz-keyframes wpb_appear {
                    0% {
                        -moz-transform: scale(.5);
                        opacity: .1;
                        filter: alpha(opacity=10)
                    }

                    100% {
                        -moz-transform: scale(1);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @-o-keyframes wpb_appear {
                    0% {
                        -o-transform: scale(.5);
                        opacity: .1;
                        filter: alpha(opacity=10)
                    }

                    100% {
                        -o-transform: scale(1);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                @keyframes wpb_appear {
                    0% {
                        -webkit-transform: scale(.5);
                        -ms-transform: scale(.5);
                        -o-transform: scale(.5);
                        transform: scale(.5);
                        opacity: .1;
                        filter: alpha(opacity=10)
                    }

                    100% {
                        -webkit-transform: scale(1);
                        -ms-transform: scale(1);
                        -o-transform: scale(1);
                        transform: scale(1);
                        opacity: 1;
                        filter: alpha(opacity=100)
                    }
                }

                .vc-spinner::before {
                    content: '';
                    width: 16px;
                    height: 16px;
                    display: inline-block;
                    pointer-events: none;
                    margin-top: 6px;
                    background: url(../images/spinner.gif) no-repeat;
                    background-position-x: center;
                    background-position-y: center
                }

                .vc-spinner.vc-spinner-complete::before {
                    background-image: url(../vc/tick.png)
                }

                .vc-spinner.vc-spinner-failed::before {
                    background-image: url(../vc/remove.png)
                }

                .vc-woocommerce-add-to-cart-loading.vc_grid-item-mini {
                    position: relative
                }

                .vc-woocommerce-add-to-cart-loading.vc_grid-item-mini .vc_gitem-zone {
                    opacity: 0!important;
                    filter: alpha(opacity=0)!important;
                    -webkit-transform: none!important;
                    -ms-transform: none!important;
                    transform: none!important;
                    -webkit-transition: none!important;
                    -o-transition: none!important;
                    transition: none!important
                }

                .vc-woocommerce-add-to-cart-loading.vc_grid-item-mini .vc_wc-load-add-to-loader-wrapper {
                    position: absolute;
                    right: 0;
                    top: 50%;
                    margin-top: -50px;
                    left: 0
                }

                .vc-woocommerce-add-to-cart-loading.vc_grid-item-mini .vc_wc-load-add-to-loader {
                    margin: 2em auto;
                    font-size: 10px;
                    position: relative;
                    text-indent: -9999em
                }

                .vc-woocommerce-add-to-cart-loading.vc_grid-item-mini .vc_wc-load-add-to-loader,.vc-woocommerce-add-to-cart-loading.vc_grid-item-mini .vc_wc-load-add-to-loader:after,.vc-woocommerce-add-to-cart-loading.vc_grid-item-mini .vc_wc-load-add-to-loader:before {
                    border-radius: 50%;
                    width: 12px;
                    height: 12px;
                    -webkit-animation: vc_woo-add-cart-load 1.8s infinite ease-in-out;
                    animation: vc_woo-add-cart-load 1.8s infinite ease-in-out
                }

                .vc-woocommerce-add-to-cart-loading.vc_grid-item-mini .vc_wc-load-add-to-loader:before {
                    left: -20px
                }

                .vc-woocommerce-add-to-cart-loading.vc_grid-item-mini .vc_wc-load-add-to-loader:after {
                    left: 20px;
                    -webkit-animation-delay: .32s;
                    animation-delay: .32s
                }

                .vc-woocommerce-add-to-cart-loading.vc_grid-item-mini .vc_wc-load-add-to-loader:after,.vc-woocommerce-add-to-cart-loading.vc_grid-item-mini .vc_wc-load-add-to-loader:before {
                    content: '';
                    position: absolute;
                    top: 0
                }

                @-webkit-keyframes vc_woo-add-cart-load {
                    0%,100%,80% {
                        box-shadow: 0 2.5em 0 -1.3em rgba(235,235,235,.75)
                    }

                    40% {
                        box-shadow: 0 2.5em 0 0 rgba(235,235,235,.75)
                    }
                }

                @keyframes vc_woo-add-cart-load {
                    0%,100%,80% {
                        box-shadow: 0 2.5em 0 -1.3em rgba(235,235,235,.75)
                    }

                    40% {
                        box-shadow: 0 2.5em 0 0 rgba(235,235,235,.75)
                    }
                }

                .vc_grid-item-mini .added_to_cart.wc-forward {
                    display: none
                }

            </style>
            <div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner "><div class="wpb_wrapper"></div></div></div>
</div>

</div></div></div>
</div></div></div>
<div class=""><div class="container"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><h2 class="wpb_heading" >VIT Bhopal Hostel Facilities</h2>
<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner vc_custom_1581060745304"><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100">
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url( '../assets/images/a.jpg' );">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="font-size: 16px;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Hostel Infrastructure</h2>
            <p>An 8 storey Boys Hostel Building with a built-up area of 44,752 sq.m contains Wi-Fi enabled AC and NON-AC sharing rooms with … <a href="https://vitbhopal.ac.in/hostel-more#hostel-infrastructure" title="VIT Bhopal - Hostel Life-new">Read more</a></p>

            
        </div>
      </div>
    </div>
  </div>
</div></div></div></div>
<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner vc_custom_1581060755564"><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100">
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(https://vitbhopal.ac.in/file/2020/02/Cafeteria-1024x683.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="font-size: 16px;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Food &amp; Dining</h2>
            <p>The cuisines in the hostel range from South Indian, North Indian and Jain menu. The students can choose their food type based on their priority… <a href="https://vitbhopal.ac.in/hostel-more/#food-dining" title="VIT Bhopal - Hostel Life-new"> Read More</a></p>

            
        </div>
      </div>
    </div>
  </div>
</div></div></div></div>
<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner vc_custom_1581060763933"><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100">
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(https://vitbhopal.ac.in/file/2020/02/Gym-683x1024.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="font-size: 16px;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">GYM</h2>
            <p>The hostels have fully equipped gym facilities including trainer facility. The hostels also provide indoor and outdoor game spaces for students… <a href="https://vitbhopal.ac.in/hostel-more/#gym" title="VIT Bhopal - Hostel Life-new"> Read More </a></p>

            
        </div>
      </div>
    </div>
  </div>
</div></div></div></div>
<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner vc_custom_1581060771096"><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100">
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(https://vitbhopal.ac.in/file/2020/02/32-995A3545_copy-1024x575.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="font-size: 16px;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Study Area </h2>
            <p>Spacious study area in every hostel block is provided to facilitate the studies in concentrated environments for exam preparation… <a href="https://vitbhopal.ac.in/hostel-more/#study" title="VIT Bhopal - Hostel Life-new">Read More</a></p>

            
        </div>
      </div>
    </div>
  </div>
            
</div></div></div>
<div>

</br>
</div>
</div>



<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner vc_custom_1581060113137"><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100">
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(https://vitbhopal.ac.in/file/2020/02/hospital-1024x683.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="font-size: 16px;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Hospital</h2>
            <p>Doctors, medical personnel and ambulance facilities are deployed in the hostels to meet any medical emergency, 24X7… <a href="https://vitbhopal.ac.in/hostel-more/#hospital" title="VIT Bhopal - Hostel Life-new"> Read More</a></p>

            
        </div>
      </div>
    </div>
  </div>
</div></div></div></div>
<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner vc_custom_1581060123953"><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100" id="security">
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(https://vitbhopal.ac.in/file/2020/02/security-guard-1024x654.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="font-size: 16px;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Security</h2>
            <p>24X7 security service in every hostel is ensured, with lady securities deployed in Ladies hostels considering the privacy of students… <a href="https://vitbhopal.ac.in/hostel-more/#security" title="VIT Bhopal - Hostel Life-new"> Read More </a></p>

            
        </div>
      </div>
    </div>
  </div>
</div></div></div></div>
<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner vc_custom_1581060197353"><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100">
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(https://vitbhopal.ac.in/file/2020/02/Events-1-683x1024.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="font-size: 16px;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Events</h2>
            <p>Culturally diverse events are periodically organised within the hostels to help the residents unwind, network, exhibit their talents ...<a href="https://vitbhopal.ac.in/hostel-more/#events" title="VIT Bhopal - Hostel Life-new"> Read More</a></p>

            
        </div>
      </div>
    </div>
  </div>
</div></div></div></div>
<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner vc_custom_1581060226297"><div class="wpb_wrapper"><div class="vc-hoverbox-wrapper  vc-hoverbox-shape--rounded vc-hoverbox-align--center vc-hoverbox-direction--default vc-hoverbox-width--100">
  <div class="vc-hoverbox">
    <div class="vc-hoverbox-inner">
      <div class="vc-hoverbox-block vc-hoverbox-front" style="background-image: url(https://vitbhopal.ac.in/file/2020/02/Pool-side-view-1-1024x417.jpg);">
        <div class="vc-hoverbox-block-inner vc-hoverbox-front-inner">
            
        </div>
      </div>
      <div class="vc-hoverbox-block vc-hoverbox-back" style="background-color: #ebebeb;">
        <div class="vc-hoverbox-block-inner vc-hoverbox-back-inner">
            <h2 style="font-size: 16px;line-height: 1.2;text-align: center;font-family:Abril Fatface;font-weight:400;font-style:normal" class="vc_custom_heading">Swimming Pool, ATM &amp; Other Amenities</h2>
            <p>In house ATM facilities are available for students in hostels and Indian Bank Branch is located inside the academic block… <a href="https://vitbhopal.ac.in/hostel-more/#other" title="VIT Bhopal - Hostel Life-new"> Read More </a></p>

            
        </div>
      </div>
    </div>
            </br>
  </div>
  
</div></div></div>
</br>
</div>
</div></div>


<div class="wpb_video_widget wpb_content_element vc_clearfix   vc_video-aspect-ratio-169 vc_video-el-width-70 vc_video-align-center">
            
		<div class="wpb_wrapper">
            </br>
			<h2 class="wpb_heading wpb_video_heading">VIT Bhopal New Hostel</h2>
			<div class="wpb_video_wrapper"><iframe title="VIT Bhopal | Hostel | Gym | Swimming pool | World Class facilities" width="940" height="529" src="https://www.youtube.com/embed/BsjGc3LGKCY?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
		</div>
	</div>
</div></div></div></div></div></div></div>
</div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include '../includes/footer.php' ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>