<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
    echo("successful");
}
    else{
        echo("not successful");
    }
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
}

$query= "insert into reservation values( '$name' , '$email' , '$phone' ,'$date' , '$time', '$guests')";

$data= mysqli_query($conn , $query);

if($data)
{
    echo ("data inserted  successfully into database");
}

else{
    echo "fail";
}
?>

  



