<?php
class Database {
    private const host = 'localhost';
    private const username = 'root';
    private const password =  '';
    private const db = 'database-01';
    private $dsn = "mysql:host=". self::host . "; dbname=" . self::db;
    protected $connection = null;
    public function __construct() {
        try{
            $this->connection = new PDO($this->dsn, self::username, self::password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage() . $e->getLine();
            die();
        }
        echo "connection:" . self::db . " is okey \n";
    }
}
