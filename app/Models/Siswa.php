<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected  $guarded=[];

    public function Project(){
        return $this->hasMany(Project::class);
    }
    public function Contact(){
        return $this->hasMany(Contact::class);
    }
}
