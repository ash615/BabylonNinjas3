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
								<a href='diseases.php'>Diseases</a>
								<a href='Vaccination.php'>Vaccination</a>
								<a href='foodnutrition.php'>Food & Nutrition</a>
								<a href='logout.php'>Logout</a>
s

							</div>


							<div id="h" style="">

			

							<div id="main" style="background-color: purple;">

							<br/>
							<br/>
	
						        <div id ="dv1" style="margin-left:550px;">
						            <img src ="baby_shampoo.jpg" alt = "No Image Found"> <br/>
						                <b style="color:white;">BABY SHAMPOO</b>
						                
						                    <br/>
								</div>
								<br/>
								<br/>
								<br/>
						         &nbsp;
								 <div id ="dv1" style="margin-left:550px;">
						            <img src = "baby_cream.jpg" alt = "No Image Found"> <br/>
						                <b style="color:white;">BABY CREAM</b>
						                   
						                    <br/>
								</div>

                                <br/>
								<br/>
								<br/>


								<div id ="dv1" style="margin-left:550px;">
						            <img src = "baby_powder.jpg" alt = "No Image Found"> <br/>
						                <b style="color:white;">BABY POWDER</b>
						            
						                    <br/>
								</div>

								<br/>
								<br/>
								<br/>

								<div id ="dv1" style="margin-left:550px;">
						            <img src = "baby_kajalapply.jpg" alt = "No Image Found" style="height:200px; width:400px;"> <br/>
						                <b style="color:white;">BABY KAJAL</b>
						                
						                    <br/>
								</div>
								<br/>

                                <br/>
								<br/>
								<br/>

								<div id ="dv1" style="margin-left:550px;">
						            <img src = "baby_diaper.jpg" alt = "No Image Found"> <br/>
						                <b style="color:white;">BABY DIAPER PANTS</b>
						                    
						                    <br/>
								</div>
								<br/>
								<br/>
								<br/>

								<div id ="dv1" style="margin-left:550px;">
						            <img src = "baby_iol.jpg" alt = "No Image Found"> <br/>
						                <b style="color:white;">BABY OIL</b>
						                   
						                    <br/>
								</div>
								<br/>
								<br/>
								<br/>
							
							

							<div id ="hh1" style="background-color:green; border-radius:10px; height:600px; width:980px; margin-left: 200px;">
							<h2 style="color: red; text-align:center;">Enter to buy product quantity here(in Numbers)</h2> 
							<form action="babycare.php" method="post" default="false">
							 
							<br/>
							<br/>
							<input class = "form-control" type="text" name="username"  placeholder="Enter Username:" required=""/>
							<br/>
							
							<input class = "form-control" type="text" name="shampoo"  placeholder="Enter no of Shampoo Bottles:" required=""/>
							<br/>
							<input class = "form-control" type="text" name="cream"  placeholder="Enter no of Creams:" required=""/>
							<br/>
							<input class = "form-control" type="text" name="powder"  placeholder="Enter no of Powder:" required=""/>
							<br/>
							<input class = "form-control" type="text" name="kajal"  placeholder="Enter no of Kajal Packs:" id="uu1" required=""/>
							<br/>
							<input class = "form-control" type="text" name="diaper"  placeholder="Enter no of Diaper Pants:" id="uu1" required=""/>
							<br/>
							<input class = "form-control" type="text" name="oil" placeholder="Enter no of Oil Bottles:" id="uu1" required=""/>
							<br/>
							
								<button type="submit" name="putitems" style="margin-left:350px;" class="btn btn-success">SUBMIT</button>  
								</form>
								<form action="cartdetails.php" method="post">
								    <button type="submit" name = "cartt" style="margin-left:100px;" class="btn btn-danger">CART DETAILS</button>       
                                </form>
						
								
							</div>							


						
						</div>
						
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

    if(isset($_POST['putitems']))
    {
        $sql="INSERT INTO `babyitems` VALUES ('$_POST[username]','$_POST[shampoo]','$_POST[cream]','$_POST[powder]','$_POST[kajal]','$_POST[diaper]','$_POST[oil]')";
	    if (mysqli_query($con, $sql)) {
			echo "Items inserted successfully";
			mysqli_query($con, "UPDATE `babyitemadmin` SET shampoo=shampoo-$_POST[shampoo],cream=cream-$_POST[cream],powder=powder-$_POST[powder],kajal=kajal-$_POST[kajal],diaper=diaper-$_POST[diaper],oil = oil-$_POST[oil] WHERE username='admin'");
		    ?>
			    <script type="text/javascript">
		            alert("Items Placed Successfully Enable Google Location for your Address fetch!!!...."); 
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
     mysqli_close($con);
     
     ?>

                    


                          
							<div class = "footer">
        
								<a href='feedback.php'>Feedback</a>
									<a href='copyright.php'>Copyright</a>
									<a href='address.php'>Address</a>
							</div>
							
							
	
</body>

</html>
		



 

