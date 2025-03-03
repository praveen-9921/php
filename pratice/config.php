<?
$conn = new mysqli("localhost","root","root","contact");

if($conn->connect_error){
	die("connection failed: ",$conn->connect_error);
}
?>