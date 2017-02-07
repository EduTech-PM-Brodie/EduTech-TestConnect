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
	  <a href="account.php">Account</a>
	  <a href="grades.php">Grades</a>
	  <a href="courses.php">Courses</a>
	  <a href="takeATest.php">Take a test</a>
	  <a href="#">Log out</a>
	</div>

	<br/><br/>
	<!-- Left Side Bar -->
	<div class="navigation">
		<button id="burgerMenu" onclick="OpenLeftBar()" class="hamburger">&#9776;</button>
		<br /><br /><br />
		<a href="account.php" class="menuOptions">Account</a>
		<br /><br />
		<a href="grades.php" class="menuOptions">Grades</a>
		<br /><br />
		<a href="courses.php" class="menuOptions">Courses</a>
		<br /><br />
		<a href="takeATest.php" class="menuOptions">Take a test</a>
		<br /><br />
		<a href="#" class="menuOptions">Log out</a>
	</div>
	
	<div class="verticalLine"></div>
	
	<!-- Content -->
	<div class="content">
		<h2>My Information</h2>
		<table>
			<tr>
				<td>PCC ID:</td>
				<td><input type="text" readonly></input></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" readonly></input></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><input type="text" readonly></input></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" readonly></input></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type="text" readonly></input></td>
			</tr>
		</table>
	</div>
	
	<div class="month">
	  <ul>
		<li class="prev">&#10094;</li>
		<li class="next">&#10095;</li>
		<li>February<br>
		  <span style="font-size:18px">2017</span>
		</li>
	  </ul>
	</div>

	<ul class="weekdays">
	  <li>Mo</li>
	  <li>Tu</li>
	  <li>We</li>
	  <li>Th</li>
	  <li>Fr</li>
	  <li>Sa</li>
	  <li>Su</li>
	</ul>

	<ul class="days">
	  <li></li>
	  <li></li>
	  <li>1</li>
	  <li>2</li>
	  <li>3</li>
	  <li>4</li>
	  <li><span class="active">5</span></li>
	  <li>6</li>
	  <li>7</li>
	  <li>8</li>
	  <li>9</li>
	  <li>10</li>
	  <li>12</li>
	  <li>13</li>
	  <li>14</li>
	  <li>15</li>
	  <li>16</li>
	  <li>17</li>
	  <li>18</li>
	  <li>19</li>
	  <li>20</li>
	  <li>21</li>
	  <li>22</li>
	  <li>23</li>
	  <li>24</li>
	  <li>25</li>
	  <li>26</li>
	  <li>27</li>
	  <li>28</li>  
	</ul>
	
	<footer>
		<hr />Created by EduTech.
		<a id="report" href="#">Report a problem.</a>
	</footer>
	
	<?php
		/*****************************************************************/
		/* 					Connect to the database server 				 */
		/*****************************************************************/
		/*
		@ $db = new mysqli("csweb", "123105", "pcc1935");
		$db->select_db("cs368_123105");
		*/
	?>
	
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