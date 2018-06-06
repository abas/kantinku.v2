<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    protected $table = 'rekenings';
    protected $fillable = [
        'id_user',
        'atasnama',
        'no_rekening',
        'jenis_rekening'
    ];
    protected $hidden = [
        'id_user','id'
    ];

    public static function getByIDUser($id_user)
    {
        return Rekening::where('id_user',$id_user);
    }

}
