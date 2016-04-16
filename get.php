<?php



	if(isset($_FILES['image'])){

$image = file_get_contents($_FILES['image']['tmp_name']);
$image_name = file_get_contents($_FILES['image']['tmp_name']);
$image_size = file_get_contents($_FILES['image']['tmp_name']);
if(isset($_FILES['image']['tmp_name']));
{
	echo($image);
}
}


?>





