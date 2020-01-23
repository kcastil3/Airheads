# Airheads Server_side
Github repo for all code relating to the server-side for the Weather-Responsive Cloud Sculpture Senior Design Project, including but not limited to: start-up scripts, API Gateways, UI design implementations, and backend cloud networking.


install_libs
  This script will be triggered on reboot via a Cron job to check/install the necessary NeoPixel and OpenWeatherMapAPI libraries.
  
  At the end of this script, the python executable will be called so that the Raspberry Pi begins to light up the cloud and serve its intended purpose.
