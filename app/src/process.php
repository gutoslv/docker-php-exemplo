<?php
include 'database.php';

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$department = $_POST['department'];
$email = $_POST['email'];

$statement = $conn->prepare("INSERT INTO employees(first_name, last_name, department, email)
    VALUES(:fname, :lname, :department, :email)");
$statement->execute(array(
    "fname" => $firstname,
    "lname" => $lastname,
    "department" => $department,
    "email" => $email
));

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