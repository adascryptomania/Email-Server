<?php
include("query.php");
$ob=new ims;
session_destroy();
echo header('location:index.php');
?>