<?php

class Genre {

	// Properties
	public $id = null;
	public $name = null;


	/**
	* Sets the object's properties using the values in the supplied array
	*
	* @param assoc The property values
	*/

	public function __construct( $data=array() ) {
    	if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
    	if ( isset( $data['name'] ) ) $this->name = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['name']);
	}


	/**
	* Returns an Genre object matching the given genre ID
	*
	* @param int The genre ID
	* @return Genre|false The genre object, or false if the record was not found or there was a problem
	*/

	public static function getById( $id ) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SELECT * FROM :table WHERE id = :id";
		$st = $conn->prepare( $sql );
		$st->bindValue( ":table", DB_TBL_GENRE, PDO::PARAM_STR );
		$st->bindValue( ":id", $id, PDO::PARAM_INT );
		$st->execute();
		$row = $st->fetch();
		$conn = null;
		if ( $row ) return new Genre( $row );
	}


	/**
	* Returns all Genre objects in the DB
	*
	* @param string Optional column by which to order the genre (default="name ASC")
	* @return Array|false A two-element array : results => array, a list of Genre objects; totalRows => Total number of articles
	*/

	public static function getList( $order="name ASC" ) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SELECT SQL_CALC_FOUND_ROWS *
		        FROM genre
		        ORDER BY " . $order;

		$st = $conn->prepare( $sql );
		$st->execute();
		$list = array();

		while ( $row = $st->fetch() ) {
			$genre = new Genre( $row );
			$list[] = $genre;
		}

		// Now get the total number of genres that matched the criteria
		$sql = "SELECT FOUND_ROWS() AS totalRows";
		$totalRows = $conn->query( $sql )->fetch();
		$conn = null;
		return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
	}


	/**
	* Inserts the current genre object into the database, and sets its ID property.
	*/

	public function insert() {

		// Does the Genre object already have an ID?
		if ( !is_null( $this->id ) ) trigger_error ( "Genre::insert(): Attempt to insert an Genre object that already has its ID property set (to $this->id).", E_USER_ERROR );

		// Insert the Genre
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "INSERT INTO :table ( id, name ) VALUES ( :id, :name )";
		$st = $conn->prepare ( $sql );
		$st->bindValue( ":table", DB_TBL_GENRE, PDO::PARAM_STR );
		$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
		$st->bindValue( ":name", $this->name, PDO::PARAM_STR );
		$st->execute();
		$this->id = $conn->lastInsertId();
		$conn = null;
	}


	/**
	* Updates the current genre object in the database.
	*/

	public function update() {

		// Does the Genre object have an ID?
		if ( is_null( $this->id ) ) trigger_error ( "Genre::update(): Attempt to update an Genre object that does not have its ID property set.", E_USER_ERROR );

		// Update the Genre
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "UPDATE :table SET name=:name WHERE id = :id";
		$st = $conn->prepare ( $sql );
		$st->bindValue( ":table", DB_TBL_GENRE, PDO::PARAM_STR );
		$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
		$st->bindValue( ":name", $this->name, PDO::PARAM_STR );
		$st->execute();
		$conn = null;
	}


	/**
	* Deletes the current Genre object from the database.
	*/

	public function delete() {

		// Does the Genre object have an ID?
		if ( is_null( $this->id ) ) trigger_error ( "Genre::delete(): Attempt to delete an Genre object that does not have its ID property set.", E_USER_ERROR );

		// Delete the Article
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$st = $conn->prepare ( "DELETE FROM :table WHERE id = :id LIMIT 1" );
		$st->bindValue( ":table", DB_TBL_GENRE, PDO::PARAM_STR );
		$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
		$st->execute();
		$conn = null;
	}

}

?>
