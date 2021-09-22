<?php
$link=mysqli_connect("localhost","root","")or die(mysqli_error($link));
mysqli_select_db($link,"pet_m_s")or die(mysqli_error($link));
?>