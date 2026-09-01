<?php
class Connection {

    // details
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "grooming_db";
    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
}
?>