<?php
header("Content-Type: application/json");
include '../config/conn.php';



function register_user($conn){
    extract($_POST);

    $data = array();

    // Building the query and calling the stored procedure
    $query = "CALL sp_user('','$name','$username','$password','$role','$status','$email')";

    // Executing the query
    $result = $conn->query($query);

    // Checking if the result was successful or error
    if($result){
        $data = array("status" => true, "data" => "Registration successful");
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}

function update_user($conn){
    extract($_POST);

    $data = array();

    // Building the query and calling the stored procedure
    $query = "CALL sp_user('$id','$name','$username','$password','$role','$status','$email')";

    // Executing the query
    $result = $conn->query($query);

    // Checking if the result was successful or error
    if($result){
        $row = $result->fetch_assoc();
        if($row['Message'] == 'Updated'){
            $data = array("status" => true, "data" => "Updated successful");
        } else {
            $data = array("status" => false, "data" => $conn->error);
        }
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}


function get_user($conn) {
    $data = array();
    $array_data = array();
    $query = "SELECT * FROM `user`";
    $result = $conn->query($query);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $array_data[] = $row;
        }
        $data = array("status" => true, "data" => $array_data);
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}




function get_user_info($conn){
    extract($_POST);

    $data = array();
    $array_data = array();
    
    $query = "SELECT * FROM `user` WHERE id = '$id'";
    $result = $conn->query($query);

    if($result){
        $row = $result->fetch_assoc();
        $data = array("status" => true, "data" => $row);
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}

function delete_user_info($conn){
    extract($_POST);

    $data = array();
    $array_data = array();
    
    $query = "DELETE FROM `user` WHERE id = '$id'";
    $result = $conn->query($query);

    if($result){
       
        $data = array("status" => true, "data" => "Deleted successfully");
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}

if(isset($_POST['action'])){
    $action = $_POST['action'];
    $action($conn);
} else {
    echo json_encode(array("status" => false, "data" => "Action is required"));
}







?>