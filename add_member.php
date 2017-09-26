<!DOCTYPE html> 
<html>

 <?php
 include 'db_con.php';
 
 
 $id=$_SESSION['id'];
 $result=mysqli_query($con,"select `g_id` from group_tb where login_id='$id'"); 
 $row=mysqli_fetch_array($result);
 $g_id=$row["g_id"];
 echo $g_id;
 
  if(isset($_POST["submit"]))
 {
	 
  $f_name=$_POST["f_name"];
  $l_name=$_POST["l_name"];
  $h_name=$_POST["h_name"];
  $dob=$_POST["dob"];
  $fathers_name=$_POST["fathers_name"];
  $Mobile=$_POST["Mobile"];
  $marital=$_POST["marital"];
  $aadhaar=$_POST["aadhaar"];
  
  
                  $picfile= "photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
                move_uploaded_file($_FILES['photo']['tmp_name'], $picfile);

 
			$sqll="INSERT INTO `members`(`g_id`, `f_name`, `l_name`, `house_name`, `dob`, `father_name`, `married`, `hus_name`, `photo`,`mobile`,`aadhaar_no`, `login_id`) values('$g_id','$f_name','$l_name','$h_name','$dob','$fathers_name','$marital','subin','$picfile','$Mobile','$aadhaar','10')";
			$result2=mysqli_query($con,$sqll);
			echo"<script>alert('successfull')</script>";
 }
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
            <li class="current"><a href="group.php">Home</a></li>
            <li><a href="report.php">Daily report </a></li>
            <li><a href="testimonials.html">View members</a></li>
            <li><a href="projects.html">Attendance</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div><!--close menubar-->	
      </nav>
    </header>
    
     
	
	<div id="site_content">	

	
        <div class="content_item">
		  <form class="f" height="500px" action="#" method="POST" name="my_form" onsubmit="return validate();" enctype='multipart/form-data'>

		<table>
		
		<tr>
		    <td class="td_pad"></td>
			<td><h1>Add a member<h1></td>
		</tr>
		
		<tr>
		    <td class="td_pad">First name</td><td class="td2_pad">
			<input  type="text"  name="f_name" class="text_input"  required ></td>
		</tr>
		
		<tr>
		    <td class="td_pad">Last Name  </td><td class="td2_pad">
			<input  type="text"  name="l_name" class="text_input" required ></td>
		</tr>
		
		<tr>
		    <td class="td_pad">House Name  </td><td class="td2_pad">
			<input  type="text"  name="h_name" class="text_input" required ></td>
		</tr>
			
			<tr>
		    <td class="td_pad">Date Of birth </td><td class="td2_pad">
			<input type="date" name="dob" min="1960-01-01" max="1998-01-01" class="text_input" required></td></tr>

		</tr>
			
		<tr>
		    <td class="td_pad">Father's Name  </td><td class="td2_pad">
			<input  type="text"  name="fathers_name" class="text_input" required ></td>
		</tr>
			
    
		
			
			<tr>
		    <td class="td_pad">Mobile  </td><td class="td2_pad">
			<input  type="number"  name="Mobile" class="text_input" required ></td>
			</tr>
			
			   <tr>
				<td class="td_pad">Marital Status</td>
				<td class="td2_pad">
			<select name="marital" class="text_input" >
				<option>Married
				</option>
				<option>Unmarried
				</option>
			</select>
		</td></tr>

			<tr>
		    <td class="td_pad">Aadhaar number  </td><td class="td2_pad">
			<input  type="number"  name="aadhaar" class="text_input" required ></td>
			</tr>
				<tr>
				 <td class="td_pad">Ulpoad  photo </td>
				<td class="td2_pad" ><input type="file" name="photo" id="photo" class="types" required>
				</td>
				</tr>
		<tr><td></td><td class="td2_pad"><input type ="submit" name="submit" id="submit" class="submit_input"></td>
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
