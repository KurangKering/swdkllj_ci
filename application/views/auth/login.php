
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SWDKLLJ | Login</title>

    <link href="<?php echo base_url('template/inspinia/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('template/inspinia/'); ?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url('template/inspinia/'); ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url('template/inspinia/'); ?>css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInUp">
        <div>
            <div>
            <?php echo validation_errors(); ?>
                <h1 class="logo-name">XXX</h1>

            </div>
            <h3>Welcome to </h3>
            <p>Sistem Informasi SWDKLLJ 
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" method="POST" role="form" action="<?php echo base_url('auth/login') ?>">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Username" >
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" >
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Lupa password?</small></a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('template/inspinia/'); ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url('template/inspinia/'); ?>js/bootstrap.min.js"></script>

</body>

</html>
