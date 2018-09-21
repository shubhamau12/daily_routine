<?php
  session_start();
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
	 $name= $_SESSION['email'];
   $eng = $_POST['optione1'];
   $hindi = $_POST['optionh1'];
   $reg = $_POST['optionr1'];
  $other = $_POST['optiono1'];
  $date=$_POST['dat'];
  $connect=Mysqli_connect('localhost','root','','daily_routine_app');
	  $query='insert into news_paper(user_name,english,hindi,regional,other,time) values("'.$name.'","'.$eng.'","'.$hindi.'","'.$reg.'","'.$other.'","'.$date.'")';
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