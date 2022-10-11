<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    public function player(){
        return $this->hasMany(Player::class);
    }

    public function comments(){

        return $this->hasMany(Comment::class);
    }

}
