<html>

<?php 

$link = mysqli_connect("localhost", "root", "", "image");
$db = ('localhost("127.0.0.1" "root", "", "image")');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
if($mysqli_select_db("$link", "$db", "store"));
	echo ($link);
mysqli_(SELECT, "", 'store'); 
}

include 'file.php';


?>
</html>
