<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index(){
        $directors = Director::all();
        return view('directors.index', ['directors' => $directors]);
    }

    public function create(){
        return view('directors.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'directors_name' => 'required',
            'directors_position' => 'required',
            'directors_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->directors_image->extension();

        $request->directors_image->move(public_path('images/directors'), $imageName);

        $director = new Director();
        $director->directors_name = $request->directors_name;
        $director->directors_position = $request->directors_position;
        $director->directors_image = '/images/directors/' . $imageName;
        $director->save();

        return redirect()->route('directors.index')->with('success', 'Director created successfully.');
    }

    public function edit(Director $director){
        return view('directors.edit',['director'=>$director]);
    }

    public function update(Director $director, Request $request){
        $data = $request->validate([
            'directors_name' => 'required',
            'directors_position' => 'required',
            'directors_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]); 

        $imageName = time() . '.' . $request->directors_image->extension();

        $request->directors_image->move(public_path('images/directors'), $imageName);

        $data['directors_image'] = '/images/directors/' . $imageName;

        $director->update($data);
        return redirect()->route('directors.index')->with('success', 'Director updated successfully.');
    }

    public function destroy(Director $director){
        $director->delete();
        return redirect()->route('directors.index')->with('success', 'Director deleted successfully.');
    }
}

