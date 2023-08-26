<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    use HasFactory;
    protected $fillable =[
        'libele',
    ];
public function users(){
    return $this->belongsTo(User::class);
}
}
