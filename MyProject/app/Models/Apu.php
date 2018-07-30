<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Apu extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'apus';
    // protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
   protected $fillable = ['model_number','serial_number','aircraft_id','csn','tsn'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function Aircraft()
        {
            return $this->belongsTo('App\Models\Aircraft');
        }
        public function getAircraft(){
          // dd($this);
          return $this->aircraft->msn;
        }




      /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
