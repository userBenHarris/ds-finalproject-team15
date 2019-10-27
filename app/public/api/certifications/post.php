<?php

// Step 0: Validation
use Ramsey\Uuid\Uuid;
$certId = Uuid::uuid4()->toString(); #1-Id Attribute // i.e. 25769c6c-d34d-4bfe-ba98-e0ee856f3e7a

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare(
  'INSERT INTO Certification    #2-Table name
    ( certName,certOrg,expTime) #4-attribute list
  VALUES (?,?,?)'
);

$stmt->execute([
#  $certId,            #4-attribute list
  $_POST['certName'],
  $_POST['certOrg'],
  $_POST['expTime']
]);

// Step 4: Output
header('HTTP/1.1 303 See Other');
header('Location: ../certifications/?certId='.$certId); #5-members (foldername), certId (id attribute)
