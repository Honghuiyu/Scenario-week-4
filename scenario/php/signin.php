<?php
$connect=mysql_connect("localhost","root","harry63779588");
mysql_select_db("Scenario4", $connect) or die('数据库连接错误，错误信息：'.mysql_error()); //链接到Scenario4数据库



$name = $_POST["user_name"];
$pw = $_POST["password"];


// 检测用户名及密码是否正确
// $check_query = mysql_query("select Username from userinfo where username='$username' and password='$password' limit 1");
// if($result = mysql_fetch_array($check_query)){
//     //登录成功
//     $_SESSION['username'] = $username;
//     echo $username,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
//     echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
//     exit;
// } else {
//     exit('log in fail！click here to <a href="javascript:history.back(-1);">back</a> restart');
// }


if (is_correct_password($name, $pw)) {
	# redirect?
	session_start();
	$_SESSION["name"] = $name;
	header("Location: ../pages/home.html");
	die();
} else {
	header("Location: ../pages/signin.html");
}

// query database to see if user typed the right password
function is_correct_password($name, $pw) {
	$db = new PDO("mysql:dbname=Scenario4", "root", "harry63779588");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$rows = $db->query("SELECT Password FROM userinfo WHERE Username = '$name'");
	foreach ($rows as $row) {
		$correct_password = $row["Password"];
		if ($pw == $correct_password) {
			return TRUE;
		}
	}
	return FALSE;
}



?>