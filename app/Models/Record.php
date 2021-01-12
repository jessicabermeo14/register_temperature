<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'initial_temperature',
        'final_temperature',
        'initial_thermometer_code',
        'final_thermometer_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    //Relación uno a muchos(Inversa)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
