<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->category_id = $request->category_id;

        $todo->save();

        return redirect()->route('todos')->with('success', 'Todo saved');
    }

    public function index()
    {
        $todos = Todo::all();
        $categories = Category::all();

        return view('todos.index', ['todos' => $todos, 'categories' => $categories]);
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        $categories = Category::all();
        $category_selected = Category::find($todo->category_id);

        return view(
            'todos.show',
            [
                'todo' => $todo,
                'categories' => $categories,
                'category_selected' => $category_selected,
            ]);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);

        $request->validate([
            'title' => 'required|min:3',
        ]);

        $todo->title = $request->title;
        $todo->category_id = $request->category_id;
        $todo->save();

        return redirect()->route('todos')->with('success', 'Todo updated');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect()->route('todos')->with('success', 'Todo deleted');
    }
}