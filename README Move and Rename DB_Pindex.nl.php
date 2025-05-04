<?PHP 
// move this file and place this file in root,
// Example public dir = /.../www/public
// Example place this file in /.../www/ == Not vissble for public dir, so this can not entered by visitors, only by your http server

//SQL LOGIN
define('DB_SERVER', 'localhost:3307');
define('DB_USERNAME', 'username');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'database');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    echo "died on making connection"; 
    die("ERROR: Could not connect. " . mysqli_connect_error());
}