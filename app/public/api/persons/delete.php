<?php

// Step 0: Validation

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare(
  'DELETE FROM Person #4-attribute list
   WHERE personId=?'
);

$stmt->execute([$_POST['personId']]);

// Step 4: Output
header('HTTP/1.1 303 See Other');
header('Location: ../persons/'); #5-members (foldername), personId (id attribute)
