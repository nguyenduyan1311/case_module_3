<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    public $timestamps = false;

    public function passengers(){
        return $this->hasMany('App\Models\Passenger');
    }
    public function tickets(){
        return $this->hasMany('App\Models\Ticket');
    }
    function checkPassenger($passenger_id){
        foreach ($this->passengers() as $passenger){
            if ($passenger_id == $passenger->passenger_id){
                return true;
            }
        }
        return false;
    }
}
