<h1>Hello FCharles</h1>
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

$sql = 'SELECT * FROM users';

$result = ($conn->query($sql));
$row = [];
if ($result->num_rows > 0)
    {
        // fetch all data from db into array
        $row = $result->fetch_all(MYSQLI_ASSOC);
    }


echo $row[0]['name'];

?>
