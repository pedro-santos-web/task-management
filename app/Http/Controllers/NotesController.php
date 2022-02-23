<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TodoListController;
use App\Models\Notes;
use App\Models\User;

class NotesController extends Controller
{
    public function __construct() {

        $this->middleware('auth');

    }

    public function note($id) {

        $notes = Notes::findOrFail($id);
        // $notes = Notes::where('id', '=', $id)->get();
        \Log::info($notes);

        if(is_null($notes)) {

            return redirect()->to('/notes');

        } else {

            return view('notes.note')->with(compact('notes'));

        }
            
    }

    public function addNotes() {

        return view('notes.addNotes');

    }

    public function saveNote(Request $request) {

        $user = Auth::id();

        $newNote = new Notes;
        $newNote->title = $request->title;
        $newNote->note = $request->note;
        $newNote->user = $user;
        $newNote->save();

        return redirect('/notes');

    }

    public function deleteNote($id) {

        $deleteNote = Notes::findOrFail($id);
        $deleteNote->delete();

        return redirect('/notes');

    }

}
