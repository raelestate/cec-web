<?php

namespace App\Http\Controllers;
use App\Models\Featured;
use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    public function index(){
        $features = Featured::all();
        return view('featured.index', ['featured' => $features]);
    }
    public function create(){
        return view('featured.create');
    }
    public function store(Request $request)
    {
    $data = $request->validate([
        'featured_title' => 'required',
        'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imageName = time() . '.' . $request->featured_image->extension();

    $request->featured_image->move(public_path('images/featured'), $imageName);

    $featured = new Featured();
    $featured->featured_title = $request->featured_title;
    $featured->featured_image = '/images/featured/' . $imageName;
    $featured->save();

    return redirect()->route('featured.index')->with('success', 'featured created successfully.');
    }
    public function edit(Featured $featured){
        return view('featured.edit',['featured'=>$featured]);
    }
    public function update(Featured $featured, Request $request){
	    $data = $request->validate([
        'featured_title' => 'required',
        'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]); 
	
	$featured->update($data);
	return redirect()->route('featured.index')->with('success', 'featured created successfully.');

    }
    public function destroy(Featured $featured){
        $featured->delete();
        return redirect()->route('featured.index')->with('success', 'featured deleted successfully.');
    }
}
