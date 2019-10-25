<?php

// Step 0: Validation
use Ramsey\Uuid\Uuid;
$personId = Uuid::uuid4()->toString(); #1-Id Attribute // i.e. 25769c6c-d34d-4bfe-ba98-e0ee856f3e7a

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare(
  'UPDATE Person    #2-Table name
    SET firstName=?,lastName=?,radioNumber=?,stationNumber=?, isActive=?,   #4-attribute list
    streetAddress=?,workPhone=?, mobilePhone=?, positionId=?,birthDate=?, sex=? #4-attribute list
   WHERE personId=?'
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
  $_POST['sex'],
  $id
]);

// Step 4: Output
header('HTTP/1.1 303 See Other');
header('Location: ../persons/?personId='.$personId); #5-members (foldername), personId (id attribute)
