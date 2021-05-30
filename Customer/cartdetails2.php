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
   $sql="SELECT * from `foodnutrition` WHERE username='$_POST[username]'";
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
            echo "Foodname";
        echo "</th>";
      
        echo"<th>";
            echo "Quantity";
        echo "</th>"; 

        echo"<th>";
            echo "No of Packs";
        echo "</th>"; 
            
        echo"<th>";
            echo "Child Age";
        echo "</th>"; 
     echo "</tr>";

        echo "<tr>";
             echo "<td>";
                echo $row['username'];
             echo "</td>";

             echo "<td>";
                echo $row['foodname'];
             echo "</td>";

             echo "<td>";
                echo $row['quantity'];
             echo "</td>";

             echo "<td>";
                echo $row['noofpacks'];
             echo "</td>";

             echo "<td>";
                echo $row['childage'];
             echo "</td>";

        echo"</tr>";
   echo "</table>";
   }
   else
   {
       ?>
       <script type ="text/javascript">
            alert("Please Enter the Correct Username!!!....");
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
    <form action ="cartdetails2.php" method="post" style="background-color:pink; border-radius: 2px solid-red;">
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

