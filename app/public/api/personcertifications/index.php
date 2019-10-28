<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
 #1-Id attribute
$stmt = $db->prepare(
    'SELECT p.personId,firstName, lastName, radioNumber, stationNumber, isActive,   #4-attribute list
    streetAddress, workPhone, mobilePhone, positionId, birthDate, sex,c.certId, certName,certOrg,certDate,expTime FROM CertifiedPersons cp, Certification c, Person p     #2-Table name (Person)
    WHERE c.certId=cp.certId AND p.personId=cp.personId'        #1-Id attribute
  );
  $stmt->execute(); #1-Id attribute
$personCertifications = $stmt->fetchAll(); #3-variable name

// Step 3: Convert to JSON
$json = json_encode($personCertifications, JSON_PRETTY_PRINT); #3-variable name (same as line 17)

// Step 4: Output
header('Content-Type: application/json');
echo $json;
