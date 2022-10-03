<head>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <form action="delete_by_id.php" method="POST">
        <label for="id">Enter the ID you want to delete.</label><br><br>
        <input type="text" name="id"><br><br>
        <input type="submit">
    </form>
<?php
$id = $_POST["id"];

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
$sql_command = "DELETE FROM person WHERE id = $id";      

if (mysqli_query($connection, $sql_command)){
    echo "SQL COMMAND OK ! <br><br>";
}else{
    echo "SQL Error". mysqli_error($connection);
}

  
?>

<a href="index.php">Homepage/Report</a>

</body>