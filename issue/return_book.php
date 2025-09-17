<?php
include '../db.php';
if(isset($_POST['submit'])) {
    	$issue_id=$_POST['issue_id'];
    	$sql1="delete from issued_books where issue_id='$issue_id'";
	mysqli_query($conn,$sql1);
    	echo "<div class='msg'>Book returned!</div>";
	}
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
     input, button {
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
<h2>Return Book</h2>
<form method="post">
    <input type="number" name="issue_id" placeholder="Issue ID" required>
    <button type="submit" name="submit">Return</button>
</form>
<a href="../index.html">Home</a>
</div>
</body>
</html>