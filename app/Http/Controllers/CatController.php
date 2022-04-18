<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Carbon\Carbon;
use SebastianBergmann\Environment\Console;

class CatController extends Controller
{
    public function index()
    {
        $cats = Cat::all();
        //dd($cats);
        return view('cats/index', [
            'cats' => $cats
        ]);
    }

    public function show($id)
    {
        //echo $id ;
        $cat = Cat::findOrFail($id);
        $mutable = Carbon::now();
        //dd($cat);
        return view('cats/show', [
            'cat' => $cat,
            'mutable' => $mutable
        ]);
    }

    public function create()
    {
        return view('/cats/create');
    }

    public function store(Request $request)
    {
        // dd($request->name, $request->img, $request->desc, $request->all());
        $request->validate([
            'name' => 'required|string|max:50',
            'img' => 'required|string',
            'desc' => 'required|string',
        ]);

        Cat::create([
            'name' => $request->name,
            'img' => $request->img,
            'desc' => $request->desc,
        ]);
        return redirect(url('/cats/create'));
    }

    public function edit($id)
    {
        //echo $id ;
        $cat = Cat::findOrFail($id);
        return view('cats/edit', [
            'cat' => $cat
        ]);
    }

    public function update($id, Request $request)
    {
        Cat::findOrFail($id)->update([
            'name' => $request->name,
            'img' => $request->img,
            'desc' => $request->desc,
        ]);
        return redirect(url('/cats/create'));
    }

    public function delete($id)
    {
        $cat = Cat::findOrFail($id)->delete();
        return redirect(url('/cats/create'));
    }

    public function tableShow()
    {
        $cats = Cat::all();
        return view('/cats/create', [
            'cats' => $cats
        ]);
    }

    
}
