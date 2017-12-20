<?php
SESSION_start();
$_SESSION['status']=0;
$dbaddr = "acts.cl7lb3l0h8d5.eu-central-1.rds.amazonaws.com"
$dbuser = ""
$dbpass = ""

function var_clean($var){
	$var=strip_tags($var);
	$var=htmlspecialchars($var);
	return $var;
}

//Variable
	$nameConv=$_POST['user'];
	$passConv=$_POST['pass'];
	$nameConv=var_clean($nameConv);
	$passConv=var_clean($passConv);
	$default="ACTSwiffle";

$pletter = str_split($nameConv);
foreach($pletter as $letter)
	{
		$nameChar=$nameChar . ord($letter);
	}
$UniekId= $nameChar . $default . $passConv;
$SaltHash=md5($UniekId);
$mysql = mysql_connect($dbaddr,$dbuser, $dbpassword) or die("Connection could not be established!");
mysql_select_db("acts_maria",$mysql) or die("Connection failed");

$check= mysql_query("SELECT password FROM password WHERE password='$SaltHash' AND userid=(SELECT userid FROM fysio WHERE fysioid ='$nameConv')");
$check= mysql_fetch_row($check);
if($check[0]!=$SaltHash)
	{
		$_SESSION['error_msg']=("Authentication failed");
		header("Location: 404.html");
	}
	else
	{
		$admin =mysql_query("SELECT admin FROM user WHERE userid=(SELECT userid FROM user WHERE username ='$nameConv')");
		$rolN = mysql_result($rol, 0);

		if($rolN==0)
			{
				$_SESSION['status']=1;
			}
		elseif($rolN==1)
			{
				$_SESSION['status']=2;
			}
		else
			{
				$_SESSION['error_msg']=('Error: 3, unknown users state.');
				header("Location: login.php");
			}
		if($rolN==1 || $rolN==2 || $rolN==3)
			{
				$check= mysql_query("SELECT username FROM Fysio WHERE fysioid =(SELECT fysioid FROM Fysio WHERE name ='$nameConv')");
				$_SESSION['user']=$nameConv;
				$_SESSION['user_name']=$name_geb;
				header("Location: index.php");
			}
	}
mysql_close($mysql) or die("Disconect Failure");
?>
