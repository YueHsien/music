<!DOCTYPE html>
<?php 
session_start();
if ($_SESSION ["login_session"] != true) {
	header ( "Location:first.php" );
}else{
	$id=$_SESSION ["id"];
}
?>
<html>
<head>
<style type="text/css">
.top_topmenu {
	background-attachment: scroll;
	background-image:
		url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgICggICAgIBwgHCAoHBwcHBw8ICQcKIBEWFhYRHxMYHSggGBolJxMTITEhJSkrLi4uFx8zODMsNygtLisBCgoKDQ0NDw0QDysZFRkrKy0rKy0tLSsrKysrKy0rKysrKystKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAMkA+wMBIgACEQEDEQH/xAAaAAEBAQADAQAAAAAAAAAAAAAAAQIDBAUG/8QAGRABAQEBAQEAAAAAAAAAAAAAAAERAnFB/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQG/8QAFhEBAQEAAAAAAAAAAAAAAAAAAAER/9oADAMBAAIRAxEAPwD68B8W+rAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARYiigAgAAAAAAAAAAAAAAAAAAAAAAAAAAADJCGCtQTV0QDQAAAAAAAAAAAAAAAAAAAAAAAAAAGYrOpo02MasojSxIsAAEAAAAAAAAAAAAAAAAAAAAAAAAcWqzFGlWIBjUrWsRoRdNZWAoAgAAAAAAAAAAAAAAAAAAAAADglXWfCazHXG9ImrGkWNsRq0ZFiasoihpogGgAAAAAAAAAAAAAAAAAAAAOtKusjOu2NwRWka1dYURpYy1yM1RQBUaolQAQAAAAAAAAAAAAAAAAAB1JRlZWI7t6srKxYjUVmVWkaWMxVxG9hsZEZajWsRRGhARQFAAABAAAAAAAAAAAAB0GozF1zemtyqxrUpNRZWpWNaistaag0jerGVisquoCNSrGY1KIoaaqAaaAGgACAAAAAAAAAADz+VYlxZXKPXY3GozKq6w0rKymo1FZGtRuKxrWkqY1FY1qVpmxoQEXWtcawGwgqCxFgACIAAAAAAAAAA8yLGVcXtb1dY1ZRnG1lY1ZVZb01lVTGmpWVVGljKrKy3pqDTOKsTQMblXWIuqlaVJ8BFEAUBEAAAAAAAAeWJFcI9wqKRFjXLMa5aZqtMqMrK0w2RFJUWKjcEixuMjUZWKiioM1qVpmNKgACgIAAgAAAAAD/2Q==');
	background-repeat: repeat-x;
	background-position: left top;
	height: 50px;
	width: auto;
}

.top_topmenu_frame {
	width: 986px;
	height: auto;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
}

.newindex_menuitem {
	padding: 0px 10px 0px 10px;
}

.newindex_menuitem2 {
	padding: 0px 10px 0px 100px;
}

.float_left {
	float: left;
}

.newindex_menu_line {
	width: 1px;
	height: 50px;
	background:
		url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ8NDQ0NFREWFhURFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAQMAwgMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQIH/8QAGhABAQEAAwEAAAAAAAAAAAAAAAERUWHwIf/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwDuAABqoCooAIoIKgKAAIAaAAAAKgAAFCgIACqIBQAURQBFAABFAAAEBQQCgqACpoAAWAAAKysAIACgAFAAAAARUUEVAAACKgACgiooJgb0AQIoIACgAiooAAAAIoAIoCAUAFBAxQQFBAACEoCooCCoBFRQAAAAEUABAFEBRFABABQEz2oYAsABUCAQUAABFAARQEUAAAAAAAAAQUEBQRUgAKACKAIoAAAAAACKAAAAACKCCgIIAoACooAAAAAAAAAAAAAICgAigAAAIoIGFBRAFAAAAAAAAAAAAAAAAAAAAABIUAFQBQAAAAAAAAAAAAAAAAABFBAAAUEVAFAAAAAAAAAAAAAAAAAABAAAAAAUARQAAAAAAAAAAAAAAAAAABMUEVNUBAAVFAAAAAAAAAAAAAAABAURQTQAAUAAEVABQAAARQAAEUARUUAAAABFAQUBAIAqKAAAAAIoAAAAAigAAAAAACKAIACVQNAoAAAKAIoAAJVAAAEVCgqKACAKhADBPqA0QAE5AFigCKAFAAAAAAiACgAigBQAQAE0AH//2Q==)
		no-repeat;
	display: block;
}

.top_language {
	color: #FFF;
	padding-top: 10px;
	padding-right: 5px;
}

.float_right {
	float: right;
}

.bg2 {
	width: 80%;
	height: 700px;
	background-image:
		url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ8b43qCEo_JaDjxnI5T9g-NrKv1yOp2KwEe03UMojQydTZEAX7XQ');
	background-repeat: no-repeat;
	border: 1px #ccc solid;
	background-size: cover;
}

