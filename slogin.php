<?php
					session_start();
					
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"aashayein");
					$query = "SELECT * FROM stable WHERE S_NAME = '$_POST[S_NAME]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['S_NAME'] == $_POST['S_NAME']){
							if($row['S_PASSWORD'] == $_POST['S_PASSWORD']){
							   $_SESSION['S_NAME'] = $row['S_NAME'];
								$_SESSION['S_PASSWORD'] = $row['S_PASSWORD'];
								//header("Location:d_general.php"); 
                                echo '<script type="text/javascript">
                                alert("login successfully......") 
                                window.location.href = "sc_general.php";
                                 </script>' ;
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					
				}
			?>
