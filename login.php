<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>login.php</title>
<style type="text/css">
.bg{
width:100%;
    height:40px;
    background-image:url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ8b43qCEo_JaDjxnI5T9g-NrKv1yOp2KwEe03UMojQydTZEAX7XQ');
    background-repeat:no-repeat;
    border:1px #ccc solid;
    background-size:cover;
}
.bg2{
width:100%;
    height:1000px;
    background-image:url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ8b43qCEo_JaDjxnI5T9g-NrKv1yOp2KwEe03UMojQydTZEAX7XQ');
    background-repeat:no-repeat;
    border:1px #ccc solid;
    background-size:cover;
}
.bg3{

}
</style>
</head>
<body  bgcolor="#00FFFF">
<div class="inner" align="center">
<h1>MusicForFun</h1>
</div>
<?php
session_start();  // 啟用交談期
$username = "";  $password = "";
// 取得表單欄位值
if ( isset($_POST["Username"]) )
   $username = $_POST["Username"];
if ( isset($_POST["Password"]) )
   $password = $_POST["Password"];
// 檢查是否輸入使用者名稱和密碼
if ($username != "" && $password != "") {
   // 建立MySQL的資料庫連接 
   $link = mysqli_connect("yuehsienmysql-mysqldbserver.mysql.database.azure.com", "sqladmin@yuehsienmysql-mysqldbserver","cd717630","music") 
        or die("無法開啟MySQL資料庫連接!<br/>");
   //送出UTF8編碼的MySQL指令
   mysqli_query($link, 'SET NAMES utf8'); 
   // 建立SQL指令字串
   $sql = "SELECT * FROM member WHERE account='";
   $sql.= $username."' AND password='".$password."'";
   // 執行SQL查詢
   $result = mysqli_query($link, $sql);
   $total_records = mysqli_num_rows($result);
   // 是否有查詢到使用者記錄
   if ( $total_records > 0 ) {
      // 成功登入, 指定Session變數
   	$sql="SELECT * FROM member ";
   	if($result=mysqli_query($link, $sql)){
   		while ($row=mysqli_fetch_assoc($result)){
   			if($row["account"]==$username&&$row["password"]==$password){
   				$nickname=$row["name"];
   				$id=$row["memberid"];
   				$_SESSION["login_session"] = true;
   				$_SESSION["id"] = true;
   				$_SESSION["id"]=$id;
   				header("Refresh:2;url=index.php?id=$id&nickname=$nickname");
   			}
   		}
   	}
   } else {  // 登入失敗
      echo "<center><font color='red'>";
      echo "使用者名稱或密碼錯誤!<br/>";
      echo "</font>";
      $_SESSION["login_session"] = false;
   }
   mysqli_close($link);  // 關閉資料庫連接  
}
?>
<form action="login.php" method="post">
	<br>
	<br>
  <div align="center">
  			 <font size="4">帳號:</font><input type="text" name="Username" 
             width="48" height="48" maxlength="10" />
             </div>
             <br>
  <div align="center">
             <font size="4">密碼:</font><input type="password" name="Password" 
             width="48" height="48" maxlength="10" />
              <br>
              <br>
   <input type="submit" value="登入" style="width:120px;height:30px;font-size:15px;background-color:#00BBFF;"/>
             </div>

</form>
</body>
</html>
