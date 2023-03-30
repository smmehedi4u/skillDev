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
        return view('admin.create',compact("courses"));
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
            // 'question' => 'required',
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
        // $topic->question = $request->question;
        $topic->save();

        $q = new Question();

        $q->topic_id = $topic->id;
        $q->question = $request->question;
        $q->answer = $request->answer;
        $q->save();
        });


        return redirect()->route('admin.index')->with('success','Topic created successfully!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        // return view('notice.show',compact('notices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic =Topic::find($id);
        $questions = Question::where("topic_id",$topic->id)->first();
        // dd($topic->toArray());
        $skills = Skill::all();
        return view('admin.edit',compact('skills','questions',"topic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'docs' => 'required',
            'question' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $topic = Topic::find($id)->update(["title"=>$request->title,"docs"=>$request->docs,"question"=>$request->question,"answer"=>$request->answer]);

        // $topic->title = $request->title;
        // $topic->docs = $request->docs;
        // $topic->question = $request->question;
        // $topic->save()

        return redirect()->route('admin.index')->with('success','Topics updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic,$id)
    {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect()->route('admin.index')->with('success','Topic has been deleted successfully');
    }
}
