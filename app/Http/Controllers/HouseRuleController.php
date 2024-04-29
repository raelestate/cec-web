<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HouseRule;

class HouseRuleController extends Controller
{
    public function index(){
        return view('houserules.index');
    }
    public function create(){
        return view('houserules.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'houserules_title'=> 'nullable',
            'houserules_text'=> 'nullable',
        ]);
        $new_houserules = HouseRule::create($data);

	    return redirect(route('houserules.index'));
    } 
    public function edit(HouseRule $houserules){
        return view('houserules.edit',['houserules'=>$houserules]);
    }
    public function update(HouseRule $houserules, Request $request){
	    $data = $request->validate([
        'houserules_title' => 'nullable',
        'house_rules_text'=> 'nullable',
    ]); 
	
	$houserules->update($data);
	return redirect()->route('houserules.index')->with('success', 'houserules created successfully.');

    }
    public function destroy(HouseRule $houserules){
        $houserules->delete();
        return redirect()->route('houserules.index')->with('success', 'houserules deleted successfully.');
    }
}
