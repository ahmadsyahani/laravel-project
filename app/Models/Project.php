<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected  $guarded=[];

    public function Siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
