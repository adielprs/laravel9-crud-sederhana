<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class RplController extends Controller
{
    // tampilan table login
    public function index()
    {
    	// mengambil data dari table pegawai
    	$Login = DB::table('Login')->get();
 
    	// mengirim data pegawai ke view index
    	return view('tablelog',['Login' => $Login]);
 
    }

    // tampilan table regis
    public function dexin()
    {
    	// mengambil data dari table pegawai
    	$register = DB::table('register')->get();
 
    	// mengirim data pegawai ke view index
    	return view('tablereg',['register' => $register]);
 
    }

    // tampilan view login
    public function login()
    {
        return view('login');
    }

    // insert data ke table login
    public function store(Request $request)
    {
	
	    DB::table('login')->insert([
		    'username' => $request->username,
		    'nama' => $request->nama,
		    'password' => $request->password
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/tablelog');
 
    }

    // tampilan view regis
    public function regis()
    {
        return view('regis');
    }

    // insert data ke table regis
    public function reggin(Request $request)
    {
	
	    DB::table('register')->insert([
		    'nama' => $request->nama,
		    'alamat' => $request->alamat,
		    'no_hp' => $request->no_hp
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/tablereg');
 
    }
}