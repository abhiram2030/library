<?php
include '../db.php';
if(isset($_POST['submit'])) {
    	$id=$_POST['book_id'];
    	$title=$_POST['title'];
    	$author=$_POST['author'];
	$sql="update books set title='$title',author='$author' where book_id='$id'";
	$res=mysqli_query($conn,$sql);
    	if($res) {
        	echo "Book updated!";
    	}
}
?>
<link rel="stylesheet" href="../css/style.css">
<h2>Update Book</h2>
<form method="post">
    <input type="number" name="book_id" placeholder="Book ID" required>
    <input type="text" name="title" placeholder="New Title" required>
    <input type="text" name="author" placeholder="New Author" required>
    <button type="submit" name="submit">Update</button>
</form>
<a href="../index.php">Home</a>