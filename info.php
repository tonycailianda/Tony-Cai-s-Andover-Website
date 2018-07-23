<?php
    //error_reporting(E_ALL || ~E_NOTICE);
    session_start();
    $email = $_SESSION['email'];
    if ($_SESSION["email"]!="") {
        $con = mysqli_connect('localhost','id6553295_cailianda','dada123456','id6553295_mydb');
        $result = mysqli_query($con,"SELECT ifFaculty FROM UserInfo WHERE email = $email ");
        $row = mysqli_fetch_array($result);
        
        $result2 = mysqli_query($con,"SELECT id FROM UserInfo");
        $row2 = mysqli_fetch_array($result2);
        $count = count($row2);
        
        for ($i=1;$i<=$count;$i++)
        {
            if ($row[0]==0)
            {
                $result3 = mysqli_query($con,"SELECT people FROM UserInfo WHERE email = $email ");
                $row3 = mysqli_fetch_array($result3);
                $result4 = mysqli_query($con,"SELECT capacity FROM UserInfo WHERE email = $email ");
                $row4 = mysqli_fetch_array($result4);
                $result5 = mysqli_query($con,"SELECT name FROM BuildingInfo WHERE id = $i ");
                $row5 = mysqli_fetch_array($result5);
                $result6 = mysqli_query($con,"SELECT location FROM BuildingInfo WHERE id = $i ");
                $row6 = mysqli_fetch_array($result6);
                echo "<a href='SignInPage.php?id=$i'>$row5[0] At $row6[0] Has $row3[0] People (Maximum Capacity: $row4[0] People)</a><br>";
            }
            $firsttemp=array();
            $lasttemp=array();
            if ($row[0]=1)
            {
                $result8 = mysqli_query($con,"SELECT id FROM UserInfo");
                $row8 = mysqli_fetch_array($result8);
                $peoCount=count($row8);
                for ($m=1;$m<=$peoCount;$m++)
                {
                    $result9 = mysqli_query($con,"SELECT current FROM UserInfo WHERE id = $m");
                    $row9 = mysqli_fetch_array($result9);
                    if ($row9[0]==$i)
                    {
                        $result10 = mysqli_query($con,"SELECT lastname FROM UserInfo WHERE id = $m");
                        $row10 = mysqli_fetch_array($result10);
                        $result11 = mysqli_query($con,"SELECT firstname FROM UserInfo WHERE id = $m");
                        $row11 = mysqli_fetch_array($result11);
                        $firsttemp[$m]=row11[0];
                        $lasttemp[$m]=row10[0];
                    }
                }
                $result3 = mysqli_query($con,"SELECT people FROM UserInfo WHERE email = $email ");
                $row3 = mysqli_fetch_array($result3);
                $result4 = mysqli_query($con,"SELECT capacity FROM UserInfo WHERE email = $email ");
                $row4 = mysqli_fetch_array($result4);
                $result5 = mysqli_query($con,"SELECT name FROM BuildingInfo WHERE id = $i ");
                $row5 = mysqli_fetch_array($result5);
                $result6 = mysqli_query($con,"SELECT location FROM BuildingInfo WHERE id = $i ");
                $row6 = mysqli_fetch_array($result6);
                echo "<a href='SignInPage.php?id=$i'>$row5[0] At $row6[0] Has $row3[0] People (Maximum Capacity: $row4[0] People)</a><br>";
                echo "List Of People Who Are In This Building: <br/>"; 
                for ($i=1;$i<=count($firsttemp);$i++)
                {
                    echo "$firsttemp[$i] $lasttemp[$i] <br/>";
                }
            }
            echo "<br/><br/><br/><br/><br/>";
        }
    }
    else
    {
        echo "You Haven't Login Yet，<a href='index.html'>Please Login First</a>";
    }
?>