<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();

        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        request()->validate([
            'title'=>'required',
            'body'=>'required'
        ]);

        $task = Task::create(request(['title', 'body'])); //이름이 같으면 매칭된다.
        
        // $tast = Task::create([
        //     'title' => request->input('title'),
        //     'body' => request->input('body')
        // ]);

        return redirect('/tasks/'.$tast->id);
    }

    public function show(Task $task)
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function update(Task $task)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $task->update(request(['title', 'body']));

        // $task->update([
        //     'title' => request('title'),
        //     'body' => request('body')
        // ]);
        return redirect('/tasks/'.$task->id);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
}
