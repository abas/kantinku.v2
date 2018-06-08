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

    public static function getImage($id)
    {
        return Menu::find($id)->image_menu;
    }

    public static function MakanansNotHabis()
    {
        return Menu::where([
            ['tipe_menu','=','makanan'],
            ['is_habis','=',false]
        ])->orderBy('id','desc');
    }

    public static function MinumansNotHabis()
    {
        return Menu::where([
            ['tipe_menu','=','minuman'],
            ['is_habis','=',false]
        ])->orderBy('id','desc');
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
       
    public static function makeAvail($id)
    {
        $menu = Menu::find($id);
        $menu->is_habis = false;
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

    public static function menuBaruByIDUser($id_user)
    {
        return Menu::where('id_user',$id_user)->orderBy('id','desc');
    }

    public static function updateMin($id,$val)
    {
        $menu = Menu::find($id);
        if($val>$menu->stock_menu){
            return false;
        }
        $menu->stock_menu -= $val;
        if($menu->stock_menu == 0){
            Menu::makeHabis($menu->id);
        }
        if($menu->update()){
            return true;
        }return false;
    }

    public static function updatePlus($id,$val)
    {
        $menu = Menu::find($id);
        $menu->stock_menu += $val;
        if($menu->stock_menu > 0){
            $menu->is_habis = false;
        }
        if($menu->update()){
            return true;
        }return false;
    }
}
