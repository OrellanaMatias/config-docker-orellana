<?php
require 'database.php';

$query = "SELECT * FROM users";
$result = $conn->query($query);

echo "<h1>Lista de Usuarios</h1>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Nombre de Usuario</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['username']}</td>
    </tr>";
}
echo "</table>";

$conn->close();
?>

