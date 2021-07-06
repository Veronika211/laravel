<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    protected $fillable=['actor_id','movie_id','role'];

    //vraca glumca ciji je id 'actor_id'
    public function actor(){
        return $this->belongsTo(Actor::class);
    }
    public function movie(){
        return $this->belongsTo(Movie::class);
    }
}
