<?php
namespace App\Http\Controllers;

use App\Models\Manuals;
use Illuminate\Http\Request;

class ManualsController extends Controller
{
    public function index()
    {
        $manuals = Manuals::all();
        return view('manuals.index', ['manuals' => $manuals]);
    }

    public function create()
    {
        return view('manuals.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'manuals_title' => 'required',
            'manuals_pdf' => 'required|file|mimes:pdf|max:2048',
        ]);

        $pdfName = time() . '.' . $request->manuals_pdf->extension();

        $request->manuals_pdf->move(public_path('pdf/manuals'), $pdfName);

        $manual = new Manuals();
        $manual->manuals_title = $request->manuals_title;
        $manual->manuals_pdf = '/pdf/manuals/' . $pdfName;
        $manual->save();

        return redirect()->route('manuals.index')->with('success', 'Manual created successfully.');
    }

    public function edit(Manuals $manuals)
    {
        return view('manuals.edit', ['manual' => $manuals]);
    }

    public function update(Manuals $manuals, Request $request)
    {
        $data = $request->validate([
            'manuals_title' => 'required',
            'manuals_pdf' => 'required|file|mimes:pdf|max:2048',
        ]);

        $pdfName = time() . '.' . $request->manuals_pdf->extension();

        $request->manuals_pdf->move(public_path('pdf/manuals'), $pdfName);

        $data['manuals_pdf'] = '/pdf/manuals/' . $pdfName;

        $manuals->update($data);
        return redirect()->route('manuals.index')->with('success', 'Manual updated successfully.');
    }

    public function destroy(Manuals $manuals)
    {
        $manuals->delete();
        return redirect()->route('manuals.index')->with('success', 'Manual deleted successfully.');
    }
}
