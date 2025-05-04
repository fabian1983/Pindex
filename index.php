<?php
$filename = '../DB_Pindex.nl.php'; // ../ going 1 dir down

if (file_exists($filename)) { echo "The file $filename exists";} 
else { echo "The file $filename does not exist.<br> Make the config outside public dir"; }


echo "
	<h1>We are live</h1> 
	<a href='/'>Php Coding -> bootstrap</a>
";

?>