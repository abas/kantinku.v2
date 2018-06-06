<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;

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

    public static function pesananByIdUser($id_user)
    {
        return Pesanan::where('id_user',$id_user);
    }

    public static function pesananIsDoneWithIDUser($id_user)
    {
        return Pesanan::where([
            ['is_selesai','=',true],
            ['id_user','=',$id_user]
        ]);
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

    public static function getMenuName($id_menu)
    {
        return Menu::find($id_menu)->nama_menu;
    }
}
