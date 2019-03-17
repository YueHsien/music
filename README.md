使用工具:

1.架站:Microsoft Azure

2.資料庫:Mysql

3.網站語言:PHP、JS、Jquery

網站流程:
![image](https://github.com/YueHsien/music/blob/master/images/flowchart.PNG)

網站首先從first.php開始，進入後網站顯示全部、中文、英文、日文、韓文等語言顯示不同語系的音樂。

各個語系皆會以音樂名稱、上傳者、區域、作者、點閱率欄位方式顯示。

first.php會向Mysql請求資料。

而latest.php和rank.php分別代表最新音樂排列、熱門音樂排列網站。該兩個網站向Mysql請求資料並利用Order指令排列。

最後顯示如first.php網頁的資料格式。

使用者利用login.php登入後即可上傳音樂，由於字碼問題，系統會判斷音樂檔名稱是否吻合系統，吻合及上傳成功，否則將返回upload.php

並提醒使用者再次上傳。
