import requests
import time

for x in range(0, 100):
	requests.post('http://localhost/workshop/submit.php', data = {
		'value': x
	})
	time.sleep(0.01)

