<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model. untuk nama model sesuaikan dengan nama model kalian
use App\User;
use App\JabatanModel;
use App\GolonganModel;
use App\PegawaiModel;
use App\TunjanganModel;
use App\TunjanganPegawaiModel;
use App\KategoriLemburModel;
use App\LemburPegawaiModel;
use App\PenggajianModel;

use Auth;
use DB;
use Hash;
use JWTAuth;

class APIController extends Controller
{
    // public function register(Request $request)
    // {        
    //  $input = $request->all();
    //  $input['password'] = Hash::make($input['password']);
    //  User::create($input);
    //     return response()->json(['result'=>true]);
    // }
    

    public function login(Request $request)
    {
        // $user = User::where('id', Auth::user()->id)->get();
        $response = array("error" => FALSE);
        $input = $request->all();
        if (!$token = JWTAuth::attempt($input)) {
            $response["error"] = TRUE;
            $response["error_msg"] = "Email or password yang anda masukan salah. Silahkan Coba Lagi!";
            // return response()->json(['result' => 'wrong email or password.']);
            return ($response);
        }

        $user = JWTAuth::toUser($token);

        // Detail user & Pegawai Json
        // Bisa diakses lewat postman & Android Login
        $detail = $user::select('users.id as uid', 
                                'users.name as name', 
                                'users.email as email', 
                                'users.permission as permission', 
                                'users.created_at as created_at', 
                                'pegawais.Nip as nip',
                                'pegawais.Photo as photo', 
                                'jabatans.Nama_jabatan as jabatan', 
                                'jabatans.Besaran_uang as uangjabatan',
                                'golongans.Nama_golongan as golongan',
                                'golongans.Besaran_uang as uanggolongan',
                                DB::raw('(jabatans.Besaran_uang + golongans.Besaran_uang) as gaji'))
                    ->join('pegawais', 'pegawais.user_id', '=', 'users.id')
                    ->join('jabatans', 'pegawais.jabatan_id', '=', 'jabatans.id')
                    ->join('golongans', 'pegawais.golongan_id', '=', 'golongans.id')
                    // ->join('tunjangan_pegawais' , 'tunjangan_pegawais.kode_tunjangan_id', '=', 'tunjangans.id')
                    // ->join('tunjangans', 'tunjangans.id', '=', 'tunjangan_pegawais.kode_tunjangan_id')
                    ->where('users.id', $user->id)
                    ->firstorFail();

        // Get Photo
        $img = asset("profile/".$detail->Photo);

        // JSON Output
        $response["error"] = FALSE;
        $response["uid"] = $detail["uid"];
        $response["user"]["photo"] = $img;
        $response["user"]["name"] = $detail["name"];
        $response["user"]["email"] = $detail["email"];
        $response["user"]["permission"] = $detail["permission"];
        $response["user"]["Nip"] = $detail["nip"];
        $response["user"]["created_at"] = $detail["created_at"];
        $response["user"]["detail"]["jabatan"] = $detail["jabatan"];
        $response["user"]["detail"]["golongan"] = $detail["golongan"];
        $response["user"]["keuangan"]["uang jabatan"] = $detail["uangjabatan"];
        $response["user"]["keuangan"]["uang golongan"] = $detail["uanggolongan"];
        $response["user"]["keuangan"]["gaji pokok"] = $detail["gaji"];


        // echo json_encode($response);
        // return response()->json(['result' =>  $response]);
        return ($response);
    }
    
    // public function get_user_details(Request $request)
    // {
    //  $input = $request->all();
    //  $user = JWTAuth::toUser($input['token']);
    //     return response()->json(['result' => $user]);
    // }
}
