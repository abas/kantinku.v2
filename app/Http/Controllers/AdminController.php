<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth,App\User,App\Pesanan,App\Menu,App\Rekening;

class AdminController extends Controller
{
    /**
     * index of dashboard
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $pesanans = Pesanan::where([
            ['id_user','=',Auth::user()->id],
            ['is_selesai','=',false]
        ])->paginate(4);
        
        $menu = new Menu;
        $rekening = new Rekening;
        return view('admin.dashboard',compact(
            'user','pesanans','menu','rekening'
        ));
        return [
            $user,
            $pesanans,
        ];
    }


    /**
     * pprofile
     */
    public function pprofile()
    {
        return null;
    }

    /**
     * view tambah menu
     */
    public function tambahMenu()
    {
        return view('admin.tambah-menu');
    }

}
