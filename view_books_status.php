<link rel="stylesheet" href="css/style.css">
<?php 
include 'db.php';

echo "<h2>Available Books</h2>";
$sql1="select* from books where book_id not in(select book_id from issued_books)";
$result1=mysqli_query($conn,$sql1);
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Title</th><th>Author</th></tr>";
while($row=mysqli_fetch_array($result1)){
	echo "<tr>";
	echo "<td> $row[book_id]</td>";
	echo "<td>$row[title]</td>";
	echo "<td>$row[author]</td>";
	echo "</tr>";
}
echo "</table>";

echo "<h2>Issued Books</h2>";
$sql2 = "select ib.issue_id, b.title, b.author, m.name, ib.issue_date
         from issued_books ib
         join books b on ib.book_id=b.book_id
         join members m on ib.member_id=m.member_id";
$result2=mysqli_query($conn,$sql2);
echo "<table border='1'>";
echo "<tr><th>Issue ID</th><th>Book</th><th>Author</th><th>Member</th><th>Date</th></tr>";
while($row=mysqli_fetch_array($result2)){
	echo "<tr>";
	echo "<td>$row[issue_id]</td>";
	echo "<td>$row[title]</td>";
	echo "<td>$row[author]</td>";
	echo "<td>$row[name]</td>";
	echo "<td>$row[issue_date]</td>";
	echo "</tr>";
}
echo "</table>";
echo "<a href='index.php'>Home</a>";
?>