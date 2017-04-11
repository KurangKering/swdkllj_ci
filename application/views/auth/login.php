
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
                <h1 class="logo-name">XXX</h1>

            </div>
            <h3>Sistem Informasi SWDKLLJ</h3>

            <form  id="login" class="m-t" method="POST" role="form" >
                <div class="form-group">
                    <input name="username" type="text" class="form-control required" placeholder="Username" >
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control required" placeholder="Password" >
                </div>
                <button id="login_button" type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <p id="error"></p>
                <a href="#"><small>Lupa password?</small></a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('template/inspinia/'); ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url('template/inspinia/'); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/login.js"></script>

    

</body>

</html>
