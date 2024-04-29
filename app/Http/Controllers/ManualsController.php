<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manuals;

class ManualsController extends Controller
{
    public function index(){
        return view('manuals.index');
    }
    public function create(){
        return view('manuals.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'manuals_title'=> 'nullable',
            'manuals_pdf'=> 'nullable|mimes:pdf',
        ]);
        // Save the PDF file to the /pdf/manuals directory
        $pdfPath = $request->file('manuals_pdf')->store('pdf/manuals', 'public');

        // Store the path to the PDF file in the database
        $data['manuals_pdf'] = $pdfPath;

        $new_manual = Manuals::create($data);

        return redirect(route('manuals.index'));
    }
    public function edit(Manuals $manuals){
        return view('manuals.edit',['manuals'=>$manuals]);
    }
    public function update(Manuals $manuals, Request $request){
        $data = $request->validate([
            'manuals_title' => 'nullable',
            'manuals_pdf'=> 'nullable|mimes:pdf',
        ]); 

        $manuals->update($data);
        return redirect()->route('manuals.index')->with('success', 'Manual updated successfully.');

    }
    public function destroy(Manuals $manuals){
        $manuals->delete();
        return redirect()->route('manuals.index')->with('success', 'Manual deleted successfully.');
    }
}
