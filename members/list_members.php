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
		echo "<td><a href='update_member.php?id=$row[member_id]' id='update'>Edit</a> | <a href='?delete_id=$row[member_id]' id='delete'>Delete</a>
		</td>";
    	echo "</tr>";
} 
echo "</table>";
echo "<a href='../index.html' id='index''>Home</a>";
?>
<!DOCTYPE html>
<html>
<head>
<title>list members</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        padding: 20px;
        text-align: center;
    }
    h2 {
        margin-bottom: 20px;
        color: #333;
    }
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 0 auto 20px auto;
        background: white;
        box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
    }
    th, td {
        border: 1px solid #ddd;
        padding: 12px;
    }
    th {
        background: #343a40;
        color: white;
    }
    tr:nth-child(even) {
        background: #f9f9f9;
    }
    tr:hover {
        background: #f1f1f1;
    }
    a {
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
    }
    #update {
        background: #007bff;
        color: white;
    }
    #delete {
        background: #dc3545;
        color: white;
    }
    #index {
        display: inline-block;
        margin-top: 15px;
        background: #28a745;
        color: white;
    }
</style>
</head>
</html>
