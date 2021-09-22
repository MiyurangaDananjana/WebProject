<!DOCTYPE html>
<?php 
include "connection.php"


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"><h1>room</h1>
    <input name="name1"></input>
    <button name="insert">insert</button></form>
    

</body>

<?php
 if(isset($_POST["insert"]))
 {

    
    mysqli_query($link,"insert into login values(NULL,'$_POST[name1]')");
    echo "miyuranga";



 }
?>
</html>