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

	<br/>
	<br/>
	
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
				<?php
					// Make a connection to the database
					
					@ $db = new mysqli("csweb", "124827", "pcc1713");
					  $db->select_db("cs411_124827");
				
					// Populate the dropdown with all classes for the signed in instructors
					$query = "INSERT QUERY*******************";
					$classes = $db->query($query);
					while($class = $classes->fetch_assoc())
					{
						echo '
						<option name="type" value="'.$class["id_course"].'">'.
						$class["course_num"].'
						</option>';
					}
				?>
				<option name="type" value="CS 306">CS 306 (sample)</option>
				<option name="type" value="BA 411">BA 411 (sample)</option>
				<!-- Read out all classes from database as 'options'-->
				<!-- On Change should we reload the page or how to update section dropdown???? -->
			</select>
		</form>
		
		<!-- Select a section-->
		<h3>(2) Select a section</h3>
		
		<form method="GET" action="home.php" class="select_section">
			<select name="question">
				<?php
					// Make a connection to the database
					@ $db = new mysqli("csweb", "124827", "pcc1713");
					  $db->select_db("cs411_124827");
				
					// Populate the dropdown with all sections for the selected class
					$query = "INSERT QUERY*******************";
					$sections = $db->query($query);
					while($section = $sections->fetch_assoc())
					{
						echo '
						<option name="type" value="'.$section["id_section"].'">'.
						$section["id_section"].'
						</option>';
					}
				?>
				<option name="type" value="1">1 (sample)</option>
				<option name="type" value="2">2 (sample)</option>
				<option name="type" value="3">3 (sample)</option>
				<option name="type" value="4">4 (sample)</option>
				<!-- Read out all sections from database as 'options'-->
			</select>
		</form>
		
		<h3>(3) Choose a student</h3>
		
		<!-- Select a student's test to grade -->
		<!-- Show only students that have TAKEN the test for THAT class -->
		<form method="GET" action="home.php" class="select_student">
			<select name="student">
				<?php
					// Make a connection to the database
					
					@ $db = new mysqli("csweb", "124827", "pcc1713");
					  $db->select_db("cs411_124827");
				
					// Populate the dropdown with all students of the selected section and class
					$query = "INSERT QUERY*******************";
					$students = $db->query($query);
					while($student = $students->fetch_assoc())
					{
						echo '
						<option name="type" value="'.$student["id_user"].'">'.
						$student["f_name"].' '.$student["l_name"].'
						</option>';
					}
				?>
				<option name="type" value="Brodie Mather">Brodie Mather (sample)</option>
				<option name="type" value="Alfin Rahardja">Alfin Rahardja (sample)</option>
				<option name="type" value="Delilah Wilps">Delilah Wilps (sample)</option>
				<!-- Read out all students with taken tests from database as 'options'-->
			</select>
		</form>
		<br>
		
		<!-- Display all test questions checking which are YET TO BE GRADED -->
		<div class="grade_test">
			<?php
				// Make a connection to the database
				@ $db = new mysqli("csweb", "124827", "pcc1713");
				  $db->select_db("cs411_124827");
			
				// List the questions and answers of a test
				$query = "INSERT QUERY*******************";
				$qas = $db->query($query);
				while($qa = $qas->fetch_assoc())
				{
					if(!isset($qa["answer_string"])) {
						echo '
						<option name="type" value="'.$qa["id_user"].'">'.
						$qa["f_name"].' '.$qa["l_name"].'
						</option>';
						
						echo ' 
						<label class="qa"><b>Question: </b></label>
						<p class="qa">$qa["question_string"]</p>
						<label class="qa"><b>Answer: </b></label>
						<p class="qa">$qa["answer_string"]</p>
						<br>';
					}
					else {
						echo '
						<option name="type" value="'.$qa["id_user"].'">'.
						$qa["f_name"].' '.$qa["l_name"].'
						</option>';
						
						echo ' 
						<label class="qa"><b>Question: </b></label>
						<p class="qa">$qa["question_string"]</p>
						<label class="qa"><b>Student\'s Answer: </b></label>
						<p class="qa">$qa["answer_string"]</p>
						<label>
							<input type="radio" name="answer" value="true"> Correct 
						</label>
						<label>
							<input type="radio" name="answer" value="false"> Incorrect 
						</label>
						<label>
							input type="textbox" name="POINTS"> Points earned 
						</label>
						<br>';
					}
				}
			?>
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
				<input type="radio" name="answer" value="true"> Correct 
			</label>
			<label>
				<input type="radio" name="answer" value="false"> Incorrect 
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