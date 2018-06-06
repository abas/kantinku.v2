<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session,Redirect,Validator;
use App\User,App\Rekening;

class RekeningController extends Controller
{
    /**
     * input data rekening
     */
    public function store(Request $r, $id_user)
    {
        return Rekening::getByIDUser($id_user);
    }

    /**
     * update rekening
     */
    public function update(Request $r,$id)
    {
        $validator = Validator::make($r->all(), [
            'atasnama'      => 'required|min:3|max:20',
            'no_rekening'   => 'required|min:10|max:255',
            'no_rekening'   => 'required',
        ]);

        if ($validator->fails()) {
            // return $validator->errors();
            return redirect()
                        ->back()
                        ->with('err',true)
                        ->withErrors($validator)
                        ->withInput();
        }

        $rekening = Rekening::find($id);
        $rekening->atasnama = $r->atasnama;
        $rekening->no_rekening = $r->no_rekening;
        
        // get jenis rekening
        if($r->jenis_rekening == 'a'){
            $jenis_rekening = 'BNI';
        }elseif($r->jenis_rekening == 'b'){
            $jenis_rekening = 'BRI';
        }elseif($r->jenis_rekening == 'c'){
            $jenis_rekening = 'MANDIRI';
        }elseif($r->jenis_rekening == 'd'){
            $jenis_rekening = 'BPD';
        }else{
            $jenis_rekening = $rekening->jenis_rekening;
        }
        $rekening->jenis_rekening = $jenis_rekening;
        
        // save
        if($rekening->update()){
            Session::flash('rek-update-sukses',true);
        }else{
            Session::flash('rek-update-gagal',true);
        }
        return redirect()->back();
    }
}
