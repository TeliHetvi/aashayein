<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background: #989898;
}
.content {
  max-width: 1000px;
  margin: auto;
  background: white;
   position: relative;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.9);
     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9);
}

.bg-img {
  /* The image used */
  background-image: url("d1.webp");

  min-height: 800px;
	
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: auto;
  background-attachment: fixed;
}
.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.content img {vertical-align: middle;}

.content .contents {
  position: absolute;
  bottom: 200px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 70%;
  padding: 20px;
  margin: 5px 130px
}
table, th, td {
  border: 5px solid white;
}
table.center {
  margin-left: auto;
  margin-right: auto;
}
button {
  background-color: A52A2A;
  color: white;
  padding: 14px 20px;
  margin: 5px 250px;
  border: none;
  cursor: pointer;
  width: 30%;
  text-align: center;
   bottom: 150px;
}
</style>
</head>
<body>
<div class="content">

<div class="bg-img">
	<div class="contents"> 
		<h1 style="color:white; text-align:center; font-size:400%;">  Help Now</h1>
		<h2 style="color:#ffdab9; text-align:center; font-size:150%;"> List of Senior citizen</h2>
		<p> </p>
		<?php
	$username="root";
	$password="";
	$dbname="aashayein";
	$cnn=new mysqli("localhost",$username,$password,$dbname);
	$sql="SELECT * FROM stable";
	echo '<table class="center" style="color:white;"  cellspacing="8" cellpadding="8">
	<tr>
		<td><font face="Arial">name</td>
		<td><font face="Arial">Gender</td>
		<td><font face="Arial">contact no.</td>
        
		<td><font face="Arial">city</td>
        
		
		
	</tr>';
	if($result=$cnn->query($sql))
	{
		while($row=$result->fetch_assoc())
		{
			$name=$row["S_NAME"];
			$gender=$row["S_GENDER"];
			$cno=$row["S_CNO"];
        
			$city=$row["S_CITY"];
			
			echo '<tr>
				<td>'.$name.'</td>
				<td>'.$gender.'</td>
				<td>'.$cno.'</td>
                
				<td>'.$city.'</td>
			 </tr>';
	    }
	$result->free();
	$cnn->close();
}
?>
</table>
<form action="aashayein.php" method="post">
		</br></br><button>Done</button>
	</form>
</div>
	
</div>
</div>	
</body>
</html>