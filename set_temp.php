<?php
$conn = new mysqli('127.0.0.1', 'u134026110_admin', '@Admin007', 'u134026110_thing');
$sql = "UPDATE puen_smartcar set value = '" . $_POST['value'] . "' ";
$sql .= " where name='Temp'";

$r = $conn->query($sql);

$return = array();
if (!$r) {
    $return['result'] = "ERR";
    $return['status'] = $conn->error;
} else {
    $return['result'] = "OK";
    $return['status'] = "Operation complete";
}

print json_encode($return);