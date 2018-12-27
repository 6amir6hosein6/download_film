<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
  </head>

  <body direction="rtl">

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">ثبت نام</a></li>
        <li class="tab"><a href="#login">ورود</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>رایگان ثبت نام کنید</h1>
          
          <form action="adding_to_database.php" method="post" accept-charset='UTF-8'>
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                نام کاربری<span class="req">*</span>
              </label>
              <input type="text" name="username" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                نام <span class="req">*</span>
              </label>
              <input type="text" name="name" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
            ادرس ایمیل<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
             رمز عبور خود<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>ثبت نام کنید</button>
          
          </form>

        </div>
        
        <div id="login">
          <h1><?php
              echo $_SESSION["user_message"];
              $_SESSION["user_message"] = null;
            ?></h1>
          
          <form action="serach_for_login.php" method="post" accept-charset='UTF-8'>
          
            <div class="field-wrap">
            <label>
              نام کاربری<span class="req">*</span>
            </label>
            <input type="text" name="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
             رمز عبور<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">رمز عبور خود را فراموش کرده اید؟</a></p>
          
          <button class="button button-block"/>ورود</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