.bg3 {
	width: 20%;
	height: 700px;
	background-repeat: no-repeat;
	border: 1px #ccc solid;
	background-size: cover;
	float: right
}
</style>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
	<div class="top_topmenu">
		<div class="top_topmenu_frame">
			<div class="float_left top_topmenu_left">
				<div class="newindex_menuitem float_left">
					<a href="first.php"><font size="5.5" color="#007799">最新</font></a>
				</div>
				<div class="float_left newindex_menu_line"></div>

				<div class="newindex_menuitem float_left">
					<a href="first.php"><font size="5.5" color="#007799">排行</font></a>
				</div>
				<div class="float_left newindex_menu_line"></div>
				<div class="newindex_menuitem float_left">
					<a href="first.php"><font size="5.5" color="#007799">關於我們</font></a>
				</div>
				<div class="float_left newindex_menu_line"></div>
				<div class="newindex_menuitem float_left">
					<a href="memberpage.php"><font size="5.5" color="#007799">首頁</font></a>
				</div>
				<div class="float_left newindex_menu_line"></div>


			</div>
			<div class="float_right top_language"
				style="padding-right: 15px; font-size: 12px; box-sizing: content-box;">
				| <a title="登入" href="login.php"><font size="4" color="#007799">登出</font></a>
			</div>
		</div>
	</div>
	<HR color="	#000000" size="7" width="100%">
	<font Size="8" color="#FF0000">上傳想要的音樂吧!(紅星代表必填)</font>

	<br>
	<HR color="	#000000" size="7" width="100%">
	<form action="upload.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
		<font Size="10" color="#FF0000">*</font> <font Size="8"
			color="#000000">歌名:&nbsp&nbsp</font> <input type="text"
			name="Songname" style="width: 40%; height: 5%; font-size: 20px"
			size="20" maxlength="20" /> <br> <br> <font Size="10" color="#FF0000">*</font>
		<font Size="8" color="#000000">地區:&nbsp&nbsp</font> <select
			name="Class" style="font-size: 20px">
			<option value="Chinese" selected="True">中文</option>
			<option value="English" selected="True">英文</option>
			<option value="Japanese" selected="True">日文</option>
			<option value="Korean" selected="True">韓文</option>
		</select> <br> <br> <font Size="8" color="#000000">作者:&nbsp&nbsp</font><input
			type="text" name="Author" size="10" maxlength="10"
			style="font-size: 16px" /> <br> <br> <font Size="8" color="#000000">歌詞:</font>
		<br>
		<textarea name="Lyris" rows="10" cols="80"
			style="width: 40%; font-size: 22px"></textarea>
		<br> <br> <font Size="10" color="#FF0000">*</font> <font Size="8"
			color="#000000">請選擇音樂檔!(檔名請盡量使用英文，以免錯誤!)&nbsp&nbsp</font> <br> <input
			type="file" name="file" id="file" /> <br> <br> <input type="submit"
			value="送出" style="width: 120px; height: 40px; font-size: 20px;">
			<input type="submit" value="送出" style="width: 120px; height: 40px; font-size: 20px;">
	</form>
	</div>
<?php	
require_once ("mycontacts_open.inc");
error_reporting(E_ALL^E_NOTICE^E_WARNING);

if (isset ( $_FILES ["file"] ["name"] )) {
	$boolean = false;
	if ($_FILES["file"]["error"] > 0){
		echo "";
	}else{
		$string="upload/".$_FILES["file"]["name"];
		@$string2=iconv( "UTF-8","big5" ,$string);
		if (move_uploaded_file($_FILES["file"]["tmp_name"],$string2)) {
			$boolean=true;
		} else {
			echo "Possible file upload attack!\\\\n";
		}
	}

	// 建立SQL字串
	if (isset ( $_POST ["Songname"] ) && isset ( $_POST ["Class"])) {
		$name = $_POST ["Songname"];
		$region = $_POST ["Class"];
		$author = $_POST ["Author"];
		$lyris = $_POST ["Lyris"];
		$click = 0;
		switch ($region) {
			case "Chinese" :
				$classname = "中文";
				break;
			case "English" :
				$classname = "英文";
				break;
			case "Japanese" :
				$classname = "日文";
				break;
			case "Korean" :
				$classname = "韓文";
				break;
		}
	}
	if($boolean==true){
		echo $boolean . "qw21dq1d23qw<br>";
		$sql="SELECT name FROM member WHERE memberid=$id";
		$result2 = mysqli_query ( $link, $sql);
		while ( $rows = mysqli_fetch_array ( $result2, MYSQLI_NUM )) {
			$uploader=$rows[0];
		}
		$sql="INSERT INTO total (title,filename,region,author,lyrics,click,上傳者) SELECT ";
		$sql.="'$name'".","."'$string'".","."'$classname'".","."'$author'".","."'$lyris'".","."'$click'".",name FROM member WHERE memberid=$id";
		
		mysqli_query ( $link, $sql ); // 執行SQL指令
		$datetime = date ("Y-m-d");
		$sql="SELECT name FROM member WHERE memberid=$id";
		$result2 = mysqli_query ( $link, $sql);
		while ( $rows = mysqli_fetch_array ( $result2, MYSQLI_NUM )) {
			$person=$rows[0];
		}
		$sql="INSERT INTO uploader (memberid,上傳日期,音樂編號) SELECT $id,"."'$datetime'".","."MAX(音樂編號) FROM total WHERE 上傳者="."'$person'";
		echo $sql;
		mysqli_query ( $link, $sql );
		header("refresh:3; url=memberpage.php?id=$id");
		?>
		<script>
		alert("上傳成功!");
		</script>
		<?php 
		
	}else{
		echo "<font color=red>上傳失敗!請確認檔名是否正確。";
	}
	// 建立SQL字串
	require_once ("mycontacts_close.inc");
}
?>
</body>
</html>