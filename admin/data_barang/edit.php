<?php
 //load koneksi database
 include '../../koneksi.php';
 //ambil id dari url
 $id = $_GET['id'];
 //ambil data dari database
 $query = mysqli_query($koneksi, "SELECT * FROM data_barang WHERE id 
= '$id'");
 $data = mysqli_fetch_array($query);
 $nama_barang = $data['nama_barang'];
 $garis_kategori = $data['id_kategori'];
 $deskripsi = $data['deskripsi'];
 $harga = $data['harga'];
 //
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Edit Data Barang</title>
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet"
 
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,40
0i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" 
href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.cs
s">
 <!-- Tempusdominus Bootstrap 4 -->
 <link rel="stylesheet" href="../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 <!-- iCheck -->
 <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 <!-- JQVMap -->
 <link rel="stylesheet" 
href="../../assets/plugins/jqvmap/jqvmap.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" 
href="../../assets/dist/css/adminlte.min.css">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" 
href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.c
ss">
 <!-- Daterange picker -->
 <link rel="stylesheet" 
href="../../assets/plugins/daterangepicker/daterangepicker.css">
 <!-- summernote -->
 <link rel="stylesheet" 
href="../../assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
 <div class="wrapper">
 <div class="preloader flex-column justify-content-center align-items-center">
 <img class="animation__shake" 
src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" 
height="60"
 width="60">
 </div>
 <nav class="main-header navbar navbar-expand navbar-white 
navbar-light">
 <ul class="navbar-nav">
 <li class="nav-item">
 <a class="nav-link" data-widget="pushmenu" href="#" 
role="button"><i class="fas fa-bars"></i></a>
 </li>
 </ul>
 <ul class="navbar-nav ml-auto">
 </ul>
 </nav>
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
 <a href="index3.html" class="brand-link">
 <img src="../../assets/dist/img/AdminLTELogo.png" 
alt="AdminLTE Logo"
 class="brand-image img-circle elevation-3" 
style="opacity: .8">
 <span class="brand-text font-weight-light">Admin Panel 
E-Katalog</span>
 </a>
 <div class="sidebar">
 <nav class="mt-2">
 <ul class="nav nav-pills nav-sidebar flex-column" 
data-widget="treeview" role="menu"
 data-accordion="false">
 <!-- MENU SIDEBAR / ASIDE -->
 <li class="nav-item">
 <a href="index.php" class="nav-link active">
 <i class="nav-icon far fa-image"></i>
 <p>
 Data Barang
 </p>
 </a>
 </li>
<!-- SIDEBAR / ASIDE -->
 </ul>
 </nav>
 </div>
 </aside>
 <div class="content-wrapper">
 <div class="content-header">
 <div class="container-fluid">
 <div class="row mb-2">
 <div class="col-sm-6">
 <h1 class="m-0">Edit Data Barang</h1>
 </div><!-- /.col -->
 <div class="col-sm-6">
 <ol class="breadcrumb float-sm-right">
 <li class="breadcrumb-item"><a 
href="index.php">Home</a></li>
 <li class="breadcrumb-item active">Edit 
Data Barang</li>
 </ol>
 </div>
 </div>
 </div>
 </div>
 <!-- MAIN CONTENT -->
 <section class="content">
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title">Form Data Barang</h3>
 </div>
<!-- /.card-header -->
 <!-- form start -->
 <form action="proses_edit.php" method="post" 
enctype="multipart/form-data">
 <div class="card-body">
 <input type="hidden" name="id" value="<?= 
$id ?>">
 <div class="form-group">
 <label>Nama Barang</label>
<input type="text" 
name="nama_barang_post" class="form-control"
 placeholder="Masukan Nama Barang" 
value="<?= $nama_barang ?>" required>
 </div>
 <?php
     $nama_kategori_post = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id DESC");
     ?>
        <div class="form-group">
            <label for="kategori">Kategori</label>
                 <select class="form-control" name="nama_kategori_post" required>
                     <option value="">Pilih Kategori</option>
                         <?php while ($data = mysqli_fetch_array($nama_kategori_post)) { ?>
                             <option value="<?= $data['id'] ?>" <?php if ($data['id'] == $garis_kategori) { ?> <?= 'selected' ?> <?php } ?>><?= $data['nama_kategori'] ?></option>
                                <?php } ?>
                                     <select>
</div>
<div class="form-group">
 <label>Deskripsi</label>
<textarea name="deskripsi_post" 
class="form-control" rows="3"
 required><?= $deskripsi 
?></textarea>
 </div>
 <div class="form-group">
 <label>Harga</label>
<input type="text" name="harga_post" 
class="form-control"
 placeholder="Masukan Harga Barang" 
value="<?= $harga ?>" required>
 </div>
 <div class="form-group">
 <label>Pilih Gambar</label>
<div class="input-group">
 <div class="custom-file">
 <input type="file" 
name="gambar_post" class="custom-file-input" required>
 <label class="custom-file-label">Pilih File Gambar</label>
 </div>
 </div>
 </div>
 </div>
<!-- /.card-body -->
 <div class="card-footer">
 <button type="submit" class="btn btn-primary">Simpan</button>
 <a href="index.php" type="button" class="btn 
btn-default">kembali</a>
 </div>
 </form>
 </div>
 </section>
 <!-- MAIN CONTENT -->
 </div>
 <footer class="main-footer">
 <strong>Copyright &copy; 2014-2021 <a 
href="https://adminlte.io">AdminLTE.io</a>.</strong>
 All rights reserved.
 <div class="float-right d-none d-sm-inline-block">
 <b>Version</b> 3.2.0
 </div>
 </footer>
 <aside class="control-sidebar control-sidebar-dark">
 </aside>
 </div>
 <!-- jQuery -->
 <script src="../../assets/plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --
>
 <script>
 $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script 
src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script
>
 <!-- ChartJS -->
 <script src="../../assets/plugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline -->
 <script src="../../assets/plugins/sparklines/sparkline.js"></script>
 <!-- JQVMap -->
 <script 
src="../../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
 <script 
src="../../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="../../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="../../assets/plugins/moment/moment.min.js"></script>
 <script 
src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="../../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="../../assets/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script 
src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.
min.js"></script>
 <!-- AdminLTE App -->
 <script src="../../assets/dist/js/adminlte.js"></script>
</body>
</html>