<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <style>
        #mytable,tr{
            border:1px solid black;
        }
    </style>
    
</head>
<body>
    <h1>This is PHP Crud</h1>
    <table cellspacing="7px" id="mytable"><?php
        include "connection.php";
        $sql="Select * FROM studata";
        $result=mysqli_query($conn,$sql) or die("Query not run");  
        ?>
          
            
        <thead>
            <th>sr no.</th>
            <th>Name</th>
            <th>Address</th>
            <th>phone No. </th>
            <th>class</th>
            <td>oprations</td>
        </thead>
        <tbody>
                <?php 
                    while($row=mysqli_fetch_assoc($result)){

                   

                    
                    ?>
            <tr>
                <td>1</td>
                <td>Ainul</td>
                <td>50 bhavani</td>
                <td>9787565265 </td>
                <td>15</td>
                <td> 
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                 </td>
            </tr>
            <tr>
                <td><?php echo $row['sr'];?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['saddress'];?></td>
                <td><?php echo $row['sphone'];?> </td>
                <td><?php echo $row['sclass'];?></td>
                <td> 
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                 </td>
            </tr>
            <?php }?>
           
        </tbody>
       
       
    </table>
    
</body>
</html>