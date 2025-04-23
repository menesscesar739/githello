<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mytable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1'>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
    </tr>";
  
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "</tr>";
  }
  
  echo "</table>";
} else {
  echo "0 rows found";
}

$conn->close();
?>
