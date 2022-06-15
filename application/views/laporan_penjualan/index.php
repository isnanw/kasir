<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Laporan Penjualan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-10"><b>Data Laporan Penjualan</b></div>
                            <div class="col-md-2">
                                <table>
                                    <tr>
                                        <td> <b>Laba </b></td>
                                        <td> <b> : </b></td>
                                        <td> <b>Rp. </b></td>
                                        <td align="right">
                                            <b><?= number_format($laba); ?></b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <b>Untung </b></td>
                                        <td> <b> : </b></td>
                                        <td> <b>Rp. </b></td>
                                        <td align="right">
                                            <b><?= number_format($untung); ?></b>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <form method="post" action="<?= base_url('laporan_penjualan') ?>" class="row">
                            <div class="form-group col-md-2">
                                <input type="text" id="tanggalawal" name="tanggalawal" autocomplete="off" class="form-control" value="<?= $tanggalawal ?>">
                            </div>
                            <div class="form-group col-md-1">
                                <input type="text" readonly placeholder="S/D" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="text" id="tanggalakhir" name="tanggalakhir" autocomplete="off" class="form-control" value="<?= $tanggalakhir ?>">
                            </div>
                            <div class="form-group col-md-4 align-items-end">
                                <button name="action" value="tampil" type="submit" class="btn btn-success btn-col-1 " role="button" aria-disabled="true">Tampilkan</button>
                                <a href="<?= base_url('laporan_penjualan/cetak?tglawal=') . $tanggalawal . '&tglakhir=' . $tanggalakhir; ?>" name="cetak" class="btn btn-danger btn-col-1" target="_blank" role="button" aria-disabled="true"><i class="fa fa-balance-scale fa-fw"></i>Cetak</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <?php $this->session->flashdata('message');  ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="tablelaporanpenjualan">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nota</th>
                                        <th>Nama Produk</th>
                                        <th>Total Bayar</th>
                                        <th>Jumlah Uang</th>
                                        <th>Pelanggan</th>
                                        <th>Kasir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($penjualan as $s) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $s['tanggal']; ?></td>
                                            <td><?= $s['nota']; ?></td>
                                            <td><?= $s['nama_produk']; ?></td>
                                            <td><?= number_format($s['total_bayar']); ?></td>
                                            <td><?= number_format($s['jumlah_uang']); ?></td>
                                            <td><?= $s['pelanggan']; ?></td>
                                            <td><?= $s['kasir']; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php $this->load->view('templates/_foot'); ?>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#tanggalawal').datetimepicker({
            format: 'Y-m-d',
            timepicker: false
        });
    });
    $(document).ready(function() {
        $('#tanggalakhir').datetimepicker({
            format: 'Y-m-d',
            timepicker: false
        });
    });
    $(document).ready(function() {
        $('#tablelaporanpenjualan').DataTable({
            responsive: true
        });
    });
</script>
<?php
if (!empty($this->session->flashdata('message'))) {
    $pesan = $this->session->flashdata('message');
    if ($pesan == "Berhasil Ditambah") {
        $script = "
        <script>
        Swal.fire({
          icon: 'success',
          title: 'Data',
          text: 'Data Berhasil Ditambah'
          }) 
          </script>
          ";
      } elseif ($pesan == "Berhasil Dihapus") {
        // die($pesan);
        $script = "
        <script>
        Swal.fire({
          icon: 'success',
          title: 'Data',
          text: 'Berhasil Dihapus'
          }) 
          </script>
          ";
      } elseif ($pesan == "Berhasil Di Update") {
        // die($pesan);
        $script = "
        <script>
        Swal.fire({
          icon: 'success',
          title: 'Data',
          text: 'Berhasil Di Update'
          }) 
          </script>
          ";
      } else {
        $script =
        "
        <script>
        Swal.fire({
          icon: 'error',
          title: 'Data',
          text: 'Gagal'
          }) 

          </script>
          ";
      }
  } else {
    $script = "";
}
echo $script;
?>

</body>

</html>