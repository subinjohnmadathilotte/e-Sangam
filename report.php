<!DOCTYPE html> 
<html>

 <?php
 include 'db_con.php';
  if(!isset($_SESSION["id"]))
	  
	  {
		  
		  header('location:./');
	  }
 
 
 $id=$_SESSION['id'];
 
 
 $id=$_SESSION['id'];
 $result=mysqli_query($con,"select `g_id` from group_tb where login_id='$id'"); 
 $row=mysqli_fetch_array($result);
 $g_id=$row["g_id"];
 echo $g_id;
 
  if(isset($_POST["submit"]))
 {
	 
 $Location=$_POST["Location"];
 $Decisions=$_POST["Decisions"];
 
  $Agenda=$_POST["Agenda"];
  
  $Next_loc=$_POST["Next_loc"];
  
 $Next_date=$_POST["Next_date"];

 
			$sqll="INSERT INTO `reports` (`g_id`,`location`,`agenda`,`decisions`,`next_location`,`next_date`,`status`) VALUES ('$g_id','$Location','$Agenda','$Decisions','$Next_loc','$Next_date','pending')";
			$result2=mysqli_query($con,$sqll);
			echo"<script>alert('successfull')</script>";
 }
 ?>


<head>
  <title>Free HTML5 Templates</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <link rel="stylesheet" href="./css/bootstrap.css">
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
            <li class="current"><a href="report.html">Daily report </a></li>
            <li><a href="view_members.php">View members</a></li>
            <li><a href="projects.html">Attendance</a></li>
            <li><a href="signout.php">Log out</a></li>
          </ul>
        </div><!--close menubar-->	
      </nav>
    </header>
    
     
	
	<div id="site_content">	

	  <div id="content">
        <div class="content_item">
		  <form action="#" method="POST" name="my_form">
		  
		<table>
		<tr>
		    <td><h4>Location  </h4></td><td>
			<input  type="text"  name="Location" class="text_input form-control" required ></td>
		</tr>
		
		<tr>
		    <td><h4>Decisions <h4></td>
			<td><textarea name="Decisions" class="text_input form-control"></textarea></td>
		</tr>
		
		<tr>
		    <td><h4>Agenda <h4></td>
			<td><textarea name="Agenda" class="text_input form-control"></textarea></td>
		</tr>
			
        <tr>
		    <td><h4>Next Location  <h4></td><td>
			<input  type="text"  name="Next_loc" class="text_input form-control" required ></td></tr>

			        <tr>
		    <td><h4>Next meeting date  <h4></td><td>
			<input type="date" name="Next_date" max="2025-01-01" min="2017-01-01" class="text_input form-control" required></td></tr>
			
		<tr><td></td><td><input type ="submit" name="submit" id="submit" class="btn btn-primary"></button></td>
        </tr>

		</table>
		  </form>
		
	  
		  
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
