<!-- Kom ihåg att logga in till databasen först! -->
<?php
include '../Forum_Rollspel/connect.php';
?>
<?php
         $query = "SELECT namn FROM sender WHERE namn='$_POST[myUser]' AND password='$_POST[myPassword]'";
         echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
		 session_start();
		 session_unset();
         if (mysql_numrows($result) == 1) {
		      $_SESSION['session_user']=$_POST[myUser];
			  // header('Location: index.php');
		 }
		 else {
			 // header('Location: login.html'); 
		 }
		
?>