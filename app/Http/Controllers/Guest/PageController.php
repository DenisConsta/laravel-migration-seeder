<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $data = Train::all();
        return view('home', compact('data'));
    }

    public function trainDetail($id){
        $train = Train::find($id);
        if(is_null($train)) abort(404, 'cannot find this movie :( ');
        return view('train-detail', compact('train'));
    }
}
