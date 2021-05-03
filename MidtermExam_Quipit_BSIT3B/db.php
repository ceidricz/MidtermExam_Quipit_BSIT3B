<!-----------------------------------------LOGIN-------------------------------------------------------->
<?php session_start();
$error = NULL;


if(isset($_POST['login'])){
$n1=$_POST['user'];
$n2=$_POST['pass'];
$act = "Login";

$link = NEW MySQLi('Localhost','root','','infoassu');

$tb1="SELECT * FROM `admin` WHERE `user` = '".$n1."' and `pass` = '".$n2."'";
if($result=mysqli_query($link,$tb1)){
  $check = mysqli_num_rows($result);
}
if($check>0){
  header ('Location: logs.php');
  echo '<script> alert("Login Successful")</script>';
}

$tb2="SELECT * FROM `user` WHERE `username` = '".$n1."' and `password` = '".$n2."'";

if($result1 =mysqli_query($link,$tb2)){
  $check1 = mysqli_num_rows($result1);
  $row = mysqli_fetch_array($result1);
}
if($check1>0){
  $query = "INSERT INTO logs(user,activity) values ('$n1','$act')";
  $resultset = mysqli_query($link, $query);
  header ('Location: ceid2.php');
  $_SESSION['user'] = $n1;
  $_SESSION['pass'] = $n2;
  
}

else{
  echo '<script>alert("Login Failed")</script>'; 
}
}
?>

<!-----------------------------------------LOGOUT-------------------------------------------------------->


<?php
if(isset($_POST['logout']))
{
$hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "infoassu";

  $connect = mysqli_connect($hostname, $username, $password, $dbname);

  $us = $_SESSION['user'];
  $act = "Logout";
    
  $query = "INSERT INTO logs(user, activity) values ('$us','$act')";

  $result = mysqli_query($connect, $query);

  if($result)
  {
    header('Location: ceid.php');
  }
  else
  {
    echo "fail";

  }

  mysqli_close($connect);

}
?>

<!-----------------------------------------CHANGE PASSWORD-------------------------------------------------------->

<?php
if(isset($_POST['change'])){
  $id = $_POST['id'];
  $us = $_POST['user'];
  $opwd = $_POST['old'];
  $conf = $_POST['cpwd'];
  $act = "Change Password";
 
$tb2= "UPDATE user set password = '$_POST[new]' where id = '$id'";

if(mysqli_query($link,$tb2)){
  $query = "INSERT INTO logs(user,activity) values ('$us','$act')";
  $resultset = mysqli_query($link, $query);
  header ('Location: ceid.php');
  echo '<script> alert("Change Password Successfully")</script>';
}
else{
  echo '<script>alert("Login Failed")</script>'; 
}

}
?>

<!-----------------------------------------AUTHENTICATION CODE-------------------------------------------------------->

<?php
if(isset($_POST['submit']))
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "infoassu";

  $connect = mysqli_connect($hostname, $username, $password, $dbname);

  $y = $_SESSION['user'];
  $x = $_SESSION['pass'];
  $code = $_POST['code'];
    
  $query = "INSERT INTO authentication(user, pass, vkey) values ('$y','$x','$code')";

  $result = mysqli_query($connect, $query);

  if($result)
  {
    header('Location: logout.php');
  }
  else
  {
    echo "fail";

  }

  mysqli_close($connect);

}
?>