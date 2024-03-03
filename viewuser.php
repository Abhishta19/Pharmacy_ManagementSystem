<?php
    require 'dbconfig/db.php'
?>
<html>
    <head>
        <title>View User</title>
        <link rel="stylesheet" href="viewuser.css">
    </head>
        <body>
            <h3>VIEW USER</h3>
            <table>
                <thead>
                    <tr>
                        <th>S_id</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Phone</th>
                        <th>Dob</th>
                        <th>Role</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
<?php
$sql="Select s_id,name,sal,phone,dob,role,email,password from staff";
$result=$con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row["s_id"]."</td><td>".$row["name"]."</td><td>".$row["sal"]."</td><td>".$row["phone"]."</td><td>".$row["dob"]."</td><td>".$row["role"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo"</table>";
}
else{
    echo"no rows";
}?>
         
        </body>
</html>
