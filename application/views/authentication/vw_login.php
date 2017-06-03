<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="<?php echo base_url('template/inspinia/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('template/inspinia/'); ?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url('template/inspinia/'); ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url('template/inspinia/'); ?>css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">SW<h1>

            </div>
            
            <form class="m-t" role="form" method="POST" action="<?php echo base_url('authentication/do_login'); ?>">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" >
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" >
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('template/inspinia/'); ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url('template/inspinia/'); ?>js/bootstrap.min.js"></script>

</body>

</html>
