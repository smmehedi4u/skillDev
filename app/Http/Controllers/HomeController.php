<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Topic;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
