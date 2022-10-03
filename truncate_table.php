<head>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php
    include "navigation.php";

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "sample_db";

    //Establishing a connection to MYSQL server.
    $connection = mysqli_connect($server, $user, $password, $database);


    //Sql command
    $sql_command = "TRUNCATE TABLE person";

    if (mysqli_query($connection, $sql_command)) {
        echo "SQL COMMAND OK ! <br><br>";
    } else {
        echo "SQL Error" . mysqli_error($connection);
    }

    include "report.php"
    ?>

</body>