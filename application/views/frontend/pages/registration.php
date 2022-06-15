<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account !</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('Utama/registration'); ?>">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <input type="text" class="form-control " id="nama" name="nama" placeholder="FullName" value="<?= set_value('nama') ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control " id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <input type="text" class="form-control " placeholder="No Identitas" name="no_identitas" value="<?= set_value('no_identitas') ?>">
                                    <?= form_error('no_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" placeholder="Tanggal Lahir" class="form-control " name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
                                    <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <input type="number" class="form-control " placeholder="Telepon" name="telepon" value="<?= set_value('telepon') ?>">
                                    <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control " id="jk" name="jk">
                                        <option value="" disabled selected>Jenis Kelamin</option>>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                        <option value="Lainya">Lainya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " placeholder="Alamat" name="alamat" value="<?= set_value('alamat') ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control " id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control " id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('Utama') ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>