<head>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<h1>Delete Field</h1>
<?php include "navigation.php" ?>

    <form action="delete_from_table.php" method="POST">
        <label for="id">Enter the ID you want to delete.</label><br><br>
        <input type="text" name="id"><br><br>
        <input type="submit">
    </form>


<?php include "report.php" ?>

<br><br>
<p>Warning ! This action could wipe out entire table data</p>
<a href="truncate_table.php">Delete Table Data</a>


</body>