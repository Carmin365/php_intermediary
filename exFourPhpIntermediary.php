<?php
$servername = "your_server";
$username = "your_user";
$password = "your_password";
$dbname = "your_database";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conection failed: " . $conn->connect_error);
}

// Executa uma consulta
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibe os resultados
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

