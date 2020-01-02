<!DOCTYPE html>

<html lang="zh-TW" dir="ltr">
	<head>
		<meta charset = "utf-8">
		<title>個人頁面--動物認養系統</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/user_index.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
		</script>
	</head>
	<body>
		<div class="header">
		<a href="index.php" style="text-decoration:none;">
		  <div class="header_left">
		  	<h2>動物認養系統</h2>
		  </div>
		</a>
		   <?php 
		  session_start();
		  if(empty($_SESSION['account']))//未登入顯示登入鈕
		  {
			echo '<div class="header_right">';
		  	echo '<button onclick="document.getElementById(\'login\').style.display=\'block\'" style="width:auto;">登入</button>';
			echo '</div>';
		  }
		  else//已登入顯示帳號
		  {
			echo '<div class="header_right">';
		  	echo '<h3>hi, <a href="user_index.php">';print_r($_SESSION['account']);echo '</a></h3>';
			echo '</div>';
		  }
		  ?>
		</div>

		<div id="navbar" class="navbar">
		  <a class="active" href="#" name="index_content.php">首頁</a>
		  <a href="#" name="person_adoption.php">個人認養</a>
		  <a href="#" name="agency_adoption.php">機構認養</a>
		  <a href="#">遺失協尋</a>
		  <a href="#">二手用品</a>
		</div>
		
		<div class="content">
			<ul id="tabs" class="tabs">
			    <li><div class="active" name="user_foster.php">送養</div></li>
			    <li><div name="user_adoption.php">認養</div></li>
			    <li><div name="user_receive.php">收信夾</div></li>
			    <li><div name="user_second_hand.php">二手用品</div></li>
			    <span><li><div name="user_info.php">個人資料</div></li></span>
			</ul>
			<div id="content">
				<iframe src="user_foster.php"></iframe>
			</div>
		</div>

		<script>
		$(".navbar a").click(function(){
			$(".navbar a").removeClass("active");
			$(this).addClass("active");
		});
		$(".tabs li div").click(function(){
			$(".tabs li div").removeClass("active");
			$(this).addClass("active");
			$(".content iframe").attr('src', $(this).attr("name"));
		});
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;

		function myFunction() {
		  if (window.pageYOffset >= sticky) {
		    navbar.classList.add("sticky")
		  } else {
		    navbar.classList.remove("sticky");
		  }
		}
		</script>
	</body>
</html>