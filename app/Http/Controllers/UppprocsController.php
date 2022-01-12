<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crupp;

class UppprocsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crupp = Crupp::all();
        return view('uppprocs.index', compact('crupp', $crupp))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crupp  $crupp
     * @return \Illuminate\Http\Response
     */
    public function edit(Crupp $crupp)
    {
        return view('uppprocs.index', compact('creatupp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crupp  $crupp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crupp $crupp)
    {
        $request->validate([
            'no_upp' => 'required',
            'tanggal_upp' => 'required',
            'pengaju'=> 'required',
            'kode_prosedur'=> 'required',
            'nama_dokumen'=> 'required',
            'tanggal_permohonan_berlaku'=> 'required'
            ]);

            $crupp->update($request->all());

            return redirect()->route('creatupp.index')
                            ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crupp  $crupp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crupp $crupp)
    {
        $crupp->delete();

        return redirect()->route('uppprocs.index')
                        ->with('success', 'berhasil hapus!');
    }
}
