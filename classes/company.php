<?php

class Company {

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
    	if ( isset( $data['name'] ) ) $this->name = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['name'];
	}


	/**
	* Returns an companies object matching the given companies ID
	*
	* @param int The companies ID
	* @return companies|false The companies object, or false if the record was not found or there was a problem
	*/

	public static function getById( $id ) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SELECT * FROM :table WHERE id = :id";
		$st = $conn->prepare( $sql );
		$st->bindValue( ":table", DB_TBL_companies, PDO::PARAM_STR );
		$st->bindValue( ":id", $id, PDO::PARAM_INT );
		$st->execute();
		$row = $st->fetch();
		$conn = null;
		if ( $row ) return new companies( $row );
	}
 
 
	/**
	* Returns all companies objects in the DB
	*
	* @param string Optional column by which to order the companies (default="name")
	* @return Array|false A two-element array : results => array, a list of companies objects; totalRows => Total number of articles
	*/

	public static function getList( $order="name DESC" ) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SELECT SQL_CALC_FOUND_ROWS *
		        FROM :table
		        ORDER BY " . mysql_escape_string($order);

		$st = $conn->prepare( $sql );
		$st->bindValue( ":table", DB_TBL_companies, PDO::PARAM_STR );
		$st->execute();
		$list = array();

		while ( $row = $st->fetch() ) {
			$article = new Article( $row );
			$list[] = $article;
		}

		// Now get the total number of companiess that matched the criteria
		$sql = "SELECT FOUND_ROWS() AS totalRows";
		$totalRows = $conn->query( $sql )->fetch();
		$conn = null;
		return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
	}


	/**
	* Inserts the current companies object into the database, and sets its ID property.
	*/

	public function insert() {

		// Does the companies object already have an ID?
		if ( !is_null( $this->id ) ) trigger_error ( "companies::insert(): Attempt to insert an companies object that already has its ID property set (to $this->id).", E_USER_ERROR );

		// Insert the companies
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "INSERT INTO :table ( id, name ) VALUES ( :id, :name )";
		$st = $conn->prepare ( $sql );
		$st->bindValue( ":table", DB_TBL_companies, PDO::PARAM_STR );
		$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
		$st->bindValue( ":name", $this->name, PDO::PARAM_STR );
		$st->execute();
		$this->id = $conn->lastInsertId();
		$conn = null;
	}


	/**
	* Updates the current companies object in the database.
	*/

	public function update() {

		// Does the companies object have an ID?
		if ( is_null( $this->id ) ) trigger_error ( "companies::update(): Attempt to update an companies object that does not have its ID property set.", E_USER_ERROR );

		// Update the companies
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "UPDATE :table SET name=:name WHERE id = :id";
		$st = $conn->prepare ( $sql );
		$st->bindValue( ":table", DB_TBL_companies, PDO::PARAM_STR );
		$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
		$st->bindValue( ":name", $this->name, PDO::PARAM_STR );
		$st->execute();
		$conn = null;
	}


	/**
	* Deletes the current companies object from the database.
	*/

	public function delete() {

		// Does the companies object have an ID?
		if ( is_null( $this->id ) ) trigger_error ( "companies::delete(): Attempt to delete an companies object that does not have its ID property set.", E_USER_ERROR );

		// Delete the Article
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$st = $conn->prepare ( "DELETE FROM :table WHERE id = :id LIMIT 1" );
		$st->bindValue( ":table", DB_TBL_companies, PDO::PARAM_STR );
		$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
		$st->execute();
		$conn = null;
	}

}

?>