<?php
include '../db.php';
if(isset($_POST['submit'])) {
    	$issue_id=$_POST['issue_id'];
    	$sql1="delete from issued_books where issue_id='$issue_id'";
	mysqli_query($conn,$sql1);
    	echo "Book returned!";
	}
?>
<link rel="stylesheet" href="../css/style.css">
<h2>Return Book</h2>
<form method="post">
    <input type="number" name="issue_id" placeholder="Issue ID" required>
    <button type="submit" name="submit">Return</button>
</form>
<a href="../index.php">Home</a>