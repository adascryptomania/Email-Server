<?php
include("query.php");
$ob=new ims;
$id=$_GET['v'];
$del=$ob->delete_($id);
if($del)
{
	echo "<script>window.location.href='trash.php'</script>";
}
?>