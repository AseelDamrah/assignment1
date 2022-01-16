
<title>UserInfo</title>

<?php

if (isset($_POST["register"])){
 $FName = $_POST["first-name"];
 $LName = $_POST["last-name"];
 $email = $_POST["email-mobile"];
 $pass  = $_POST["up-password"];
 $day   = $_POST["birth-day"];
 $month = $_POST["birth-month"];
 $year = $_POST["birth-year"];
 $gender = $_POST["gen"];

 echo "your name is $FName $LName"."<br>";
 echo "your email is $email"."<br>";
 echo "your password is $pass"."<br>";
 echo "your birthday is  $day / $month / $year "."<br>";
 echo "your gender is $gender"."<br>";
}
else{
    echo "EROR 404";
}
?>