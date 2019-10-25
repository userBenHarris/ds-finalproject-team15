<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
if (isset($_GET['personId'])) { #1-Id attribute
  $stmt = $db->prepare(
    'SELECT * FROM Person      #2-Table name (Person)
    WHERE personId = ?'        #1-Id attribute
  );
  $stmt->execute([$_GET['personId']]); #1-Id attribute
} else {
  $stmt = $db->prepare('SELECT * FROM Person'); #2-Table name
  $stmt->execute();
}
$persons = $stmt->fetchAll(); #3-variable name

// Step 3: Convert to JSON
$json = json_encode($persons, JSON_PRETTY_PRINT); #3-variable name (same as line 17)

// Step 4: Output
header('Content-Type: application/json');
echo $json;
