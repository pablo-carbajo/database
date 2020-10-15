<?php
    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = 'comidaRestaurante';

    // verificar la conexión
    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error)
    {
        die("Connection failed: " . $connection->connect_error);
    }
                                                   

    // recuperar el id
    $id= $_GET['id'];

    // update quantity in db
    $sql = "UPDATE productos SET quantity = quantity + 1";
    $result = $connection->query($sql);

    // get new quantity
    $sql = "SELECT * FROM productos WHERE id =" . $id;
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['quantity'];
    }

    $connection->close();
?>