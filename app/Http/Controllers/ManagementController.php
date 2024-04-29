<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index(){
        $managements = Management::all();
        return view('managements.index', ['managements' => $managements]);
    }

    public function create(){
        return view('managements.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'management_position' => 'required',
            'management_name' => 'required',
            'management_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->management_image->extension();

        $request->management_image->move(public_path('images/managements'), $imageName);

        $management = new Management();
        $management->management_position = $request->management_position;
        $management->management_name = $request->management_name;
        $management->management_image = '/images/managements/' . $imageName;
        $management->save();
 
        return redirect()->route('managements.index')->with('success', 'Management created successfully.');
    }

    public function edit(Management $management){
        return view('managements.edit',['management'=>$management]);
    }

    public function update(Management $management, Request $request){
        $data = $request->validate([
            'management_position' => 'required',
            'management_name' => 'required',
            'management_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]); 

        $imageName = time() . '.' . $request->management_image->extension();

        $request->management_image->move(public_path('images/managements'), $imageName);

        $data['management_image'] = '/images/managements/' . $imageName;

        $management->update($data);
        return redirect()->route('managements.index')->with('success', 'Management updated successfully.');
    }

    public function destroy(Management $management){
        $management->delete();
        return redirect()->route('managements.index')->with('success', 'Management deleted successfully.');
    }
}
