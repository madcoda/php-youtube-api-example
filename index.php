<?php

require('./vendor/autoload.php');

$youtube = new Madcoda\Youtube\Youtube(array('key' => "(* replace your api code here *)"));

try{
  $video = $youtube->getVideoInfo('M7PWih2PQPQ');
  var_dump($video);
} catch (Exception $e) {
  echo $e->getMessage();
}