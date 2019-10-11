<?php
$connection=mysqli_connect('localhost','root',"","[my_db]");
if(!$connection)
{
    echo"The Connection error".mysqli_connect_error();
}

$first_name = $_POST["firstName"];
$last_name = $_POST["lastName"];
$username = $_POST["userName"];
$password=$_POST["password"];
$email=$_POST["email"];

$Sql="INSERT INTO users(first_name,last_name,username,password,email)VALUES ('$first_name','$last_name','$username','$password','$email')";
 if(mysqli_query($connection,$Sql)){
     header('location:login.php');
 }
 else{
     echo"";
 }

mysqli_close($connection);
?>
<?php
if(isset($_POST["submit"])) {
if (empty($_POST["firstName"])) {
    echo " Plase put your firstName";
}
else {
    $firstName = $_POST["firstName"];
    if (!preg_match('/^[a-zA-Z]+$/',$firstName)) {
        echo "firstName must be vlid";
    }
}
if (empty($_POST["lastName"])) {
    echo " Plase put your lastName ";
}
else {
    $lastName = $_POST["lastName"];
    if (!preg_match('/^[a-zA-Z]+$/',$lastName)) {
        echo "lastName must be vaild";
    }
}
    if (empty($_POST["userName"])) {
        echo " Plase put your userName";
    }
    else {
        $userName = $_POST["userName"];
        if (!preg_match('/^[a-zA-Z]+$/',$userName)) {
            echo "userName must be vlid";
        }
    }
        if (empty($_POST["password"])) {
        echo " Plase put your password";
    }
    else{
        $password=$_POST["password"];
        if (!preg_match('/^[a-zA-Z_0-9]+$/',$password)){
            echo" password must be vlid";
        }
    }
        if (empty($_POST["email"])) {
        echo " Plase put your email";
    }
    else{
        $email=$_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo"email must be vlid";
        }
    }
}

?>
<!DOCTYPE html>
<html>
<form action="" method="POST">
  <lable>
      FirstName:
  </lable>
    <input type="text" name="firstName">
<lable>
    LastName:
</lable>
<input type="text" name="lastName">
<lable>
    UserName:
</lable>
<input type="text" name="userName">
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

