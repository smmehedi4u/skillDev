<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Topic;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class QuestionController extends Controller
{
    public function course(Request $request)
    {
        $courses = Skill::when($request->q, function ($query) use ($request) {
            return $query->where("name", "like", "%" . $request->q . "%");
        })->paginate(12);

        $q = $request->q;
        return view('home.course', compact("courses", "q"));
    }

    public function detail(Request $request, $id)
    {
        $topics = Topic::where("skill_id", $id)->get();
        $page = $request->topic_id ?? Topic::where("skill_id", $id)->first()->id;
        $data = Topic::with(["question", "skill"])->find($page);

        return view('home.pages', compact("topics", "data"));
    }

    public function submitAnswer(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to submit an answer.');
        }

        $q_id = $request->q_id;
        $selected_option = $request->answer; // Selected option, either 1 or 2
        $question = Question::find($q_id);

        if ($question && $question->answer == $selected_option) {
            return Redirect::back()->with("success", "Answer is correct!");
        }
        return Redirect::back()->with("error", "Wrong answer.</b>");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
