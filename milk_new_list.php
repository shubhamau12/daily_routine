<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
   $nam =  $_SESSION['email'];
    $dat=$_POST['dat1'];
    $dats= $_POST['dat2'];
    $data['date']=array();
    $data['day']=array();
    $data['night']=array();
    $record=array();
    if( $_SESSION['aunthincate']="success")
      {
          //echo "success";
          $count=0;
        $connect=Mysqli_connect('localhost','root','','daily_routine_app');
        $query='select * from milk where user_name="'.$nam.'" AND time BETWEEN "'.$dat.'" AND "'.$dats.'" ';
        $result=mysqli_query($connect,$query);
        while($rows=Mysqli_fetch_assoc($result))
        {
              array_push( $data['date'] , $rows['time']);
              array_push( $data['day'] , $rows['day']);
              array_push( $data['night'] , $rows['night']);
             
        }
     echo json_encode($data);
    
         
      }
    }


?>