<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $table = 'passengers';
    public $timestamps = false;

    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
    public function ticket(){
        return $this->hasOne('App\Models\Ticket');
    }
}
