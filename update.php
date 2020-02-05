<?php
  header("Location: .."); // Redirect back home after executing this script

  $myfile = fopen("vars.txt","w");
  $txt = "The current setting is to: ";
  fwrite($myfile, $txt); // Need permissions to write to file!
  echo fwrite($myfile, $_POST['city']);
  $txt = ", ";
  echo fwrite($myfile, $txt);
  echo fwrite($myfile, $_POST['country']); 
  $fclose($myfile);

  exit;
?>
