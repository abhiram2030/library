<link rel="stylesheet" href="../css/style.css">
<?php
include '../db.php';
if(isset($_GET['delete_id'])) {
    	$id=$_GET['delete_id'];
    	$sql1="delete from books where book_id='$id'";
    	mysqli_query($conn,$sql1);
    	echo "Book deleted!";
}
$sql2="select* from books";
$result=mysqli_query($conn,$sql2);
echo "<h2>Books List</h2>";
echo "<table bordedr='1'>";
echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Title</th>";
    echo "<th>Author</th>";
    echo "<th>Action</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result)){
	echo "<tr>";
    	echo "<td>$row[book_id]</td>";
    	echo "<td>$row[title]</td>";
    	echo "<td>$row[author]</td>";
    	echo "<td>
        <a href='update_book.php?id=$row[book_id]'>Edit</a> | 
        <a href='?delete_id=$row[book_id]'>Delete</a>
    	</td>";
	echo "</tr>";
}
echo "</table>";
echo "<a href='../index.php'>Home</a>";
?>