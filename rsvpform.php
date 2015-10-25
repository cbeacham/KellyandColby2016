<?php
if(isset($_POST['submit']))
{
$data = $_POST['name'];
$name = $data + "HEYYYY" +"\n";
$file = fopen("data.txt","a+");
fwrite($file, $name);
fclose($file); 
//Go back to RSVP Page
header(location:'rsvp.html');
}
?>