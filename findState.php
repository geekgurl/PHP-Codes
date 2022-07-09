<?php 
require 'connection.php';
//echo connected great;
//$country='224';
$country="";
if(isset($_GET["country"])) 
{
$country=intval($_GET["country"]);
} 


$query="SELECT country_name,state_name FROM state WHERE country_id='$country'";
$result=mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($result)) 
{
echo "<br />"."countryname: " . $row["country_name"]. " - stateName: " . $row["state_name"]. "<br>";
}
?>
