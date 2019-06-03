<?php
	header("Content-Type:text/html;charset=utf8");
	echo $_POST['name']."，恭喜你注册成功！"."<br>";
	echo "您注册的邮箱是：".$_POST['email']."<br>";
	echo "您注册的密码是：".$_POST['password']."<br>";
	$_user=$_POST['name'];
	$_email=$_POST['email'];
	$_age=$_POST['password'];
	@mysql_connect('127.0.0.1','zjwdb_6271079','Abc199607010') or die('数据库连接失败'.mysql_error());
	mysql_select_db('zjwdb_6271079');
	mysql_query('SET NAMES UTF8');
	mysql_query("insert into user values('$_user','$_email','$_age');");
	header("refresh:10;url=login.html");
	print('<br>10秒后跳转到登录页面~~~~~');
?>	