<html>
<body background="reg_bg.jpg">

<fieldset style="width:30%"><legend><b>Registration Form</b></legend>
<form action="regaction.php" method="post" enctype="multipart/form-data">
<center>
<h1>Create New Account</h1>
<table border=1 height=20% width=20%>
<tr>
<td><b>Name</b></td><td><input type="text" name='nm' placeholder="Enter your Name" size="35%" required></td></tr>
<tr>
<td><b>Email</b></td><td><input type="email" name='eml' placeholder="Enter your Email" size="35%" required></td></tr>
<tr>
<td><b>Password</b></td><td><input type="password" name='pass' placeholder="Enter your Password" size="35%" required></td></tr>
<tr>
<td><b>Confirm Password</b></td><td><input type="password" name='cpass' placeholder="Enter Confirm Password" size="35%" required></td></tr>
<tr>
<td><b>Image</b></td><td><input type="file" name='img'></td></tr>
<tr>
<td colspan=2 align="center"><input type="submit" name='sum' value="Sign Up"></td></tr>
</fieldset>
</table>

</form>
</center>
</body>
</html>