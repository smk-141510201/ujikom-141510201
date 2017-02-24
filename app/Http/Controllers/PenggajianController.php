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
class PenggajianController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function __construct()
    {
        $this->middleware('Bendahara');
    }
    
    public function index()
    { 
        $tunpeg = TunjanganPegawaiModel::all();
        $tunjangan = TunjanganModel::all();
      $penggajian=PenggajianModel::all();
    return view('Penggajian.index',compact('penggajian', 'tunjangan', 'tunpeg')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tunpeg = TunjanganPegawaiModel::all();
        $tunjangan = TunjanganModel::all();
       $penggajian=PenggajianModel::all();
        return view('Penggajian.create',compact('penggajian','tunjangan','tunpeg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $penggajian=Input::all();
       $where=TunjanganPegawaiModel::where('id',$penggajian['Tunjangan_pegawai_id'])->first();
       $wherepenggajian=PenggajianModel::where('Tunjangan_pegawai_id',$where->id)->first();
       
       $wheretunjangan=PenggajianModel::where('id',$where->Kode_tunjangan_id)->first();
       
       $wherepegawai=PegawaiModel::where('id',$where->Pegawai_id)->first();
       
       $wherekategorilembur=KategoriLemburModel::where('Jabatan_id',$wherepegawai->Jabatan_id)->where('Golongan_id',$wherepegawai->Golongan_id)->first();
       $wherelemburpegawai=LemburPegawaiModel::where('Pegawai_id',$wherepegawai->id)->first();
       $wherejabatan=JabatanModel::where('id',$wherepegawai->Jabatan_id)->first();
       
       $wheregolongan=GolonganModel::where('id',$wherepegawai->Golongan_id)->first();
       
       $penggajian=new PenggajianModel;
        if (isset($wherepenggajian)) 
        {
            $error=true ;
            $tunjangan=TunjanganPegawaiModel::paginate(10);
        return view('Penggajian.create',compact('tunjangan','error'));
        }

        elseif (!isset($wherelemburpegawai)) 
        {
            $nol=0 ;
            $penggajian->Jumlah_jam_lembur=$nol;
            $penggajian->Jumlah_uang_lembur=$nol ;
            $penggajian->Gaji_pokok=$wherejabatan->Besaran_uang + $wheregolongan->Besaran_uang;
            $penggajian->Total_gaji=($wheretunjangan->Besaran_uang)+($wherejabatan->Besaran_uang + $wheregolongan->Besaran_uang);
            $penggajian->Tunjangan_pegawai_id=Input::get('Tunjangan_pegawai_id');
            $penggajian->Status_pengambilan=Input::get('Status_pengambilan');
            $penggajian->Petugas_penerima=auth::user()->name ;
            $penggajian->save();
        }

        elseif (!isset($wherelemburpegawai)||!isset($wherekategorilembur)) 
        {
            $nol=0 ;
            $penggajian->Jumlah_jam_lembur=$nol;
            $penggajian->Jumlah_uang_lembur=$nol ;
            $penggajian->Gaji_pokok=$wherejabatan->Besaran_uang+$wheregolongan->Besaran_uang;
            $penggajian->Total_gaji=($wheretunjangan->Besaran_uang)+($wherejabatan->Besaran_uang+$wheregolongan->Besaran_uang);
            $penggajian->Tunjangan_pegawai_id=Input::get('Tunjangan_pegawai_id');
            $penggajian->Status_pengambilan=Input::get('Status_pengambilan');
            $penggajian->Petugas_penerima=auth::user()->name ;
            $penggajian->save();
        }

        else 
        {
            $penggajian->Jumlah_jam_lembur=$wherelemburpegawai->Jumlah_jam;
            $penggajian->Jumlah_uang_lembur=$wherelemburpegawai->Jumlah_jam*$wherekategorilembur->Besaran_uang ;
            $penggajian->Gaji_pokok=$wherejabatan->Besaran_uang+$wheregolongan->Besaran_uang;
            $penggajian->Total_gaji=($wherelemburpegawai->Jumlah_jam*$wherekategorilembur->Besaran_uang);
            $penggajian->Tanggal_pengambilan =date('d-m-y');
            $penggajian->Tunjangan_pegawai_id=Input::get('Tunjangan_pegawai_id');
            $penggajian->Status_pengambilan=Input::get('Status_pengambilan');
            $penggajian->Petugas_penerima=auth::user()->name ;
            $penggajian->save();
        }

            return redirect('Penggajian');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data=PenggajianModel::find($id);
        return view('Penggajian.read',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gaji = PenggajianModel::find($id);
        $penggajian = new PenggajianModel ;
                       
        $penggajian=array('Status_pengambilan'=>1,'Tanggal_pengambilan'=>date('y-m-d'));
        PenggajianModel::where('id',$id)->update($penggajian);
        return redirect('Penggajian');
       
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}

   