<?php
    error_reporting(E_ALL || ~E_NOTICE);
   session_start();
   if ($_SESSION["email"]!="") {
    //echo $_SESSION['lastname'];
    $key=$_POST["want"];
    $storage=array(1,1,1,1,1,1,1);
    $bstatus=array(1,1,1,1,1,1,1);
    $status=array(0,0,0,0,0,0,0,0,0,0);
    $status1=0;
    $status2=0;
    $status3=0;
    $status4=0;
    $status5=0;
    $status6=0;
    $status7=0;
    $status8=0;
    $status9=0;
    $buildingNumber=6;
    $sum=0;
    $data = array();
    $data[0]=(-1);
    $data2 = array ();
    $data2[0]=(-1);
     $con = mysqli_connect('localhost','id6553295_cailianda','dada123456','id6553295_mydb');
     
     for ($i=0;$i<count($key);$i++)
     {
         if ($key[$i]=="lab")
         {  $status[1]=1;
            $status1=1;
            $result = mysqli_query($con,"SELECT id FROM BuildingInfo WHERE lab>0 ");
            $row = mysqli_fetch_array($result);
             //echo $row[0];
             $result2 = mysqli_query($con,"SELECT lab FROM BuildingInfo WHERE $row[0] ");
            $row2 = mysqli_fetch_array($result);
             $result3 = mysqli_query($con,"SELECT labUser FROM BuildingInfo WHERE $row[0] ");
            $row3 = mysqli_fetch_array($result);
            
                $storage[$row[0]]+=1;
                while($row = mysqli_fetch_array($result))
                {
                     //echo $row['id'];
                    $storage[$row['id']]+=1;
                    //echo $storage[$row['id']];
                }
            
             
         }
         if ($key[$i]=="computer")
         {$status2=1;
             $status[2]=2;
            $result = mysqli_query($con,"SELECT id FROM BuildingInfo WHERE computer>0 ");
            $row = mysqli_fetch_array($result);
           //echo $row[0];
            //  $result2 = mysqli_query($con,"SELECT computer FROM BuildingInfo WHERE $row[0] ");
            // $row2 = mysqli_fetch_array($result2);
            //  $result3 = mysqli_query($con,"SELECT computerUser FROM BuildingInfo WHERE $row[0] ");
            // $row3 = mysqli_fetch_array($result3);
            // if ($row2[0]>$row3[0])
            // {
                $storage[$row[0]]+=1;
                while($row = mysqli_fetch_array($result))
                {
                     //echo $row['id'];
                    $storage[$row['id']]+=1;
                    //echo $storage[$row['id']];
                }
         //}
         }
         if ($key[$i]=="ac")
         {$status[3]=3;$status3=1;
            $result = mysqli_query($con,"SELECT id FROM BuildingInfo WHERE ac>0 ");
            $row = mysqli_fetch_array($result);
             //echo $row[0];
            //  $result2 = mysqli_query($con,"SELECT ac FROM BuildingInfo WHERE $row[0] ");
            // $row2 = mysqli_fetch_array($result);
            //  $result3 = mysqli_query($con,"SELECT acUser FROM BuildingInfo WHERE $row[0] ");
            // $row3 = mysqli_fetch_array($result);
           
                $storage[$row[0]]+=1;
                while($row = mysqli_fetch_array($result))
                {
                     //echo $row['id'];
                    $storage[$row['id']]+=1;
                    //echo $storage[$row['id']];
                }
            
         }
         if ($key[$i]=="speaker")
         {$status[4]=4;$status4=1;
            $result = mysqli_query($con,"SELECT id FROM BuildingInfo WHERE speaker>0 ");
            $row = mysqli_fetch_array($result);
             //echo $row[0];
            //  $result2 = mysqli_query($con,"SELECT speaker FROM BuildingInfo WHERE $row[0] ");
            // $row2 = mysqli_fetch_array($result);
            //  $result3 = mysqli_query($con,"SELECT speakerUser FROM BuildingInfo WHERE $row[0] ");
            // $row3 = mysqli_fetch_array($result);
            
                $storage[$row[0]]+=1;
                while($row = mysqli_fetch_array($result))
                {
                     //echo $row['id'];
                    $storage[$row['id']]+=1;
                    //echo $storage[$row['id']];
                }
            
         }
         if ($key[$i]=="board")
         {$status[5]=5;$status5=1;
            $result = mysqli_query($con,"SELECT id FROM BuildingInfo WHERE board>0 ");
            $row = mysqli_fetch_array($result);
           //echo $row[0];
            //  $result2 = mysqli_query($con,"SELECT board FROM BuildingInfo WHERE $row[0] ");
            // $row2 = mysqli_fetch_array($result);
            //  $result3 = mysqli_query($con,"SELECT boardUser FROM BuildingInfo WHERE $row[0] ");
            // $row3 = mysqli_fetch_array($result);
            
                $storage[$row[0]]+=1;
                while($row = mysqli_fetch_array($result))
                {
                     //echo $row['id'];
                    $storage[$row['id']]+=1;
                    //echo $storage[$row['id']];
                }
            
         }
         if ($key[$i]=="printer")
         {$status[6]=6;$status6=1;
            $result = mysqli_query($con,"SELECT id FROM BuildingInfo WHERE printer>0 ");
            $row = mysqli_fetch_array($result);
             //echo $row[0];
            //  $result2 = mysqli_query($con,"SELECT printer FROM BuildingInfo WHERE $row[0] ");
            // $row2 = mysqli_fetch_array($result);
            //  $result3 = mysqli_query($con,"SELECT printerUser FROM BuildingInfo WHERE $row[0] ");
            // $row3 = mysqli_fetch_array($result);
            
                $storage[$row[0]]+=1;
                while($row = mysqli_fetch_array($result))
                {
                     //echo $row['id'];
                    $storage[$row['id']]+=1;
                    //echo $storage[$row['id']];
                }
            
         }
         if ($key[$i]=="projector")
         {$status[7]=7;$status7=1;
            $result = mysqli_query($con,"SELECT id FROM BuildingInfo WHERE projector>0 ");
            $row = mysqli_fetch_array($result);
             //echo $row[0];
            //  $result2 = mysqli_query($con,"SELECT projector FROM BuildingInfo WHERE $row[0] ");
            // $row2 = mysqli_fetch_array($result);
            //  $result3 = mysqli_query($con,"SELECT projectorUser FROM BuildingInfo WHERE $row[0] ");
            // $row3 = mysqli_fetch_array($result);
            
                $storage[$row[0]]+=1;
                while($row = mysqli_fetch_array($result))
                {
                     //echo $row['id'];
                    $storage[$row['id']]+=1;
                    //echo $storage[$row['id']];
                }
            
         }
         if ($key[$i]=="tv")
         {$status[8]=8;$status8=1;
            $result = mysqli_query($con,"SELECT id FROM BuildingInfo WHERE tv>0 ");
            $row = mysqli_fetch_array($result);
             //echo $row[0];
            //  $result2 = mysqli_query($con,"SELECT tv FROM BuildingInfo WHERE $row[0] ");
            // $row2 = mysqli_fetch_array($result);
            //  $result3 = mysqli_query($con,"SELECT tvUser FROM BuildingInfo WHERE $row[0] ");
            // $row3 = mysqli_fetch_array($result);
            
                $storage[$row[0]]+=1;
                while($row = mysqli_fetch_array($result))
                {
                     //echo $row['id'];
                    $storage[$row['id']]+=1;
                    //echo $storage[$row['id']];
                }
         }
         if ($key[$i]=="hackness")
         {$status[9]=9;$status9=1;
            $result = mysqli_query($con,"SELECT id FROM BuildingInfo WHERE hackness>0 ");
            $row = mysqli_fetch_array($result);
            //  //echo $row[0];
            //  $result2 = mysqli_query($con,"SELECT hackness FROM BuildingInfo WHERE $row[0] ");
            // $row2 = mysqli_fetch_array($result);
            //  $result3 = mysqli_query($con,"SELECT hacknessUser FROM BuildingInfo WHERE $row[0] ");
            // $row3 = mysqli_fetch_array($result);
            if ($row2[0]>$row3[0])
            {
                $storage[$row[0]]+=1;
                while($row = mysqli_fetch_array($result))
                {
                     //echo $row['id'];
                    $storage[$row['id']]+=1;
                    //echo $storage[$row['id']];
                }
            }
         }
     }
     
      for ($i=1;$i<=6;$i++)
      {
         if ($storage[$i]>count($key))
         {
                 $sum+=1;
                 $result = mysqli_query($con,"SELECT people FROM BuildingInfo WHERE id = $i ");
                 $row = mysqli_fetch_array($result);
                 $result1 = mysqli_query($con,"SELECT capacity FROM BuildingInfo WHERE id = $i ");
                 $row1 = mysqli_fetch_array($result1);
                 if ($row1[0]>$row[0])
                 {
                     $data[$sum]=((10-count($key))*100+$row[0]/$row1[0]*100);
                     $data2[$i]=((10-count($key))*100+$row[0]/$row1[0]*100);
                     //echo $row1[0]+" ";
                     //echo $row[0]+" ";
                    // echo $data[$i][0];
                 }
                 
         }
      }
      
    
      sort($data);
    
    //echo $sum;
    $test = 1;
    for ($i=1;$i<=$sum;$i++)
    {
        for ($j=1;$j<=$buildingNumber;$j++)
        {
            if ($data[$i]==$data2[$j])
            {
                for ($m=1;$m<=9;$m++)
                {
                    if ($status[$m]==1)
                    {
                        $result3 = mysqli_query($con,"SELECT lab FROM BuildingInfo WHERE id = $j ");
                        $row3 = mysqli_fetch_array($result3);
                        $result4 = mysqli_query($con,"SELECT labUser FROM BuildingInfo WHERE id = $j ");
                        $row4 = mysqli_fetch_array($result4);
                        if ($row4[0]>=$row3[0])
                        {
                            $test=0;
                        }
                    }
                     if ($status[$m]==2)
                    {
                        //echo "yesComputer";
                        $result3 = mysqli_query($con,"SELECT computer FROM BuildingInfo WHERE id = $j ");
                        $row3 = mysqli_fetch_array($result3);
                        $result4 = mysqli_query($con,"SELECT computerUser FROM BuildingInfo WHERE id = $j ");
                        $row4 = mysqli_fetch_array($result4);
                        if ($row4[0]>=$row3[0])
                        {
                            $test=0;
                        }
                    }
                     if ($status[$m]==3)
                    {
                        $result3 = mysqli_query($con,"SELECT ac FROM BuildingInfo WHERE id = $j ");
                        $row3 = mysqli_fetch_array($result3);
                        $result4 = mysqli_query($con,"SELECT acUser FROM BuildingInfo WHERE id = $j ");
                        $row4 = mysqli_fetch_array($result4);
                        if ($row4[0]>=$row3[0])
                        {
                            $test=0;
                        }
                    }
                     if ($status[$m]==4)
                    {
                        $result3 = mysqli_query($con,"SELECT speaker FROM BuildingInfo WHERE id = $j ");
                        $row3 = mysqli_fetch_array($result3);
                        $result4 = mysqli_query($con,"SELECT speakerUser FROM BuildingInfo WHERE id = $j ");
                        $row4 = mysqli_fetch_array($result4);
                        if ($row4[0]>=$row3[0])
                        {
                            $test=0;
                        }
                    }
                     if ($status[$m]==5)
                    {
                        $result3 = mysqli_query($con,"SELECT board FROM BuildingInfo WHERE id = $j ");
                        $row3 = mysqli_fetch_array($result3);
                        $result4 = mysqli_query($con,"SELECT boardUser FROM BuildingInfo WHERE id = $j ");
                        $row4 = mysqli_fetch_array($result4);
                        if ($row4[0]>=$row3[0])
                        {
                            $test=0;
                        }
                    }
                     if ($status[$m]==6)
                    {
                        $result3 = mysqli_query($con,"SELECT printer FROM BuildingInfo WHERE id = $j ");
                        $row3 = mysqli_fetch_array($result3);
                        $result4 = mysqli_query($con,"SELECT printerUser FROM BuildingInfo WHERE id = $j ");
                        $row4 = mysqli_fetch_array($result4);
                        if (!$result4) {
                        printf("Error: %s\n", mysqli_error($con));
                        exit();
}
                        if ($row4[0]>=$row3[0])
                        {
                            $test=0;
                        }
                    }
                     if ($status[$m]==7)
                    {
                        $result3 = mysqli_query($con,"SELECT projector FROM BuildingInfo WHERE id = $j ");
                        $row3 = mysqli_fetch_array($result3);
                        $result4 = mysqli_query($con,"SELECT projectorUser FROM BuildingInfo WHERE id = $j ");
                        $row4 = mysqli_fetch_array($result4);
                        if ($row4[0]>=$row3[0])
                        {
                            $test=0;
                        }
                    }
                     if ($status[$m]==8)
                    {
                        $result3 = mysqli_query($con,"SELECT tv FROM BuildingInfo WHERE id = $j ");
                        $row3 = mysqli_fetch_array($result3);
                        $result4 = mysqli_query($con,"SELECT tvUser FROM BuildingInfo WHERE id = $j ");
                        $row4 = mysqli_fetch_array($result4);
                        if ($row4[0]>=$row3[0])
                        {
                            $test=0;
                        }
                    }
                     if ($status[$m]==9)
                    {
                        $result3 = mysqli_query($con,"SELECT hackness FROM BuildingInfo WHERE id = $j ");
                        $row3 = mysqli_fetch_array($result3);
                        $result4 = mysqli_query($con,"SELECT hacknessUser FROM BuildingInfo WHERE id = $j ");
                        $row4 = mysqli_fetch_array($result4);
                        if ($row4[0]>=$row3[0])
                        {
                            $test=0;
                        }
                    }
                    if ($test==0)
                    {
                        $bstatus[$j]=0;
                        $test=1;
                    }
                }
                //echo ($j+" ");
                $result = mysqli_query($con,"SELECT name FROM BuildingInfo WHERE id = $j ");
                 $row = mysqli_fetch_array($result);
                 $result2 = mysqli_query($con,"SELECT location FROM BuildingInfo WHERE id = $j ");
                 $row2 = mysqli_fetch_array($result2);
                  $result3 = mysqli_query($con,"SELECT people FROM BuildingInfo WHERE id = $j ");
                 $row3 = mysqli_fetch_array($result3);
                  $result4 = mysqli_query($con,"SELECT capacity FROM BuildingInfo WHERE id = $j ");
                 $row4 = mysqli_fetch_array($result4);
                if ($bstatus[$j]!=0)
                {
                   // echo $status2;   
                    echo "<a href='SignInPage.php?id=$j'>Sign In For The $row[0] At $row2[0] With $row3[0] People (Maximum Capacity: $row4[0] People)</a><br>";
                   // echo htmlspecialchars("<br>");
                    $_SESSION["status1"]=$status1;
                    $_SESSION["status2"]=$status2;
                    $_SESSION["status3"]=$status3;
                    $_SESSION["status4"]=$status4;
                    $_SESSION["status5"]=$status5;
                    $_SESSION["status6"]=$status6;
                    $_SESSION["status7"]=$status7;
                    $_SESSION["status8"]=$status8;
                    $_SESSION["status9"]=$status9;
                    $data2[$j]=99999;
                }
                //break;
            }
        }
    }

}else{
    echo "You Haven't Login Yet，<a href='index.html'>Please Login First</a>";
}
    
?>