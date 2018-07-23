<?php
error_reporting(E_ALL || ~E_NOTICE);
session_start();
if ($_SESSION["email"]!="") {
    //echo $_SESSION['lastname'];
    $email=$_SESSION['email'];
    //echo $email;
    $id = $_GET['id'];
    $userId = $_SESSION['userid'];
    //echo $userId;
    $info1=$_SESSION['status1'];
    $info2=$_SESSION['status2'];
    $info3=$_SESSION['status3'];
    $info4=$_SESSION['status4'];
    $info5=$_SESSION['status5'];
    $info6=$_SESSION['status6'];
    $info7=$_SESSION['status7'];
    $info8=$_SESSION['status8'];
    $info9=$_SESSION['status9'];
     $con = mysqli_connect('localhost','id6553295_cailianda','dada123456','id6553295_mydb');
      $result2 = mysqli_query($con,"SELECT status FROM UserInfo WHERE id = $userId ");
    $row = mysqli_fetch_array($result2);
    //echo $row[0];
    if ($row[0]==0)
    {
        //echo "yeah";
        //echo $info2;
        //echo $id;
       // echo $information[1];
        for ($i=1;$i<=9;$i++)
        {
             $result3 = mysqli_query($con,"UPDATE UserInfo SET current=$id WHERE id = $userId");
            $result4 = mysqli_query($con,"UPDATE UserInfo SET status=1 WHERE id = $userId");
            if ($info1==1)
            {
                //echo yes;
                $result = mysqli_query($con,"UPDATE UserInfo SET useLab=1 WHERE id = $userId");
            }
            if ($info2==1)
            {
                $result = mysqli_query($con,"UPDATE UserInfo SET useComputer=1 WHERE id = $userId");
            }
            if ($info3==1)
            {
                $result = mysqli_query($con,"UPDATE UserInfo SET useAc=1 WHERE id = $userId");
            }
            if ($info4==1)
            {
                $result = mysqli_query($con,"UPDATE UserInfo SET useSpeaker=1 WHERE id = $userId");
            }
            if ($info5==1)
            {
                $result = mysqli_query($con,"UPDATE UserInfo SET useBoard=1 WHERE id = $userId");
            }
            if ($info6==1)
            {
                $result = mysqli_query($con,"UPDATE UserInfo SET usePrinter=1 WHERE id = $userId");
            }
            if ($info7==1)
            {
                $result = mysqli_query($con,"UPDATE UserInfo SET useProjector=1 WHERE id = $userId");
            }
            if ($info8==1)
            {
                $result = mysqli_query($con,"UPDATE UserInfo SET useTv=1 WHERE id = $userId");
            }
            if ($info9==1)
            {
                $result = mysqli_query($con,"UPDATE UserInfo SET useHackness=1 WHERE id = $userId");
            }
        }
       echo "Sign-In Success";//返回之前的页面
    }
    else
    {
        echo "You already sign-in a classroom，<a href='signout.php'>Sign-Out Previous One</a>";
    }
}else
{
    echo "You Haven't Login Yet，<a href='index.html'>Please Login First</a>";
}
   
    
?>