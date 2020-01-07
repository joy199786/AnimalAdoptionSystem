<!DOCTYPE html>
<?php

	if(!empty($_POST['number']) && !empty($_COOKIE['confirmNum']) ){
		if($_POST['number'] == $_COOKIE["confirmNum"]){			

			echo '<script>alert("驗證碼正確");</script>';
			header("refresh:0;url=user_register.php");
		}
		else{
			echo '<script>alert("驗證碼錯誤");</script>';
		}
	}
?>
<html lang="zh-TW" dir="ltr">
	<head>
		<meta charset = "utf-8">
		<title>申請認養頁面--動物認養系統</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
		</script>
	</head>
	<body>
		<button class="back" onclick="javascript:history.back()">返回</button>
		<div class="context">
		<form  action="confirm_data.php" enctype="multipart/form-data" method="post">
			<br>驗證碼: <input style="width: 500px;"  type="text" name="number" required>
			<input type="submit" name="sendBtn" value="確認"/><br><br><br>
		</form>
		</div>
		
<?php //$recive=$_POST['account'];
		if(!empty($_POST['account'])){
			$confirmNum = rand();
			setcookie("confirmNum",$confirmNum ,time()+600);
			$account=$_POST['account'];
			$url='https://formspree.io/'.$account;
			echo '<div class="context">
				<form action="';echo $url;echo '" method="post">
				<input name="驗證碼" value=';echo$confirmNum;echo' />
				<input type="submit" value="送出驗證碼">
				</form>
			</div>';
		}
?>
	</body>
</html>