<?php

namespace App\Http\Controllers;
//prihodila som sem classu user aby sme nemuseli vkuse vypisovat celu cestu
namespace App\Http\Controllers;
use \App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show ($id){
        /*Ak user neexistuje hod 404 */
      $user=User::findOrFail($id);
      return $user->posts;
    }
}