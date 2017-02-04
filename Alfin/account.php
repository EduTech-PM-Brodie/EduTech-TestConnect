<!DOCTYPE HTML> 
<!--
	Name: Alfin Rahardja
	Class: CS 414
	date: February 1, 2017
-->
<html>
<head>
	<meta name="author" content="Alfin Rahardja" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link href="homestyle.css" rel="stylesheet" type="text/css" />
	<title>Account</title>
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
	  <a href="#">Account</a>
	  <a href="#">Grades</a>
	  <a href="#">Courses</a>
	  <a href="#">Take a test</a>
	</div>

	<br/><br/>
	<!-- Left Side Bar -->
	<div class="navigation">
		<button id="burgerMenu" onclick="OpenLeftBar()" class="hamburger">&#9776;</button>
		<br /><br /><br />
		<a href="#" class="menuOptions">Grades</a>
		<br /><br />
		<a href="#" class="menuOptions">Courses</a>
		<br /><br />
		<a href="#" class="menuOptions">Take a test</a>
	</div>
	
	<!-- Calendar -->
	
	
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