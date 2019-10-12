
<?php
$connection=mysqli_connect('localhost','root',"","[my_db]");
if(!$connection)
{
    echo"The Connection error".mysqli_connect_error();
}
//$password=$_POST['password'];
//$email=$_POST["email"];
//if(isset($_POST["password"]) AND $_POST["email"]){
//    $password=$_POST['password'];
//    $email=$_POST["email"];
//    $Sql="SELECT password ,email FROM  users WHERE password= '$password' AND email='$email' ";
//      $Result = mysqli_query($connection,$Sql);
//      $U=mysqli_fetch_all($Result,MYSQLI_BOTH);
//    print_r($Result);
//    mysqli_close($connection);
$password=$_POST['password'];
$username = $_POST["username"];
$Sql="SELECT password ,username FROM  users WHERE password='$password' AND username='$username'";
$Result=mysqli_query($connection,$Sql);
$U=mysqli_fetch_all($Result,MYSQLI_ASSOC);
mysqli_free_result($Result);
mysqli_close($connection);
?>
<?php
$username=$_POST["username"];
session_start();
$_SESSION["username"]= $username;
echo "".$_SESSION["username"];
//header('location:index.php');
//?>



<!DOCTYPE html>
<html>
<form action="" method="POST">
    <lable>
        Password:
    </lable>
    <input type="password" name="password">
    <lable>
        username:
    </lable>
    <input type="text" name="username">
    <input type="submit" name="submit"value="submit">
</form>
</html>