<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "db_users";

$connect = mysqli_connect($host, $username, $password, $db_name);

$query =  "INSERT INTO users ( name, family, email, password ,role ,age ,gender ,phone , profile_picture ,is_active ,last_login)
VALUES ('Mahdi', 'Gholami', 'mahdi.gholami.16....@gmail.com', 12345678, 'ADMIN', 19, 'NULL', 09123456789, 'https://pic....com/image1', TRUE, 140206281013);";

if(mysqli_connect_errno($connect))
{
    echo "اتصال به پایگاه داده به درستی انجام نشد!" . mysqli_connect_error();
    die();
}


if( mysqli_query( $connect, $query ) ){
    echo "مقادیر با موفقیت ثبت شدند";
}
else {
    echo "Error: " . mysqli_error($connect);
}

mysqli_close($connect);
?>