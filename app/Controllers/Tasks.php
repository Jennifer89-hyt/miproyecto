<?php

namespace App\Controllers;

class Tasks extends BaseController
{
	public function index()
	{
        $model = new \App\Models\TaskModel;
        $data = $model->findAll();
		
		return view("Tasks/index", ['tasks' => $data]);
	}
	
	public function show($id)
    {
        $model = new \App\Models\TaskModel;
		
        $task = $model->find($id);
		
		return view('Tasks/show', [
            'task' => $task
        ]);
	}
    public function new()   
    {
        $task= new Task;
        {
        return view('Task/new', [
            'task'=>['description'=>'']
        ]);  
    }
        public function create()
    {
        $model= new \App\Models\TaskModel;
        $task=new Task;

        $result=$model->insert([
            $this->request->getPost("description")
       ]);
        if ($result === false){
            return redirect()->back()
                             ->with('errors',$model->errors())
                             ->with('warning','Invalid data')
                             ->withInput();

            

        }else {    
           return redirect()->to ("/task/show/$result")
                            ->with('info', 'Task created successfully');
           

          }
       
    }
    public  function edit($id)
    {
        $model = new \App\Models\TaskModel;
		
        $task = $model->find($id);
		
		return view('Tasks/edit', [
            'task' => $task
        ]);
    }
    public function update($id)
    {
        $model = new \App\Models\TaskModel;
		$model->update($id,[
            'description'=> $this->request->getPost('description')

        ]); 
        if ('$result'){

        
            return redirect()->to("/task/show/$id")
                             ->with('info','Task update successfully');
        

        }else{
            return redirect()->back()
                             ->with('errors',$model->erros())
                             ->with('warning','Invalid data')
                             ->withInput();

        }
    }
}