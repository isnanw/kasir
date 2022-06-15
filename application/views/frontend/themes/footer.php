</div>
<!-- /.row -->
</div>
<!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<footer class="footer">
    <div class="container">
        <p class="text-muted">
            <center>App Version 1.0</a></center>
        </p>
    </div>
</footer>


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/frontend/') ?>assets/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('assets/frontend/') ?>assets/js/arf.js"></script>
<script src="<?php echo base_url('assets/frontend/') ?>assets/js/prs.js"></script>
<script src="<?php echo base_url('assets/frontend/') ?>assets/js/validation.js"></script>
<script src="<?php echo base_url('assets/frontend/') ?>assets/jquery/jquery-ui.js"></script>
<script src="<?php echo base_url('assets/frontend/') ?>assets/jquery/jquery.validate.min.js"></script>
<script>
    window.jQuery || document.write('<script src="<?php echo base_url('assets/frontend/') ?>assets/vendor/jquery.min.js"><\/script>')
</script>
<script src="<?php echo base_url('assets/frontend/') ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url('assets/frontend/') ?>assets/asie/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?= base_url('assets/'); ?>js/sweetalert/dist/sweetalert2.min.js"></script>

<?php
if (!empty($this->session->flashdata('message'))) {
    $pesan = $this->session->flashdata('message');
    if ($pesan == "sukses") {
        $script = "
                    <script>
                            Swal.fire({
                              icon: 'success',
                              title: 'Data',
                              text: 'Berhasil Belanja !, Silahkan ke Kasir !'
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