<?php
include '../db.php';
if(isset($_POST['submit'])){
    	$name=$_POST['name'];
    	$email=$_POST['email'];
    	$phone=$_POST['phone'];
    	$sql2="insert into members(name,email,phone) values('$name','$email','$phone')";
	$res2=mysqli_query($conn,$sql2);
	if($res2) {
		echo "Member added! <a href='list_members.php'>View Members</a>";
	}
}
?>
<link rel="stylesheet" href="../css/style.css">
<h2>Add Member</h2>
<form method="POST">
    	Name:<input type="text" name="name" required><br>
    	Email:<input type="email" name="email"><br>
    	Phone:<input type="text" name="phone"><br>
    	<input type="submit"  value="Add member" name="submit">
</form>
<a href="../index.php">Home</a>