<?php
/**
 * Handles user intercations with the app
 * 
 * PHP version 5
 *
 * @author T M
 */
class ColoredListsUsers
{
  /**
   * The database object
   *
   * @var object
   */
  private $_db;

  /**
   * Checks for a database object and creates one if none if found
   *
   * @param object $db
   * @return void
   */
  public function __construct($db=NULL)
  {
  	if(is_object($db))
  	{
  	  $this->_db = $db;
  	}
  	else
  	{
  	  $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
  	  $this->_db = new POD($dsn, DB_USER, DB_PASS);
  	}
  }
}

?>