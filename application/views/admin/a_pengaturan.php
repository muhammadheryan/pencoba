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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <script type="text/javascript" src="<?php echo base_url()?>assets/myJS.js"></script>

  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">
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
  <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

  <!-- jQuery 3 -->
  <script src="<?php echo base_url()?>assets/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url()?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url()?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url()?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url()?>assets/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable({
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
      })
      $('#example2').DataTable({
        'paging'      : false,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : false,
        'info'        : false,
        'autoWidth'   : false
      })
      $('#example3').DataTable({
        'paging'      : false,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : false,
        'info'        : false,
        'autoWidth'   : false
      })
    })
  </script>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
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
        <li>
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
        <li class="active">
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
        Pengaturan
        <small>Pengaturan Akun Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <span id="date_time" style="font-size:15px;"></span>
        <script type="text/javascript">window.onload = date_time('date_time');</script><br>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('notisSM');?>
            </div>

            <div class="box-body">
              <h4><b>Daftar Pengguna</b></h4>
              <table id="example1" class="table table-bordered table-striped table-hover display nowrap" style="width:100%;">
                <thead>
                <tr>
                  <th style="width:5%">NO</th>
                  <th style="width:25%">NIP</th>
                  <th style="width:25%">Nama</th>
                  <th style="width:15%">Telepon</th>
                  <th style="width:15%">Status</th>
                  <th style="width:15%">Operasi</th>
                </tr>
                </thead>
                <tbody>
                  
                  <?php
                    if(is_array($pegawai)){
                      $i = 1;
                      foreach ($pegawai as $item) {
                        ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $item['nik']; ?></td>
                          <td><?php echo $item['nama']; ?></td>
                          <td><?php echo $item['tlp']; ?></td>
                          <td><?php
                                if($item['status'] == 0){
                                  echo "Tidak Aktif";
                                }else{
                                  echo "Aktif";
                                }
                           ?></td>
                          <td align=center>

                            <button class="btn btn-warning" onclick="ubah_status(<?php echo $item['idPegawai']; ?>)"><i class="fa fa-edit"></i></button>
                            <!--<button class="btn btn-danger" onclick="konfirmasi_hapus(<?php echo $item['idPegawai']; ?>)"><i class="fa fa-trash"></i></button>-->
                          </td>
                        </tr>
                    <?php
                    $i++;
                    }
                  }
                 ?>
                </tbody>
              </table>

              <!-- hapus aja komen biar nampilin data surat
              <br><br>
              <div class="row">
                <div class="col-lg-6 col-sm-12">
                  <h4><b>Surat Masuk</b></h4>
                  <table id="example2" class="table table-bordered table-striped table-hover display nowrap" style="width:100%;">
                    <thead>
                    <tr>
                      <th>Tahun</th>
                      <th>Jumlah</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        if(is_array($sm)){
                          foreach ($sm as $item) {
                            ?>
                            <tr>
                              <td><?php echo $item['Tahun']; ?></td>
                              <td><?php echo $item['Jumlah']; ?></td>
                            </tr>
                        <?php
                        }
                      }
                     ?>
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <h4><b>Surat Keluar</b></h4>
                  <table id="example3" class="table table-bordered table-striped table-hover display nowrap" style="width:100%;">
                    <thead>
                    <tr>
                      <th>Tahun</th>
                      <th>Jumlah</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        if(is_array($sk)){
                          foreach ($sk as $item) {
                            ?>
                            <tr>
                              <td><?php echo $item['Tahun']; ?></td>
                              <td><?php echo $item['Jumlah']; ?></td>
                            </tr>
                        <?php
                        }
                      }
                     ?>
                    </tbody>

                  </table>
                </div>
              </div>
              -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <script type="text/javascript">
  $(document).ready( function () {
      $('#example1').DataTable();
    });
    var save_method; //for save method string
    var table;
    var idHapus;


    function ubah_status(idPegawai)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/ajaxPegawai/')?>/" + idPegawai,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            document.getElementById("namaEdit").innerHTML = data.nama;
            document.getElementById("nikEdit").innerHTML = data.nik;
            $('[name="nik"]').val(data.nik);

            if (data.status == 1 ){
                $('#form').find(':radio[name=statusLogin][value="1"]').prop('checked', true)
            }else{
                $('#form').find(':radio[name=statusLogin][value="0"]').prop('checked', true)
            }



            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Pengaturan Akun Pegawai'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function konfirmasi_hapus(idPegawai)
    {
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/ajaxPegawai/')?>/" + idPegawai,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            idHapus = data.idPegawai;
            document.getElementById("konfirmasiNIK").innerHTML = data.nik;
            document.getElementById("konfirmasiNama").innerHTML = data.nama;
            document.getElementById("konfirmasiTlp").innerHTML = data.tlp;
            if (data.status == 1 ){
                document.getElementById("konfirmasiStatusLogin").innerHTML = "Aktif";
            }else{
                document.getElementById("konfirmasiStatusLogin").innerHTML = "Non Aktif";
            }

            $('#modalHapus').modal('show'); // show bootstrap modal when complete loaded

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }


    function hapus(){
      $.ajax({
        url : "<?php echo site_url('admin/hapusPegawai')?>/"+idHapus,
        type: "POST",
        dataType: "JSON",
        success: function(data)
        {
           location.reload();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error deleting data');
        }
    });
    }

    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('admin/bookadd')?>";
      }
      else
      {
          url = "<?php echo site_url('admin/ubahPegawai')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }



  </script>


    <div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Edit</h3>
        </div>
        <div class="modal-body form">
          <form action="#" id="form" class="form-horizontal">
            <input type="hidden" value="" name="nik"/>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3">
                NIP
              </div>
              <div class="col-md-8">
                <p id="nikEdit"></p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3">
                Nama
              </div>
              <div class="col-md-8">
                <p id="namaEdit"></p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3">
                Status
              </div>
              <div class="col-md-8">
                <div class="form-group">
                    <div class="col-lg-8">
                      <label>
                        <input type="radio" name="statusLogin" class="minimal" value="1">
                        Aktif&nbsp;&nbsp;&nbsp;&nbsp;
                      </label>
                      <label>
                        <input type="radio" name="statusLogin" value="0" class="minimal">
                        Non Aktif
                      </label>
                    </div>
                </div>
              </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->



    <div class="modal fade" id="modalHapus" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-titlee">Hapus Akun Pegawai ini?</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              NIP
            </div>
            <div class="col-md-8">
              <label id="konfirmasiNIK" ></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Nama
            </div>
            <div class="col-md-8">
              <label id="konfirmasiNama"></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Telepon
            </div>
            <div class="col-md-8">
              <label id="konfirmasiTlp" ></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Status Akun
            </div>
            <div class="col-md-8">
              <label id="konfirmasiStatusLogin"></label>
            </div>
          </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="button" onclick="hapus()" class="btn btn-danger">Hapus</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->
