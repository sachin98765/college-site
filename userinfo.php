<?php
$con = mysqli_connect('localhost', 'root');
if ($con){
    echo "Connection Successfully";
}
else{
    "No Connection";
}

mysqli_select_db($con, 'sudu');

$id = $_POST['id'];
$user =  $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfodata (id, user, email, mobile, comment)
values('$id', '$user', '$email', '$mobile', '$comment')";

mysqli_query($con, $query);

echo "$query";

header('location:index.html');
?>