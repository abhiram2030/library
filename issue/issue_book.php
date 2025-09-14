<?php
include '../db.php';
if(isset($_POST['submit'])) {
    	$book_id=$_POST['book_id'];
    	$member_id=$_POST['member_id'];
	$sql1="insert into issued_books(book_id, member_id) values('$book_id','$member_id')";
    	$res=mysqli_query($conn,$sql1);
    	if ($res) {
        	echo "Book issued!";
    	}
}
$sql2="select* from books where book_id not in(select book_id from issued_books)";
$books=mysqli_query($conn,$sql2);
$sql3="select* from members";
$members=mysqli_query($conn,$sql3);
?>
<link rel="stylesheet" href="../css/style.css">

<h2>Issue Book</h2>
<form method="post">
    	Book:
    	<select name="book_id" required>
        	<option value="">-- Select Book --</option>
        	<?php 
			while($b=mysqli_fetch_array($books)){
            			echo "<option value='$b[book_id]'>$b[title]($b[author])</option>";
        		} 
		?>
    	</select>
    	<br><br>
	Member:
    	<select name="member_id" required>
        	<option value="">-- Select Member --</option>
        	<?php 
			while($m=mysqli_fetch_array($members)){
            			echo "<option value='$m[member_id]'>$m[name]</option>";
			}
        	?>
    	</select>
    	<br><br>
	<button type="submit" name="submit">Issue</button>
</form>
<a href="../index.php">Home</a>