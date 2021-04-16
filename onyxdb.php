
<?php

/**
 * summary
 */
class DB
{
   public $conn;
    private $user ;
    private $host;
    private $pass ;
    private $db;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db   = "onyx";
    }

    public function CONNECT()
    {
        $this->conn = @mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        return $this->conn;
    }
}

$db = new DB();
$db = $db->CONNECT();
if(!empty($_POST['jsPOST'])){
    foreach ($_POST['jsPOST'] as $value) {
        $db->query("INSERT INTO `posts`(`userId`, `id`, `title`, `body`) VALUES ('".$value['userId']."','".$value['id']."','".$value['title']."','".$value['body']."')");
    }
    echo 'helo';
//      $result = $db->query("SELECT * FROM posts");
//      if ($result->num_rows > 0) {
//   echo "<table><tr><th>ID</th><th>Name</th></tr>";
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<tr><td>".$row["userId"]."</td><td>".$row["title"]." ".$row["body"]."</td></tr>";
//   }
//   echo "</table>";
// }
    echo json_encode(["success" => ["message" => "done"]]);
}
