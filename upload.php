<?php
/*echo"<pre>";
print_r($_FILES);
echo"</pre>";*/
$tempName=$_FILES["upfile"]["tmp_name"];
$fileName=$_FILES["upfile"]["name"];
$fileType=$_FILES["upfile"]["type"];
$fileSize=$_FILES["upfile"]["size"];
$upload="upok/";
if($fileType=="image/jpeg")
{
move_uploaded_file($tempName,$upload.$fileName);
}
else
{
	echo"not a jpeg file";

}
header('location:register.php')
?>
