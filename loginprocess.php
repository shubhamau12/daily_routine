<?php
 session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $_SESSION['email'] = $email = $_POST['email'];
    $pwd=$_POST['pwd'];
    $connect=Mysqli_connect('localhost','root','','daily_routine_app');
    $query='select name from user_info where email="'.$email.'" and password="'.$pwd.'"';
    $result=mysqli_query($connect,$query);
        
    if($result->num_rows>0)
    {
       // $_SESSION['aunthincate']="success";
        echo "success";
    }
    else
    {
        //$_SESSION['aunthincate']="failure";
    echo "unsuccess";
    }


}

?>