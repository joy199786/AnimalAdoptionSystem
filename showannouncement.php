
<!DOCTYPE html>
<html>
<body>
<?php
echo "公告:"."<br>";
?><pre>
<textarea wrap="off" style="font-family:fantasy;font-weight:bold; background-color:#FFBA3B; border:3px green solid;" name="content" cols="60" rows="10"   readonly="readonly">
<?php
// Echo session variables that were set on previous page
$manager = new MongoDB\Driver\Manager("mongodb+srv://maomao:maomao123@animal-axwfm.gcp.mongodb.net/test?retryWrites=true&w=majority");//設定連線
		$filter = [];//查詢條件
		$query = new MongoDB\Driver\Query($filter);//設定查詢變數
		$cursor = $manager->executeQuery('mydb.announcement', $query);//設定指標變數:查詢變數指向哪個db哪個collection
		//顯示資料
		foreach ($cursor as $document) {
			//設定$doc為陣列才能一一顯示值
			$doc = (array)$document;
			if(!empty($doc)){
				echo $doc['announce'];
			}
		}
?>
</textarea>
</pre>
</body>
</html>