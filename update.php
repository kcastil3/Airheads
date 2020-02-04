<?php
  header("Location: ..");  

  $myfile = fopen("vars.txt","w");
  $txt = "The current setting is to: "; fwrite($myfile, $txt); 
  echo fwrite($myfile, $_POST['country']); 
  $fclose($myfile);

   exit;
?>
