<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo"Connection succesful";
}else{
    echo"No connection";
}
mysqli_select_db($con, 'userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfo (user,email,mobile,comment)
values('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

echo "$query";
header('loactaion:index.php');






?>