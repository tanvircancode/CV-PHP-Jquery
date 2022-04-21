<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-headers: Access-Control-Allow-headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


//special format to read json data and convert to an array
$data = json_decode(file_get_contents("php://input"), true);
$student_id = $data['sid'];
$project_number = $data['number'];



include('config.php');

if($project_number == 'three'){
    $sql = "update students set project_three_name = '',project_three_textarea='',project_three='',project_three_link=''  where id={$student_id}";
}else{
    $sql = "update students set project_four_name = '',project_four_textarea='',project_four='',project_four_link=''  where id={$student_id}";
}

// $sql = "update students set full_name = '{$student_name}' where id={$student_id}";

if(mysqli_query($conn , $sql)){
    echo json_encode(array('message' => 'Student record Updated' , 'status' => true , 'number' => $project_number));
}else{
    echo json_encode(array('message' => 'Student record not Updated' , 'status' => false));
}

?>