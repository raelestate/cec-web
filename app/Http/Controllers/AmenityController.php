<?php
namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    public function index()
    {
        $amenities = Amenity::all();
        return view('amenities.index', ['amenities' => $amenities]);
    }

    public function create()
    {
        return view('amenities.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'amenities_title' => 'required',
            'amenities_description' => 'nullable',
            'amenities_type' => 'required',
            'amenities_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('amenities_image')->extension();

        $request->file('amenities_image')->move(public_path('images/amenities'), $imageName);

        $amenity = new Amenity();
        $amenity->amenities_title = $data['amenities_title'];
        $amenity->amenities_description = $data['amenities_description'];
        $amenity->amenities_type = $data['amenities_type'];
        $amenity->amenities_image = '/images/amenities/' . $imageName;
        $amenity->save();

        return redirect()->route('amenities.index')->with('success', 'Amenity created successfully.');
    }

    public function edit(Amenity $amenity)
    {
        return view('amenities.edit', ['amenity' => $amenity]);
    }

    public function update(Request $request, Amenity $amenity)
    {
        $data = $request->validate([
            'amenities_title' => 'required',
            'amenities_description' => 'nullable',
            'amenities_type' => 'required',
            'amenities_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('amenities_image')) {
            $imageName = time() . '.' . $request->file('amenities_image')->extension();
            $request->file('amenities_image')->move(public_path('images/amenities'), $imageName);
            $data['image'] = '/images/amenities/' . $imageName;
        }

        $amenity->update($data);
        return redirect()->route('amenities.index')->with('success', 'Amenity updated successfully.');
    }

    public function destroy(Amenity $amenity)
    {
        $amenity->delete();
        return redirect()->route('amenities.index')->with('success', 'Amenity deleted successfully.');
    }
}

