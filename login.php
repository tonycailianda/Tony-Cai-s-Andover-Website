<?php 
session_start();
$email=$_POST['email'];
$password=$_POST['pass'];
$_SESSION["email"]="";
$_SESSION["userid"]="";
$link = mysqli_connect('localhost','id6553295_cailianda','dada123456','id6553295_mydb');
$query=mysqli_query($link,"SELECT id,email,password FROM UserInfo WHERE email = '$email'");//找到与输入用户名相同的信息，注意要取出的信息有两项
$row = mysqli_fetch_array($query);
if($_POST['submit']){    
    if($row['email']==$email && $row['password']==$password){
        setcookie('uname',$email,time()+7200);
        $_SESSION["email"]=$email;
        $_SESSION["userid"]=$row['id'];
        echo $_SESSION["userid"];
        echo "<script>alert('successfully');window.location= 'home.html';</script>";
    }
    else echo "<script>alert('failed');history.go(-1)</script>";//返回之前的页面
}
include('index.html');?>
