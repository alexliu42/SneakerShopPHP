<?php
define('DBHOST', 'localhost');
define('DBNAME', 'freshkicks');
define('DBUSER', 'root');
define('DBPASS', '');


$mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

  
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  
    $sql = "SELECT `Name` FROM `shoes` "; 
    
  
    if ($result = $mysqli->query($sql)) {
    
        $result = $mysqli->query($sql);

        foreach($result as $row) {
            
            echo "<option>";
            echo json_encode($row["Name"]);
            echo "</option>";
        }
    }
}
?>




