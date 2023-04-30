<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"aashayein");
	$query = "INSERT INTO vtable VALUES('$_POST[V_NAME]','$_POST[V_PASSWORD]','$_POST[V_CNO]','$_POST[V_CITY]','$_POST[V_ADDRESS]','$_POST[V_EMAIL]','$_POST[V_BDATE]','$_POST[V_GENDER]','$_POST[V_QUALIFICATION]','$_POST[V_ATIME]','$_POST[V_ADAY]','')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully......")
	window.location.href = "v_general.php";
</script>