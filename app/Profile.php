<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar', 'user_id', 'about', 'facebook', 'youtube'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
