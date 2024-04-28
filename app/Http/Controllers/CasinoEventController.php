<?php
namespace App\Http\Controllers;

use App\Models\CasinoEvent;
use Illuminate\Http\Request;

class CasinoEventController extends Controller
{
    public function index()
    {
        $casinoevents = CasinoEvent::all();
        return view('casinoevent.index', ['casinoevent' => $casinoevents]);
    }

    public function create()
    {
        return view('casinoevent.create');
    }

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'event_title' => 'required',
            'event_video' => 'required|mimes:mp4,mov,avi,wmv|max:921600', // 900MB limit
        ]);

        $videoName = time() . '.' . $request->event_video->extension();

        $request->event_video->move(public_path('videos/casinoevent'), $videoName);

        $casinoevent = new CasinoEvent();
        $casinoevent->event_title = $request->event_title;
        $casinoevent->event_video = '/videos/casinoevent/' . $videoName;
        $casinoevent->save();

        return redirect()->route('casinoevent.index')->with('success', 'Casino event created successfully.');
    }

    public function edit(CasinoEvent $casinoevent)
    {
        return view('casinoevent.edit', ['casinoevent' => $casinoevent]);
    }

    public function update(CasinoEvent $casinoevent, Request $request)
    {
        $data = $request->validate([
            'event_title' => 'required',
            'event_video' => 'required|mimes:mp4,mov,avi,wmv|max:921600', // 900MB limit
        ]);

        $videoName = time() . '.' . $request->event_video->extension();

        $request->event_video->move(public_path('videos/casinoevent'), $videoName);

        $casinoevent->update([
            'event_title' => $request->event_title,
            'event_video' => '/videos/casinoevent/' . $videoName,
        ]);

        return redirect()->route('casinoevent.index')->with('success', 'Casino event updated successfully.');
    }

    public function destroy(CasinoEvent $casinoevent)
    {
        $casinoevent->delete();
        return redirect()->route('casinoevent.index')->with('success', 'Casino event deleted successfully.');
    }
}
