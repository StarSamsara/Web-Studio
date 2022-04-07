<?php

$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "haha";

//创建连接
$con = new mysqli($servername,$username,$password,$dbname);

//检测连接
if($con->connect_error){
	die("wo si le:".$con->connect_error);
}else{
echo "connect successfully";
}
//查
$sql = "SELECT * FROM haha WHERE id='1"' LIMIT 0,1";

//执行sql语句并且结果返回到$result
$result = $con->query($sql);

//判断一下result里是否有数据
if($result->num_rows>0){
	//把$result里的数据一条一条给$row
	while($row=$result->fetch_assoc()){
		echo $row['username'].'-----'.$row['password'].'<br/>';
	}
}


/*
//增
$sql = "INSERT INTO table1(id,username,password) VALUES(21,'test1','ttttttt')";

if($con->query($sql)===TRUE){
	echo '执行成功！！！！';
}else{
	echo '执行失败xxxx'.$con->error;
}
*/

/*
//改
$sql = "UPDATE table1 SET password='niubi' WHERE username='xiaohong'";

if($con->query($sql)===TRUE){
	echo '执行成功！！！！';
}else{
	echo '执行失败xxxx'.$con->error;
}
*/

/*
//删
$sql = "DELETE FROM table1 WHERE id=21";
if($con->query($sql)===TRUE){
	echo '执行成功！！！！';
}else{
	echo '执行失败xxxx'.$con->error;
}
*/
//断开数据库连接
$con->close();

?>