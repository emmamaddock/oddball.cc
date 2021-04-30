<?php
require_once('../../classes/SlideshowManager.php');

$slideshow_manager = new SlideshowManager();

$page_info->title = 'ELM Co. | Home';

$slides = $slideshow_manager->get_slides();


 ?>
