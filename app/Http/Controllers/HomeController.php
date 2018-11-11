<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $threads = Thread::all();

      return view('pages/home', ['threads' => $threads]);
    }
}
