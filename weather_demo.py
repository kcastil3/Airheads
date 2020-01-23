import pyowm

api_key = "b170ce11846cfd98939f040b9dc15de1"

owm = pyowm.OWM(api_key)

city_name = "San Antonio"

city_obj = owm.weather_at_place(city_name + ", US")
weather_obj = city_obj.get_weather()

temp= weather_obj.get_temperature('fahrenheit')
print(temp['temp'])
