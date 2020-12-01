<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;

class DepartmentController extends Controller
{
    public function index()
      {
          return Department::all();
      }
  
      public function show(Department $depart)
      {
          return $depart;
      }
  
      public function store(Request $request)
      {
          $depart = Department::create($request->all());
  
          return response()->json($depart, 201);
      }
  
      public function update(Request $request, Department $depart)
      {
          $depart->update($request->all());
  
          return response()->json($depart, 200);
      }
  
      public function delete(Department $depart)
      {
          $depart->delete();
  
          return response()->json(null, 204);
      }


      public function update1(Department $department,User $user){
       $user->department()->associate($department);

       //$user->save();

       return response()->json(null,204);

      }


      public function destroy1(Department $department,User $user){
        $user->department()->dissociate($department);
 
        //$user->save();
 
        return response()->json(null,204);
 
       }

}
