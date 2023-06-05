<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model

{

    protected $table = 'attendences';
    protected $fillable = [
        'user_id',
        'check_in_time',
        'check_out_time',
        'total_hours'
    ];


    public function User()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
