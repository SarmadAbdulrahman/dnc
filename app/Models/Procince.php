<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procince extends Model
{
    use HasFactory;
    
     protected $fillable=[
         'gov_id',
        'name'
    ];
}
