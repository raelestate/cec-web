<?php

namespace App\Http\Controllers;

use App\Models\FactSheet;
use Illuminate\Http\Request;

class FactSheetController extends Controller
{
    public function index(){
        return view('factsheet.index');
    }
    public function create(){
        return view('factsheet.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'fact_sheet_title'=> 'nullable',
            'fact_sheet_text'=> 'nullable',
        ]);
        $new_fact_sheets = FactSheet::create($data);

	    return redirect(route('factsheet.index'));
    } 
    public function edit(FactSheet $fact_sheets){
        return view('factsheet.edit',['fact_sheets'=>$fact_sheets]);
    }
    public function update(FactSheet $fact_sheets, Request $request){
	    $data = $request->validate([
        'fact_sheet_title' => 'nullable',
        'fact_sheet_text'=> 'nullable',
    ]); 
	
	$fact_sheets->update($data);
	return redirect()->route('factsheet.index')->with('success', 'factsheet created successfully.');

    }
    public function destroy(FactSheet $fact_sheets){
        $fact_sheets->delete();
        return redirect()->route('factsheet.index')->with('success', 'factsheet deleted successfully.');
    }
}
