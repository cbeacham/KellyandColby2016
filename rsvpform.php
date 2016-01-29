<?php
$link = mysqli_connect("localhost", "username", "password") or die("failed to connect to server!!");
mysqli_select_db($link, "database_name");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$name = $_POST['name'];
$coming = $_POST['coming'];
$name1 = $_POST['name1'];
$coming1 = $_POST['coming1'];
$name2 = $_POST['name2'];
$coming2 = $_POST['coming2'];
$name3 = $_POST['name3'];
$coming3 = $_POST['coming3'];
$name4 = $_POST['name4'];
$coming4 = $_POST['coming4'];
$name5 = $_POST['name5'];
$coming5 = $_POST['coming5'];
$vegGuests = $_POST['vegGuests'];
$glutenGuests = $_POST['glutenGuests'];
$shuttle = $_POST['shuttle'];
$busPickup = $_POST['busPickup'];
$other = $_POST['other'];

// Validation

if($errorMessage != "") {
  echo "<p class='message'>" .$errorMessage. "</p>";
}
else {
  $formSubmit = "INSERT INTO database_name.table_name
  (name, coming, name1, coming1, name2, coming2, name3, coming3,
    name4, coming4, name5, coming5, vegGuests, glutenGuests, shuttle, busPickup, other)
  VALUES
  ('$name', '$coming', '$name1', '$coming1', '$name2', '$coming2', '$name3', '$coming3',
    '$name4', '$coming4', '$name5', '$coming5', '$vegGuests', '$glutenGuests', '$shuttle', '$busPickup', '$other')";
  mysqli_query($link, $formSubmit) or die(mysqli_error($link));
}
}

header('Location: success.html');

?>
