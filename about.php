<?php





?>

<html>
	
	<head>
		<title>About This Project</title>
		<link rel="stylesheet" href="master.css">
		<style>
			#innerbody a {
				color: #B4A;
			}
			
			#innerbody a:active {
				color: #B5B;
			}
			
		</style>
	</head>
	
	<body>		
		<div id="sidebar">
			<a id="sideoptions" href="../index.php">Home</a><br>
			<a id="sideoptions" href="../disclaimer.php">Disclaimer</a><br>
			<a id="sideoptions" href="../about.php">About</a><br>
			<a id="sideoptions" href="#">----------</a><br>
			<a id="sideoptions" href="../clickjacking/clickjacking.php">Clickjacking</a><br>
			<a id="sideoptions" href="../csrf/csrf.php">Cross Site Request Forgery (CSRF)</a><br>
			<a id="sideoptions" href="../fileupload/upload.php">File Upload Shell Attacks</a><br>
			<a id="sideoptions" href="../idor/insecureobjects.php">Insecure Direct Object Referencing</a><br>
			<a id="sideoptions" href="../poorauth/poorauth.php">Poor Authentication Coding</a><br>
			<a id="sideoptions" href="../sqli/sqli.php">SQL Injection</a><br>
			<a id="sideoptions" href="../redirs/unvalidated.php">Unvalidated Redirect Attacks</a><br>
			<a id="sideoptions" href="../xss/domxss.php">XSS - DOM</a><br>
			<a id="sideoptions" href="../xss/reflectedxss.php">XSS - Reflected</a><br>
			<a id="sideoptions" href="../xss/storedxss.php">XSS - Stored</a><br>
		</div>
		
		<header id="header">
			<h1>About This Web Application</h1>
		</header>
		
			<!-- Innerbody will be where the content for each page goes. 
			     Use everything else as a Master Template. -->
		<div id="innerbody">
		<br>
		<br>
			This Project was created as a means of being used for my Final Year Dissertation.<br>
			It was created from hobbyist ideas and goes above and beyond to helping improve<br>
			Security Posture for developers and engineers alike.<br>
			<br>
			Overall the Application will focus on each Vulnerability as its own issue. You may<br>
			Encounter other forms of Vulnerabilities on a different page (For example, an<br>
			XSS Vulnerability on the SQL Injection page). This is by design, and will raise<br>
			Your knowledge of identifying and assisting in the remediation of code issues.<br>
			<br>
			This Project is different from the competition, as it provides not only a more<br>
			In depth look at each Vulnerability, but it also adds on some extra Vulnerabilties<br>
			That other Web Applications do not include. For example, this project includes<br>
			Issues such as <a href="../clickjacking/clickjacking.php"><b>Clickjacking</b></a> (Also known as a <i>UI Redress Attack</i>), and<br>
			<a href="../idor/insecureobjects.php"><b>Insecure Direct Object Referencing Attacks</b></a>.<br>
			<br>
			<br>
			If you do have any queries, please reach out to me at <i>Wilkinson-A10@ulster.ac.uk</i><br>
			
			
		</div>
			<!-- Above this line will be the main body of the Document.
				Use everything else as a Master Template. -->
				
		<footer id="footer">
			2018-2019 | Aaron Wilkinson - B00664281 - Vulnerable Web Application Project
		</footer>
		
	</body>
	
</html>