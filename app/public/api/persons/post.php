<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare(
  'INSERT INTO Person    #2-Table name
    (firstName, lastName, radioNumber, stationNumber, isActive,   #4-attribute list
    streetAddress, workPhone, mobilePhone, positionId, birthDate, sex) #4-attribute list
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'
);

$stmt->execute([           #4-attribute list
  $_POST['firstName'],
  $_POST['lastName'],
  $_POST['radioNumber'],
  $_POST['stationNumber'],
  $_POST['isActive'],
  $_POST['streetAddress'],
  $_POST['workPhone'],
  $_POST['mobilePhone'],
  $_POST['positionId'],
  $_POST['birthDate'],
  $_POST['sex']
]);

// Step 4: Output
header('HTTP/1.1 303 See Other');
header('Location: ../persons/'); #5-members (foldername), personId (id attribute)
