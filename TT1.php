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




if(isset($_POST['FORWARD'])){

  //  $my_query = "select * from direction WHERE 1 ";
   // $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO direction (FORWARD) VALUES ('Forward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['RIGHT'])){

    $my_query = "select * from direction WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO direction (RIGHTT) VALUES ('Right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['LEFT'])){

    $my_query = "select * from direction WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO direction (LEFTT) VALUES ('Left')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['STOP'])){

    $my_query = "select * from direction WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO direction (STOP) VALUES ('Stop')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['BACKWARD'])){

    $my_query = "select * from direction WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO direction (BACKWARD) VALUES ('Backward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}





?>