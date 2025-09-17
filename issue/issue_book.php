<?php
include '../db.php';
if(isset($_POST['submit'])) {
    	$book_id=$_POST['book_id'];
    	$member_id=$_POST['member_id'];
	$sql1="insert into issued_books(book_id, member_id) values('$book_id','$member_id')";
    	$res=mysqli_query($conn,$sql1);
    	if ($res) {
        	echo "<div class='msg'>Book issued!</div>";
    	}
}
$sql2="select* from books where book_id not in(select book_id from issued_books)";
$books=mysqli_query($conn,$sql2);
$sql3="select* from members";
$members=mysqli_query($conn,$sql3);
?>
<!DOCTYPE html>
<html>
<head>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
    }
    .container {
        background: #fff;
        margin-top: 50px;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        width: 400px;
        
    }
    h2 {
        margin-bottom: 20px;
        color: #333;
	text-align:center;
    }
    select, button {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
    }
    button {
        background: #28a745;
        color: white;
        font-weight: bold;
        cursor: pointer;
        border: none;
        transition: 0.3s;
    }
    button:hover {
        background: #218838;
    }
    a {
        display: inline-block;
        margin-top: 15px;
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }
    a:hover {
        text-decoration: underline;
    }
    .msg {
        background: #d4edda;
        color: #155724;
        padding: 10px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        margin-bottom: 15px;
        text-align: center;
    }
   #index {
	 text-align: center;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Issue Book</h2>
    <form method="post">
        Book:
        <select name="book_id" required>
            <option value="">-- Select Book --</option>
            <?php 
                while($b=mysqli_fetch_array($books)){
                    echo "<option value='$b[book_id]'>$b[title] ($b[author])</option>";
                } 
            ?>
        </select>
        Member:
        <select name="member_id" required>
            <option value="">-- Select Member --</option>
            <?php 
                while($m=mysqli_fetch_array($members)){
                    echo "<option value='$m[member_id]'>$m[name]</option>";
                }
            ?>
        </select>
        <button type="submit" name="submit">Issue</button>
    </form>
    <a href="../index.html" id="index">Home</a>
</div>
</body>
</html>