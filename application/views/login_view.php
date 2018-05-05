
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comportable" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>Codeigniter</title>
    <link href="http://localhost/kwu/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/kwu/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/kwu/assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="http://localhost/kwu/assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="http://localhost/kwu/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="http://localhost/kwu/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
        body{
            background-color: #6495ED;
        }
    </style>
</head>
<body>

	<div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 15%;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row-fluid user-row">
                            <h3 class="form-login-heading text-center">Silahkan Login</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="<?=base_url('Login/cek_login')?>" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input class="form-control" placeholder="Username" type="text" name="username">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input class="form-control" placeholder="Password" type="password" name="password">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/kwu/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://localhost/kwu/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="http://localhost/kwu/assets/js/jquery.min.js.js"></script>
    <script type="text/javascript" src="http://localhost/kwu/assets/js/npm.js"></script>
</body>
</html>