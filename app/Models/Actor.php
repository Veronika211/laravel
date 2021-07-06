<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

   
    //ovde oznacavamo ono sto korisnik moze da menja
    protected $fillable=['first_name','last_name'];
    
}
