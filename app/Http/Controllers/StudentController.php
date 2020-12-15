<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; /* this reference the model hence its mandatory in the accompanying controller */
use Validator; /* for validation purposes */
use App\Http\Resources\StudentResource as StdResource; /* reference the resource for data format display */
use App\Http\Controllers\BASE\BaseController as BsController;



class StudentController extends Controller
{
  // Insert function to insert data into the db
    public function store(Request $req){

        $student = $req->all(); // gets all the form fields

        $validator = Validator::make($student, [
            'fname' => 'required',
            'lname' => 'required',
            'course' => 'required',
            'year' => 'required',
        ]);
   
        $student = Student::create($student); // method to create new record

        return response()->json([
            'status'=>'Success',
            'message'=>'Student added successfully'
        ], 201);

    }

    // retrieves all the data in the database table
    public function index()
    {
        $students = Student::get()->toJson(JSON_PRETTY_PRINT); // use get method and data to json format
        return response($students, 200);
    }

    // retrieves data based on a unique id
    public function show($id){
        if (Student::where('id', $id)->exists()) {
            $student = Student::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT); // use get and pass the id value
            return response($student, 200);
            
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
      }

    // deletes a record based on unique id 
    public function destroy(Request $req, $id){
        if(Student::where('id', $id)->exists()) {
            $student = Student::find($id);
            $student->delete(); //delete method
    
            return response()->json([
              "message" => "Student deleted successfully!"
            ], 202);

          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
        }

    //updates a record based on a unique id
    public function update(Request $request, $id){
        if (Student::where('id', $id)->exists()) {
            $student = Student::find($id);
            $student->fname = is_null($request->fname) ? $student->fname : $request->fname;
            $student->lname = is_null($request->lname) ? $student->lname : $request->lname;
            $student->course = is_null($request->course) ? $student->course : $request->course;
            $student->year = is_null($request->year) ? $student->year : $request->year;

            $student->save(); // method to save the record
    
            return response()->json([
                "message" => "student updated successfully"
            ], 200);
            } 
            else {
            return response()->json([
                "message" => "Student not found"
            ], 404);
            
        }

    }

    //
}
