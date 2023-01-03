<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/'); ?>css/login.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('assets/'); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body background="<?= base_url('assets/bg.png'); ?>" style="background-repeat: no-repeat; background-size: 100% auto;">

    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="<?= base_url('assets/login.png'); ?>" />
            <center>
                <h3>Silahkan Login</h3>
            </center>
            <p id="profile-name" class="profile-name-card"></p>
            <?= $this->session->flashdata('message'); ?>
            <form class="form-signin" method="post" action="<?= base_url('auth'); ?>">
                <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username" required autofocus>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Masuk</button>
            </form>
        </div><!-- /card-container -->
    </div><!-- /container -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url('assets/'); ?>js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url('assets/'); ?>js/startmin.js"></script>

</body>

</html>