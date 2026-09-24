<?php
<<<<<<< HEAD
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
=======
// connect to MySQL
$server = "localhost";
$user = "root";   // Laragon user
$pass = "";       // Laragon password
$db = "pet_grooming";

$conn = new mysqli($server, $user, $pass, $db);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
>>>>>>> 4627ab515fb29804fe9888c55f2a7c17ef433952
