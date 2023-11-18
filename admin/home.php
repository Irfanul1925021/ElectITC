<?php
include('session.php');
include('header.php');
include('dbcon.php');
?>
</head>
<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
<div class="home_body">
<div class="navbar">
	<div class="navbar-inner">
	<div class="container">	
	<ul class="nav nav-pills">
	  <li>....</li>
	  <li class="active"><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
	  <li><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  

	  <li class=""><a  href="voter_list.php"><i class="icon-align-justify icon-large"></i>Voters List</a></li>  
		 <li><a  href="canvassing_report.php"><i class="icon-book icon-large"></i>Poll Report</a></li>
		    <li><a  href="History.php"><i class="icon-table icon-large"></i>History Log</a>
		   <li><a data-toggle="modal" href="#about"><i class="icon-exclamation-sign icon-large"></i>About</a></li>
		   <div class="modal hide fade" id="about">
	<div class="modal-header"> 
	<button type="button" class="close" data-dismiss="modal"> </button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	  <?php include('about.php') ?>
	  <div class="modal-footer_about">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		   <li>....</li>
	 </ul>
	<form class="navbar-form pull-right">
		<?php $result=mysqli_query($conn,"select * from users where User_id='$id_session'");
	$row=mysqli_fetch_array($result);
	?>
	<font color="white">Welcome:<i class="icon-user-md"></i><?php echo $row['User_Type']; ?></font>
	<a class="btn btn-danger" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Logout</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal"> </button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>

	</form>
	</div>
	</div>
	</div>
	<div id="element" class="hero-body">
	  <div class="thumbnail_gallery">
                <h2>IT CLub Gallery</h2>
				<p><font color="black">Click the image to view more...</font></p>
				<div id="myGallery" class="spacegallery">
				<img src="images/p1.jpg" alt="Image 1" >
                <img src="images/p2.jpg" alt="Image 2" >
                <img src="images/p3.jpg" alt="Image 3" >
                <img src="images/p4.jpg" alt="Image 4" >
                <img src="images/p5.jpg" alt="Image 5" >
					
            </div>
			</div>
			  <div class="thumbnail_mission">
			  <h2>Mission</h2>
			  <p>The IT Club at NSTU is dedicated to fostering a dynamic environment where students can explore the world of technology.
			  </p>
			   <a class="btn btn-info" data-toggle="modal" href="#mission"><i class="icon-list-alt icon-large"></i>&nbsp;Read More</a>
			   	<div class="modal hide fade" id="mission">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal"> </button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	   <h2>Empowering Future Technologists</h2>
<p><font color="black">
To establish the club as a hub for fostering innovation, encouraging students to create and implement tech-based solutions.
</p>	  

	   <h2>Bridging Academia with Industry</h2>
<p><font color="black">
To facilitate interactions and partnerships between students and IT industry professionals, promoting real-world exposure.
</p>	 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
	  
		</div>
		</div>
			   
			  </div>
			  
			   <div class="thumbnail_vission">
			   <h2>Objectives</h2>
			  <p>The objectives of the IT Club at NSTU include fostering tech awareness, skill development, networking, and promoting innovation among students.
			  </p>
			  <a class="btn btn-info" data-toggle="modal" href="#read_objectives"><i class="icon-list-alt icon-large"></i>&nbsp;Read More</a>
			  
			  	<div class="modal hide fade" id="read_objectives">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal"> </button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	 
	  
	  <h2>Objectives</h2>
	  
	 <p><font color="black">* To offer opportunities for members to enhance their technical skills and knowledge in areas such as programming, web development, cybersecurity, and more.
	 </p>
	 <p>
	 * To create a platform for students to connect with like-minded individuals, industry experts, and potential employers in the IT field.
	 </p>
	 <p>
	 * To encourage innovative thinking and problem-solving by organizing hackathons, tech competitions, and collaborative projects.
	 </p>
	 <p>* To engage in community outreach activities, sharing technological knowledge and expertise for the betterment of society and the local community.


	 </p>
	 </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>

		</div>
		</div>
			  </div>
			
	</div>
	<?php include('footer.php')?>	
</div>
</div>
</body>
</html>
