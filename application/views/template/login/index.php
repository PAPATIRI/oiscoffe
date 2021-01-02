<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Ois Coffee</title>
    <!-- Load File CSS Bootstrap  -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* hitam pekat : 141414
hitam muda: 1b1b1b
putih mudah: f3f3f3
abu-abu: e1e1e1
 orange: E75326 */
        body {
            background-color: #1b1b1b;
            color: #f3f3f3;
        }

        .form-signin {
            max-width: 350px;
            margin-top: 20vh;
            margin-left: auto;
            margin-right: auto;
        }

        .form-signin .form-signin-heading {
            margin-bottom: 10px;
            text-align: center;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        button {
            margin-top: 2em;
        }
    </style>
</head>

<body>
    <div class="container cont-custom">
        <div class="form-signin">
            <h2 class="form-signin-heading">Login Admin</h2>
            <?php
            echo $contentnya;
            ?>
        </div>
    </div>
</body>

</html>