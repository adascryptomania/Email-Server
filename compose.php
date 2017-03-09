<?php
include("query.php");
include("dashboard.php");
$ob=new ims;

?>
<center>
<fieldset style="width:30%"><legend></legend>
<form action="compose_action.php" method="post" enctype="multipart/form-data">
<h1>Compose Mail</h1>
<table border=2>
<tr>
<td>To</td>
<td><input type="email" name="email" size="35%"></td>
</tr>
<tr>
<td>Subject</td>
<td><input type="text" name="subject" size="35%"></td>
</tr>
<tr>
<td>Message</td>
<td><textarea rows=5 cols=15 name="add" style="resize:none; border: none; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;"></textarea></td>
</tr>
<tr>
<td>File</td>
<td><input type="file" name="img"size="35%"></td>
</tr>
<tr>
<td colspan=2><input type="submit" name='sub' value="Send"></td>
</tr>
</form>
</fieldset>
</center>