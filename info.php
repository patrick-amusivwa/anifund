<?php
$first_name = $_post[$first_name];
$last_name = $_post[$last_name];
$email_address = $_post[$email_address];
$phone_number = $_post[$phone_number];
$address = $_post[$address];
$query_reason = $_post[$query_reason];
$contact_pref = $_post[$contact_pref];
$query_details = $_post[$query_details];

// database connection
$conn =new mysqli('localhost','root','','form');
if($conn->connect_error)
 {
 	die('connection failed: '.$con->connect_error);
 }
 else
 {
 	$stmt = $conn->prepare("insert into user(first_name,last_name,email_address,phone_number,address,query_reason,contact_pref,query_details) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssissss",$first_name,$last_name,$email_address,$phone_number,$address,$query_reason,$contact_pref,$query_details);
    $stmt->execute();
    echo "input successfully thankyou";
    $stmt->close();
    $conn->close();

 }

?>