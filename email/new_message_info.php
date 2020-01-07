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
			<form
  action="admin_email.php" enctype="multipart/form-data" method="post"
>
    Your Name:管理員<br>
  <label>
    你要寄的人(帳號):
    <input type="text" name="account">
  </label><br>
  <label>
    標題:
    <input type="text" name="title">
  </label><br>
  <label>
    Message:
    <textarea name="message"></textarea>
  </label><br>
  <input type="submit" value="Send">
</form>
		</div>

	</body>
</html>