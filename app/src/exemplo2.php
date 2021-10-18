<?php
include 'database.php';
$stmt = $conn->query("SELECT * FROM employees");

echo "<h1>Lista de todos os employeers</h1>"; 
echo "<table>";
while ($row = $stmt->fetch()) {
  echo "<tr>";
     echo "<td align='center' width='200'>" . $row['first_name'] . "</td>";
     echo "<td align='center' width='200'>" . $row['last_name'] . "</td>";
     echo "<td align='center' width='200'>" . $row['department'] . "</td>";
     echo "<td align='center' width='200'>" . $row['email'] . "</td>";
  echo "</tr>";}
  echo "</table>";
?>