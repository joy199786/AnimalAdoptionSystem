<?php
session_start();
if($_POST['sendBtn']){
	if($_POST['content'] != ""){
		$bulk->update(['announce' => ['$eq' => $_SESSION['tmpAnnounce']]],
		['$set'=>['announce' => $_POST['content']//使用者登陸後儲存使用者id之類的常用資料。一旦儲存到SESSION中，其他頁面都可以通過SESSION獲取,SESSION的使用要開啟session
			   ]);//寫入資料設定
	}
	else{
		echo '<script>alert("沒有內容");</script>';
		echo '<script>location.replace("new_announcement.php");</script>';
	}
?>
<!DOCTYPE html>
<html>
<body>
<a href="http://localhost/animal/showannouncement.php">顯示</a>
</body>
</html>