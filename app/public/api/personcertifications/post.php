<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare(
  'INSERT INTO CertifiedPersons    #2-Table name
    (personId, certID, certDate) #4-attribute list
  VALUES (?, ?, ?)'
);

$stmt->execute([           #4-attribute list
  $_POST['personId'],
  $_POST['certId'],
  $_POST['certDate']
]);

// Step 4: Output
header('HTTP/1.1 303 See Other');
header('Location: ../certifiedpersons/'); #5-members (foldername), personId (id attribute)
