<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';

    protected $fillable = [
        'id','nama'
    ];

    protected $hidden = [
        'id', 'nama'
    ];

    public function artikels()
    {
        return $this->hasMany('App\Artikel','kategori_id','id');
    }
}
