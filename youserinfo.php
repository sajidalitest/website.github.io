<?php

$con = mysqli_connect("localhost", "root", "", "mywebsite");
If($con){
    echo "right";
}
else{
    echo "not";
}
mysqli_select_db($con,'mywebsite');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];
$query = "insert into  youserinfodata (user,email,mobile,comment)
values ('$user','$email','$mobile','$comment')";
mysqli_query($con, $query);
header('location:index.php');

?>