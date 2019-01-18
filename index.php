<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>index.php</title>
</head>
<body align="center">
<?php 
if ( $_SESSION["login_session"] = true ){
	if (isset ( $_GET ["nickname"] ))
		$name = $_GET ["nickname"];
		$id=$_SESSION["login_session"];
	echo "<div align='center'><font size='5'>$name</font>";
	echo "<font size='5'>會員您好，祝您有快樂的一天，即將回到主頁面!!</font></div>";
	header("Refresh: 3; url=memberpage.php");
}
?>
</body>
</html>
