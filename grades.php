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
			Grade a Test
		</h1>
		
		<!-- Select a class-->
		<h3>(1) Select a class</h3>
		
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
				<!-- Read out all classes from database as 'options'-->
			</select>
		</form>
		
		<h3>(3) Choose a student</h3>
		
		<!-- Select a student's test to grade -->
		<!-- Show only students that have TAKEN the test for THAT class -->
		<form method="GET" action="home.php" class="select_student">
			<select name="student">
				<option name="type" value="1">Brodie Mather</option>
				<option name="type" value="2">Alfin Rahardja</option>
				<option name="type" value="3">Delilah Wilps</option>
				<!-- Read out all students with taken tests from database as 'options'-->
			</select>
		</form>
		<br>
		
		<!-- Display all test questions checking which are YET TO BE GRADED -->
		<div class="grade_test">
			<label class="qa"><b>Question: </b></label>
			<p class="qa">Is this where the question will populate?</p>
			<label class="qa"><b>Answer: </b></label>
			<p class="qa">True</p>
			<br>
			<label class="qa"><b>Question: </b></label>
			<p class="qa">Is this where the question will populate?</p>
			<label class="qa"><b>Answer: </b></label>
			<p class="qa">True</p>
			<br>
			<label class="qa"><b>Question: </b></label>
			<p class="qa">Is this where the question will populate?</p>
			<label class="qa"><b>Answer: </b></label>
			<p class="qa">True</p>
			<br>
			
			<!-- If YET TO BE GRADED, show true false radio buttons -->
			<label class="qa"><b>Question: </b></label>
			<p class="qa">Write what the question is.</p>
			<label class="qa"><b>Students Answer: </b></label>
			<p class="qa">Is this where the questions to grade will populate?</p>
			<label>
				<input type="radio" name="answer" value="true"> True 
			</label>
			<label>
				<input type="radio" name="answer" value="false"> False 
			</label>
		</div>

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