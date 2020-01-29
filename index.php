<!DOCTYPE html>
<html>
    <head>
        <script>
            
            // Pull up countries list if corresponding radio button is selected
            function enable_countries_list(){
                countries = document.getElementById("loc_form");
                countries.style.display = "block";
                colors = document.getElementById("colors_disp");
                colors.style.display = "none";
                show_submit();

            }
            
            // Pull up HTML5 color picker if corresponding radio button is selected
            function enable_colors_display(){
                colors = document.getElementById("colors_disp");
                colors.style.display = "block";
                countries = document.getElementById("loc_form");
                countries.style.display = "none";
                show_submit();
            }
            
            // Show the submit button so that the user can finalize their color choice
            function show_submit(){
                document.getElementById("submit_button").style.display="block";    
            }
            
            // Called when submit button is clicked
            // Should call a php script? TBD
            function apply_settings(){
            
            }
            
        </script>
        
        <meta charset="utf-8" />
        <meta name="description" content="User interface for remote cloud sculpture control." />
        <link rel="stylesheet" href="main.css" />
        <title> Cloud Installation Control Panel </title>

    </head>
    
    <body>
            
                <h1> Cloud Installation Control Panel </h1>
                
                <div id="form">                
                    
                    <input type="radio" name="set_color" onclick="enable_colors_display()" class="radio_button"/>Set Color<br />
        
                    <input type="radio" name="set_color" onclick="enable_countries_list()" class="radio_button"/>Set Location<br />   
                              
                    <input type="color" id="colors_disp"/>
                    
                    <form id=loc_form>
                        
                        <select name="country" class="countries" id="countryId">
                            <option value="">Select Country</option>
                        </select>
                        
                        <select name="state" class="states" id="stateId">
                            <option value="">Select State</option>
                        </select>
                        
                        <select name="city" class="cities" id="cityId">
                            <option value="">Select City</option>
                        </select>
                        
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        
                        <script src="//geodata.solutions/includes/countrystatecity.js"></script>
                        
                    </form>
                    
                    <button onclick = "apply_settings()" id="submit_button"> Apply Settings </button>
                    
                </div>
    </body>
</html>