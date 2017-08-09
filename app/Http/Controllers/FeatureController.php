<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Task;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(){
        $features = Feature::withCount("tasks")->get();
        return view("features.list", ["features" => $features]);
    }

    public function showTasks(Request $request, $id){
        $feature = Feature::where("id", $id)->first();

        $tasks = Task::where("feature_id", $id)->get();

        return view("features.tasks", ["feature" => $feature, "tasks" => $tasks]);
    }

}
