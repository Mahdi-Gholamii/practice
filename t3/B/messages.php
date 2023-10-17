<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "db_users";

$connect = mysqli_connect($host, $username, $password, $db_name);

$query =  "INSERT INTO messages (user_id, send_at, content, updated_at, sender_id, is_deleted, status)
VALUES (252, 140205251235, 'hi iam from Iran', 140205271625, 1657, FALSE ,'seen');";

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