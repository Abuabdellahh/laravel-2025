<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsingQueryBuilderController extends Controller
{
    //
    public function addQueryBuilder()
    {
        DB::table('using_query_builders')->insert([
        [    'name' => 'John Doe',
        'email' => 'john@example.com',
        'phone' => '1234567890',
        'address' => '123 Main St',
        'city' => 'New York',
        'state' => 'NY'],
        [
            'name' => 'dddd Doe',
            'email' => 'jane@example.com',
            'phone' => 'dd',
            'address' => '456 Main St',
            'city' => 'Los Angeles',
            'state' => 'CA']
        ]);
        return response()->json([
            'message' => 'Employee added successfully'
        ], 200);
    }

    public function getData(){
      $data = DB::table('using_query_builders')->get();
    // $data = DB::table('using_query_builders')->first();
    // $data = DB::table('using_query_builders')->where('id', 1)->get();
    // $data = DB::table('using_query_builders')->where('id','>', 1)->get();
    // $data = DB::table('using_query_builders')
    // ->where('id','=', 1)
    // ->orWhere('id','=', 2)
    // ->get();
      return response()->json([
        'data' => $data
      ], 200);
    }
    public function updateData(){
        DB::table('using_query_builders')
        ->where('id', 1)
        ->update(['name' => 'Eibrahim']);
        return response()->json([
            'message' => 'Employee updated successfully'
        ], 200);
    }
    public function deleteData(){
        DB::table('using_query_builders')
        ->where('id', 1)
        ->delete();
        return response()->json([
            'message' => 'Employee deleted successfully'
        ], 200);
    }
  
}
