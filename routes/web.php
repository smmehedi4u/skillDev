<?php

use App\Models\Skill;
use App\Models\Topic;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\SkillController;

use App\Http\Controllers\TopicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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
    $courses = Skill::latest()->paginate(6);
    return view('home.index', compact("courses"));
})->name("final");

Route::view('details', 'home.detail');
Route::view('about', 'home.about');
Route::view('feature', 'home.feature');
Route::view('team', 'home.team');
Route::view('testimonial', 'home.testimonial');
Route::view('contact', 'home.contact');

Route::post("/inbox/create", [InboxController::class, "store"])->name("inbox.store");

Route::get('/course', function (Request $request) {
    $courses = Skill::when($request->q, function ($query) use ($request) {
        return $query->where("name", "like", "%" . $request->q . "%");
    })->paginate(12);
    $q = $request->q;
    //dd($books);
    return view('home.course', compact("courses", "q"));
})->name('course');


Route::get('/detail/{id}', function (Request $request, $id) {
    $topics = Topic::where("skill_id", $id)->get();


    $page = $request->topic_id ?? Topic::where("skill_id", $id)->first()->id;

    $data = Topic::with(["question", "skill"])->find($page);


    // dd($data->question()->get());
    return view('home.pages', compact("topics", "data"));
})->name('detail');

Route::post('/detail/{id}', function (Request $request, $id) {

    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'You must be logged in to submit an answer.');
    }

    $q_id = $request->q_id;
    $selected_option = $request->answer; // Selected option, either 1 or 2
    // dd($selected_option);
    $question = Question::find($q_id);

    if ($question->answer == $selected_option) {
        return Redirect::back()->with("success", "Answer is correct!");
    }
    return Redirect::back()->with("error", "Wrong answer.</b>");
})->name('detail.post');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::name("admin.")->prefix("admin")->middleware(['auth', 'is_admin'])->group(function () {

    Route::get('/', [TopicController::class, 'index'])->name('index');
    Route::get('/create', [TopicController::class, 'create'])->name('create');
    Route::post('/create', [TopicController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [TopicController::class, 'edit'])->name('edit');
    Route::post('/edit/{id}', [TopicController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [TopicController::class, 'destroy'])->name('destroy');

    Route::resource('inbox', InboxController::class)->except(['store']);

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
