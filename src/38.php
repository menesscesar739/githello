<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
  die("连接失败: " . $conn->connect_error);
}

echo "数据库连接成功！";

// 假设你有一个名为"table_name"的表
$sql = "SELECT * FROM table_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 输出数据
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. ", name: " . $row["name"]. "</br>";
  }
} else {
  echo "没有找到任何记录";
}

$conn->close();
?>
