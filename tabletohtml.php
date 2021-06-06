<DOCTYPE html>
<html>
<head>
    <title>Tabla de la Comida</title>

    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th {
            background-color: #d96459;
            color:white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}                              
        }


    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Nombre del producto</th>
            <th>Cantidad del producto</th>
            <th>Ecológico</th>
            <th>Incrementar Valor</th>
            <th>Decrementar Valor</th>
        </tr>
    </thead>
        <tbody>
    <?php 
    $servername = "localhost";
    $username = "id15145758_admin";
    $password = 'GNDVc0$sT0g<MuVC';
    $database = "id15145758_restaurantelasmarinas";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform query
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    // Render results
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['name'] ?> </td>
                <td id="Q<?php echo $row['id'] ?>"><?php echo $row['quantity'] ?> </td>
                <td><?php echo $row['eco'] ?> </td>
                <!-- Generar boton de inc y dec (sql UPDATE) -->
                <td><button type="button" onclick="increment(<?php echo $row['id'] ?>)" style="margin-left: 95px;">INC</button></td>
                <td><button type="button" onclick="decrement(<?php echo $row['id'] ?>)" style="margin-left: 95px;">DEC</button></td>
            </tr>
            <?php
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>
    <script>
        function increment(id) {
            console.log("INC");
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("Q"+id).innerHTML = this.responseText;
                }
            }

            xhttp.open("GET", "increment.php?id=" + id, true);
            xhttp.send();
        }

        function decrement(id) {
            console.log("DEC");
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("Q"+id).innerHTML = this.responseText;
                }
            }

            xhttp.open("GET", "decrement.php?id=" + id, true);
            xhttp.send();
        }
    </script>
</tbody>
</table>
</body>
</html>