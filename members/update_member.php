<?php
include '../db.php';
if(isset($_POST['submit'])) {
    	$id=$_POST['member_id'];
    	$name=$_POST['name'];
    	$email=$_POST['email'];
    	$phone=$_POST['phone'];
	$sql="update members set name='$name',email='$email',phone='$phone' where member_id='$id'";
	$res=mysqli_query($conn,$sql);
    	if($res) {
        	echo "Member updated!";
   	}
}
?>
<link rel="stylesheet" href="../css/style.css">
<h2>Update Member</h2>
<form method="post">
    <input type="number" name="member_id" placeholder="Member ID" required>
    <input type="text" name="name" placeholder="New Name" required>
    <input type="email" name="email" placeholder="New Email" required>
    <input type="text" name="phone" placeholder="New Phone" required>
    <button type="submit" name="submit">Update</button>
</form>
<a href="../index.php">Home</a>