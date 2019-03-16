<?php 
$connect = mysqli_connect("localhost","root","")or die(mysqli_error());

mysqli_select_db($connect,"school_ls")or die (mysqli_error());
?>