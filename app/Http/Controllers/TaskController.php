<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showCreateForm(){
        return view("tasks.create");
    }

    public function create(Request $request){
        $name = $request->input("name");
        $description = $request->input("description");

        $task = new Task();
        $task->name = $name;
        $task->description = $description;
        $task->save();
        $message = "Task was created";
        return view("tasks.create", ["message" => $message]);
    }


    public function listAll(){
        $tasks = Task::paginate(20);//Phan trang

        return view("tasks.list", ["tasks" => $tasks]);
    }

    public function showEditForm(Request $request, $id){
        $task = Task::where("id", $id)->first();
        if($task){
            return view("tasks.edit", ["task" => $task]);
        } else {
            return view("errors.404.blade.php");
        }
    }

    public function edit(Request $request, $id){
        $task = Task::where("id", $id)->first();
        if($task){
            $task->name = $request->input("name");
            $task->description = $request->input("description");
            $task->save();
            return view("tasks.edit", ["task" => $task, "message" => "Task was updated"]);
        } else {
            return view("errors.404.blade.php");
        }
    }


}
