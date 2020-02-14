<?php
  header("Location: .."); // Redirect back home after executing this script

  $myfile = fopen("vars.txt","w");
  $txt = "The current setting is to ";
  fwrite($myfile, $txt); // Note, need permissions to write to file!

  // Check whether color or location was set and update txt file accordingly
  if(! empty($_POST['city'])){
     echo fwrite($myfile,'the location: '.  $_POST['city']);
     $txt = ", ";
     echo fwrite($myfile, $txt);
     echo fwrite($myfile, $_POST['country']);
     fclose($myfile);
  } else{
     echo fwrite($myfile, 'the color: '. $_POST['color_val']);
     fclose($myfile);
  }
  exit;
?>
