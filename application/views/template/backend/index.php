<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ois coffe</title>
    <!-- Load File CSS Bootstrap  -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body>
    <!-- Fixed navbar -->
    <nav>
        <?php
        /*
        * Variabel $headernya diambil dari core MY_Controller
        * (application/core/MY_Controller.php)
        * */
        echo $headernya;
        ?>
    </nav>
    <div class="container">
        <?php
        /*
        * Variabel $contentnya diambil dari core MY_Controller
        * (application/core/MY_Controller.php)
        * */
        echo $contentnya;
        ?>
    </div>
    <!-- Load file Javascript Bootstrap & jQuery -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>

</html>