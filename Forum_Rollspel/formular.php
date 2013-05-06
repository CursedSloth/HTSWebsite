<?php
include '../Forum_Rollspel/connect.php';
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">  
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=latin-1" />
        <link rel="stylesheet" title="magnum" type="text/css" href="./CSS/magnum.css" />
		<link rel="alternate stylesheet" title="none" type="text/css" href="../CSS/empty.css.css" />	  
        <title>Forum Rollspel</title>	
    </head>
    <body>
        <div id="content">
            <div id="top">
               <div id="banner">Rollspel, På forum</div>
            </div>
            <div id="left">
					<div class="meny">
						<ul>
						<li><a href="index.html">Startsida</a></li>
						<li><a href="formular.php">Logga in</a></li>
						</ul>
					</div>
            </div>
            <div id="center-right">
				Forum Rollspel
                <div id="info">
				<h1 class="dokument-item-header">Inlägg och dylikt</h1>
				<p class="info">
				<!-- Ett formulär -->
<form action="login.php" method="post">
Username: <input type="text" name="myUserName">
Password: <input type="text" name="myPassword">
<input type="submit">
</form>
				<br> Site under construction.</p>
</div>
</div>


			<div id="footer">
				<p> &copy; 2013 Victor Ingvarsson.# 
				</p>
			</div>
        </div>
    </body>
</html>