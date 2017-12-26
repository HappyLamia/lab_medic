<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dark-theme/') ?>styles/style-responsive.css">
</head>
<body style="background: url('<?php echo base_url('assets/dark-theme/') ?>images/bg/bg.png') center center fixed;">
    <div class="page-form">
        <div class="panel panel-blue">
            <div class="panel-body pan">
                <form method="POST" action="<?php echo base_url('author/login') ?>" class="form-horizontal">
                <div class="form-body pal">
                    <div class="col-md-12 text-center">
                        <h1 style="margin-top: -90px; font-size: 48px;">
                            KAdmin</h1>
                        <br />
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <img src="<?php echo base_url('assets/dark-theme/') ?>images/avatar/profile-pic.png" class="img-responsive" style="margin-top: -35px;" />
                        </div>
                        <div class="col-md-9 text-center">
                            <h1>
                                <?php echo $alert; ?>
                            </h1>
                            <br />
                            <p>
                                Just sign in and we’ll send you on your way
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-md-3 control-label">
                            Username:</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                <input id="inputName" name="username" type="text" placeholder="" class="form-control" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-md-3 control-label">
                            Password:</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <i class="fa fa-lock"></i>
                                <input id="inputPassword" name="password" type="text" placeholder="" class="form-control" /></div>
                        </div>
                    </div>
                    <div class="form-group mbn">
                        <div class="col-lg-12" align="right">
                            <div class="form-group mbn">
                                <div class="col-lg-3">
                                    &nbsp;
                                </div>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-default">
                                        Sign In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <p>
                Forgot Something ?
            </p>
        </div>
    </div>
</body>
</html>
