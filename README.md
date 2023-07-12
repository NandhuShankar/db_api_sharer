# db_api_sharer
A php based web application that stores user data into a mysql API. A mule application then shares said data to given an API key.

How it works:
1.) User logs in and inputs data into the form. THey can see their data and how many times it has been pinged.<br />
2.) The site generates an API key that lets the public request the user's data. They can share that key with others.<br />
3.) Who ever has the key can send a GET request, and recieve the user's data in a JSON format to use for their purposes.<br />

How to set up locally:<br />
1.) Install XAMPP and set up a mysql and apachee server.<br />
2.) in localhost/phpmyadmin create a users table with a user_id, password, user_name, API_use, user_id, and and auto increment primary key ID.<br />
look at the code and edit to fit.<br />
3. Install anypoint studio and paste the mule.xml<br />
once the 3 services are running you should be able to use the sample python script or any API requester like ARC to ping data.<br />
<br /><br />
This is one of my first projects, dm if anything is unclear!<br />
