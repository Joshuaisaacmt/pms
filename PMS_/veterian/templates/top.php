<?php
  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    header("location: ../index.php");
    exit;
  }
  include "../connection.php";

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS | Veterian </title>
    
    <!-- CSS links -->
    <!-- <link rel="stylesheet" href="../css/login_sty.css"/>
    <link rel="stylesheet" href="../css/lib/w3.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/> -->

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../dist/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../dist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
     <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/style_3.css">


    <style>
        .wiz{
            position: relative;
            right:0px;
            top:2px;
            bottom:0;
            width: 100%;
            padding:10px;
            height:490%;
            
        }
        .wiz3{
          height:100px;
        }

        .inputer { width: 100%;  padding: 10px 20px;
            margin: 8px 0; box-sizing: border-box; border: none;
            background-color: #3CBC8D;  color: white;
        }

        .interfeild{
         background-color: gray;
        }
        .btton{
          width: 100px;
          border-radius: 10px;
          float:right;
          padding-right:2px;
        }
        .readonly{
          width: 100%;  padding: 10px 20px;
            margin: 8px 0; box-sizing: border-box; border: none;
            background-color: gray;  color: white;
        }
    </style>
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="../dist/img/logo/loading.gif" alt=PMSLogo" height="150" width="150">
    </div>
