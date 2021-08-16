<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;


    // Relationship tables
    public function users(){
        return $this->belongsTo(User::class);
    }
}
