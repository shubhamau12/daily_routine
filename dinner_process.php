<?php
  session_start();
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
	 $name= $_SESSION['email'];
   $night = $_POST['optiondin'];
  $date=$_POST['dat'];
  $connect=Mysqli_connect('localhost','root','','daily_routine_app');
	  $query='insert into dinner(user_name,dinner_take,time) values("'.$name.'","'.$night.'","'.$date.'")';
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