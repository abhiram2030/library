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
echo "<a href='../index.html' id='index'>Home</a>";
?>
<!DOCTYPE html>
<html>
<head>
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
    #index {
        display: inline-block;
        margin-top: 15px;
        background: #28a745;
        color: white;
    }
</style>
</head>
</html>