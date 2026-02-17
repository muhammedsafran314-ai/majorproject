<?php
include "db.php";

date_default_timezone_set("Asia/Kolkata");
$current = date("H:i:s");

/* show ONLY mechanics who:
   ✔ logged in
   ✔ inside shift
*/
$result = $conn->query("
SELECT * FROM mechanics
WHERE online = 1
AND start_time IS NOT NULL
AND end_time IS NOT NULL
AND '$current' BETWEEN start_time AND end_time
");

$mechanics = [];

while($row = $result->fetch_assoc()){
    $mechanics[] = $row;
}

echo json_encode($mechanics);
?>
