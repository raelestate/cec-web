<?php

namespace App\Http\Controllers;
use App\Models\WelcomeCard;
use Illuminate\Http\Request;

class WelcomeCardController extends Controller
{
    public function index(){
        return view('welcomecard.index');
    }
    public function create(){
        return view('welcomecard.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'welcome_title'=> 'nullable',
            'welcome_text'=> 'nullable',
        ]);
        $newWelcomeCard = WelcomeCard::create($data);

	    return redirect(route('welcomecard.index'));
    } 
    public function edit(WelcomeCard $welcomecard){
        return view('welcomecard.edit',['welcomecard'=>$welcomecard]);
    }
    public function update(WelcomeCard $welcomecard, Request $request){
	    $data = $request->validate([
        'welcome_title' => 'nullable',
        'welcome_text'=> 'nullable',
    ]); 
	
	$welcomecard->update($data);
	return redirect()->route('welcomecard.index')->with('success', 'welcomecard created successfully.');

    }
    public function destroy(WelcomeCard $welcomecard){
        $welcomecard->delete();
        return redirect()->route('welcomecard.index')->with('success', 'welcomecard deleted successfully.');
    }
   
}
