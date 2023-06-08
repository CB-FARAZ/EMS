<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Attendence extends Model

{

    protected $table = 'attendences';
    protected $fillable = [
        'user_id',
        'time_in',
        'time_out',
        'duration',
        'total_present'
    ];

    protected $dates = [

        'time_in',
        'time_out'


    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



}
