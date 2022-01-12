<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crupp;
use App\Models\Kategori;
use App\Models\Ktprosedur;
use App\Models\Kodepro;
use Carbon\Carbon;
class CruppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creatupp = Crupp::latest()->paginate(5);

        return view('creatupp.index',compact('creatupp'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departemen = Kategori::all();
        $kategori_prosedur = Ktprosedur::all();
        $kode_prosedur = Kodepro::all();
        $nama_prosedur  = Kodepro::all();
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $today = new Carbon();
        $creatupp = Crupp::all();
        return view('creatupp.create', compact('creatupp',$creatupp,'departemen', $departemen,'kategori_prosedur', $kategori_prosedur,'kode_prosedur', $kode_prosedur,'nama_prosedur',$nama_prosedur,'today',$today));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Crupp $creatupp)
    {
        $request->validate([
        'no_upp' => 'required',
        'tanggal_upp' => 'required',
        'departemen'=> 'required',
        'manager_approval'=> 'required',
        'email_manager_approval1'=> 'required',
        'pengaju'=> 'required',
        'email_pengaju'=> 'required',
        'kategori_prosedur'=> 'required',
        'kode_prosedur'=> 'required',
        'nama_dokumen'=> 'required',
        'sebelum_perubahan'=> 'required',
        'setelah_perubahan'=> 'required',
        'alasan'=> 'required',
        'attachment_file'=> 'required',
        'tanggal_permohonan_berlaku'=> 'required',
        ]);

        $creatupp::create($request->all());

        return redirect()->route('creatupp.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Crupp $creatupp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crupp  $creatupp
     * @return \Illuminate\Http\Response
     */
    public function edit(Crupp $creatupp)
    {
        $departemen = Kategori::all();
        $kategori_prosedur = Ktprosedur::all();
        $kode_prosedur = Kodepro::all();
        $nama_prosedur  = Kodepro::all();
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $today = new Carbon();
        $creatupp = Crupp::all();
        return view('creatupp.edit', compact('creatupp',$creatupp,'departemen', $departemen,'kategori_prosedur', $kategori_prosedur,'kode_prosedur', $kode_prosedur,'nama_prosedur',$nama_prosedur,'today',$today));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crupp  $creatupp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crupp $creatupp)
    {
        $request->validate([
            'no_upp' => 'required',
            'tanggal_upp' => 'required',
            'departemen'=> 'required',
            'manager_approval'=> 'required',
            'email_manager_approval1'=> 'required',
            'pengaju'=> 'required',
            'email_pengaju'=> 'required',
            'kategori_prosedur'=> 'required',
            'kode_prosedur'=> 'required',
            'nama_dokumen'=> 'required',
            'sebelum_perubahan'=> 'required',
            'setelah_perubahan'=> 'required',
            'alasan'=> 'required',
            'attachment_file'=> 'required',
            'tanggal_permohonan_berlaku'=> 'required',
            ]);

            $creatupp->update($request->all());

            return redirect()->route('creatupp.index',)
                            ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crupp $creatupp)
    {
        $creatupp->delete();

        return redirect()->route('creatupp.index')
                        ->with('success', 'berhasil hapus!');
    }
}
