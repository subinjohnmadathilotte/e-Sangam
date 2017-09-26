<!DOCTYPE html> 
<html>
<style>
.test2{
	background-color:#ECEFF1;
	width:400px;
	height:100px;
}

.test1{
	background-color:green;
	width:100px;
	height:100px;
}
.test{
	text-align: center;
	background-color:#ECEFF1;
	width:20px;
	height:100px;
}
.td_display{
	
	width:120px;
}
</style>

 <?php
 include 'db_con.php';
    
 include 'db_con.php';
  if(!isset($_SESSION["id"]))
	  
	  {
		  
		  header('location:./');
	  }
 
 $id=$_SESSION['id'];
 $result=mysqli_query($con,"select `g_id` from group_tb where login_id='$id'"); 
 $row=mysqli_fetch_array($result);
 $g_id=$row["g_id"];
 echo $g_id;
 ?>

<head>
  <title>Kudambashree</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">		

    <header>
	  <div id="strapline">
	    <div id="welcome_slogan">
	      <img width="940" height="100" src="images\logo.png">
	    </div><!--close welcome_slogan-->
      </div><!--close strapline-->	  
	  <nav>
	    <div id="menubar">
          <ul id="nav">
            <li><a href="group.php">Home</a></li>
            <li><a href="report.php">Daily report </a></li>
            <li class="current"><a href="#">View members</a></li>
            <li><a href="projects.html">Attendance</a></li>
            <li><a href="signout.php">Log out</a></li>
          </ul>
        </div><!--close menubar-->	
      </nav>
    </header>
    
     
	
	<div id="site_content">	

	
        <div class="content_item">
		  
		  <?php
                                  
							  
								 
		  
               $result=mysqli_query($con,"select *  from members where g_id=$g_id");
			   
		
					$num=0;
					
                            while($row=mysqli_fetch_array($result))
                                  { 
							
							  $num+=1;
							  ?>
							  
							  <table>
				<tr> 
					<td>
						<div class="test">
						<?php
							echo $num;
												
						?>
						</div>
					</td>
					<td> 
						<div class="test2">
								<table>
									<tr>
										<td class="td_display">Name:</td>
										<td>
											<?php
											echo $row["f_name"];
											?>
										</td>
									</tr>
									<tr>
										<td class="td_display">House Name</td>
										<td>
											<?php
											echo $row["house_name"];
											?>
										</td>
									</tr>
									<tr>
										<td class="td_display">Phone</td>
										<td>
											<?php
											echo $row["mobile"];
											?>
										</td>
									</tr>
								</table>
								
						</div>
					</td>
					<td>
						<div class="test1">
							<img src="<?php echo $row["photo"]?>" width="100px" height="100px"/>
						</div>
					</td>
				</tr>
			</table>
							<?php
						 }
		
	  ?>		  
		</div><!--close content_item-->
       
      </div><!--close content-->  
   
	</div><!--close site_content-->  
	  
	 
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
   <footer>
	<p> 
        Department of Government of Kerala, Thiruvananthapuram, Kerala, India - 695011, 
		Phone: 91-471-2554714, Fax: 91-471-2554714, Email: info@kudumbashree.org</p>
    </footer>
</body>
</html>
