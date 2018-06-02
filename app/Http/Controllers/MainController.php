<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

use App\Menu,App\User,App\Pesanan,App\Rekening;

class MainController extends Controller
{
    /**
     * path_url('/')
     * return value data menus
     */
    public function index()
    {
        $makanans = Menu::Makanans();
        $minumans = Menu::Minumans();
        return view('index',compact(
            'makanans','minumans'
        ));
    }

    /**
     * path /exp/makanans
     * return value data makanans
     */
    public function makanans()
    {
        $makanans = Menu::Makanans();
        return view('makanans',compact('makanans'));
    }

    /**
     * path /exp/minumanas
     */
    public function minumans()
    {
        $minumans = Menu::Minumans();
        return view('minumans',compact('minumans'));
    }

    /**
     * path /{id}/detail/
     * return value detail menu
     */
    public function detail($id_menu)
    {
        $menu = Menu::find($id_menu);
        $penjual = User::find($menu->id_user)->id;
        // $data = [
        //     "penjual"   => $penjual,
        //     "menu"      => $menu
        // ];
        return view('detail',compact('menu','penjual'));
    }

}
