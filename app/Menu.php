<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable = [
        'id_user','nama_menu','deksripsi_menu','harga','stock','tipe'
    ];
    protected $hidden = [
        'id','id_user','is_habis'
    ];

    public static function getName($id)
    {
        if($id == null){
            return null;
        }
        return Menu::find($id)->nama_menu;
    }

    public static function getDeksripsi($id)
    {
        return Menu::find($id)->deskripsi_menu;
    }

    public static function getHarga($id)
    {
        return Menu::find($id)->harga_menu;
    }

    public static function getStock($id)
    {
        return Menu::find($id)->stock_menu;
    }

    public static function getUser($id)
    {
        return Menu::find($id)->id_user;
    }

    public static function Makanans()
    {
        return Menu::where('tipe_menu','makanan')->orderBy('id','desc')->paginate(6);
    }

    public static function Minumans()
    {
        return Menu::where('tipe_menu','minuman')->orderBy('id','desc')->paginate(6);
    }

    public static function updateStock($id,$minus)
    {
        $menu = Menu::find($id);
        $menu->stock_menu = $menu->stock_menu - $minus;
        if($menu->update()){
            return true;
        }return false;
    }

    public static function makeHabis($id)
    {
        $menu = Menu::find($id);
        $menu->is_habis = true;
        if($menu->update()) {
            return true;
        }return false;
    }   

    public static function makanansWhereID($id_user)
    {
        return Menu::where([
            ['tipe_menu','=','makanan'],
            ['id_user','=',$id_user]]
        );
    }

    public static function minumansWhereID($id_user)
    {
        return Menu::where([
            ['tipe_menu','=','minuman'],
            ['id_user','=',$id_user]]
        );
    }

}
