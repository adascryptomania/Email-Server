<?php
include("query.php");
$ob=new ims;
$id=$_SESSION['id'];
$eml=$_POST['email'];
$sub=$_POST['subject'];
$mess=$_POST['add'];
$f=$_FILES['img']['name'];
$rnm=time()."_".rand(00,99).$f;
$path="upload/".$rnm;
$temp=$_FILES['img']['tmp_name'];
move_uploaded_file($temp,$path);

$to_id=$ob->to_id($eml);
$r=$ob->mfetch($to_id);
$toid=$r['id'];
$em=$ob->emlcheck($eml);
$er=$ob->numrows($em);
if($er==1){
	$ins=$ob->compose($id,$toid,$sub,$mess,$path);
if($ins){
	echo "<script>window.location.href='inbox.php'</script>";
}
else{
	echo "<script>window.location.href='compose.php'</script>";
}
}
else{
	echo "<script> alert('email not exist')</script>";
	echo "<script>window.location.href='compose.php'</script>";

}

?>
