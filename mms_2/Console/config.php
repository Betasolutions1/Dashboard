<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dynamic_db";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }*/
?>

<?php
//$conn=mysqli_connect("localhost","root","");
//mysqli_select_db($conn,"dynamic_db");
?>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mms";


/*$servername = "mysql.hostinger.in";
$username = "u387619361_multi";
$password = "multi@123";
$dbname = "u387619361_multi";*/

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





?>