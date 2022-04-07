<!DOCTYPE HTML>
<html>
 <head>
  <title> 面对对象 </title>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
 </head>

 <body>
<?php
$lhost="localhost";
$uname="root";
$passwd="rootroot";
$dbname="haha";

//创建连接
$conn = new mysqli($lhost,$uname,$passwd,$dbname);

//检测连接
if ($conn->connect_error){
	die("连接失败:".$conn->connect_error).".<br>";
}else{
	echo "连接成功.<br>";
}

// 创建数据库
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功.<br>";
} else {
    echo "Error creating database: " . $conn->error.".<br>";
}


// 使用 sql 创建数据表
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
 
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully.<br>";
} else {
    echo "创建数据表错误: " . $conn->error.".<br>";
}


// 预处理及绑定
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);
//"sss"代表数据类型为字符串


// 设置参数并执行
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();
 
$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();
 
$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "新记录插入成功.<br>";


// 输出数据
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 结果.<br>";
}






//断开连接
$stmt->close();
$conn->close();
?>
<br>
<?php show_source(__FILE__);?>
 </body>
</html>






