<?php header("Location: .."); // Redirect back home after executing this script

  $myfile = fopen("vars.txt","w");
  $txt = "The current setting is to ";
  fwrite($myfile, $txt); // Note, need permissions to write to file! chmod 777

  // Check whether color or location was set and update txt file accordingly
  if(! empty($_POST['city'])){
     echo fwrite($myfile,'the location: '.  $_POST['city']);
     $txt = ", ";
     echo fwrite($myfile, $txt);
     echo fwrite($myfile, $_POST['country']);
     fclose($myfile);

     //Need to wait for separate python script to execute
     $weatherfile = fopen("weather_data.txt","w");
     echo fwrite($weatherfile, "Fetching weather data... refresh momentarily");
     fclose($weatherfile);
  } else{
     echo fwrite($myfile, 'the color: '. $_POST['color_val']);
     fclose($myfile);

    // If color is set, get rid of the extra weather text
    echo file_put_contents("weather_data.txt", ""); //as before, need correct permissions
  }
  exit;
?>
