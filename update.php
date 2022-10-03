<head>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<h1>Update Table</h1>
<?php include "navigation.php"?>
    <form action="update_table.php" method="POST">
        <label for="id">Id*: </label>
        <input type="text" name="id">
        <br>
        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>
        <label for="lname">Lastname: </label>
        <input type="text" name="lname">
        <br>
        <label for="telephone">Telephone: </label>
        <input type="text" name="telephone">
        <br>
        <label for="email">Email: </label>
        <input type="text" name="email">
        <br>
        <label for="address">Address: </label>
        <input type="text" name="address">
        <br><br>
        <input type="submit">
    </form>
<?php

//config
$server = "localhost";
$user = "root";
$password = ""; 
$database = "sample_db";

//Establishing a connection to MYSQL server.
$connection = mysqli_connect($server,$user,$password, $database);

    
//Sql command
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