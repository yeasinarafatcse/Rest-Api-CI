# Rest-Api-CI
Codeigniter 3 RESTful API using POSTMAN
I create the HTTP request like GET, POST, PUT, DELETE.

I am using one package called CodeIgniter RestServer to build this rest api in codeigniter 3.

First Download Codeignter v3 Package From https://codeload.github.com/bcit-ci/CodeIgniter/zip/3.1.11

Download the Zip file for Rest API in CodeIgniter 3 from https://fundaofwebit.com/postupload/codeigniter3-api.zip

Extract the file and place all the files in your project, as given in below steps:

Step 1: API Adding Language: Copy the file named rest_controller_lang.php 

and paste the file in your project in the following path: application/language/english/rest_controller_lang.php 

Step 2: Copy the file named rest.php and paste it in the following path: application/config/rest.php

Step 3: Copy the file named RestController.php and Format.php 

and paste it in the following path: application/libraries/RestController.php & application/libraries/Format.php

Securing the API

Now, Once your API is built. it needs securing. So the only users who have the access (Login Credentials) can get data through API.

1. To set the login credentials which is username and password & open the rest.php file in the following path -  

application/config/rest.php and search for 

$config['rest_valid_logins'] = ['admin' => '1234'];

2. Change these details into 
// default
$config['rest_auth'] = FALSE;

// Change it to
$config['rest_auth'] = 'basic';

3. once we set the $config['rest_auth'] = 'basic' we have to give one more permission to access this as follows:
// default
// $config['auth_source'] = 'ldap';

// Change it to
$config['auth_source'] = '';

Now, Open POSTMAN Software and choose Authorization and select TYPE as Basic Auth and then provide your username and password as shown above.
