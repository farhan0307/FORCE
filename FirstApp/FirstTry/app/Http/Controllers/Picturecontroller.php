<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;

class Picturecontroller extends Controller
{
    public function index(){
        return view('pictures.index');
    }
    public function create(){
        return view('welcome');
    }
    // public function store(Request $request){
    //     dd($request->all());
    // }
    public function store(UserStoreRequest $request){
        $validated = $request->validated();
    }
}
