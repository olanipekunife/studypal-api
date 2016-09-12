<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Http\Requests;


class datasController extends Controller
{
    //
    public function index()
    {
        $datas = Data::all();;
        return $datas;
    }

    /**
     * @param $level
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @internal param $id
     */
    public function show($level,$department)
    {
        $data = Data::where('level','=',$level)->where('department','=',$department)->get();
        return $data;
    }
    public function carry($carry,$department)
    {
        $spills = Data::where('level','<',$carry)->where('department','=',$department)->get();
            return $spills;

    }
    public function find ($level,$department,$title)
    {
        $dat = Data::where('level','=',$level)->where('department','=',$department)->where('title','=',$title)->get();
        return $dat;
    }

    public function fcarry($carry,$department,$title)
    {
        $spill = Data::where('level','=',$carry)->where('department','=',$department)->where('title','=',$title)->get();
        return $spill;
    }



}
