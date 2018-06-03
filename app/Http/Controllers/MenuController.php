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

    /**
     * view list menu
     * get value by Auth::user()->id
     */
    public function listMenu()
    {
        // return Auth::user()->id;
        $menus = Menu::where('id_user',Auth::user()->id)->get();
        return view('admin.list-menu',compact('menus'));
    }

    public function simpan(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'nama_menu'         => 'required|min:3',
            'deskripsi_menu'    => 'required|min:10',
            'harga_menu'        => 'required',
            'stock_menu'        => 'required|min:1',
            'tipe_menu'         => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            // return $validator;
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
        $menu->image_menu     = $r->image_menu;
        if($menu->save()){
            // return $menu;
            // return redirect(route('admin-listmenu'))->with('msg','menu berhasil di tambahkan');
            return redirect()->back()->with('msg','menu berhasil di tambahkan');
        }
        // return null;
        return redirect()->back()->with('msg','gagal menambahkan menu');
    }

    /**
     * update menu by : id menu auth::user->id
     */
    public function update(Request $r, $id)
    {
        $menu = Menu::find($id);
        
        $menu->nama_menu        = $r->nama_menu;
        $menu->deskripsi_menu   = $r->deskripsi_menu;
        $menu->harga_menu       = $r->harga_menu;
        $menu->stock_menu       = $r->stock_menu;
        $menu->tipe_menu        = $r->tipe_menu;

        if($menu->update()){
            return [
                'msg'=>'update berhasil'
            ];
            // return redirect()->back()->with('msg','update berhasil');
        }
        return [
            'msg'=>'update gagal'
        ];
    }

    /**
     * delete the menu
     * 
     */
    public function delete($id)
    {
        $menu = Menu::find($id);
        if($menu->id_user == Auth::user()->id){
            if($menu->delete()){
                return [
                    'msg'=>'berhasil menghapus menu'
                ];
            }return [
                'msg'=>'gagal menghapus menu'
            ];
        }return [
            'msg'=>'anda tidak punya akses untuk proses ini'
        ];
    }
}
