<?php
header("Content-Type: application/json");
include '../config/conn.php';

// Register the user
function registerCustomer($conn){
    extract($_POST);
    $data = array();

    $query = "CALL sp_customer('','$cTitle','$cName','$cEmail','$cCountry','$cPhone','$cTypeRoom','$cBedding','$cNumRoom','$cMeal','$cIn','$cOut')";

    $result = $conn->query($query);

    if($result){
        $data = array("status" => true, "data" => "Registration successful");
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($data);
}

// Update the one user registration
function update_customer($conn){
    extract($_POST);

    $data = array();

    // Building the query and calling the stored procedure
    $query = "CALL sp_customer('$id','$cTitle','$cName','$cEmail','$cCountry','$cPhone','$cTypeRoom','$cBedding','$cNumRoom','$cMeal','$cIn','$cOut')";

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
function get_customer($conn){

    $data = array();
    $array_data = array();
    $query = "SELECT * FROM customer";
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
function get_customer_info($conn){
    extract($_POST);

    $data = array();
    $array_data = array();
    
    $query = "SELECT * FROM `customer` WHERE id = '$id'";
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

function delete_customer_info($conn){
    extract($_POST);

    $data = array();
    $array_data = array();
    
    $query = "DELETE FROM `customer` WHERE id = '$id'";
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
    $query = "SELECT `Type` FROM Roomtype";
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


function get_customer_report($conn){
    extract($_POST);
    $data = array();
    $array_data = array();
    $query = "CALL rp_customer('$from','$to')";
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

?>