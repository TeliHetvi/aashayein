<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"aashayein");
	$query = "INSERT INTO dtable VALUES('$_POST[D_NAME]','$_POST[D_PASSWORD]','$_POST[D_CNO]','$_POST[D_CITY]','$_POST[D_ADDRESS]','$_POST[D_EMAIL]','$_POST[D_GENDER]', '')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully......")
	window.location.href = "d_general.php";
</script>