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
echo "<h1>Connected successfully</h1>";

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"]. " " . $row["quantity"]. " " .$row["eco"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>