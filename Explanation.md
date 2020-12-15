<b>Explanation</b><br>
The code is commented and hence it is easier to understand.<br><br>
<b>steps</b><br>
create a new laravel project from the command-line<br>
 ->&nbsp;&nbsp;&nbsp;&nbsp;<b>laravel new new_project</b><br>
ensure you have a database in your server.<br>
edit the .env file and key in your Database details.<br>
create a model from the command-line:<br>
  ->&nbsp;&nbsp;&nbsp;&nbsp;<b>php artisan make:model Mymodel</b>.<br>
create a controller from command-line:<br>
  ->&nbsp;&nbsp;&nbsp;&nbsp;<b>php artisan make:controller MyController --resource </b>// makes the controller with all the functions(CRUD)<br>
create a resource file from command-line:<br>
  ->&nbsp;&nbsp;&nbsp;&nbsp;<b>php artisan make:reource MyResource</b><br>
NB: When the model is created an accompanying database migration file is created too.<br>
Look for the accompanying migration file and edit the database fields.<br>
Do the logic.<br>
//Do the routing in Routes/api.php - api endpoints.<br><br>

<b>How to run.</b><br>
run <b>'php artisan serve'</b> from command-line.<br><br>

<b>How to test</b><br>
Open Postman to test.<br>
Use the various methods: <br>
<b>POST</b> - runs the store function in the controller. ensure you input data in the form-field category. eg http://localhost:8000/api/names<br>
<b>GET</b> - retrieves data. in case of single data, specify the id eg http://localhost:8000/api/names/1.<br>
<b>PUT</b> - updates a record. You must pass the unique value. This is done in the raw tab in postman and apply JSON format eg http://localhost:8000/api/names/4<br>
<b>DELETE</b> - deletes a record. You must pass the unique value.eg http://localhost:8000/api/name/3

