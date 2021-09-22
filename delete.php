<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from patient where id=$id");
?>
<script type="text/javascript">
window.location = "PDetail.php";

</script>