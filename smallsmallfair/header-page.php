<?php
session_start();
if(!$_SESSION['user_is_logged_in'])
    header('location:index');

include_once('functions/funcs.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SmallSmall Fair - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css?ver=<?php echo rand(99, 99999999); ?>" rel="stylesheet">
    <link href="css/custom-css.css?ver=<?php echo rand(99, 99999999); ?>" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">