<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PenggajianModel ;
use App\TunjanganPegawaiModel ;
use App\PegawaiModel;
use App\TunjanganModel;
use App\JabatanModel ;
use App\GolonganModel;
use App\KategoriLemburModel ;
use App\LemburPegawaiModel ;
use Input ;
use Validator ;
use auth ;

class ShowPenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('Pegawai');
    }

    public function index()
    {
        $tunpeg = TunjanganPegawaiModel::paginate(10);
        $tunjangan = TunjanganModel::paginate(10);
        $showpenggajian=PenggajianModel::paginate(3);
        return view('Showpenggajian.index',compact('showpenggajian', 'tunjangan', 'tunpeg'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
