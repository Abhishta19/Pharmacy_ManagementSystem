<?php
    require 'dbconfig/db.php'
?>
<html>
    <head>
        <title>View Medicine</title>
        <link rel="stylesheet" href="viewuser.css">
    </head>
        <body>
            <h3>VIEW MEDICINES</h3>
            <table>
                <thead>
                    <tr>
                        <th>Medicine_id</th>
                        <th>Medicine name</th>
                        <th>Category_name</th>
                        <th>Mfd_date</th>
                        <th>Expiry_date</th>
                        <th>Mrp</th>
                        <th>Quantity</th>
                        
                    </tr>
                </thead>

<?php
$sql="Select medicine_id,medicine_name,category_name,mfd_date,expiry_date,mrp,quantity from medicine";
$result=$con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      echo"<tr><td>".$row["medicine_id"]."</td><td>".$row["medicine_name"]."</td><td>".$row["category_name"]."</td><td>".$row["mfd_date"]."</td><td>".$row["expiry_date"]."</td><td>".$row["mrp"]."</td><td>".$row["quantity"]."</td></tr>";
        
    }
    echo"</table>";
}
else{
    echo"no rows";
}?>
         
        </body>
</html>
