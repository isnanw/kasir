<h2>Konfirmasi Check Out</h2>
<div class="kotak2">
    <?php
    $grand_total = 0;
    if ($cart = $this->cart->contents()) {
        foreach ($cart as $item) {
            $grand_total = $grand_total + $item['subtotal'];
        }
        echo "<h4>Total Belanja: Rp." . number_format($grand_total, 0, ",", ".") . "</h4>";
    ?>
        <form action="<?= base_url('Utama/proses_order'); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group  has-success has-feedback">
                <div class="row">
                    <div class="col-md-6">
                        <p>Silahkan Lakukan Pembayaran Pada No.Rek <?php echo $toko->no_rek; ?> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="file">Upload Bukti Pembayaran</label>
                        <input type="file" id="file" name="file" accept=".pdf, .jpg, .png" required>
                    </div>
                </div>
                <br>
                <div class="form-group  has-success has-feedback">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </div>
        </form>
    <?php
    } else {
        echo "<h5>Shopping Cart masih kosong</h5>";
    }
    ?>
</div>