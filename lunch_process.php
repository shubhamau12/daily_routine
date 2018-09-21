<?php
  session_start();
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
	 $name= $_SESSION['email'];
   $day = $_POST['optionld'];
  $date=$_POST['dat'];
  $connect=Mysqli_connect('localhost','root','','daily_routine_app');
	  $query='insert into lunch(user_name,lunch_take,time) values("'.$name.'","'.$day.'","'.$date.'")';
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