<?php 
session_start();
$email=$_POST['email'];
$password=$_POST['pass'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$fcode=$_POST['fcode'];
$_SESSION['isFaculty']=0;
$a=1;

$link = mysqli_connect('localhost','id6553295_cailianda','dada123456','id6553295_mydb');
$query=mysqli_query($link,"SELECT email,password FROM UserInfo WHERE email = '$email'");//找到与输入用户名相同的信息，注意要取出的信息有两项
$row = mysqli_fetch_array($query);
// if($_POST['submit']){    
//     if($row['email']==$email && $row['password']==$password){
//         setcookie('uname',$email,time()+7200);
//         echo "<script>alert('successfully');window.location= 'index.php';</script>";
//     }
//     else echo "<script>alert('failed');history.go(-1)</script>";//返回之前的页面
// }

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
   echo "<script>alert('Illegal Email Address!');window.location= 'index.html';</script>";
   return 0;
}
if($_POST['submit']){    
    if($row['email']==$email){
        //setcookie('uname',$email,time()+7200);
        echo "<script>alert('Your E-mail Had Been Registered Alreay!');window.location= 'RegisterPage.html';</script>";
    }
    else
    {
            $sql = "INSERT INTO UserInfo(firstname, lastname, email, password)  VALUES(?, ?, ?, ?)";
           
        // 为 mysqli_stmt_prepare() 初始化 statement 对象
        $stmt = mysqli_stmt_init($link);
     
        //预处理语句
        if (mysqli_stmt_prepare($stmt, $sql)) {
            // 绑定参数
            mysqli_stmt_bind_param($stmt, 'ssss', $firstname, $lastname, $email, $password);
            mysqli_stmt_execute($stmt);
        }
        if ($fcode=="facultyonly")
        {
            $_SESSION['isFaculty']=1;
            $result = mysqli_query($link,"UPDATE UserInfo SET isFaculty=1 WHERE email = $email");
            //$a=2;
        }
        
        echo "<script>alert('Register Success! $a');window.location= 'index.html';</script>";
    }
}
include('index.html');?>
