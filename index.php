<!doctype html>

<?php
session_unset();
session_destroy();

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
    <title>Edit Policy</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body class="bg-light">

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
                        <a class="nav-link" href="#results"><label for="" id="navLabel">$--,---.--</label></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="login.html">Admin Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" id="logo" src="logo.png">
        <h4>Edit Policy</h4>
        <p class="header">See how much you can save on car insurance with Auto Insurance. Get a free quote! Great rates, customizable plans and less than legendary personal service.</p>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12 order-md-1">

         <!-- Demographics ---------------------------------------------------------------->
          <h3 class="mb-3">Demographics</h3>
          <hr class="mb-4">
          <div class="offset-md-1 col-md-10">

            <!-- Age -->
            <div class="row">
              <div class="col-md-6">
                <h4>Age</h4>
                <p>Please select your age.</p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="age" id="age" onchange="add_number()">
                  <option value="1.07">16 - 24 </option>
                  <option value="1">25 - 33</option>
                  <option value=".87">33 - 52</option>   
                  <option value=".96">52 and up</option>               
                </select>
              </div>
            </div>
          </div>

        <!-- For Others ---------------------------------------------------------------->
          <h3 class="mb-3">For Others</h3>
          <hr class="mb-4">
          <div class="offset-md-1 col-md-10">

            <!-- Property Damage -->
            <div class="row">
              <div class="col-md-6">
                <h4>Boldily Injury Liability</h4>
                <p>
                Pays if you are responsible for another person's injury or death in an auto accident. It also pays for your legal defense.
                </p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="bodily_il" id="bodily_il" onchange="add_number()">
                  <option value="22000"> $50,000 </option>
                  <option value="25000">$100,000</option>
                  <option value="33000">$200,000</option>                
                </select>
              </div>
            </div>
            <hr class="mb-4">

            <!-- Bodily Injury Liability -->
            <div class="row">
              <div class="col-md-6">
                <h4>Property Damage Liability</h4>
                <p>
                  Pays if you are responsible for damage to another person's property.
                </p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="property_dl" id="property_dl" onchange="add_number()">
                  <option value="15000">$25,000 </option>
                  <option value="15250">$50,000</option>
                  <option value="15500">$100,000</option>             
                   </select>
              </div>
            </div>
          </div>

        <!-- For You ---------------------------------------------------------------->
          <h3 class="mb-3">For You</h3>
          <hr class="mb-4">
          <div class="offset-md-1 col-md-10">

          <!-- Medica Payments -->
            <div class="row">
              <div class="col-md-6">
                <h4>Medical Payments</h4>
                <p>
                  Pays medical expenses such as surgery, x-rays, ambulance, and physicians, regardless of who was at fault.
                </p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="medical_p" id="medical_p" onchange="add_number()">
                  <option value="0">I Reject this Coverage</option>
                  <option value="400"> $1,000 </option>
                  <option value="615">$2,000</option>
                  <option value="780">$3,000</option>
                  <option value="990">$4,000</option>          
                </select>
              </div>
            </div>
            <hr class="mb-4">

          <!-- Loss of Easrnings -->
            <div class="row">
              <div class="col-md-6">
                <h4>Loss of Earnings</h4>
                <p>
                  Pays 70% of loss of income, up to the limit selected, due to bodily injury from an auto accident.
                </p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="earnings_l" id="earnings_l" onchange="add_number()">
                  <option value="0">I Reject this Coverage</option>
                  <option value="140 "> $140 Weekly </option>
                  <option value="280">$280 Weekly</option>
                  <option value="360">$360 Weekly</option>
                  <option value="480">$480 Weekly</option>
                </select>
              </div>
            </div>
            <hr class="mb-4">

            <!-- Accidental Death Benefits -->
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
                <select name="death_b" id="death_b" onchange="add_number()">
                  <option value="0">I Reject this Coverage</option>
                  <option value="5000">$5,000</option>
                  <option value="10000">$10,000</option>
                </select>
              </div>
            </div>
            <hr class="mb-4">
  
            <!-- Motorist Bodily Injury -->
            <div class="row">
              <div class="col-md-6">
                <h4>Uninsured Motorist Bodily Injury</h4>
                <p>
                  Pays for injuries caused by an
                  uninsured or hit-and-run
                  motorist.</p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="uninsured_motorist_bodily_damage" id="uninsured_motorist_bodily_damage" onchange="add_number()">
                  <option value="0">I Reject this Coverage</option>
                  <option value="38000"> $50,000 </option>
                  <option value="47000"> $100,000 </option>
                  <option value="67000"> $200,000 </option>
                  <option value="78000"> $300,000 </option>
                </select>
              </div>
            </div>
            <hr class="mb-4">

            <!-- Uninsured Motorist -->
            <div class="row">
              <div class="col-md-6">
                <h4>Uninsured Motorist</h4>
                <p>
                  Pays for injuries caused by an
                  underinsured motorist.</p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="uninsured_motorist" id="uninsured_motorist" onchange="add_number()">
                  <option value="0">I Reject this Coverage</option>
                  <option value="33000"> $50,000 </option>
                  <option value="45000"> $100,000 </option>
                  <option value="67000"> $200,000 </option>
                  <option value="85800"> $300,000 </option>
                </select>
              </div>
            </div>
            <hr class="mb-4">

            <!-- Motorist Property Damage -->
            <div class="row">
              <div class="col-md-6">
                <h4>Uninsured Motorist Property Damage</h4>
                <p>
                  Pays for damages to your vehicle
                  caused by a driver without
                  insurance.</p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="uninsured_motorist_property_damage" id="uninsured_motorist_property_damage" onchange="add_number()">
                  <option value="0">I Reject this Coverage</option>
                  <option value="25000"> $25,000/$200 Ded.</option>
                  <option value="31000"> $50,000/$200 Ded.</option>
                  <option value="38750"> $100,000/$200 Ded.</option>
                </select>
              </div>
            </div>
            <hr class="mb-4">

            <!-- Accident Forgiveness -->
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
                <select name="upgraded_accident_forgiveness" id="upgraded_accident_forgiveness" onchange="add_number()">
                  <option value="0">I Reject this Coverage</option>
                  <option value="30"> I Accept </option>
                </select>
              </div>
            </div>
          </div>

          <!-- Policy Coverages ---------------------------------------------------------------->
          <h3 class="mb-3">Policy Coverages</h3>
          <hr class="mb-4">
          <div class="offset-md-1 col-md-10">

          <!-- Comprehensive -->
            <div class="row">
              <div class="col-md-6">
                <h4>Comprehensive (Excluding Collision)</h4>
                <p>
                  Pays for damage due to theft,
                  flood, vandalism, explosion, and
                  fire.</p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="comprehensive" id="comprehensive" onchange="add_number()">
                  <option value="7">I Reject this Coverage</option>
                  <option value="0"> No Deductible </option>
                  <option value="1800">$100 Ded.</option>
                  <option value="2500">$200 Ded. </option>
                  <option value="6190">$500 Ded. </option>
                  <option value="7100">$750 Ded. </option>
                  <option value="7700">$1,500 Ded. </option>
                  <option value="8100">$2,000 Ded. </option>
                  <option value="8400">$2,500 Ded. </option>
                </select>
              </div>
            </div>
            <hr class="mb-4">

            <!-- Collision -->
            <div class="row">
              <div class="col-md-6">
                <h4>Collision</h4>
                <p>
                  Pays for damages to your vehicle
                  caused by a collision or when it
                  overturns.</p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="collision" id="collision" onchange="add_number()">
                  <option value="7">I Reject this Coverage</option>
                  <option value="100">$100 Ded.</option>
                  <option value="2500">$200 Ded. </option>
                  <option value="5500">$500 Ded. </option>
                  <option value="7100">$750 Ded. </option>
                  <option value="7700">$1,500 Ded. </option>
                  <option value="8100">$2,000 Ded. </option>
                  <option value="8600">$2,500 Ded. </option>
                </select>
              </div>
            </div>
            <hr class="mb-4">

            <!-- Emergency Road Service -->
            <div class="row">
              <div class="col-md-6">
                <h4>Emergency Road Service</h4>
                <p>
                  Covers towing, lockout, labor for
                  flat tires, or delivery of a loaned
                  battery.</p>
              </div>
              <div class="offset-md-2 col-md-4">
                <select name="emergency_road_service" id="emergency_road_service" onchange="add_number()">
                  <option value="0">I Reject this Coverage</option>
                  <option value="25">I Accept  this Coverage</option>
                </select>
              </div>
            </div>
            <hr class="mb-4">

            <!-- Rental Reimbursement -->
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
                <select name="rental_reimbursment" id="rental_reimbursment" onchange="add_number()">
                  <option value="0">I Reject this Coverage</option>
                  <option value="900">$30/Day, $900 Max</option>
                  <option value="1050">$35/Day, $1,050 Max</option>
                  <option value="1350">$45/Day, $1,350 Max</option>
                  <option value="1500">$50/Day, $1,500 Max</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Final Cost ---------------------------------------------------------------->
          <h3>Premium</h3>
          <hr class="mb-4">
          <div class="offset-md-1 col-md-10" id="results">
            <input type="text" id="txtresult" name="TextBox3" placeholder="$--,---.--" style="margin-right: 1rem;" class="inputFormat">
            <input class="btn btn-primary" type="button" name="clickbtn" value="Calculate" onclick="add_number()">
          </div>
        </div>


    <script type="text/javascript">
      
      function add_number() {
        var property_damage = '<?php echo $property_damage; ?>';
        var bodily_injury = '<?php echo $bodily_injury; ?>';

        var medical_payments = '<?php echo $medical_payments; ?>';
        var loss_of_earnings = '<?php echo $loss_of_earnings; ?>';
        var accidental_death = '<?php echo $accidental_death; ?>';
        var uninsured_motorist_bodily_damage = '<?php echo $uninsured_motorist_bodily_damage; ?>';
        var uninsured_motorist = '<?php echo $uninsured_motorist; ?>';
        var uninsured_motorist_property_damage = '<?php echo $uninsured_motorist_property_damage; ?>';
        var upgraded_accident_forgiveness = '<?php echo $upgraded_accident_forgiveness; ?>';
        

        var comprehensive  = '<?php echo $comprehensive; ?>';
        var collision = '<?php echo $collision; ?>';
        var emergency_road_service = '<?php echo $emergency_road_service; ?>';
        var rental_reimbursment = '<?php echo $rental_reimbursment; ?>';

      
        var LAE = '<?php echo $loss_adjustment_expense; ?>';
        var profit = '<?php echo $profit; ?>';
        var variable_e = '<?php echo $variable_expense; ?>';


        var age = parseFloat(document.getElementById("age").value);
        var bodily_il_sev = parseInt(document.getElementById("bodily_il").value);
        var property_dl_sev = parseInt(document.getElementById("property_dl").value);
        var medical_p_sev = parseInt(document.getElementById("medical_p").value);
        var earnings_l_sev = parseInt(document.getElementById("earnings_l").value);
        var death_b_sev = parseInt(document.getElementById("death_b").value);
        var uninsured_motorist_bodily_damage_sev = parseInt(document.getElementById("uninsured_motorist_bodily_damage").value);
        var uninsured_motorist_sev = parseInt(document.getElementById("uninsured_motorist").value);
        var uninsured_motorist_property_damage_sev = parseInt(document.getElementById("uninsured_motorist_property_damage").value);
        var upgraded_accident_forgiveness_sev = parseInt(document.getElementById("upgraded_accident_forgiveness").value);
        var comprehensive_sev = parseInt(document.getElementById("comprehensive").value);

        var comprehensive_mod = 1;
        if (comprehensive_sev == 7){
          comprehensive_mod = 0;
        }

        var collision_ded = parseInt(document.getElementById("collision").value);

        var collision_mod = 1;
        if (collision_ded == 7){
          collision_mod = 0;
        }

        var emergency_road_service_sev = parseInt(document.getElementById("emergency_road_service").value);
        var rental_reimbursment_sev = parseInt(document.getElementById("rental_reimbursment").value);

        var result = (
        age * (
        bodily_il_sev * bodily_injury + 
        property_dl_sev * property_damage + 
        medical_p_sev * medical_payments + 
        earnings_l_sev * loss_of_earnings + 
        death_b_sev * accidental_death + 
        uninsured_motorist_bodily_damage_sev * uninsured_motorist_bodily_damage + 
        uninsured_motorist_sev * uninsured_motorist + 
        uninsured_motorist_property_damage_sev * uninsured_motorist_property_damage +
        upgraded_accident_forgiveness_sev * upgraded_accident_forgiveness + 
        comprehensive_mod * ( 12000 - comprehensive_sev ) * comprehensive + 
        collision_mod * ( 10300 - collision_ded ) * collision + 
        emergency_road_service_sev * emergency_road_service + 
        rental_reimbursment_sev * rental_reimbursment ) + 
        LAE)/(1 - variable_e - profit);

        
        
        function commify(n) {
          var parts = n.toString().split(".");
          const numberPart = parts[0];
          const decimalPart = parts[1];
          const thousands = /\B(?=(\d{3})+(?!\d))/g;
          return numberPart.replace(thousands, ",") + (decimalPart ? "." + decimalPart : "");
        }

        document.getElementById("txtresult").value = "$" + commify(result.toFixed(2));
        document.getElementById('navLabel').innerHTML = "$" + commify(result.toFixed(2));
      }
    </script>

  </body>
</html>
