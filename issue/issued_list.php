<link rel="stylesheet" href="../css/style.css">
<?php
include '../db.php';
$sql="select ib.issue_id, b.title, m.name, ib.issue_date 
        from issued_books ib
        join books b on ib.book_id=b.book_id
        join members m on ib.member_id=m.member_id";
$result=mysqli_query($conn,$sql);
echo "<h2>Issued Books</h2>";
echo "<table border='1'>";
echo "<tr><th>Issue ID</th><th>Book</th><th>Member</th><th>Date</th></tr>";
while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>$row[issue_id]</td>";
	echo "<td>$row[title]</td>";
	echo "<td>$row[name]</td>";
	echo "<td>$row[issue_date]</td>";
	echo "</tr>";
}
echo "</table>";
echo "<a href='../index.php'>Home</a>";
?>