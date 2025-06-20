<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return Employee::all();
    }

    public function addEmployee(Request $request)
    {
        $employee = new Employee();
        $employee->name = "Adem";
        $employee->email = "Adem@gmail.com";
        $employee->phone = "66666666";
        $employee->address = "AA";
        $employee->city = "AA";
        $employee->state = "AA";
        $employee->zip = "1000";
        $employee->country = "Ethiopia";
        $employee->save();

        return response()->json([
            'message' => 'Employee added successfully'
        ], 201);
    }
    public function showEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        if (!$employee) {
            return response()->json([
                'message' => 'Employee not found'
            ], 404);
        }
        return response()->json([
            'employee' => $employee
        ], 200);
    }



    public function updateEmployee(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = "Meded";
        $employee->save();
        return response()->json([
            'message' => 'Employee updated successfully'
        ], 200);

        // $employee->update($request->all());
        // return response()->json([
        //     'message' => 'Employee updat        $employeeed successfully'
        // ], 200);
    }
    public function deleteEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return response()->json([
            'message' => 'Employee deleted successfully'
        ], 200);
    }
}