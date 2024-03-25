<?php
$serverName = "DESKTOP-1GD01S6\SQLEXPRESS";
$connectionOptions = array(
    "Database" => "Students", 
    "Uid" => "sa", 
    "PWD" => "123" 
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$name = $_POST['Sname'];
$id = $_POST['Sid'];
$nickname = $_POST['ID_card'];
$dob = $_POST['Dob'];
$address = $_POST['Address'];

$sql = "INSERT INTO form_submissions (name, student_id, nickname, dob, address) 
        VALUES (?, ?, ?, ?, ?)";
$params = array($name, $id, $nickname, $dob, $address);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    echo "Error: " . $sql . "<br>" . print_r(sqlsrv_errors(), true);
} else {
    echo "New record created successfully";
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
