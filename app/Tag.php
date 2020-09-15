<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table ='tags';
    protected $primaryKey ='id';
    protected $fillable =['name'];


    public function jobs(){
    	return $this->hasMany('App\Job');
    }
}
