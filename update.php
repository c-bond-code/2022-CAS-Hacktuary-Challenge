<!doctype html>

<?php
session_unset();
session_destroy();

$user = $_POST["type"];
$db = "autoadmin";
$host = "10.29.21.4";

$dbuser = "";
$dbpass = "";
$database = "autoadmin";
$dbhost = "10.29.21.4";

$sql = "SELECT * FROM data;";

mysqli_report(MYSQLI_REPORT_OFF);

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);

$query = "SELECT * FROM data;";
$rs = $mysqli->query($query);

if ($mysqli->error) {
  try {
    throw new Exception(
      "MySQL error $mysqli->error <br> Query:<br> $query",
      $msqli->errno
    );
  } catch (Exception $e) {
    echo "Error No: " . $e->getCode() . " - " . $e->getMessage() . "<br >";
    echo nl2br($e->getTraceAsString());
  }
}

if (mysqli_num_rows($rs) > 0) {
  while ($row2 = mysqli_fetch_assoc($rs)) {

    $bodily_injury = $row2["bodily_injury"];
    $property_damage = $row2["property_damage"];

    $medical_payments = $row2["medical_payments"];
    $loss_of_earnings = $row2["loss_of_earnings"];
    $accidental_death = $row2["accidental_death"];
    $uninsured_motorist = $row2["uninsured_motorist"];
    $uninsured_motorist_bodily_damage =
      $row2["uninsured_motorist_bodily_damage"];
    $uninsured_motorist_property_damage =
      $row2["uninsured_motorist_property_damage"];
    $upgraded_accident_forgiveness = $row2["upgraded_accident_forgiveness"];

    $comprehensive = $row2["comprehensive"];
    $collision = $row2["collision"];
    $rental_reimbursment = $row2["rental_reimbursment"];
    $emergency_road_service = $row2["emergency_road_service"];

    $loss_adjustment_expense = $row2["loss_adjustment_expense"];
    $profit = $row2["profit"];
    $variable_expense = $row2["variable_expense"];
    ?>

            <script type="text/javascript">
                updater();
                function updater() {
                    document.getElementById("bodily_injury").value = '<?php echo $bodily_injury; ?>';
                    document.getElementById("property_damage").value = '<?php echo $property_damage; ?>';
                    document.getElementById("medical_payments").value = '<?php echo $medical_payments; ?>';
                    document.getElementById("loss_of_earnings").value = '<?php echo $loss_of_earnings; ?>';
                    document.getElementById("accidental_death").value = '<?php echo $accidental_death; ?>';
                    document.getElementById("uninsured_motorist").value = '<?php echo $uninsured_motorist; ?>';
                    document.getElementById("uninsured_motorist_bodily_damage").value = '<?php echo $uninsured_motorist_bodily_damage; ?>';
                    document.getElementById("uninsured_motorist_property_damage").value = '<?php echo $uninsured_motorist_property_damage; ?>';
                    document.getElementById("upgraded_accident_forgiveness").value = '<?php echo $upgraded_accident_forgiveness; ?>';
                    document.getElementById("comprehensive").value = '<?php echo $comprehensive; ?>';
                    document.getElementById("collision").value = '<?php echo $collision; ?>';
                    document.getElementById("rental_reimbursment").value = '<?php echo $rental_reimbursment; ?>';
                    document.getElementById("emergency_road_service").value = '<?php echo $emergency_road_service; ?>';
                    document.getElementById("loss_adjustment_expense").value = '<?php echo $loss_adjustment_expense; ?>';
                    document.getElementById("profit").value = '<?php echo $profit; ?>';
                    document.getElementById("variable_expense").value = '<?php echo $variable_expense; ?>';
                }
            </script>

            <?php
  }
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logo.png">
    <title>Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>



  <body class="bg-light" onload="updater();">
    <nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light">
      <div class="container">
          <a class="navbar-brand" href="index.php"><img id="navLogo" src="logo.png" ></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar1">
              <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Policy</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="#result"><label for="" id="navLabel">$--,---.--</label></a>
                  </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Log Out</a>
                  </li>
              </ul>
          </div>
      </div>
    </nav>

    <div class="container">

      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" id="logo" src="logo.png">
        <h4>Edit Policy</h4>
        <p class="header">If all the cars in the United States were placed end to end, it would probably be Labor Day Weekend.</p>
      </div>
      <br>

      <div class="row">
        <div class="col-md-12 order-md-1">

        <form action="updateVals.php" method="POST">
          <h3 class="mb-3">Update - For Others</h3>
          <hr class="mb-4">
          <div class="offset-md-1 col-md-10">
            <!-- Property Damage -->
            <div class="row">
              <div class="col-md-6">
                <h4>Property Damage Liability</h4>
                <p>
                  Pays if you are responsible for damage to another person's property.
                </p>
              </div>
              <div class="offset-md-2 col-md-4">
                <input type="double" id="property_damage" name="property_damage" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <!-- Bodily Injury Liability -->
            <div class="row">
              <div class="col-md-6">
                <h4>Bodily Injury Liability</h4>
                <p>
                  Pays if you are responsible for another person's injury or death in an auto accident. It also pays for your legal defense.
                </p>
              </div>
              <div class="offset-md-2 col-md-4">
                <input type="double" id="bodily_injury" name="bodily_injury" class="inputFormat">
              </div>
            </div>
          </div>

        
          <h3 class="mb-3">Update - For You</h3>
          <hr class="mb-4">
          <div class="offset-md-1 col-md-10">
            <div class="row">
              <div class="col-md-6">
                <h4>Medical Payments</h4>
                <p>
                  Pays medical expenses such as surgery, x-rays, ambulance, and physicians, regardless of who was at fault.
                </p>
              </div>

              <div class="offset-md-2 col-md-4">
                <input type="double" id="medical_payments" name="medical_payments" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Loss of Earnings</h4>
                <p>
                  Pays 70% of loss of income, up to the limit selected, due to bodily injury from an auto accident.
                </p>
              </div>

              <div class="offset-md-2 col-md-4">
                <input type="double" id="loss_of_earnings" name="loss_of_earnings" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Accidental Death Benefits</h4>
                <p>
                  Provides coverage if you or your
                  passengers die within one year of
                  an auto accident if the death is a
                  result of that accident.</p>
              </div>

              <div class="offset-md-2 col-md-4">
              <input type="double" id="accidental_death" name="accidental_death" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">
  
            <div class="row">
              <div class="col-md-6">
                <h4>Uninsured Motorist Bodily Injury  </h4>
                <p>
                  Pays for injuries caused by an
                  uninsured or hit-and-run
                  motorist.</p>
              </div>

              <div class="offset-md-2 col-md-4">
              <input type="double" id="uninsured_motorist_bodily_damage" name="uninsured_motorist_bodily_damage" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Uninsured Motorist  </h4>
                <p>
                  Pays for injuries caused by an
                  underinsured motorist.</p>
              </div>

              <div class="offset-md-2 col-md-4">
              <input type="double" id="uninsured_motorist" name="uninsured_motorist" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Uninsured Motorist Property Damage  </h4>
                <p>
                  Pays for damages to your vehicle
                  caused by a driver without
                  insurance.</p>
              </div>


              <div class="offset-md-2 col-md-4">
              <input type="double" id="uninsured_motorist_property_damage" name="uninsured_motorist_property_damage" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Upgraded Accident Forgiveness</h4>
                <p>
                  This benefit waives the
                  surcharge associated with the
                  first at-fault accident by any
                  driver on your policy.</p>
              </div>

              <div class="offset-md-2 col-md-4">
              <input type="double" id="upgraded_accident_forgiveness" name="upgraded_accident_forgiveness" class="inputFormat">
              </div>
            </div>

          </div>



          <h3 class="mb-3">Update - Policy Coverages</h3>
          <hr class="mb-4">
          <div class="offset-md-1 col-md-10">

            <div class="row">
              <div class="col-md-6">
                <h4>Comprehensive (Excluding Collision)</h4>
                <p>
                  Pays for damage due to theft,
                  flood, vandalism, explosion, and
                  fire.</p>
              </div>

              <div class="offset-md-2 col-md-4">
              <input type="double" id="comprehensive" name="comprehensive" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Collision</h4>
                <p>
                  Pays for damages to your vehicle
                  caused by a collision or when it
                  overturns.</p>
              </div>

              <div class="offset-md-2 col-md-4">
              <input type="double" id="collision" name="collision" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Emergency Road Service</h4>
                <p>
                  Covers towing, lockout, labor for
                  flat tires, or delivery of a loaned
                  battery.</p>
              </div>


              <div class="offset-md-2 col-md-4">
              <input type="double" id="emergency_road_service" name="emergency_road_service" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Rental Reimbursement</h4>
                <p>
                  Pays toward expenses of renting
                  alternate transportation while
                  repairs are being completed as a
                  result of a covered loss.</p>
              </div>

              <div class="offset-md-2 col-md-4">
                <input type="double" id="rental_reimbursment" name="rental_reimbursment" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Loss Adjustment Expense</h4>
                <p>

                </p>
              </div>

              <div class="offset-md-2 col-md-4">
                <input type="double" id="loss_adjustment_expense" name="loss_adjustment_expense" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Profit</h4>
                <p>
                  
                </p>
              </div>

              <div class="offset-md-2 col-md-4">
                <input type="double" id="profit" name="profit" class="inputFormat">
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-6">
                <h4>Variable Expense</h4>
                <p>
                
              </p>
              </div>

              <div class="offset-md-2 col-md-4">
                <input type="double" id="variable_expense" name="variable_expense" class="inputFormat">
              </div>
            </div>

          </div>

    

          <div class="py-5 text-center">
          <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        
        </form>
    </div>

    

  </body>
</html>
