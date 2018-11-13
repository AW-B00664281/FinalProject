<?php





?>

<html>
	
	<head>
		<title>A Vulnerable Web App</title>
		<link rel="stylesheet" href="master.css">
	</head>
	
	<body>		
		<div id="sidebar">
			<a id="sideoptions" href="../index.php">Home</a><br>
			<a id="sideoptions" href="../disclaimer.php">Disclaimer</a><br>
			<a id="sideoptions" href="../about.php">About</a><br>
			<a id="sideoptions" href="#">----------</a><br>
			<a id="sideoptions" href="../clickjacking/clickjacking.php">Clickjacking</a><br>
			<a id="sideoptions" href="../csrf/csrf.php">Cross Site Request Forgery (CSRF)</a><br>
			<a id="sideoptions" href="../xxe/xxe.php">External Entity Attack (XXE)</a><br>
			<a id="sideoptions" href="../fileupload/upload.php">File Upload Shell Attacks</a><br>
			<a id="sideoptions" href="../idor/insecureobjects.php">Insecure Direct Object Referencing</a><br>
			<a id="sideoptions" href="../poorauth/login.php">Poor Authentication Coding</a><br>
			<a id="sideoptions" href="../sqli/sqli.php">SQL Injection</a><br>
			<a id="sideoptions" href="../redirs/unvalidated.php">Unvalidated Redirect Attacks</a><br>
			<a id="sideoptions" href="../xss/domxss.php">XSS - DOM</a><br>
			<a id="sideoptions" href="../xss/reflectedxss.php">XSS - Reflected</a><br>
			<a id="sideoptions" href="../xss/storedxss.php">XSS - Stored</a><br>
		</div>
		
		<header id="header">
			<h1>A Vulnerable Web Application</h1>
		</header>
		
			<!-- Innerbody will be where the content for each page goes. 
			     Use everything else as a Master Template. -->
		<div id="innerbody">
			Welcome to my Project. This Web Application has been created to be intentionally<br>
			Vulnerable to Web Based Attacks, so that Developers and Security Engineers can<br>
			Practice their skills, and know what malicious users are attempting to use to<br>
			Break your Systems. <BR>
			<br>
			Before using Vulnerable Web App, I highly recommend that you read the <a href="disclaimer.php">DISCLAIMER</a> page.<br>
			
		</div>
			<!-- Above this line will be the main body of the Document.
				Use everything else as a Master Template. -->
				
		<footer id="footer">
			2018-2019 | Aaron Wilkinson - B00664281 - Vulnerable Web Application Project
		</footer>
		
	</body>
	
</html>