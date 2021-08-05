<?php
//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'control panel 1';


//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

$sql = mysqli_query($connection, "SELECT * FROM direction ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);





if($print_data[1]){
    echo $print_data[1];
}else if($print_data[2]){
    echo $print_data[2];
}else if($print_data[3]){
    echo $print_data[3];
}else if($print_data[4]){
    echo $print_data[4];
}else if($print_data[5]){
    echo $print_data[5];
}















?>