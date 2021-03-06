<?php
include("app/modules/vendor_login_process.php");

// if(!$email){
//   $email="";
// }
// if(!$password){
//   $password="";
// }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <?php
    include 'layouts/head.php'
    ?>
  </head>
  <body>
    <div class="mv-site">
      <?php 
      include 'layouts/header.php';
      ?>
      <!-- .header-->

      <section class="main-banner mv-wrap">
        <div data-image-src="images/background/demo_bg_1920x1680.png" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">Login</span><img src="images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
            </div>
          </div>
        </div>
      </section>
      <!-- .main-banner-->

      <section class="main-breadcrumb mv-wrap">
        <div class="mv-breadcrumb-style-1">
          <div class="container">
            <ul class="breadcrumb-1-list">
              <li><a href="home.html"><i class="fa fa-home"></i></a></li>
              <li><a><i class="fa fa-sign-in"></i></a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body login-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-login">
              <div class="mv-form-style-1 mv-box-shadow-gray-1">
                <form method="POST" class="form-login" action="">
                  <div class="form-header">
                    <div class="mv-title-style-13">
                      <div class="text-main">sign in</div>
                    </div>
                  </div>
                  <!-- .form-header-->
                  <p style="color:red; font-size:11px;"><?php echo $loginerror;?> </p>
                  <div class="form-body">
                    <div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Email</strong></div>
                      <div class="mv-field">
                        <input value="<?php echo $email?>" type="email" name="login_email" placeholder="enter your email" class="mv-inputbox mv-inputbox-style-1"/>
                      </div>
                    </div>

                    <div class="mv-form-group">
                      <div class="mv-label"> <strong class="text-uppercase">Password</strong></div>
                      <div class="mv-field">
                        <input value="<?php echo $password?>" type="password" name="login_password" placeholder="enter your password" class="mv-inputbox mv-inputbox-style-1"/>
                      </div>
                    </div>

                    <div class="mv-form-group submit-button mv-mt-30">
                      <button type="submit" class="mv-btn mv-btn-style-5 btn-login" name="submit_login" value="login"><i class="fa fa-sign-in"></i> Login</button>
                      <label class="mv-checkbox mv-checkbox-style-1 checkbox-remember">
                        <input type="checkbox" name="test138" class="hidden"/><span class="checkbox-after-input"><span class="checkbox-visual-box"><span class="icon-checked fa fa-check"></span></span><span class="checkbox-text">Remember me</span></span>
                      </label>
                    </div>

                    <div class="mv-form-group"><a href="forgot-password.html" class="btn-forgot-pass">Forgot your password?</a></div>
                  </div>
                  <!-- .form-body-->
                </form>
                <!-- .form-login-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- .mv-main-body-->

      <section class="main-newsletter mv-newsletter-style-1 mv-wrap">
        <div style="background-image: url(images/background/demo_bg_1920x1680.png)" class="newsletter-bg">
          <div class="container">
            <form method="GET" class="form-newsletter">
              <label class="hidden-xs mv-label text-right text-uppercase">Newsletter</label>
              <div class="mv-field">
                <div class="mv-inputbox-group">
                  <input type="text" name="test138" placeholder="Subscribe your email here" data-mv-placeholder="Subscribe your email here" class="mv-inputbox mv-inputbox-style-3"/>
                  <div class="inputbox-addon">
                    <button type="button" class="mv-btn mv-btn-block mv-btn-style-13"><span class="btn-icon fa fa-long-arrow-right"></span></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- .mv-newsletter-style-1-->

      <?php
      include 'layouts/footer.php';
      ?>
  </body>
</html>