<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    public $timestamps = false;

    public function passenger(){
        return $this->belongsTo('App\Models\Passenger');
    }
    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
    public function flight(){
        return $this->belongsTo('App\Models\Flight');
    }
}
