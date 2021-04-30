<?php require_once('init.php'); ?>

<!DOCTYPE html>
<html lan="en">
<head>

  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="<?php echo DOC_ROOT . 'resources/css/fonts.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo DOC_ROOT . 'resources/css/main_default.css'?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo DOC_ROOT . 'favicon.ico'?>">

  <link rel="prefetch" href="../../resources/fonts/Futura/FuturaPTBook.otf" as="font">
  <link rel="prefetch" href="../../resources/fonts/proxima_sv/ProximaNova-Regular.otf" as="font">



</head>
<body>
<div id="page-wrapper">
  <div id="special-header-wrapper">
    <header>
      <div id="logo-container">
        <a href="<?php echo DOC_ROOT . 'index.php'?>"><img src="<?php echo DOC_ROOT . 'resources/images/logo/logo-white.png'?>"></a>
      </div>

      <?php //TODO: make the nav depend on which pages exist?>
        <div id="header-nav">
          <ul>
            <li><a href="<?php echo DOC_ROOT . 'pages/about/index.php'?>">About</a></li>
            <li><a href="<?php echo DOC_ROOT . 'pages/art/index.php'?>">Art</a></li>
            <li><a href="<?php echo DOC_ROOT . 'pages/photography/index.php'?>">Photography</a></li>
            <li><a href="<?php echo DOC_ROOT . 'pages/resume/index.php'?>">Resume</a></li>
            <li><a href="<?php echo DOC_ROOT . 'pages/blog/index.php'?>">Blog</a></li>
            <li><a href="<?php echo DOC_ROOT . 'pages/contact/index.php'?>">Contact</a></li>
          </ul>
        </div>


    </header>

  </div>
