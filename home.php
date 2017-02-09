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
			Create a Test
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
				<!-- Read out all sections in the selected class from database as 'options'-->
			</select>
		</form>
		
		<!-- Display database questions here -->
			<!-- Remove question button -->
		
		<!-- Create a Question -->
		<h3>(3) Choose a question type</h3>

		<form method="GET" action="home.php" class="question_type">
			<select name="question" onChange="document.location = this.value">
				<option name="type" value="NULL" disabled
					<?php if (!isset($_GET['question'])) echo 'selected="selected"'; ?>>Question Type</option>
				<option name="type" value="home.php?question=1"
					<?php if (isset($_GET['question'])){
							if (strcmp($_GET['question'], "1") == 0) 
							echo 'selected="selected"';
						  }; 
					?>>True/False</option>
				<option name="type" value="home.php?question=2"
					<?php if (isset($_GET['question'])){
							if (strcmp($_GET['question'], "2") == 0) 
							echo 'selected="selected"';
						  }; 
					?>>Multiple Choice</option>
				<option name="type" value="home.php?question=3"
					<?php if (isset($_GET['question'])){
							if (strcmp($_GET['question'], "3") == 0) 
							echo 'selected="selected"';
						  };  
					?>>Essay</option>
			</select>
		</form>
		
		<!-- Generate question input items -->
		<?php
			if(isset($_GET['question']))
			{
				switch ($_GET['question'])
				{
					case 1:
						echo "
						<form action=\"home.php\">
							Type Question: <input type=\"text\" name=\"question\">
							<label>
								<input type=\"radio\" name=\"answer\" value=\"true\">
								True 
							</label>
							<label>
								<input type=\"radio\" name=\"answer\" value=\"false\"> 
								False 
							</label>
							<br>
							<input type=\"submit\" value=\"Add Question\">
						</form>";
						break;
					case 2:
						echo "
						<form action=\"home.php\">
							Type Question: <input type=\"text\" name=\"question\">
							<br>
							<label>
								<input type=\"radio\" name=\"answer\" value=\"a\">
								A 
								<input type=\"text\" class=\"choice\" name=\"choiceA\">
							</label>
							<label>
								<input type=\"radio\" name=\"answer\" value=\"b\"> 
								B 
								<input type=\"text\" class=\"choice\" name=\"choiceB\">
							</label>
							<label>
								<input type=\"radio\" name=\"answer\" value=\"c\"> 
								C 
								<input type=\"text\" class=\"choice\" name=\"choiceC\">
							</label>
							<label>
								<input type=\"radio\" name=\"answer\" value=\"d\"> 
								D 
								<input type=\"text\" class=\"choice\" name=\"choiceD\">
							</label>
							<br>
							<input type=\"submit\" value=\"Add Question\">
						</form>";
						break;
					case 3:
						echo "
						<form action=\"home.php\">
							Type Essay Instructions: 
							<br>
							<textarea name=\"question\"></textarea>
							<br>
							<input type=\"submit\" value=\"Add Question\">
						</form>";
						break;
				}
			}
		?>
		
		<h3>(4) Set test start date</h3>
		
			<input id="test_start" type="date" value="2017-02-17"/>
		
		<h3>(5) Set test duration</h3>
		
			<label>Start time: </label>
			<input type="time" name="start_time">
			
			<label>End time: </label>
			<input type="time" name="end_time">
		
		<br>
		<!-- Enable create test button if a question exists -->
		<button disabled="true">Create Test</button>
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