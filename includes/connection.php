
<?php
// Database Connection variables 

echo $_SERVER['HTTP_HOST'];

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "afrorock";
} 

// Create Connection to database
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

date_default_timezone_set('Africa/Lagos');
