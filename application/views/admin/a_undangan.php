<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pencoba Bakorwil</title>
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
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
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
          <a href="<?php echo base_url('admin/undangan'); ?>">
            <i class="fa fa-calendar"></i>
            <span>Undangan</span>
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
        Undangan
        <small>Daftar Undangan</small>
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
              <a data-toggle="modal" data-target="#tambah-data" class="btn btn-success btn-lg" style="float:left; display: inline-block; font-size:20px; padding: 5px 10px 5px 10px;"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Tambah Undangan</a>
              <?php echo $this->session->flashdata('notisSM');?>
            </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th style="width:5%">NO</th>
                  <th style="width:10%">Tanggal</th>
                  <th style="width:20%">Nomor Surat</th>
                  <th style="width:15%">Pengirim</th>
                  <th style="width:20%">Perihal</th>
                  <th style="width:15%">Keterangan</th>
                  <th style="width:15%">Operasi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    if(is_array($itemSurat)){
                      $i = 1;
                      foreach ($itemSurat as $item) {
                        $nS = $item['noSurat'];
                        ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $item['tgl']; ?></td>
                          <td><?php echo $item['noSurat']; ?></td>
                          <td><?php echo $item['pengirim']; ?></th>
                          <td><?php echo $item['perihal']; ?></th>
                          <td><?php echo $item['keterangan']; ?></td>
                          <td align=center>
                            <a href="<?php echo base_url().'lihatSurat/'.$item['id']; ?>" title="Lihat" class="btn bg-navy" target="_blank"><i class="fa  fa-folder-open-o"></i></a>
                            <button class="btn btn-warning" onclick="ubah_surat(<?php echo $item['id']; ?>)"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger" onclick="konfirmasi_hapus(<?php echo $item['id']; ?>)"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                    <?php
                    $i++;
                    }
                  }
                 ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>NO</th>
                  <th>Tanggal</th>
                  <th>Nomor Surat</th>
                  <th>Pengirim</th>
                  <th>Perihal</th>
                  <th>Keterangan</th>
                  <th>Operasi</th>
                </tr>
                </tfoot>
              </table>
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


    function tambah_surat()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Tambah Surat');
    }

    function ubah_surat(noSurat)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/ajaxSurat/')?>/" + noSurat,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="pengirim"]').val(data.pengirim);
            $('[name="tgl"]').val(data.tgl);
            $('[name="keterangan"]').val(data.keterangan);
            $('[name="perihal"]').val(data.perihal);
            $('[name="noSurat"]').val(data.noSurat);

            if (data.statusTampil == 1 ){
                $('#form').find(':radio[name=statusTampil][value="1"]').prop('checked', true)
            }else{
                $('#form').find(':radio[name=statusTampil][value="0"]').prop('checked', true)
            }



            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Undangan'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function konfirmasi_hapus(noSurat)
    {
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/ajaxSurat/')?>/" + noSurat,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            idHapus = data.id;
            document.getElementById("konfirmasiNS").innerHTML = data.noSurat;
            document.getElementById("konfirmasiPengirim").innerHTML = data.pengirim;
            document.getElementById("konfirmasitgl").innerHTML = data.tgl;
            document.getElementById("konfirmasiPerihal").innerHTML = data.perihal;
            document.getElementById("konfirmasiketerangan").innerHTML = data.keterangan;

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
        url : "<?php echo site_url('admin/hapusSurat')?>/"+idHapus,
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
          url = "<?php echo site_url('admin/ubahUndangan')?>";
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

  <!-- /.modal Tambah -->
  <div class="modal fade" id="tambah-data">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Undangan</h4>
        </div>
        <div class="modal-body">

          <form class="form-horizontal" form action="<?php echo base_url('controllerSurat/tambahUndangan')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">File Surat</label>
                <div class="col-lg-9">
                  <input type="file" name="fileSurat" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Nomor Surat</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="noSuratTS" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Pengirim</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="pengirimTS" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Tanggal</label>
                <div class="col-lg-9">
                  <input class="form-control" type="date" name="tglTS" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Perihal</label>
                <div class="col-lg-9">
                  <textarea name="perihalTS" class="form-control" rows="2" cols="80" required></textarea>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Keterangan</label>
                <div class="col-lg-9">
                  <textarea name="keteranganTS" class="form-control" rows="2" cols="80" required></textarea>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label"></label>
                <div class="col-lg-9">
                  <label>
                    <input type="radio" name="statusTampil" class="minimal" value="1" checked>
                    Tampilkan Surat&nbsp;&nbsp;&nbsp;&nbsp;
                  </label>
                  <label>
                    <input type="radio" name="statusTampil" value="0" class="minimal">
                    Sembunyikan Surat
                  </label>
                </div>
            </div>
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



    <div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Edit Surat</h3>
        </div>
        <div class="modal-body form">
          <form action="#" id="form" class="form-horizontal">
            <input type="hidden" value="" name="id"/>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Nomor Surat</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="noSurat" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Pengirim</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="pengirim" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Tanggal</label>
                <div class="col-lg-9">
                  <input class="form-control" type="date" name="tgl" required>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Perihal</label>
                <div class="col-lg-9">
                  <textarea name="perihal" class="form-control" rows="2" cols="80" required></textarea>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label">Keterangan</label>
                <div class="col-lg-9">
                  <textarea name="keterangan" class="form-control" rows="2" cols="80" required></textarea>
                </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 col-sm-3 control-label"></label>
                <div class="col-lg-9">
                  <label>
                    <input type="radio" name="statusTampil" class="minimal" value="1">
                    Tampilkan Surat&nbsp;&nbsp;&nbsp;&nbsp;
                  </label>
                  <label>
                    <input type="radio" name="statusTampil" value="0" class="minimal">
                    Sembunyikan Surat
                  </label>
                </div>
            </div>
          </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
              <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
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
          <h3 class="modal-titlee">Hapus undangan ini ?</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Nomor Surat
            </div>
            <div class="col-md-8">
              <label id="konfirmasiNS" ></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Pengirim
            </div>
            <div class="col-md-8">
              <label id="konfirmasiPengirim"></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Tanggal
            </div>
            <div class="col-md-8">
              <label id="konfirmasitgl" ></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Perihal
            </div>
            <div class="col-md-8">
              <label id="konfirmasiPerihal"></label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              Keterangan
            </div>
            <div class="col-md-8">
              <label id="konfirmasiketerangan"></label>
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
