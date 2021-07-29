<?php

include "connection.php";

$title_new = $_POST['title_name'];
$content_new = $_POST['content_name'];
// $image_new= $_POST['image_name'];

// $tmp_file =$_FILES['image_name']['tmp_name'];
// $nama= time().".png";
// // $tipe_file = $_FILES['image_name']['type'];
// // $ukuran_file = $_FILES['image_name']['size'];
// $path = "article_image/".$nama;

// move_uploaded_file($tmp_file,$path);
// $sql= "INSERT INTO tb_article(title,image,content) VALUES ('$title_new','$nama','$content_new')";
// mysqli_query($connect,$sql);
// header("location:data_article.php");


// $query="INSERT INTO tb_article(title,image,content) VALUES ('$title_new','$image_new','$content_new')";
// 	$sql = mysqli_query($connect,$query);

// 	if ($sql) {
// 		header("location:data_article.php");
// 	}else{
// 		echo "Sorry, there is something with your upload file !";
// 	}

// if(move_uploaded_file($tmp_file,$path)){
// 	$query="INSERT INTO tb_article(title,image,content) VALUES ('$title_new','$nama','$content_new')";
// 	$sql = mysqli_query($connect,$query);

// 	if ($sql) {
// 		header("location:data_article.php");
// 	}else{
// 		echo "Sorry, there is something with your upload file !";
// 	}
// }

$tmp_file =$_FILES['image_name']['tmp_name'];
$nama= time(). ".png";
$tipe_file =$_FILES['image_name']['type'];
$ukuran_file =$_FILES['image_name']['size'];
$path = "article_image/".$nama;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
	if($ukuran_file <= 1000000){
		if(move_uploaded_file($tmp_file, $path)){
			$query = "INSERT INTO tb_article(title,image,content) VALUES ('$title_new','$nama','$content_new')";
			$sql = mysqli_query ($connect, $query);
			if($sql){
				header("location: data_article.php");
			}
			else{
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
				echo "<br><a href='add_data_article.php'>Kembali Ke Form</a>";
			}

		}
		else {
			echo "Maaf, Gambar gagal untuk diupload.";
			echo "<br><a href='add_data_article.php'>Kembali Ke Form</a>";
		}
	} else {
		echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
		echo "<br><a href='add_data_article.php'>Kembali Ke Form</a>";
	}
} else {
	echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
	echo "<br><a href='add_data_article.php'>Kembali Ke Form</a>";
}



?>