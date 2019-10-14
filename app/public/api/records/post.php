<?php
use Ramsey\Uuid\Uuid;
// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare('INSERT INTO Patient
(patientGuid,firstName, lastName, dob, sexAtBirth)')
VALUES (?,?,?,?,?);

$stmt->execute([
    $guid=Uuid::uuid4()->toString(),
    $_POST['firstName'],
    $_POST['lastName'],
    $_POST['dob'],
    $_POST['sexAtBirth'],
]); //has access to all the data now, but did not return it


// Step 4: Output
header('HTTP/1.1 303 See Other'); //mime type
header('Location: ../records/?guid='.$guid);
echo $json;
