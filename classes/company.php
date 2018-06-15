<?php

class Company {

	// Properties
	public $id = null;				#int
	public $name = null;			#str
	public $description = null;		#str
	public $logo_path = null;		#str
	public $homepage = null;		#str
	public $headquarters = null;	#str
	public $origin_country = null;	#str
	public $parent_company = null;	#int - id of parent company


	/**
	* Sets the object's properties using the values in the supplied array
	*
	* @param assoc The property values
	*/

	public function __construct( $data=array() ) {
		if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
		if ( isset( $data['name'] ) ) $this->name = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['name'];
		if ( isset( $data['description'] ) ) $this->description = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['description'];
		if ( isset( $data['logo_path'] ) ) $this->logo_path = $data['logo_path'];
		if ( isset( $data['homepage'] ) ) $this->homepage = $data['homepage'];
		if ( isset( $data['headquarters'] ) ) $this->headquarters = $data['headquarters'];
		if ( isset( $data['origin_country'] ) ) $this->origin_country = $data['origin_country'];
		if ( isset( $data['parent_company'] ) ) $this->parent_company = $data['parent_company'];
	}


	/**
	* Returns an company object matching the given company ID
	*
	* @param int The company ID
	* @return Company|false The company object, or false if the record was not found or there was a problem
	*/

	public static function getById( $id ) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SELECT * FROM :table WHERE id = :id";
		$st = $conn->prepare( $sql );
		$st->bindValue( ":table", DB_TBL_COMPANY, PDO::PARAM_STR );
		$st->bindValue( ":id", $id, PDO::PARAM_INT );
		$st->execute();
		$row = $st->fetch();
		$conn = null;
		if ( $row ) return new company( $row );
	}
 
 
	/**
	* Returns all company objects in the DB
	*
	* @param string Optional column by which to order the company (default="name")
	* @return Array|false A two-element array : results => array, a list of company objects; totalRows => Total number of articles
	*/

	public static function getList( $order="name DESC" ) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SELECT SQL_CALC_FOUND_ROWS *
		        FROM :table
		        ORDER BY " . mysql_escape_string($order);

		$st = $conn->prepare( $sql );
		$st->bindValue( ":table", DB_TBL_COMPANY, PDO::PARAM_STR );
		$st->execute();
		$list = array();

		while ( $row = $st->fetch() ) {
			$article = new Article( $row );
			$list[] = $article;
		}

		// Now get the total number of companys that matched the criteria
		$sql = "SELECT FOUND_ROWS() AS totalRows";
		$totalRows = $conn->query( $sql )->fetch();
		$conn = null;
		return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
	}


	/**
	* Inserts the current company object into the database, and sets its ID property.
	*/

	public function insert() {

		// Does the company object already have an ID?
		if ( !is_null( $this->id ) ) trigger_error ( "Company::insert(): Attempt to insert an Company object that already has its ID property set (to $this->id).", E_USER_ERROR );

		// Insert the company
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "INSERT INTO :table ( id, name, description, logo_path, homepage, headquarters, origin_country, parent_company ) 
				VALUES ( :id, :name, :description, :logo_path, :homepage, :headquarters, :origin_country, :parent_company )";
		$st = $conn->prepare ( $sql );
		$st->bindValue( ":table", DB_TBL_COMPANY, PDO::PARAM_STR );
		$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
		$st->bindValue( ":name", $this->name, PDO::PARAM_STR );
		$st->bindValue( ":description", $this->description, PDO::PARAM_STR );
		$st->bindValue( ":logo_path", $this->logo_path, PDO::PARAM_STR );
		$st->bindValue( ":homepage", $this->homepage, PDO::PARAM_STR );
		$st->bindValue( ":headquarters", $this->headquarters, PDO::PARAM_STR );
		$st->bindValue( ":origin_country", $this->origin_country, PDO::PARAM_STR );
		$st->bindValue( ":parent_company", $this->parent_company, PDO::PARAM_INT );
		$st->execute();
		$this->id = $conn->lastInsertId();
		$conn = null;
	}


	/**
	* Updates the current company object in the database.
	*/

	public function update() {

		// Does the company object have an ID?
		if ( is_null( $this->id ) ) trigger_error ( "Company::update(): Attempt to update an Company object that does not have its ID property set.", E_USER_ERROR );

		// Update the company
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "UPDATE :table 
				SET id=:id, name=:name, description=:description, logo_path=:logo_path, homepage=:homepage, headquarters=:headquarters, origin_country=:origin_country, parent_company=:parent_company 
				WHERE id = :id";
		$st = $conn->prepare ( $sql );
		$st->bindValue( ":table", DB_TBL_COMPANY, PDO::PARAM_STR );
		$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
		$st->bindValue( ":name", $this->name, PDO::PARAM_STR );
		$st->bindValue( ":description", $this->description, PDO::PARAM_STR );
		$st->bindValue( ":logo_path", $this->logo_path, PDO::PARAM_STR );
		$st->bindValue( ":homepage", $this->homepage, PDO::PARAM_STR );
		$st->bindValue( ":headquarters", $this->headquarters, PDO::PARAM_STR );
		$st->bindValue( ":origin_country", $this->origin_country, PDO::PARAM_STR );
		$st->bindValue( ":parent_company", $this->parent_company, PDO::PARAM_INT );
		$st->execute();
		$conn = null;
	}


	/**
	* Deletes the current company object from the database.
	*/

	public function delete() {

		// Does the company object have an ID?
		if ( is_null( $this->id ) ) trigger_error ( "company::delete(): Attempt to delete an company object that does not have its ID property set.", E_USER_ERROR );

		// Delete the Article
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$st = $conn->prepare ( "DELETE FROM :table WHERE id = :id LIMIT 1" );
		$st->bindValue( ":table", DB_TBL_COMPANY, PDO::PARAM_STR );
		$st->bindValue( ":id", $this->id, PDO::PARAM_INT );
		$st->execute();
		$conn = null;
	}

}

?>