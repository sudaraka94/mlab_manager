<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTime;

class Report extends Model
{
    //fields
    protected $table='report';
    protected $fillable=['id','name','age_years','age_months','age_days','gender','type','date','specimen'];
    
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

    public function getDate(){
        $date = $this->date;

        $createDate = new DateTime($date);

        $strip = $createDate->format('Y-m-d');
        return $strip; // string(10) "2012-09-09"
    }
    public function getPickDate(){
        $date = $this->date;

        $createDate = new DateTime($date);

        $strip = $createDate->format('m/d/Y');
        return $strip; // string(10) "2012-09-09"
    }
}
