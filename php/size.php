<?php
define('DBHOST', 'localhost');
define('DBNAME', 'freshkicks');
define('DBUSER', 'root');
define('DBPASS', '');


$mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
$shoes = $_POST['shoes'];
    
  
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  
    $sql = "SELECT `Size`,`Price`  FROM `shoes` WHERE `Name` = $shoes"; 
    
    if ($result = $mysqli->query($sql)) {
    
        $result = $mysqli->query($sql);

        foreach($result as $row) {
            
            echo json_encode($row);
;
            
        }
    }
}
?>




