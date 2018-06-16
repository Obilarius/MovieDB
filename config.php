<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Berlin" );  // http://www.php.net/manual/en/timezones.php

# Database
define( "DB_DSN", "mysql:host=localhost;dbname=moviedb" );
define( "DB_USERNAME", "username" );
define( "DB_PASSWORD", "password" );
## Tables
define( "DB_TBL_GENRE", "genre" );
define( "DB_TBL_MOVIE", "movie" );
define( "DB_TBL_COMPANY", "company" );
define( "DB_TBL_COLLECTION", "collection" );


define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );

# Classes
require( CLASS_PATH . "/movie.php" );
require( CLASS_PATH . "/genre.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
