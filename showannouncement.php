
<!DOCTYPE html>
<html>
<body>
<?php
echo "公告:"."<br>";
?>
<pre>
<?php
// Echo session variables that were set on previous page
if(!isset($_COOKIE["announcement"])) {
    echo "announcement is not set!";
} else {
    echo $_COOKIE["announcement"];
}
?>
</pre>
</body>
</html>