

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css"/>
    <title>Document</title>
</head>
<body bgcolor="pink">
    

    <div class = "navbar">
        
        <a href='login.php'>Login</a>
        <a href='signup.php'>Sign Up</a>
        <a href='navbar.php'>Home</a>
    </div>


    <br/>
    <br/>
    <br/>
        
        
        <form action="signup.php" method="post" style="height: 500px; background-color: red;">
            <h1 style="text-align: center;">Register Here!!!....</h1>
            <br/>
            <br/>
        <input class = "form-control" type="text" name="first"  placeholder="Enter the First Name..." required=""/>
        <br/>
        <input class = "form-control" type="text" name="last"  placeholder="Enter the Last Name..." required=""/>
        <br/>
        <input class = "form-control" type="text" name="username"  placeholder="Enter the User Name..." required=""/>
        <br/>
        <input class = "form-control" type="password" name="pass"  placeholder="Enter the Password..." required=""/>
        <br/>
        <input class = "form-control" type="text" name="contact"  placeholder="Enter the Contact Number..." required=""/>
        <br/>
            <button type="submit" name = "sign" style="margin-left: 400px;">SIGN UP</button>
            <button type="reset" name = "res" style="margin-left: 450px;">RESET</button>
            <br/>
            <br/>
            <a href="login.php" style="margin-left: 550px; background-color: seashell;"> Already Registered? Login Here!!!<a>
            </form>

        
    </div>
    

    <br/>
    <br/>

    <div class = "footer">
        
            <a href='copyright.php'>Copyright</a>
            <a href='address.php'>Address</a>
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

     if(isset($_POST['sign']))
     {
         $sql="INSERT INTO `register` VALUES ('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[pass]','$_POST[contact]')";
         if (mysqli_query($con, $sql)) {
            echo "New record created successfully";
            session_start();
            $_SESSION["user"]=$_POST['username'];
            $_SESSION["password"]=$_POST['pass'];
            echo $_SESSION["user"];
            echo $_SESSION["password"];
        ?>

        <script type="text/javascript">
              alert("Registration Successful!!!....");
        </script>
            <?php
         }
            else{
                ?>

        <script type="text/javascript">
              alert("Username Already Exists!!!....");
        </script>
            <?php

            }

      }
     mysqli_close($con);
     
     ?>
</body>
</html>