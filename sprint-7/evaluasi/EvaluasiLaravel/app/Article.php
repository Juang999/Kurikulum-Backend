<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "Articles";
    
    protected $guarded = ['id'];

    public $timestamps = false;

    public function Kategori()
    {
        return $this->belongsTo('App\Kategori');
        
    }
}
