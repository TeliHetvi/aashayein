<?php
					session_start();
					
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"aashayein");
					$query = "SELECT * FROM vtable WHERE V_NAME = '$_POST[V_NAME]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['V_NAME'] == $_POST['V_NAME']){
							if($row['V_PASSWORD'] == $_POST['V_PASSWORD']){
							   $_SESSION['V_NAME'] = $row['V_NAME'];
								$_SESSION['V_PASSWORD'] = $row['V_PASSWORD'];
								//header("Location:d_general.php"); 
                                echo '<script type="text/javascript">
                                alert("login successfully......") 
                                window.location.href = "v_general.php";
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
