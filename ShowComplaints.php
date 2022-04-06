<?php
session_start();
include_once("NavAccount.php");
include "dbconnect.php";
if($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: ( " . $mysql->connect_errno. " ) ". $mysql->conn_error;
}


$currentUserId = $_SESSION['UserId'];
$sql = " SELECT ComplaintId, Description, Status FROM Complaints WHERE Status = 'active' AND UserId='$currentUserId' "; 
$result = $mysqli->query($sql);
?>


<html>
<body>


<div class="container">


<?php
//output data as table
echo "<h3>Your Active Complaints</h3>";

	echo "<table style='border: solid 2px black;'>
	<tr>
	    <th>Complaint ID </th>
	    <th>Complaint Description</th>
	</tr>";

	while ($row = $result -> fetch_assoc()){
		echo 
		'<tr>
			<td style="width: 200px; size = 30px;" text-align: left;> 
			<a href = "ShowIndComplaint.php"> '.$row['ComplaintId'].' 
			</a>
			</td>
			<td style="width: 1000px;" text-align: left;> '.$row['Description'].' 
			</td>
		</tr>';	
	}
	
echo "</table><br><br>";
$sql = " SELECT ComplaintId, Description, Status FROM Complaints WHERE Status = 'completed' AND UserId='$currentUserId' "; 
$result2 = $mysqli->query($sql);
?>

</div>
</html>

<html>

<div class="container">

<?php
//output data as table
echo "<h3>Your Completed Complaints</h3>";

	echo "<table style='border: solid 2px black;'>
	<tr>
	    <th>Complaint ID </th>
	    <th>Complaint Description</th>
	</tr>";
	
	while ($row = $result2 -> fetch_assoc()){
		echo 
		'<tr>
			<td style="width: 200px;" text-align: left;> '.$row['ComplaintId'].' </td>
			<td style="width: 1000px;" text-align: left;> '.$row['Description'].' </td>
		</tr>';	
	}
	

?>

</body>
</html>
