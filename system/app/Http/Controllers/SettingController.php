<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
  function index()
  {

    if (Auth::guard('penjual')->check()) {
      $data['user'] = Auth::guard('penjual')->user();
    } else {
      $data['user'] = Auth::guard('pembeli')->user();
    }

    return view('setting.index', $data);
  }

  function store()
  {
    if (request('current')) {
      if (Auth::guard('penjual')->check()) {
        $user = Auth::guard('penjual')->user();
      } else {
        $user = Auth::guard('pembeli')->user();
      }

      $check = Hash::check(request('current'), $user->password);
      if ($check) {
        if (request('new') == request('confirm')) {
          $user->password = request('new');
          $user->save();

          return back()->with('success', 'Password berhasil diubah');
        } else {
          return back()->with('danger', 'Ulangi password baru anda dengan benar');
        }
      } else {
        return back()->with('danger', 'Password lama anda salah, ulangi password dengan benar');
      }
    } else {
      return back()->with('danger', 'Password lama harus diisi terlebih dahulu');
    }
  }
}
