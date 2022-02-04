<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function show($name=null)
   { 
    return view('users.show', [
     'username' => $name
   ]);
   }  

   public function list()
   { $users = [
     'Komil',
     'Jamshid',
     'Bekzod',
     'Olim',
     'Jasur'
   ];

   $plans = ['free', 'premium', 'gold'];
     return view('users.list', compact('users','plans'));
   }
}
