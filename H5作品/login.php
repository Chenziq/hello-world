<?php
	header("Content-Type:text/html;charset=utf8");
	$_user=$_POST['name'];
	$_age=$_POST['password'];
	@mysql_connect('127.0.0.1','zjwdb_6271079','Abc199607010') or die('数据库连接失败'.mysql_error());
	mysql_select_db('zjwdb_6271079');
	mysql_query('SET NAMES UTF8');
	$check_query=mysql_query("select * from user where username='$_user' and age='$_age' limit 1");
	if(mysql_fetch_array($check_query)){
		setcookie('username',$_user);
		header("location:index.php");
	}else{
		header("refresh:5;url=login.html");
		print('用户名或者密码有误，请重新登录！<br>5秒后跳转到登录页面。');
	}
?>