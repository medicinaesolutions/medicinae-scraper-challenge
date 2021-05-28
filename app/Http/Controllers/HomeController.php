<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $modelUser = auth()->user();
        if ($modelUser->email == 'rick@gmail.com') {
            return view('file', ['teste' => 'teste']);
        }

        return view('grid', ['lotes' => DB::table('lotes')->paginate(15)]);

    }
}
