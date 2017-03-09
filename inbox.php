
<?php
include("dashboard.php");
include("query.php");
$ob=new ims;
$id1=$_SESSION['id'];

$dd=$ob->mquery($id1);
echo "<center>";
echo "<div style='margin-left:10px;width:640px;height:auto;border:2px solid red;'>";

	echo "<table border='1' width='640'>";
	echo "<tr><th>Sender </th><th>Subject</th><th>Message</th><th>Trash</th></tr>";
while(list($id,$toid,$fromid,$sub,$mess,$path,$status)=$ob->mfetch($dd))
{
	if($status==0)
	{
	echo "<tr>";
	echo "<td>".$fromid."</td>";
	echo "<td>".$sub."</td>";
	echo "<td>".$mess."</td>";
	echo "<td><a href='trash_action.php?v=$id'>Delete</a></td>";
	echo "</tr>";
	}
}
	echo "</table>";
    echo "</center>";



?>
