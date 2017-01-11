<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dvorana;

class DvoranaController extends Controller
{
    public function index()
	{
		$dvorane = Dvorana::orderBy('oznDvorana', 'desc')->get();
		return view('dvorana', ['dvorane'=>$dvorane]);
	}
}
