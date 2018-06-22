<?php

require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
  case 'archive':
    archive();
    break;
  case 'viewAllMovies':
    viewAllMovies();
    break;
  default:
    homepage();
}

function archive() {
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Article Archive | Widget News";
  require( TEMPLATE_PATH . "/archive.php" );
}

function viewArticle() {
  if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
    homepage();
    return;
  }

  $results = array();
  $results['article'] = Article::getById( (int)$_GET["articleId"] );
  $results['pageTitle'] = $results['article']->title . " | Widget News";
  require( TEMPLATE_PATH . "/viewArticle.php" );
}

function viewAllMovies() {
  $results = array();
  $data = Movie::getList(50);
  $results['movies'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Alle Filme";

  switch ( $_GET['view'] ) {
    case 'list':
      require( TEMPLATE_PATH . "/allMoviesList.php" );
      break;
    default:
      require( TEMPLATE_PATH . "/allMoviesWall.php" );
  }

}

function homepage() {
  $results = array();
  $data = Movie::getList( HOMEPAGE_NUM_MOVIES );
  $results['movies'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Widget News";
  require( TEMPLATE_PATH . "/homepage.php" );
}

?>
