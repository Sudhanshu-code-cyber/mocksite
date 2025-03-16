<?php
$connect = mysqli_connect("localhost","root","","mocksite");

function redirect($page){
echo "<script>window.open('$page' ,'_self')</script>";
}

function message($msg){
    echo "<script>alert('$msg')</script>";
}