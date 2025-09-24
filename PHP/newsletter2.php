<?php
$email=$_POST['email'];
$msg=$_POST['message'];
$cnx=mysqli_connect('localhost','root','');
mysqli_select_db($cnx,'newsletter');
$query="insert into message values('$email','$msg')";
mysqli_query($cnx,$query);
header('location:productsnewsletter.html');
?>