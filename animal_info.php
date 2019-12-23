<!DOCTYPE html>

<html lang="zh-TW" dir="ltr">
	<head>
		<meta charset = "utf-8">
		<title>個人頁面--動物認養系統</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/animal_info.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
		</script>
	</head>
	<body>
		<button class="back" onclick="back()">返回</button>
		<div class="context">
			<div class="title">動物基本資料</div>
			<p>是否開放認養: </p><br>
			<p>動物類別: </p><br>
			<p>動物性別: </p><br>
			<p>動物年齡: </p><br>
			<p>地區: </p><br>
			<p>病例: </p><br>
			<p>晶片號碼: </p><br>
			<p>認養條件: </p><br>
		</div>
		
		<script>
			function back() {
				window.history.back();
			}
		</script>
	</body>
</html>