import requests
import time
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BOARD)
switch = 3
GPIO.setup(switch, GPIO.IN)

for x in range(0, 10000000):
        if (GPIO.input(switch)) == True:

            requests.post('http://192.168.30.1/workshop/submit.php', data = {
                    'value': 1
            })
        else:    
	        requests.post('http://192.168.30.1/workshop/submit.php', data = {
	                'value': 0
	        })

        time.sleep(0.01)

GPIO.cleanup()
