Create .env
^^^^^^^^^^^^^^^^^
The .env requires the following data

::
	DB_NAME="test"
	DB_USER="user"
	DB_PASSWORD="topsecret"
	WP_DEBUG=true
	DB_HOST="127.0.0.1"
	BASE_URL='http://localhost:8000'
	COOKIE_DOMAIN='localhost'


To install
^^^^^^^^^^^^^

If the database is empty; going to BASE_URL will return an error. Please, go to /install.php and install Drupal directly. After that, BASE_URL should work
