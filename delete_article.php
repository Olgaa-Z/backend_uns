<?php

include "connection.php";
$var_id=$_GET['id'];

$query= "DELETE FROM tb_article WHERE id_article=$var_id";
mysqli_query($connect,$query);
header("location:data_article.php");

?>