<?php
   include 'conn/koneksi.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sistem Informasi Perpustakaan </title>
    <link rel="stylesheet" type="text/css" href="../images/style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<title>Login Sistem</title>

<style type="text/css">
 body {
        background-color: #444;
        background: url(http://s18.postimg.org/l7yq0ir3t/pick8_1.jpg);
        
    }
    .form-signin input[type="text"] {
        margin-bottom: 5px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    .form-signin .form-control {
        position: relative;
        font-size: 16px;
        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .vertical-offset-100 {
        padding-top: 100px;
    }
    .img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
    margin: auto;
    }
    .panel {
    margin-bottom: 20px;
    background-color: rgba(255, 255, 255, 0.75);
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }
</style>

</head>
<body>
 <body>
    <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="/perpus/logo-perpus.png" class="img-responsive" alt="Conxole Admin"/>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="cek-login.php" method="POST" class="form-signin">
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result">Masukan Username dan Password Anda</div>
                                        </label>
                                        <input type="text" name="user" class="form-control" placeholder="Username" required>
                                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                                        <br></br>
                                        <button type="submit" name="log" class="btn btn-lg btn-success btn-block">Login »</button>
                                        <button type="reset" name="log" class="btn btn-lg btn-danger btn-block">Reset</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>        
</body>
</html>