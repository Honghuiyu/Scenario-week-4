<?php
//链接数据库服务器
// echo (!!@mysql_connect("localhost","root","harry63779588"));
$connect=mysql_connect("localhost","root","harry63779588");
mysql_select_db("Scenario4", $connect) or die('数据库连接错误，错误信息：'.mysql_error()); //链接到Scenario4数据库
// $query1="INSERT INTO userinfo (Username, Password) VALUES ('allen','123')";

// $result=mysql_query($query1) or die('sql错误'.mysql_error());

mysql_query("INSERT INTO userinfo (Username, Password) VALUES ('$_POST[user_name]','$_POST[password]')"); //将信息添加到userinfo这个表

// $result = mysql_query("SELECT * FROM userinfo");  //显示所有数据
// while($row = mysql_fetch_array($result))
//   {
//   echo $row['Username'] . " " . $row['Password'];
//   echo "<br />";
//   }

// echo "<br />";
// echo "1 record added";
header('Location:../pages/signin.html');

mysql_close($connect);

?>