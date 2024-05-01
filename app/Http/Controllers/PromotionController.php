<?php
namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        return view('promotions.index', ['promotions' => $promotions]);
    }

    public function create()
    {
        return view('promotions.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'promotions_title' => 'required',
            'promotions_description' => 'nullable',
            'promotions_type' => 'required',
            'promotions_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('promotions_image')->extension();

        $request->file('promotions_image')->move(public_path('images/promotions'), $imageName);

        $promotion = new Promotion();
        $promotion->promotions_title = $data['promotions_title'];
        $promotion->promotions_description = $data['promotions_description'];
        $promotion->promotions_type = $data['promotions_type'];
        $promotion->promotions_image = '/images/promotions/' . $imageName;
        $promotion->save();

        return redirect()->route('promotions.index')->with('success', 'promotion created successfully.');
    }

    public function edit(Promotion $promotion)
    {
        return view('promotions.edit', ['promotion' => $promotion]);
    }

    public function update(Request $request, Promotion $promotion)
    {
        $data = $request->validate([
            'promotions_title' => 'required',
            'promotions_description' => 'nullable',
            'promotions_type' => 'required',
            'promotions_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('promotions_image')) {
            $imageName = time() . '.' . $request->file('promotions_image')->extension();
            $request->file('promotions_image')->move(public_path('images/promotions'), $imageName);
            $data['image'] = '/images/promotions/' . $imageName;
        }

        $promotion->update($data);
        return redirect()->route('promotions.index')->with('success', 'promotion updated successfully.');
    }

    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('promotions.index')->with('success', 'promotion deleted successfully.');
    }
}

