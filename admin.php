<!DOCTYPE html>
<html lang="zh-TW" dir="ltr">
	<head>
		<meta charset = "utf-8">
		<title>管理頁面--動物認養系統</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/admin.css">
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
			echo '<div class="header_right dropdown">';
			if($_SESSION['admin']=="False")
			{echo '<h3>hi, <a style="color:#02e88b" href="user_index.php">';print_r($_SESSION['user_name']);echo '</a></h3>';}
			else
			{echo '<h3>hi, <a style="color:#02e88b" href="admin.php">';print_r($_SESSION['user_name']);echo '</a></h3>';}
			echo '<div class="dropdown_content">';
			echo '<a href="logout.php"><h3>登出</h3></a>';
			echo '</div>';
			echo '</div>';
		  }
		  ?>
		  </div>
		  
		  <div id="login" class="modal">
		  <form class="modal-content animate" action="login_decide.php" method="post">
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
		    </div>
		    <div class="container">
		      <label for="account"><b>帳號</b></label>
		      <input type="text" placeholder="輸入電子信箱" name="account" required>
		      <label for="psd"><b>密碼:</b></label>
		      <input type="password" placeholder="輸入密碼" name="psd" required>
		      <button type="submit" >登入</button>
			  <p>沒有帳戶嗎？點<a href="#" name="user_register.php">這裡</a>註冊新帳戶</p>
		    </div>
		  </form>
		</div>
		
		<div class="context">
			<div class="title">管理系統</div>
			<p>hi,<?php echo $_SESSION['user_name']?>管理員</p>
			<button type="button" onclick="location.href='index.php'">首頁</button>
			<button type="button" onclick="location.href='new_announcement_info.php'">新增公告</button>			
			<button type="button" onclick="location.href='admin_user.php'">會員管理</button>
			<button type="button" onclick="location.href='admin_pet.php'">動物管理</button>
			<button type="button"></button>
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
			$("#content iframe").attr('src', $(this).attr("name"));
		});
		
		$(".container a").click(function(){
			$("#content iframe").attr('src', $(this).attr("name"));
			modal.style.display = "none";
		});
		
		</script>
	</body>
</html>