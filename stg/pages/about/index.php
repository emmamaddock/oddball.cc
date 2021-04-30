<?php include('../../includes/layout/header_html.php'); ?>

<?php
  if (!isset($page_title)) {
    $page_title = 'ELM Co. | About';
  }
 ?>
 <head>

   <title><?php echo $page_title; ?></title>

   <link rel="stylesheet" type="text/css" href="../../resources/css/about/default.css">

 </head>

      <h1 id="page-title">About</h1>
      <h2 style="text-align:center; position:relative; top:-80px;">A little about me</h2>
      <div id="about-me-info" class="columns-2">
        <div class="column-1" id="about-column-1">
          <p>
            Hey! My name is Emma and I’m a Computer Systems Engineering student at Carleton University.<br><br>
            I have passions for programming, cooking, painting, photography, music, poetry, etc etc.
            I love exploring new ways to make art, and I love seeing what possibilities hold for the
            intersection between art and technology.<br><br>
            I love the concepts of weird shapes, strong lines, bold colours, negative space, and the colour blue.<br><br>
            I love the idea of a secondary economy and giving new life to old things, so you can probably find me scouring
            the streets looking for something to paint on or use. <br><br>
            I’ve taken a break to focus on myself, to work, and to get back into my hobbies.<br><br>
            I also really really love plants.
          </p>
        </div>
        <div class="column-1" id="about-column-2">
          <div id="hover-border">
            <div class="circle-image">
              <img src="../../resources/images/about/about.JPG">
            </div>
          </div>
        </div>
      </div>

<?php include('../../includes/layout/footer_html.php'); ?>
