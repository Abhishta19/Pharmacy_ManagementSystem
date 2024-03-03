<?php
 require 'dbconfig/db.php';
 session_start();
 $name = $_SESSION['name'];
 echo "$name";
 $query="SELECT s_id FROM staff u WHERE u.name='$name'";
 $query_run = mysqli_query($con , $query);
 while ($row = $query_run->fetch_assoc()) {
     echo "Your Registration ID is:";
     echo $row['s_id']."<br>";
     $s_id = $row['s_id'] ;
 }
         $_SESSION['s_id'] = $s_id;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <h1><center>Pharmacy DashBoard</center></h1>
    <div class="add">
        <img src="https://static.vecteezy.com/system/resources/previews/000/362/094/original/add-user-vector-icon.jpg" alt="no image">
        <h2><a href="medicinedashboard.php">Medicines</a></h2>
    </div>
    <div class="profile">
        <img src="https://th.bing.com/th/id/OIP.8pQGc1uvCGFkeniunEv1rwHaHa?w=214&h=214&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="no image">
        <h2><a href="cdashboard.php">Purchase</a></h2>
    </div>
    <div class="logout">
        <img src="https://th.bing.com/th/id/OIP.sRIWGKwKRU0VtPzA4bjEEwHaHa?w=192&h=192&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        <h2><a href="sdashboard.php">Sales</a></h2>
    </div>
    <div class="update">
        <img src="https://th.bing.com/th/id/OIP.O5fS4VUEkFOLfpZhFrcYVQHaHa?w=171&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        <h2><a href="#">Stock</a></h2>
    </div>
    <div class="exit">
        <img src="https://th.bing.com/th/id/OIP.LjB4EzUEhlFn5IU9HZzhFQHaHa?w=169&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        <h2><a href="#">Staff</a></h2>
    </div>
    <div class="view">
        <img src="https://th.bing.com/th/id/OIP.iStkfVjLqK2PvWvjBk7XrwHaHa?w=168&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
        <h2><a href="viewuser.php">Logout</a></h2>
    </div>
</body>
</html>
