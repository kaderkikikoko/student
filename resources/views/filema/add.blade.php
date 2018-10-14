<?php

$target="images";
$target=$target.basename($_FILES['photo'] ['name']);

$name=$_POST['name'];
$pic=($_FILES['photo'] ['name']);
$sql=mysqli_connect("127.0.0.1","root","","students");

if(mysqli_connect_errno()){
	echo mysqli_connect_error();
}
$inser="Insert into files (name,photo) values ($name,$pic)";

	if(mysqli_query($sql,$inser)){
	echo "string";

}




?>




