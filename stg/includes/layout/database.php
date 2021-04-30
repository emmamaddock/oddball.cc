<?php require_once('db_credentials.php'); ?>

<?php

/*function db_connect() {
  $connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

  if (mysqli_connect_errno()) {
    $msg = "Db connection failed: ";
    $msg .= mysqli_connect_error();
    exit($msg);
  } else {
    return $connection;
  }
}

function db_disconnect($connection) {
  if (isset($connection)) {
    mysqli_close($connection);
  }
}

function db_query($connection,$query) {
  $result = mysqli_query($connection,$query);
  if (!$result) {
    exit("Query failed.");
  } else {
      return $result;
  }
}

function db_all_array($result) {
  return mysqli_fetch_all($result);
}

function db_ass_array($result) {
  return mysqli_fetch_assoc($result);
}

function db_free($result) {
  mysqli_free_result($result);
}

//PREVENTING INJECTION
function db_e($connection,$string) {
  return mysqli_real_escape_string($connection,$string);
}*/

function print_r2($var, $to_string = false)
{
	ob_start();
	print_r($var);
	$contents = ob_get_contents();
	ob_end_clean();

	$contents = htmlentities($contents);

	$contents = str_replace('Array', '<span style="color:#0000ff">Array</span>', $contents);
	$contents = str_replace('Object', '<span style="color:#0000ff">Object</span>', $contents);

	$string = '<pre>';
	$string .= $contents;
	$string .= '</pre>';

	if($to_string)
		return $string;
	else
		echo $string;
}

 ?>
