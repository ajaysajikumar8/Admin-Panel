<head>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php
include "navigation.php";
//config
$server = "localhost";
$user = "root";
$password = ""; 
$database = "sample_db";

//Establishing a connection to MYSQL server.
$connection = mysqli_connect($server,$user,$password, $database);


// Gathering data from html form
$id = $_POST['id'];
$name = $_POST['name'];
$lname = $_POST['lname'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$address = $_POST['address'];

//Sql command
$sql_command = "UPDATE person SET
name = '$name',
lastname = '$lname',
telephone = '$telephone',
email = '$email',
address = '$address'
WHERE id = '$id'
";

if (mysqli_query($connection, $sql_command)){
    echo "SQL COMMAND OK ! <br><br>";
}else{
    echo "SQL Error". mysqli_error($connection);
}

include "report.php"  
?>


</body>