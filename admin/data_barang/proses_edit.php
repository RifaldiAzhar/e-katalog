<?php
 //load koneksi database
 include '../../koneksi.php';
 
 //ambil data dari form
 $id = $_POST['id'];
 $nama_barang_post = $_POST['nama_barang_post'];
 $nama_kategori_post = $_POST['nama_kategori_post'];
 $deskripsi_post = $_POST['deskripsi_post'];
 $harga_post = $_POST['harga_post'];
 //
 
 //proses upload gambar
 $nama_file = $_FILES['gambar_post']['name'];
 $source = $_FILES['gambar_post']['tmp_name'];
 $folder = './gambar/';
 move_uploaded_file($source, $folder.$nama_file);
 //
 //update data ke database
 $update = mysqli_query($koneksi, "UPDATE data_barang SET 
 nama_barang = '$nama_barang_post',
 id_kategori = '$nama_kategori_post',
 deskripsi = '$deskripsi_post',
 harga = '$harga_post',
 gambar = '$nama_file'
 WHERE id = '$id'");
 //cek apakah proses edit ke database berhasil
 if($update){
 //jika berhasil tampilkan pesan berhasil edit data
 echo "<script>
 alert('Data Berhasil Diubah');
 window.location.href='index.php';
 </script>";
 }else{
 //jika gagal tampilkan pesan gagal edit data
 echo "<script>
 alert('Data Gagal Diubah');
 window.location.href='index.php';
 </script>";
 }
 //
?>