<?php
$server="localhost";
$username="root";
$password="";
$db="college";
$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
	// echo"congo!!";
}
else{
	// echo 'Error';
}
// include 'connection.php';
// $select="SELECT * FROM scholarship";
// $query=mysqli_query($con,$select);
// $num=mysqli_num_rows($query);
// //echo $num;
// $res=mysqli_fetch_array($query);
// // while($res=mysqli_fetch_array($query)){
// // 	//echo $res['UserName']."<br>";
// // }

?>
