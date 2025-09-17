<?php
include '../db.php';
if(isset($_POST['submit'])) {
    	$id=$_POST['member_id'];
    	$name=$_POST['name'];
    	$email=$_POST['email'];
    	$phone=$_POST['phone'];
	$sql="update members set name='$name',email='$email',phone='$phone' where member_id='$id'";
	$res=mysqli_query($conn,$sql);
    	if($res) {
        	echo "Member updated!";
   	}
}
?>
<!DOCTYPE html>
<html>
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
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        text-align: center;
        width: 350px;
    }
    h2 {
        margin-bottom: 20px;
        color: #333;
    }
    input, button {
        width: 90%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }
    button {
        background: #007bff;
        color: white;
        font-weight: bold;
        cursor: pointer;
        border: none;
    }
    button:hover {
        background: #0056b3;
    }
    a {
        display: block;
        margin-top: 15px;
        text-decoration: none;
        color: #007bff;
    }
    a:hover {
        text-decoration: underline;
    }
    .msg {
        background: #28a745;
        color: white;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="container">
<h2>Update Member</h2>
<form method="post">
    <input type="number" name="member_id" placeholder="Member ID" required>
    <input type="text" name="name" placeholder=" Name" required>
    <input type="email" name="email" placeholder=" Email" required>
    <input type="text" name="phone" placeholder=" Phone" required>
    <button type="submit" name="submit">Update</button>
</form>
<a href="../index.html">Home</a>
</div>
</body>
</html>