import pip._vendor.requests 
try:
    response = pip._vendor.requests.get('http://localhost:8081/flights') #insert API key
    response.raise_for_status()  # Raises an exception for non-2xx status codes
    print("Request successful!")
    print("Response:")
    print(response.text)
except pip._vendor.requests.exceptions.RequestException as e:
    print("Request failed:", str(e))
