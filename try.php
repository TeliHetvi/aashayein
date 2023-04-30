<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="try.css" type="text/css">
</head>
<body>
	<div class="content">
		<div style="text-align:center">
			<h1 style="color:darkblue  ; text-align:center; font-size:400%;">Welcome to the AASHAYEIN</h1>
			<p style="color:gray; text-align:center; font-size:200%;"><u>Join our Website</u></p>
		</div>
		
	
	<!-- The App Section -->
	<div class="container-join_us">
		<div class="row">
			<div class="column-66">
				<h1 class="xlarge-font"><b>Senior Citizen</b></h1>
				<h1  style="color:red;"><b>Login or SignUp as a Senior Citizen</b></h1>
				<button onclick="document.getElementById('id04').style.display='block'" style="width:17%;">Login</button>
				<div id="id04" class="modal">
				<form class="modal-lo animate" action="slogin.php" method="post">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
						<img src="ab.jpg" alt="ul" class="SC4">
					</div>

					<div class="container-login">
						<label for="S_NAME"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="S_NAME" required>

						<label for="S_PASSWORD"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="S_PASSWORD" required>
	  
						<button type="submit">Login</button>
						<button type="button" onclick="document.getElementById('id05').style.display='block'">forgot pasword</button>
		 
						<label>
							<input type="checkbox" checked="checked" name="remember"> Remember me
						</label>
					</div>

					<div class="container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
				<div id="id05" class="modal">
					<div class="container-login">
						<form class="modal-lo animate" action="sc_general.php" method="post">
	
							<div class="imgcontainer">
								<span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
								<h1>Set New Password</h1>
							</div>
							<input type="password"  name="newpassword" placeholder="New Password" required=""/><br/>
								<input type="password"  name="confirmpassword" placeholder="Confirm New Password" required=""/><br/>
								<button type="submit">Submit</button>
						</form>
					</div>
				</div>
				</div>
				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SIGN UP</button>

				<div id="id01" class="modal">
  
					<form class="modal-sc animate" action="ssignup.php" method="post">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
							<img src="SC4.jpg" alt="SC4" class="SC4">
						</div>

						<div class="container-login">
							<label for="S_NAME"><b>Full Name</b></label>
							<input type="text" placeholder="Enter full name" name="S_NAME" required></br>

							<label for="S_PASSWORD"><b>Password</b></label>
							<input type="password" placeholder="SET Password" name="S_PASSWORD" required></br>
	  
							<label for="S_CNO"><b>Contact Number</b></label>
							<input type="text" placeholder="CONTACT NUMBER" name="S_CNO" required></br>
	  
							<label for="S_CITY"><b>City</b></label>
							<input type="text" placeholder="CITY" name="S_CITY" required></br>
	  
							<label for="S_ADDRESS"><b>Address</b></label>
							<input type="text" placeholder="ADDRESS" name="S_ADDRESS" required></br>
	  
							<label for="S_EMAIL"><b>E-mail id</b></label>
							<input type="email" placeholder="EMAIL ID" name="S_EMAIL" required></br>
	  
							<label for="S_BDATE"><b>Date of Birth</b></label>
							<input type="date" placeholder="BIRTH DATE" name="S_BDATE" required></br>
	  
							<label for="S_GENDER"><b>Gender</b></label>
							<input type="radio" name="S_GENDER" value="Male">Male
							<input type="radio" name="S_GENDER" value="female">Female
							<input type="radio" name="S_GENDER" value="other">other</br>
        
							<button type="submit">SIGN UP</button>
							<label>
								<input type="checkbox" checked="checked" name="remember"> Remember me
							</label>
						</div>

						<div class="container-login" style="background-color:#f1f1f1">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						</div>
					</form>
				</div>
			</div>
			<div class="column-33">
					<img src="gp_b.jpg" class="join" >
			</div>
		</div>
	</div>
	<!-- Clarity Section -->
	<div class="container-join_us" style="background-color:#ffdab9">
	<div class="row">
		<div class="column-33">
			<img src="v2.jpg" class="join" alt="App" >
		</div>
		<div class="column-66" >
			<h1 class="xlarge-font"><b>Volunteer</b></h1>
			<h1  style="color:red;"><b>Login or SignUp as Volunteer </b></h1>
		<button onclick="document.getElementById('id06').style.display='block'" style="width:17%;">Login</button>
				<div id="id06" class="modal">
				<form class="modal-lo animate" action="vlogin.php" method="post">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>
						<img src="ab.jpg" alt="ul" class="SC4">
					</div>

					<div class="container-login">
						<label for="V_NAME"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="V_NAME" required>

						<label for="V_PASSWORD"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="V_PASSWORD" required>
	  
						<button type="submit">Login</button>
						<button type="button" onclick="document.getElementById('id07').style.display='block'">forgot pasword</button>
		 
						<label>
							<input type="checkbox" checked="checked" name="remember"> Remember me
						</label>
					</div>

					<div class="container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
				<div id="id07" class="modal">
					<div class="container-login">
						<form class="modal-lo animate" action="v_general.php" method="post">
	
							<div class="imgcontainer">
								<span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close Modal">&times;</span>
								<h1>Set New Password</h1>
							</div>
							<input type="password"  name="newpassword" placeholder="New Password" required=""/><br/>
								<input type="password"  name="confirmpassword" placeholder="Confirm New Password" required=""/><br/>
								<button type="submit">Submit</button>
						</form>
					</div>
				</div>
				</div>
		<button onclick="document.getElementById('id02').style.display='block'" style=" width:auto;">SIGN UP</button>

				<div id="id02" class="modal">
  
					<form class="modal-vo animate" action="vsignup.php" method="post">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
							<img src="SC6.jpg" alt="SC6" class="SC4">
						</div>

						<div class="container-login">
							<label for="V_NAME"><b>Full Name</b></label>
							<input type="text" placeholder="Enter full name" name="V_NAME" required></br>

							<label for="V_PASSWORD"><b>Password</b></label>
							<input type="password" placeholder="SET Password" name="V_PASSWORD" required></br>
	  
							<label for="V_CNO"><b>Contact Number</b></label>
							<input type="text" placeholder="CONTACT NUMBER" name="V_CNO" required></br>
	  
							<label for="V_CITY"><b>City</b></label>
							<input type="text" placeholder="CITY" name="V_CITY" required></br>
	  
							<label for="V_ADDRESS"><b>Address</b></label>
							<input type="text" placeholder="ADDRESS" name="V_ADDRESS" required></br>
	  
							<label for="V_EMAIL"><b>E-mail id</b></label>
							<input type="email" placeholder="EMAIL ID" name="V_EMAIL" required></br>
	  
							<label for="V_BDATE"><b>Date of Birth</b></label>
							<input type="date" placeholder="BIRTH DATE" name="V_BDATE" required></br>
	  
							<label for="V_GENDER"><b>Gender</b></label>
							<input type="radio" name="V_GENDER" value="Male">Male
							<input type="radio" name="V_GENDER" value="female">Female
							<input type="radio" name="V_GENDER" value="other">other</br>
							
							<label for="V_QUALIFICATION"><b>Qualification</b></label>
							<input type="text" placeholder="enter your Qualification" name="V_QUALIFICATION" required></br>
	  
							<label for="V_ATIME"><b>Available Time</b></label>
							<input type="text" placeholder="enter your available time" name="V_ATIME" required></br>

							<label for="V_ADAY"><b>Available Days</b></label>
							<input type="text" placeholder="enter your available days" name="V_ADAY" required></br>
							
        
							<button type="submit">SIGN UP</button>
							<label>
								<input type="checkbox" checked="checked" name="remember"> Remember me
							</label>
						</div>

						<div class="container-login" style="background-color:#f1f1f1">
							<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
						</div>
					</form>
				</div>
		</div>
	</div>
	</div>

