<?php

$dbname="vandanaaneja20";
$qid=$_POST["qid"];
$w1=$_POST["wd1"];
$w2=$_POST["wd2"];
$w3=$_POST["wd3"];
$w4=$_POST["wd4"];
$w5=$_POST["wd5"];
$w6=$_POST["wd6"];
$w7=$_POST["wd7"];
$answ=$_POST["ans"];

$conn=mysqli_connect($servername,$username,$passwd,$dbname);
if(!$conn)
{
die("connection failed:" . mysqli_connect_error());
}
 $sql = "INSERT INTO jumbled (qid,word1,word2,word3,word4,word5,word6,word7,ans) 
              VALUES ('$qid','$w1','$w2','$w3','$w4','$w5','$w6','$w7','$answ')";

if(mysqli_query($conn,$sql))
  {
     echo "New question added successfully.";
   }
 else
  {
     echo "Error:" . mysqli_error($conn);
   }

mysqli_close($conn);
?>

