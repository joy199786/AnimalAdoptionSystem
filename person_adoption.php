<!DOCTYPE html>

<html lang="zh-TW" dir="ltr">
	<head>
		<meta charset = "utf-8">
		<title>個人認養--動物認養系統</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/person_adoption.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
		</script>
	</head>
	<body>
		<div class="header">
		  <div class="header_left">
		  	<h2>動物認養系統</h2>
		  </div>
		  <div class="header_right">
		  	
		  </div>
		</div>
		
		<div id="navbar" class="navbar">
		  <a href="index.php">首頁</a>
		  <a class="active" href="person_adoption.php">個人認養</a>
		  <a href="#">機構認養</a>
		  <a href="#">遺失協尋</a>
		  <a href="#">二手用品</a>
		</div>
		
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
		  <div>
			<p>是否開放認養: </p><br>
			<p>動物種類: </p><br>
			<p>動物品種: </p><br>
			<p>動物性別: </p><br>
			<p>動物年齡: </p><br>
			<p>地區: </p><br>
			<p>病例: </p><br>
			<p>晶片號碼: </p><br>
			<p>認養條件: </p><br>
		  </div>
		</div>
		
		<div class="content" id="main">
			<button class="filter_button" onclick="openNav()">篩選器</button>
			<iframe id="animal_info_content" src="animal_info.php" ></iframe>
		
			<div class="a_animal">
				<a href="javascript: handler();"><img src="https://asms.coa.gov.tw/Amlapp/Upload/pic/79866ec4-0259-4c05-83fd-ec4ff90893ca.jpg" alt="no image" onerror=this.src="ui_img/no_image.png"></a>
				<p>種類：</p>
				<p>品種：</p>
				<p>地區：</p>
				<p>是否提供認養：</p>
				<button type="button">申請認養</button>
			</div>
			<div class="a_animal">
				<a href="javascript: handler();"><img src="https://asms.coa.gov.tw/Amlapp/Upload/pic/79866ec4-0259-4c05-83fd-ec4ff90893ca.jpg" alt="no image" onerror=this.src="ui_img/no_image.png"></a>
				<p>種類：</p>
				<p>品種：</p>
				<p>地區：</p>
				<p>是否提供認養：</p>
				<button type="button">申請認養</button>
			</div>
			<div class="a_animal">
				<a href="javascript: handler();"><img src="https://asms.coa.gov.tw/Amlapp/Upload/pic/79866ec4-0259-4c05-83fd-ec4ff90893ca.jpg" alt="no image" onerror=this.src="ui_img/no_image.png"></a>
				<p>種類：</p>
				<p>品種：</p>
				<p>地區：</p>
				<p>是否提供認養：</p>
				<button type="button">申請認養</button>
			</div>
			<div class="a_animal">
				<a href="javascript: handler();"><img src="https://asms.coa.gov.tw/Amlapp/Upload/pic/79866ec4-0259-4c05-83fd-ec4ff90893ca.jpg" alt="no image" onerror=this.src="ui_img/no_image.png"></a>
				<p>種類：</p>
				<p>品種：</p>
				<p>地區：</p>
				<p>是否提供認養：</p>
				<button type="button">申請認養</button>
			</div>
			<div class="a_animal">
				<a href="javascript: handler();"><img src="https://asms.coa.gov.tw/Amlapp/Upload/pic/79866ec4-0259-4c05-83fd-ec4ff90893ca.jpg" alt="no image" onerror=this.src="ui_img/no_image.png"></a>
				<p>種類：</p>
				<p>品種：</p>
				<p>地區：</p>
				<p>是否提供認養：</p>
				<button type="button">申請認養</button>
			</div>
		</div>

		<script>
		// Get the modal
		var modal = document.getElementById('login');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}

		$(".navbar a").click(function(){
			$(".navbar a").removeClass("active");
			$(this).addClass("active");
		});
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("navbar");
		var filter = document.getElementById("mySidenav");
		var sticky = navbar.offsetTop;

		function myFunction() {
		  if (window.pageYOffset >= sticky) {
		    navbar.classList.add("sticky");
			filter.classList.remove("sidenav");
			filter.classList.add("sticky_filter");
		  } else {
		    navbar.classList.remove("sticky");
			filter.classList.remove("sticky_filter");
			filter.classList.add("sidenav");
		  }
		}
		
		function handler() {
		   document.getElementById('animal_info_content').style.display="block";
		}
		
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		  document.getElementById("main").style.marginLeft = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		  document.getElementById("main").style.marginLeft= "0";
		}
		</script>
		
	</body>
</html>