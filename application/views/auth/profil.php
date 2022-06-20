<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Profil</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form action="<?= base_url('Auth/simpanprofil'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>Nama Pengguna</label>
                                    <input class="form-control" type="hidden" name="idedit" id="idedit" value="<?= $profil['id']; ?>" required>
                                    <input class="form-control" type="text" name="nama" id="nama" value="<?= $profil['nama']; ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username" id="username" value="<?= $profil['username']; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" id="password" required>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-success" type="submit">Simpan</button>
                            </div>
                        </form>
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
<?php $this->load->view('templates/_foot'); ?>

</body>

</html>