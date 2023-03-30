<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SkillController;
use App\Models\Question;
use Illuminate\Support\Facades\Route;
use App\Models\Skill;
use App\Models\Topic;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $courses = Skill::latest()->paginate(4);
    return view('home.index',compact("courses"));
})->name("final");

Route::view('details', 'home.detail');
Route::view('about', 'home.about');
Route::view('feature', 'home.feature');
Route::view('team', 'home.team');
Route::view('testimonial', 'home.testimonial');

Route::get('/course', function () {
    $courses = Skill::paginate(6);
    //dd($books);
    return view('home.course',compact("courses"));
})->name('course');


Route::get('/detail/{id}', function (Request $request,$id) {
    $topics = Topic::where("skill_id",$id)->get();

    $page = $request->topic_id??Topic::where("skill_id",$id)->first()->id;

    $data = Topic::with(["question","skill"])->find($page);


    // dd($data->question()->get());
    return view('home.pages',compact("topics","data"));
})->name('detail');

Route::post('/detail/{id}', function (Request $request,$id) {
    $q_id = $request->q_id;
    // $answer = $request->answer;
    $ans = Str::lower($request->answer);

    $q = Question::find($q_id);

    if($q->answer == $ans){
        return redirect()->back()->with("success","Answer succesfully submited");
    }
    return redirect()->back()->with("error","Wrong answer. Correct Answer is <b>".$q->answer."</b>");
})->name('detail.post');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::name("admin.")->prefix("admin")->middleware(['auth', 'is_admin'])->group(function () {

        Route::get('/', [TopicController::class, 'index'])->name('index');
        Route::get('/create', [TopicController::class, 'create'])->name('create');
        Route::post('/create', [TopicController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TopicController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [TopicController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [TopicController::class, 'destroy'])->name('destroy');

        Route::name("course.")->prefix("course")->group(function () {
            Route::get('/', [SkillController::class, 'index'])->name('index');
            Route::get('/create', [SkillController::class, 'create'])->name('create');
            Route::post('/create', [SkillController::class, 'store'])->name('store');
            Route::delete('/delete/{id}', [SkillController::class, 'destroy'])->name('destroy');
            Route::get('/edit/{id}', [SkillController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [SkillController::class, 'update'])->name('update');
        });


});

Route::name("user.")->prefix("user")->middleware(['auth', 'is_user'])->group(function () {

    Route::get('/', [HomeController::class, 'first'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


});
