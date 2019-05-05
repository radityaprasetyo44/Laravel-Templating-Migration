<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';

    protected $primaryKey = 'no';

    public $incrementing = false;

    protected $fillable = [
        'no', 'judul', 'slug', 'tgl', 'user_id', 'kategori_id', 'konten'
    ];

    protected $hidden = [
        'no', 'judul', 'slug', 'tgl', 'user_id','kategori_id', 'konten'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori','kategori_id','id');
    }
}
