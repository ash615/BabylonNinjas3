
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
    <br/>

        
        
        <form action="login.php" method="post" style="height: 500px; background-color:yellowgreen;">
            <h1 style="text-align: center;">Login Here!!!....</h1>
            <br/>
            <br/>
        <div style="height:300px; width:600px; background-color:yellow; margin-left: 400px;">
            <br/>
            <br/>
        <input class = "form-control" style="width:500px;" type="text" name="username"  placeholder="Enter the User Name..." required=""/>
        <br/>
        <input class = "form-control" style="width:500px;" type="password" name="pass"  placeholder="Enter the Password..." required=""/>
        <br/>
            <button type="submit" name = "signin" style="margin-left: 200px;">LOGIN</button>
            <button type="reset" name = "res">RESET</button>
            <br/>
            <br/>
            <a href="signup.php" style="margin-left: 200px;"> New User? Sign Up Here!!!<a>
            </div> 
            </form>

           

        
    </div>
    

    <br/>
    <br/>

    <?php
         if(isset($_POST['signin']))
         {
             session_start();
             echo $_SESSION["user"];
             echo $_SESSION["password"];
             echo $_POST["username"];
             echo $_SESSION["pass"];
             if(($_SESSION["user"]==$_POST['username']) && ($_SESSION["password"]==$_POST['pass']))
             {
                echo"login Successful";
                ?>
                <script type = "text/javascript">
                     alert("Login done Successfully!!!....");
                     window.location.assign("babycare.php");
                </script>
                <?php
             }
             else{
                 ?>
                  <script type = "text/javascript">
                     alert("Please Enter Correct Username & Password and Try Again!!!....");
                     //window.location.assign("babycare.php");
                </script>
                 <?php
             }
         }
    ?>

    <div class = "footer">
    
            <a href='copyright.php'>Copyright</a>
            <a href='address.php'>Address</a>
    </div>
    
</body>
</html>