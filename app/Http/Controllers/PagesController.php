<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use App\Models\Clients;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TodoListController;

class PagesController extends Controller
{ 

    public function welcome() {

        return view('welcome');

    }

    public function tasks() {

        return view('tasks', ['listItems' => ListItem::where('is_complete', 0)->orderBy('client', 'ASC')->get()]);
    
    }

    public function clients() {

        return view('clients', ['clients' => Clients::all()]);

    }

    public function profile() {
        
        return view('profile', ['users' => User::all()]);

    }

}