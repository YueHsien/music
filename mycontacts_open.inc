<!-- 程式範例：mycontacts_open.inc -->
<?php
// 建立MySQL的資料庫連接
//$link = mysqli_connect("yuehsienmysql-mysqldbserver.mysql.database.azure.com", "sqladmin@yuehsienmysql-mysqldbserver","Cd717630","music") 
  //      or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_select_db($link, "music");  // 選擇mycontacts資料庫
//送出UTF8編碼的MySQL指令
mysqli_query($link, 'SET NAMES utf8'); 
?>