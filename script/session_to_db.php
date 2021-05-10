<?php

$dataToStore = [];
if (isset($_SESSION['visitor'])) {
    $dataToStore['last_name'] = $_SESSION['visitor']['last_name'];
    $dataToStore['first_name'] = $_SESSION['visitor']['first_name'];
    $dataToStore['Address'] = $_SESSION['visitor']['Address'];
    $dataToStore['Email'] = $_SESSION['visitor']['Email'];
    $dataToStore['Contact_Number'] = $_SESSION['visitor']['Contact_Number'];
    $dataToStore['Gender'] = $_SESSION['visitor']['Gender'];
}
if (isset($_SESSION['schedule'])) {
    $dataToStore['Department'] = $_SESSION['schedule']['department'];
    $dataToStore['person_to_visit'] = $_SESSION['schedule']['person'];
    $dataToStore['reason_to_visit'] = $_SESSION['schedule']['reason'];
    $dataToStore['From_visit'] = $_SESSION['schedule']['timeFrom'];
    $dataToStore['To_visit'] = $_SESSION['schedule']['timeTo'];
}

if (isset($_SESSION['hc1'])) {
    $dataToStore['Question1'] = $_SESSION['hc1']['Question1'];
}

if (isset($_SESSION['hc2'])) {
    $dataToStore['Question2'] = $_SESSION['hc2']['Question2'];
}
if (isset($_SESSION['hc3'])) {
    $dataToStore['Question3'] = $_SESSION['hc3']['Question3'];
}
if (isset($_SESSION['hc4'])) {
    $dataToStore['Question4'] = $_SESSION['hc4']['Question4'];
    $dataToStore['q4txt'] = $_SESSION['hc4']['q4txt'];
}
if (isset($_SESSION['hc5'])) {
    $dataToStore['Question5'] = $_SESSION['hc5']['Question5'];
    $dataToStore['q5txt'] = $_SESSION['hc5']['q5txt'];
}
$stringColumnName = [];
$stringValues = [];
foreach ($dataToStore as $columnName => $values) {
    $stringColumnName[] = $columnName;
    $stringValues[] = '"' . $values . '"';
}
$stringColumnName = "(" . implode(',', $stringColumnName) . ")";
$stringValues = "(" . implode(',', $stringValues) . ")";
$sql = "INSERT INTO visitor $stringColumnName VALUES $stringValues";

include "common/connect.php";
$keyHash = sha1(0);
if ($conn->query($sql) === TRUE) {
    include "common/config.php";

    $last_id = $conn->insert_id;
    $keyHash = sha1($last_id);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}