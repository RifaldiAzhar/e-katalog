<?php
 //load koneksi database
 include '../../koneksi.php';
 
 //ambil data dari form
 $id = $_POST['id'];
 $nama_sosmed_post = $_POST['nama_sosmed_post'];
 $link_post = $_POST['link_post'];
 $icon_post = $_FILES['icon_post']['name'];

 move_uploaded_file( $_FILES['icon_post']['tmp_name'],'gambar/'.$icon_post);

 //
 
 $update = mysqli_query($koneksi, "UPDATE tb_social SET 
 nama_sosmed = '$nama_sosmed_post',
 link = '$link_post',
 icon = '$icon_post'

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