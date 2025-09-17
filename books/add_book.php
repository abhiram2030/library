<?php
include '../db.php';
if(isset($_POST['submit'])) {
 $title=$_POST['title'];
 $author=$_POST['author'];
 $sql="insert into books(title, author) values('$title','$author')";
 $res=mysqli_query($conn,$sql);
 if($res) {
   echo "<div class='msg'>Book added successfully! <a href='list_books.php'>View Books</a></div>";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Add Book</title>
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
<h2>Add Book</h2>
<form method="POST">
    Title: <input type="text" name="title" required><br>
    Author: <input type="text" name="author" required><br>
    <button type="submit" name="submit">Add Book</button>
</form>
<a href="../index.html">Home</a>
</div>
</body>
</html>