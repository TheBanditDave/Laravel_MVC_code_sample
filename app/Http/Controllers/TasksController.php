<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    // Display main app page
    public function index()
    {
        $tasks = Task::all();
        $incompleteTasks = Task::incomplete()->get();
        $completeTasks = Task::complete()->get();
        
        return view('tasks.index', compact('tasks', 'incompleteTasks', 'completeTasks'));
    }
    
    // Create new Task
    public function addTask(Request $request)
    {
        $validator = \Validator::make($request->all(), [
        'body' => 'required|max:255',
        ]);
    
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
    
        $task = new Task;
        $task->body = $request->body;
        $task->save();
    
        return redirect('/');
    }
    
    // Set Task as completed
    public function completeTask(request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->completed = 1;
        $task->save();
    
        return redirect('/');
    }
    
    // Delete Task
    public function removeTask($id)
    {
        Task::findOrFail($id)->delete();
    
        return redirect('/');
    }
}
