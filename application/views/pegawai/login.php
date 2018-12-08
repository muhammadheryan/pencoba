<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pencoba Bakorwil</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'/assets/gambar/logoIkon.ico';?>" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <script src="<?php echo base_url()?>assets/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url()?>assets/bootstrap/dist/js/bootstrap.min.js"></script>

  <script>

    function myFunction() {
  	    var x = document.getElementById("myInput");
  	    if(x.type === "password") {
  	        x.type = "text";
  	    }else{
  	        x.type = "password";
  	    }
  	}
  </script>
</head>
<body class="hold-transition login-page">
<div class="login-box" style="margin-top:60px;">
  <div class="login-logo">
    <img src='<?php echo base_url().'assets/gambar/logoBaperwil.png' ?>' width='70'><br>
    <b>Pencoba</b>Bakorwil
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><b>Login</b></p>

    <form class="" action="<?php echo base_url(); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="NIP" name="nik" required>
        <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="myInput" type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-qrcode form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <label style="font-weight:normal;">
            <input type="checkbox" onclick="myFunction()"/>
            <i></i>&nbsp;Tampilkan Password
          </label>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
          <center><a href="register" class="text-center" style="margin-right:0px;"><b>Buat Akun</b></a></center>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br>
    <?php echo $this->session->flashdata('messageLogin');?>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


</body>
</html>
