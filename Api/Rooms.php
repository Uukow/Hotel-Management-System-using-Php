<?php
header("Content-Type: application/json");
include '../config/conn.php';

// Register the user
function registerRooms($conn){
    extract($_POST);
    $data = array();

    $query = "CALL sp_rooms('','$rName','$rPayment','$rStatus')";

    $result = $conn->query($query);

    if($result){
        $data = array("status" => true, "data" => "Registration successful");
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}

// Update the one user registration
function update_rooms($conn){
    extract($_POST);

    $data = array();

    // Building the query and calling the stored procedure
    $query = "CALL sp_rooms('$id','$rName','$rPayment','$rStatus')";

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

// Read All the Employees in a table
function get_rooms($conn){

    $data = array();
    $array_data = array();
    $query = "SELECT * FROM rooms";
    $result = $conn->query($query);

    if($result){
        while($row = $result->fetch_assoc()){
            $array_data[] = $row;
        }
        $data = array("status" => true, "data" => $array_data);
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}

// Get the One Employees from the database
function get_rooms_info($conn){
    extract($_POST);

    $data = array();
    $array_data = array();
    
    $query = "SELECT * FROM `rooms` WHERE id = '$id'";
    $result = $conn->query($query);

    if($result){
        $row = $result->fetch_assoc();
        $data = array("status" => true, "data" => $row);
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}

// Delete the user that also registered with the database

function delete_rooms_info($conn){
    extract($_POST);

    $data = array();
    $array_data = array();
    
    $query = "DELETE FROM `rooms` WHERE id = '$id'";
    $result = $conn->query($query);

    if($result){
       
        $data = array("status" => true, "data" => "Deleted successfully");
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}


// get job name
function read_all_room_types($conn){
    $data = array();
    $data_array = array();

    // Assuming you have a table named 'JobPositions' in your database
    $query = "SELECT jobTitle FROM Roomtype";
    $result = $conn->query($query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data_array[] = $row['Type'];
        }

        $data = array("status" => true, "data" => $data_array);
    } else {
        $data = array("status" => false, "data" => "Database Error: " . mysqli_error($conn));
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