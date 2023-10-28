<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "chatroom";

$connect = mysqli_connect($host, $username, $password, $db_name);

$query =  "INSERT INTO pv_chat (sender ,receiver ,date ,content ,is_check ,is_deleted ) 
VALUES (25 ,12 ,'140211252215' ,'Hi this is a test mes chatroom' , false , false)";

if(mysqli_connect_errno($connect))
{
    die("اتصال به پایگاه داده به درستی انجام نشد!" . mysqli_connect_error());

}


if( mysqli_query( $connect, $query ) ){
    echo "مقادیر با موفقیت ثبت شدند";
}
else {
    echo "Error: " . mysqli_error($connect);
}

mysqli_close($connect);
?>