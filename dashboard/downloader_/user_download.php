<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">

        <div style="margin-right: -10px !important;" class="nav notify-row" id="top_menu">
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="img/avatar1_small.jpg">
                    <span class="username"><?php echo $_COOKIE['username'] ?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                    <li><a href="#"><i class="icon-cog"></i> تنظیمات</a></li>
                    <li><a href="#"><i class="icon-bell-alt"></i> اعلام ها</a></li>
                    <li><a href="../../signup/logout.php"><i class="icon-key"></i> خروج</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="sub-menu">
                    <a href="../downloader_/user_download.php" class="">
                        <span>ارسال لینک جهت دانلود</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="../Message_/send_message/site-contact-form.html" class="">
                        <span>اسال پیام به مدیریرت</span>
                    </a>

                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <fieldset style="width:300px;">
                <legend style="font-weight:bold;color:#0C3;">فرم درخواست لینک</legend>
                <p>پرکردن تمام فیلدها الزامی است.</p>
                <form method="Post" action="downloader.php" style="direction:rtl;" enctype="multipart/form-data"><!-- be jaye "EXAMPLE.PHP" adrese jayi ro ke safheye php ro dar oonja upload kardid vared konid , e.g : http://www.YOURSITE.com/files/contact.php -->
                    <label style="display:block;margin:3px 0;">عنوان فایل:</label><input name="Title" type="text" /><br/>
                    <label style="display:block;margin:3px 0;">لینک:</label><input name="Link" type="text" /><br/>
                    <label style="display:block;margin:3px 0;">توضیحات فایل:</label><textarea name="Discription" cols="80" rows="6" ></textarea><br /><br />
                    <text>عکس فایل</text><input type="file" name="fileToUpload" id="fileToUpload">
                    <text style="color: #c7254e"><?php
                        error_reporting(0);
                        session_start();
                        echo $_SESSION['message_of_uploading'];
                        $_SESSION['message_of_uploading'] = null;
                        session_reset();
                        ?></text>
                    <br><br>
                    <text>    لینک فیلتر شده        است               </text><input name="Filter" type="checkbox"/><br />
                    <br /><label style="display:block;margin:3px 0;">در صورت زدن این دکمه لینک ابتدا برای ادمین فرستاده شده و پس از بررسی دانلود خواهد شد</label>
                    <br />
                    <input type="submit" value="ارسال" style="font-family:tahoma;" /> <input type="reset" value="از نو" style="font-family:tahoma;" />
                </form>
            </fieldset>
        </section>
    </section>
    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
