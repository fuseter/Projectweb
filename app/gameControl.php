<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gameControl extends Model
{
    protected $fillable=['tid',
                        'Team_name',
                        'Tournament_Name',
                        'Tournament_Details',
                        'Tournament_Date',
                        'Game_name',
                        'Game_rules',
                        'Game_format'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
