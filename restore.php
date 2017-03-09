<?php
include("query.php");
$ob=new ims;
$id=$_GET['v'];
$trs=$ob->restore($id);
if($trs)
{
	echo "<script>window.location.href='trash.php'</script>";
}
?>