<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable=[
         'doctor_name'
        , 'doctor_bio'
        , 'sp_id'
        , 'pr_id'
        , 'gov_id'
        , 'haveFacebook'
        , 'haveInstagram'
        , 'Facebook'
        , 'Instagram'
    ];
}
