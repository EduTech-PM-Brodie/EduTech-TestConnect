<!DOCTYPE HTML> 
<!--
	Name: Jason Keating
	Class: CS 414
	date: February 3, 2017
-->
<html>
<head>
	<meta name="author" content="Jason Keating" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link href="homestyle.css" rel="stylesheet" type="text/css" />
	<title>Home</title>
</head>
<body>
	<header>
		<a href="home.php">
			<img id="logo" src="Images/Logo.png" alt="TestConnect Logo" />
		</a>
	</header>
	
	<!-- Options on left side bar -->
	<div id="mySidenav" class="leftBar">
	  <a href="javascript:void(0)" class="closebtn" onclick="CloseLeftBar()">&times;</a>
	  <a href="http://localhost/testconnect/account.php?">Account</a>
	  <a href="http://localhost/testconnect/grades.php?">Grades</a>
	  <a href="http://localhost/testconnect/courses.php?">Courses</a>
	  <a href="http://localhost/testconnect/home.php?">Create a test</a>
	</div>

	<br/><br/>
	<!-- Left Side Bar -->
	<div class="navigation">
		<button id="burgerMenu" onclick="OpenLeftBar()" class="hamburger">&#9776;</button>
		<br /><br /><br />
		<a href="http://localhost/testconnect/account.php?" class="menuOptions">Account</a>
		<br /><br />
		<a href="http://localhost/testconnect/grades.php?" class="menuOptions">Grades</a>
		<br /><br />
		<a href="http://localhost/testconnect/courses.php?" class="menuOptions">Courses</a>
		<br /><br />
		<a href="http://localhost/testconnect/home.php?" class="menuOptions">Create a test</a>
	</div>
	
	<!-- Calendar -->
	<div>
		<div class="verticalLine"></div>
	</div>
	
	<!-- Content -->
	<div class="content">
		<h1 class="page">
			Courses
		</h1>
		
		
		<form method="GET" action="home.php" class="select_class">
			<select name="question">
				<option name="type" value="1">CS 306</option>
				<option name="type" value="2">BA 411</option>
				<!-- Read out all classes from database as 'options'-->
			</select>
		</form>
		
		<!-- Select a section-->
		<h3>(2) Select a section</h3>
		
		<form method="GET" action="home.php" class="select_section">
			<select name="question">
				<option name="type" value="1">1</option>
				<option name="type" value="2">2</option>
				<option name="type" value="3">3</option>
				<option name="type" value="4">4</option>
				<!-- Read out all sections in the selected class from database as 'options'-->
			</select>
		</form>
		
		<!-- List all students in that class ans section -->
		
		<h3>Students</h3>
		
		<p>Brodie Mather</p>
		<p>Alfin Rahardja</p>
		<p>Delilah Wilps</p>

	</div>
	
	<script type = "text/javascript">
	<!--
		/**********************************************************/
		/*  Open the left bar navigation.						  */
		/**********************************************************/
		function OpenLeftBar() 
		{
			document.getElementById("mySidenav").style.width = "250px";
		}

		/**********************************************************/
		/*  Close the left bar navigation.						  */
		/**********************************************************/
		function CloseLeftBar() 
		{
			document.getElementById("mySidenav").style.width = "0px";
		}
	//-->
	</script>
	 
</body>
</html>