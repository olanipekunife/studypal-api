<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateMatricRequest;
use Illuminate\Http\Request;
use App\Matric;
use App\Http\Requests;

class matricController extends Controller
{
    public function index()
    {
        $matrics = Matric::all();
        return $matrics;
    }
    public function find ($password)
    {
        $matri = Matric::where('password','=',$password)->get();
        if ($matri->isEmpty()) {
           abort(404);
        }else{
            return $matri;
        }


        //        if(!$article){
//            abort(404);
//        }
//        if(is_null($article)){
//            abort(404);
//        }
    }
    public function store(CreateMatricRequest $request)
    {
//        $matric = new Matric();
//        $matric->matric = input::get('matric');
//        $matric->matric = $request->input('matric');
//        $matric->faculty = $request->input('matric');
//        $matric->department = $request->input('matric');
//        $matric->level = $request->input('level');
//        $matric->password = $request->input('password');
        Matric::create($request->all());
//        $matric->save();

    }
    //
}
