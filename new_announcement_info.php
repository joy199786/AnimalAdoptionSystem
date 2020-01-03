<?php
session_start();
?>
<!DOCTYPE html>


<html lang="zh-TW" dir="ltr">
	<head>
		<meta charset = "utf-8">
		<title>公告</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/new_animal_info.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
		</script>
	</head>
	<body>
		<button class="back" onclick="javascript:history.back()">返回</button>
		<div class="context">
			<form  action="insert_announcement_data.php" enctype="multipart/form-data" method="post">
				
			<div class="title">布告欄</div>
			<!--<p>title: <input type="text" name="title"></p><br>
			-->
			<p>內容:</p> <textarea name="content" cols="50" rows="10"  required><?php
						// Echo session variables that were set on previous page
						echo $_SESSION["announcement"] ;
						?>
						</textarea>
			<input type="submit" name="sendBtn" value="送出"/>
			</form>
		</div>

	</body>
</html>