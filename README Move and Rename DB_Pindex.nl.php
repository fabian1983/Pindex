<?PHP 
// PLace this file in root,
//Example public dir = /.../www/public
//Exampla place this file in /.../www/
// not vissble for public dir, so this can not entered by visitors, only by your http server

//SQL LOGIN
define('DB_SERVER', 'localhost:3307');
define('DB_USERNAME', 'username');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'database');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}