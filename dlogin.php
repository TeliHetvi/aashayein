<?php
					session_start();
					
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"aashayein");
					$query = "SELECT * FROM dtable WHERE D_NAME = '$_POST[D_NAME]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['D_NAME'] == $_POST['D_NAME']){
							if($row['D_PASSWORD'] == $_POST['D_PASSWORD']){
							   $_SESSION['D_NAME'] = $row['D_NAME'];
								$_SESSION['D_PASSWORD'] = $row['D_PASSWORD'];
								//header("Location:d_general.php"); 
                                echo '<script type="text/javascript">
                                alert("login successfully......") 
                                window.location.href = "d_general.php";
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
