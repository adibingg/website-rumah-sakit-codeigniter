<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title; ?> </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets-admin/css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>/assets-admin/css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>/assets-admin/css/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>/assets-admin/css/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>/assets-admin/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div class="col-md-6">
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo validation_errors(); ?>
            <form action="<?php echo base_url('admin/login/auth'); ?>" method="post">
              <h1>Login Administrator</h1>
              <?php if(!$this->session->flashdata('info')): ?>
              <?php  else: ?>
              <h1><?php echo $this->session->flashdata('info'); ?></h1>
              <?php endif; ?>
              <div>
                <input name="username" type="text" class="form-control has-error" placeholder="Username" required=""/>
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-success">Login</button>
                <a class="reset_pass" href="#">Lupa kata sandi?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signup" class="to_register"> - Developed by. IT RSU Kartini 2019 - </a>
                </p>

                <div class="clearfix"></div>
                <br />

               
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <div class="col-md-6">
                hello
    </div>
  </body>
</html>
