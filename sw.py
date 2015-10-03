import requests

while True:
	r = requests.get('http://192.168.30.102/workshop/data.php')
	data = r.json
	print data.data