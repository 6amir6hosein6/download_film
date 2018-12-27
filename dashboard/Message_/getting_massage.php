<?php
include("database.php");
$coming_message = getting_message();
//$coming_message = array_shift($coming_message);
//echo '<pre>';
//print_r($coming_message[1]['title']);
//echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 70%;
        }

        #customers td, #customers th {
            margin-top: 100px !important;
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){
            margin-top: 100px !important;
            color: #fff;
            background-color: #f2f2f2;}

        #customers tr:focus {background-color: #ddd;
            margin-top: 100px !important;
        }
        #customers th {
            margin-top: 100px !important;
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">

        <div style="" class="nav notify-row" id="top_menu" >
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="../img/avatar1_small.jpg">
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
                    <a href="getting_massage.php" class="">
                        <span>پیام های دریافت شده</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="../downloader_/manager_download.php" class="">
                        <span>لینک های درخواست شده</span>
                    </a>

                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <div style="height: 150px;"></div>
    <table style="margin-right: 300px !important; direction: ltr !important;" id="customers">
        <tr>
            <th>موضوع</th>
            <th>از طرف</th>
            <th>تاریخ</th>
        </tr>
        <?php
        for($i=1;$i<=sizeof($coming_message);$i++){?>
            <tr style="background-color: <?php if($coming_message[$i]['read']==1) {
                echo '#f2f2f2';
            }else{
                echo '#0088cc';
            }
            ?>  ;color: <?php if($coming_message[$i]['read']==1) {
                echo '#000';
            }else{
                echo '#fff';
            }
            ?>">
                <td><?php echo $coming_message[$i]['title']?></td>
                <td><?php echo $coming_message[$i]['from'] ?></td>
                <td><?php echo $coming_message[$i]['date'] ?></td>
            </tr>
            <tr>
                <td style="height: 50px;width: 300px;"><?php echo $coming_message[$i]['message']?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    </table>
    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="../js/jquery.js"></script>
<script src="../js/jquery-1.8.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.scrollTo.min.js"></script>
<script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../js/jquery.sparkline.js" type="text/javascript"></script>
<script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="../js/owl.carousel.js" ></script>
<script src="../js/jquery.customSelect.min.js" ></script>

<!--common script for all pages-->
<script src="../js/common-scripts.js"></script>

<!--script for this page-->
<script src="../js/sparkline-chart.js"></script>
<script src="../js/easy-pie-chart.js"></script>

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
