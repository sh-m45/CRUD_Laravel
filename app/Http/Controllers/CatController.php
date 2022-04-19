<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Environment\Console;
use Symfony\Component\HttpKernel\HttpCache\Store;

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
        // $mutable = Carbon::now();
        //dd($cat);
        return view('cats/show', [
            'cat' => $cat,
            // 'mutable' => $mutable
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
            'img' => 'required|image|max:1024|mimes:jpg,jpeg,png',
            'desc' => 'required|string',
        ]);

        // dd($request->all());
        $imgPath = Storage::putFile("cats",$request->img);
        Cat::create([
            'name' => $request->name,
            // 'img' => $request->img,
            'img' => $imgPath ,
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
        $request->validate([
            'name' => 'required|string|max:50',
            'img' => 'nullable|image|max:1024|mimes:jpg,jpeg,png',
            'desc' => 'required|string',
        ]);

        $cat = Cat::findOrFail($id); // display all data to certain id 

        $imgPath = $cat->img; // catch img to id 

        if($request->hasFile('img')) // hna b2wlo lw galk fe el foem de img 
        {
            Storage::delete('$imgPath'); // a3ml delete ll adema 
            $imgPath = Storage::putFile("cats", $request->img); // w a3ml update bl gdeda fe el variable 
        }

        $cat->update([
            'name' => $request->name,
            'img' => $imgPath,
            'desc' => $request->desc,
        ]);
        return redirect(url('/cats/create'));
    }

    public function delete($id)
    {
        $cat = Cat::findOrFail($id);
        Storage::delete($cat->img);
        $cat->delete();
        return redirect(url('/cats/create'));
    }

    public function tableShow()
    {
        $cats = Cat::paginate(3);
        //$cats = Cat::all();
        return view('/cats/create', [
            'cats' => $cats
        ]);
    }

    
}
