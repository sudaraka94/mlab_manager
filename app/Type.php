<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //fields
    protected $table='type';
    protected $fillable=['type','type_id'];
    protected $primaryKey='type_id';

    //functions
    public function getType(){
        return $this->type;
    }
    public function getId(){
        return $this->type_id;
    }
}
