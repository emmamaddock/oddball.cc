<?php include('../../includes/layout/header_html.php'); ?>

<?php
  if (!isset($page_title)) {
    $page_title = 'ELM Co. | 404 Not Found';
  }
 ?>
 <head>

   <title><?php echo $page_title; ?></title>

   <link rel="stylesheet" type="text/css" href="<?php echo DOC_ROOT . 'resources/css/404/default.css' ?>">

 </head>

<div class="canvas" id="body">
    <div class="canvas-container">

      <h1 id="four-oh-four">404!</h1>
      <h2>Oopsie! Looks like this page doesn't exist uwu</h2>

    </div>
</div>

<?php include('../../includes/layout/footer_html.php'); ?>
