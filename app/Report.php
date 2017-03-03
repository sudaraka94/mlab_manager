<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //fields
    protected $table='report';
    protected $fillable=['id','name','age','gender','type','date','specimen'];
    
    //methods
    public function retrievable(){
        return $this->morphTo();
    }

    public function getMyType(){
        return $this->belongsTo('App\Type', 'type', 'type_id');
    }

    public function getType(){
//        var_dump($this->getMyType()->first());
        return $this->getMyType()->first()->type;
    }

    public function getObject(){
        if($this->type=='1'|$this->type=='2'|$this->type=='3'){
            return Bsst::where('report_id',$this->id)->first();
        }
    }
}
