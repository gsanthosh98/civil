<?php
require_once 'dbconfig.php';
$name2 = $_POST['name1'];
$mail2 = $_POST['mail1'];
$phone2 = $_POST['phone1'];
$college2 = $_POST['college1'];
$year2 = $_POST['year1'];
$dept2 = $_POST['dept1'];
$course2 = $_POST['course1'];
$password2 = $_POST['password1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
    $sql = "SELECT id FROM user where reg = '$mail2'";
    if ($res = $conn->query($sql)) {
        if ($res->fetchColumn() > 0) {
            throw new Exception("Mail id has already been registered.");
        }
    }
    $password2 = password_hash($password2, PASSWORD_BCRYPT);
    $count = $conn->exec("insert into user(name, emailid, phoneno, college, year, dept, course, password) values ('$name2', '$mail2', '$phone2', '$college2', '$year2', '$dept2', '$course2', '$password2')");
    echo "Registered as $name2. Login to your account.";
} catch (PDOException $pe) {
    die("Could not connect to the server. Please check your internet connection.");
}
 // Connection Closed
?>
