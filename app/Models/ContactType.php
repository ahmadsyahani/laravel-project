<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactType extends Model
{
    use HasFactory;

    protected  $guarded=[];

    public function Contact(){
        return $this->belongsTo(Contact::class);
    }
}
