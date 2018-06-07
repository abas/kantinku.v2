<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Auth,Validator,Session,Redirect;

use App\Menu,App\Pesanan;

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
        $menus = Menu::where('id_user',Auth::user()->id)->orderBy('created_at','desc')->paginate(4);
        return view('admin.list-menu',compact('menus'));
    }

    /**
     * view update menu
     * get value menu by id_menu and auth::user
     */
    public function edit($id_menu)
    {
        $menu = Menu::find($id_menu);
        if($menu->id_user == Auth::user()->id){
            // return ["obj"=>$menu];
            return view('admin.update-menu',compact('menu'));
        }
        return ["msg"=>"user have no access"];
    }

    public function simpan(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'nama_menu'         => 'required|min:3',
            'deskripsi_menu'    => 'required|min:10',
            'harga_menu'        => 'required',
            'stock_menu'        => 'required|min:1',
            'tipe_menu'         => 'required',
            'image_menu'        => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            if($r->tipe_menu == 'makanan'){
                Session::flash('makanan',true);
            }elseif($r->tipe_menu == 'minuman'){
                Session::flash('minuman',true);
            }
            return redirect()->back()
                            ->with('err',true)
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
        
        /**
         * save request image
         */
        if($r->hasFile('image_menu')){
            $image_file = $r->file('image_menu');
            $image_menu = $image_file->getClientOriginalName();
            
            $uploaded = $image_file->move(public_path('uploads/images/menu/'),$image_menu);
            if($uploaded){        
                $menu->image_menu = $image_menu;
            }else{
                return redirect()->back()->with('msg','failed to upload image');
            }
        }

        if($menu->save()){
            // return $menu;
            // return redirect(route('admin-listmenu'))->with('msg','menu berhasil di tambahkan');
            // return redirect()->back(['msg','sukses']);
            if($menu->tipe_menu == 'makanan'){
                Session::flash('sukses-makanan', "berhasil menambahkan menu makanan");
            }else{
                Session::flash('sukses-minuman', "berhasil menambahkan menu minuman");
            }
            return Redirect::back();
        }
        // return null;
        // return redirect()->back()->with('msg','gagal menambahkan menu');
        if($menu->tipe_menu == 'makanan'){
            Session::flash('gagal-makanan', "gagal menambahkan menu makanan");
        }else{
            Session::flash('gagal-minuman', "gagal menambahkan menu minuman");
        }
        return Redirect::back();
    }

    /**
     * update menu by : id menu auth::user->id
     */
    public function update(Request $r, $id)
    {
        $menu = Menu::find($id);

        $validator = Validator::make($r->all(), [
            'nama_menu'         => 'required|min:3',
            'deskripsi_menu'    => 'required',
            'harga_menu'        => 'required',
            'stock_menu'        => 'required|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            // return $validator;
        }
        
        $menu->nama_menu        = $r->nama_menu;
        $menu->deskripsi_menu   = $r->deskripsi_menu;
        $menu->harga_menu       = $r->harga_menu;
        $menu->stock_menu       = $r->stock_menu;

        if($menu->update()){
            Session::flash('update-sukses',true);
        }else{
            Session::flash('update-gagal',true);
        }
        return redirect(route('admin-listmenu'));
    }

    /**
     * delete the menu
     * 
     */
    public function delete($id)
    {
        $menu = Menu::find($id);
        $pesanans = Pesanan::where('id_menu',$menu->id)->get();
        $id_pesanan = [];
        foreach($pesanans as $pesanan){
            $pesanan->delete();
        }
        // Pesanan::destroy($pesanans->toArray());
        // return 0;

        if($menu->id_user == Auth::user()->id){
            if($menu->delete()){
                Session::flash('delete-sukses',true);
            }
            Session::flash('delete-failed',true);
        }else{
            Session::flash('delete-denied',true);
        }

        return Redirect::back();
    }


    /**
     * testing
     */

    public function getUploadImage()
    {
        return view('test-uploadimage');
    }

    public function postUploadImage(Request $r)
    {
        $this->validate($r, [
            'image_menu' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        
        /**
         * save request image
         */
        if($r->hasFile('image_menu')){
            $image_file = $r->file('image_menu');
            $image_menu = $image_file->getClientOriginalName();
            
            $uploaded = $image_file->move(public_path('uploads/images/menu/'),$image_menu);
            if($uploaded){
                return [
                    'msg'=>'upload successfull'
                ];
            }
            return [
                'msg'=>'failed upload!'
            ];
        }
    }
}
