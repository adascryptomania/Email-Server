<?php
class ims{
	protected $conn;
	function __construct(){
		$this->conn=mysqli_connect("localhost","root")or die("connect err");
		mysqli_select_db($this->conn,"abhi_ims")or die("databse err");
		session_start();
	}
	function login($eml,$pass){
		$eml=mysqli_query($this->conn,"select * from user where email='$eml' and pass='$pass'")or die("log select err");
		return $eml;
	}
	function findname($id)
	{
		$name=mysqli_query($this->conn,"select name fron user where id='$id'");
		return $name;
	}
	function numrows($em){
		$p=mysqli_num_rows($em);
		return $p;
	}
	function mfetch($p){
		$r=mysqli_fetch_array($p);
		return $r;
	}
	function insert($name,$email,$pass,$cpass,$path){
		$ins=mysqli_query($this->conn,"insert into user values('','$name','$email','$pass','$path')")or die("insert err");
		return $ins;
	}
	function emlcheck($email){
		$e=mysqli_query($this->conn,"select email from user where email='$email'")or die("email err");
		return $e;
	}
	function prof($id){
		$prof=mysqli_query($this->conn,"select * from message where from_id='$id'")or die("prof err");
		return $prof;
	}
	
	function to_id($eml){
		$eml=mysqli_query($this->conn,"select id from user where email='$eml'")or die("log select err");
		return $eml;
	}
	
	function compose($id,$toid,$sub,$mess,$path)
	{
		$ins=mysqli_query($this->conn,"insert into message values('','$toid','$id','$sub','$mess','$path','')")or die("insert err");
		return $ins;
	}

    function mquery($id)
    {
      $r=mysqli_query($this->conn,"select * from message where toid='$id'");		
      return $r;
	}
	function squery($id)
	{
		$r=mysqli_query($this->conn,"select * from message where fromid='$id'");
		return $r;
	}
	function trash($id){
		$del=mysqli_query($this->conn,"update message set status=1 where id='$id'")or die("status update err");
		return $del;
	}
	function delete_($id)
	{
		$del=mysqli_query($this->conn,"delete from message where id='$id'");
		return $del;
	}
	
	function restore($id)
	{
		$del=mysqli_query($this->conn,"update message set status=0 where id='$id'")or die("status update err");
		return $del;
	}
}
?>