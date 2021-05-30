

<html>
						<head>
							<link rel="stylesheet" href="navbar.css"/>
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
						<title></title>
						</head>
						<body >

							<div class = "navbar">
								<a href='babycare.php'>Baby Care Products</a>
								<a href='addproducts.php'>Add Products</a>
								<a href='deleteproducts.php'>Delete Products</a>
								<a href='logout.php'>Logout</a>


							</div>



                    

							<br/>
							<br/>
							<br/>
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
   $sql="SELECT * from `babyitemadmin` WHERE username='admin'";
   $res=mysqli_query($con,$sql);
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
            echo "Powder";
        echo "</th>"; 
            
        echo"<th>";
            echo "Kajal";
		echo "</th>"; 
		
		echo"<th>";
            echo "Diaper Pants";
		echo "</th>"; 
		
		echo"<th>";
            echo "Oil Bottles";
        echo "</th>"; 
     echo "</tr>";

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
                echo $row['powder'];
             echo "</td>";

             echo "<td>";
                echo $row['kajal'];
             echo "</td>";
			 echo"&nbsp;";
			 echo "<td>";
                echo $row['diaper'];
             echo "</td>";

			 echo "<td>";
                echo $row['oil'];
             echo "</td>";

        echo"</tr>";
   echo "</table>";


?>

<br/>
<br/>
<br/>


							<div class = "footer">
        
								
								
							</div>
							
							
	
						</body>

						</html>
		



 

