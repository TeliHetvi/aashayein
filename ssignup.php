<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"aashayein");
	$query = "INSERT INTO stable VALUES('$_POST[S_NAME]','$_POST[S_PASSWORD]','$_POST[S_CNO]','$_POST[S_CITY]','$_POST[S_ADDRESS]','$_POST[S_EMAIL]','$_POST[S_BDATE]','$_POST[S_GENDER]', '')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully......")
	window.location.href = "sc_general.php";
</script>