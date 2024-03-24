<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private function tasksGet(){
        $items = Task::all();

        $data = [];
        if(!empty($items)){
            foreach ($items as $item){
                $data[]= [
                    'id'=>$item['id'],
                    'name'=>$item['name'],
                    'description'=>$item['description']
                ];
            }

        }
        if(!empty($data)){
            return $data;
        }
        else{
            return "tasks list is null";
        }
    }
    public function index(){
        $tasks = $this->tasksGet();

        return view('index',[
            'tasks'=>$tasks
        ]);
    }
    public function addTask(Request $req){
        $newTask = new Task();
        $newTask->name = $req->input('name');
        $newTask->description = $req->input('description');
        $newTask->save();
        return redirect()->back()->with('success','successfully');
    }
    public function delete($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->back()->with('success',"nice");
    }
}
