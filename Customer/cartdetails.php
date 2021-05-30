<?php
$con = mysqli_connect("localhost","root","","babycare");					 
if($con)
{
       echo "Connected to Database";
}
else
{
   die("Connection Error!");
}
if(isset($_POST['subm']))
{
   $sql="SELECT * from `babyitems` WHERE username='$_POST[username]'";
   $res=mysqli_query($con,$sql);
   if($res)
   {
   $row = mysqli_fetch_assoc($res);
   echo "<table >";
         echo "<tr>";
         echo"<th>";
            echo "Username";
         echo "</th>"; 

        echo"<th>";
            echo "Shampoo";
        echo "</th>";
      
        echo"<th>";
            echo "Cream";
        echo "</th>"; 

        echo"<th>";
            echo "Kajal";
        echo "</th>"; 
            
        echo"<th>";
            echo "Powder";
        echo "</th>"; 

        echo"<th>";
            echo "Diaper";
        echo "</th>"; 

        echo"<th>";
            echo "Oil Bottles";
        echo "</th>"; 

        echo"</tr>";

        echo "<tr>";
             echo "<td>";
                echo $row['username'];
             echo "</td>";

             echo "<td>";
                echo $row['shampoo'];
             echo "</td>";

             echo "<td>";
                echo $row['cream'];
             echo "</td>";

             echo "<td>";
                echo $row['kajal'];
             echo "</td>";

             echo "<td>";
                echo $row['powder'];
             echo "</td>";

             echo "<td>";
                echo $row['diaper'];
             echo "</td>";

             echo "<td>";
                echo $row['oil'];
             echo "</td>";
        echo"</tr>";
   echo "</table>";
   }
   else{
       ?>
       <script type = "text/javascript">
           alert("Please Enter a Valid Username");
       </script>
       <?php
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form action ="cartdetails.php" method="post" style="background-color:pink; border-radius: 2px solid-red;">
    <br/>
    <br/>
    <input type="text" style="margin-left:500px; width:300px;"placeholder="Enter the Username!!!...." name="username" required="true"/>
    <br/>
    <br/>
    <button type="submit" style="margin-left:600px;" class="btn btn-success" name="subm">See</button>
    <br/>
    <br/>
</form>
</body>
</html>

