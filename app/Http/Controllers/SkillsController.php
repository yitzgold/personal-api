<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Http\Resources\Skill as SkillResource;

class SkillsController extends Controller
{
    public function all(){
        return SkillResource::collection(Skill::all());
    }
}
