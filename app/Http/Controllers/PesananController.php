<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth,Validator,Session;

use App\Menu,App\Pesanan,App\User,App\Rekening;

class PesananController extends Controller
{
    /**
     * CREATE PESANAN
     * path url /menu/pesan{id_menu}
     * return value model@Pesanan
     */
    public function pesan(Request $request,$id_menu)
    {
        $menu = Menu::find($id_menu);
        if($request->jumlah_pesanan>$menu->stock_menu){
            Session::flash('stock-limit',true);
            return redirect()->back();
        }
        $antar = $request->metode_pemesanan;
        $validator = Validator::make($request->all(), [
            'metode_pemesanan'  => 'required',
            'jumlah_pesanan'    => 'required|min:1|max:'.$menu->stock_menu,
            'nama_pemesan'      => 'required|min:3|max:255',
            'kontak'            => 'required|min:5|max:255',
            'alamat'            => $antar == 'Antar' ? 'required|min:5|max:255' : '',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->with('err',true)
                        ->withErrors($validator)
                        ->withInput();
            // return $validator->errors();
        }

        $pesanan = new Pesanan;

        $pesanan->id_user = $menu->id_user;
        $pesanan->id_menu = $menu->id;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->metode_pemesanan = $request->metode_pemesanan;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->kontak = $request->kontak;

        if($request->metode_pemesanan == 'Antar'){
            $pesanan->alamat = $request->alamat;
        }else{
            $pesanan->alamat = null;
        }

        if($pesanan->save()){
            return redirect(
                route('pesanan',$pesanan)
            );
            // return [
            //     "msg" => "success",
            //     "res" => $pesanan
            // ];
        }
        return [
            "msg" => "failed",
            "res" => null
        ];
    }

    public function pesanan(Request $request,$pesanans)
    {
        $pesanan = Pesanan::find($pesanans);
        if($pesanan->metode_pemesanan == 'antar'){
            $rekening = Rekening::where('id_user',$pesanan->id_user)->get()->first();
            $pesanan->IDrekening = $rekening->id;
            $pesanan->atasnama = $rekening->atasnama;
            $pesanan->no_rekening = $rekening->no_rekening;
            $pesanan->jenis_rekening = $rekening->jenis_rekening;
        }

        $menu = Menu::find($pesanan->id_menu);
        return view('pesanan',compact('pesanan','menu'));
        return $pesanan;
        
    }

    public function makeSelesai($id_pesanan)
    {
        if(Pesanan::makeSelesai($id_pesanan)){
            Session::flash('pesanan-makedone-sukses');

        }else{
            Session::flash('pesanan-makedone-gagal');
        }
        return redirect()->back();
    }
}
