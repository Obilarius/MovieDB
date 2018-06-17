<?php
require( "config.php" );

$size = "original";
$poster_path = "/aIgM2d5iDRFIXb6t7GW5d9nR840.jpg";
$base_url = "http://image.tmdb.org/t/p/";
$local_path = 'img/poster/';

$source_url = $base_url . $size . $poster_path;
$dest_url = $local_path . $size . $poster_path;

if (!file_exists($dest_url)) {
  #gibt es /img/poster
  if (is_dir($local_path)) {
    #gibt es der Ordner /w500/
    if (!is_dir($local_path . $size)) {
      #wenn nicht wird er erstellt
      mkdir($local_path . $size);
    }
  } else {
    #erstelle den Ordner /img/poster und w500 darin
    mkdir($local_path);
    mkdir($local_path . $size);
  }
  file_put_contents($dest_url, file_get_contents($source_url));
}




?>
