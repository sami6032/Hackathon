<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = [
        'photos',
        'titre',
        'description',
        'lieu',
        'date',
        'user_id',
    ];
    public function users(){
        return $this->belongsTo(User::class);
    }
}
