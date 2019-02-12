<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Todos;

class TodosController extends Controller
{
    public function displayOne($id)
    {
        $todo = Todos::find($id);
        return view('todo', compact('todo'));
    }
}
