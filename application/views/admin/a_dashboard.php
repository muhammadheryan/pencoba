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
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">


  <script type="text/javascript" src="<?php echo base_url()?>assets/myJS.js"></script>
  <!-- jQuery 3 -->
  <script src="<?php echo base_url()?>assets/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url()?>assets/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url()?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script>
  function myFunction() {
	    var x = document.getElementById("myInput");
	    if(x.type === "password") {
	        x.type = "text";
	    }else{
	        x.type = "password";
	    }
	}
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
            return false;
        }else{
            return true;
        }
      }
</script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin/dashboard'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src='<?php echo base_url().'assets/gambar/logoBaperwil.png' ?>' width='30'></span>

      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pencoba</b>Bakorwil</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-user" style="font-size:15px;"></i>&nbsp;
              <b><span class="hidden-xs" style="font-size:15px;"><?php echo $this->session->userdata("nama"); ?></span></b>&nbsp;<i class="fa fa-angle-down" style="font-size:15px;"></i>
            </a>
            <ul class="dropdown-menu" style="width:10px;">
              <li>
                <a href="<?php echo base_url('keluar'); ?>" class="btn btn-flat bg-blue margin" style="margin:5px 5px 5px 5px;"><i class="fa fa-power-off"></i>Keluar</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigasi Menu</li>

        <li class="active">
          <a href="<?php echo base_url('admin/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/suratMasuk'); ?>">
            <i class="fa fa-envelope-o"></i>
            <span>Surat Masuk</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/suratKeluar'); ?>">
            <i class="fa fa-send-o"></i>
            <span>Surat Keluar</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/pengaturan'); ?>">
            <i class="fa fa-gears"></i>
            <span>Pengaturan</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Halaman Depan Admin</small>
      </h1>
      <ol class="breadcrumb">
        <span id="date_time" style="font-size:15px;"></span>
        <script type="text/javascript">window.onload = date_time('date_time');</script><br>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>Surat Masuk</h3>

              <p>Surat untuk Bakorwil</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope-o"></i>
            </div>
            <a href="<?php echo base_url('admin/suratMasuk'); ?>" class="small-box-footer">Lihat Surat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Surat Keluar</h3>

              <p>Surat dari Bakorwil</p>
            </div>
            <div class="icon">
              <i class="fa fa-send-o"></i>
            </div>
            <a href="<?php echo base_url('admin/suratKeluar'); ?>" class="small-box-footer">Lihat Surat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Pengaturan</h3>

              <p>Pengaturan Akun Pegawai</p>
            </div>
            <div class="icon">
              <i class="fa fa-gears"></i>
            </div>
            <a href="<?php echo base_url('admin/pengaturan'); ?>" class="small-box-footer">Kunjungi Pengaturan <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="" style="border: 1px solid DarkTurquoise; border-radius: 5px; margin: 20px 15px 20px 15px;">
          <h2 style="margin-top:0px; background-color:DarkTurquoise; color:#f1f1f1; padding:5px 5px 5px 15px;"><b>Selamat Datang !</b></h2></b><br>
          <div class="row">
            <div class="col-md-3">
              <img src='<?php echo base_url().'assets/gambar/logoBaperwil.png' ?>' width='170' style="margin-left:20px;">
            </div>
            <div class="col-md-3">
              <h3>DATA DIRI</h3>
              <table style="font-size:15px;">
                <tr height=25>
                  <td>Nama</td>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td align=left>:<b> <?php echo $this->session->userdata('nama'); ?></b></td>
                </tr>
                <tr height=25>
                  <td>Jabatan</td>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td align=left>: <b><?php if($this->session->userdata('jabatan') == 1){echo "Staff Arsip Baperwil";}else{ echo "Pegawai Baperwil";} ?></b></td>
                </tr>
                <tr height=25>
                  <td>NIP</td>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td align=left>: <b><?php echo $this->session->userdata('nik'); ?></b></td>
                </tr>
                <tr height=25>
                  <td>Telepon</td>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td align=left>: <b><?php echo $this->session->userdata('tlp'); ?></b></td>
                </tr>
              </table>
              <br>
              <a data-toggle="modal" data-target="#edit-data" class="btn btn-info" style="float:left; display: inline-block; "><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;<b>EDIT</b></a>
            </div>
          </div>
          <br>
        </div>

      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- /.modal Tambah -->
  <div class="modal fade" id="edit-data">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Data Diri</h4>
        </div>
        <div class="modal-body">

          <form name="reg" class="form-horizontal" form action="<?php echo base_url('controllerPegawai/editDataPegawai')?>" method="post" onsubmit="return cek()">
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Nama</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="nama" value="<?php echo $this->session->userdata('nama'); ?>" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">NIP</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="nik" value="<?php echo $this->session->userdata('nik'); ?>" required disabled title="NIP TIdak Dapat Diubah">
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Telepon</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="tlp" value="<?php echo $this->session->userdata('tlp'); ?>" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">password</label>
                <div class="col-lg-9">
                  <input class="form-control" type="password" name="password" id="myInput" value="<?php echo $this->session->userdata('pass'); ?>" required>
                </div>
            </div>
            <label class="col-lg-3 col-sm-3 control-label"></label>
            <div class="col-lg-9">
              <label style="font-weight:normal;">
      	        <input type="checkbox" onclick="myFunction()"/>
      	        <i></i> Tampilkan Password
      	      </label>
            </div>

            <label class="col-lg-3 col-sm-3 control-label"></label>
              <div class="col-lg-9">
                <div id="errorFormDiv" class="alert alert-warning" style="display:none;">
                  <p id="errorForm"></p>
                </div>
              </div>
              <br>

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
