
<?php
$connection=mysqli_connect('localhost','root',"","[my_db]");
if(!$connection)
{
    echo"The Connection error".mysqli_connect_error();
}
$password=$_POST['password'];
$email=$_POST["email"];
if(isset($_POST["password"]) AND $_POST["email"]){
    $password=$_POST['password'];
    $email=$_POST["email"];
    $Sql="SELECT password ,email FROM  users WHERE password= '$password' AND email='$email' ";
      $Result = mysqli_query($connection,$Sql);
      $U=mysqli_fetch_all($Result,MYSQLI_BOTH);
    print_r($Result);
    mysqli_close($connection);
}
?>



<!DOCTYPE html>
<html>
<form action="" method="POST">
    <lable>
        Password:
    </lable>
    <input type="password" name="password">
    <lable>
        Email:
    </lable>
    <input type="email" name="email">
    <input type="submit" name="submit"value="submit">
</form>
</html>