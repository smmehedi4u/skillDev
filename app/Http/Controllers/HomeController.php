<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //$topics = Topic::all();
        return view('admin.home',compact("topics"));
    }

    public function first()
    {
        return redirect(route("user.dashboard"));
    }
}
