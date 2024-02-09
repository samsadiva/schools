<?php
session_start();
$con=mysqli_connect("localhost","root","","myhouse");
//when log in button have clicked
if (isset($_GET['q'])&&isset($_GET['p'])) {
$phone=$_GET['q'];
$pass=$_GET['p'];
$sq="SELECT * FROM landlord WHERE phone='$phone' AND password='$pass'";
$query=mysqli_query($con,$sq);
if (mysqli_num_rows($query)==0) {
	echo "no";
}
else{
	while ($r=mysqli_fetch_array($query)) {
		$_SESSION['phone']=$r['phone'];
		$_SESSION['password']=$r['password'];
		
	}
	echo "yes";
}
}
// when phone number field is focused it does not matter if password field has filled or not
if (isset($_GET['pn'])) {
	$pn=$_GET['pn'];
$sq="SELECT * FROM landlord WHERE phone='$pn'";
$query=mysqli_query($con,$sq);
if (mysqli_num_rows($query)==0) {
	echo "no";
}
else{
	echo "yes";
}
}
// testing in phone number field when all field have filled so it will check for match if match found it will also return "yes and add it with yes of previous code checked on phone number fields"
if (isset($_GET['pas'])&&isset($_GET['pn'])) {
$phone=$_GET['pn'];
$pass=$_GET['pas'];
$sq="SELECT * FROM landlord WHERE phone='$phone' AND password='$pass'";
$query=mysqli_query($con,$sq);
if (mysqli_num_rows($query)!=0) {
    while ($r=mysqli_fetch_array($query)) {
    $_SESSION['phone']=$r['phone'];
    $_SESSION['password']=$r['password'];
    
  }
  echo "yes";
}
}

// testing in password field when all field have filled so it will check for match if match found it will also return "yes and add it with yes of following code checked on password fields"
if (isset($_GET['pa'])&&isset($_GET['pho'])) {
$phone=$_GET['pho'];
$pass=$_GET['pa'];
$sq="SELECT * FROM landlord WHERE phone='$phone' AND password='$pass'";
$query=mysqli_query($con,$sq);
if (mysqli_num_rows($query)!=0) {
    while ($r=mysqli_fetch_array($query)) {
    $_SESSION['phone']=$r['phone'];
    $_SESSION['password']=$r['password'];
    
  }
  echo "yes";
}
}

if (isset($_GET['pa'])) {
	$pa=$_GET['pa'];
$sq="SELECT * FROM landlord WHERE password='$pa'";
$query=mysqli_query($con,$sq);
if (mysqli_num_rows($query)==0) {
	echo "no";
}
else{
	echo "yes";
}
}
// help to check phone number automatically in sign up
if (isset($_GET['psi'])) {
	$pn=$_GET['psi'];
$sq="SELECT * FROM landlord WHERE phone='$pn'";
$query=mysqli_query($con,$sq);
if (mysqli_num_rows($query)!=0) {
	echo "yes";
}
else{
	echo "no";
}
}
 ?>
