<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $guarded = ['id'];
    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
}
