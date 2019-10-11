<?php
$connection=mysqli_connect('localhost','root',"123456","[my_db]");
if(!$connection){
    echo"The Connection error".mysqli_connect_error();
}
?>
