<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function showAction($id)
    {
        $user=User::find($id);
        return view("users-crud/update",['user'=>$user]);
    }
    public function insertAction(Request $request){
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $email=$request->input('Email');
        $password=$request->input('pwd');
        $role=$request->input('role');
        
        $user= new User();
        $user->name=$firstname;
        $user->lastname=$lastname;
        $user->email=$email;
        $user->password=bcrypt($password);
        $user->role=$role;
        $user->save();
        return redirect()->action('UserController@showallAction');
        
    }
    public function updateAction($id, Request $request){
        $user=User::where("id","=",$id)->first();
        $user->update(["name"=>$request->input('firstname'),
        "lastname"=>$request->input('lastname'),
        "email"=>$request->input('Email'),
        "password"=>bcrypt($request->input('pwd')),
        "role"=>$request->input('role')
        ]);
        return redirect()->action('UserController@showallAction');
    }
    public function deleteAction($id){
     $user=User::find($id);
     $user->delete();  
     return redirect()->action('UserController@showallAction'); 
    }
    public function showallAction(){
        $users = User::paginate(5);
        return view("users-crud/users",['users'=>$users]);
        }
    
    public function getAddUserForm(){
        return view("users-crud/adduser");
    }
}