<?php
session_start();
if ($_SESSION["email"]!="") {
    $userId= $_SESSION["userid"];
    $con = mysqli_connect('localhost','id6553295_cailianda','dada123456','id6553295_mydb');
                $result = mysqli_query($con,"UPDATE UserInfo SET useLab=0 WHERE id = $userId");
                $result = mysqli_query($con,"UPDATE UserInfo SET useComputer=0 WHERE id = $userId");
                $result = mysqli_query($con,"UPDATE UserInfo SET useAc=0 WHERE id = $userId");
                $result = mysqli_query($con,"UPDATE UserInfo SET useSpeaker=0 WHERE id = $userId");
                $result = mysqli_query($con,"UPDATE UserInfo SET useBoard=0 WHERE id = $userId");
                $result = mysqli_query($con,"UPDATE UserInfo SET usePrinter=0 WHERE id = $userId");
                $result = mysqli_query($con,"UPDATE UserInfo SET useProjector=0 WHERE id = $userId");
                $result = mysqli_query($con,"UPDATE UserInfo SET useTv=0 WHERE id = $userId");
                $result = mysqli_query($con,"UPDATE UserInfo SET useHackness=0 WHERE id = $userId");
                $result = mysqli_query($con,"UPDATE UserInfo SET current=0 WHERE id = $userId");
                $result = mysqli_query($con,"UPDATE UserInfo SET status=0 WHERE id = $userId");
                 echo "Sign-Out Success，<a href='home.html'>Go Back & Try Again</a>";
        }
        else
{
    echo "You Haven't Login Yet，<a href='index.html'>Please Login First</a>";
}
?>