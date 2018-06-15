<?php

/**
 * Class to handle movies
 */

class Movie
{
  // Properties
	/**
	"adult": false,
	"backdrop_path": "/wSnMlhSWIZ7JQYkHq168hK9R8Lh.jpg",
	"belongs_to_collection": {},
	"budget": 50000000,
	"genres": [],
	"homepage": "http://www.sonypictures.com/movies/underworldawakening/",
	"id": 834,
	"imdb_id": "tt0401855",
	"original_language": "en",
	"original_title": "Underworld: Evolution",
	"overview": "Nachdem Selene den Vampir-Ältesten Viktor getötet hat, schwebt sie selbst in Lebensgefahr. Auch bei Vampir-König Marcus findet die Blutsaugerin keinen Schutz, und so begibt sie sich gemeinsam mit dem Hybriden Michael, halb Werwolf, halb Vampir, auf die Flucht.",
	"popularity": 17.308128,
	"poster_path": "/415kuTWKZmMdWjMqqX8qI7RCsmV.jpg",
	"production_companies": [],
	"production_countries": [],
	"release_date": "2006-01-12",
	"revenue": 111340801,
	"runtime": 106,
	"spoken_languages": [],
	"status": "Released",
	"tagline": "",
	"title": "Underworld: Evolution",
	"video": false,
	"vote_average": 6.4,
	"vote_count": 1925,
	"videos": {},
	"images": {},
	"credits": {},
	"keywords": {}
	*/

  public $id = null;											#int
  public $imdb_id = null;									#str
  public $title = null;										#str
  public $tagline = null;									#str
  public $adult = null; 									#bool
  public $poster_path = null;							#str
  public $backdrop_path = null;						#str
  public $budget = null;									#int
  public $homepage = null;								#str
  public $original_language = null;				#str
  public $original_title = null;					#str
  public $overview = null;								#str
  public $popularity = null;							#float
  public $release_date = null;						#str
  public $revenue = null;									#int
  public $runtime = null;									#int
  public $status = null;									#str
  public $video = null;										#bool
  public $vote_average = null;						#float
  public $vote_count = null;							#int
  public $belongs_to_collection = null;		#obj
  public $genres = null;									#array
  public $production_companies = null;		#array
  public $production_countries = null;		#array
  public $spoken_languages = null;				#array
  public $videos = null;									#array
  public $images = null;									#array
  public $credits = null;									#array
  public $keywords = null;								#array


  /**
  * Sets the object's properties using the values in the supplied array
  *
  * @param assoc The property values
  */

  public function __construct( $data=array() ) {
    if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
		if ( isset( $data['imdb_id'] ) ) $this->imdb_id = $data['imdb_id'];
		if ( isset( $data['title'] ) ) $this->title = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['title'];
		if ( isset( $data['tagline'] ) ) $this->tagline = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['tagline'];
		if ( isset( $data['adult'] ) ) $this->adult = $data['adult'];
		if ( isset( $data['poster_path'] ) ) $this->poster_path = $data['poster_path'];
		if ( isset( $data['backdrop_path'] ) ) $this->backdrop_path = $data['backdrop_path'];
		if ( isset( $data['budget'] ) ) $this->budget = (int) $data['budget'];
		if ( isset( $data['homepage'] ) ) $this->homepage = $data['homepage'];
		if ( isset( $data['original_language'] ) ) $this->original_language = $data['original_language'];
		if ( isset( $data['original_title '] ) ) $this->original_title = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['original_title '];
		if ( isset( $data['overview'] ) ) $this->overview = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['overview'];
		if ( isset( $data['popularity'] ) ) $this->popularity = $data['popularity'];
		if ( isset( $data['release_date'] ) ) $this->release_date = $data['release_date'];
		if ( isset( $data['revenue'] ) ) $this->revenue = $data['revenue'];
		if ( isset( $data['runtime'] ) ) $this->runtime = (int) $data['runtime'];
		if ( isset( $data['status'] ) ) $this->status = $data['status'];
		if ( isset( $data['video'] ) ) $this->video = $data['video'];
		if ( isset( $data['vote_average'] ) ) $this->vote_average = $data['vote_average'];
		if ( isset( $data['vote_count'] ) ) $this->vote_count = (int) $data['vote_count'];

		if ( isset( $data['belongs_to_collection'] ) ) $this->belongs_to_collection = $data['belongs_to_collection'];
		if ( isset( $data['genres'] ) ) $this->genres = $data['genres'];
		if ( isset( $data['production_companies'] ) ) $this->production_companies = $data['production_companies'];
		if ( isset( $data['production_countries'] ) ) $this->production_countries = $data['production_countries'];
		if ( isset( $data['spoken_languages'] ) ) $this->spoken_languages = $data['spoken_languages'];
		if ( isset( $data['videos'] ) ) $this->videos = $data['videos'];
		if ( isset( $data['images'] ) ) $this->images = $data['images'];
		if ( isset( $data['credits'] ) ) $this->credits = $data['credits'];
		if ( isset( $data['keyword'] ) ) $this->keyword = $data['keyword'];
  }
 
 
  /**
  * Sets the object's properties using the edit form post values in the supplied array
  *
  * @param assoc The form post values
  */
 
