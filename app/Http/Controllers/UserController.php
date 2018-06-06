<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User,App\Rekening,App\Pesanan,App\Menu;
use Auth,Validator,Session,Redirect;

class UserController extends Controller
{
    /**
     * user account profile
     */
    public function profile()
    {
        $user = User::find(Auth::user()->id);
        $makanans = Menu::makanansWhereID($user->id)->get();
        $minumans = Menu::minumansWhereID($user->id)->get();
        $pesanans = Pesanan::pesananByIdUser($user->id)->get();
        $transaksi_selesai = Pesanan::pesananIsDoneWithIDUser($user->id)->get();
        $rekening = Rekening::where('id_user',$user->id)->get()->first();
        // return $transaksi_selesai;
        return view('admin.profile',compact(
            'user','makanans','minumans','pesanans','transaksi_selesai','rekening'
        ));
    }    

    /**
     * update user
     */
    public function update(Request $r)
    {
        $user = User::find(Auth::user()->id);
        $validator = Validator::make($r->all(), [
            'name'      => 'required',
            'pprofil'   => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        if ($validator->fails()) {
            // return $validator->errors();
            return redirect()
                        ->back()
                        ->with('err',true)
                        ->withErrors($validator)
                        ->withInput();
        }

        /**
         * save request image
         */
        if($r->hasFile('pprofil')){
            $image_file = $r->file('pprofil');
            $pprofil = $image_file->getClientOriginalName();
            
            $uploaded = $image_file->move(public_path('uploads/images/user/'),$pprofil);
            if($uploaded){        
                unlink(public_path('uploads/images/user/').$user->pprofil);
                $user->pprofil = $pprofil;
                Session::flash('upload-sukses',true);
            }else{
                Session::flash('upload-gagal',true);
                return redirect(route('admin-userprofile'));
            }
        }
        
        $user->name = $r->name;
        
        if($user->update()){
            Session::flash('update-sukses');
            return redirect(route('admin-userprofile'));
        }
        Session::flash('update-denied',true);
        return redirect(route('admin-userprofile'));
    }
}
