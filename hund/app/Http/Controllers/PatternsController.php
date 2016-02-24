<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pattern;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PatternsController extends Controller
{
    public function index()
    {
        $patterns = Pattern::all();
        return view ('patterns/index', compact('patterns'));
    }

    public function show(Pattern $pattern)
    {
        return view('patterns.show', compact('pattern'));
    }

    public function store(Request $request)
    {
        $input = $request->except('image', 'file');
        $pattern = Pattern::create($input);
        return back();
    }
}
