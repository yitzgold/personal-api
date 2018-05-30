<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Resources\Project as ProjectResource;
use App\Http\Resources\ProjectCollection;

class ProjectsController extends Controller
{
    public function all(){
        return new ProjectCollection(Project::all());
    }

    public function oneById($id){
        return new ProjectResource(Project::find($id));
    }
}
