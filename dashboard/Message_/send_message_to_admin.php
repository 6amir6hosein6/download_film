<?php
include("database.php");
$seccess = Insert_to_db($_POST['Title'],$_POST['Message'],date("F j, Y, g:i a"),0,$_COOKIE['email']);
if($seccess) {
?>

    <h1 >***پیام شما با موفقیت ارسال شد***</h1>
    <a href="../test.php">بازگشت به صفحه اصلی</a>

<?php }else{?>
    <h1 >***پیام شما ارسال نشد***</h1>
    <a href="../test.php">بازگشت به صفحه اصلی</a>
<?php
} ?>