<?php
echo "My first PHP script ";
$txt1="Hello world ";
$txt2="What a nice day! ";
$t=date("H");
if ($t<"20")
{
echo "Have a good day! ";
}
else
{
echo "Have a good night! ";
}
for ($i=1; $i<=5; $i++)
{
echo "The number is " .$i. "<br>";
}
$server="localhost";
$user="root";
$password="";
$database="test";
$con =
mysql_connect ($server, $user, $password);
if (!$con) {
die('Could not connect: ' .
mysql_error() );
}
echo 'Connected successfully to database server';
mysql_select_db($database);
$query = mysql_query("SELECT namn FROM test");
while ($temp = mysql_fetch_array($query));
{
echo $temp["namn"];
}
mysql_close($con);
?>
