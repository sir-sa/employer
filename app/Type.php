<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table ='types';
    protected $primaryKey ='id';
    protected $fillable =['name'];


    public function jobs(){
    	return $this->hasMany('App\Job');
    }

}
