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
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script>
	//Fungsi cek dipanngiil ketika tombol submit di tekan
	function cek(){
		var nama = document.forms["reg"]["nama"].value; //mengambil variabel nama dari form hmtl
    var nik = document.forms["reg"]["nik"].value; //mengambil variabel hp dari form hmtl
		var hp = document.forms["reg"]["tlp"].value; //mengambil variabel hp dari form hmtl
    var pass = document.forms["reg"]["password"].value; //mengambil variabel hp dari form hmtl
    var PanjangPass = pass.length;
		var angka=/^[0-9]+$/; //mengandung nilai 0,1,2,3,4,5,6,7,8,9
		var namaValid    = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/; //pembanding isi variabel untuk nama(hanya bisa huruf)
		var pesan = ''; //variabel pesan yang akan ditampilkan


		//apabila user menginputkan nama yang tidak sesuai dengan aturan(bukan huruf)
        if (nama != '' && !nama.match(namaValid)) {
            pesan += '- Nama harus huruf<br>';
        }

    //apabila NIK tdk sesuai
        if (nik !=''  && !nik.match(angka)) {
            pesan += '- NIP harus angka<br>';
        }

     //pasword 8-12
       if (PanjangPass < 6 || PanjangPass > 12) {
            pesan += "- Password memuat 6 - 12 Karakter<br>";
          }

		//apabila tlp tdk sesuai
        if (hp !=''  && !hp.match(angka)) {
            pesan += '- Nomor telepon harus angka<br>';
        }

		//mengisi variabel pesan default apabila terdapat error
        if (pesan != '') {
            document.getElementById("errorForm").innerHTML = pesan;
            document.getElementById("errorForm").style.display = "block";
            document.getElementById("errorFormDiv").style.display = "block";
            document.getElementById("errorNIKganda").style.display = "none";
            return false;
        }else{
            return true
        }
    	}
</script>
</head>

<body class="hold-transition register-page">
<div class="register-box" style="margin-top:35px;">
  <div class="register-logo">
    <img src='<?php echo base_url().'assets/gambar/logoBaperwil.png' ?>' width='70'><br>
    <b>Pencoba</b>Bakorwil
  </div>

  <div class="register-box-body">
    <p class="login-box-msg"><b>Register</b></p>

    <form name="reg" action="<?php echo base_url('register')?>" method="post" onsubmit="return cek()">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="NIP" name="nik" required>
        <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-qrcode form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nomor Telepon" name="tlp" required>
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-6">


        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-xs-4" style="float:right;">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          <center><a href="<?php echo base_url('') ?>" class="text-center"><b>Login</b></a></center>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    <div id="errorFormDiv" class="alert alert-warning" style="display:none;">
      <p id="errorForm"></p>
    </div>
    <div id="errorNIKganda"><?php echo $this->session->flashdata('message');?></div>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->





<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
