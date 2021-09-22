<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    
</head>
<body >
   

    <form action="Login.php" method="post">
        <h1>Hospital Management System</h1>
        <?php if (isset($_GET['error'])) 
        {
            ?>
            <p class='error'><?php echo $_GET['error'];?></p>
            <?php
        }
        ?>
        <label>User name</label> 
        <input type="text" name="uname" placeholder="Enter User Name">

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password">
        <button type="submit">Login</button>

         
        

    </form>
    
</body>
</html>