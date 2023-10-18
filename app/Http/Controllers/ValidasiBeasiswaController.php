<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Beasiswa;
use Illuminate\Http\Request;

class ValidasiBeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()){
            return datatables()->of(Anak::select('*'))
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $id = $row->id_anaks; // Ambil ID dari baris data
                $beasiswaAct = '<a href="javascript:void(0)" onClick="validFunc(' . $id . ')" data-original-title="View" class="aktivasi btn btn-success btn-sm">Aktivasi</a>';
                return $beasiswaAct; })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('validasiBeasiswa.validasibeasiswa');
    }

    public function validation(Request $request, $id)
    {
        $validasi = Anak::find($id);

        return view('validasiBeasiswa.validasi', compact('id', 'validasi'));
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
        $validasi = $request->validate([
            'status_binaan' => 'required|in:PB,BCPB,NPB',
        ]);

        if($request->has('id')) {
            $id = $request->input('id');
            $status_binaan = Beasiswa::findOrFail($id);
            $status_binaan->update($validasi);
            return redirect()->route('admin.validasi',['id' => $id])->with('success', 'Data berhasil diperbarui');
        // } else {
        //     tabeldata::create($validasi);
            
        //     return redirect()->route('admin.validasi, $id')->with('success', 'Data berhasil diperbarui');
        }

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}