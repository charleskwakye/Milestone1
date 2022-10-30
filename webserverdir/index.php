<?php
$host = 'db';
$user = 'root';
$pass = '2000';
$db = 'milestone1db';
$conn = new mysqli($host, $user, $pass,$db);

$sql = 'SELECT * FROM users';

$result = ($conn->query($sql));
$row = [];
if ($result->num_rows > 0)
    {
        // fetch all data from db into array
        $row = $result->fetch_all(MYSQLI_ASSOC);
    }


echo "<h1>" . $row[0]['name'] ." has reached Milestone 1!!</h1>";

?>
