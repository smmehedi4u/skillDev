<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Topic;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::all();
        return view('admin.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Skill::all();
        return view('admin.create', compact("courses"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'docs' => 'required',
            'question' => 'required',
            'option1' => 'required|max:255',
            'option2' => 'required|max:255',
            'answer' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        DB::transaction(function () use($request) {
            $topic = new Topic();
            $topic->title = $request->title;
            $topic->docs = $request->docs;
            $topic->skill_id = $request->skill_id;
            $topic->save();

            $q = new Question();
            $q->topic_id = $topic->id;
            $q->question = $request->question;
            $q->option1 = $request->option1;
            $q->option2 = $request->option2;
            $q->answer = $request->answer;
            $q->save();
        });

        return redirect()->route('admin.index')->with('success', 'Topic created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = Topic::find($id);
        $questions = Question::where("topic_id", $topic->id)->first();
        $skills = Skill::all();
        return view('admin.edit', compact('skills', 'questions', "topic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'docs' => 'required',
            'question' => 'required',
            'option1' => 'required|max:255',
            'option2' => 'required|max:255',
            'answer' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        DB::transaction(function () use ($request, $id) {
            $topic = Topic::find($id);
            $topic->update([
                "title" => $request->title,
                "docs" => $request->docs,
            ]);

            $question = Question::where("topic_id", $topic->id)->first();
            $question->update([
                'question' => $request->question,
                'option1' => $request->option1,
                'option2' => $request->option2,
                'answer' => $request->answer,
            ]);
        });

        return redirect()->route('admin.index')->with('success', 'Topic updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect()->route('admin.index')->with('success', 'Topic has been deleted successfully');
    }

    

}
