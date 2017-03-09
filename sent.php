<?php
include("dashboard.php");
include("query.php");
$ob=new ims;
$id=$_SESSION['id'];

$dd=$ob->squery($id);
echo "<center>";
echo "<div style='margin-left:10px;width:640px;height:auto;border:2px solid red;'>";

	echo "<table border='1' width='640'>";
	echo "<tr><th>To</th><th>Subject</th><th>Message</th></tr>";
while(list($id,$toid,$fromid,$sub,$mess,$path,$status)=$ob->mfetch($dd))
{
	echo "<tr>";
	echo "<td>".$toid."</td>";
	echo "<td>".$sub."</td>";
	echo "<td>".$mess."</td>";
	echo "</tr>";	
}
	echo "</table>";
echo "</center>";	
?>
