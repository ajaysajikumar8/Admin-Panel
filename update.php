<head>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <form action="update.php" method="POST">
        <label for="query">Enter the Query you want to run !</label><br><br>
        <input type="text" name="query"><br><br>
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

//Check connection
if ($connection){
    echo "Connection successful ! <br>";
}
    
//Sql command
$sql_command = $_POST["query"];

if (mysqli_query($connection, $sql_command)){
    echo "SQL COMMAND OK ! <br><br>";
}else{
    echo "SQL Error". mysqli_error($connection);
}

  
?>

<a href="index.php">Back to Homepage...</a>

</body>