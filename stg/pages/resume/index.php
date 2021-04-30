<?php include('../../includes/layout/resume_header_html.php'); ?>

<?php
/*
  if (!isset($page_title)) {
    $page_title = 'ELM Co. | Resume';
  }

  $query = 'SELECT image_path FROM home_slides;';

  $result = db_query($connection,$query);
  $slides = db_all_array($result);

  //print_r2($slides);

  $urls = array();

  foreach ($slides as $slide) {
    foreach ($slide as $slider) {
      $urls[] = $slider;
    }
  }


*/
 ?>
 <head>

   <title><?php echo $page_title; ?></title>
   <link rel="stylesheet" type="text/css" href="/elmco/resources/css/resume/default.css">

 </head>
<div class="canvas">
    <div class="canvas-container">
      <div class="column-1 resume-section">
          <h1>About</h1>
          <div class="column-1">
              <p>

                I am a fourth year Computer Systems Engineering
                student at Carleton University. I'm passionate about digital electronics, programming, and design. I tend to pour my creativity
                into my code and my projects.
              </p>
        </div>
      </div>

      <div class="column-1 resume-section">
          <h1>Skills</h1>
          <div class="columns-2">
            <div class="column-1">
              <h2>Personal</h2>
              <img id="soft-skills" src="/elmco/resources/images/resume/soft_skills.png" style="height:90vh;">
            </div>
            <div class="column-1">
              <h2>Techincal</h2>
              <img id="technical-skills" src="/elmco/resources/images/resume/technical_skills.png" style="width:55vw;">
            </div>
        </div>
      </div>

      <div class="column-1 resume-section">
          <h1>Work Experience</h1>
          <div class="columns-2">
            <div class="column-1">
              <p>
                I guess this is where I introduce myself???
              </p>
            </div>
            <div class="column-1">
              <p>
                This is just more cool stuff! I made this web page.
              </p>
            </div>
        </div>
      </div>

      <div class="column-1 resume-section">
          <h1>Education</h1>
          <div class="columns-2">
            <div class="column-1">
              <p>
                I guess this is where I introduce myself???
              </p>
            </div>
            <div class="column-1">
              <p>
                This is just more cool stuff! I made this web page.
              </p>
            </div>
        </div>
      </div>

      <div class="column-1 resume-section">
          <h1>Projects</h1>
          <div class="columns-2">
            <div class="column-1">
              <p>
                I guess this is where I introduce myself???
              </p>
            </div>
            <div class="column-1">
              <p>
                This is just more cool stuff! I made this web page.
              </p>
            </div>
        </div>
      </div>

      <div class="column-1 resume-section">
          <h1>Extracurriculars</h1>
          <div class="columns-2">
            <div class="column-1">
              <p>
                I guess this is where I introduce myself???
              </p>
            </div>
            <div class="column-1">
              <p>
                This is just more cool stuff! I made this web page.
              </p>
            </div>
        </div>
      </div>


      <map name="technical-map">
        <area shape="rect" coords="0,0,1030,1200" href="<?php echo DOC_ROOT. 'index.php';?>">
        <area shape="rect" coords="150,668,406,815" href="<?php echo DOC_ROOT. 'index.php';?>">
        <area shape="rect" coords="150,895,406,1043" href="<?php echo DOC_ROOT. 'index.php';?>">
        <area shape="rect" coords="150,1116,406,1263" href="<?php echo DOC_ROOT. 'index.php';?>">
      </map>

      <map name="soft-map">
      </map>

      </div>
    </div>
</div>

<?php include('../../includes/layout/footer_html.php'); ?>
