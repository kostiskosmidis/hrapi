<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Http\Requests\SkillStoreRequest;

class SkillController extends Controller
{
    //Get All skills

      //Get All Users
      // public function getAllSkills() {
      //   $skills = Skill::get()->toJson(JSON_PRETTY_PRINT);
      //   return response($skills, 200);
      // }
     
      public function index()
      {
        $skills = Skill::all();
        return response()->json(compact('skills'));
      }
  
      public function show(Skill $skill)
      {
        return response()->json(compact('skill'));
      }
  
      public function store(SkillStoreRequest $request)
      {
          $skill = Skill::create($request->all());
  
          return response()->json($skill, 201);
      }
  
      public function update(Request $request, Skill $skill)
      {
          $skill->update($request->all());
  
          return response()->json($skill, 200);
      }
  
      public function delete(Skill $skill)
      {
          $skill->delete();
  
          return response()->json(null, 204);
      }
      
      
}
