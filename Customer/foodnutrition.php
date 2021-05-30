<html>
						<head>
							<link rel="stylesheet" href="navbar.css"/>
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
						<title></title>
						</head>
						<body style="background-color:violet;">

							<div class = "navbar">
								<a href='babycare.php'>Baby Care Products</a>
								<a href='diseases.php'>Diseases</a>
								<a href='Vaccination.php'>Vaccination</a>
								<a href='foodnutrition.php'>Food & Nutrition</a>
								<a href='logout.php'>Logout</a>


                            </div>

                            <br/>
                                <h3 style="color:orange; text-align:center;">Buy the Food & Nutrition from Here!!!....</h3>
                            <br/>
                            <div id ="hh1" style="background-color:yellow; height:500px; width:980px; margin-left: 200px;">
						         
                                <form action="foodnutrition.php" method="post">
                                 <br/>
                                 <br/>
                                <input class = "form-control" type="text" name="username"  placeholder="Enter the Username..." required=""/>
                                <br/>
                                <input class = "form-control" type="text" name="foodname"  placeholder="Enter Food Name..." required=""/>
                                <br/>
                                <input class = "form-control" type="text" name="quantity"  placeholder="Enter the Quantity..." required=""/>
                                <br/>
                                <input class = "form-control" type="text" name="noofpacks"  placeholder="Enter no of Packs..." id="uu1" required=""/>
                                <br/>
                                <input class = "form-control" type="text" name="childage"  placeholder="Enter Age of Child..." id="uu1" required=""/>
                                <br/>
                                
                                    <button type="submit" name = "subm"  style="margin-left:350px;" class="btn btn-danger">SUBMIT</button>
                

                                    </form>
    
                                <form action="cartdetails2.php" method="post">
								    <button type="submit" name = "cartt" style="margin-left:100px;" class="btn btn-success">CART DETAILS</button>       
                                </form>
                                    
                                </div>							
    

                            
                            <?php
    
    
         $con = mysqli_connect("localhost","root","","babycare");					 
                                if($con)
         {
                echo "Connected to Database";
         if(isset($_POST['subm']))
         {
            $sql="INSERT INTO `foodnutrition`VALUES ('$_POST[username]','$_POST[foodname]','$_POST[quantity]','$_POST[noofpacks]','$_POST[childage]')";
             if (mysqli_query($con, $sql)) {
                echo "Items inserted successfully";
                ?>
              <script type="text/javascript">
                    alert("Food & Nutrition Items Successfully Placed in the Cart Enable Google Location for Address!!!...."); 
                </script>
              <?php
          
            }
          else{
              ?>
              <script type="text/javascript">
                    alert("Unable to put Items in the Cart!!!...."); 
                </script>
              <?php
          }
    
         }
        }
        else
    {
     die("Connection Error!");
    }
    
         mysqli_close($con);
         
         ?>
    
                        
    
    
                              
                                <div class = "footer">
            
                                    <a href='feedback.php'>Feedback</a>
                                        <a href='copyright.php'>Copyright</a>
                                        <a href='address.php'>Address</a>
                                </div>
                                
                                
        
    </body>
    
    </html>
            
    
    
    