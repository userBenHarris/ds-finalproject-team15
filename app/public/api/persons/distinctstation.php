<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
 #1-Id attribute
$stmt = $db->prepare(
    'SELECT DISTINCT stationNumber FROM Person'     #2-Table name (Person)        #1-Id attribute
  );
  $stmt->execute(); #1-Id attribute
$numbers = $stmt->fetchAll(); #3-variable name

// Step 3: Convert to JSON
$json = json_encode($numbers, JSON_PRETTY_PRINT); #3-variable name (same as line 17)

// Step 4: Output
header('Content-Type: application/json');
echo $json;
