<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index']]);
    }


    public function index(){
        return view('pages.index');
    }
    public function viewByUser(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('pages.all')->with('posts', $user->posts);
    }
}
