<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\ListItem;
use App\Models\Clients;
use App\Models\News;
use App\Models\Notes;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TodoListController;


class PagesController extends Controller
{ 

    public function welcome() {

        return view('welcome');

    }

    public function tasks() {

        return view('tasks.tasks', ['listItems' => ListItem::where('is_complete', 0)->orderBy('client', 'ASC')->get()]);
    
    }

    public function clients() {

        return view('clients.clients', ['clients' => Clients::all()]);

    }

    public function profile() {
        
        return view('profile', ['users' => User::all()]);

    }

    public function news() {
        
        return view('news.news', ['news' => News::paginate(2)]);

    }

    public function notes() {
        
        $user = Auth::id();
        \Log::info($user);
        $notes = Notes::where('user', '=', $user)->orderBy('created_at', 'DESC')->get();

        \Log::info(json_encode($notes->all()));

        return view('notes.notes')->with(compact('notes'));

    }

}