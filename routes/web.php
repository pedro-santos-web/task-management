<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NotesController;

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

// Tasks
Route::name('default')->get('/', [PagesController::class, 'welcome']);
Route::name('tasks')->get('/tasks', [PagesController::class, 'tasks'])->middleware('auth');
Route::name('addTask')->get('/addtask', [TodoListController::class, 'newtask']);
Route::name('addTaskClient')->post('/addtask/{id}', [TodoListController::class, 'newTaskclient']);
Route::name('saveItem')->post('/saveItem', [TodoListController::class, 'addItem']);
Route::name('deleteItem')->post('/deleteItem/{id}', [TodoListController::class, 'deleteItem']);

// Clients
Route::name('clients')->get('/clients', [PagesController::class, 'clients'])->middleware('auth');
Route::name('addClient')->get('/addclient', [TodoListController::class, 'newClient']);
Route::name('saveClient')->post('/saveClient', [TodoListController::class, 'addClient']);
Route::name('deleteClient')->post('/deleteClient/{id}', [TodoListController::class, 'deleteClient']);
Route::name('clientTasks')->get('/clientTasks/{id}', [TodoListController::class, 'clientTasks']);

// Profile
Route::name('profile')->get('/profile', [PagesController::class, 'profile'])->middleware('auth');

// News
Route::name('news')->get('/news', [PagesController::class, 'news']);
Route::name('addNews')->get('/addNews', [NewsController::class, 'addNews']);
Route::name('saveNews')->post('/saveNews', [NewsController::class, 'saveNews']);
Route::name('deleteNews')->post('/deleteNews/{id}', [NewsController::class, 'deleteNews']);

// Notes
Route::name('notes')->get('/notes', [PagesController::class, 'notes'])->middleware('auth');
Route::name('note')->get('/notes/{id}', [NotesController::class, 'note']);
Route::name('addNotes')->get('/addNote', [NotesController::class, 'addNotes']);
Route::name('saveNote')->post('/saveNote', [NotesController::class, 'saveNote']);
Route::name('deleteNote')->post('/deleteNote/{id}', [NotesController::class, 'deleteNote']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');