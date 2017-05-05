<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AuthController extends Controller
{
   use AuthenticatesUsers;

   protected $redirectTo = '/admin/modules';

   /**
    * Set the guard to the backend guard.
    *
    * @return void
    */
   protected function guard() {
       return Auth::guard('backend');
   }

    public function showLoginForm() {
        return view('admin.login');
    }
}
