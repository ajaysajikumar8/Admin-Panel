<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Insert New Field</h1>
    <?php include "navigation.php" ?>

    <form action="data_insert.php" method="POST">
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
        include "report.php";
    ?>

</body>