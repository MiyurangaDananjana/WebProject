<!DOCTYPE html>
<?php 
include "connection.php"


?>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Patient Detail</title>
    <link rel="stylesheet" type="text/css" href="froms.css"> 
    <link rel="stylesheet" type="text/css" href="bootstrap-datepicker.css"> 
    <script type="text/javascript" src="bootstrap-datepicker.js"></script>

<script>

$(function() {

$('.dates #date').datepicker({
  'format': 'yyyy-mm-dd',
  'autoclose': true
});


});


</script>


</head>
<body > 
<h2 >Patient Details</h2>     
<div class="container">
<div class="col-lg-4">
  

  <form action="" name="from1" method="post" class="form2" >
  
    
    <div class="form-group">
      <label for="name">Patient Full Name:</label>
      <input type="text" class="form-control input" id="name" placeholder="Enter full name" name="name">
    </div>


    <div class="form-group">
      <label for="age">Patient Age:</label>
      <input type="number" class="form-control input" id="age" placeholder="Enter Age" name="age">
    </div>


    <div class="form-group">
      <label for="pwd">Gender:</label>
      <select class="form-control input" id="gender" name="gender"   >
          <option value="Male">Male</option>
          <option value="Female">Female</option>
      </select>
    </div>

    <div class="form-group">
    <div class="dates" >
      <label>Addmission Date</label>
      <input type="text" class="form-control input" id="date" name="date" placeholder="YYYY-MM-DD" autocomplete="off" >
    </div>
    </div>
    
    <div class="form-group">
      <label for="c_number">Contact Number:</label>
      <input type="number" class="form-control input" id="c_number" placeholder="Enter Contact Number" name="c_number">
    </div>

    <div class="form-group">
      <label for="p_room">The Patient admitted room:</label>
      <input type="number" class="form-control input" id="a_room" placeholder="Enter room number" name="a_room">
    </div>
    
    <div class="form-group">
      <label for="p_room">The owner of the pattient:</label>
      <input type="text" class="form-control input" id="owner" placeholder="Enter room number" name="owner">
    </div>

    <div class="form-group">
      <label for="p_room">Address:</label>
      <input type="text" class="form-control inputaddress" id="address" placeholder="Enter Address" name="address">
    </div>

    
    
    <button type="submit" name="insert" class="btn btn-primary">Insert</button>
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    
    
<div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Addmission Date</th>
        <th>Contact Number</th>
        <th>admitted room</th>
        <th>owner of the pattient</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $res=mysqli_query($link,"select * from patient");
        while($row=mysqli_fetch_array($res))
        {
          echo "<tr>";

          echo "<td>"; echo $row ["id"];          echo "</td>";
          echo "<td>"; echo $row   ["age"];         echo "</td>";
          echo "<td>"; echo $row ["name"];         echo "</td>";     
          echo "<td>"; echo $row ["gender"];          echo "</td>";
          echo "<td>"; echo $row ["date"];          echo "</td>";
          echo "<td>"; echo $row ["c_number"];          echo "</td>";
          echo "<td>"; echo $row ["a_room"];          echo "</td>";
          echo "<td>"; echo $row  ["owner"];          echo "</td>";
          echo "<td>"; echo $row  ["address"];          echo "</td>";       
          echo "<td>";  ?><a href="delete.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-danger">Delete</button></a><?php         echo "</td>";
          echo "</tr>";

        }
      ?>
    </tbody>
  </table>
</div>
    
</div>
</div>
  </form>
</body>

<?php
 if(isset($_POST["insert"]))
 {

  mysqli_query($link,"insert into patient values(NULL,'$_POST[name]','$_POST[age]','$_POST[gender]','$_POST[date]','$_POST[c_number]','$_POST[a_room]','$_POST[owner]','$_POST[address]')");
 }

 if(isset($_POST["delete"]))
  {
    mysqli_query($link,"delete from patient where name='$_POST[name]'") or die(mysqli_error($link));

  }
?>
</html>