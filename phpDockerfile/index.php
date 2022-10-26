<h1>Hello Charles</h1>
<?php
$host = 'mysql-container';
$user = 'root';
$pass = '2000';
$db = 'milestone1db';
$conn = new mysqli($host, $user, $pass,$db);

if($conn->connect_error) {
    echo 'Connection failed: ' . $conn->connect_error;
}
echo "Connected to MySQL successfully!";
?>
