<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $table = "documents";
    use HasFactory;

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
