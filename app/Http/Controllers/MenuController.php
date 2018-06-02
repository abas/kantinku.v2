<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth,Validator;

use App\Menu;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function simpan(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'nama_menu'         => 'required|min:3',
            'deskripsi_menu'    => 'required|min:10',
            'harga_menu'        => 'required|min:500',
            'stock_menu'        => 'required|min:1',
            'tipe_menu'         => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        /**
         * storing data request
         */
        $menu = new Menu;
        $menu->id_user        = Auth::User()->id;
        $menu->nama_menu      = $r->nama_menu;
        $menu->deskripsi_menu = $r->deskripsi_menu;
        $menu->harga_menu     = $r->harga_menu;
        $menu->stock_menu     = $r->stock_menu;
        $menu->tipe_menu      = $r->tipe_menu;
        if($menu->save()){
            return $menu;
        }return null;
    }

    public function update(Request $r, $id)
    {
        $menu = Menu::find($id);
        
        $menu->nama_menu        = $r->nama_menu;
        $menu->deskripsi_menu   = $r->deskripsi_menu;
        $menu->harga_menu       = $r->harga_menu;
        $menu->stock_menu       = $r->stock_menu;
        $menu->tipe_menu        = $r->tipe_menu;

        if($menu->update()){
            return $menu;
        }return null;
    }

    /**
     * delete the menu
     * 
     */
    public function delete($id)
    {
        Menu::find($id)->delete;
    }
}
