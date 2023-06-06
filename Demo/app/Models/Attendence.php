<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model

{

    protected $table = 'attendences';
    protected $fillable = [
        'user_id',
        'time_in',
        'time_out',
        'duration'
    ];


    public function User()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
