<head>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<?php
include "navigation.php";
$id = $_POST["id"];

//config
$server = "localhost";
$user = "root";
$password = ""; 
$database = "sample_db";

//Establishing a connection to MYSQL server.
$connection = mysqli_connect($server,$user,$password, $database);

    
//Sql command
$sql_command = "DELETE FROM person WHERE id = $id";      

if (mysqli_query($connection, $sql_command)){
    echo "SQL COMMAND OK ! <br><br>";
}else{
    echo "SQL Error". mysqli_error($connection);
}

$sql_command = "SELECT * FROM person";     
$action = mysqli_query($connection, $sql_command);

echo "<h1>Report</h1>";
echo "<table><tr>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>lastname</th>";
echo "<th>telephone</th>";
echo "<th>email</th>";
echo "<th>address</th></tr>";

while ($line = mysqli_fetch_assoc($action)){
    echo "<tr><td>" . $line["id"] . "</td>" .
    "<td>" . $line["name"] . "</td>" .
    "<td>" . $line["lastname"] . "</td>" .
    "<td>" . $line["telephone"] . "</td>" .
    "<td>" . $line["email"] . "</td>" .
    "<td>" . $line["address"] . "</td>" .
    "</tr>";
}
echo "</table>";
  
?>


</body>