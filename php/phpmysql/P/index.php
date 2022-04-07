<!DOCTYPE HTML>
<html>
 <head>
  <title> conn </title>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
 </head>

 <body>

<?php
$lhost="localhost";
$uname="root";
$passwd="rootroot";
$dbname="haha";

//创建连接
$conn = mysqli_connect($lhost,$uname,$passwd,$dbname);

//检测连接
if (!$conn){
	die("连接失败:".mysqli_connect_error()).".<br>";
}else{
	echo "连接成功.<br>";
}

// 创建数据库
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "数据库创建成功.<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn).".<br>";
}

// 使用 sql 创建数据表
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
 
if (mysqli_query($conn, $sql)) {
    echo "数据表 MyGuests 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}
 

// 输出数据
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 结果";
}


//断开连接
mysqli_close($conn);
?>
<br>
<?php show_source(__FILE__);?>
 </body>
</html>






