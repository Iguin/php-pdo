<?php

/**
 * PDO Databse connection and functions
 * 
 * @link https://github.com/Iguin/php-pdo-database
 */

class PDODatabase
{

  /**
   * @var PDO $conn database connection
   */
  private $conn;

  /**
   * @var PDOStatment $stmt database statment
   */
  private $stmt;

  /**
   * @var string $query SQL query
   */
  private $query;

  /**
   * @var array $params SQL query params
   */
  private $params = array();


  /**
   * Initializes database connection
   * 
   * @param string $dbUser database user
   * @param string $dbPass database user password
   * @param string $dbHost database host
   * @param string $dbName database name
   * @param string $dbCharset (optional) database charset. Default 'utf8'
   * @return void
   */
  public function __construct($dbUser, $dbPass, $dbHost, $dbName, $dbCharset = 'utf8', $dbOptions = array())
  {

    if (count($dbOptions) === 0) {
      $dbOptions = [
        \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_OBJ,
        \PDO::ATTR_ERRMODE             => \PDO::ERRMODE_EXCEPTION
      ];
    }

    try {
      $this->conn = new \PDO("mysql:host={$dbHost};dbname={$dbName};charset={$dbCharset}", $dbUser, $dbPass);
    } catch (\PDOException $e) {
      throw new \Exception('Database connection error. ' . $e->getMessage());
    }
  }

  /**
   * Set query
   * 
   * @param string $query
   * @return void
   */
  public function setQuery($query): void
  {
    $this->query = $query;
  }

  /**
   * Set query params
   * 
   * @param array $params
   * @return void
   */
  public function setParams($params): void
  {
    $this->params = $params;
  }

  /**
   * Bind query params
   * 
   * @return void
   */
  private function bindValues(): void
  {
    foreach ($this->params as $key => $value) {
      $this->stmt->bindValue($key, $value);
    }
  }

  /**
   * Execute query
   * 
   * @param bool $getResult (optional) Return query rows. Default is FALSE
   * @return array|bool
   */
  public function execute($getResult = false)
  {
    if(!isset($this->query)){
      throw new \Exception('Query is empty, please define it.');
    }

    $this->stmt = $this->conn->prepare($this->query);
    $this->bindValues();

    $status = $this->stmt->execute();

    return $getResult === true
      ? $this->stmt->fetchAll()
      : $status;

  }
}
