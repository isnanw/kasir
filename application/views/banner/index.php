<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Banner Promo</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Banner Promo

                        <div class="text-right"><a href="#" class="btn btn-success btn-sm-2 " data-toggle="modal" data-target="#modaltambah">Tambah</a></div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <?php $this->session->flashdata('message');  ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="tablepelanggan">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Keterangan</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($banner as $s) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $s['gambar']; ?></td>
                                            <td><?= $s['keterangan']; ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modaledit" data-idedit="<?= $s['id']; ?>" data-keteranganedit="<?= $s['keterangan']; ?>" name="editbanner" id="editbanner"><i class="fa fa-edit"></i></a>
                                                <a data-kode="<?= $s['id']; ?>" href='javascript:void(0)' class="del_banner btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
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

<div class="modal fade" id="modaledit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Banner Promo</b></h5>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Banner/edit'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="idedit" id="idedit">
                    <label>Deskripsi / Keterangan</label>
                    <textarea class="form-control" name="keteranganedit" id="keteranganedit" cols="30" rows="5" placeholder="Ketik Keterangan" required></textarea>
                    <label for="gbbanneredit">Gambar</label>
                    <p>Biarkan Jika Tidak Update Gambar</p>
                    <input type="file" id="gbbanneredit" name="gbbanneredit" accept=".jpg, .png, .jpeg">
                    <div class="modal-footer">
                        <div class="text-right">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modaltambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Tambah Banner Promo</b></h5>
            </div>
            <form action="<?= base_url('Banner/tambah'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- <input type="hidden" name="id"> -->
                    <label>Deskripsi / Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="5" placeholder="Ketik Keterangan" required></textarea>
                    <label for="gbbanner">Gambar</label>
                    <input type="file" id="gbbanner" name="gbbanner" accept=".jpg, .png, .jpeg" required>
                </div>
                <div class="modal-footer">
                    <div class="text-right">
                        <button class="btn btn-success" type="submit">Tambah</button>
                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('templates/_foot'); ?>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#tablepelanggan').DataTable({
            responsive: true
        });
    });

    $(document).ready(function() {
        $(document).on('click', '#editbanner', function() {
         var idedit = $(this).data('idedit');
         var keteranganedit = $(this).data('keteranganedit');
         $('#idedit').val(idedit);
         $('#keteranganedit').val(keteranganedit);
     })
    })

    $(document).on('click', '.del_banner', function(event) {
        event.preventDefault();
        let kode = $(this).attr('data-kode');
        let delete_url = "<?= base_url(); ?>/Banner/delete/" + kode;


        Swal.fire({
            title: 'Hapus Data',
            text: "Apakah Anda Yakin Ingin Menghapus Data Ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then(async (result) => {
            if (result.value) {
                window.location.href = delete_url;
            }
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