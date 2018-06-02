<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanans';
    protected $fillable = [
        'id_user',
        'id_menu',
        'is_selesai',
        'is_batal',
        'is_notif',
        'jumlah_pesanan',
        'metode_pemesanan',
        'nama_pemesan',
        'kontak',
        'alamat'
    ];
    protected $hidden = [
        'id',
        'id_user',
        'id_menu',
    ];

    public static function getBanyakPesanan($id)
    {
        return Pesanan::find(decrypt($id))->banyak_pesanan;
    }

    public static function isSlesai($id)
    {
        return Pesanan::find(decrypt($id))->is_selesai;
    }

    public static function isBatal($id)
    {
        return Pesanan::find(decrypt($id))->is_batal;
    }

    public static function makeSelesai($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->is_selesai = true;
        if($pesanan->update()){
            return true;
        }return false;
    }

    public static function makeBatal($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->is_batal = true;
        if($pesanan->update()){
            return true;
        }return false;
    }

    public static function makeNotif()
    {
        $pesanan = Pesanan::find($id);
        $pesanan->is_notif = true;
        if($pesanan->update()){
            return true;
        }return false;
    }
}
