<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialprofile extends Model
{
    use HasFactory;
    protected $table='social_profile';
    protected $primaryKey='social_profile_id'; 

}
