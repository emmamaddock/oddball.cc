<!DOCTYPE html>

<html>

<?php
  //$DOC_ROOT =
?>

<head>
  <meta charset="utf-8">
  <meta lang="en">
  <title>Recipe Search</title>
</head>

<body>
  <!-- the search bar portion of the page-->
  <section class="search">
    <h1>Recipe Search</h1>
    <p>Hi. Welcome to recipe search. Search for recipes.</p> <?php //TODO: add user if time to add dynamic login?>
    <div id="recipe-bar-container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]?>" method="POST">
        <input type="text" id="query" name="search-query" placeholder="Type a recipe name here...">
        <input type="submit" value="Search">
      </form>
    </div>
  </section>

  <!-- the results portion of the page-->
  <section class="results">
    <h1>Results</h1>
  </section>

</body>
</html>

<?php

?>
