# Airheads Server_side
Github repo for all code relating to the server-side for the Weather-Responsive Cloud Sculpture Senior Design Project, 
including but not limited to: start-up scripts, contacting the Weather API, and the UI design.

File Breakdown:

  README.md:
    
    Current file, intended to document each file in this repository as well as its purpose.
    
  index.php
  
    This is the most important file for the server, it is the landing page for the server's website. This file includes the HTML 
    attributes needed to make a viable form for submitting a new location, or color. It also includes the Javascript (in the <script> 
    tags) needed to make this webpage change in response to user inputs in a dynamic and easy-to-understand way. 
    
    Upon submission of the form, the PHP will run so that the color/weather setting will change and the site will indicate this 
    new setting.
    
    Possible point of confusion:
      
      - The bottom <script> tags refer to a ready-made JQuery script that handles the location form. Gathering the geographic data
        for all of the cities in all of the countries would be an arduous task, so this (free) service is intended to circumvent that
        challenge.
        
      - The <select='color'> tag is an HTML5 only feature, this would be difficult to implement by 
        ourselves. Fortunately HTML5 is now the norm, so it is safe to assume all end-users have access to it.
        
  update.php
    
    This file is executed when the submit button is pressed (from index.php) and all of the required fields in the form are filled.
    It updates the value of the variables saved in the vars.txt files to match that submitted in the form. After this, the user is 
    redirected back to the home page.
    
 vars.txt
    
    Rather than use a database, this lightweight method is a way to save variables on the server-side.
    * In order to use the PHP methods that access this txt file, the correct permissions must be configured on the server.
      
  main.css
  
    This is the CSS file for the index.php page. Note, some of the visibility for the attributes is set to "hidden" by default. This is
    to allow the Javascript to make them visible whenever the appropriate information is inputted. For example, we do not 
    want to show the HTML color picker whenever the end-user is only concerned with changing the location setting.
   
  move_page
    
    This file is not essential. It is a script intended to make updating the webpages on the Raspberry Pis easier. It copies over 
    changes made in your local Airheads repository to neccessary location. This location is/var/www/html is the default location for
    storing webpage related files. The Raspberry Pi makes this folder after installing 
    lighttpd (the server environment for this project).
    
    Running Instructions:
      In order to run it the first time, you must first call: "chmod 755 move_page" to make it an executable file. You can then 
      execute it from your Airheads folder using "./move_page".
  
  weather_demo.py (may be a php script in the future)
  
    This file will needed lots of updating, it will be the program that responds to changes in the server (i.e. a change in the 
    weather-setting variable) and fetches the weather-data corresponding to that location. It will then make the neccessary
    changes to the webpage so that the user can clearly see the location/color setting whenever they log on.
    