<!-- The App Section -->
<div class="container-join_us">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Donor</b></h1>
      <h1  style="color:red;"><b>Login or SignUp as a Donor</b></h1>
      <button onclick="document.getElementById('id08').style.display='block'" style="width:17%;">Login</button>
				<div id="id08" class="modal">
				<form class="modal-lo animate" action="dlogin.php" method="post">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id08').style.display='none'" class="close" title="Close Modal">&times;</span>
						<img src="ab.jpg" alt="ul" class="SC4">
					</div>

					<div class="container-login">
						<label for="uname"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="D_NAME" required>

						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="D_PASSWORD" required>
	  
						<button type="submit">Login</button>
						<button type="button" onclick="document.getElementById('id09').style.display='block'">forgot pasword</button>
		 
						<label>
							<input type="checkbox" checked="checked" name="remember"> Remember me
						</label>
					</div>

					<div class="container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id08').style.display='none'" class="cancelbtn">Cancel</button>
					</div>

				
				</form>
				<div id="id09" class="modal">
					<div class="container-login">
						<form class="modal-lo animate" action="d_general.php" method="post">
	
							<div class="imgcontainer">
								<span onclick="document.getElementById('id09').style.display='none'" class="close" title="Close Modal">&times;</span>
								<h1>Set New Password</h1>
							</div>
							<input type="password"  name="newpassword" placeholder="New Password" required=""/><br/>
								<input type="password"  name="confirmpassword" placeholder="Confirm New Password" required=""/><br/>
								<button type="submit">Submit</button>
						</form>
					</div>
				</div>
				</div>
	  <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">SIGN UP</button>

				<div id="id03" class="modal">
  
					<form class="modal-do animate" action="dsignup.php" method="post">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
							<img src="donor1.jpg" alt="donor1" class="donor"  height="300">
						</div>

						<div class="container-login">
							<label for="D_NAME"><b>Full Name</b></label>
							<input type="text" placeholder="Enter full name" name="D_NAME" required></br>
							
							<label for="D_PASSWORD"><b>Password</b></label>
							<input type="password" placeholder="SET Password" name="D_PASSWORD" required></br>
	  
							<label for="D_CNO"><b>Contact Number</b></label>
							<input type="text" placeholder="CONTACT NUMBER" name="D_CNO" required></br>
	  
							<label for="D_CITY"><b>City</b></label>
							<input type="text" placeholder="CITY" name="D_CITY" required></br>
	  
							<label for="D_ADDRESS"><b>Address</b></label>
							<input type="text" placeholder="ADDRESS" name="D_ADDRESS" required></br>
	  
							<label for="D_EMAIL"><b>E-mail id</b></label>
							<input type="email" placeholder="EMAIL ID" name="D_EMAIL" required></br>
	  
							<label for="D_GENDER"><b>Gender</b></label>
							<input type="radio" name="D_GENDER" value="Male">Male
							<input type="radio" name="D_GENDER" value="female">Female
							<input type="radio" name="D_GENDER" value="female">other</br>
        
							<button name="sub3" type="submit">Submit</button>
							<label>
								<input type="checkbox" checked="checked" name="remember"> Remember me
							</label>
						</div>

						<div class="container-login" style="background-color:#f1f1f1">
							<button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
						</div>
					</form>
				</div>
    </div>
    <div class="column-33">
        <img src="v.jpg"  class="join">
    </div>
  </div>
</div>
	</div>
</body>



</html>