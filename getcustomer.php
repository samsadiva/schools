<?php
// $mysqli = new mysqli("localhost", "root", "", "testj");
// if($mysqli->connect_error) {
//   exit('Could not connect');
// }

// $sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country
// FROM customers WHERE customerid = ?";

// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("s", $_GET['q']);
// $stmt->execute();
// $stmt->store_result();
// $stmt->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
// $stmt->fetch();
// $stmt->close();

// echo "<table border='2'style='boder-collapse:collapse;'>";
// echo "<tr>";
// echo "<th>CustomerID</th>";
// echo "<td>" . $cid . "</td>";
// echo "<th>CompanyName</th>";
// echo "<td>" . $cname . "</td>";
// echo "<th>ContactName</th>";
// echo "<td>" . $name . "</td>";
// echo "<th>Address</th>";
// echo "<td>" . $adr . "</td>";
// echo "<th>City</th>";
// echo "<td>" . $city . "</td>";
// echo "<th>PostalCode</th>";
// echo "<td>" . $pcode . "</td>";
// echo "<th>Country</th>";
// echo "<td>" . $country . "</td>";
// echo "</tr>";
// echo "</table>";


$con =mysqli_connect("localhost", "root", "", "testj");
$d=$_GET['q'];
$p=$_GET['p'];
echo $d;
echo $p;
$sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country
FROM customers WHERE city LIKE'%$d%'";
$qu=mysqli_query($con,$sql);
if ($qu==true) {
	echo "true";
}

echo "<table border='2'style='boder-collapse:collapse;'>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<th>CompanyName</th>";
echo "<th>ContactName</th>";
echo "<th>Address</th>";
echo "<th>City</th>";
echo "<th>PostalCode</th>";
echo "<th>Country</th>";
echo "</tr>";

while ($r=mysqli_fetch_array($qu)) {
	echo "<tr><td>" . $r['customerid'] . "</td>";
	echo "<td>" . $r['companyname'] . "</td>";
	echo "<td>" . $r['contactname'] . "</td>";
	echo "<td>" . $r['address'] . "</td>";
	echo "<td>" . $r['city'] . "</td>";
	echo "<td>" . $r['postalcode'] . "</td>";
	echo "<td>" . $r['country'] . "</td></tr>";

}
echo "</table>";
?>