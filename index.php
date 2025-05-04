<?php


echo "
	<h1>We are live</h1> 
	<a href='/'>Php Coding -> bootstrap</a><br>
	<a href='index.html'>page 1 example (need rebuild) </a><br>
	<a href='index2.html'>page 2 example (need rebuild) </a><br>
	<a href='index2.html'>page 3 example (need rebuild) </a><br>
		<a href='blank.php'>Blank template rebuild</a><br>
";

$DB_config = '../DB_Pindex.nl.php'; // ../ going 1 dir down

if (file_exists($DB_config)) { include "$DB_config";} 
else { echo "The file $DB_config does not exist.<br> Make the config outside public dir"; }

?>

