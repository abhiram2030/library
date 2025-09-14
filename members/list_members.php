<link rel="stylesheet" href="../css/style.css">
<?php
include '../db.php';
if(isset($_GET['delete_id'])) {
    	$id=$_GET['delete_id'];
    	$sql1="delete from members where member_id='$id'";
    	mysqli_query($conn,$sql1);
   	echo "Member deleted!";
}
$sql2="select* from members";
$result=mysqli_query($conn,$sql2);
echo "<h2>Members List</h2>";
echo "<table border='1'>";
echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Phone</th>";
    echo "<th>Email</th>";
    echo "<th>Action</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result)){
	echo "<tr>";
    		echo "<td>$row[member_id]</td>";
		echo "<td>$row[name]</td>";
    		echo "<td>$row[phone]</td>";
    		echo "<td>$row[email]</td>";
		echo "<td><a href='update_member.php?id=$row[member_id]'>Edit</a> | <a href='?delete_id=$row[member_id]'>Delete</a>
		</td>";
    	echo "</tr>";
} 
echo "</table>";
echo "<a href='../index.php'>Home</a>";
?>