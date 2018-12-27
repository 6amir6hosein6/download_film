<?php
include "dashboard/downloader_/adding_downloade_file_into_db.php";
$file_to_show = getting_file_downloaded();
error_reporting(0);
$login = null;

/**it delete the message coming from server when you try to login("wrong password","not exist)
/*  beacuse you have logged in !!!
*/
//echo '<pre>';
//print_r($file_to_show);
//echo '</pre>';
$_SESSION["user_message"] = null;
if($_COOKIE['username']&&$_COOKIE['username']=="6amir6hosein6"){
    $login = 1;
}elseif($_COOKIE['username']&&$_COOKIE['username']!="6amir6hosein6"){
    $login = 2;
}else{
    $login = null;

}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="includes/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
</head>

<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="jmy-0 mr-md-auto font-weight-normal">فیلم سرا</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <label class="p-2 text-dark"><?php echo '' ?></label>

    </nav>
    <?php
    switch($login) {
        case 1:
            echo '<a  class="btn btn-outline-primary" href="dashboard/manager.php">پنل کاربری</a>';
            break;
        case 2:
            echo '<a  class="btn btn-outline-primary" href="dashboard/user.php">پنل کاربری</a>';
            break;
        case null:
            echo '<a class="btn btn-outline-primary" href="signup/index.php">ورود / ثبت نام</a>';
            break;
    }
    ?>

</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <?php for($i=1;$i<sizeof($file_to_show);$i++){?>
    <div style="border-style: dashed; border-width: 1px; border-color:#d0d2d0; margin:5px; padding:10px;"><p class="text-center"><a href="http://sb.znu.ac.ir/file/detail/22689"><?php echo $file_to_show[$i]['name'] ?></a></p><img src="<?php echo "dashboard/downloader_/".$file_to_show[$i]['image_link'] ?>"><br>
            <text><?php echo $file_to_show[$i]['dis'] ?></text>
        <br><i class="icon-tags"></i><a href="http://sb.znu.ac.ir/file/detail/22689" class="btn btn-primary pull-left">ادامه/دانلود</a> <br>
    </div><br>
    <?php } ?>
</div>



<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Cool stuff</a></li>
                <li><a class="text-muted" href="#">Random feature</a></li>
                <li><a class="text-muted" href="#">Team feature</a></li>
                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                <li><a class="text-muted" href="#">Another one</a></li>
                <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Resource</a></li>
                <li><a class="text-muted" href="#">Resource name</a></li>
                <li><a class="text-muted" href="#">Another resource</a></li>
                <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
</body>
</html>
