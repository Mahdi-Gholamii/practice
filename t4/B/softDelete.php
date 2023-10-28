<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "chatroom";

$connect = mysqli_connect($host, $username, $password, $db_name);

$query =  "UPDATE pv_chat SET is_deleted = TRUE WHERE id = 1;";

if(mysqli_connect_errno($connect))
{
    die("اتصال به پایگاه داده به درستی انجام نشد!" . mysqli_connect_error());

}


if( mysqli_query( $connect, $query ) ){
    echo "پیام به دستور مدیر حذف شد!";
}
else {
    echo "Error: " . mysqli_error($connect);
}

mysqli_close($connect);
?>