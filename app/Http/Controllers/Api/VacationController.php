<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacation;

class VacationController extends Controller
{
    public function index()
      {
        $vacations = Vacation::all();
        return response()->json(compact('vacations'));
          
      }
  
      public function show(Vacation $vacation)
      {
        return response()->json(compact('vacation'));
      }
  
      public function store(Request $request)
      {
          $vacation = Vacation::create($request->all());
  
          return response()->json($vacation, 201);
      }
  
      public function update(Request $request, Vacation $vacation)
      {
          $vacation->update($request->all());
  
          return response()->json($vacation, 200);
      }
  
      public function delete(Vacation $vacation)
      {
          $vacation->delete();
  
          return response()->json(null, 204);
      }
}
