<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Avionic extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'avionics';
    // protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
   protected $fillable = ['quantity','part_no','aircraft_id'];
    // protected $hidden = [];
    // protected $dates = [];

    public function aircraft(){
      return $this->belongsTo('App\Models\Aircraft');
    }

    public function getAircraft(){
      // dd($this);
      return $this->aircraft->msn;
    }
}
