<!DOCTYPE HTML>
<!--
	Epilogue by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
<style type="text/css">
.bg3 {
	width: 100%;
	height: 1000px;
	background-image:url('http://www.khjh.kh.edu.tw/mewawa/dw4/bg1-a/images/back4-9_jpg.gif');
	background-repeat: no-repeat;
	background-size: cover;
	word-break: break-all;
}
</style>
</head>
<body align="center">
<body>
<div>
<?php
require_once ("mycontacts_open.inc");
$id = $_GET["id"];
$sql="SELECT * FROM total WHERE 音樂編號=".$id;
$result = mysqli_query($link, $sql);
while ($row=mysqli_fetch_array($result,MYSQLI_NUM)){
	// 	echo $row[2]."<br/>";
	$row[6]++;
	$number=$row[6];
	echo "<embed src='$row[2]' autostart='true' loop='1' volume='100' width='100%' height='40%'></embed>";
	?>
</div>
<div class="bg3" align="left">
	<font face='DFKai-sb' color='#000000'><div class ='bg3'><font size='5' >作者:<?php echo $row[4]?></font>
	<br>
	<font face='DFKai-sb' size='5'color='#000000' style="word-wrap:break-word;">歌詞:<?php echo $row[5]?></font>
<?php 
	$sql2 = "UPDATE total SET click=" . $number . " WHERE 音樂編號=".$id."";
	$result2 = mysqli_query($link, $sql2);
}
?>
</div>
<?php

// 建立SQL字串
// 建立SQL字串

require_once ("mycontacts_close.inc");
?>
</body>
</html>
