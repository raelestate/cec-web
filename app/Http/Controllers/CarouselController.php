<?php

namespace App\Http\Controllers;
use App\Models\Carousel;
use Illuminate\Http\Request;


class CarouselController extends Controller
{
    public function index(){
        $carousels = Carousel::all();
        return view('carousel.index', ['carousel' => $carousels]);
    }
    public function create(){
        return view('carousel.create');
    }
    public function store(Request $request)
    {
    $data = $request->validate([
        'carousel_title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(public_path('images/carousel'), $imageName);

    $carousel = new Carousel();
    $carousel->carousel_title = $request->carousel_title;
    $carousel->image = '/images/carousel/' . $imageName;
    $carousel->save();

    return redirect()->route('carousel.index')->with('success', 'Carousel created successfully.');
    }
    public function edit(Carousel $carousel){
        return view('carousel.edit',['carousel'=>$carousel]);
    }
    public function update(Carousel $carousel, Request $request){
	    $data = $request->validate([
        'carousel_title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
	
	$carousel->update($data);
	return redirect()->route('carousel.index')->with('success', 'Carousel created successfully.');

    }
    public function destroy(Carousel $carousel){
        $carousel->delete();
        return redirect()->route('carousel.index')->with('success', 'Carousel deleted successfully.');
    }

}



