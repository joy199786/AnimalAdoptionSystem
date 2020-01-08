
<!DOCTYPE html>
<html lang="zh-TW" dir="ltr">
	<head>
		<meta charset = "utf-8">
		<title>公告</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/adminView.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
		</script>
	</head>
	<body>
		<!--<button class="back" onclick="javascript:history.back()">返回</button>
		-->
		<div id="navbar" class="navbar">
		<a href="new_announcement_info.php">公告</a>
		<a href="#">用戶管理</a>
		<a href="new_message_info.php">發送訊息</a>
		</div>
		<div class="context">
			<form  action="insert_announcement_data.php" enctype="multipart/form-data" method="post">
			
			<div class="textArea">
				<h1>目前內容</h1>
				<!--<p>title: <input type="text" name="title"></p><br>
				-->
				
				<textarea name="content" cols="60" rows="10"  required><?php
								$manager = new MongoDB\Driver\Manager("mongodb+srv://maomao:maomao123@animal-axwfm.gcp.mongodb.net/test?retryWrites=true&w=majority");//設定連線
								$filter = [];//查詢條件
						$query = new MongoDB\Driver\Query($filter);//設定查詢變數
						$cursor = $manager->executeQuery('mydb.announcement', $query);//設定指標變數:查詢變數指向哪個db哪個collection
						foreach ($cursor as $document) {
							//設定$doc為陣列才能一一顯示值
							$doc = (array)$document;
							echo print_r($doc['announce']);
							$_SESSION['tmpAnnounce'] = $doc['announce'];
							//$ID=$document->{'_id'}->__toString();//將MongoDB的ObjectID轉換為字串
							?></textarea>
				<input type="submit" name="sendBtn" value="送出"/>
			</div>
			</form>
		</div>

	</body>
</html>