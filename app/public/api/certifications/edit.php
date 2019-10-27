<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare(
  'UPDATE Person    #2-Table name
    SET certName=?, certOrg=?, expTime=? #4-attribute list
   WHERE certId=?'
);

$stmt->execute([           #4-attribute list
  $_POST['certName'],
  $_POST['certOrg'],
  $_POST['expTime'],
  $_POST['certId']
]);

// Step 4: Output
header('HTTP/1.1 303 See Other');
header('Location: ../certifications/'); #5-members (foldername), certId (id attribute)
