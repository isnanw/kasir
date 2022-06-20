<div class="container col-md-12">
  <h2>Promo</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 250px !important;">

      <div class="item active">
        <img src="<?= base_url('upload/produk/logitechb701.jpg') ?>">
      </div>

      <div class="item">
        <img src="<?= base_url('upload/produk/logitechb701.jpg') ?>">
      </div>

      <div class="item">
        <img src="<?= base_url('upload/produk/logitechb701.jpg') ?>">
      </div>

    </div>

    <br>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<h2>Daftar Produk</h2>
<?php
foreach ($produk as $row) {
  ?>
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="kotak">
      <form method="post" action="<?php echo base_url(); ?>Utama/tambah" method="post" accept-charset="utf-8">
        <a href="#"><img class="img-thumbnail" src="<?php echo base_url('upload/produk/') . $row['gambar']; ?>" </a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><?php echo $row['nama_produk']; ?></a>
          </h4>
          <h5>Rp. <?php echo number_format($row['harga'], 0, ",", "."); ?></h5>
          <p class="card-text"><?= $row['ringkasan']; ?></p>
        </div>
        <div class="card-footer">
          <a href="<?php echo base_url(); ?>Utama/detail_produk/<?php echo $row['id']; ?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Detail</a>

          <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
          <input type="hidden" name="nama" value="<?php echo $row['nama_produk']; ?>" />
          <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
          <input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>" />
          <input type="hidden" name="qty" value="1" />
          <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
        </div>
      </form>
    </div>
  </div>
  <?php
}
?>