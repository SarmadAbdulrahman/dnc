<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patinent extends Model
{
    use HasFactory;
    protected $filable=[
        'age', 'gender', 'fullName'
    ];
}
