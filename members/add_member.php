<?php
include '../db.php';
if(isset($_POST['submit'])){
    	$name=$_POST['name'];
    	$email=$_POST['email'];
    	$phone=$_POST['phone'];
    	$sql2="insert into members(name,email,phone) values('$name','$email','$phone')";
	$res2=mysqli_query($conn,$sql2);
	if($res2) {
		echo "Member added! <a href='list_members.php'>View Members</a>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>add member</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        width: 350px;
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    input {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    button {
        width: 100%;
        background: #28a745;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    button:hover {
        background: #218838;
    }
    a {
        display: block;
        text-align: center;
        margin-top: 15px;
        text-decoration: none;
        color: #007bff;
    }
    a:hover {
        text-decoration: underline;
    }
    .msg {
        background: #d4edda;
        color: #155724;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        text-align: center;
    }
 </style>
</head>
<body>
<div class="container">
<h2>Add Member</h2>
<form method="POST">
    	Name:<input type="text" name="name" required><br>
    	Email:<input type="email" name="email"><br>
    	Phone:<input type="text" name="phone"><br>
    	<button type="submit"  name="submit">Add Member</button>
</form>
<a href="../index.html">Home</a>
</div>
</body>
</html>
