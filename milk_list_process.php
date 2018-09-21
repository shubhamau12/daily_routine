<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $data['question']=array();
    $data['option_one']=array();
    $data['option_two']=array();
    $data['option_three']=array();
    $data['option_four']=array();
    $data['question_id']=array();
    $data['correct_option']=array();

    $record=array();
    if( $_SESSION['aunthincate']="success")
      {
          //echo "success";
          $count=0;
        $connect=Mysqli_connect('localhost','root','','quiz');
        $query='select * from question_database';
        $result=mysqli_query($connect,$query);
        while($rows=Mysqli_fetch_assoc($result))
        {
              array_push( $data['question'] , $rows['question']);
              array_push( $data['option_one'] , $rows['option_one']);
              array_push( $data['option_two'] , $rows['option_two']);
              array_push( $data['option_three'] , $rows['option_three']);
              array_push( $data['option_four'] , $rows['option_four']);
              array_push( $data['question_id'] , $rows['question_number']);
              array_push( $data['correct_option'] , $rows['correct_option']);
        }
     echo json_encode($data);
    
         
      }
    }


?>