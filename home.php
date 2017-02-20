<!DOCTYPE HTML> 
<!--
	Name: Jason Keating
	Class: CS 414
	Date: February 3, 2017
-->
<html>
<head>
	<meta name="author" content="Jason Keating" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Add MUI -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
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
		
		<h3>(3) Set test duration</h3>

		<p id="jqueryExample">
			<input id="test_start" type="date" class="date_start" value="2017-02-17"/>
			<input id="test_start" type="time" class="time_start"/> to
			<input id="test_start" type="date" class="date_end" />
			<input id="test_start" type="time" class="time_end" />
		</p>			
		
		<!-- Display database questions here -->
			<!-- Remove question button -->
		
		<!-- Create a Question -->
		<h3>(4) Choose a question type</h3>

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
							<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
								<input class=\"mdl-textfield__input\" type=\"text\" id=\"sample3\">
								<label class=\"mdl-textfield__label\" for=\"sample3\">Question</label>
							</div>
							
							<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option1\">
								<input type=\"radio\" id=\"option1\" name=\"answer\" class=\"mdl-radio__button\" >
								<span class=\"mdl-radio__label\">True</span>
							</label>
							
							<label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"option2\">
								<input type=\"radio\" id=\"option2\" name=\"answer\" class=\"mdl-radio__button\" >
								<span class=\"mdl-radio__label\">False</span>
							</label>
							
							<br>
							<input type=\"submit\" value=\"Add Question\">
						</form>";
						break;
					case 2:
						echo "
						<form action=\"home.php\">
							<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
								<input class=\"mdl-textfield__input\" type=\"text\" id=\"sample3\">
								<label class=\"mdl-textfield__label\" for=\"sample3\">Question</label>
							</div>
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