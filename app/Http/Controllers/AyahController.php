<?php

namespace App\Http\Controllers;

use App\Models\Ayah;
use Illuminate\Http\Request;

class AyahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('page.ayah');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ayah::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataAyah = Ayah::find($id);
        
        $dataAyah->update($request->all());

        return redirect()->route('admin.menukeluarga.detail-datakeluarga', ['id' => $dataAyah->id, '#tab_dataAyah']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
