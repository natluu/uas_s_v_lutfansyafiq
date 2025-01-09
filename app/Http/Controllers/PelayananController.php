<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Pelayanan;
 
class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelayanan = Pelayanan::orderBy('created_at', 'DESC')->get();
  
        return view('pelayanan.index', compact('pelayanan'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelayanan.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelayanan::create($request->all());
 
        return redirect()->route('pelayanans')->with('success', 'Pelayanan added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelayanan = Pelayanan::findOrFail($id);
  
        return view('pelayanan.show', compact('pelayanan'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelayanan = Pelayanan::findOrFail($id);
  
        return view('pelayanan.edit', compact('pelayanan'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelayanan = Pelayanan::findOrFail($id);
  
        $pelayanan->update($request->all());
  
        return redirect()->route('pelayanans')->with('success', 'pelayanan updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelayanan = Pelayanan::findOrFail($id);
  
        $pelayanan->delete();
  
        return redirect()->route('pelayanans')->with('success', 'pelayanan deleted successfully');
    }
}