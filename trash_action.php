<?php
include("query.php");
$ob=new ims;
$id=$_GET['v'];
$trs=$ob->trash($id);
if($trs)
{
	echo "<script>window.location.href='inbox.php'</script>";
}
?>