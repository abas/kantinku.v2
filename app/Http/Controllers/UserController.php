<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User,App\Rekening,App\Pesanan,App\Menu;
use Auth,Validator;

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
        // return $transaksi_selesai;
        return view('admin.profile',compact(
            'user','makanans','minumans','pesanans','transaksi_selesai'
        ));
    }    

    /**
     * update user
     */
    public function update(Request $r)
    {
        $user = User::find(Auth::user()->id);
        $validator = Validator::make($r->all(), [
            'name'  => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->with('err',true)
                        ->withErrors($validator)
                        ->withInput();
            // return $validator->errors();
        }

        $user->name = $r->name;
        if($user->update()){
            return $user;
        }return ['msg'=>'failed'];
    }
}
