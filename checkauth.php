
<?php
session_unset();
session_destroy();

$user = $_POST["txtUser"];
$pass = $_POST["txtPass"];
$db = "autoadmin";
$host = "10.29.21.4";

$dbuser = "";
$dbpass = "";
$database = "autoadmin";
$dbhost = "10.29.21.4";

$sql =
  "SELECT COUNT(*) AS TOTALCOUNT FROM users WHERE user_name = ? AND user_password = SHA2(?, 256);";

//  Connect
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $database);

// Prepare statements for querying ----------------------------------------------------
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$rs = $stmt->get_result();

// Iterate through result set ---------------------------------------------------------
if (mysqli_num_rows($rs) > 0) {
  while ($row = mysqli_fetch_assoc($rs)) {
    $matching = $row["TOTALCOUNT"];

    if ($matching == 1) {
      // Logged in
      session_start();
      $_SESSION["type"] = $row["TYPE"];
      header("Location: update.php");
    } else {
      // Redirect
      header("Location: login.html");
      exit();
    }
  }
} else {
  header("Location: login.html");
}
// -------------------------------------------------------------------------------------

mysqli_close($con);


?>
