<?php

include '../config/conn.php';
// Employees counts the number 
$query = "SELECT COUNT(*) as totalRooms FROM rooms"; // Replace "your_table_name" with the actual name of your table
$result = $conn->query($query);

// Step 3: Process the result and get the count
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalRooms = $row['totalRooms'];
} else {
    $totalRooms = 0;
}


?>


<!-- Employees cout -->
<?php

include '../config/conn.php';
// Employees counts the number 
$query = "SELECT COUNT(*) as totalEmp FROM Employees"; // Replace "your_table_name" with the actual name of your table
$result = $conn->query($query);

// Step 3: Process the result and get the count
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalEmployees = $row['totalEmp'];
} else {
    $totalEmployees = 0;
}


?>
<!-- Employees cout -->
<?php

include '../config/conn.php';
// Customers counts the number 
$query = "SELECT COUNT(*) as totalCust FROM Customer"; // Replace "your_table_name" with the actual name of your table
$result = $conn->query($query);

// Step 3: Process the result and get the count
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalCustom = $row['totalCust'];
} else {
    $totalCustom = 0;
}


?>
<!-- Employees cout -->
<?php

include '../config/conn.php';
// Customers counts the number 
$query = "SELECT COUNT(*) as totalUser FROM user"; // Replace "your_table_name" with the actual name of your table
$result = $conn->query($query);

// Step 3: Process the result and get the count
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalUsers = $row['totalUser'];
} else {
    $totalUsers = 0;
}


?>
<?php

include '../config/conn.php';
// Compus counts the number 
$query = "SELECT COUNT(*) as totalCompus FROM compus"; // Replace "your_table_name" with the actual name of your table
$result = $conn->query($query);

// Step 3: Process the result and get the count
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalCompus = $row['totalCompus'];
} else {
    $totalCompus = 0;
}

?>
<?php

include '../config/conn.php';
// Jobs counts the number 
$query = "SELECT COUNT(*) as totalJobs FROM jobs"; // Replace "your_table_name" with the actual name of your table
$result = $conn->query($query);

// Step 3: Process the result and get the count
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalJobs = $row['totalJobs'];
} else {
    $totalCompus = 0;
}

?>
<?php

include '../config/conn.php';
// Services counts the number 
$query = "SELECT COUNT(*) as totalServices FROM hotelservices"; // Replace "your_table_name" with the actual name of your table
$result = $conn->query($query);

// Step 3: Process the result and get the count
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalServices = $row['totalServices'];
} else {
    $totalServices = 0;
}

?>
<?php

include '../config/conn.php';
// Teams counts the number 
$query = "SELECT COUNT(*) as totalTeams FROM teams"; // Replace "your_table_name" with the actual name of your table
$result = $conn->query($query);

// Step 3: Process the result and get the count
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalTeams = $row['totalTeams'];
} else {
    $totalTeams = 0;
}

?>