<div id="templatemo_bottom"><span class="bf bft"></span><span class="bf bfb"></span>
  <div class="col col_3">
  <h4>Social</h4>

    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM tb_social");
    while ($data = mysqli_fetch_array($query)) {
    ?>
     <ul class="nobullet social">
    <li><img width="50" src="admin/social/gambar/<?= $data['icon'] ?>" alt="image 1" class="img_nom img_border img_border_b" />
    <a href="#" class="<?= $data['icon'] ?>">
        <?= $data['nama_sosmed']?></a></li>
    </ul>
    <?php } ?>
  
    
  </div>

  <div class="col col_3">
  <?php
  include "koneksi.php";
  $no = 1;
  $query = mysqli_query($koneksi, "SELECT * FROM tb_twitter");
  while ($data =
    mysqli_fetch_array($query)
  ) {
  ?>
    <div class="col col_3">
      <h4><?= $data['judul']; ?></h4>
      <p> <?= $data['isi']; ?></p>
    </div>
  <?php  } ?>
  <div class="clear"></div>
  </div>
  <?php
  include "koneksi.php";
  $no = 1;
  $query = mysqli_query($koneksi, "SELECT * FROM tb_about");
  while ($data =
    mysqli_fetch_array($query)
  ) {
  ?>
    <div class="col col_3">
      <h4><?= $data['judul']; ?></h4>
      <p> <?= $data['isi']; ?></p>
    </div>
  <?php  } ?>
  <div class="clear"></div>
</div>