<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function __construct() {

        $this->middleware('auth');

    }

    public function addNews() {

        return view('news.addnews');

    }

    public function saveNews(Request $request) {

        // $user = Auth::user();
        // $userid = Auth::id();
        $username = Auth::user()->name;

        $newPost = new News;
        $newPost->title = $request->title;
        $newPost->text = $request->text;
        $newPost->day = $request->day;
        $newPost->user = $username;
        $newPost->save();

        \Log::info(json_encode($request->all()));

        return redirect('/news');

    }

    public function deleteNews($id) {

        $deletePost = News::findOrFail($id);
        $deletePost->delete();

        return redirect('/news');

    }

}
