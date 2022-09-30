<?php

$db = "autoadmin";
$host = "10.29.21.4";

$dbuser = "";
$dbpass = "";
$database = "autoadmin";
$dbhost = "10.29.21.4";

$property_damage = $_POST["property_damage"];
$bodily_injury = $_POST["bodily_injury"];

$medical_payments = $_POST["medical_payments"];
$loss_of_earnings = $_POST["loss_of_earnings"];
$accidental_death = $_POST["accidental_death"];
$uninsured_motorist_bodily_damage = $_POST["uninsured_motorist_bodily_damage"];
$uninsured_motorist = $_POST["uninsured_motorist"];
$uninsured_motorist_property_damage =
  $_POST["uninsured_motorist_property_damage"];
$upgraded_accident_forgiveness = $_POST["upgraded_accident_forgiveness"];

$comprehensive = $_POST["comprehensive"];
$collision = $_POST["collision"];
$emergency_road_service = $_POST["emergency_road_service"];
$rental_reimbursment = $_POST["rental_reimbursment"];

$loss_adjustment_expense = $_POST["loss_adjustment_expense"];
$profit = $_POST["profit"];
$variable_expense = $_POST["variable_expense"];

echo $rental_reimbursment;

$sql = "UPDATE data
			SET property_damage = ?, 
            bodily_injury = ?,

            medical_payments = ?,
            loss_of_earnings = ?,
            accidental_death = ?,
            uninsured_motorist_bodily_damage = ?,
            uninsured_motorist = ?,
            uninsured_motorist_property_damage = ?,
            upgraded_accident_forgiveness = ?,

            comprehensive = ?,
            collision = ?,
            emergency_road_service = ?,
            rental_reimbursment = ?,
            
            loss_adjustment_expense = ?,
            profit = ?,
            variable_expense = ?;";

echo $sql;

//  Connect
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $database);

// Prepare statements for querying -----------------------------------------------------
$stmt = $con->prepare($sql);
$stmt->bind_param(
  "ssssssssssssssss",
  $property_damage,
  $bodily_injury,
  $medical_payments,
  $loss_of_earnings,
  $accidental_death,
  $uninsured_motorist_bodily_damage,
  $uninsured_motorist,
  $uninsured_motorist_property_damage,
  $upgraded_accident_forgiveness,
  $comprehensive,
  $collision,
  $emergency_road_service,
  $rental_reimbursment,
  $loss_adjustment_expense,
  $profit,
  $variable_expense
);
$stmt->execute();
// -------------------------------------------------------------------------------------

header("Location: update.php");

mysqli_close($con);

?>
