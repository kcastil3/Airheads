import pyowm

api_key = "b170ce11846cfd98939f040b9dc15de1"

owm = pyowm.OWM(api_key)

file = open("/var/www/html/vars.txt", "r") # Location/Color Setting is stored in txt file
user_setting = file.readline().lower()
file.close()
print(user_setting)

if "color" in user_setting:
   print("Color setting is being used")
   exit(0); # Don't need to make a request to API if color was set directly
else: # Otherwise, need to contact API
   user_setting = user_setting.split(':')[1] # Return city + country name as single string
   locations = user_setting.split(',')

   city_name = locations[0] # Comma separates the city and country name
   country_name = locations[1]

   city_obj = owm.weather_at_place(city_name + ", " + country_name)
   weather_obj = city_obj.get_weather()

   temp= weather_obj.get_temperature('fahrenheit')
   print(temp['temp'])
   exit(0)
