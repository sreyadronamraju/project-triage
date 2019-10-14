<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare('INSERT INTO PatientVisit
(patientGuid, visitDescription, priority)
VALUES ('.$_POST['patientGuid'].',?,?)');

$stmt->execute([
    $_POST['patientGuid'],
    $_POST['visitDescription'],
    $_POST['priority'],
]); //has access to all the data now, but did not return it


// Step 4: Output
header('Content-Type: application/json'); //mime type
echo $json;
