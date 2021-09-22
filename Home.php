<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="Hstylesheet.css"> 
</head>
<body class="Hbody">
    
    <?php
        if(isset($_POST['btn-pdetail'])){
            header("Location: PDetail.php");
        }
        if(isset($_POST['btn-room'])){
            header("Location: Room.php");
        }
        if(isset($_POST['btn-doc'])){
            header("Location: Doc.php");
        }
        if(isset($_POST['btn-ors'])){
            header("Location: ORS.php");
        }
        if(isset($_POST['btn-pinvoice'])){
            header("Location: Pinvoice.php");
        }
        

    ?>
    
    
    
    <form class="Hform" method="post" >
    <button name="btn-pdetail" class="button button1"  >Patient Detail</button>
    <button name="btn-room" class="button button1">Room Availability </button>
    <button name="btn-doc" class="button button1">Doctor Detail</button>
    <button name="btn-ors" class="button button1">Operating room schedules</button>
    <button name="btn-pinvoice" class="button button1">Patient invoices</button>
    </form>

    
    
</body>
</html>