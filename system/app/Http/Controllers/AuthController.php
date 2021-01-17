<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\user;
use App\Models\penjual;
use App\Models\pembeli;
use Auth;

class AuthController extends Controller
{

	function showLogin()
	{
		return view('login');
	}

	function loginProcess()
	{
		// 	if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
		// 		return redirect('beranda')->with('success', 'Login Berhasil');
		// 	} else {
		// 		return back()->with('danger', 'Login gagal. Silahkan cek email dan password anda!');
		// 	}
		// }

		$email = request('email');
		$user = Penjual::where('email', $email)->first();
		if ($user) {
			$guard = 'penjual';
		} else {
			$user = Pembeli::where('email', $email)->first();
			if ($user) {
				$guard = 'pembeli';
			} else {
				$guard = false;
			}
		}

		if (!$guard) {
			return back()->with('danger', 'Login Gagal, Email Tidak Ditemukan di Database');
		} else {
			if (Auth::guard($guard)->attempt(['email' =>  request('email'), 'password' => request('password')])) {
				return redirect('beranda/$guard')->with('success', 'Login Berhasil');
			} else {
				return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password');
			}
		}
	}

	// digunakan apabila ada option as penjual&pembeli
	// 	if(request('login_as') == 1){
	// 		if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
	// 			return redirect('beranda/penjual')->with('success', 'Login Berhasil');
	// 		}else{
	// 			return back()->with('danger', 'Login gagal. Silahkan cek email dan password anda!');
	// 		}
	// 	}else{
	// 		if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password') ])){
	// 			return redirect('beranda/pembeli')->with('success', 'Login Berhasil');
	// 		}else{
	// 			return back()->with('danger', 'Login gagal. Silahkan cek email dan password anda!');
	// 		}
	// 	}
	// }

	function logout()
	{
		Auth::logout();
		Auth::guard('penjual')->logout();
		Auth::guard('pembeli')->logout();
		return redirect('template');
	}

	function showRegister()
	{
		return view('register');
	}

	function storeRegister(UserStoreRequest $request)
	{
		$user = new user;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();
		return redirect('beranda')->with('success', 'Register Berhasil, silahkan login');
	}

	function forgotPassword()
	{
	}
}
