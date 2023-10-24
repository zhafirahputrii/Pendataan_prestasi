<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('admin.prestasi', compact(['prestasi']) , [
            "title" => 'Manajemen Prestasi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function admin_add_prestasi()
    {
        return view('admin.create');
    }
    public function admin_create_prestasi(Request $request)
    {
       
        $input=$request->all();
        Prestasi::create($input);
        return redirect('prestasi')->with('flash_message', 'Data Ditambah');
    }
 
    public function show($id)
    {
        $prestasi = Prestasi::find($id);
        return view('admin.show');
    }
    public function edit(string $id)
    {
        $prestasi = Prestasi::find($id);
  
        return view('admin.edit', compact('prestasi'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prestasi = Prestasi::find($id);
  
        $prestasi->update($request->all());
  
        return redirect()->route('prestasi')->with('success', 'data di update');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prestasi = Prestasi::find($id);
  
        $prestasi->delete();
  
        return redirect()->route('prestasi')->with('success', 'data dihapus');
    }
}
