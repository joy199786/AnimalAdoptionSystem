<?php
session_start();
?>
<!DOCTYPE html>-
<!DOCTYPE html>
<html>
<body>
<?php
echo "公告:"."<br>";
?>
<textarea style="background-color:#C9FFFF; border:2px green solid;"  name="content" cols="50" rows="10" >
<?php
// Echo session variables that were set on previous page
echo $_SESSION["announcement"] ;
?>
</textarea>
</body>
</html>