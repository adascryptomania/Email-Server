<?php
include("query.php");
$ob=new ims;
$name=$_POST['nm'];
$email=$_POST['eml'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$f=$_FILES['img']['name'];
$rnm=time()."_".rand(00,99).$f;
$path="upload/".$rnm;
$temp=$_FILES['img']['tmp_name'];
move_uploaded_file($temp,$path);
$em=$ob->emlcheck($email);
$r=$ob->numrows($em);
if($r==1){
	echo "<script>window.location.href='reg.php'</script>";
}
else{
if($pass==$cpass){
$ins=$ob->insert($name,$email,$pass,$cpass,$path);
if($ins){
	echo "<script>window.location.href='index.php'</script>";
}
else{
	echo "<script>window.location.href='reg.php'</script>";
}
}
else{
	echo "<script>window.location.href='reg.php'</script>";
}
}
?>