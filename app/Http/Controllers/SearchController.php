<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Session,Redirect;
use App\Menu;

class SearchController extends Controller
{
    public function search(Request $r)
    {
        $keyword = strtolower($r->keyword);
        // return Menu::all();
        $menu = Menu::where('is_habis',false)->
            when($keyword,function($query) use ($keyword){
            $query->where('nama_menu','like',"%{$keyword}%")
            ->orWhere('deskripsi_menu','like',"%{$keyword}%")
            ->orWhere('image_menu','like',"%{$keyword}%")
            ->orWhere('harga_menu','like',"%{$keyword}%");
        })->paginate(6);

        // dd($menu);
        
        if($menu != null){
            Session::flash('menu',$menu);
        }
        // dd($makanan);
        return view('search-result',compact('menu'));
    }
}