  public function storeFormValues ( $params ) {
 
    // Store all the parameters
    $this->__construct( $params );
 
    // Parse and store the publication date
    if ( isset($params['publicationDate']) ) {
      $publicationDate = explode ( '-', $params['publicationDate'] );
 
      if ( count($publicationDate) == 3 ) {
        list ( $y, $m, $d ) = $publicationDate;
        $this->publicationDate = mktime ( 0, 0, 0, $m, $d, $y );
      }
    }
  }
 
 
  /**
  * Returns an Article object matching the given article ID
  *
  * @param int The article ID
  * @return Article|false The article object, or false if the record was not found or there was a problem
  */
 
  public static function getById( $id ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT *, UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM articles WHERE id = :id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":id", $id, PDO::PARAM_INT );
    $st->execute();
    $row = $st->fetch();
    $conn = null;
    if ( $row ) return new Article( $row );
  }
 
 
  /**
  * Returns all (or a range of) Article objects in the DB
  *
  * @param int Optional The number of rows to return (default=all)
  * @param int Optional Return just articles in the category with this ID
  * @param string Optional column by which to order the articles (default="publicationDate DESC")
  * @return Array|false A two-element array : results => array, a list of Article objects; totalRows => Total number of articles
  */
 
  public static function getList( $numRows=1000000, $categoryId=null, $order="publicationDate DESC" ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $categoryClause = $categoryId ? "WHERE categoryId = :categoryId" : "";
    $sql = "SELECT SQL_CALC_FOUND_ROWS *, UNIX_TIMESTAMP(publicationDate) AS publicationDate
            FROM articles $categoryClause
            ORDER BY " . mysql_escape_string($order) . " LIMIT :numRows";
 
    $st = $conn->prepare( $sql );
    $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
    if ( $categoryId ) $st->bindValue( ":categoryId", $categoryId, PDO::PARAM_INT );
    $st->execute();
    $list = array();
 
    while ( $row = $st->fetch() ) {
      $article = new Article( $row );
      $list[] = $article;
    }
 
    // Now get the total number of articles that matched the criteria
    $sql = "SELECT FOUND_ROWS() AS totalRows";
    $totalRows = $conn->query( $sql )->fetch();
    $conn = null;
    return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
  }
 
 
  /**
  * Inserts the current Article object into the database, and sets its ID property.
  */
 
  public function insert() {
 
    // Does the Article object already have an ID?
    if ( !is_null( $this->id ) ) trigger_error ( "Article::insert(): Attempt to insert an Article object that already has its ID property set (to $this->id).", E_USER_ERROR );
 
    // Insert the Article
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "INSERT INTO articles ( publicationDate, categoryId, title, summary, content ) VALUES ( FROM_UNIXTIME(:publicationDate), :categoryId, :title, :summary, :content )";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":publicationDate", $this->publicationDate, PDO::PARAM_INT );
    $st->bindValue( ":categoryId", $this->categoryId, PDO::PARAM_INT );
    $st->bindValue( ":title", $this->title, PDO::PARAM_STR );
    $st->bindValue( ":summary", $this->summary, PDO::PARAM_STR );
    $st->bindValue( ":content", $this->content, PDO::PARAM_STR );
    $st->execute();
    $this->id = $conn->lastInsertId();
    $conn = null;
  }
 
 
  /**
  * Updates the current Article object in the database.
  */
 
  public function update() {
 
    // Does the Article object have an ID?
    if ( is_null( $this->id ) ) trigger_error ( "Article::update(): Attempt to update an Article object that does not have its ID property set.", E_USER_ERROR );
    
    // Update the Article
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "UPDATE articles SET publicationDate=FROM_UNIXTIME(:publicationDate), categoryId=:categoryId, title=:title, summary=:summary, content=:content WHERE id = :id";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":publicationDate", $this->publicationDate, PDO::PARAM_INT );
    $st->bindValue( ":categoryId", $this->categoryId, PDO::PARAM_INT );
    $st->bindValue( ":title", $this->title, PDO::PARAM_STR );
    $st->bindValue( ":summary", $this->summary, PDO::PARAM_STR );
    $st->bindValue( ":content", $this->content, PDO::PARAM_STR );
    $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
  }
 
 
  /**
  * Deletes the current Article object from the database.
  */
 
  public function delete() {
 
    // Does the Article object have an ID?
    if ( is_null( $this->id ) ) trigger_error ( "Article::delete(): Attempt to delete an Article object that does not have its ID property set.", E_USER_ERROR );
 
    // Delete the Article
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare ( "DELETE FROM articles WHERE id = :id LIMIT 1" );
    $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
  }
 
}
 
?>