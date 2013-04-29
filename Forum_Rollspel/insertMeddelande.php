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
						<li><a href="Login.php">Logga in</a></li>
						<li><a href="sida2.php">Meny 2</a></li>
						<li><a href="sida3.php">Meny 3</a></li>
						<li><a href="sida4.php">Meny 4</a></li>
						<li><a href="sida5.php">Meny 5</a></li>
						</ul>
					</div>
            </div>
            <div id="center-right">
				Forum Rollspel
                <div id="info">
				<h1 class="dokument-item-header">Inlägg och dylikt</h1>
				<p class="info">Här kommer man att se alla inlägg och dylikt.<br> Site under construction.</p>
<?php
         $query = "SELECT thread, sender, subject, msg FROM meddelande";
         //echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
         if ($result === false) {
	         echo '<strong> Error when you asked a question to your databas. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
		
         $num=mysql_numrows($result);
         if($num==0) {
             echo '<strong>Your question is empty</strong>';
         }
         else {
             echo "<ul>";
             for ($i=0;$i<$num;$i++) {
                 $temp = mysql_fetch_array($result);
	             echo "<li>" . $temp["subject"] . "  :  ". $temp["msg"] . "</li>";
             }
             echo "</ul>";
        }
?>
</div>
</div>


			<div id="footer">
				<p> &copy; 2013 Victor Ingvarsson.# 
				</p>
			</div>
        </div>
    </body>
</html>