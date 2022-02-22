<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsController;

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

Route::name('default')->get('/', [PagesController::class, 'welcome']);
Route::name('tasks')->get('/tasks', [PagesController::class, 'tasks'])->middleware('auth');
Route::name('addTask')->get('/addtask', [TodoListController::class, 'newtask']);
Route::name('addTaskClient')->post('/addtask/{id}', [TodoListController::class, 'newTaskclient']);
Route::name('saveItem')->post('/saveItem', [TodoListController::class, 'addItem']);
Route::name('deleteItem')->post('/deleteItem/{id}', [TodoListController::class, 'deleteItem']);

Route::name('clients')->get('/clients', [PagesController::class, 'clients'])->middleware('auth');
Route::name('addClient')->get('/addclient', [TodoListController::class, 'newClient']);
Route::name('saveClient')->post('/saveClient', [TodoListController::class, 'addClient']);
Route::name('deleteClient')->post('/deleteClient/{id}', [TodoListController::class, 'deleteClient']);
Route::name('clientTasks')->get('/clientTasks/{id}', [TodoListController::class, 'clientTasks']);

Route::name('profile')->get('/profile', [PagesController::class, 'profile'])->middleware('auth');

Route::name('news')->get('/news', [PagesController::class, 'news']);
Route::name('addNews')->get('/addNews', [NewsController::class, 'addNews']);
Route::name('saveNews')->post('/saveNews', [NewsController::class, 'saveNews']);
Route::name('deleteNews')->post('/deleteNews/{id}', [NewsController::class, 'deleteNews']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');