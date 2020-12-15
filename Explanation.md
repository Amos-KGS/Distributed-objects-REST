The code is commented and hence it is easier to understand.
steps
create a new laravel project from the command-line:
  laravel new new_project
ensure you have a database in your server.
edit the .env file and key in your Database details.
create a model from the command-line:
  php artisan make:model Mymodel.
create a controller from command-line:
  php artisan make:controller MyController --resource // makes the controller with all the functions(CRUD)
create a resource file from command-line:
  php artisan make:reource MyResource
NB: When the model is created an accompanying database migration file is created too.
Look for the accompanying migration file and edit the database fields.
Do the logic.
//Do the routing in Routes/api.php - api endpoints.

How to run.
run 'php artisan serve' from command-line.

How to test
Open Postman to test.
Use the various methods: 
POST - runs the store function in the controller. ensure you input data in the form-field category. eg http://localhost:8000/api/names
GET - retrieves data. in case of single data, specify the id eg http://localhost:8000/api/names/1.
PUT - updates a record. You must pass the unique value. This is done in the raw tab in postman and apply JSON format eg http://localhost:8000/api/names/4 
DELETE - deletes a record. You must pass the unique value.eg http://localhost:8000/api/name/3

