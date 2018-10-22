<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
   public function ProjectView(){

   	    return view('welcome',[
   	    	'projects' => Project::all()
   	    ]);
   
   }

   public function PostProject(Request $request){

   		$this->validate($request, [
   			'name' => 'required',
   			'description' => 'required'
   		]);

   		Project::Create([
   			'name' => $request->name,
   			'desc' => $request->description,
   		]);

   		return ['message' => 'project create success'];

   }
}
