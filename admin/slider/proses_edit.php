<?php
 //load koneksi database
 include '../../koneksi.php';
 
 //ambil data dari form
 $id = $_POST['id'];
 $judul_post = $_POST['judul_post'];
 $gambar_post = $_FILES['gambar_post']['name'];

 move_uploaded_file( $_FILES['gambar_post']['tmp_name'],'gambar/'.$gambar_post);


 //
 
 $update = mysqli_query($koneksi, "UPDATE tb_slider SET 
 judul = '$judul_post',
 gambar = '$gambar_post'

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