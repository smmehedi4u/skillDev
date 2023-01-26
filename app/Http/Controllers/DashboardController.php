<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
        public function index(){
            if (auth()->user()->user_role == 0) {
                return Redirect('/user');
        } elseif (auth()->user()->user_role == 1) {
                return Redirect('/admin'); 
        }
    }
}
