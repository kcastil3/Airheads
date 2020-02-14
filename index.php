<!DOCTYPE html>
<html>
    <head>
        <script>
            
            // Pull up countries list if corresponding radio button is selected
            function enable_countries_list(){
                countries = document.getElementById("loc_form");
                countries.style.display = "block";

		country_form = document.getElementById("countryId");
		state_form = document.getElementById("stateId");
		city_form = document.getElementById("cityId");
		country_form.required = true;
		state_form.required = true;
		city_form.required = true;

                colors = document.getElementById("colors_disp");
                colors.style.display = "none";

		document.getElementById("form_general").reset();
                show_submit();

            }
            
            // Pull up HTML5 color picker if corresponding radio button is selected
            function enable_colors_display(){
                colors = document.getElementById("colors_disp");
                colors.style.display = "block";
                countries = document.getElementById("loc_form");
                countries.style.display = "none";

		country_form = document.getElementById("countryId");
		state_form = document.getElementById("stateId");
		city_form = document.getElementById("cityId");
		country_form.required = false;
		state_form.required = false;
		city_form.required = false;

		document.getElementById("form_general").reset();
                show_submit();
            }
            
            // Show the submit button so that the user can finalize their color choice
            function show_submit(){
                document.getElementById("submit_button").style.display="block";    
            }
            
        </script>
        
        <meta charset="utf-8" />
        <meta name="description" content="User interface for remote cloud sculpture control." />
        <link rel="stylesheet" href="main.css" />
        <title> Cloud Installation Control Panel </title>

    </head>
    
    <body>
            
                <h1> Cloud Installation Control Panel </h1>
                
                <form action="update.php" method="post" id="form_general">                
                    
		    <div id="radio_buttons">
                       <input type="radio" name="set_color" onclick="enable_colors_display()"/>Set Color<br />
        
                       <input type="radio" name="set_color" onclick="enable_countries_list()"/>Set Location<br />   
		    </div>
      			
		    <div id="colors_disp">
			<input type="color" name="color_val" value="#ccffff"/>
			<label> Click Button to Set Color</label>
		    </div>

                    <div id="loc_form">
                        
                        <select name="country" class="countries" id="countryId" required>
                            <option value="">Select Country</option>
                        </select>
                        
                        <select name="state" class="states" id="stateId" required>
                            <option value="">Select State</option>
                        </select>
                        
                        <select name="city" class="cities" id="cityId" required>
                            <option value="">Select City</option>
                        </select>
                        
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        
                        <script src="//geodata.solutions/includes/countrystatecity.js"></script>
                    </div>
                        
                    <input type="submit" id="submit_button" name="Submit">
                        
                </form> 
		<p> <br> </p>
		<?php
		   $myfile  = fopen("vars.txt", "r");
		   echo fread($myfile, filesize("vars.txt"));
		   fclose($myfile);
                ?>
	        <p> <br> </p>
		<?php
                   $datafile = fopen("weather_data.txt", "r");
                   echo fread($datafile, filesize("weather_data.txt"));
                   fclose($datafile);
		 ?>
                    
    </body>
</html>
