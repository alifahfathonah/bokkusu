<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = "kerjasama";
    use HasFactory;

    public function documents()
    {
        return $this->hasMany(Documents::class,"kerjasama_id");
       // return $this->hasMany(Documents::class,"foreign_key");
    }
}
