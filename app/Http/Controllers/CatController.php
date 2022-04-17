<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

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
        $cat = Cat::findOrFail($id) ;
        //dd($cat);
        return view('cats/show', [
            'cat' => $cat 
        ]);
    }

    public function create()
    {
        return view('/cats/create');
    }

    public function store(Request $request)
    {
        // dd($request->name, $request->img, $request->desc, $request->all());
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
            'name'=>$request->name,
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
