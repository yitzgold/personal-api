<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institution;
use App\Http\Resources\Institution as InstitutionResource;
use App\Http\Resources\InstitutionCollection;

class InstitutionsController extends Controller
{
    public function all(){
        return new InstitutionCollection(Institution::all());
    }

    public function oneById($id){
        return new InstitutionResource(Institution::findOrFail($id));
    }
}
