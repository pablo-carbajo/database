<!DOCTYPE html>
<html>
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
                                                   

    // recuperar la info del formulario
    $name= $_POST['nombre'];
    $quantity= $_POST['cantidad'];
    $eco= $_POST['eco'];
    
    //sentencia de sql

    //$sql= "INSERT INTO 'productos' ('id', 'name', 'quantity', 'eco') VALUES (NULL, 'name','12','1');";
    $sql = "INSERT INTO `productos` (`id`, `name`, `quantity`, `eco`) VALUES (NULL, '$name', '$quantity', '$eco');";
    //ejecutamos la sentencia
    try {
        $connection->query($sql);
    } catch (Exception $e) 
    {
        die("Error");
    }

    echo "Data saved correctly.";
    
?>
<br></br>
<a href="add_item_form.php">Link back to the form</a>
</html>