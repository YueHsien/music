<!DOCTYPE HTML>
<!--
	Epilogue by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>

<title>Epilogue by TEMPLATED</title>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body align="center">
<body>

        HTML5 audio not supported
	   <form action="test.php" method="post" enctype="multipart/form-data">  
    <input type="file" name="file" id="file" /> 
    <input type="submit" name="submit" value="submit" />
    </form>
<?php
if (isset($_FILES["file"]["name"])) {
	if ($_FILES["file"]["error"] > 0){
	echo "";
	}else{
		$string="upload/".$_FILES["file"]["name"];
		echo "檔案名稱: " . $string."<br/>";
		echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
		echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
		echo "暫存名稱: " . $_FILES["file"]["tmp_name"];
		$string2=iconv( "UTF-8","big5" ,$string);
		move_uploaded_file($_FILES["file"]["tmp_name"],$string2);
	}
}
?>
</body>
</html>
