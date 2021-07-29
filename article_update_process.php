<?php
include "connection.php";
$id=$_POST['id_article'];
$title=$_POST['title'];
$content=$_POST['content'];
$img=$_FILES['image']['tmp_name'];
$image_name= time().".png";
$date= date("Y/m/d h:i:sa");

if(!empty($img)){
	move_uploaded_file($img, "article_image/".$image_name);
	$sql = "UPDATE tb_article SET title='$title',content='$content',image='$image_name',added_on='$date' WHERE id_article=$id";
}else{
	$sql = "UPDATE tb_article SET title='$title',content='$content', added_on='$date' WHERE id_article=$id";
}
$update= mysqli_query($connect,$sql);
if($update){
	header("location:data_article.php");
}
else{
	echo "oops, there's something wrong";
}
?>