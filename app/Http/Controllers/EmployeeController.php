<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    
    public function gotoEmployee(){
        $emp= Employee::all();
        return view("employees.employee")->with(["emp"=>$emp]);
    }
    // Go to employee list page
    public function gotoAddEmployee(){
        return view("employees.add_employee");
    }

    //Adding new Employee
    public function add_Employee(Request $request){
        //dd($req->all());
        Employee::create($request->all());
        return redirect()->route("homeToemployee");
    }

    // Go to update employee page with previous value
    public function gotoUpdate_Employee(Employee $emp){
        //$post = Post::find($id);
        return view("employees.update_employee",compact("emp"));
    }

    public function updateEmployee(Request $request, Employee $emp){
        $emp->update(["name"=>$request->name, "idno"=>$request->idno, "phone"=>$request->phone,"email"=>$request->email]);
        //dd($requ, $post->all());
        //sleep(2);
        return redirect()->route("homeToemployee");
        //return view("post.index");
    }

    public function deleteEmployee(Employee $emp){
        $emp->delete();
        return redirect()->route("homeToemployee");
    }



}
