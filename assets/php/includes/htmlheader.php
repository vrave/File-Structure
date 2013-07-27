<?php
require_once __DIR__ . '/../global.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    if (!empty($pagetitle)) {
        echo "<title>$pagetitle</title>\n";
    }
    ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?=ROOT_DIR?>/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT_DIR?>/assets/bootstrap/css/bootstrap-responsive.css">
    <!-- Profile CSS -->
    <link rel="stylesheet" type="text/css" href="<?=ROOT_DIR?>/assets/css/profile.css">
    <!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
