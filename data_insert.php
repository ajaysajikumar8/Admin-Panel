<body>
    

<?php

$name = $_POST["name"];
$lname = $_POST["lname"];
$telephone = $_POST["telephone"];
$email = $_POST["email"];
$address = $_POST["address"];

//config
$server = "localhost";
$user = "root";
$password = ""; 
$database = "sample_db";

//Establishing a connection to MYSQL server.
$connection = mysqli_connect($server,$user,$password, $database);

//Check connection
if ($connection){
    echo "Connection successful ! <br>";
}
    
//Sql command
$sql_command = "INSERT INTO person(id, name, lastname, telephone, email, address)
VALUES (NULL, '$name', '$lname', '$telephone', '$email', '$address')";     

//check sql commands
if (mysqli_query($connection, $sql_command)){
    echo "SQL Command OK ! <br><br>";
}
?>

<a href="index.php">Continue to Homepage...</a>

</body>