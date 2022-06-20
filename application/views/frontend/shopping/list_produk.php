<div class="container col-md-12">
  <h2>PROMO</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <?php $i = 1; ?>
      <?php foreach ($banner as $b) : ?>
        <div class="item <?php if($i == 1){ echo "active"; }else{  echo ""; } ?>">
          <img  class="img-responsive" src="<?= base_url('upload/banner/') . $b['gambar']; ?>">
        </div>
        <?php $i++;?>
      <?php endforeach ?>
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