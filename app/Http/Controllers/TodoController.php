<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();

        return view('todo', ['items' => $items]);
    }

    public function new(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
        ]);

        $todo = new Todo();
        $todo->name = $validated['name'];

        $todo->saveOrFail();

        return redirect()->action([TodoController::class, 'index']);
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'done' => ['string'],
        ]);

        $todo = Todo::find($id);

        if ($todo != null) {
            $todo->name = $validated['name'];
            $todo->done = array_key_exists('done', $validated);

            $todo->updateOrFail();

            return redirect()->action([TodoController::class, 'index']);
        }
    }
}
