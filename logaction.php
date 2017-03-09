<?php
include("query.php");
$ob=new ims;
$eml=$_POST['email'];
$pass=$_POST['pwd'];
$em=$ob->login($eml,$pass);
$f=$ob->numrows($em);
if($f==1){
	$ef=$ob->mfetch($em);
	$_SESSION['id']=$ef['id'];
	echo "<script>window.location.href='inbox.php'</script>";
}
else{
	echo "<script>window.location.href='index.php'</script>";
}
?>
