<?php require_once('init.php'); ?>

<!DOCTYPE html>
<html lan="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/elmco/resources/css/fonts.css">
  <link rel="stylesheet" type="text/css" href="/elmco/resources/css/main_default.css">
  <link rel="shortcut icon" type="image/x-icon" href="/elmco/favicon.ico">

  <link rel="prefetch" href="/elmco/resources/fonts/Futura/FuturaPTBook.otf" as="font">
  <link rel="prefetch" href="/elmco/resources/fonts/proxima_sv/ProximaNova-Regular.otf" as="font">
  <link rel="prefetch" href="/elmco/resources/fonts/proxima_sv/ProximaNova-Thin.otf" as="font">

  <script type="text/javascript" src="/elmco/resources/scripts/jquery-3.3.1.js"></script>

</head>
<body>
  <div id="header-wrapper">
    <header>
      <div id="logo-container">
        <a href="../../../index.php"><img src="/elmco/resources/images/logo/logo-white.png"></a>
      </div>

      <?php //TODO: make the nav depend on which pages exist?>
        <div id="header-nav">
          <ul>
            <li><a class="header-item" href="/elmco/pages/about/index.php">About</a></li>
            <li><a class="header-item" href="/elmco/pages/art/index.php">Art</a></li>
            <li><a class="header-item" href="/elmco/pages/photography/index.php">Photography</a></li>
            <li><a class="header-item" href="/elmco/pages/resume/index.php">Resume</a></li>
            <li><a class="header-item" href="/elmco/pages/blog/index.php">Blog</a></li>
            <li><a class="header-item" href="/elmco/pages/contact/index.php">Contact</a></li>
          </ul>
        </div>


    </header>

  </div>
