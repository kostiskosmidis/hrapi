<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserResource;

use App\Models\User;
use App\Models\Vacation;

class UserController extends Controller
{
    // //Get All Users
    // public function getAllUsers() {
    //     $users = User::get()->toJson(JSON_PRETTY_PRINT);
    //     return response($users, 200);
    //   }


    //   //Get UserByID
    //   public function getUser($id) {
    //     if (User::where('id', $id)->exists()) {
    //       $user = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
    //       return response($user, 200);
    //     } else {
    //       return response()->json([
    //         "message" => "User not found"
    //       ], 404);
    //     }
    //   }

    //  //Create User
    //   public function createUser(Request $request) {
     
    //     $request->validate([
    //       'name'=>'required',
    //       'email'=>'required',
    //       'password'=>'required'
    //   ]);
      
    //     $user = new User;
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = $request->password;
    //     $user->save();
  
    //     return response()->json([
    //       "message" => "User record created"
    //     ], 201);
    //   }

    //  //Update User
    //   public function updateUser(Request $request, $id) {
    //     if (User::where('id', $id)->exists()) {
    //       $user = User::find($id);
  
    //       $user->name = is_null($request->name) ? $user->name : $user->name;
          
    //       $user->save();
  
    //       return response()->json([
    //         "message" => "records updated successfully"
    //       ], 200);
    //     } else {
    //       return response()->json([
    //         "message" => "User not found"
    //       ], 404);
    //     }
    //   }

    //  //Delete User
    //   public function deleteUser ($id) {
    //     if(User::where('id', $id)->exists()) {
    //       $user = User::find($id);
    //       $user->delete();
  
    //       return response()->json([
    //         "message" => "records deleted"
    //       ], 202);
    //     } else {
    //       return response()->json([
    //         "message" => "User not found"
    //       ], 404);
    //     }
    //   }

    public function index()
    {
        // $users = UserResource::collection(User::all());
        // $count = count($users);

        // return response()->json(compact('users', 'count'));

        $users = User::all();
        return response()->json(compact('users'));
    }

    public function show(User $user)
    {
        return response()->json(compact('user'));
    }

    public function store(Request $request)
    {
        //$validatedData = $request->validated();

        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }


    public function showvacations(User $user){
      $vacations = $user->vacations;
      if(count($vacations) > 0){
          return response()->json(['message'=>'Success','data'=>$vacations],200);
      }
          return response()->json(['message'=>'No Vacations Found','data'=>null],200);
  }


  public function showskills(User $user){ //index
    $skills = $user->skills;
    if(count($skills) > 0){
        return response()->json(['message'=>'Success','data'=>$skills],200);
    }
        return response()->json(['message'=>'No Vacations Found','data'=>null],200);
}

public function storevacations(User $user){ //na dw thn sync
    $vacations = $user->vacations;
    if(count($vacations) > 0){
        return response()->json(['message'=>'Success','data'=>$vacations],200);
    }
        return response()->json(['message'=>'No Vacations Found','data'=>null],200);
}



}
