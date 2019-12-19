<?php
session_start();
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");//設定連線
$filter = ['user_name' => ['$eq' => $_SESSION['user_name']]];//查詢條件
$query = new MongoDB\Driver\Query($filter);//設定查詢變數
$cursor = $manager->executeQuery('mydb.Opet', $query);//設定指標變數:查詢變數指向哪個db哪個collection
//顯示資料
foreach ($cursor as $document) {
	//設定$doc為陣列才能一一顯示值
	$doc = (array)$document;
	$ID=$document->{'_id'}->__toString();//將MongoDB的ObjectID轉換為字串
	if($doc['isAdopted']==True)
	{
		$isAdopted="是";
	}
	else
		$isAdopted="否";
	
	
	echo '<div class="a_animal">';
	echo	'<a href="animal_info.php?_id=';print_r($ID);echo '"><img src="https://asms.coa.gov.tw/Amlapp/Upload/pic/79866ec4-0259-4c05-83fd-ec4ff90893ca.jpg" alt="no image" onerror=this.src="ui_img/no_image.png"></a>';
	//echo	'<a href="query_Petinfo_data.php?_id=5df8d4b4df3c00008c0063d3"><img src="https://asms.coa.gov.tw/Amlapp/Upload/pic/79866ec4-0259-4c05-83fd-ec4ff90893ca.jpg" alt="no image" onerror=this.src="ui_img/no_image.png"></a>';
	echo	'<p id="pet_id">類別：';print_r($doc['pet_type']);echo'</p>';
	echo	'<p>品種：';print_r($doc['pet_name']);echo'</p>';
	echo	'<p>地區：';print_r($doc['area']);echo'</p>';
	echo	'<p>是否開放認養：';print_r($isAdopted);echo'</p>';
	//echo	'<p>_ID：';print_r($doc['_id']);echo'</p>';
	echo	'<button type="button">修改</button>
			 <button type="button">刪除</button>
		  </div>';
}
?>