<?php

	$page = "Bio-Home";

?>


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>Biology Tools!</title>
	</head>
	<body>
		<div>
			<div id="login-container">
				<h1>LOG-IN</h1>
				<div class='form-center'>
					<form action="index.php" method="post">
						Username: <input type="text" name="username"/><br/>
						Password: <input type="text" name="password"/><br/>
						<input type="hidden" name="page" value="<?= $page?>"/>
						<input type="submit" value="Submit"/>
					</form>
				</div>
				<div id="login-container-footer">
					<div class="link-column">
						<ul>
							<li>Biology</li>
							<li><a href="http://www.youtube.com"  target="_blank">NCBI</a></li>
							<li><a href="http://www.youtube.com"  target="_blank">BioInformatics</a></li>
							<li><a href="http://www.youtube.com"  target="_blank">JStor</a></li>
						</ul>
					</div>
					<div class="link-column">
						<ul>
							<li>MCLA</li>
							<li><a href="http://www.youtube.com"  target="_blank">Campus Connection</a></li>
							<li><a href="http://www.youtube.com"  target="_blank">Biology Department</a></li>
							<li><a href="http://www.youtube.com"  target="_blank">Canvas</a></li>
						</ul>
					</div>
					<div class="link-column">	
						<ul>
							<li>Other?</li>
							<li><a href="http://www.youtube.com"  target="_blank">Youtube</a></li>
							<li><a href="http://www.youtube.com"  target="_blank">Twitter</a></li>
							<li><a href="http://www.youtube.com"  target="_blank">Facebook</a></li>
						</ul>
					</div>
				</div>
			</div>	
		</div>
	</body>
</html>

