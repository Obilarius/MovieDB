<?php
ini_set( "display_errors", true );
ini_set('max_execution_time', 900);
date_default_timezone_set( "Europe/Berlin" );  // http://www.php.net/manual/en/timezones.php

# Database
define( "DB_DSN", "mysql:host=localhost;dbname=moviecms;charset=utf8" );
define( "DB_USERNAME", "moviedb" );
define( "DB_PASSWORD", "moviedb" );
## Tables
define( "DB_TBL_GENRE", "genre" );
define( "DB_TBL_MOVIE", "movie" );
define( "DB_TBL_COMPANY", "company" );
define( "DB_TBL_COLLECTION", "collection" );


define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_MOVIES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );

# Paths
define( "LOCAL_POSTER_PATH", "img/poster/" );
define( "LOCAL_BACKDROP_PATH", "img/backdrop/" );

# Classes
require( CLASS_PATH . "/movie.php" );
require( CLASS_PATH . "/genre.php" );


# Design
define( "MEDIA_SM" , "576px" );
define( "MEDIA_MD" , "768px" );
define( "MEDIA_LG" , "992px" );
define( "MEDIA_XL" , "1200px" );
define( "DESIGN_WALL_COL" , "6" );





function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later. <br>";
  echo $exception->getMessage();  ### for Debug
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
