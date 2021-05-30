<html>
						<head>
							<link rel="stylesheet" href="navbar.css"/>
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
						<title>Add Products Page (Admin Side)</title>
						</head>
						<body style="background-color:aqua;">

							<div class = "navbar">
								<a href='babycare.php'>Baby Care Products</a>
								<a href='addproducts.php'>Add Products</a>
								<a href='deleteproducts.php'>Delete Products</a>
								<a href='logout.php'>Logout</a>



							</div>
							<br/>
							<h3 style="color: red; text-align:center;">Hello Admin! Delete the Baby Care Items Here!!!....</h3>
							<br/>
                            <div id ="hh1" style="background-color:yellow; height:500px; width:980px; margin-left: 200px;">
							 

							<form action="deleteproducts.php" method="post">
								
							<br/>
							<br/>
							<input class = "form-control" type="text" name="shampoo"  placeholder="Enter no of Shampoo Bottles to remove:" required=""/>
							<br/>
							<input class = "form-control" type="text" name="cream"  placeholder="Enter no of Creams to remove:" required=""/>
							<br/>
							<input class = "form-control" type="text" name="powder"  placeholder="Enter no of Powder to remove:" required=""/>
							<br/>
							<input class = "form-control" type="text" name="kajal"  placeholder="Enter no of Kajal Packs to remove:" id="uu1" required=""/>
							<br/>
							<input class = "form-control" type="text" name="diaper"  placeholder="Enter no of Diaper Pants to remove:" id="uu1" required=""/>
							<br/>
							<input class = "form-control" type="text" name="oil" placeholder="Enter no of Oil Bottles to remove:" id="uu1" required=""/>
							<br/>
							
								<button type="submit" class="btn btn-success" style="margin-left:350px;" name = "putitems" >SUBMIT</button>

								<button type="reset" class="btn btn-primary" style="margin-left:100px;" >RESET</button>
                                 
							    </form>

								
								
							</div>							



                            <br/>
                            <br/>
                            <br/>
                            
							<div class = "footer">
        
								
							</div>
                           
	
						</body>



						<?php
                            $con = mysqli_connect("localhost","root","","babycare");					 
							if($con)
                             {
			                    echo "Connected to Database";
                                if(isset($_POST['putitems']))
                                {
		
		                            $sql = "UPDATE `babyitemadmin` SET shampoo=shampoo-$_POST[shampoo],cream=cream-$_POST[cream],powder=powder-$_POST[powder],kajal=kajal-$_POST[kajal],diaper=diaper-$_POST[diaper],oil = oil-$_POST[oil] WHERE username='admin'";
                                    if (mysqli_query($con, $sql)) {
										?>
										<script type="text/javascript">
		                                alert("Items Deleted Successfullyfrom the Database!!!...."); 
									</script>
									<?php
	                            }
	                            else{
		                        ?>
		                            <script type="text/javascript">
		                                alert("Unable to Delete the Items!!!...."); 
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

</html>
		
