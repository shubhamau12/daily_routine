<?php
  session_start();
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
	 $name= $_SESSION['email'];
   $day = $_POST['optiond'];
   $night = $_POST['optionn'];
  $date=$_POST['dat'];
  $connect=Mysqli_connect('localhost','root','','daily_routine_app');
	  $query='insert into milk(user_name,day,night,time) values("'.$name.'","'.$day.'","'.$night.'","'.$date.'")';
    $inserted=mysqli_query($connect,$query);
   if($inserted>0)
   {
     echo "success";
   }
   else
   {
  echo "unsuccess";
   }
     
  //print_r($inserted);

 }

?>