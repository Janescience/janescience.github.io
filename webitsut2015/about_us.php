<?php
    require('includes/global.php');
    require('includes/' . $_SESSION['lang'] . '/' . basename($_SERVER['PHP_SELF'])); 
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> SUT IT : คณาจารย์และบุคลากร </title>
    <?php  include('header.php') ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

</head>
<body>

    <?php include("navbar.php") ?>
         
              <?php echo(TEXT_ABOUT_US); //ผลลัพธ์ที่ได้จะแสดงข้อความตามภาษาที่เลือก ?>

    <?php include("footer.php"); ?> 

    

</body>
</html>
