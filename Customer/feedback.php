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
           $sql="INSERT INTO `feedback`VALUES ('$_POST[username]','$_POST[feed]')";
            if (mysqli_query($con, $sql))
            {
               ?>
               <script type="text/javascript">
                    alert("Feedback Given by You Thanks!!!...."); 
                </script>
               <?php
            }
            else{
            ?>
                <script type="text/javascript">
                    alert("Unable to get the Feedback!!!...."); 
                </script>
            <?php
            }
        }
        mysqli_close($con);
        ?>
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



                            </div>
                            
                            <br/>
                           <form action="feedback.php" method="post">
                            <br/>
                               <br/>
                               <br/>
                                <div id="feed" style="height:400px; width:800px; margin-left:auto; margin-right:auto; background-color:aqua">
                                    <br/>
                                    <h3 style="text-align: center;">Give your Feedback....</h3>
                               <br/>
                               <br/>
                                    <input type="text" name ="username" class="form-control" placeholder="Enter the username..." id="u">
                                    <br/>
                                    <input type="message" name = "feed" class="form-control" placeholder="Enter your feedback..." id="f">
                                    <br/>
                                    <br/>
                                    <button value="ADDFEEDBACK" name ="subm" class="btn btn-success" style="margin-left: 300px;">ADD FEEDBACK</button>
                                </div>
                           </form>

                            <br/>
                           
                            
							<div class = "footer">
        
								<a href='feedback.php'>Feedback</a>
									<a href='copyright.php'>Copyright</a>
									<a href='address.php'>Address</a>
							</div>
                           
	
						</body>

						</html>
		
