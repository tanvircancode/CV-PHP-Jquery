<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-headers: Access-Control-Allow-headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


//special format to read json data and convert to an array
$data = json_decode(file_get_contents("php://input"), true);
$name = $data['full_name'];
$address = $data['address'];
$phone = $data['phone'];
$email = $data['email'];
$objective = $data['objective'];
$desg_one = $data['designation-one'];
$company_name_one = $data['company-name-one'];
$company_one_exp_year = $data['exp-duration-one'];
$desg_two = $data['designation-two'];
$company_name_two = $data['company-name-two'];
$company_two_exp_year = $data['exp-duration-two'];
$uni_deg = $data['uni-degree'];
$uni_name = $data['uni-name'];
$uni_cgpa = $data['uni-cgpa'];
$uni_pass_year = $data['uni-pass-year'];
$coll_name = $data['coll-name'];
$coll_cgpa = $data['coll-cgpa'];
$coll_pass_year = $data['coll-pass-year'];
$skl_name = $data['skl-name'];
$skl_cgpa = $data['skl-cgpa'];
$skl_pass_year = $data['skl-pass-year'];
$project_one_name = $data['project-one-name'];
$project_one_desc = $data['project-one-textarea'];
$project_one = $data['project-one'];
$project_one_link = $data['project-one-link'];
$project_two_name = $data['project-two-name'];
$project_two_desc = $data['project-two-textarea'];
$project_two = $data['project-two'];
$project_two_link = $data['project-two-link'];
$project_three_name = $data['project-three-name'];
$project_three_desc = $data['project-three-textarea'];
$project_three = $data['project-three'];
$project_three_link = $data['project-three-link'];
$project_four_name = $data['project-four-name'];
$project_four_desc = $data['project-four-textarea'];
$project_four = $data['project-four'];
$project_four_link = $data['project-four-link'];
$skills = $data['skills-textarea'];

include('config.php');

$sql = "insert into students(`full_name`, `address`, `phone`, `email`, `objective`, `designation_one`, `company_name_one`, `exp_duration_one`, `designation_two`, `company_name_two`, `exp_duration_two`, `uni_degree`, `uni_name`, `uni_cgpa`, `uni_pass_year`, `coll_name`, `coll_cgpa`, `coll_pass_year`, `skl_name`, `skl_cgpa`, `skl_pass_year`, `project_one_name`, `project_one_textarea`, `project_one`, `project_one_link`, `project_two_name`, `project_two_textarea`, `project_two`, `project_two_link`, `project_three_name`, `project_three_textarea`, `project_three`, `project_three_link`, `project_four_name`, `project_four_textarea`, `project_four`, `project_four_link`, `skills_textarea`) values('$name',
  '$address','$phone','$email','$objective','$desg_one','$company_name_one','$company_one_exp_year','$desg_two','$company_name_two',
  '$company_two_exp_year','$uni_deg','$uni_name','$uni_cgpa','$uni_pass_year','$coll_name','$coll_cgpa','$coll_pass_year',
'$skl_name','$skl_cgpa','$skl_pass_year','$project_one_name','$project_one_desc','$project_one','$project_one_link',
'$project_two_name','$project_two_desc','$project_two','$project_two_link',
'$project_three_name','$project_three_desc','$project_three','$project_three_link',
'$project_four_name','$project_four_desc','$project_four','$project_four_link','$skills')";

if(mysqli_query($conn,$sql)){
    $last_id = mysqli_insert_id($conn);
    echo json_encode(array('message' => 'Student record Inserted' , 'status' => true, 'id' => $last_id));
}else{
    echo json_encode(array('message' => 'Student record not Inserted' , 'status' => false));
}
// if(mysqli_query($conn , $sql)){
//     echo "Succesfuuly inserted";
// }

?>