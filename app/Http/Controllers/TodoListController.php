<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use App\Models\Clients;
use App\Http\Controllers\Controller;

class TodoListController extends Controller
{
    public function __construct() {

        $this->middleware('auth');

    }

    public function newTask() {

        $clientsid = null;
        $clientsname = null;

        return view('tasks.addtasks', ['clients' => Clients::orderBy('created_at', 'ASC')->get()])->with(compact('clientsname','clientsid'));
    
    }

    public function addItem(Request $request) {

        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->client = $request->client;
        $newListItem->due_date = $request->due_date;
        $newListItem->urgency = $request->urgency;
        $newListItem->is_complete = 0;
        $newListItem->save();

        \Log::info(json_encode($request->all()));
        
        return redirect('/tasks');

    }

    public function newTaskClient($id) {

        $clientsid = Clients::findOrFail($id);
        $clientsname = $clientsid->name;

        return view('tasks.addtasks', ['clientsid' => Clients::orderBy('created_at', 'ASC')->get()])->with(compact('clientsname'));

    }

    public function deleteItem($id) {

        \Log::info($id);
        $listItem = ListItem::findOrFail($id);
        \Log::info($listItem);
        $listItem->is_complete = 1;
        $listItem->save();

        return redirect('/tasks');

    }

    public function newClient() {

        return view('clients.addclients');

    }

    public function addClient(Request $request) {
        
        $newClient = new Clients;
        $newClient->name = $request->client;
        $newClient->email = $request->email;
        $newClient->phone = $request->phone;
        $newClient->address = $request->address;
        $newClient->save();

        \Log::info(json_encode($request->all()));

        return redirect('/clients');

    }

    public function deleteClient($id) {

        \Log::info($id);
        $client = Clients::findOrFail($id);
        \Log::info($client);
        $client->delete();

        return redirect('/clients');
        
    }

    public function clientTasks($id) {
        
        $clients = Clients::findOrFail($id);
        $clientid = $clients->id;
        \Log::info($id);
        $client = $clients->name;
        
        return view('clients.clienttasks',
            ['clients' => Clients::where('id', $clients)->get()],
            ['listItems' => ListItem::where('is_complete', 0)->where('client', $client)->orderBy('client', 'ASC')->get()]
        )->with(compact('client','clientid'));

    }
}
