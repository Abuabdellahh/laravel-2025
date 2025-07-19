<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UsingQueryBuilder;

class UsingQueryBuilderController extends Controller
{

    // I  jumped    this  videos
    // form validation
    // add old
    // uploadImage 
    // cleaned  and organized add or  create  in crud 
    // pagination and  search



    public function addQueryBuilder()
     {
            // Add Data Using Eloquent ORM
            $data = new UsingQueryBuilder();
            $data->name = 'hassen Doe';
            $data->email = 'john@example.com';
            $data->phone = '1234567890';
            $data->address = '123 Main St';
            $data->city = 'New York';
            $data->state = 'NY';
            $data->save();

    //     DB::table('using_query_builders')->insert([
    //     [    'name' => 'John Doe',
    //     'email' => 'john@example.com',
    //     'phone' => '1234567890',
    //     'address' => '123 Main St',
    //     'city' => 'New York',
    //     'state' => 'NY'],
    //     [
    //         'name' => 'dddd Doe',
    //         'email' => 'jane@example.com',
    //         'phone' => 'dd',
    //         'address' => '456 Main St',
    //         'city' => 'Los Angeles',
    //         'state' => 'CA']
    //     ]);
        return response()->json([
            'message' => 'Employee added successfully'
        ], 200);
    }

    public function getData(){

// softdelete
    //  $data = UsingQueryBuilder:: onlyTrashed()->get();
    //  $data = UsingQueryBuilder:: withTrashed()->get();
    //  $data = UsingQueryBuilder:: withTrashed()->find(5)->restore();




        // Eloquent ORM
        // $data = UsingQueryBuilder::all();
        // $data = UsingQueryBuilder::select('name', 'email')
        // ->where('id', 1)
        // ->get();
         // $data = UsingQueryBuilder::select('name', 'email')
         // ->where('id', 1)
         // ->first();
        //  $data = UsingQueryBuilder::select('name', 'email')->find(2);
     
 
         


        // $data = UsingQueryBuilder::find(1);
        // $data = UsingQueryBuilder::where('id', 1)->get();
        // $data = UsingQueryBuilder::where('id','>', 1)->get();
        // $data = UsingQueryBuilder::where('id','=', 1)->orWhere('id','=', 2)->get();



    //   $data = DB::table('using_query_builders')->get();
    // $data = DB::table('using_query_builders')
    // ->select('name', 'email')
    // ->where('id', 1)
    // ->get();

    // $data = DB::table('using_query_builders')->where('id', 1)->get();

    // $data = DB::table('using_query_builders')->where('id','>', 1)->get();
    // $data = DB::table('using_query_builders')
    // ->where('id','=', 1)
    // ->orWhere('id','=', 2)
    // ->get();

    // $data = DB::table('using_query_builders')->count();
    // $data = DB::table('using_query_builders')->max('id');
    // $data = DB::table('using_query_builders')->min('id');
    // $data = DB::table('using_query_builders')->avg('id');
    // $data = DB::table('using_query_builders')->sum('id');
    // $data = DB::table('using_query_builders')->where('id', 1)->value('name');
    // $data = DB::table('using_query_builders')->where('id', 1)->pluck('name');
    // $data = DB::table('using_query_builders')->where('id', 1)->first();
    // $data = DB::table('using_query_builders')->where('id', 1)->exists();
    // $data = DB::table('using_query_builders')->where('id', 1)->doesntExist();
    // $data = DB::table('using_query_builders')->where('id', 1)->exists();
      return response()->json([
        'data' => $data
      ], 200);
    }
    public function updateData(){

         // Eloquent ORM
         $data=UsingQueryBuilder::find(2);
         $data->name = 'Eibrahim Muhammad';
         $data->phone=00000223455;
         $data->save();

         





        // DB::table('using_query_builders')
        // ->where('id', 1)
        // ->update(['name' => 'Eibrahim']);
        return response()->json([
            'message' => 'Employee updated successfully'
        ], 200);
    }
    public function deleteData(){
            // Eloquent ORM
        // $data=UsingQueryBuilder::findOrFail(5);
        // $data->delete();

        // force delete  opp for softdelete
         UsingQueryBuilder::where('id', 5)->forceDelete();

        // DB::table('using_query_builders')
        // ->where('id', 1)
        // ->delete();
        return response()->json([
            'message' => 'Employee deleted successfully'
        ], 200);
    }
  
    public function whereCondition(){
        $data=UsingQueryBuilder::where('id', 1)->get();
        return response()->json([
            'data' => $data
        ], 200);
    }

    public function whereConditionOr(){
        $data=UsingQueryBuilder::where('id', 1)->orWhere('id', 2)->get();
        return response()->json([
            'data' => $data
        ], 200);
    }

    public function whereConditionIn(){
        $data=UsingQueryBuilder::whereIn('id', [1, 2, 3])->get();
        return response()->json([
            'data' => $data
        ], 200);
    }

    public function whereConditionNotIn(){
        $data=UsingQueryBuilder::whereNotIn('id', [1, 2, 3])->get();
        return response()->json([
            'data' => $data
        ], 200);
    }

    public function whereConditionBetween(){
        $data=UsingQueryBuilder::whereBetween('id', [1, 2])->get();
        return response()->json([
            'data' => $data
        ], 200);
    }
    public function whereConditionNotBetween(){
        $data=UsingQueryBuilder::whereNotBetween('id', [1, 2])->get();
        return response()->json([
            'data' => $data
        ], 200);
    }
    public function QueryScope(){
        $data=UsingQueryBuilder::where('id', 1)->get();
        return response()->json([
            'data' => $data
        ], 200);
    }
    public function QueryScope2(){
        $data=UsingQueryBuilder::where('id', 1)->get();
        return response()->json([
            'data' => $data
        ], 200);
    }
   
 
    
}
