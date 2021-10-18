<h1>Lista de todos os employeers</h1>
<?php
$db = pg_connect("host=postgres port=5432 dbname=db user=dev password=secret");
$result = pg_query($db,"SELECT * FROM employees");
echo "<table>";
while($row=pg_fetch_assoc($result))
{echo "<tr>";
     echo "<td align='center' width='200'>" . $row['first_name'] . "</td>";
     echo "<td align='center' width='200'>" . $row['last_name'] . "</td>";
     echo "<td align='center' width='200'>" . $row['department'] . "</td>";
     echo "<td align='center' width='200'>" . $row['email'] . "</td>";
     echo "</tr>";
}
echo "</table>";

?>
